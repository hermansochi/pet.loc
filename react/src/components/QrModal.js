import React from "react";
import { useSelector } from "react-redux";

export default function QrModal() {
  const id = useSelector((state) => state.app.id);

  let out = (
    <div className="absolute top-[20%] right-[20%] w-32 h-32 z-30 bg-white rounded-xl border border-current p-2">
      <img src={"http://api.localhost/api/v1/org/qrcodes/" + id} alt="alt" />
    </div>
  );

  return out;
}
