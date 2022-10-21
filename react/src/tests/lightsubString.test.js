import lightSubStrin from "../components/lightSubString";
import React from "react";

test("Function should be returned formated HTML elemets", () => {
  const str = "rrrXXX y y";
  const subString = "xxx";
  const len = 3;

  expect(lightSubStrin(str, subString, len)).toMatchObject([
    <div key="0" className="inline-block">
      r
    </div>,
    <div key="1" className="inline-block">
      r
    </div>,
    <div key="2" className="inline-block">
      r
    </div>,
    <span key="3" className="bg-green-500 inline-block text-black">
      xxx
    </span>,
    <div key="4" className="inline-block opacity-0">
      _
    </div>,
    <div key="5" className="inline-block">
      y
    </div>,
    <div key="6" className="inline-block opacity-0">
      _
    </div>,
    <div key="7" className="inline-block">
      y
    </div>,
  ]);
});

test("Function should be returned simple string", () => {
  const str = "rrr";
  const subString = "xxx";
  const len = 3;

  expect(lightSubStrin(str, subString, len)).toEqual("rrr");
});
