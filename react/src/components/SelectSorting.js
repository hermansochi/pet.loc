import React from "react";
import { useDispatch, useSelector } from "react-redux";
import { setSorting, setDirectionSort } from "../store/appSlice";
import { sortUsers } from "../store/usersSlice";

export default function SelectSorting() {
  const dispatch = useDispatch();
  const users = useSelector((state) => state.users.users);
  const total = useSelector((state) => state.app.total);
  const directionSort = useSelector((state) => state.app.directionSort);
  const sorting = useSelector((state) => state.app.sorting);

  function changeSorting(e) {
    dispatch(setSorting({ sortingString: e.target.value }));
    dispatch(
      sortUsers({
        paramsArray: [e.target.value, "last_name", "first_name"],
        paramSortBoolean: directionSort,
      })
    );
  }

  function changeDirectionSort(arg) {
    dispatch(setDirectionSort({ directionBool: arg }));
    dispatch(
      sortUsers({
        paramString: [sorting, "last_name", "first_name"],
        paramSortBoolean: arg,
      })
    );
  }

  let showDirectionSort = directionSort ? (
    <div className="tooltip tooltip-left cursor-pointer" data-tip="по убыванию">
      <div className="text-2xl ml-2" onClick={() => changeDirectionSort(false)}>
        ↓
      </div>
    </div>
  ) : (
    <div
      className="tooltip tooltip-left cursor-pointer"
      data-tip="по возростанию"
    >
      <div className="text-2xl ml-2" onClick={() => changeDirectionSort(true)}>
        ↑
      </div>
    </div>
  );

  let out = (
    <div className={`flex items-center ${users.length < total && "hidden"}`}>
      Сортировать
      <select
        className="select select-bordered ml-2 select-xs"
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
      <div className="flex items-center">{showDirectionSort}</div>
    </div>
  );

  return out;
}
