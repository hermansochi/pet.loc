import React from "react";
import { useDispatch, useSelector } from "react-redux";
import { setSorting, setDirectionSort } from "../store/appSlice";

export default function SelectSorting() {
  const dispatch = useDispatch();
  const directionSort = useSelector((state) => state.app.directionSort);

  function changeSorting(e) {
    dispatch(setSorting({ sortingString: e.target.value }));
  }

  function changeDirectionSort(arg) {
    dispatch(setDirectionSort({ directionBool: arg }));
  }

  let showDirectionSort = directionSort ? (
    <div className="tooltip cursor-pointer" data-tip="по убыванию">
      <div className="text-2xl ml-2" onClick={() => changeDirectionSort(false)}>
        ↓
      </div>
    </div>
  ) : (
    <div className="tooltip cursor-pointer" data-tip="по возростанию">
      <div className="text-2xl ml-2" onClick={() => changeDirectionSort(true)}>
        ↑
      </div>
    </div>
  );

  let out = (
    <div className="flex items-center">
      Сортировать
      <select
        className="select select-bordered ml-2 select-xs"
        onChange={changeSorting}
      >
        <option value="name">Фамилия</option>
        <option value="famal">Имя</option>
        <option value="gender">Пол</option>
        <option value="age">Возраст</option>
        <option value="work">Должность</option>
      </select>
      <div className="flex items-center">{showDirectionSort}</div>
    </div>
  );

  return out;
}
