import React from "react";
import SvgComponent from "./SvgComponent"; // Компонент для SVG картинок
import { useDispatch } from "react-redux"; // хук редакса для изменения состояния
import { setId, setShowqr } from "../store/appSlice"; // редюсеры состояния приложения
import lightSubStrin from "./lightSubString";

export default function User({ data, str }) {
  const dispactch = useDispatch();
  const sublength = str.length;

  // Путь вычисляестя в зависимости от среды окружения
  const url = process.env.REACT_APP_AVATARS;

  // Функция форматирования номера телефона, возвращает изменённую строку
  function formateNum(num) {
    let n = num.split("");
    return `+7 (${n[0]}${n[1]}${n[2]}) ${n[3]}${n[4]}${n[5]} ${n[6]}${n[7]} ${n[8]}${n[9]}`;
  }

  // Функция мзменяет id текущего пользователя и показывает скрытое окно для QR кода
  function changeCurrentId(e) {
    dispactch(setId({ idString: e.currentTarget.id }));
    dispactch(setShowqr({ showqrBoolean: true }));
  }

  // Показывает дефолтную иконку при отсутстрии фотографии на сервере
  let showImage = data.thumbnail && (
    <img className="rounded-full" src={`${url}/${data.id}.jpg`} alt="" />
  );

  let fotoName = (
    <div className="flex items-center sm:w-[25%]">
      <div className="flex  items-center mr-2 min-h-[36px] h-[36px] sm:h-16 min-w-[36px] w-[36px] sm:w-16 cursor-pointer  hover:z-100 hover:translate-x-[20px] hover:translate-y-[-20px] hover:scale-[200%] duration-300 aspect-square   overflow-hidden  border-current">
        <SvgComponent name="people" />
        {showImage}
      </div>
      <div className="font-medium">
        {lightSubStrin(data.cn, str, sublength)}
      </div>
    </div>
  );

  let companyDepTitle = (
    <div className="flex flex-col  sm:w-[30%]">
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">
          компания:{" "}
        </span>{" "}
        <span className="inline-block">
          {lightSubStrin(data.company, str, sublength)}
        </span>
      </div>
      <div className="flex">
        <span className="font-medium  min-w-[95px] inline-block">отдел: </span>{" "}
        <span className="inline-block">
          {lightSubStrin(data.department, str, sublength)}
        </span>
      </div>
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">
          должность:{" "}
        </span>
        <span className="inline-block">
          {lightSubStrin(data.title, str, sublength)}
        </span>
      </div>
    </div>
  );

  let telefonsEmail = (
    <div className="flex flex-col sm:w-[30%]">
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">телефон: </span>
        <span className="inline-block">
          {lightSubStrin(data.telephone, str, sublength)}
        </span>
      </div>
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">
          мобильный:{" "}
        </span>
        <span className="inline-block">
          {lightSubStrin(formateNum(data.mobile, str, sublength))}
        </span>
      </div>
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">email: </span>
        <span className="inline-block">
          {lightSubStrin(data.email, str, sublength)}
        </span>
      </div>
    </div>
  );

  let cityBerth = (
    <div className="flex flex-col sm:w-[15%]">
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">
          день рождения:{" "}
        </span>
        <span className="inline-block">
          {lightSubStrin(data.birthday, str, sublength)}
        </span>
      </div>
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">
          город:{"  "}
        </span>
        <span className="inline-block">
          {lightSubStrin(data.city, str, sublength)}
        </span>
      </div>
      <div className="flex">
        <span className="font-medium min-w-[95px] inline-block">
          QR code:{"  "}
        </span>
        <div
          className="w-5 h-5 cursor-pointer qr"
          id={data.id}
          onClick={changeCurrentId}
          data-testid="qr"
        >
          <SvgComponent name="qr" />
        </div>
      </div>
    </div>
  );

  let out = (
    <div className="w-full flex flex-col sm:flex-row  outline hover:backdrop-brightness-200 outline-8 outline-secondary  my-1.5  text-xs px-1 sm:px-4 py-2 space-2">
      {fotoName}
      {companyDepTitle}
      {telefonsEmail}
      {cityBerth}
    </div>
  );

  return out;
}
