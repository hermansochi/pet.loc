import React from "react";
import InputSearch from "./InputSearch"; // Компонент для поиска
import Progress from "./Progress"; // Компонент шкала загрузки
import SelectSorting from "./SelectSorting"; // Компонент для вабора параметров сортировки
import SelectTheme from "./SelectTheme"; // Компонент для выбора темв
import Menu from "./Menu"; // Компонент меню

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
