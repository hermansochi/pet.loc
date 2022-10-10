import React from "react";
import { devUrl, versionApi, qrcodes } from "../patch";
import { useSelector } from "react-redux";

export default function QrModal() {
  const id = useSelector((state) => state.app.id);

  let out = (
    <div className="fixed self-center top-1/3 justify-self-center w-32 h-32 z-30 bg-white rounded-xl border border-current p-2">
      <img
        src={devUrl + versionApi + qrcodes + id}
        alt="alt"
        onLoad={() => console.log("load")}
      />
    </div>
  );

  return out;
}
