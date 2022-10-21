import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { render, screen} from "@testing-library/react";
import InputSearch from "../components/InputSearch";

describe("InputSearch comopnent", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <InputSearch />} />);

    expect(screen.getByPlaceholderText(/поиск/i)).toBeInTheDocument();
  });
});
