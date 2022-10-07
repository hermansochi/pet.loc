import React from "react";
import SvgComponent from "./SvgComponent";

export default function User() {
  const defaultUser = {
    birthday: "09.09",
    city: "Москва",
    cn: "Фёдоров Тарас Сергеевич",
    company: 'ООО "РогаРадио"',
    createdAt: "2022-10-06T10:33:01.000000Z",
    department: "Управление бухгалтерского учета",
    email: "Fyodorov.T@example.ru",
    firstName: "Тарас",
    gender: "m",
    hide: false,
    id: "976f8593-64ae-4f89-8a27-934893b82823",
    lastName: "Фёдоров",
    middleName: "Сергеевич",
    mobile: "9894881197",
    name: "Fyodorov.T.21576620-6de5-38c0-87ee-c06edf5b4579",
    telephone: "9007",
    thumbnail: false,
    title: "Главный инженер проекта",
    updatedAt: "2022-10-06T10:33:01.000000Z",
  };

  let gender;
  switch (defaultUser.gender) {
    case "m":
      gender = "man";
      break;
    case "f":
      gender = "woman";
      break;

    default:
      gender = "";
      break;
  }

  let out = (
    <div className="w-[95%] shadow-md shadow-current rounded-2xl h-28 my-4 flex items-center text-xs p-2 space-x-2">
      <div className="h-full aspect-square rounded-2xl overflow-hidden shadow-md shadow-current relative">
        <SvgComponent name="people" />
        <div className="absolute top-1 left-1 h-5 w-5 z-10">
          <SvgComponent name={gender} />
        </div>
      </div>
      <div className="flex flex-grow flex-col shadow-md shadow-current rounded-2xl h-full p-2">
        <div>{defaultUser.cn}</div>
        <div>{defaultUser.company}</div>
        <div>{defaultUser.department}</div>
        <div>{defaultUser.title}</div>
        <div>{defaultUser.city}</div>
      </div>
      <div className="flex flex-grow flex-col shadow-md shadow-current rounded-2xl h-full p-2">
        <div>телефон: {defaultUser.telephone}</div>
        <div>мобтльный:{defaultUser.mobile}</div>
        <div>email:{defaultUser.email}</div>
        <div>день рождения: {defaultUser.birthday}</div>
      </div>
    </div>
  );

  return out;
}
