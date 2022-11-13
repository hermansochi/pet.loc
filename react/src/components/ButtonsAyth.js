import React from "react";
import { useSelector, useDispatch } from "react-redux"; // Хук состояния редакса
import { setShowAuthForm } from "../store/appSlice"; // Редюсер изменения отображения формы фвторизации

export default function ButtonsAuth() {
  const dispatch = useDispatch();
  const total = useSelector((state) => state.app.total); // Колличество пользователеё
  const usersLength = useSelector((state) => state.users.users.length); // длинна  массива пользователей

  // Функция изменяет отображение формы фвторизации
  function handlerAuth(e) {
    dispatch(setShowAuthForm({ showAuthFormString: e.target.dataset.auth }));
  }

  let out = (
    <div className={`btn-group sm:order-3 ${usersLength < total && "hidden"}`}>
      <button
        className="btn btn-xs btn-ghost text-[10px]"
        onClick={handlerAuth}
        data-auth="login"
      >
        SingIn
      </button>
      <button
        className="btn btn-xs btn-ghost text-[10px]"
        onClick={handlerAuth}
        data-auth="registration"
      >
        SingUP
      </button>
    </div>
  );

  return out;
}
