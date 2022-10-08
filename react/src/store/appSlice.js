import { createSlice } from "@reduxjs/toolkit";

const appSlice = createSlice({
  name: "app",
  initialState: {
    theme: "luxury",
    sorting: "name",
    directionSort: false,
    search: "",
    region: "все",
  },
  reducers: {
    setTheme(state, action) {
      state.theme = action.payload.themrString;
    },
    setSorting(state, action) {
      state.sorting = action.payload.sortingString;
    },
    setDirectionSort(state, action) {
      state.directionSort = action.payload.directionBool;
    },
    setSearch(state, action) {
      state.search = action.payload.searchString;
    },
    setRegion(state, action) {
      state.region = action.payload.regionString;
    },
  },
});

export const { setTheme, setSorting, setDirectionSort, setSearch, setRegion } =
  appSlice.actions;

export default appSlice.reducer;
