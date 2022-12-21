<script setup>
import { useEmplStore } from "../../stores/EmplStore";
const EmplStore = useEmplStore();
</script>

<template>
  <form class="container_form">
    <fieldset class="container container_fullname">
      <div class="photo" width="128" height="128"></div>

      <div class="wrapper">
        <label for="last_name">SURNAME:</label>
        <input
          id="last_name"
          name="last_name"
          ref="last_name"
          v-model="empl.last_name"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper">
        <label for="first_name">NAME:</label>
        <input
          id="first_name"
          name="first_name"
          v-model="empl.first_name"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper">
        <label for="middle_name">PATRONYMIC :</label>
        <input
          id="middle_name"
          name="middle_name"
          v-model="empl.middle_name"
          :disabled="disabled"
        />
      </div>
    </fieldset>

    <fieldset class="container container_contacts">
      <div class="wrapper">
        <label for="id_employee">ID:</label>
        <input
          id="id_employee"
          name="id_employee"
          v-model="paramsId"
          :disabled="true"
        />
      </div>

      <div class="wrapper wrapper_phone">
        <label for="phone">PHONE:</label>
        <input
          id="phone"
          name="phone"
          v-model="empl.telephone"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper">
        <label for="gender">GENDER:</label>
        <select id="gender" v-model="empl.gender" :disabled="disabled">
          <option>male</option>
          <option>female</option>
          <option>unknown</option>
        </select>
      </div>

      <div class="wrapper wrapper_email">
        <label for="email">EMAIL:</label>
        <input
          id="email"
          name="email"
          v-model="empl.email"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper">
        <label for="born">BIRTH:</label>
        <input
          id="born"
          name="born"
          v-model="empl.birthday"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper" wrapper_mobile>
        <label for="mobile">MOBILE:</label>
        <input
          id="mobile"
          name="mobile"
          v-model="empl.mobile"
          :disabled="disabled"
        />
      </div>
    </fieldset>

    <fieldset class="container">
      <div class="wrapper">
        <label for="company">CITY:</label>
        <input id="city" name="city" v-model="empl.city" :disabled="disabled" />
      </div>

      <div class="wrapper">
        <label for="company">COMPANY:</label>
        <input
          id="company"
          name="company"
          v-model="empl.company"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper">
        <label for="department">DEPATMENT:</label>
        <input
          id="department"
          name="department"
          v-model="empl.department"
          :disabled="disabled"
        />
      </div>

      <div class="wrapper">
        <label for="position">POSITION:</label>
        <input
          id="position"
          type="text"
          name="position"
          v-model="empl.title"
          :disabled="disabled"
        />
      </div>
    </fieldset>

    <button
      type="button"
      class="button btn_edit"
      @click="sendUpdateEmplToStore"
    >
      Edit employee
    </button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      index: 1,
      disabled: true,
    };
  },

  created() {
    // Id from the router (RouterLink in TheElem)
    this.paramsId = this.$route.params.id;

    //obj in EmplStore
    const empl = this.EmplStore.empls.find((elem, index) => {
      if (elem.id == this.paramsId) {
        this.index = index;
        return true;
      }
      return false;
    });

    this.empl = empl;
  },
};
</script>

<style scoped>
.container_form {
  display: grid;
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

.wrapper {
  display: grid;
  grid-template-columns: 88px auto;
  align-content: center;
}

.container_fullname {
  grid-template-columns: 148px auto;
}

.photo {
  grid-row: 1/4;
  background-color: var(--vt-c-white-background);
  border-radius: 20%;
  margin-right: 20px;
}

.container_contacts {
  display: grid;
  grid-template-columns: 280px 1fr;
}

select {
  appearance: none;
}

textarea {
  resize: none;
  white-space: pre-line;
}

.btn_edit {
  justify-self: end;
  margin: 10px;
}
</style>
