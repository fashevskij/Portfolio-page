<template>
  <div class="row mt-4">
    <div class="card m-4 cards" v-for="(card,index) in cards" @click="card.showTitle = !card.showTitle">
      <img v-if="card.showTitle" :src="getImgUrl(card.image)" class="card-img-top images" alt="...">
      <div v-else>
        <br>
        <p class="card-text"><span class="sp">Описание проекта: </span>{{card.text}}</p>
        <p class="card-text"><span class="sp">Технологии: </span>{{card.lang}}</p>
        <template v-if="typeof card.testLogin!=='undefined'">
          <p class="card-text"><span class="sp">Тестовый Логин: </span>{{card.testLogin}}</p>
          <p class="card-text"><span class="sp">Тестовый Пароль: </span>{{card.testPassword}}</p>
        </template>
        <template v-if="typeof card.testLoginA!=='undefined'">
          <p class="card-text"><span class="sp">Тестовый Логин Админа: </span>{{card.testLoginA}}</p>
          <p class="card-text"><span class="sp">Тестовый Пароль Админа: </span>{{card.testPasswordA}}</p>
        </template>
       <a class="btn buttons"  target="_blank" :href="card.btn">перейти</a>
        <a class="btn buttons"  target="_blank" :href="card.git">Git</a>
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
          title: "fish-game",
          image: "screencapture-fish-game.png",
          text: "Первое знакомство с Javascript, элементами DOM-дерева и событиями, на примере создания игры.",
          btn: "https://fish-game.fashevsky.ru/",
          lang: 'Javascript, CSS',
          git: 'https://github.com/fashevskij/Fish-game',
          showTitle: true,
        },
        {
          title: "Uber",
          image: "screencapture-ube.png",
          text: "Верстка по PSD макету (пк версия макета и мобильная)",
          btn: "https://uber.fashevsky.ru/",
          lang: 'HTML,SCSS,Javascript,Bootstrap',
          git: 'https://github.com/fashevskij/Uber-layout',
          showTitle: true,
        },
        {
          title: "heart-rate-monitor",
          image: "screencapture-heart-rate-monitor.png",
          text: "Верстка по макету (макет только для пк версии, адаптация выполнялась произвольно). В процессе поработал с плагинами Validate, WOW, Animate.css, Slick Slider, MaskedInput.",
          btn: "https://heart-rate-monitor.fashevsky.ru/",
          lang: 'HTML, SCSS, Gulp, PHP, jQuery',
          git: 'https://github.com/fashevskij/heart-rate-monitor-layout',
          showTitle: true,
        },

        {
          title: "Chat",
          image: "screencapture-chat.png",
          text: "Первое знакомство с PHP, базами данных MySQL, а так же cookies, на примере создания чата. ",
          btn: "https://chat.fashevsky.ru/",
          lang: 'PHP, MySql, JavaScript, AJAX',
          testLogin: 'user@gmail.com',
          testPassword: 'user',
          git: "https://github.com/fashevskij/chat",
          showTitle: true,
        },
        {
          title: "smart-stock",
          image: "screencapture-smart-stock.png",
          text: "Первая командная работа на курсах. Цель: Создание приложения для организации работы склада продукции. В данной работе реализована возможность разметки склада (только для Админа), прием товара и автоматическое размещение его с учетом габаритов на свободные полки, так же аналогично реализована отправка товара",
          btn: "https://smart-stock.fashevsky.ru/",
          lang: 'PHP, MySql, Bootstrap, JavaScript, AJAX',
          testLogin: 'user2',
          testPassword: 'user2',
          testLoginA: 'admin',
          testPasswordA: 'admin',
          git: 'https://github.com/fashevskij/Smart-stock',
          showTitle: true,
        },
        {
          title: "business-assistant",
          image: "screencapture-business-assistant.png",
          text: "Вторая командная работа на курсах.Цель: Создать платформу на которой можно разместить товары и услуги. В данном проекте реализовано автоматическое добавление на google maps, подтверждение регистрации через верификацию по email, оповещение о заказе телеграмм ботом, личный кабинет с возможностью смены имени и пароля, комментариев к товару, и оформление заказа и админка.",
          btn: "http://business-assistant.annazubenko.ru",
          lang: 'PHP, MySql, Bootstrap, JavaScript, AJAX',
          testLogin: 'user@gmail.com',
          testPassword: 'user',
          testLoginA: 'Admin@mail.ru (в панеле бизнес)',
          testPasswordA: 'admin',
          git: 'https://github.com/fashevskij/business-assistant',
          showTitle: true,
        },
        {
          title: "ncs",
          image: "screencapture-ncs.png",
          text: "Реальный заказ, совместный проект. Главной задачей было создание веб-приложения для колеровки доступное через браузер. Создана тестовая версия которая выводит данные о рецептурах для двух клеровочных машин, подсчитывает цену с учетом входящих компонентов.",
          btn: "https://ncs.fashevsky.ru/",
          lang: 'PHP, MySql, Bootstrap, JavaScript, AJAX',
          testLogin: 'user@gmail.com',
          testPassword: 'user',
          git: 'https://github.com/fashevskij/ncs',
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

  font-size: 15px;
  font-weight: bold;
  color: darkslategrey;
}

@media (max-width: 1025px) {
  .cards {
    width: 90%;
    height: 200px;
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
.buttons {
  line-height: 32px;
}
span {
  font-weight: bolder;
}
</style>
