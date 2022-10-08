import React from "react";
import SvgComponent from "./SvgComponent";

export default function User() {
  const styleP = "leading-[8px] text-xs bg-current rounded-xl my-1";

  let preloaderCart = (
    <div className="w-full outline outline-8 outline-secondary h-20 my-1.5  flex  items-center text-xs px-4 py-2 space-x-2 relative">
      <div className="h-full min-h-[36px] min-w-[36px] aspect-square rounded-full flex items-center overflow-hidden  border-current">
        <SvgComponent name="people" />
      </div>
      <div className="flex min-w-[280px] flex-col justify-center h-full p-2">
        <p className={styleP}>*********************************</p>
        <p className={styleP}>**********************</p>
        <p className={styleP}>******************************</p>
        <p className={styleP}>******************</p>
      </div>
      <div className="flex w-[25%] min-w-[280px] flex-col justify-center  h-full p-2">
        <p className={styleP}>******************* **********************</p>
        <p className={styleP}>********************** **********************</p>
        <p className={styleP}>**********************</p>
      </div>
      <div className="flex w-[25%] flex-col justify-center h-full p-2">
        <p className={styleP}>*******************************</p>
        <p className={styleP}>********************** *** ***</p>
      </div>
      <div className="flex flex-grow h-full justify-end">
        <div className="border-current h-full aspect-square border rounded-2xl p-2 cursor-pointer duration-700 backdrop-opacity-0">
          <div className="w-full h-full  animate-spin">
            <SvgComponent name="preloader" />
          </div>
        </div>
      </div>
    </div>
  );

  let out = (
    <div className="flex flex-col w-full">
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
      {preloaderCart}
    </div>
  );

  return out;
}
