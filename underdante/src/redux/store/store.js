import { configureStore } from '@reduxjs/toolkit' ;
import pagesAmountSlice from '../slices/pagesAmountSlice' ;
import currentDataSlice  from '../slices/currentDataSlice';
import fullDataSlice from '../slices/fullDataSlice';
import dataSlice from '../slices/dataSlice';


export default configureStore({
  reducer: {
    pagesAmount : pagesAmountSlice ,
    currentData : currentDataSlice ,
    fullData:fullDataSlice ,
    data : dataSlice ,
  },
});