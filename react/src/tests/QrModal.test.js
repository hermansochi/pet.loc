import React from "react";
import { screen, render } from "@testing-library/react";
import RenderWrapperTest from "./RenderWrapperTest";
import QrModal from "../components/QrModal";

describe("QrModal component", () => {
  test("Should be rendered", () => {
    render(<RenderWrapperTest component={() => <QrModal />} />);

    const elem = screen.getByAltText(/altQrCode/i);

    expect(elem).toBeInTheDocument();
  });
});
