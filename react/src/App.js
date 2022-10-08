import React, { useEffect } from "react";
import Header from "./components/Header";
import Main from "./components/Main";
import PreloaderUser from "./components/PreloaderUser";
import { devUrl, healthcheck, versionApi, headers } from "./patch.js";
import { useSelector, useDispatch } from "react-redux";
import { fetchUsers } from "./store/usersSlice";

function App() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme);
  const { status, error } = useSelector((state) => state.users);
  console.log(status);

  const url = new URL(`${devUrl}${versionApi}`);

  useEffect(() => {
    fetch(url + healthcheck, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.status === "up") {
          console.log("ok");
        } else {
          alert("bad conncet");
        }
      });
  }, []);

  useEffect(() => {
    dispatch(fetchUsers());
  }, [dispatch]);

  return (
    <div className="w-full h-full flex flex-col" data-theme={theme}>
      <Header />
      {status === "loading" ? <PreloaderUser /> : <Main />}
      {error && <div>Error: {error}</div>}
    </div>
  );
}

export default App;
