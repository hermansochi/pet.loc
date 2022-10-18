import React from "react";
import { devUrl, avatars } from "../patch"; // Пути для запросов
import SvgComponent from "./SvgComponent"; // Компонент для SVG картинок
import { useDispatch } from "react-redux"; // хук редакса для изменения состояния
import { setId, setShowqr } from "../store/appSlice"; // редюсеры состояния приложения

export default function User({ data }) {
  const dispactch = useDispatch();

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
    <img
      className="rounded-full"
      src={`${devUrl}${avatars}${data.id}.jpg`}
      alt=""
    />
  );

  let out = (
    <div className="w-full outline hover:backdrop-brightness-200 outline-8 outline-secondary h-20 my-1.5  flex  items-center text-xs px-4 py-2 space-x-2">
      <div className="relative h-full min-h-[36px] min-w-[36px] cursor-pointer hover:z-10 hover:translate-x-[20px] hover:scale-[200%] duration-300 aspect-square  flex items-center overflow-hidden  border-current">
        <SvgComponent name="people" />
        {showImage}
      </div>
      <div className="flex min-w-[280px] flex-col justify-center h-full p-2">
        <div className="text-sm font-medium">{data.cn}</div>
        <div>{data.company}</div>
        <div>{data.department}</div>
        <div>{data.title}</div>
      </div>
      <div className="flex w-[25%] min-w-[280px] flex-col justify-center  h-full p-2">
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">
            телефон:{" "}
          </span>
          {data.telephone}
        </div>
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">
            мобильный:{" "}
          </span>
          {formateNum(data.mobile)}
        </div>
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">email: </span>
          {data.email}
        </div>
      </div>
      <div className="flex w-[25%] flex-col justify-center h-full p-2">
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">
            день рождения:{" "}
          </span>
          {data.birthday}
        </div>
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">город{"  "}</span>
          {data.city}
        </div>
      </div>
      <div className="flex flex-grow h-full items-center">
        <div className="tooltip tooltip-left qr" data-tip="посмотреть QR Code">
          <div
            className="w-5 h-5 cursor-pointer qr"
            id={data.id}
            onClick={changeCurrentId}
          >
            <SvgComponent name="qr" />
          </div>
        </div>
      </div>
    </div>
  );

  return out;
}
