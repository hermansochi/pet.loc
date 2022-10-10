import React, { useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import { setUsers } from "../store/usersSlice";

export default function Progress() {
  const dispatch = useDispatch();
  const users = useSelector((state) => state.users.users);

  useEffect(() => {
    if (users.length >= 1000) {
      dispatch(setUsers({ paramString: "last_name", paramSortBoolean: true }));
    }
  }, [users.length]);

  let out = (
    <div
      className={`flex flex-col items-center ${
        users.length >= 1000 && "hidden"
      }`}
    >
      <progress
        className="progress progress-primary w-56"
        value={users.length}
        max={1001}
      ></progress>
      <div className="">Загрузка базы {Math.round(users.length / 10)}%</div>
    </div>
  );

  return out;
}
