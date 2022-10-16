// вариант фильтрации в инпуте  номер 1 :
// получаем введеное значение и фильтруем в редьюсере в саисе dataSlice
// для правльной первой отрисовке приходится копировать ripeUsers  в filtredUsers , далее при начале поиска происходит фильтрация 
//ripeUsers и запись результата в filthrlUsers с последующей отрисовкой


// вариант 2 
//  задаем своиство слаиса inputFilter и в компоненте отрисовки выполняем фильтрацию и вывод




import React , { useState , useEffect }  from "react";
import { useDispatch ,useSelector } from "react-redux";
// import { inputFiltration } from "../../redux/slices/dataSlice";  // вар 1
import { setInputFilter } from "../../redux/slices/dataSlice";


export default function Input () {
    const dispatch = useDispatch() ;
    let categoryFilter = useSelector(state => state.data.categoryFilter) ;

    const [text , setText] = useState("") ;

    useEffect(()=>{
        setText("") ;
    }, [categoryFilter]) ;
    
    
    function filtration(event) {
        setText(event.target.value) ;
        console.log(event.target.value) ;
        console.log(text) ;
        if(event.target.value.length > 1) {
            console.log("start filter") ;
            dispatch(setInputFilter(event.target.value)) ;
            // dispatch(inputFiltration({text:text , showAll:false})) ;  вар 1
        }else{
            dispatch(setInputFilter("")) ;

            // dispatch(inputFiltration({showAll:true})) ; вар 1
        }
    } 




    return (<div>
<input value = {text}
 onChange={(event)=>filtration(event)}
   />
    </div>) ;
}