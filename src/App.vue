<template>
  <div id="app" class="container" @onresize="">
    <div id="nav" class="navbar navbar-light" v-if="itemSize > 570">
      <div class="mx-4" >
        <router-link  v-for="obj in btn" :key='obj.key' :to="obj.linkTo" class="navigation"> {{obj.name}}</router-link>
      </div>
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
      btn: [
        {
          name: 'Главная',
          key: 'home',
          linkTo: '/'
        },
        {
          name: 'Мои работы',
          key: 'portfolio',
          linkTo: '/portfolio'
        },
        {
          name: 'Контакты',
          key: 'contact',
          linkTo: '/contact'
        }
      ]
    }
  },

  methods: {
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
  padding: 10px;
  border-radius: 20px;
  background: ivory;
}

#nav a {
  font-weight: bold;
  font-size: x-large;
  color: #009178;
  text-decoration: none;

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


</style>
