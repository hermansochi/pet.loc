import React from "react";
import { screen, render } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import Progress from "../components/Progress";

describe("Prorgess component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <Progress />} />);

    const elem = screen.getByText(/загрузка базы/i);

    expect(elem).toBeInTheDocument();
  });
});
