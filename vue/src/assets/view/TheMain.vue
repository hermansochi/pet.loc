<script setup>
import TheHeader from "../../components/TheHeader.vue";
import TheElem from "../../components/TheElem.vue";

import { useEmplStore } from "../../stores/EmplStore";
const EmplStore = useEmplStore();
</script>

<template>
  <TheHeader />
  <TheElem
    v-for="(employee, index) of employees"
    :key="index"
    :employee="employee"
    @delEmpl="deleteEmpl(index)"
  />

  <h2 class="message">{{ showMessage }}</h2>
</template>

<script>
export default {
  data() {
    return {
      employees: [],
    };
  },
  created() {
    //  console.log(this.EmplStore.getEmplTelephone);
    this.employees = this.EmplStore.empls;
  },

  computed: {
    showMessage() {
      return this.employees.length === 0 ? "Список сотрудников пуст" : "";
    },
  },

  methods: {
    deleteEmpl(index) {
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
