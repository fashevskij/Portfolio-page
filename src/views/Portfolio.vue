<template>
  <div class="row mt-4">
    <div class="card m-4 cards" v-for="(card,index) in cards" @click="card.showTitle = !card.showTitle">
      <img v-if="card.showTitle" :src="getImgUrl(card.image)" class="card-img-top images" alt="...">
      <div v-else>
        <br>
        <p class="card-text"><span class="sp">Описание проекта: </span>{{card.text}}</p>
        <p class="card-text"><span class="sp">Технологии: </span>{{card.lang}}</p>
        <button class="btn buttons" ><a target="_blank" :href="card.btn">перейти</a></button>
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
          title: "Uber",
          image: "screencapture-ube.png",
          text: "Верстка по макету (пк версия макета и мобильная)",
          btn: "https://uber.fashevsky.ru/",
          lang: 'HTML,SCSS,Javascript',
          showTitle: true,
        },
        {
          title: "heart-rate-monitor",
          image: "screencapture-heart-rate-monitor.png",
          text: "Верстка по макету (был макет только для пк версии, адаптировал на свое усмотрение)",
          btn: "https://heart-rate-monitor.fashevsky.ru/",
          lang: 'HTML, SCSS, Gulp',
          showTitle: true,
        },
        {
          title: "fish-game",
          image: "screencapture-fish-game.png",
          text: "Первое знакомство с Javascript. Познакомился в процессе создания игры с DOM деревом",
          btn: "https://fish-game.fashevsky.ru/",
          lang: 'Javascript',
          showTitle: true,
        },
        {
          title: "Chat",
          image: "screencapture-chat.png",
          text: "Первое знакомство с PHP и базами данных MySql на примере создания чата. ",
          btn: "https://chat.fashevsky.ru/",
          lang: 'PHP, MySql, JavaScript, AJAX',
          showTitle: true,
        },
        {
          title: "smart-stock",
          image: "screencapture-smart-stock.png",
          text: "Первая командная работа на курсах. В данной работе реализована возможность разметки склада, прием товара и автоматическое размещение его с учетом габаритов на свободные полки, так же аналогично реализована отправка товара",
          btn: "https://smart-stock.fashevsky.ru/",
          lang: 'PHP, MySql, Bootstrap, JavaScript, AJAX',
          showTitle: true,
        },
        {
          title: "ncs",
          image: "screencapture-ncs.png",
          text: "Реальный заказ на данный момент находиться на паузе.Главной задачей было создание веб-приложения для колеровки доступное через браузер.Была создана тест версия которая выводит данные о рецептурах для двух клеровочных машин, подсчитывает цену с учетом входящих компонентов",
          btn: "https://ncs.fashevsky.ru/",
          lang: 'PHP, MySql, Bootstrap, JavaScript, AJAX',
          showTitle: true,
        },
        {
          title: "business-assistant",
          image: "screencapture-business-assistant.png",
          text: "Вторая командная работа на курсах.Идея заключалась в создании платформы на которой можно разместить товары и услуги. В данном проекте реализовано автоматическое добавление на google maps, подтверждение регистрации через верификацию по email, оповещение о покупке телеграмм ботом, личный кабинет с возможностью смены имени, и пароля, комментариев к товару, и оформление заказа и админка.",
          btn: "http://business-assistant.annazubenko.ru",
          lang: 'PHP, MySql, Bootstrap, JavaScript, AJAX',
          showTitle: true,
        },
      ]
    }
  },
  methods: {
    getImgUrl(image) {
      return require('@/assets/' + image);
    },
  }

}
</script>

<style scoped>
.cards {
  width: 40%;
  border-radius: 20px;
  background-color: ivory;
  cursor: pointer;
  height: 300px;
  overflow-y: scroll;
  margin-left: 30%;

}
.images {
  margin: 0 auto;
  background: yellow;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%)
}
.card-text{
  text-align: center;
}
.sp{
  font-size: 20px;
  font-weight: bold;
  color: darkslategrey;
}

@media (max-width: 1000px) {
  .cards {
    width: 80%;
  }
}
.cards::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color:#4caf50d4;
}

.cards::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

.cards::-webkit-scrollbar
{
  width: 8px;
  background-color: #F5F5F5;
}

.cards::-webkit-scrollbar-thumb
{
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #D62929;
}
button {
  height: 56px;
}

</style>
