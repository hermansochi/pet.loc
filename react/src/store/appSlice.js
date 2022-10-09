import { createSlice } from "@reduxjs/toolkit";

const appSlice = createSlice({
  name: "app",
  initialState: {
    theme: "garden",
    sorting: "name",
    directionSort: false,
    search: "",
    region: "все",
    page: 1,
    id: "",
    showqr: false,
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
    setPage(state, action) {
      state.page = action.payload.pageNumber;
    },

    setId(state, action) {
      state.id = action.payload.idString;
    },
    setShowqr(state, action) {
      state.showqr = action.payload.showqrBoolean;
    },
  },
});

export const {
  setTheme,
  setSorting,
  setDirectionSort,
  setSearch,
  setRegion,
  setPage,
  setId,
  setShowqr,
} = appSlice.actions;

export default appSlice.reducer;
