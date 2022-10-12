import React from "react";
// import { useSelector , useDispatch } from "react-redux";
import CurrentPage from "./CurrentPage";
// import paths from "../../paths/paths";

export default function ContentPage () {

// const pagesAmount = useSelector(state=>state.pagesAmount) ;
// const dispatch = useDispatch() ;

// useEffect(()=>{
// async function getAllUsers() {
//     console.log(pagesAmount) ;
//     if (pagesAmount.isDone) {
//     let resultArr = [] ;

//     for(let i = 1 ; i <= pagesAmount.amount ; i++) {
//         let responce = await fetch(paths.getUsers(i)) ;
//         let json = await responce.json() ;

//         resultArr.push(json) ;

//     }
//     let res = Promise.all(resultArr) ;
//     let array = await res ;
//     dispatch(setFullData({data:array})) ;
//     console.log("getallusers") ;
//     resultArr = null ;
//     }
// }
// getAllUsers() ;


// } , [pagesAmount]) ;



    return (
        <div>
            ContentPage
            <CurrentPage/>
        </div>
    ) ;
}