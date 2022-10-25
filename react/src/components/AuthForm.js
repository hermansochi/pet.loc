import React from "react";
import { useSelector, useDispatch } from "react-redux"; // Хук состояния
import SvgComponent from "./SvgComponent"; // Компонент для svg элементов
import { setShowAuthForm } from "../store/appSlice"; // Рудюсер изменения отбражения формы авторизации
import { useForm } from "react-hook-form"; // Библиотека для управления формами

export default function AuthForm() {
  const dispatch = useDispatch();
  const showAuthForm = useSelector((state) => state.app.showAuthForm); // Состояние отображения формы авторизации

  // Объект для управления формой
  const {
    register,
    handleSubmit,
    formState: { errors, isValid },
    reset,
  } = useForm({
    mode: "onChange",
  });

  // Стили формы
  const style =
    "fixed self-center top-[20%] justify-self-center w-56 sm:w-96 h-80 z-50 bg-secondary p-2 pt-7 flex flex-col items-center space-y-1";
  const style2 = "absolute top-2 right-3 w-3 h-3 cursor-pointer";

  // Функция скрывает форму авторизации
  function closeForm() {
    dispatch(setShowAuthForm({ showAuthFormString: "close" }));
  }

  // Обработчик перехватывающий событие "отправить"
  function submit(data) {
    console.log(data);
    reset(); // Очистка полей формы
  }

  let out;

  switch (showAuthForm) {
    case "registration":
      out = (
        <form className={style} onSubmit={handleSubmit(submit)}>
          <div className={style2} onClick={closeForm}>
            <SvgComponent name="close" />
          </div>
          REGISTRATION
          <div className="flex flex-col w-full max-w-xs">
            <label className="label p-1">
              <span className="label-text text-[10px]">What is your name?</span>
            </label>
            <input
              type="text"
              placeholder="write your name"
              className="input input-xs input-bordered w-full"
              {...register("name", {
                required: "⚠ Это поле обязательно к заполнению",
                minLength: {
                  value: 3,
                  message: "⚠ Имя должно быть не меньше трёх символов",
                },
              })}
            />
            <div className="text-[10px] text-red-400">
              {errors?.name && <p>{errors?.name?.message || "⚠ Error!"}</p>}
            </div>
          </div>
          <div className="flex flex-col w-full max-w-xs">
            <label className="label p-1">
              <span className="label-text text-[10px]">Write password</span>
            </label>
            <input
              type="password"
              placeholder="write your password"
              className="password input input-xs input-bordered w-full"
              {...register("pass", {
                required: "⚠ Это поле обязательно к заполнению",
                minLength: {
                  value: 6,
                  message: "⚠ Пароль должно быть не меньше шести символов",
                },
              })}
            />
            <div className="text-[10px] text-red-400">
              {errors?.pass && <p>{errors?.pass?.message || "⚠ Error!"}</p>}
            </div>
          </div>
          <div className="flex flex-col w-full max-w-xs">
            <label className="label p-1">
              <span className="label-text text-[10px]">
                Repeat your password
              </span>
            </label>
            <input
              type="password"
              placeholder="reapet your password"
              className="input input-xs input-bordered w-full"
              {...register("rep", {
                required: "⚠ Это поле обязательно к заполнению",
                validate: (value) =>
                  value === document.querySelector(".password").value,
              })}
            />
            <div className="text-[10px] text-red-400">
              {errors?.rep && (
                <p>{errors?.rep?.message || "⚠ Пароли не совпадают"}</p>
              )}
            </div>
          </div>
          <button
            className={`btn btn-xs btn-ghost ${
              !isValid && "cursor-not-allowed"
            }`}
            type="submit"
          >
            SING UP
          </button>
        </form>
      );
      break;

    case "login":
      out = (
        <form className={style} onSubmit={handleSubmit(submit)}>
          <div className={style2} onClick={closeForm}>
            <SvgComponent name="close" />
          </div>
          AUTHENTIFICATION
          <div className="flex flex-col w-full max-w-xs">
            <label className="label p-1">
              <span className="label-text text-[10px]">What is your name?</span>
            </label>
            <input
              type="text"
              placeholder="write your name"
              className="input input-xs input-bordered w-full"
              {...register("name", {
                required: "⚠ Это поле обязательно к заполнению",
                minLength: {
                  value: 3,
                  message: "⚠ Имя должно быть не меньше трёх символов",
                },
              })}
            />
            <div className="text-[10px] text-red-400">
              {errors?.name && <p>{errors?.name?.message || "⚠ Error!"}</p>}
            </div>
          </div>
          <div className="flex flex-col w-full max-w-xs">
            <label className="label p-1">
              <span className="label-text text-[10px]">Write password</span>
            </label>
            <input
              type="password"
              placeholder="write your password"
              className="input input-xs input-bordered w-full"
              {...register("pass", {
                required: "⚠ Это поле обязательно к заполнению",
                minLength: {
                  value: 6,
                  message: "⚠ Пароль должно быть не меньше шести символов",
                },
              })}
            />
            <div className="text-[10px] text-red-400">
              {errors?.pass && <p>{errors?.pass?.message || "⚠ Error!"}</p>}
            </div>
          </div>
          <button
            className={`btn btn-xs btn-ghost ${
              !isValid && "cursor-not-allowed"
            }`}
            type="submit"
          >
            SING IN
          </button>
        </form>
      );
      break;

    default:
      out = null;
      break;
  }

  return out;
}
