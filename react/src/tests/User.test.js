/* eslint-disable camelcase */
import React from "react";
import RenderWrapperTest from "./RenderWrapperTest";
import { screen, render } from "@testing-library/react";
import User from "../components/User";

describe("User component", () => {
  test("Should be rendered", () => {
    render(
      <RenderWrapperTest
        component={() => (
          <User
            data={{
              id: "976b48f0-7fd3-4d03-82ce-395ddeafe5d5",
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
          />
        )}
      />
    );

    const elem = screen.getByText(/день рождения/i);

    expect(elem).toBeInTheDocument();
  });
});
