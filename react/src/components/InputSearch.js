import React from "react";
import SvgComponent from "./SvgComponent";
import { useDispatch, useSelector } from "react-redux";
import { setSearch } from "../store/appSlice";

export default function InputSearch() {
  const dispatch = useDispatch();
  const users = useSelector((state) => state.users.users);
  const search = useSelector((state) => state.app.search);

  function inputSearch(e) {
    dispatch(setSearch({ searchString: e.target.value }));
  }

  function deletTextSearch() {
    dispatch(setSearch({ searchString: "" }));
  }

  let out = (
    <div
      className={`relative w-full max-w-[35%] ${
        users.length <= 1000 && "hidden"
      }`}
    >
      <div className="absolute w-4 h-4 top-2 left-2">
        <SvgComponent name="search" />
      </div>
      <input
        type="text"
        placeholder="Поиск..."
        className="input  input-sm input-bordered indent-[20px] w-full"
        value={search}
        onInput={inputSearch}
      />
      <div
        className="absolute w-3 h-3 top-[6px] right-[10px] cursor-pointer"
        onClick={deletTextSearch}
      >
        <SvgComponent name="close" />
      </div>
    </div>
  );

  return out;
}
