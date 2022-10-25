// вариант фильтрации в инпуте  номер 1 :
// получаем введеное значение и фильтруем в редьюсере в саисе dataSlice
// для правльной первой отрисовке приходится копировать ripeUsers  в filtredUsers , далее при начале поиска происходит фильтрация 
//ripeUsers и запись результата в filthrlUsers с последующей отрисовкой


// вариант 2 
//  задаем своиство слаиса inputFilter и в компоненте отрисовки выполняем фильтрацию и вывод




import React , { useState , useRef , useEffect }  from "react";
import { useDispatch ,useSelector } from "react-redux";
// import { inputFiltration } from "../../redux/slices/dataSlice";  // вар 1
import { setInputFilter } from "../../redux/slices/dataSlice";


export default function Input () {
    const dispatch = useDispatch() ;
    let categoryFilter = useSelector(state => state.data.categoryFilter) ;
    
    const [text , setText] = useState("") ;
    const showldWait = useRef() ;

    useEffect(()=>{
        setText("") ;
    }, [categoryFilter]) ;
    
    
    function filtration(event) {  // запуск фильтрации
        // setText(value) ;
        let value = event.target.value ;

        if (value.length > 2) {
            dispatch(setInputFilter(value)) ;
        }else{
            dispatch(setInputFilter("")) ;
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

 
 function thorttle (cb, delay = 1000) {
    if(showldWait.current) return ;
    
    showldWait.current = true ;
    setTimeout(()=>{
        cb(); 
        showldWait.current = false ;
    } , delay) ;
 } 


    return (<div className = {`w-[55%]`}>
<input className = {`border-[4px] rounded-md  w-[100%]`} value = {text}
//  onChange={(event)=>thorttle(filtration(event.target.value))}
 onChange={(event) => {
    setText(event.target.value) ;
    thorttle(filtration) ;
 } }
   />
    </div>) ;
}