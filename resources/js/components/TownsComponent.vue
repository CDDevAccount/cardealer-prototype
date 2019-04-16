<template>
    <div>
      <GmapMap :center="{lat:53.764213, lng:1.049}" :zoom="6" map-type-id="terrain" style="width: 450px; height: 350px">
        <gmap-info-window :options="infoOptions" :position="infoPosition" :opened="infoOpened" @closeclick="infoOpened=false">
          {{infoContent}}
        </gmap-info-window>
        <GmapMarker :key="index" v-for="(town, index) in towns" :position="getPosition(town)" :clickable="true" :draggable="true" @click="toggleInfo(town, index)" />
      </GmapMap>
    </div>
</template>

<script>
    export default {
        mounted() {
          console.log('Component mounted.')
          axios
            .get('/get-city-list')
            .then(response => (this.towns = response.data.towns))
            .catch(error => {
              console.log(error)
              this.errored = true
            })
            .finally(() => this.loading = false)
        },
        data() {
          return {
            towns: null,
            infoPosition: null,
            infoContent: null,
            infoOpened: false,
            infoUrl:null,
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
          getPosition: function(town) {
            return {
              lat: parseFloat(town.latitude),
              lng: parseFloat(town.longitude)
            }
          },
          toggleInfo: function(town, key) {
            this.infoPosition = this.getPosition(town)
            this.infoContent = town.town
            this.infoUrl=town.town_slug
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