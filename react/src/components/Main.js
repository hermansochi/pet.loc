import React from "react";
import User from "./User"; // Компонент для показа отдельного пользователя
import { useSelector } from "react-redux"; //  хук состояния редакса

export default function Main() {
  const users = useSelector((state) => state.users.users); // Массив пользователей
  const total = useSelector((state) => state.app.total); // Коллчество пользователей
  const search = useSelector((state) => state.app.search); // Значение в сроке поиска
  const searchResult = useSelector((state) => state.users.searchResult); // Массив с результатми

  let showUsers = [];

  if (search === "") {
    showUsers = users.map((el, i) => {
      if (i <= total) {
        return <User key={el.id} data={el} />;
      }
    });
  } else {
    showUsers = searchResult.map((el, i) => {
      if (i <= total) {
        return <User key={el.id} data={el} />;
      }
    });
  }

  let out = (
    <div className="w-full flex flex-col items-center ">{showUsers}</div>
  );

  return out;
}
