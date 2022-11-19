import React from "react";
import SelectCategory from "./SelectCategory" ;
import * as reduxHooks from "react-redux" ;
import * as actions from "../../redux/slices/dataSlice" ;
import { render , screen } from "@testing-library/react" ;
import userEvent from "@testing-library/user-event" ;

jest.mock("react-redux") ;


const jestDispatch = jest.spyOn(reduxHooks , 'useDispatch') ;

// const mockedSetCategory = jest.spyOn(actions , 'setCategoryFilter') ;

describe("input tests" ,() => {
    
   // отрисовываие
    it ('render select' , () => {
        render(<SelectCategory/>) ;
        
        expect(screen.getByRole('select')).toBeInTheDocument() ;
    }) ;

    // снапшот 
    it ('select snapshot' , () => {
        const view = render(<SelectCategory/>) ;

        expect(view).toMatchSnapshot() ;
    }) ;


    // вызовы функции при взаимодеиствии
    it ('onChange on select' , () => {
        const dispatch = jest.fn() ;
       
        const mackedResetFiltredusers = jest.spyOn(actions ,'resetFultredUsers') ;

        const mockedSetCategory = jest.spyOn(actions , 'setCategoryFilter') ;
       
        jestDispatch.mockReturnValue(dispatch) ; 
       
        render(<SelectCategory/>) ;
 
        // вызываем клик на option с определенным value
        userEvent.selectOptions(screen.getByRole('select'), ['cat-0']) ;

        // запускается диспатч , запускаются функций выбора и очистки
        expect(dispatch).toHaveBeenCalled() ;
        expect(mockedSetCategory).toHaveBeenCalled() ;
        expect(mackedResetFiltredusers).toHaveBeenCalled() ;
    }) ;



}) ;