<template>
  <form class="container_form" @submit.prevent>
    <fieldset class="container container_fullname">
      <div class="photo" width="128" height="128"></div>

      <div class="wrapper">
        <label for="first_name">FIRST NAME:</label>
        <input id="first_name" name="first_name" />
      </div>

      <div class="wrapper">
        <label for="last_name">LAST NAME:</label>
        <input id="last_name" name="last_name" v-model="last_name" />
      </div>

      <div class="wrapper">
        <label for="middle_name">MIDDLE&nbsp;NAME:</label>
        <input id="middle_name" name="middle_name" v-model="middle_name" />
      </div>
    </fieldset>

    <fieldset class="container container_contacts">
      <div class="wrapper">
        <label for="id_enployee">ID:</label>
        <input
          id="id_enployee"
          name="id_enployee"
          v-model.number="id_enployee"
          disabled
        />
      </div>

      <div class="wrapper">
        <label for="born">BIRTH:</label>
        <input id="born" name="born" v-model="born" />
      </div>

      <div class="wrapper">
        <label for="gender">GENDER:</label>
        <select id="gender" v-model="gender">
          <option disabled value="">Please select one</option>
          <option>male</option>
          <option>female</option>
          <option selected>unknown</option>
        </select>
      </div>

      <div class="wrapper wrapper_email">
        <label for="email">EMAIL:</label>
        <input id="email" name="email" v-model="email" />
      </div>

      <div class="wrapper wrapper_phone">
        <label for="phone">PHONE:</label>
        <input id="phone" name="phone" v-model="telephone" />
      </div>

      <div class="wrapper" wrapper_mobile>
        <label for="mobile">MOBILE:</label>
        <input id="mobile" name="mobile" v-model="mobile" />
      </div>
    </fieldset>

    <fieldset class="container">
      <div class="wrapper">
        <label for="company">CITY:</label>
        <input id="city" name="city" v-model="city" />
      </div>

      <div class="wrapper">
        <label for="company">COMPANY:</label>
        <input id="company" name="company" v-model="company" />
      </div>

      <div class="wrapper">
        <label for="department">DEPATMENT:</label>
        <input id="department" name="department" v-model="department" />
      </div>

      <div class="wrapper">
        <label for="position">POSITION:</label>
        <input id="position" type="text" name="position" v-model="title" />
      </div>
    </fieldset>

    <fieldset class="container">
      <textarea placeholder="about..."></textarea>
    </fieldset>
  </form>
</template>

<script>
export default {
  isEditing: true,
};
</script>

<style scoped>
.container_form {
  display: grid;
  grid-template-columns: 128px ifr 1fr;
  gap: 20px;
  width: 80%;
  background-color: var(--vt-c-white-mute);
  padding: 40px;
  margin: 0 auto;
}

.container {
  display: grid;
  border: none;
  gap: 10px;
}
.container_fullname {
  grid-template-columns: 128px auto;
}

.photo {
  grid-row: 1/4;
  background-color: var(--vt-c-white-background);
  border-radius: 20%;
  padding: 20px;
}

.container_contacts {
  grid-template-columns: auto 1fr;
  gap: 20px;
}

label {
  display: grid;
  align-content: center;
}

select {
  appearance: none;
}

textarea {
  min-height: 60px;
  resize: none;
  white-space: pre-line;
}

.wrapper {
  display: grid;
  grid-template-columns: 90px 1fr;
}
</style>
