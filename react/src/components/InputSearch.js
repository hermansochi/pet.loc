import React from "react";
import SvgComponent from "./SvgComponent";
import { useDispatch, useSelector } from "react-redux";
import { setSearch } from "../store/appSlice";
import { showSearchResult } from "../store/usersSlice";

export default function InputSearch() {
  const dispatch = useDispatch();
  const users = useSelector((state) => state.users.users);
  const search = useSelector((state) => state.app.search);
  const total = useSelector((state) => state.app.total);

  function inputSearch(e) {
    dispatch(setSearch({ searchString: e.target.value }));
  }

  function deletTextSearch() {
    dispatch(setSearch({ searchString: "" }));
  }

  function enterToSearch(e) {
    if (e.key === "Enter") {
      dispatch(
        showSearchResult({ targetString: e.target.value, users: users })
      );
    }
  }

  function clickToSearch(e) {
    if (e.currentTarget.nextElementSibling.value !== "") {
      dispatch(
        showSearchResult({
          targetString: e.currentTarget.nextElementSibling.value,
          users: users,
        })
      );
    }
  }

  let out = (
    <div
      className={`relative w-full max-w-[35%] ${
        users.length < total && "hidden"
      }`}
    >
      <div
        className="tooltip tooltip-bottom cursor-pointer w-full"
        data-tip="для поиска нажмите Enter"
      >
        <div
          className="absolute w-4 h-4 top-2 left-2 cursor-pointer"
          onClick={clickToSearch}
        >
          <SvgComponent name="search" />
        </div>

        <input
          type="text"
          placeholder="Поиск..."
          className="input  input-sm input-bordered indent-[20px] w-full"
          value={search}
          onInput={inputSearch}
          onKeyDown={enterToSearch}
        />
      </div>
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
