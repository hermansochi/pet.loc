import React from "react";
import InputSearch from "./InputSearch"; // Компонент для поиска
import Progress from "./Progress"; // Компонент шкала загрузки
import SelectSorting from "./SelectSorting"; // Компонент для вабора параметров сортировки
import SelectTheme from "./SelectTheme"; // Компонент для выбора темв

export default function Header() {
  let out = (
    <div className="w-full fixed backdrop-blur-md h-24 sm:h-20 px-[4%] flex flex-col sm:flex-row items-end sm:items-center justify-center sm:justify-between shabow-inner shadow-sm shadow-current text-sm">
      <InputSearch />
      <Progress />
      <SelectSorting />
      <SelectTheme />
    </div>
  );

  return out;
}
