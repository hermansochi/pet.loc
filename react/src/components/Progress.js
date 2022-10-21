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
      className={`w-full flex justify-center items-center ${
        usersLength >= total && "hidden"
      }`}
    >
      <progress
        className="progress progress-warning w-full"
        value={usersLength}
        max={1000}
      ></progress>
      <div className="">{Math.round(usersLength / 10)}%</div>
    </div>
  );

  return out;
}
