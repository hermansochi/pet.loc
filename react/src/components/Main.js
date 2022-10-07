import React from "react";
import User from "./User";

export default function Main({ stateUsers }) {
  let out = (
    <div className="w-full flex flex-col items-center">
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
      <User user={stateUsers[0]} />
    </div>
  );

  return out;
}
