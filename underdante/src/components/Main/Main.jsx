import React, { useEffect } from "react";
import paths from "../../paths/paths";
import ContentPage from "../ContentPage/ContentPage";
import Header from "../Header/Header";
import { useDispatch , useSelector } from "react-redux";
import { getData } from "../../redux/slices/dataSlice";



export default function Main() {
  const dispatch = useDispatch() ;
  const { status ,error } = useSelector(state=>state.data) ;

 
  useEffect(() => {
    dispatch(getData(paths)) ;
  }, []);

  return <div>
    hello everyone
    { status === "loading" && <div>Loading.... </div> }
    { status === "resolved" && <>
    <Header/>
    <ContentPage/> 
    </>
    }
    { error ? <div>
      произошла ошибка
      <button>
    Повторить запрос
  </button>
  </div> : null }
    </div>;
}



// It looks like you wrote useEffect(async () => ...) or returned a Promise. Instead, write the async function inside your effect and call it immediately:

// useEffect(() => {
//   async function fetchData() {
//     // You can await here
//     const response = await MyAPI.getData(someId);
//     // ...
//   }
//   fetchData();
// }, [someId]); // Or [] if effect doesn't need props or state
