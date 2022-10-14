import React, { useEffect } from "react";
import { useDispatch, useSelector } from "react-redux"; // Хуки редакса
import { sortUsers } from "../store/usersSlice"; // Редюсер для сортировки массива ползователей

export default function Progress() {
  const dispatch = useDispatch();
  const usersLength = useSelector((state) => state.users.users.length); // длинна  массива пользователей
  const total = useSelector((state) => state.app.total); // Колличетво пользователей

  // Отслеживается колличество пользователей в хранилище, как только все загружены скрывается шкала загрузки и показываются компонены Поиск и Сортировка
  useEffect(() => {
    if (usersLength >= total) {
      dispatch(
        sortUsers({
          paramsArray: ["last_name", "last_name", "first_name"],
          paramSortBoolean: true,
        })
      );
    }
  }, [usersLength]);

  let out = (
    <div
      className={`flex flex-grow flex-col items-center ${
        usersLength >= total && "hidden"
      }`}
    >
      <progress
        className="progress progress-secondary w-full"
        value={usersLength}
        max={1000}
      ></progress>
      <div className="">Загрузка базы {Math.round(usersLength / 10)}%</div>
    </div>
  );

  return out;
}
