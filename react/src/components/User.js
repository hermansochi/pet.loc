import React from "react";
import { devUrl, avatars } from "../patch"; // Пути для запросов
import SvgComponent from "./SvgComponent"; // Компонент для SVG картинок
import { useDispatch } from "react-redux"; // хук редакса для изменения состояния
import { setId, setShowqr } from "../store/appSlice"; // редюсеры состояния приложения
import lightSubStrin from "./lightSubString";

export default function User({ data, str }) {
  const dispactch = useDispatch();
  const sublength = str.length;

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
    <div className="w-full outline hover:backdrop-brightness-200 outline-8 outline-secondary h-20 my-1.5  flex  items-center text-xs px-4 py-2 space-subString-2">
      <div className="relative h-full min-h-[36px] min-w-[36px] cursor-pointer hover:z-10 hover:translate-subString-[20px] hover:scale-[200%] duration-300 aspect-square  flex items-center overflow-hidden  border-current">
        <SvgComponent name="people" />
        {showImage}
      </div>
      <div className="flex min-w-[280px] flex-col justify-center h-full p-2">
        <div className="text-sm font-medium">
          {lightSubStrin(data.cn, str, sublength)}
        </div>
        <div>{lightSubStrin(data.company, str, sublength)}</div>
        <div>{lightSubStrin(data.department, str, sublength)}</div>
        <div>{lightSubStrin(data.title, str, sublength)}</div>
      </div>
      <div className="flex w-[25%] min-w-[280px] flex-col justify-center  h-full p-2">
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">
            телефон:{" "}
          </span>
          {lightSubStrin(data.telephone, str, sublength)}
        </div>
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">
            мобильный:{" "}
          </span>
          {lightSubStrin(formateNum(data.mobile, str, sublength))}
        </div>
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">email: </span>
          {lightSubStrin(data.email, str, sublength)}
        </div>
      </div>
      <div className="flex w-[25%] flex-col justify-center h-full p-2">
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">
            день рождения:{" "}
          </span>
          {lightSubStrin(data.birthday, str, sublength)}
        </div>
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">город{"  "}</span>
          {lightSubStrin(data.city, str, sublength)}
        </div>
      </div>
      <div className="flex flex-grow h-full items-center">
        <div className="tooltip tooltip-left qr" data-tip="посмотреть QR Code">
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
    </div>
  );

  return out;
}
