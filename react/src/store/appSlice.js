import { createSlice } from "@reduxjs/toolkit";

const appSlice = createSlice({
  name: "app",
  initialState: {
    total: null, // Колличество страниц
    perPage: null, // Лолличество пользователеё на странице
    theme: false, // Тема по умолччанию светлая
    sorting: "last_name", // Параметр для сортировки (изначально фамилия)
    directionSort: true, // Направление сортировки (изначально по убыванию)
    search: "", // Значение в строке поиска
    id: "", // id текущего пользователя
    showqr: false, // Состояние окошка для QR кода (изначально скрыто)
  },
  reducers: {
    setTotal(state, action) {
      state.total = action.payload.totalNumber;
    },
    setPerPage(state, action) {
      state.perPage = action.payload.perPageNumber;
    },
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
  setId,
  setShowqr,
  setTotal,
  setPerPage,
} = appSlice.actions;

export default appSlice.reducer;
