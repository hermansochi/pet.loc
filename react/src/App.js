import React, { useState } from "react";
import Header from "./components/Header";

function App() {
  const [theme, setTheme] = useState("retro");
  const [region, setRegion] = useState("все");
  const [sorting, setSorting] = useState("name");

  return (
    <div className="w-full h-full flex justify-center" data-theme={theme}>
      <Header
        setTheme={setTheme}
        region={region}
        setRegion={setRegion}
        sorting={sorting}
        setSorting={setSorting}
      />
    </div>
  );
}

export default App;
