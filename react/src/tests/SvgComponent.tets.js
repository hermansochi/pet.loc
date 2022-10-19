import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { screen, render } from "@testing-library/react";
import SvgComponent from "../components/SvgComponent";

describe("SvgComponent component", () => {
  test("Shoul bt rendered", () => {
    render(<RenderWrapperTest component={() => <SvgComponent />} />);

    const elem = screen.getByTestId("svg");

    expect(elem).toBeInTheDocument();
  });
});
