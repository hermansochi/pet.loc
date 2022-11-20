import React from "react";
import Input from "./Input";
import SelectCategory from "./SelectCategory";
import Sorting from "./Sorting";

export default function Header () {
    

    return (<div className={`flex mb-[3rem] justify-evenly`}>
        <SelectCategory/>
        <Input/>
        <Sorting/>
    </div>) ;
}