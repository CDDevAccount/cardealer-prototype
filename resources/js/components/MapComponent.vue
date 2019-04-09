<template>
<section v-if="errored">
    <p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
  </section>

  <section v-else>
    <div v-if="loading">Loading...</div>
    <div v-else>
			<GmapMap
			  :center="{lat:52.637, lng:1.2868}"
			  :zoom="10"
			  map-type-id="terrain"
			  style="width: 450px; height: 350px"
			>

			<gmap-info-window :options="infoOptions" :position="infoPosition" :opened="infoOpened" @closeclick="infoOpened=false">
			        {{infoContent}}
			</gmap-info-window>

			<GmapMarker :key="index" v-for="(m, index) in markers" :position="getPosition(m)" :clickable="true" :draggable="true"  @click="toggleInfo(m, index)"  />


			</GmapMap>
	</div>
	</section>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            axios
      		.get('/map')
      		.then(response => (this.markers = response.data.markers))
		    .catch(error => {
		        console.log(error)
		        this.errored = true
		      })
		      .finally(() => this.loading = false)
        },
        data() {
            return {

			    markers: null,
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
	      return {
	        lat: parseFloat(marker.latitude),
	        lng: parseFloat(marker.longitude)
	      }
	    },
	    toggleInfo: function(marker, key) {
	      this.infoPosition = this.getPosition(marker)
	      this.infoContent = marker.name
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