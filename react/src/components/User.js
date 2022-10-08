import React from "react";
import SvgComponent from "./SvgComponent";
import { useSelector } from "react-redux";

export default function User({ data }) {
  const theme = useSelector((state) => state.app.theme);

  function formateNum(num) {
    let n = num.split("");
    return `+7 (${n[0]}${n[1]}${n[2]}) ${n[3]}${n[4]}${n[5]} ${n[6]}${n[7]} ${n[8]}${n[9]}`;
  }

  function handlerClickQR(e) {
    let t = e.currentTarget;
    t.classList.toggle("scale-[300%]");
    t.classList.toggle("translate-x-[-200px]");
    t.classList.toggle("z-20");
    t.classList.toggle("bg-white");
    t.firstElementChild.classList.toggle("bg-white");
    if (theme === "luxury" || theme === "night") {
      t.firstElementChild.classList.toggle("bg-current");
    }
  }

  function changeImage(e) {
    e.currentTarget.nextElementSibling.classList.add("hidden");
    e.currentTarget.classList.remove("hidden");
  }

  let gender;
  switch (data.gender) {
    case "m":
      gender = "man";
      break;
    case "f":
      gender = "woman";
      break;

    default:
      gender = "";
      break;
  }

  let styleImg = "";
  switch (theme) {
    case "luxury":
      styleImg = " brightness-110 bg-current";
      break;

    case "night":
      styleImg = " brightness-110 bg-current";
      break;

    case "synthwave":
      styleImg = " brightness-110 bg-current";
      break;

    default:
      break;
  }

  let out = (
    <div className="w-full outline outline-8 outline-secondary h-20 my-1.5  flex  items-center text-xs px-4 py-2 space-x-2 relative">
      <div className="h-full min-h-[36px] min-w-[36px] aspect-square rounded-full flex items-center overflow-hidden  border-current">
        <SvgComponent name="people" />
        <div className="absolute top-4 left-4 h-3 w-3 z-10">
          <SvgComponent name={gender} />
        </div>
      </div>
      <div className="flex min-w-[280px] flex-col justify-center h-full p-2">
        <div className="text-sm font-medium">{data.cn}</div>
        <div>{data.company}</div>
        <div>{data.department}</div>
        <div>{data.title}</div>
      </div>
      <div className="flex w-[25%] min-w-[280px] flex-col justify-center  h-full p-2">
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">
            телефон:{" "}
          </span>
          {data.telephone}
        </div>
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">
            мобильный:{" "}
          </span>
          {formateNum(data.mobile)}
        </div>
        <div className="w-full">
          <span className="font-medium min-w-[90px] inline-block">email: </span>
          {data.email}
        </div>
      </div>
      <div className="flex w-[25%] flex-col justify-center h-full p-2">
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">
            день рождения:{" "}
          </span>
          {data.birthday}
        </div>
        <div className="w-full">
          <span className="font-medium w-[50%] inline-block">город: </span>
          {data.city}
        </div>
      </div>
      <div className="flex flex-grow h-full justify-end">
        <div
          className="relative border-current h-full aspect-square border rounded-2xl p-2 cursor-pointer duration-700 backdrop-opacity-0"
          onClick={handlerClickQR}
        >
          <img
            className={styleImg}
            src={`http://api.localhost/api/v1/org/qrcodes/${data.id}`}
            alt="alt"
            onLoad={changeImage}
          />
          <div className="w-full h-full  animate-spin bg-transparent">
            <SvgComponent name="preloader" />
          </div>
        </div>
      </div>
    </div>
  );

  return out;
}
