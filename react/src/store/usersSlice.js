import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";

export const fetchUsers = createAsyncThunk(
  "users/fetchUsers",
  async function (_, rejectedWithValue) {
    try {
      let response = await fetch("http://api.localhost/api/v1/org/users", {
        headers: {
          "Content-Type": "application/json",
          Accept: "application/json",
        },
      });
      if (!response.ok) {
        throw new Error("Bod Connect");
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
      state.users.push(action.payload.usersArray);
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
