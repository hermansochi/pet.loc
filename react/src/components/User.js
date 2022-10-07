import React from "react";
import SvgComponent from "./SvgComponent";
import { useSelector } from "react-redux";

export default function User() {
  const theme = useSelector((state) => state.app.theme);

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

  function formateNum(num) {
    let n = num.split("");
    return `+7 (${n[0]}${n[1]}${n[2]}) ${n[3]}${n[4]}${n[5]} ${n[6]}${n[7]} ${n[8]}${n[9]}`;
  }

  function handlerClickQR(e) {
    let t = e.currentTarget;
    t.classList.toggle("scale-[300%]");
    t.classList.toggle("translate-x-[-200px]");
    t.classList.toggle("z-20");
    t.classList.toggle("bg-white");
    t.lastElementChild.classList.toggle("bg-transparent");
  }

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

  let styleImg = "";
  switch (theme) {
    case "luxury":
      styleImg = "brightness-110 bg-current";
      break;

    case "night":
      styleImg = "brightness-110 bg-current";
      break;

    case "synthwave":
      styleImg = "brightness-110 bg-current";
      break;

    default:
      break;
  }

  let out = (
    <div className="w-full  shadow-sm shadow-current h-20  flex shadow-inner items-center text-xs px-4 py-2 space-x-2 relative">
      <div className="h-full aspect-square rounded-full overflow-hidden  border-current">
        <SvgComponent name="people" />
        <div className="absolute top-4 left-4 h-5 w-5 z-10">
          <SvgComponent name={gender} />
        </div>
      </div>
      <div className="flex flex-grow flex-col justify-center h-full p-2">
        <div className="text-sm font-medium">{defaultUser.cn}</div>
        <div>{defaultUser.company}</div>
        <div>{defaultUser.department}</div>
        <div>{defaultUser.title}</div>
      </div>
      <div className="flex flex-grow flex-col justify-center  h-full p-2">
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">телефон: </span>
          {defaultUser.telephone}
        </div>
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">мобтльный: </span>
          {formateNum(defaultUser.mobile)}
        </div>
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">email: </span>
          {defaultUser.email}
        </div>
      </div>
      <div className="flex flex-grow flex-col justify-center h-full p-2">
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">
            день рождения:{" "}
          </span>
          {defaultUser.birthday}
        </div>
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">город: </span>
          {defaultUser.city}
        </div>
      </div>
      <div
        className="border-current h-full aspect-square border rounded-2xl p-2 cursor-pointer duration-700 backdrop-opacity-0"
        onClick={handlerClickQR}
      >
        <img
          className={styleImg}
          src="http://api.localhost/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
          alt="alt"
        />
      </div>
    </div>
  );

  return out;
}
