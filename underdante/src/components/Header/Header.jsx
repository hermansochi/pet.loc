import React from "react";
import Input from "./Input";
import SelectCategory from "./SelectCategory";

export default function Header () {
    

    return (<div className={`flex mb-[3rem] justify-evenly`}>
        <SelectCategory/>
        <Input/>
    </div>) ;
}