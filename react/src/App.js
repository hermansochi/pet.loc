import React, { useState, useEffect } from "react";
import Header from "./components/Header";
import Main from "./components/Main";
import { devUrl, healthcheck, versionApi, headers, orgUsers } from "./patch.js";

function App() {
  const [theme, setTheme] = useState("cupcake");
  const [region, setRegion] = useState("все");
  const [sorting, setSorting] = useState("name");
  const [search, setSearch] = useState("");
  const [directionSort, setDirectionSort] = useState(true);
  const [stateUsers, setStateUsers] = useState([]);

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
        // console.log(response);
        setStateUsers(response.data);
      });
  }

  return (
    <div className="w-full h-full flex flex-col" data-theme={theme}>
      <Header
        setTheme={setTheme}
        region={region}
        setRegion={setRegion}
        sorting={sorting}
        setSorting={setSorting}
        setSearch={setSearch}
        search={search}
        directionSort={directionSort}
        setDirectionSort={setDirectionSort}
        stateUsers={stateUsers}
      />
      <Main stateUsers={stateUsers} />
    </div>
  );
}

export default App;
