import React from "react";
import { useSelector } from "react-redux";
// import CurrentPage from "./CurrentPage";
// import { useDispatch } from "react-redux";
// import { setFultredUsers } from "../../redux/slices/dataSlice";


//рендер пользователей
export default function ContentPage () {
//  const state = useSelector(state=>state.data.users.filtredUsers) ; // получаю стеит вар 1
 const state = useSelector(state=>state.data.users.ripeUsers) ; // получаю стеит 
 const inputFilter = useSelector(state=>state.data.inputFilter) ; // получаю фильтр 
 const category = useSelector(state => state.data.categoryFilter) ;
//  let dispatch = useDispatch() ;

// отрисовка вар 1
//  let output = state.map((user)=>{

//     return (
//         <div key = {user.id}>
//             {user.name}
//         </div>
//     ) ;

//  });

let result ;
if (inputFilter) {
    result = state.filter(user=>user[category].toLowerCase().includes(inputFilter)) ;
}else{
    result = state ;
}



 
 let output = result.map((user)=>{

    return (
        <div key = {user.id}>
            {user.cn}
            {user.company}
            {user.department}
            {user.birthday}
            {user.telephone}
            {user.mobile}
            {user.title}
            {user.gender}
            {user.city}
            {user.email}
        </div>
    ) ;

 });





    return (
        <div>
            Content
            {output}
        </div>
    ) ;
}