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
        <div className = {`flex flex-row items-center justify-around bg-cyan-500 mb-[2rem] w-[30%] rounded-md`} key = {user.id}>
            <div className = {``}>
                <img className = {`rounded-lg border-[3px]`} src={`http://api.localhost/storage/avatars/${user.id}.jpg`}/>
            </div>
            
            <div className ={``}>
            <div>
               Имя : {user.cn}
            </div>
            
            <div>
            Пол : {user.gender === "m" ? "M" : "Ж"}
            </div>

            <div>
            Компания : {user.company}
            </div>

            <div>
            Департамент : {user.department}
            </div>

            <div>
            Город : {user.city}
            </div>
            
            <div>
            Должность : {user.title}
            </div>
            
            <div>
            День рождения : {user.birthday}
            </div>
            
            <div>
            Раб.телефон : {user.telephone}
            </div>

            <div>
            Моб. телефон : {user.mobile}
            </div>

            <div>
            Эл. почта : {user.email}
            </div>

            </div>

        </div>
    ) ;

 });





    return (
        <div className = {`flex w-[100%] flex-wrap justify-evenly`}>
            {output}
        </div>
    ) ;
}