import React, { useEffect } from "react";
import QrModal from "./components/QrModal"; // Компонент для показа QR кода текущего польвателя
import Header from "./components/Header"; // Компонент шапка сайта
import Main from "./components/Main"; // Компонент для основного контента
import PreloaderUser from "./components/PreloaderUser"; // Компонент заглушка во время загрузки данных
import { devUrl, healthcheck, versionApi, headers } from "./patch"; // константы путей
import { useSelector, useDispatch } from "react-redux"; // хуки редакса
import { fetchUsers } from "./store/usersSlice"; // асинхронный редюсер для загрузки данных
import { setTotal, setPerPage, setShowqr } from "./store/appSlice"; // редюсеры изменеия состояния приложения

function App() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme); // Изначальная цветовая тема
  const showQr = useSelector((state) => state.app.showqr); // Состояние показа QR кода (изначально скрыто)
  const { status, error } = useSelector((state) => state.users); // Состояние выполнения асинхронного редюсера

  const url = new URL(`${devUrl}${versionApi}`); // адрес с версией api

  useEffect(() => {
    // запрос для проверки соединения
    fetch(url + healthcheck, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.status === "up") {
          // Запускаем редюсер для определения колличества юзеров на странице
          dispatch(setPerPage({ perPageNumber: response.employees.per_page }));
          // Запускаем функцию загрузки базы данных с юзерами
          loadUsersBase(response.employees.per_page, response.employees.total);
        } else {
          // Вывод сообщения о плохом соеденении
          alert("bad connect");
        }
      });
  }, []);

  // Функция для загрузки базы пользователей, принимает первым параметром колличество полбзователеё на странице, и вторым параметром колличество всех пользователей, на каждой итерации цикла запускается редусер для добавление в хранилище с пользователями, после цикла выполняется редюсер для изменения хранилища с полнымн числом пользователей
  function loadUsersBase(perPage, total) {
    for (let i = 1; i <= Math.ceil(total / perPage); i++) {
      dispatch(fetchUsers(i));
    }
    dispatch(setTotal({ totalNumber: total }));
  }

  // Функция скрывает окно с QR кодом текущего пользователя, отслеживает клик по документу, если клик сработал на элементе не имеющем класса "qr" меняем состояние хранилища для показа QR кода
  document.body.onclick = (e) => {
    if (!e.target.classList.contains("qr")) {
      dispatch(setShowqr({ showqrBoolean: false }));
    }
  };
  console.log("render");
  // Отрисовка компонентов:
  // 1) Если showQr не равно true компонент QrModal скрыт
  // 2) Отрисовывается  компонент Header
  // 3) Пока асинхронный редюсер всостоянии "loading", показывается компонент PreloaderUser, как только состояние стало "resolved" отрисовывается компонент Main
  // 4) При появлении ошибки выводится сообщение об ошибке
  return (
    <div
      className="w-full h-full flex flex-col"
      data-theme={theme ? "luxury" : "garden"}
    >
      <div className="absolute top-20 right-5 z-50"></div>
      {showQr && <QrModal />}
      <Header />
      {status === "loading" ? <PreloaderUser /> : <Main />}
      {error && <div>Error: {error}</div>}
    </div>
  );
}

export default App;
