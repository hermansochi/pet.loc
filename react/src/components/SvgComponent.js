/* eslint-disable react/prop-types */
import React from "react";
import PropType from "prop-types";

SvgComponent.PropType = {
  name: PropType.string,
};

const icons = {
  search: {
    path: (
      <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
    ),
    box: "0 0 512 512",
  },

  close: {
    path: (
      <path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
    ),
    box: "0 0 320 512",
  },
};
export default function SvgComponent({ name }) {
  let out = (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      className="fill-current"
      viewBox={icons[name].box}
    >
      {icons[name].path}
    </svg>
  );

  return out;
}
