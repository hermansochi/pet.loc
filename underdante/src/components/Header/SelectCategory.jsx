import React , { useState } from "react";
import { useDispatch} from "react-redux";
import { setCategoryFilter } from "../../redux/slices/dataSlice";
import { resetFultredUsers } from "../../redux/slices/dataSlice";



export default function SelectCategory () {

const dispatch = useDispatch() ;

const [chosen , setChosen] = useState("Эл. почта") ;

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
    setChosen(event.target.value) ;
    dispatch (resetFultredUsers()) ;
    dispatch(setCategoryFilter({categoryFilter : categories[event.target.value]})) ;  // очень долгое переключение при не пустом поле инпута

} 

    // let options = Object.keys(categories).map((item , num)=>{
    //     return <option key={num} value={item}>{item}</option> ;
    // }) ;



     return (
        <select 
         role = 'select'
         onChange= {changeCategory} 
    >
        <option defaultValue = {chosen}  hidden> {chosen} </option>
       
        {/* {options} */}
        {Object.keys(categories).map((item , num)=>{
            return <option value = {`cat-${num}`} key={num} >{item}</option> ;
    })}
    </select>) ;
}


