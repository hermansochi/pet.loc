import React, { useEffect } from "react";
import QrModal from "./components/QrModal"; // Компонент для показа QR кода текущего польвателя
import Header from "./components/Header"; // Компонент шапка сайта
import Main from "./components/Main"; // Компонент для основного контента
import PreloaderUser from "./components/PreloaderUser"; // Компонент заглушка во время загрузки данных
import { url, version, healthcheck, headers } from "./patch"; // константы путей
import { useSelector, useDispatch } from "react-redux"; // хуки редакса
import { fetchUsers } from "./store/usersSlice"; // асинхронный редюсер для загрузки данных
import {
  setTotal,
  setPerPage,
  setShowqr,
  setPage,
  setShowAuthForm,
} from "./store/appSlice"; // редюсеры изменеия состояния приложения
import Menu from "./components/Menu"; // Компонент меню
import AuthForm from "./components/AuthForm";

function App() {
  const dispatch = useDispatch();
  const page = useSelector((state) => state.app.page); // номер страницы
  const theme = useSelector((state) => state.app.theme); // Изначальная цветовая тема
  const showQr = useSelector((state) => state.app.showqr); // Состояние показа QR кода (изначально скрыто)
  const { status, error } = useSelector((state) => state.users); // Состояние выполнения асинхронного редюсера

  useEffect(() => {
    // запрос для проверки соединения
    fetch(url + "/" + version + "/" + healthcheck, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.status === "up") {
          // Запускаем редюсер для определения колличества всех юзеров
          dispatch(setTotal({ totalNumber: response.employees.total }));
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
  }

  // Функция скрывает окно с QR кодом текущего пользователя, отслеживает клик по документу, если клик сработал на элементе не имеющем класса "qr" меняем состояние хранилища для показа QR кода
  document.body.onclick = (e) => {
    if (!e.target.classList.contains("qr")) {
      dispatch(setShowqr({ showqrBoolean: false }));
    }
  };

  // Фунция отслеживает прокрутку документа до самого низа и отрисовывает дополнительно ещё 1-- пользователей
  window.onscroll = () => {
    let scrollHeight = document.body.scrollHeight;
    let totalHeight = window.scrollY + window.innerHeight;

    if (totalHeight >= scrollHeight) {
      dispatch(setPage({ pageNumber: page + 1 }));
    }
  };

  // Функция отслеживает нажатие на "Escape" и скрывает форму авторизации
  window.onkeydown = (e) => {
    if (e.key === "Escape") {
      dispatch(setShowAuthForm({ showAuthFormString: "close" }));
    }
  };

  // Отрисовка компонентов:
  // 1) Если showQr не равно true компонент QrModal скрыт
  // 2) Отрисовывается  компонент Header
  // 3) Пока асинхронный редюсер всостоянии "loading", показывается компонент PreloaderUser, как только состояние стало "resolved" отрисовывается компонент Main
  // 4) При появлении ошибки выводится сообщение об ошибке
  return (
    <div
      className="w-full h-full flex flex-col"
      data-theme={theme ? "luxury" : "garden"}
      data-testid="app"
    >
      <Menu />
      <div className="absolute top-20 right-5 z-50"></div>
      {showQr && <QrModal />}
      <Header />
      {status === "loading" ? <PreloaderUser /> : <Main />}
      {error && <div>Error: {error}</div>}
      <AuthForm />
    </div>
  );
}

export default App;
