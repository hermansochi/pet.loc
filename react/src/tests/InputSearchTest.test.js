import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { render, screen } from "@testing-library/react";
import InputSearch from "../components/InputSearch";

describe("InputSearch comopnent", () => {
  test("Should be rebdered", () => {
    render(<RenderWrapperTest component={() => <InputSearch />} />);

    const elem = screen.getByPlaceholderText(/поиск/i);

    expect(elem).toBeInTheDocument();
  });
});
