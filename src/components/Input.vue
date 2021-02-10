<template>
    <form class="col-md-4">
      <div class="mb-3">
        <label class="form-label"></label>
        <input id="name" type="text" name="your-name" placeholder="NAME" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <input id="contact-email" type="email" name="your-email" placeholder="EMAIL" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <textarea id="message" name="your-message" placeholder="MESSAGE" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
export default {
  name: "Input"
}
</script>

<style scoped>
form {
  margin-top: 30px;
}
</style>
