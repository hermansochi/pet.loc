import { defineStore } from "pinia";
export const useEmployeeStore = defineStore("EmployeeStore", {
  state: () => ({
    empls: [
      {
        id: 1,
        name: "Alexandrov.H.976b48f0-7fd3-4d03-82ce-395ddeafe5d5",
        hide: true,
        thumbnail: true,
        gender: "m",
        first_name: "Герман",
        last_name: "Александров",
        middle_name: "Евгеньевич",
        birthday: "25.01",
        email: "hermansochi@ya.ru",
        cn: "Александров Герман Евгеньевич",
        telephone: "6677",
        mobile: "9899001010",
        title: "Web developer",
        department: "Dream team",
        company: "Looking for a job",
        city: "Сочи",
        created_at: "2022-10-11T12:19:10.000000Z",
        updated_at: "2022-10-11T12:19:10.000000Z",
      },
      {
        id: 2,
        name: "K.Romanova",
        hide: false, // status
        thumbnail: true, // img ?
        gender: "f",
        first_name: "Клеопатра",
        last_name: "Ивановна",
        middle_name: "Романова",
        birthday: "0202",
        email: "K.Romanova@ya.ru",
        cn: "Романова Клеопатра Ивановна",
        telephone: "2222",
        mobile: "92222222222",
        title: "doctor",
        department: "Dream team",
        company: "Looking for a job",
        city: "Сочи",
        created_at: "2022-10-11T12:19:10.000000Z",
        updated_at: "2022-10-11T12:19:10.000000Z",
      },
    ],
  }),
});
