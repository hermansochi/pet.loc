import React from "react";
import { useDispatch } from "react-redux"; // Хук редакса для изменения состояния
import { setTheme } from "../store/appSlice"; // Редюсер для изменения цветовой темы

export default function SelectTheme() {
  const dispatch = useDispatch();

  // Функция изменяет цветовую тему
  function changeTheme(e) {
    dispatch(setTheme({ themrString: e.target.value }));
  }

  let out = (
    <div className="tooltip tooltip-left" data-tip="выбрать тему">
      <select
        className="select select-bordered select-xs"
        onChange={changeTheme}
      >
        {[
          "luxury",
          "garden",
          "corporate",
          "fantasy",
          "halloween",
          "forest",
          "synthwave",
        ].map((el, i) => {
          return <option key={i}>{el}</option>;
        })}
      </select>
    </div>
  );

  return out;
}
