import React from "react";

// Функция подсвечивает подстроку по которой вёлся поиск в параметрах пользователя на странице
export default function lightSubStrin(str, subString, len) {
  if (subString && len > 2) {
    let reg = new RegExp(subString, "i");
    if (reg.test(str)) {
      let result = [];
      str = str.replace(reg, "^");
      str = str.split("");
      str.forEach((el, i) => {
        if (el === "^") {
          let span = (
            <span className="bg-green-500 inline-block text-black" key={i}>
              {subString}
            </span>
          );
          result.push(span);
        } else if (el === " ") {
          let div = (
            <div className="inline-block opacity-0" key={i}>
              {"_"}
            </div>
          );
          result.push(div);
        } else {
          let div = (
            <div className="inline-block" key={i}>
              {el}
            </div>
          );
          result.push(div);
        }
      });
      return result;
    } else {
      return str;
    }
  } else {
    return str;
  }
}
