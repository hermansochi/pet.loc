import React, { useEffect } from "react";
import QrModal from "./components/QrModal";
import Header from "./components/Header";
import Main from "./components/Main";
import PreloaderUser from "./components/PreloaderUser";
import { devUrl, healthcheck, versionApi, headers } from "./patch";
import { useSelector, useDispatch } from "react-redux";
import { fetchUsers } from "./store/usersSlice";
import { setTotal, setPerPage, setPage, setShowqr } from "./store/appSlice";

function App() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme);
  const showQr = useSelector((state) => state.app.showqr);
  const page = useSelector((state) => state.app.page);
  const { status, error } = useSelector((state) => state.users);

  const url = new URL(`${devUrl}${versionApi}`);

  useEffect(() => {
    fetch(url + healthcheck, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.status === "up") {
          dispatch(setPerPage({ perPageNumber: response.employees.per_page }));
          loadUsersBase(response.employees.per_page, response.employees.total);
        } else {
          alert("bad conncet");
        }
      });
  }, []);

  function loadUsersBase(perPage, total) {
    for (let i = 1; i <= perPage; i++) {
      dispatch(fetchUsers(i));
    }
    dispatch(setTotal({ totalNumber: total }));
  }

  document.body.onclick = (e) => {
    if (!e.target.classList.contains("qr")) {
      dispatch(setShowqr({ showqrBoolean: false }));
    }
  };

  window.onscroll = function () {
    let scrollHeight, totalHeight;
    scrollHeight = document.body.scrollHeight;
    totalHeight = window.scrollY + window.innerHeight;

    if (totalHeight >= scrollHeight) {
      dispatch(setPage({ pageNumber: page + 1 }));
    }
  };

  return (
    <div className="w-full h-full flex flex-col" data-theme={theme}>
      <div className="absolute top-20 right-5 z-50"></div>
      {showQr && <QrModal />}
      <Header />
      {status === "loading" ? <PreloaderUser /> : <Main />}
      {error && <div>Error: {error}</div>}
    </div>
  );
}

export default App;
