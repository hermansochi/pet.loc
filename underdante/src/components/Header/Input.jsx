import React , { useState , useEffect }  from "react";
import { useDispatch ,useSelector } from "react-redux";
// import { selection } from "../../redux/slices/dataSlice";
import { resetFultredUsers ,selection } from "../../redux/slices/dataSlice";

export default function Input () {
    const dispatch = useDispatch() ;
    let categoryFilter = useSelector(state => state.data.categoryFilter) ;
    
    const [text , setText] = useState("") ;
    // const showldWait = useRef() ;

    useEffect(()=>{
        setText("") ;
    }, [categoryFilter]) ;
    
    
    function filtration(event) {  // запуск фильтрации
        if (event.target.value.length > 2) {
            dispatch(selection({categoryFilter : categoryFilter , word : event.target.value})) ;
        }else{
            dispatch(resetFultredUsers()) ;
        }


    //     if (showldWait.current) return ;
        
    //     showldWait.current = true ;
    //     setTimeout(()=>{
    //         if(value.length > 2) {
    //             dispatch(setInputFilter(value)) ; // почему то если передавать сюда text  то передается на 1 букву меньше. 
    //             // dispatch(inputFiltration({text:text , showAll:false})) ;  вар 1
    //         }else{
    //             dispatch(setInputFilter("")) ;
    //             // dispatch(inputFiltration({showAll:true})) ; вар 1
    //         }
    //         showldWait.current = false ;
    //     } , 2000);
    } 

 
//  function thorttle (cb, delay = 1000) {
//     if(showldWait.current) return ;
    
//     showldWait.current = true ;
//     setTimeout(()=>{
//         cb(); 
//         showldWait.current = false ;
//     } , delay) ;
//  } 


    return (<div className = {`w-[55%]`}>
<input role = 'input' className = {`border-[4px] rounded-md  w-[100%]`} value = {text}
//  onChange={(event)=>thorttle(filtration(event.target.value))}
 onChange={(event) => {
    setText(event.target.value) ;
    filtration(event) ;
    // thorttle(filtration) ;
 } }
   />
    </div>) ;
}