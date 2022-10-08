import React from "react";
import { useSelector, useDispatch } from "react-redux";
import { setRegion } from "../store/appSlice";

export default function BlockRadiosSitys() {
  const dispatch = useDispatch();
  const region = useSelector((state) => state.app.region);

  function changeRegion(e) {
    dispatch(setRegion({ regionString: e.target.value }));
  }

  let out = (
    <div className="flex jusify-between item-center">
      <div className="flex items-center">
        все
        <input
          type="radio"
          name="radio-1"
          className="radio radio-xs mx-2"
          value="все"
          checked={region === "все" ? true : false}
          onChange={changeRegion}
        />
      </div>
      <div className="flex items-center">
        Сочи
        <input
          type="radio"
          name="radio-1"
          className="radio radio-xs mx-2"
          value="Сочи"
          checked={region === "Сочи" ? true : false}
          onChange={changeRegion}
        />
      </div>
      <div className="flex items-center">
        Краснодар
        <input
          type="radio"
          name="radio-1"
          className="radio radio-xs mx-2"
          value="Краснодар"
          checked={region === "Краснодар" ? true : false}
          onChange={changeRegion}
        />
      </div>
    </div>
  );

  return out;
}
