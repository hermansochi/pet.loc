import React from "react";
import { useDispatch, useSelector } from "react-redux"; // Хук редакса для изменения состояния
import { setTheme } from "../store/appSlice"; // Редюсер для изменения цветовой темы

export default function SelectTheme() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme);

  // Функция изменяет цветовую тему
  function changeTheme() {
    dispatch(setTheme({ themrString: !theme }));
  }

  let out = (
    <div className="flex items-center">
      Тема
      <input
        type="checkbox"
        className="toggle ml-1 cursor-pointer"
        onChange={changeTheme}
      />
    </div>
  );

  return out;
}
