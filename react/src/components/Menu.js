import React from "react";
import SvgComponent from "./SvgComponent"; // Компонент для SVG иконок

export default function Menu() {
  const styleLink =
    "h-7 w-7 duration-300 hover:scale-125 hover:text-primary cursor-pointer";

  const styleLine = "flex border border-current grow m-1 w-0";

  let out = (
    <div
      className="fixed z-20 top-[15%] right-[2%] h-[50%] flex flex-col justify-around items-center"
      data-testid="menu"
    >
      <div className={styleLine}></div>
      <div className={styleLink}>
        <SvgComponent name="users" />
      </div>
      <div className={styleLine}></div>
      <div className={styleLink}>
        <SvgComponent name="build" />
      </div>
      <div className={styleLine}></div>
      <div className={styleLink}>
        <SvgComponent name="present" />
      </div>
    </div>
  );

  return out;
}
