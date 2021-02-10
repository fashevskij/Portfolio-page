<template>
  <div class = "footer-menu">
    <div class = "footer-container">
      <ul>
        <li> <a href=""> Linkedin </a></li>
        <li> <a href=""> GitHub </a></li>
        <li> <a href=""> Telegram </a></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<style scoped>
.footer-menu{
  margin-top: 40px;
  padding: 20px;
  box-shadow: 0 0px 10px #ccc;
  background-color: #fff;
}
.footer-container{
  width: 70%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.footer-menu ul li{
  display:inline-block;
}
.footer-menu ul li a{
  color:#6E6E6E;
  margin:0 1em;
  font-size:1.2rem;
  text-decoration:none;
}
.footer-menu ul li a:hover{
  color:#EE7B00;
}
p.copy-right{
  font-size:1em;
}
p.copy-right a{
  color:#D46E00;
  text-decoration:none;
}
p.copy-right a:hover{
  color:#25221C;
}
</style>
