import React , { useState } from "react";
import { useDispatch} from "react-redux";
import { setSortCategory , sorting } from "../../redux/slices/dataSlice";
// import { resetFultredUsers } from "../../redux/slices/dataSlice";



export default function Sorting() {

const dispatch = useDispatch() ;

const [chosen , setChosen] = useState("Фамилия") ;

let categories = {  
    "Фамилия" : "last_name" ,
    "Имя" : "first_name" ,
    "Отчество" : "middle_name" ,
    "Должность" : "title" ,
    "Компания" : "company" ,
    // "День рождения" : "birthday" ,
    // "Департамент" : "departament",
    "Город" : "city" ,
};



function changeSortCategory (event) {
    setChosen(event.target.value) ;
    dispatch(setSortCategory({sortAt : categories[event.target.value]})) ;  
    dispatch(sorting()) ;

} 

    // let options = Object.keys(categories).map((item , num)=>{
    //     return <option key={num} value={item}>{item}</option> ;
    // }) ;



     return (
        <select 
         role = 'sortSelect'
         onChange= {changeSortCategory} 
    >
        <option defaultValue = {chosen}  hidden> {chosen} </option>
       
        {/* {options} */}
        {Object.keys(categories).map((item , num)=>{
            return <option value = {item} key={num} >{item}</option> ;
    })}
    </select>) ;
}


