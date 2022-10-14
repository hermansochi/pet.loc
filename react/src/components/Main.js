import React from "react";
import User from "./User"; // Компонент для показа отдельного пользователя
import { useSelector } from "react-redux"; //  хук состояния редакса

export default function Main() {
  const users = useSelector((state) => state.users.users); // Массив пользователей
  const page = useSelector((state) => state.app.page); // Коллчество пользователей на странице
  const search = useSelector((state) => state.app.search); // Значение в сроке поиска
  const searchResult = useSelector((state) => state.users.searchResult); // Массив с результатми

  let showUsers = [];

  if (search === "") {
    users.forEach((el, i) => {
      if (i <= page * 50) {
        showUsers.push(<User key={el.id} data={el} />);
      }
    });
  } else {
    searchResult.forEach((el, i) => {
      if (i <= page * 50) {
        showUsers.push(<User key={el.id} data={el} />);
      }
    });
  }

  let out = (
    <div className="w-full flex flex-col items-center ">{showUsers}</div>
  );

  return out;
}
