import React, { useEffect } from "react";
import { useDispatch, useSelector } from "react-redux"; // Хуки редакса
import { sortUsers } from "../store/usersSlice"; // Редюсер для сортировки массива ползователей

export default function Progress() {
  const dispatch = useDispatch();
  const users = useSelector((state) => state.users.users); // массив пользователей
  const total = useSelector((state) => state.app.total); // Колличетво пользователей

  // Отслеживается колличество пользователей в хранилище, как только все загружены скрывается шкала загрузки и показываются компонены Поиск и Сортировка
  useEffect(() => {
    if (users.length >= total) {
      dispatch(
        sortUsers({
          paramsArray: ["last_name", "last_name", "first_name"],
          paramSortBoolean: true,
        })
      );
    }
  }, [users.length]);

  let out = (
    <div
      className={`flex flex-grow flex-col items-center ${
        users.length >= total && "hidden"
      }`}
    >
      <progress
        className="progress progress-secondary w-full"
        value={users.length}
        max={1000}
      ></progress>
      <div className="">Загрузка базы {Math.round(users.length / 10)}%</div>
    </div>
  );

  return out;
}
