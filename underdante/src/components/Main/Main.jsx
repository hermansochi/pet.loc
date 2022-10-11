import React, { useState , useEffect } from "react";

import paths from "../../paths/paths";
import ContentPage from "../ContentPage/ContentPage";
import { useDispatch } from "react-redux";
import { setPagesAmount } from "../../redux/slices/pagesAmountSlice";
import { setCurrentData } from "../../redux/slices/currentDataSlice";




export default function Main() {
  const dispatch = useDispatch() ;


  const [status , setStatus] = useState(true) ;
 
  useEffect(() => {
  async function responce() {
    let result = await fetch(paths.healthCheck() , {
    headers : {"Content-Type": "application/json",
    "Accept": "application/json" ,
    }
  }) ;
    let status = result.status;
    
      if (status !== 200) {
        setStatus(false) ;
        return ;
      }

      console.log(status) ;
    
    
    
    let usersResponce = await fetch(paths.getUsers(), {
    "Content-Type": "application/json",
    "Accept": "application/json",
  }) ;
  let res = await usersResponce.json() ;
  console.log(res.meta.last_page) ;
  dispatch(setPagesAmount({ amount:res.meta.last_page }));
  dispatch(setCurrentData({data:res})) ;




  } 

responce() ;

  }, []);

  return <div>
    hello everyone
    { status ? <ContentPage/>
     :
      <button>
    Повторить запрос
  </button>
    }
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
