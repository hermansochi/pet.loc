import React from "react";
import Input from "./Input" ;
import * as reduxHooks from "react-redux" ;
import * as actions from "../../redux/slices/dataSlice" ;
import { render , screen } from "@testing-library/react" ;
import userEvent from "@testing-library/user-event" ; 

jest.mock("react-redux") ;


const jestSelector = jest.spyOn(reduxHooks , 'useSelector') ;
const jestDispatch = jest.spyOn(reduxHooks , 'useDispatch') ;

describe("input tests" ,() => {
    
   // отрисовываие инпута вообще 
    it ('render input' , () => {
        jestSelector.mockReturnValue('') ;
        
        render(<Input/>) ;
        
        expect(screen.getByRole('input')).toBeInTheDocument() ;
    }) ;
    

// сты работы инпута на ввод данный и вызов функции    
it ('onChange in input' , () => {
    const onChange = jest.fn() ;
    jestDispatch.mockReturnValue(onChange) ;

    const jestSelection = jest.spyOn(actions , 'selection') ;
    const jestReset = jest.spyOn(actions , 'resetFultredUsers') ;
 
render(<Input/>) ;

userEvent.type(screen.getByRole('input') , "test") ;

expect(onChange).toHaveBeenCalledTimes(4) ; //запуск приизменении
expect(jestSelection).toHaveBeenCalledTimes(2) ; // отправка в стор при длинне >2
expect(jestReset).toHaveBeenCalledTimes(2) ; // сброс стора при длинне <2

}) ;





}) ;