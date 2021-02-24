<template>
  <div class="modal-content modals m-2">
    <div class="modal-body">
      Ваше сообщение успешно отправлено!
      Спасибо <span>{{ name }}</span>
    </div>
  </div>
</template>

<script>
export default {
  props: ['name'],

}

</script>

<style scoped>
.modals {
  text-align: center;
  border-radius: 10px;
  font-size: 16px;
  background-color: ivory;
}
span {
  color: darkkhaki;
}
</style>
