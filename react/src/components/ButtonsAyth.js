import React from "react";

export default function ButtonsAuth() {
  let out = (
    <div className="btn-group sm:order-3">
      <button className="btn btn-xs btn-ghost text-[10px]">SingIn</button>
      <button className="btn btn-xs btn-ghost text-[10px]">SingUP</button>
    </div>
  );

  return out;
}
