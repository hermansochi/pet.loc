import React, { useState } from "react";
import Header from "./components/Header";

function App() {
  const [theme, setTheme] = useState("retro");

  return (
    <div className="w-full h-full flex justify-center" data-theme={theme}>
      <Header setTheme={setTheme} />
    </div>
  );
}

export default App;
