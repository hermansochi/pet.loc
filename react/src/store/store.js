import { configureStore } from "@reduxjs/toolkit"; // Хук редакса для настройки хранилища
import appReducer from "./appSlice"; // Слайз для состояния приложения
import usersReducer from "./usersSlice"; // Слайз для состояния массива пользователей и результатов поиска

export default configureStore({
  reducer: {
    app: appReducer,
    users: usersReducer,
  },
});
