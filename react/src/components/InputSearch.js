import React from "react";
import SvgComponent from "./SvgComponent"; // Компонент для SVG картинок
import { useDispatch, useSelector } from "react-redux"; // Хуки редакса
import { setSearch } from "../store/appSlice"; // Редюсер для изменения значения строки поиска
import { showSearchResult } from "../store/usersSlice"; // Редюсер для изменения массива результатов поиска

export default function InputSearch() {
  const dispatch = useDispatch();
  const users = useSelector((state) => state.users.users); // Массив пользователей
  const search = useSelector((state) => state.app.search); // Значение строки поиска
  const total = useSelector((state) => state.app.total); // Колличестов пользователей

  // Функция изменяет значение строки поиска
  function inputSearch(e) {
    dispatch(setSearch({ searchString: e.target.value }));
  }

  // Функция очищаетстроку поиска
  function deletTextSearch() {
    dispatch(setSearch({ searchString: "" }));
  }

  // Функция запускает поиск и изменяет массив результатов поиска понажатию Enter
  function enterToSearch(e) {
    if (e.key === "Enter") {
      dispatch(
        showSearchResult({ targetString: e.target.value, users: users })
      );
    }
  }

  // Функция запускает поиск и изменяет массив результатов поиска по клику на иконку поиска
  function clickToSearch(e) {
    if (e.currentTarget.nextElementSibling.value !== "") {
      dispatch(
        showSearchResult({
          targetString: e.currentTarget.nextElementSibling.value,
          users: users,
        })
      );
    }
  }

  let out = (
    <div
      className={`relative w-full max-w-[35%] ${
        users.length < total && "hidden"
      }`}
    >
      <div
        className="tooltip tooltip-bottom cursor-pointer w-full"
        data-tip="для поиска нажмите Enter"
      >
        <div
          className="absolute w-4 h-4 top-2 left-2 cursor-pointer"
          onClick={clickToSearch}
        >
          <SvgComponent name="search" />
        </div>

        <input
          type="text"
          placeholder="Поиск..."
          className="input  input-sm input-bordered indent-[20px] w-full"
          value={search}
          onInput={inputSearch}
          onKeyDown={enterToSearch}
        />
      </div>
      <div
        className="absolute w-3 h-3 top-[6px] right-[10px] cursor-pointer"
        onClick={deletTextSearch}
      >
        <SvgComponent name="close" />
      </div>
    </div>
  );

  return out;
}
