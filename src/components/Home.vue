<template>
  <div class="row container">
    <div class="col-lg-3 col-12 mx-auto cards">
      <img src="../assets/photoCV.png" class="card-img-top images" alt="...">
      <a target="_blank" href="https://drive.google.com/file/d/1SUlL30i9_982JbBj6VjjpVSRXzbAjHHz/view?usp=sharing" class="buttons">Скачать резюме</a>
    </div>
    <div class="col-lg-8 col-12 mx-auto info">
      <h3>Привет, меня зовут Андрей.</h3>
      <h5>Я начинающий веб-разработчик</h5>
      <hr>
      <p>Мои навыки:</p>
      <span>- HTML, CSS, SASS, SCSS, Bootstrap <br>
            - Адаптивная верстка <br>
            - JavaScript, Vue.js <br>
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
.images {
  margin-top: 5px;
  height: 300px;
  width: 200px;
}
.info {
  font-size: 20px;
  margin-top: 20px;
}


</style>
