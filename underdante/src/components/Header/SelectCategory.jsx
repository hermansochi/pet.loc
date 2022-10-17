import React , { useState } from "react";
import { useDispatch } from "react-redux";
import { setCategoryFilter } from "../../redux/slices/dataSlice";

export default function SelectCategory () {

const dispatch = useDispatch() ;
const [chosen , setChosen] = useState("FullName") ;

    let categories = {  
        FullName : "cn" ,
        title : "title" ,
        company : "company" ,
        birthday : "birthday" ,
        email : "email" ,
        "work phone" : "telephone" ,
        mobile : "mobile" ,
        departament : "departament",
        city : "city" ,
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


