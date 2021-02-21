<template>
  <div class="container">
    <div class="google-map col" :id="name"></div>
  </div>
</template>

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
    const element = document.getElementById(this.name)
    const options = {
      zoom: 11,
      center: new google.maps.LatLng(48.47951287159899, 35.00172378654487)
    }
    this.map = new google.maps.Map(element, options)

    this.markers.forEach((marker) => {
      const position = new google.maps.LatLng(marker.position.latitude, marker.position.longitude)
      marker.map = this.map
      marker.position = position
      new google.maps.Marker(marker)
    })
  },
  methods: {
  }
}
</script>

<style scoped>
.google-map {
  width: 100%;
  height: 400px;
  margin: 20px auto;
  background: gray;
}
</style>
