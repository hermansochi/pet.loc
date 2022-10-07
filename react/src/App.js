import React, { useState, useEffect } from "react";
import Header from "./components/Header";
import Main from "./components/Main";
import { devUrl, healthcheck, versionApi, headers, orgUsers } from "./patch.js";
import { useSelector } from "react-redux";

function App() {
  const [stateUsers, setStateUsers] = useState([]);
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
          alert("bad");
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
        setStateUsers(response.data);
      });
  }

  return (
    <div className="w-full h-full flex flex-col" data-theme={theme}>
      <Header stateUsers={stateUsers} />
      <Main stateUsers={stateUsers} />
    </div>
  );
}

export default App;
