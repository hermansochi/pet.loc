import React, { useRef } from "react";
import SvgComponent from "./SvgComponent"; // Компонент для SVG картинок
import { useDispatch, useSelector } from "react-redux"; // Хуки редакса
import { setSearch } from "../store/appSlice"; // Редюсер для изменения значения строки поиска
import { showSearchResult, clearSearchResult } from "../store/usersSlice"; // Редюсер для изменения массива результатов поиска

export default function InputSearch() {
  const dispatch = useDispatch();
  const usersLength = useSelector((state) => state.users.users.length); // длинна  массива пользователей
  const search = useSelector((state) => state.app.search); // Значение строки поиска
  const total = useSelector((state) => state.app.total); // Колличестов пользователей
  const debounceRef = useRef(); // Значение таймкера для задержки выполнения поиска при изменении значения в инпуте

  // Функция задержки выполнения поиска при вводе в строку поиска
  function debunceSearch(value) {
    if (debounceRef.current) {
      clearTimeout(debounceRef.current);
    }
    debounceRef.current = setTimeout(() => {
      if (value.length > 2) {
        dispatch(showSearchResult({ targetString: value }));
      }
    }, 500);
  }

  // Функция изменяет значение строки поиска и запускает поиск по массиву рользователей
  function inputSearch(e) {
    dispatch(setSearch({ searchString: e.target.value }));
    debunceSearch(e.target.value);
  }

  // Функция очищаетстроку поиска
  function deletTextSearch() {
    dispatch(setSearch({ searchString: "" }));
    dispatch(clearSearchResult());
  }

  let out = (
    <div
      className={`relative w-full max-w-[330px]  ${
        usersLength < total && "hidden"
      }`}
    >
      <div className="absolute w-4 h-4 top-1 left-1">
        <SvgComponent name="search" />
      </div>
      <input
        type="text"
        placeholder="Поиск..."
        className="input input-xs input-bordered indent-[16px] w-full"
        value={search}
        onChange={inputSearch}
      />
      <div
        data-testid="clearSearch"
        className="absolute w-3 h-3 top-0.5 right-1.5 cursor-pointer"
        onClick={deletTextSearch}
      >
        <SvgComponent name="close" />
      </div>
    </div>
  );

  return out;
}
