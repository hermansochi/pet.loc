import { createSlice } from "@reduxjs/toolkit";

const appSlice = createSlice({
  name: "app",
  initialState: {
    total: null, // Колличество страниц
    perPage: null, // Лолличество пользователеё на странице
    page: 1, // Номер страницы
    theme: false, // Тема по умолччанию светлая
    sorting: "last_name", // Параметр для сортировки (изначально фамилия)
    directionSort: true, // Направление сортировки (изначально по убыванию)
    search: "", // Значение в строке поиска
    id: "", // id текущего пользователя
    showqr: false, // Состояние окошка для QR кода (изначально скрыто)
    showAuthForm: "close", // Состояния отображения окна формы авторизации
  },
  reducers: {
    setTotal(state, action) {
      state.total = action.payload.totalNumber;
    },
    setPerPage(state, action) {
      state.perPage = action.payload.perPageNumber;
    },
    setTheme(state, action) {
      state.theme = action.payload.themeBoolean;
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
    setShowAuthForm(state, action) {
      state.showAuthForm = action.payload.showAuthFormString;
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
  setPage,
  setTotal,
  setPerPage,
  setShowAuthForm,
} = appSlice.actions;

export default appSlice.reducer;
