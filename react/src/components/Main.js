import React from "react";
import User from "./User"; // Компонент для показа отдельного пользователя
import { useSelector } from "react-redux"; //  хук состояния редакса

export default function Main() {
  const users = useSelector((state) => state.users.users); // Массив пользователей
  const page = useSelector((state) => state.app.page); // Коллчество пользователей на странице
  const search = useSelector((state) => state.app.search); // Значение в сроке поиска
  const searchResult = useSelector((state) => state.users.searchResult); // Массив с результатми

  let showUsers = [];

  if (search.length < 3) {
    users.forEach((el, i) => {
      if (i <= page * 100) {
        showUsers.push(<User key={el.id} data={el} />);
      }
    });
  } else {
    searchResult.forEach((el, i) => {
      if (i <= page * 100) {
        showUsers.push(<User key={el.id} data={el} />);
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
      className="w-full flex-grow min-h-screen flex flex-col items-center"
      data-testid="main"
    >
      {showUsers}
    </div>
  );

  return out;
}
