<script setup>
import { RouterLink } from "vue-router";
import IconDelete from "./IconDelete.vue";
import IconFullinfo from "./IconFullinfo.vue";
</script>

<template>
  <ul class="container_employee">
    <li class="photo"></li>

    <li class="full_name">
      {{ employee.cn }}
    </li>

    <li class="position">{{ employee.title }}</li>
    <li class="email">{{ employee.email }}</li>
    <li class="phone">{{ employee.telephone }}</li>

    <li class="employee_status" :class="{ active: employee.hide }">
      {{ getEmployeeStatus }}
    </li>
    <li>
      <RouterLink to="/card">
        <button type="button" class="btn_fullInfo">
          <IconFullinfo />
        </button>
      </RouterLink>
    </li>
    <li>
      <button
        type="button"
        class="btn_delete"
        @click="this.$emit('delEmpl', this.employee)"
      >
        <IconDelete />
      </button>
    </li>
  </ul>
</template>

<script>
export default {
  props: {
    employee: {
      id: [Number, String],
      name: String,
      hide: Boolean,
      thumbnail: Boolean,
      gender: String,
      first_name: String,
      last_name: String,
      middle_name: String,
      birthday: [Number, String],
      email: String,
      cn: String,
      telephone: [Number, String],
      mobile: [Number, String],
      title: String,
      department: String,
      company: String,
      city: String,
      created_at: String,
      updated_at: String,
    },
  },

  computed: {
    getEmployeeStatus() {
      return this.employee.hide == true ? "online" : "offline";
    },
  },
};
</script>

<style scoped>
.container_employee {
  display: grid;
  grid-template-columns: 5% 25% 19% 20% auto 12% 3% 3%;
  gap: 10px;
  line-height: 1.6;
  align-items: center;
  justify-items: center;
  list-style: none;
  border-radius: 8px;
  background-color: var(--vt-c-white-mute);
  padding: 10px;
}

.photo {
  width: 35px;
  height: 35px;
  background-color: var(--vt-c-grey-light);
  border-radius: 10%;
  margin-right: 10px;
}

.full_name {
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}

.employee_status {
  display: flex;
  justify-content: center;
  width: 30%;
  color: var(--vt-c-white);
  font-size: 12px;
  line-height: 15px;
  opacity: 0.6;
  background-color: var(--vt-c-grey-silver);
  border-radius: 17px;
  padding: 3px 8px;
}

.active {
  background-color: var(--vt-c-active-btn);
}
</style>
