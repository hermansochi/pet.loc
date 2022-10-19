import React from "react";
import store from "../store/store";
import { Provider } from "react-redux";

export default function RenderWrapperTest({ component }) {
  let out = component && <Provider store={store}>{component()}</Provider>;

  return out;
}
