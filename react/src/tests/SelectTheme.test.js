import React from "react";
import { screen, render } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import SelectTheme from "../components/SelectTheme";

describe("SelectTheme component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <SelectTheme />} />);

    const elem = screen.getByText(/тема/i);

    expect(elem).toBeInTheDocument();
  });
});
