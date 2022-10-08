import { configureStore } from "@reduxjs/toolkit";
import appReducer from "./appSlice";
import usersReducer from "./usersSlice";

export default configureStore({
  reducer: {
    app: appReducer,
    users: usersReducer,
  },
});
