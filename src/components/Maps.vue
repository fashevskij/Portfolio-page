<template>
  <div class="container">
    <div class="google-map" :id="name"></div>
  </div>
</template>
,
<script>
export default {
  name: 'google-map',
  props: ['name'],
  data: function () {
    return {
      map: '',
      markers: [
        {
          position: {
            latitude: 48.47951287159899,
            longitude: 35.00172378654487
          }
        },
      ]
    }
  },
  computed: {
    mapMarkers: function () {
      return this.markers
    }
  },
  mounted: function () {
    /*eslint-disable */
    const element = document.getElementById(this.name)
    const options = {
      zoom: 12,
      center: new google.maps.LatLng(48.47951287159899, 35.00172378654487)
    }
    this.map = new google.maps.Map(element, options)

    this.markers.forEach((marker) => {
      const position = new google.maps.LatLng(marker.position.latitude, marker.position.longitude)
      marker.map = this.map
      marker.position = position
      new google.maps.Marker(marker)
    })
    /*eslint-enable */
  },
  methods: {
  }
}
</script>

<style scoped>
.google-map {
  width: 640px;
  height: 480px;
  margin: 20px auto;
  background: gray;
}
</style>
