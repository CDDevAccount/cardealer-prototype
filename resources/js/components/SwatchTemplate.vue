<template>
  <div>
    <swatches v-model="color"></swatches>
  </div>
</template>

<script>
  import Swatches from 'vue-swatches'

  // Import the styles too, globally
  import "vue-swatches/dist/vue-swatches.min.css"

  export default {
    components: { Swatches }, // window.VueSwatches.default - from CDN
    data () {
      return {
        color: '#1CA085'
      }
    }
  }
</script>