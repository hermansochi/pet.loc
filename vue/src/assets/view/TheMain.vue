<script setup>
import TheHeader from "../../components/TheHeader.vue";
import TheElem from "../../components/TheElem.vue";

import { useEmployeeStore } from "../../stores/EmployeeStore";
const EmployeeStore = useEmployeeStore();
</script>

<template>
  <TheHeader />
  <TheElem
    v-for="(employee, index) in employees"
    :key="index"
    :employee="employee"
    @delEmpl="deleteEmployee(index)"
  />

  <h2 class="message" v-if="employees.length === 0">Список сотрудников пуст</h2>
</template>

<script>
export default {
  data() {
    return {
      employees: [],
    };
  },
  created() {
    this.employees = this.EmployeeStore.empls;
    // console.log(this.EmployeeStore.empls);
    // console.log(this.employees);
  },
  methods: {
    deleteEmployee(index) {
      this.employees.splice(index, 1);
    },
  },
};
</script>
<style scoped>
.message {
  color: var(--vt-c-grey-font);
  text-align: center;
  margin: 40px 0;
}
</style>
