import { defineStore } from "pinia";
export const useEmployeeStore = defineStore("EmployeeStore", {
  state: () => ({
    empls: [
      {
        id: 1,
        hide: true,
        thumbnail: true,
        gender: "m",
        first_name: "Герман",
        last_name: "Александров",
        middle_name: "Евгеньевич",
        birthday: "25.01",
        email: "hermansochi@ya.ru",
        telephone: "6677",
        mobile: "9899001010",
        title: "Web developer",
        department: "Dream team",
        company: "Looking for a job",
        city: "Сочи",
      },
    ],
  }),
});
