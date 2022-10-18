import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { render, screen } from "@testing-library/react";
import Menu from "../components/Menu";

describe("Menu component", () => {
  test("Should be render", () => {
    render(<RenderWrapperTest component={() => <Menu />} />);

    const elem = screen.getByTestId("menu");

    expect(elem).toBeInTheDocument();
  });
});
