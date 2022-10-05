import React from "react";
import { listThemes } from "./listThemes";
import SvgComponent from "./SvgComponent";

export default function Header() {
  const options = listThemes.map((el, i) => {
    return <option key={i}>{el}</option>;
  });

  let out = (
    <div className="w-full h-24 px-[2%] flex items-center justify-between">
      <div className="relative">
        <div className="absolute w-3 h-3">
          <SvgComponent name="search" />
        </div>
        <input
          type="text"
          placeholder="Поиск..."
          className="input input-xs input-bordered indent-[20px] w-full max-w-xs"
        />
      </div>
      <select className="select select-xs">{options}</select>
    </div>
  );

  return out;
}
