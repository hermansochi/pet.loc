import React from "react";
import { screen, render, fireEvent } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import SelectTheme from "../components/SelectTheme";
import store from "../store/store";

describe("SelectTheme component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <SelectTheme />} />);

    expect(screen.getByText(/тема/i)).toBeInTheDocument();
  });

  test("Should be change theme store", () => {
    render(<RenderWrapperTest component={() => <SelectTheme />} />);

    fireEvent.click(screen.getByRole("checkbox"));
    expect(store.getState().app.theme).toBe(true);
  });
});
