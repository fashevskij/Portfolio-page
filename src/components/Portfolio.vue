<template>
  <div class="row mt-4">
    <div class="card m-4 cards" v-for="(card,index) in cards" @click="card.showTitle = !card.showTitle">
      <img v-if="card.showTitle" :src="getImgUrl(card.image)" class="card-img-top img" alt="...">
      <div v-else>
      <p class="card-text">{{card.text}}</p>
        <button class="btn btn-dark">{{card.btn}}</button>
      </div>
      <div class="card-body">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cards: [
        {
          title: "1",
          image: "samsungS10.jpg",
          text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          btn: "1",
          showTitle: true,
        },
        {
          title: "2",
          image: "note-10lite.jpg",
          text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          btn: "2",
          showTitle: true,
        },
        {
          title: "3",
          image: "s20ultra.jpg",
          text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          btn: "3",
          showTitle: true,
        },
        {
          title: "4",
          image: "galaxya71.jpg",
          text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          btn: "4",
          showTitle: true,
        },
        {
          title: "5",
          image: "note-10lite.jpg",
          text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          btn: "5",
          showTitle: true,
        }
      ]
    }
  },
  methods: {
    getImgUrl(image) {
      return require('../assets/' + image);
    },
  }

}
</script>

<style scoped>
.cards {
  width: 18rem;
  border-radius: 20px;
  background-color: ivory;
  cursor: pointer;
}
.img {
  margin-top: 20px;
  border-radius: 10px;
}
</style>
