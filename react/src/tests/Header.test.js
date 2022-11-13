import React from "react";
import { render, screen } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import Header from "../components/Header";

describe("Header component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <Header />} />);

    expect(screen.getByText(/тема/i)).toBeInTheDocument();
  });
});
