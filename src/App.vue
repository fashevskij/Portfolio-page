<template>
  <div id="app" class="container" @onresize="">
    <div id="nav" class="navbar navbar-light" v-if="itemSize > 570">
      <div class="mx-4" >
        <router-link  v-for="obj in btn" :key='obj.key' :to="obj.linkTo" class="navigation"> {{obj.name}}</router-link>
      </div>

    </div>
    <div v-if="itemSize < 570" id="nav" class="minHeader" >
      <span @click="show = !show"><img  class="img" src="@/assets/icons8-menu.png" alt="images">
      </span>

      <router-link v-if="show" v-for="obj in btn" :key='obj.key' :to="obj.linkTo" class="navigation" ><img  @click="show = false" class="img" :src="getImgUrl(obj.image)"
                                                                                                            alt="img"></router-link>
    </div>
    <router-view/>
    <AppFooter/>

  </div>
</template>

<script>
import AppFooter from '@/components/Footer'
export default {
  components: {
    AppFooter
  },
  data() {
    return {
      itemSize: 0,
      show: false,
      btn: [
        {
          name: 'Главная',
          key: 'home',
          linkTo: '/',
          image: 'icons8-home.png'
        },
        {
          name: 'Мои работы',
          key: 'portfolio',
          linkTo: '/portfolio',
          image: 'icons8-behance.png'
        },
        {
          name: 'Контакты',
          key: 'contact',
          linkTo: '/contact',
          image: 'icons8-contact.png'
        }
      ]
    }
  },

  methods: {
    getImgUrl(image) {
      return require('@/assets/' + image);
    },
    onResize() {
      this.itemSize = document.documentElement.clientWidth;
    },
  },
  created() {
    window.addEventListener('resize', this.onResize);
    this.onResize();
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.onResize);
  },
}
</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  border-radius: 20px;
  padding: 20px;
  background: #efeeff;
}


#nav {

  border-radius: 20px;
  background: ivory;
}
#nav a {
  font-size: 25px;
}
 a {
  font-weight: bold;
  font-size: 15px;
  color: #009178;
  text-decoration: none;

}
.minHeader{
  margin: 0 auto;
  position: fixed;
  z-index: 2;

}
#nav a.router-link-exact-active {
  color: #42b983;
}
.navbar {
  background-color: #1cfff8;
}
.navigation {
  margin-left: 20px;
}
.img:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
  -moz-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  -webkit-transition: all 0.5s ease-out;
}

</style>
