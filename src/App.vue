<template>
  <div id="app" class="container">
    <div id="nav" class="navbar navbar-light">
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
      <router-link to="/contact">Contact</router-link>
      <router-link to="/portfolio">Portfolio</router-link>
    </div>
    <router-view class="v"/>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background-color: darkslategrey;
  border-radius: 20px;
  padding: 20px;
}

#nav {
  padding: 30px;

  border-radius: 20px;
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
</style>
