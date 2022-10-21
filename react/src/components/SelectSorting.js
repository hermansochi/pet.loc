import React from "react";
import { useDispatch, useSelector } from "react-redux"; // Хуки рудакса
import { setSorting, setDirectionSort } from "../store/appSlice"; // Редюсерв состояния приложения
import { sortUsers } from "../store/usersSlice"; // Редюсер сортировки массива пользователей
import { setPage } from "../store/appSlice"; // Редюсер изменения колличества отрисованных страниц

export default function SelectSorting() {
  const dispatch = useDispatch();
  const usersLength = useSelector((state) => state.users.users.length); // длинна  массива пользователей
  const total = useSelector((state) => state.app.total); // Колличество пользователеё
  const directionSort = useSelector((state) => state.app.directionSort); // Напрвление сортировки
  const sorting = useSelector((state) => state.app.sorting); // Параметр для сортировки

  // Функция изменяет параметр  сортировки и запускает редусер для сортировки массива пользователей
  function changeSorting(e) {
    dispatch(setPage({ pageNumber: 1 }));
    dispatch(setSorting({ sortingString: e.target.value }));
    dispatch(
      sortUsers({
        paramsArray: [e.target.value, "last_name", "first_name"],
        paramSortBoolean: directionSort,
      })
    );
  }

  // Функция изменяет направление сортировки
  function changeDirectionSort(arg) {
    dispatch(setPage({ pageNumber: 1 }));
    dispatch(setDirectionSort({ directionBool: arg }));
    dispatch(
      sortUsers({
        paramsArray: [sorting, "last_name", "first_name"],
        paramSortBoolean: arg,
      })
    );
  }

  // В завимости от направления сотрировки отрисовываются элементы и SVG иконка
  let showDirectionSort = directionSort ? (
    <div
      className="tooltip tooltip-bottom  cursor-pointer"
      data-tip="по убыванию"
    >
      <div className="text-xl mx-1" onClick={() => changeDirectionSort(false)}>
        ↓
      </div>
    </div>
  ) : (
    <div
      className="tooltip tooltip-bottom cursor-pointer"
      data-tip="по возростанию"
    >
      <div className="text-xl mx-1" onClick={() => changeDirectionSort(true)}>
        ↑
      </div>
    </div>
  );

  let out = (
    <div className={`flex items-center ${usersLength < total && "hidden"}`}>
      <div className="flex items-center">{showDirectionSort}</div>
      <div
        className="tooltip tooltip-bottom  cursor-pointer"
        data-tip="сортировка"
      >
        <select
          className="select select-bordered select-xs"
          onChange={changeSorting}
        >
          <option value="last_name">Фамилия</option>
          <option value="first_name">Имя</option>
          <option value="middle_name">Отчество</option>
          <option value="gender">Пол</option>
          <option value="city">Город</option>
          <option value="company">Компания</option>
          <option value="department">Отдел</option>
          <option value="title">Должность</option>
        </select>
      </div>
    </div>
  );

  return out;
}
