import { configureStore } from '@reduxjs/toolkit' ;
import dataSlice from '../slices/dataSlice';


export default configureStore({
  reducer: {
    data : dataSlice ,
  },
});