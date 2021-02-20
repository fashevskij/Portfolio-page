<template>
    <form class="col-md-4" @submit.prevent="submitForm">
      <div class="mb-3">
        <label class="form-label"></label>
        <input id="name" type="text" name="your-name" v-model="name" placeholder="NAME" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <input id="contact-email" type="email" v-model="email" name="your-email" placeholder="EMAIL" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <textarea id="message" name="your-message" v-model="caps" placeholder="MESSAGE" class="form-control" required></textarea>
      </div>
      <button type="submit" name="send" class="btn btn-primary">Отправить</button>
    </form>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      email: '',
      caps: '',
      response: '',
    }
  },
  methods: {
    submitForm() {
      axios.post('//fashevsky.ru/php/mail.php', {
        name: this.name,
        email: this.email,
        caps: this.caps
      })
    }
  }
}
</script>

<style scoped>
form {
  margin-top: 30px;
}
textarea {
  height: 160px;
}
</style>
