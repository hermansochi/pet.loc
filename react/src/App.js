import React, { useState, useEffect } from "react";
import Header from "./components/Header";
import Main from "../src/components/main/"


function App() {
  const [theme, setTheme] = useState("cupcake");
  const [region, setRegion] = useState("все");
  const [sorting, setSorting] = useState("name");
  const [search, setSearch] = useState("");
  const [directionSort, setDirectionSort] = useState(true);

  const url = new URL("http://api.localhost/api/v1/healthcheck");
  const headers = {
    "Content-Type": "application/json",
    Accept: "application/json",
  };

  useEffect(() => {
    fetch(url, {
      method: "GET",
      headers,
    })
      .then((response) => response.json())
      .then((response) => {
        console.log(response);
        if (response.status === "up") {
          console.log("good");
        } else {
          alert("bad");
        }
      });
  }, []);

  return (
    <div className="w-full h-full flex justify-center" data-theme={theme}>
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
      />
    </div>
  );
}

export default App;
