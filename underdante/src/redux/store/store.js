import { configureStore } from '@reduxjs/toolkit' ;
import pagesAmountSlice from '../slices/pagesAmountSlice' ;
import currentDataSlice  from '../slices/currentDataSlice';
import fullDataSlice from '../slices/fullDataSlice';

export default configureStore({
  reducer: {
    pagesAmount : pagesAmountSlice ,
    currentData : currentDataSlice ,
    fullData:fullDataSlice ,
  },
});