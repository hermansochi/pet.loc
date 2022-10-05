import React, { useState } from "react";
import Header from "./components/Header";

function App() {
  const [theme, setTheme] = useState("retro");
  const [region, setRegion] = useState("все");
  const [sorting, setSorting] = useState("name");
  const [search, setSearch] = useState("");
  const [directionSort, setDirectionSort] = useState(true);

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
