import React from "react";
import User from "./User";
import { useSelector } from "react-redux";

export default function Main() {
  const users = useSelector((state) => state.users.users);
  const page = useSelector((state) => state.app.page);

  let out = (
    <div className="w-full flex flex-col items-center ">
      {users.map((el, i) => {
        if (i <= page * 15) {
          return <User key={el.id} data={el} />;
        }
      })}
    </div>
  );

  return out;
}
