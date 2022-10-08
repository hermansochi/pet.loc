import React, { useEffect } from "react";
import Header from "./components/Header";
import Main from "./components/Main";
import { devUrl, healthcheck, versionApi, headers, orgUsers } from "./patch.js";
import { useSelector, useDispatch } from "react-redux";
import { setUsers } from "./store/usersSlice";

function App() {
  const dispatch = useDispatch();
  const theme = useSelector((state) => state.app.theme);

  const url = new URL(`${devUrl}${versionApi}`);

  useEffect(() => {
    fetch(url + healthcheck, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.status === "up") {
          getList();
        } else {
          alert("bad conncet");
        }
      });
  }, []);

  function getList() {
    fetch(url + orgUsers + "?page=2", {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        console.log(response);
        dispatch(setUsers({ usersArray: response.data }));
      });
  }

  return (
    <div className="w-full h-full flex flex-col" data-theme={theme}>
      <Header />
      <Main />
    </div>
  );
}

export default App;
