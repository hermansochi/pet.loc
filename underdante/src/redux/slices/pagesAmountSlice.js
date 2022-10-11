import { createSlice } from '@reduxjs/toolkit' ;

export const pagesAmountSlice = createSlice({
  name: 'pagesAmount',
  initialState: {amount:0 ,
  isDone:false ,
  } ,
  reducers: {
    setPagesAmount: (state ,action) => {
      state.isDone = true ;
      state.amount = action.payload.amount ;
    },
}
});

export const { setPagesAmount } = pagesAmountSlice.actions ;

export default pagesAmountSlice.reducer ;