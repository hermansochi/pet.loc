import { createSlice } from '@reduxjs/toolkit' ;

const currentDataSlice = createSlice({
  name: 'currentData',
  initialState: [] ,
  reducers: {
    setCurrentData: (state ,action) => {
      return action.payload.data ;
    },
}
});

export const { setCurrentData } = currentDataSlice.actions ;

export default currentDataSlice.reducer ;