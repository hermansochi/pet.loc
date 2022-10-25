import React from "react";
import { useSelector, useDispatch } from "react-redux"; // Хук состояния
import SvgComponent from "./SvgComponent"; // Компонент для svg элементов
import { setShowAuthForm } from "../store/appSlice"; // Рудюсеизменения отбражения формы авторизации

export default function AuthForm() {
  const dispatch = useDispatch();
  const showAuthForm = useSelector((state) => state.app.showAuthForm);
  const style =
    "fixed self-center top-[20%] justify-self-center w-56 h-80 z-50 bg-secondary rounded-lg  p-2 flex flex-col pt-7";
  const style2 = "absolute top-2 right-2 w-3 h-3 cursor-pointer";

  function closeForm() {
    dispatch(setShowAuthForm({ showAuthFormString: "close" }));
  }

  let out;

  switch (showAuthForm) {
    case "login":
      out = (
        <div className={style}>
          <div className={style2} onClick={closeForm}>
            <SvgComponent name="close" />
          </div>
          LOGIN
        </div>
      );
      break;

    case "registration":
      out = (
        <div className={style}>
          <div className={style2} onClick={closeForm}>
            <SvgComponent name="close" />
          </div>
          REGUSTRATION
        </div>
      );
      break;

    default:
      out = null;
      break;
  }

  return out;
}
