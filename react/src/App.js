import React, { useEffect } from "react";
import QrModal from "./components/QrModal";
import Header from "./components/Header";
import Main from "./components/Main";
import PreloaderUser from "./components/PreloaderUser";
import { devUrl, healthcheck, versionApi, headers } from "./patch";
import { useSelector, useDispatch } from "react-redux";
import { fetchUsers } from "./store/usersSlice";
import { setShowqr } from "./store/appSlice";

function App() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme);
  const showQr = useSelector((state) => state.app.showqr);
  const { status, error } = useSelector((state) => state.users);

  const url = new URL(`${devUrl}${versionApi}`);

  useEffect(() => {
    fetch(url + healthcheck, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.status !== "up") {
          alert("bad conncet");
        }
      });
  }, []);

  useEffect(() => {
    dispatch(fetchUsers(5));
  }, [dispatch]);

  document.body.onclick = (e) => {
    if (!e.target.classList.contains("qr")) {
      dispatch(setShowqr({ showqrBoolean: false }));
    }
  };

  return (
    <div className="w-full h-full flex flex-col" data-theme={theme}>
      {showQr && <QrModal />}
      <Header />
      {status === "loading" ? <PreloaderUser /> : <Main />}
      {error && <div>Error: {error}</div>}
    </div>
  );
}

export default App;
