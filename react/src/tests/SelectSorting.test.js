import React from "react";
import { screen, render } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import SelectSorting from "../components/SelectSorting";

describe("SelectSorting component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <SelectSorting />} />);

    const elem = screen.getByText(/сортировать/i);

    expect(elem).toBeInTheDocument();
  });
});
