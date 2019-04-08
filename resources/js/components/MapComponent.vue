<template>
<GmapMap
  :center="{lat:52.637, lng:1.2868}"
  :zoom="10"
  map-type-id="terrain"
  style="width: 500px; height: 300px"
>
<gmap-info-window :options="infoOptions" :position="infoPosition" :opened="infoOpened" @closeclick="infoOpened=false">
        {{infoContent}}
      </gmap-info-window>
<GmapMarker
    :key="index"
    v-for="(m, index) in markers"
    :position="getPosition(m)"
    :clickable="true"
    :draggable="true"
    @click="toggleInfo(m, index)"
  />


</GmapMap>

</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
			    markers:{
			      0: {
			        full_name: 'Spencers Car Sales',
			        lat: '52.672139',
			        lng: '1.374386'
			      },
			      1: {
			        full_name: 'Norfolk Motor Group Suzuki',
			        lat: '52.657238',
			        lng: '1.285073'
			      },
			      2: {
			        full_name: 'Walters Motor Group (Norwich)',
			        lat: '52.640155',
			        lng: '1.2781'
			      }
			    },
			        infoPosition: null,
    infoContent: null,
    infoOpened: false,
    infoCurrentKey: null,
    infoOptions: {
      pixelOffset: {
        width: 0,
        height: -35
      }
    },
    		};

          },
          methods: {
		    getPosition: function(marker) {
		    console.log('Setting Position.')
		      return {
		        lat: parseFloat(marker.lat),
		        lng: parseFloat(marker.lng)
		      }
		    },
		    toggleInfo: function(marker, key) {
		      this.infoPosition = this.getPosition(marker)
		      this.infoContent = marker.full_name
		      if (this.infoCurrentKey == key) {
		        this.infoOpened = !this.infoOpened
		      } else {
		        this.infoOpened = true
		        this.infoCurrentKey = key
		      }
    		}
  }


    }
</script>