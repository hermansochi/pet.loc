import React from "react";
import { useDispatch, useSelector } from "react-redux"; // Хук редакса для изменения состояния
import { setTheme } from "../store/appSlice"; // Редюсер для изменения цветовой темы
import SvgComponent from "./SvgComponent";

export default function SelectTheme() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme);
  const total = useSelector((state) => state.app.total); // Колличество пользователеё
  const usersLength = useSelector((state) => state.users.users.length); // длинна  массива пользователей

  // Функция изменяет цветовую тему
  function changeTheme() {
    dispatch(setTheme({ themeBoolean: !theme }));
  }

  let out = (
    <div
      className={`flex sm:order-4 items-center ${
        usersLength < total && "hidden"
      }`}
    >
      <div className="w-4 h-4 mx-1">
        <SvgComponent name={theme ? "moon" : "sun"} />
      </div>
      <input
        type="checkbox"
        className="toggle toggle-xs cursor-pointer"
        onChange={changeTheme}
      />
    </div>
  );

  return out;
}
