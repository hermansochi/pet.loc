import * as actions from "../store/appSlice";
import store from "../store/store";

let state = store.getState().app;
describe("appSlice reduser testings", () => {
  test("Should be initialstate", () => {
    expect(state).toEqual(store.getState().app);
  });

  test("setTotal change store app total", () => {
    store.dispatch(actions.setTotal({ totalNumber: 1000 }));
    expect(store.getState().app.total).toEqual(1000);
  });

  test("setTotal change store app total", () => {
    store.dispatch(actions.setTotal({ totalNumber: null }));
    expect(store.getState().app.total).toBeNull();
  });

  test("setPerPage change store app perPage", () => {
    store.dispatch(actions.setPerPage({ perPageNumber: 159 }));
    expect(store.getState().app.perPage).toEqual(159);
  });

  test("setTheme change store app theme", () => {
    store.dispatch(actions.setTheme({ themeBoolean: true }));
    expect(store.getState().app.theme).toBeTruthy();
  });

  test("setSorting change store app sorting", () => {
    store.dispatch(actions.setSorting({ sortingString: "first_name" }));
    expect(store.getState().app.sorting).toEqual("first_name");
  });

  test("setDirectionSort change store app directionsort", () => {
    store.dispatch(actions.setDirectionSort({ directionBool: false }));
    expect(store.getState().app.directionSort).toBeFalsy();
  });

  test("setSearch change store app search", () => {
    store.dispatch(actions.setSearch({ searchString: "kdfj" }));
    expect(store.getState().app.search).toBe("kdfj");
  });

  test("setPage change store app total", () => {
    store.dispatch(actions.setPage({ pageNumber: 12 }));
    expect(store.getState().app.page).toBe(12);
  });

  test("setId change store app id", () => {
    store.dispatch(actions.setId({ idString: "4" }));
    expect(store.getState().app.id).toBe("4");
  });

  test("setShowqr change store app showqr", () => {
    store.dispatch(actions.setShowqr({ showqrBoolean: true }));
    expect(store.getState().app.showqr).toBeTruthy();
  });
});
