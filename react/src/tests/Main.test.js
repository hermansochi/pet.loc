import React from "react";
import { render, screen } from "@testing-library/react";
import Main from "../components/Main";
import RenderWrapperTest from "./RenderWrapperTest";

describe("Main component", () => {
  test("Should be render", () => {
    render(<RenderWrapperTest component={() => <Main />} />);

    const elem = screen.getByTestId("main");

    expect(elem).toBeInTheDocument();
  });
});
