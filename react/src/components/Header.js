import React from "react";
import InputSearch from "./InputSearch";
import BlockRadiosSitys from "./BlockRadiosSitys";
import SelectSorting from "./SelectSorting";
import SelectTheme from "./SelectTheme";

export default function Header() {
  let out = (
    <div className="w-full h-20 px-[2%] flex items-center justify-between shabow-inner shadow-sm shadow-current text-sm">
      <InputSearch />
      <BlockRadiosSitys />
      <SelectSorting />
      <SelectTheme />
    </div>
  );

  return out;
}
