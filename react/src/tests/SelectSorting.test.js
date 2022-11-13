import React from "react";
import { screen, render } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import SelectSorting from "../components/SelectSorting";
// import store from "../store/store";
// import * as actions from "../store/appSlice";

describe("SelectSorting component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <SelectSorting />} />);

    expect(screen.getByText(/сортировать/i)).toBeInTheDocument();
  });

  // test("Function changeDirectionSort should be change direction sorting", () => {
  //   render(<RenderWrapperTest component={() => <SelectSorting />} />);

  //   store.dispatch(actions.setDirectionSort({ directionBool: false }));
  //   expect(screen.getByText("↓")).toBeInTheDocument();
  // });
});
