import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import { devUrl, versionApi, headers, orgUsers } from "../patch";

const url = new URL(`${devUrl}${versionApi}${orgUsers}?page=`);

export const fetchUsers = createAsyncThunk(
  "users/fetchUsers",
  async function (page, rejectedWithValue) {
    try {
      let response = await fetch(url + page, {
        method: "GET",
        headers,
      });
      if (!response.ok) {
        throw new Error("Bad Connect");
      }
      response = await response.json();
      response = response.data;
      return response;
    } catch (error) {
      return rejectedWithValue(error.message);
    }
  }
);

const usersSlice = createSlice({
  name: "users",
  initialState: {
    users: [],
    status: null,
    error: null,
  },

  reducers: {
    setUsers(state, action) {
      state.users = state.users.sort((a, b) => {
        if (a[action.payload.paramString] > b[action.payload.paramString])
          return action.payload.paramSortBoolean ? 1 : -1;
        if (a[action.payload.paramString] <= b[action.payload.paramString])
          return action.payload.paramSortBoolean ? -1 : 1;
        else return false;
      });
    },
  },

  extraReducers: {
    [fetchUsers.pending]: (state, action) => {
      state.status = "loading";
      state.error = action.payload;
    },
    [fetchUsers.fulfilled]: (state, action) => {
      state.status = "resolved";
      let ids = [...state.users].map((t) => t.id);
      action.payload.map((el) => {
        if (!ids.includes(el.id)) {
          state.users.push(el);
        }
      });
      state.error = null;
    },
    [fetchUsers.rejected]: (state, action) => {
      state.status = "rejected";
      state.error = action.payload;
    },
  },
});
export const { setUsers } = usersSlice.actions;

export default usersSlice.reducer;
