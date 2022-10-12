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
    searchResult: [],
    status: null,
    error: null,
  },

  reducers: {
    sortUsers(state, action) {
      state.users = state.users.sort((a, b) => {
        let p1 = action.payload.paramsArray[0];
        let p2 = action.payload.paramsArray[1];
        let p3 = action.payload.paramsArray[2];
        let sort = action.payload.paramSortBoolean;
        if (a[p1] + a[p2] + a[p3] > b[p1] + b[p2] + b[p3]) {
          return sort ? 1 : -1;
        }
        if (a[p1] + a[p2] + a[p3] <= b[p1] + b[p2] + b[p3]) {
          return sort ? -1 : 1;
        } else {
          return false;
        }
      });
    },

    showSearchResult(state, action) {
      let str = action.payload.targetString;
      let result = [];
      action.payload.users.forEach((el) => {
        if (el["cn"].toLowerCase().indexOf(str.toLowerCase()) !== -1) {
          result.push(el);
        }
      });
      state.searchResult = result;
    },
  },

  extraReducers: {
    [fetchUsers.pending]: (state, action) => {
      state.status = "loading";
      state.error = action.payload;
    },
    [fetchUsers.fulfilled]: (state, action) => {
      state.status = "resolved";
      if (state.users.length === 0) {
        state.users = action.payload.data;
      } else {
        state.users = [...state.users, ...action.payload.data];
      }
      state.error = null;
    },
    [fetchUsers.rejected]: (state, action) => {
      state.status = "rejected";
      state.error = action.payload;
    },
  },
});
export const { sortUsers, showSearchResult } = usersSlice.actions;

export default usersSlice.reducer;
