<template>
<div class="row">
  <AppInput/>
  <div class="col">
    <GoogleMap :name="name" />
  </div>
</div>

</template>


<script>
import GoogleMap from '@/components/Maps.vue'
import AppInput from '@/components/Input.vue'
export default {
  components: {
    AppInput,
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
