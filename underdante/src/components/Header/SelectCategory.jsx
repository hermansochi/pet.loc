import React , { useState } from "react";
import { useDispatch } from "react-redux";
import { setCategoryFilter } from "../../redux/slices/dataSlice";

export default function SelectCategory () {

const dispatch = useDispatch() ;
const [chosen , setChosen] = useState("Ф.И.О.") ;

    let categories = {  
        "Ф.И.О." : "cn" ,
        "Должность" : "title" ,
        "Компания" : "company" ,
        "День рождения" : "birthday" ,
        "Эл. почта" : "email" ,
        "Раб.телефон" : "telephone" ,
        "Моб.телефон" : "mobile" ,
        "Департамент" : "departament",
        "Город" : "city" ,
};

function changeCategory (event) {
    console.log(event.target.value) ;
    setChosen(event.target.value) ;
    dispatch(setCategoryFilter({categoryFilter : categories[event.target.value]})) ;  // очень долгое переключение при не пустом поле инпута
} 

     return (
        <select 
         onChange= {changeCategory} 
    >
        <option defaultValue = {chosen}  hidden> {chosen} </option>
        {Object.keys(categories).map((item , num)=>{
            return <option key={num} value={item}>{item}</option> ;
    })}
    </select>) ;
}


