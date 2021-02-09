<template>
  <div class="row mt-5">
    <div class="card m-2" style="width: 18rem;" v-for="card in cards">
      <img src="" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ card.title }}</h5>
        <p class="card-text">{{ card.text }}</p>
        <a href="#" class="btn btn-primary">{{ card.btn }}</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cards:[
        {
          title: "1",
          photo: '',
          text: '1',
          btn: '1',
        },
        {
          title: "2",
          photo: '',
          text: '2',
          btn: '2',
        },
        {
          title: "3",
          photo: '',
          text: '3',
          btn: '3',
        },
        {
          title: "4",
          photo: '',
          text: '4',
          btn: '4',
        },
        {
          title: "5",
          text: '5',
          btn: '5',
        }
      ]
    }
  }
}
</script>

<style scoped>

</style>
