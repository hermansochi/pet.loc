import { createSlice } from '@reduxjs/toolkit' ;

const fullDataSlice = createSlice({
  name: 'fullData',
  initialState: [] ,
  reducers: {
    setFullData: (state ,action) => {
      return action.payload.data ;
    },
}
});

export const { setFullData } = fullDataSlice.actions ;

export default fullDataSlice.reducer ;