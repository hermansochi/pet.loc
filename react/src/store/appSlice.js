import { createSlice } from "@reduxjs/toolkit";

const appSlice = createSlice({
  name: "app",
  initialState: {
    theme: "cupcake",
    sorting: "name",
    directionSort: false,
    search: "",
    region: "все",
  },
  reducers: {
    setTheme(state, action) {
      state.theme = action.payload;
    },
    setSorting(state, action) {
      state.sorting = action.payload;
    },
    setDirectionSort(state, action) {
      state.directionSort = action.payload;
    },
    setSearch(state, action) {
      state.search = action.payload;
    },
    setRegion(state, action) {
      state.region = action.payload;
    },
  },
});

export const { setTheme, setSorting, setDirectionSort, setSearch, setRegion } =
  appSlice.actions;

export default appSlice.reducer;
