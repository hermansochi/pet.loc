import React from "react";
import { useSelector } from "react-redux";

export default function CurrentPage() {
let currentData = useSelector(state=>state.currentData) ;

console.log(currentData) ;

    return (
        <div>
            currentPage
        </div>
    );
}