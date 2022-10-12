import React from "react";
import User from "./User";
import { useSelector } from "react-redux";

export default function Main() {
  const users = useSelector((state) => state.users.users);
  const page = useSelector((state) => state.app.page);
  const search = useSelector((state) => state.app.search);
  const searchResult = useSelector((state) => state.users.searchResult);

  let showUsers = [];

  if (search === "") {
    showUsers = users.map((el, i) => {
      if (i <= page * 15) {
        return <User key={el.id} data={el} />;
      }
    });
  } else {
    showUsers = searchResult.map((el, i) => {
      if (i <= page * 15) {
        return <User key={el.id} data={el} />;
      }
    });
  }

  let out = (
    <div className="w-full flex flex-col items-center ">{showUsers}</div>
  );

  return out;
}
