import React from "react";
import { useDispatch } from "react-redux";
import { setTheme } from "../store/appSlice";

export default function SelectTheme() {
  const dispatch = useDispatch();

  function changeTheme(e) {
    dispatch(setTheme(e.target.value));
  }

  let out = (
    <div className="tooltip tooltip-left" data-tip="выбрать тему">
      <select
        className="select select-bordered select-xs"
        onChange={changeTheme}
      >
        {[
          "cupcake",
          "winter",
          "retro",
          "valentine",
          "synthwave",
          "night",
          "luxury",
        ].map((el, i) => {
          return <option key={i}>{el}</option>;
        })}
      </select>
    </div>
  );

  return out;
}
