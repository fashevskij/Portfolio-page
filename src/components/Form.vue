<template>
    <form class="col-md-4" @submit.prevent="submitForm">
      <template v-if="btn === true">
      <app-modal :name="name" :email="email" :mess="mess"></app-modal>
      </template>
      <template v-else>
      <div class="mb-3">
        <label class="form-label"></label>
        <input @blur="$v.name.$touch()"  type="text"  v-model.trim="name" placeholder="NAME" class="form-control" required>
        <div class="invalid" v-if="$v.name.$invalid">От 2-х до 10 букв </div>
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <input @blur="$v.email.$touch()" type="email" id="email" v-model.trim="email"  placeholder="EMAIL" class="form-control">
        <div class="invalid" v-if="$v.email.$invalid">Формат name@domain.com</div>
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <textarea @blur="$v.mess.$touch()"  v-model="mess" placeholder="MESSAGE" class="form-control" required></textarea>
        <div class="invalid" v-if="$v.mess.$invalid">Поле не должно быть пустым</div>
      </div>
      <button type="submit" class="btn btn-primary buttons" data-bs-toggle="modal" data-bs-target="#exampleModal" :disabled="$v.$invalid" @click="btn = true">Отправить</button>
</template></form>
</template>

<script>
import { email, minLength,maxLength,required} from 'vuelidate/lib/validators'
import AppModal from '@/components/Modal'
export default {
components: {
  AppModal
},
  data() {
    return {
      name: '',
      email: '',
      mess: '',
      btn: 'false'
    }
  },
  validations: {
    name:{required, minLength: minLength(2), maxLength: maxLength(10),alphas: val => /^[a-zA-Zа-яА-ЯёЁ'][a-zA-Z-а-яА-ЯёЁ' ]+[a-zA-Zа-яА-ЯёЁ']*$/i.test(val)},
    email:{email,required},
    mess:{required}
  },
  methods: {
    submitForm() {
      axios.post('//fashevsky.ru/php/mail.php', {
        name: this.name,
        email: this.email,
        mess: this.mess
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
.buttons {
  margin-top: 10px;
  height: 36px;
  line-height: 0;
}
.buttons span{


}
</style>
