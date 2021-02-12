<template>
  <div class="row container">
    <div class="col-lg-3 col-12 mx-auto cards">
      <img src="../assets/20210204_180854-removebg-preview.png" class="card-img-top img" alt="...">
      <a href="" class="buttons">Скачать резюме</a>
    </div>
    <div class="col-lg-8 col-12 mx-auto info">
      <h3>Привет, меня зовут Андрей.</h3>
      <h5>Я начинающий веб-разработчик</h5>
      <hr>
      <p>Мои навыки:</p>
      <span>- HTML, CSS, SASS, SCSS, Bootstrap <br>
            - Адаптивная верстка <br>
            - Javascript, Vue js <br>
            - PHP, MySQL <br>
            - Photoshop, Avocode, Figma <br>
            - Git <br>
            - Уровень Английского elementary </span>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
span {
  text-align: left;
  display: block;
}
.cards {
  margin-top: 20px;
  max-height: 380px;
  width: 18rem;

  display: block;

}
.img {
  margin-top: 5px;
}
.info {
  font-size: 20px;
  margin-top: 20px;
}

.buttons {
  text-decoration: none;
  display: inline-block;
  width: 140px;
  height: 45px;
  line-height: 45px;
  border-radius: 45px;
  margin: 0 auto;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 600;
  color: #524f4e;
  background: #efeeff;
  box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
  transition: .3s;
}
.buttons:hover {
  background: #2EE59D;
  box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
  color: white;
  transform: translateY(-7px);
}
</style>
