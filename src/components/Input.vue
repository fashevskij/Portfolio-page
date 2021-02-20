<template>
    <form class="col-md-4" @submit.prevent="submitForm">
      <div class="mb-3">
        <label class="form-label"></label>
        <input @blur="$v.name.$touch()"  type="text"  v-model.trim="name" placeholder="NAME" class="form-control" required>
        <div class="invalid" v-if="$v.name.$invalid">От 3-х до 10 букв </div>
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <input @blur="$v.email.$touch()" type="email" id="email" v-model.trim="email"  placeholder="EMAIL" class="form-control">
        <div class="invalid" v-if="$v.email.$invalid">Формат name@domain.com</div>
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <textarea @blur="$v.caps.$touch()"  v-model="caps" placeholder="MESSAGE" class="form-control" required></textarea>
        <div class="invalid" v-if="$v.caps.$invalid">Не меньше 3-х символов</div>
      </div>
      <button type="submit" class="btn btn-primary send" :disabled="$v.$invalid">Отправить</button>
    </form>
</template>

<script>
import { email, minLength,maxLength, alpha, required} from 'vuelidate/lib/validators'
export default {

  data() {
    return {
      name: '',
      email: '',
      caps: '',
      response: '',
    }
  },
  validations: {
    name:{required, minLength: minLength(3), maxLength: maxLength(10),alphas: val => /^[a-zA-Zа-яА-ЯёЁ'][a-zA-Z-а-яА-ЯёЁ' ]+[a-zA-Zа-яА-ЯёЁ']*$/i.test(val)},
    email:{email,required},
    caps:{required,minLength: minLength(3)}
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
  height: 150px;
}
.invalid{
  color: gray;
  height: 0px;
  font-family: "Droid Serif";
}
.send {
  margin-top: 8px;
}
</style>
