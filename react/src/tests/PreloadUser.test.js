import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { render, screen } from "@testing-library/react";
import PreloaderUser from "../components/PreloaderUser";

describe("PreloaderUser component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <PreloaderUser />} />);

    expect(screen.getByTestId("preloaderuser")).toBeInTheDocument();
  });
});
