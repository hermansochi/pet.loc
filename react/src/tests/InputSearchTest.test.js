import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { render, screen } from "@testing-library/react";
import InputSearch from "../components/InputSearch";
// import store from "../store/store";
// import * as actions from "../store/appSlice";

describe("InputSearch comopnent", () => {
  // const mockSetSearch = jest.spyOn(actions, "setSearch");
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <InputSearch />} />);

    expect(screen.getByPlaceholderText(/поиск/i)).toBeInTheDocument();
  });

  // test("Function deletTextSearch should be clear string of search", () => {
  //   render(<RenderWrapperTest component={() => <InputSearch />} />);

  //   fireEvent.click(screen.getByTestId("clearSearch"));
  //   expect(mockSetSearch).toHaveBeenCalledWith("");
  //   expect(screen.getByPlaceholderText(/поиск/i).value).toBe("");
  // });

  // test("Function inputSearch should be change string of search", () => {
  //   render(<RenderWrapperTest component={() => <InputSearch />} />);

  //   fireEvent.change(screen.getByPlaceholderText(/поиск/i));
  //   expect(mockSetSearch).toHaveBeenCalledWith({ searchString: "hello" });
  //   expect(screen.getByPlaceholderText(/поиск/i).value).toBe("");
  // });
});
