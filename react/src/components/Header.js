import React from "react";
import SvgComponent from "./SvgComponent";

export default function Header({
  setTheme,
  region,
  setRegion,
  setSorting,
  search,
  setSearch,
  directionSort,
  setDirectionSort,
}) {
  const options = [
    "cupcake",
    "winter",
    "retro",
    "valentine",
    "synthwave",
    "night",
    "luxury",
  ].map((el, i) => {
    return <option key={i}>{el}</option>;
  });

  function changeTheme(e) {
    setTheme(e.target.value);
  }

  function changeRegion(e) {
    setRegion(e.target.value);
  }

  function changeSorting(e) {
    setSorting(e.target.value);
  }

  function inputSearch(e) {
    setSearch(e.target.value);
  }

  function deletTextSearch() {
    setSearch("");
  }

  function changeDirectionSort(arg) {
    setDirectionSort(arg);
  }

  let showDirectionSort = directionSort ? (
    <div
      className="tooltip tooltip-bottom cursor-pointer"
      data-tip="по убыванию"
    >
      <div className="text-2xl ml-2" onClick={() => changeDirectionSort(false)}>
        ↓
      </div>
    </div>
  ) : (
    <div
      className="tooltip tooltip-bottom cursor-pointer"
      data-tip="по возростанию"
    >
      <div className="text-2xl ml-2" onClick={() => changeDirectionSort(true)}>
        ↑
      </div>
    </div>
  );
  let out = (
    <div className="w-full h-20 px-[2%] flex items-center justify-between shadow-md shadow-current text-sm">
      <div className="relative w-full max-w-[35%]">
        <div className="absolute w-4 h-4 top-2 left-2">
          <SvgComponent name="search" />
        </div>
        <input
          type="text"
          placeholder="Поиск..."
          className="input  input-sm input-bordered indent-[20px] w-full"
          value={search}
          onInput={inputSearch}
        />
        <div
          className="absolute w-3 h-3 top-[6px] right-2 cursor-pointer"
          onClick={deletTextSearch}
        >
          <SvgComponent name="close" />
        </div>
      </div>
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
      <div className="flex items-center">
        Сортировать
        <select
          className="select select-bordered ml-2 select-xs"
          onChange={changeSorting}
        >
          <option value="name">Фамилия</option>
          <option value="famal">Имя</option>
          <option value="gender">Пол</option>
          <option value="age">Возраст</option>
          <option value="work">Должность</option>
        </select>
        <div className="flex items-center">{showDirectionSort}</div>
      </div>
      <div className="tooltip tooltip-left" data-tip="выбрать тему">
        <select
          className="select select-bordered select-xs"
          onChange={changeTheme}
        >
          {options}
        </select>
      </div>
    </div>
  );

  return out;
}
