/* eslint-disable camelcase */
import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { screen, render, fireEvent } from "@testing-library/react";
import User from "../components/User";
import store from "../store/store";

describe("User component", () => {
  const renderComponent = () =>
    render(
      <RenderWrapperTest
        component={() => (
          <User
            data={{
              id: "111",
              name: "Alexandrov.H.976b48f0-7fd3-4d03-82ce-395ddeafe5d5",
              hide: false,
              thumbnail: true,
              gender: "m",
              first_name: "Герман",
              last_name: "Александров",
              middle_name: "Евгеньевич",
              birthday: "25.01",
              email: "hermansochi@ya.ru",
              cn: "Александров Герман Евгеньевич",
              telephone: "6677",
              mobile: "9899001010",
              title: "Web developer",
              department: "Dream team",
              company: "Looking for a job",
              city: "Сочи",
              created_at: "2022-10-17T07:35:11.000000Z",
              updated_at: "2022-10-17T07:35:11.000000Z",
            }}
            str={""}
          />
        )}
      />
    );

  test("Should be rendered", () => {
    renderComponent();

    expect(screen.getByText(/день рождения/i)).toBeInTheDocument();
  });

  test("Functinon formateNum should be return formated string", () => {
    const mockFormateNum = jest.fn(function formateNum(num) {
      let n = num.split("");
      return `+7 (${n[0]}${n[1]}${n[2]}) ${n[3]}${n[4]}${n[5]} ${n[6]}${n[7]} ${n[8]}${n[9]}`;
    });

    expect(mockFormateNum("1234567890")).toEqual("+7 (123) 456 78 90");
  });

  test("Action setId retrn string", () => {
    renderComponent();

    fireEvent.click(screen.getByTestId("qr"));
    expect(store.getState().app.id).toBe("111");
    expect(store.getState().app.showqr).toBeTruthy();
  });
});
