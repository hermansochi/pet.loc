import React from "react";
import SelectCategory from "./SelectCategory" ;
import * as reduxHooks from "react-redux" ;
// import * as actions from "../../redux/slices/dataSlice" ;
import { render , screen , fireEvent } from "@testing-library/react" ;
import userEvent from "@testing-library/user-event" ;

jest.mock("react-redux") ;


const jestDispatch = jest.spyOn(reduxHooks , 'useDispatch') ;


describe("input tests" ,() => {
    
   // отрисовываие
    it ('render select' , () => {
        render(<SelectCategory/>) ;
        
        expect(screen.getByRole('select')).toBeInTheDocument() ;
    }) ;

    // it ('onChange on select' , () => {
    //     const onChange = jest.fn() ;
    //     jestDispatch.mockReturnValue(onChange) ; 
        
    //     render(<SelectCategory/>) ;

    //     userEvent.click(screen.getByRole('select')) ;
    //     userEvent.click(screen.getByRole('0')) ;

    //     expect(onChange).toHaveBeenCalled() ;
    // }) ;



}) ;