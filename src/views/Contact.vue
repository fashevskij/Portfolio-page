<template>
  <div class="row">
      <AppForm/>
    <div class="col">
      <GoogleMap :name="name" />
    </div>
  </div>
</template>


<script>
import GoogleMap from '@/components/Maps.vue'
import AppForm from '@/components/Form.vue'
export default {
  components: {
    AppForm,
    GoogleMap
  },
  data() {
    return {
      name: 'map'
    }
  }
}
</script>

<style scoped>

</style>
