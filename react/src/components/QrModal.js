import React from "react";
import { devUrl, versionApi, qrcodes } from "../patch"; // Пути для запросов
import { useSelector } from "react-redux"; // Хук состояния редакса

export default function QrModal() {
  const id = useSelector((state) => state.app.id); // Id текущего пользователя

  let out = (
    <div className="fixed self-center top-1/3 justify-self-center w-32 h-32 z-30 bg-white rounded-xl border border-current p-2">
      <img src={devUrl + versionApi + qrcodes + id} alt="altQrCode" />
    </div>
  );

  return out;
}
