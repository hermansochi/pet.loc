import React , { useState ,useEffect } from "react";
import { useSelector } from "react-redux";

//рендер пользователей
export default function ContentPage () {
 const state = useSelector(state=>state.data.users.filtredUsers) ; // получаю стеит 

const [ page , setPage  ] = useState(1) ; // следующая страница для отрисовки
const [ inlet , setInlet  ] = useState(state[0]) ; //  вхдящие данные для отрисовки
const [ update , setUpdate  ] = useState(false) ; // флаг указатель о необходимости добавления данные для отрисовки

useEffect(()=> { 
    setInlet(state[0]);
 } 
, [state]);

const scrollHandler = (e) => {  // обработчик скролл .если до конца страницы осталось менее 100 пх и сномер страницы не больше чем страниц вообще
    if (e.target.documentElement.scrollHeight - (e.target.documentElement.scrollTop + window.innerHeight) < 100 && page < state.length) {
            setUpdate(true) ; // меняем флаг и запускаем добавление новых данных
    }
} ;

useEffect(()=>{
    if (update && state[page]) {    // если true ,то добавляем данные к существющим и увеличиваем номер страницы
        setInlet([...inlet , ...state[page]]) ;
        setPage(page + 1) ;
    }
    setUpdate(false) ;  // переводим индикатор в false
} , [update]) ;



useEffect(()=>{  // не нашел решения изящнее чем ванильный js , добавляем слушатель на скролл и обновляем его при изменении page
    document.addEventListener('scroll' , scrollHandler) ; // без обновления page в ф-ий scrollHandler остается начальное значение page

    return function () {
        document.removeEventListener('scroll' ,scrollHandler) ;
    } ;

} , [page]) ;

 let output = inlet.map((user)=>{ // отрисовка пользователей 

    if(user.hide) return ;

    return (
        <div className = {`flex flex-row items-center bg-cyan-500 mb-[2rem] h-[8rem] w-[80%] rounded-md`} key = {user.id}
        >
            <div className = {`h-[60%] ml-[3rem] mr-[3rem]`}>
                <img className = {`rounded-lg border-[3px] h-full`} src={`http://api.localhost/storage/avatars/${user.id}.jpg`}/>
            </div>

            <div className ={`flex flex-col flex-wrap h-[100%] w-[80%]`}>
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
        <div className = {`flex flex-col w-full items-center`} >
            {output}
        </div>
    ) ;
}