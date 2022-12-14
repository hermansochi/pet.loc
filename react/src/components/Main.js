import React from "react";
import User from "./User"; // Компонент для показа отдельного пользователя
import { useSelector } from "react-redux"; //  хук состояния редакса
import uuid from "react-uuid"; // Библиотека генерации случайного id

export default function Main() {
  const users = useSelector((state) => state.users.users); // Массив пользователей
  const page = useSelector((state) => state.app.page); // Коллчество пользователей на странице
  const search = useSelector((state) => state.app.search); // Значение в сроке поиска
  const searchResult = useSelector((state) => state.users.searchResult); // Массив с результатми

  let showUsers = [];

  if (search.length < 3) {
    users.forEach((el, i) => {
      if (i <= page * 100 && el.fide !== false) {
        showUsers.push(<User key={uuid()} data={el} str={search} />);
      }
    });
  } else {
    searchResult.forEach((el, i) => {
      if (i <= page * 100 && el.fide !== false) {
        showUsers.push(<User key={uuid()} data={el} str={search} />);
      }
    });
    if (searchResult.length === 0 && search !== "") {
      showUsers = (
        <div className="font-semibold text-2xl">Поиск не дал результатов</div>
      );
    }
  }

  let out = (
    <div
      className="w-full mt-28 sm:mt-20 flex-grow min-h-screen flex flex-col items-center"
      data-testid="main"
    >
      {showUsers}
    </div>
  );

  return out;
}
