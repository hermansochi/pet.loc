import React from "react";
import InputSearch from "./InputSearch";
import Progress from "./Progress";
import SelectSorting from "./SelectSorting";
import SelectTheme from "./SelectTheme";
import Menu from "./Menu";

export default function Header() {
  let out = (
    <div className="w-full h-20 px-[2%] flex items-center justify-between shabow-inner shadow-sm shadow-current text-sm">
      <InputSearch />
      <Progress />
      <SelectSorting />
      <SelectTheme />
      <Menu />
    </div>
  );

  return out;
}
