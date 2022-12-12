<script setup>
import { useEmployeeStore } from "../../stores/EmployeeStore";
const EmployeeStore = useEmployeeStore();
</script>

<template>
  <div></div>
  <form class="container_form" @submit.prevent>
    <fieldset class="container container_fullname">
      <div class="photo" width="128" height="128"></div>

      <div class="wrapper">
        <label for="first_name">SURNAME:</label>
        <input id="first_name" name="first_name" :value="empl.first_name" />
      </div>

      <div class="wrapper">
        <label for="last_name">NAME:</label>
        <input id="last_name" name="last_name" :value="empl.last_name" />
      </div>

      <div class="wrapper">
        <label for="middle_name">PATRONYMIC:</label>
        <input id="middle_name" name="middle_name" :value="empl.middle_name" />
      </div>
    </fieldset>

    <fieldset class="container container_contacts">
      <div class="wrapper">
        <label for="id_enployee">ID:</label>
        <input id="id_enployee" name="id_enployee" :value="paramsId" disabled />
      </div>

      <div class="wrapper">
        <label for="born">BIRTH:</label>
        <input id="born" name="born" :value="empl.birthday" />
      </div>

      <div class="wrapper">
        <label for="gender">GENDER:</label>
        <input id="gender" name="gender" :value="empl.gender" />
      </div>

      <div class="wrapper wrapper_email">
        <label for="email">EMAIL:</label>
        <input id="email" name="email" :value="empl.email" />
      </div>

      <div class="wrapper wrapper_phone">
        <label for="phone">PHONE:</label>
        <input id="phone" name="phone" :value="empl.telephone" />
      </div>

      <div class="wrapper" wrapper_mobile>
        <label for="mobile">MOBILE:</label>
        <input id="mobile" name="mobile" :value="empl.mobile" />
      </div>
    </fieldset>

    <fieldset class="container">
      <div class="wrapper">
        <label for="company">CITY:</label>
        <input id="city" name="city" :value="empl.city" />
      </div>

      <div class="wrapper">
        <label for="company">COMPANY:</label>
        <input id="company" name="company" :value="empl.company" />
      </div>

      <div class="wrapper">
        <label for="department">DEPATMENT:</label>
        <input id="department" name="department" :value="empl.department" />
      </div>

      <div class="wrapper">
        <label for="position">POSITION:</label>
        <input id="position" type="text" name="position" :value="empl.title" />
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
  created() {
    // Id from the router (RouterLink in TheElem)
    this.paramsId = this.$route.params.id;

    //obj in EmployeeStore
    const empl = this.EmployeeStore.empls.find(
      (elem) => elem.id == this.paramsId
    );

    this.empl = empl;
  },
};
</script>

<style scoped>
.container_form {
  display: grid;
  grid-template-columns: 128px ifr 1fr;
  gap: 20px;
  max-width: 80%;
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
}

.container_contacts .wrapper:first-child,
.container_contacts .wrapper:nth-child(3),
.container_contacts .wrapper:nth-child(5) {
  margin-right: 60px;
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
