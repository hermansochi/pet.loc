import { createSlice ,createAsyncThunk } from '@reduxjs/toolkit' ;

// запрос и сохранение массива пользователей
export const getData = createAsyncThunk(
  'dataSlice/getData' ,
  async function(paths , {rejectWithValue , dispatch}) {

    try {
        const responce = await fetch(paths.getUsers(), {
         "Content-Type": "application/json",
         "Accept": "application/json",
          }) ;
              
              
         if (!responce.ok) {
          throw new Error("что то пошло не так") ;
          }
              
              
         let json = await responce.json() ;
      
        for (let i = 1 ; i <= json.meta.last_page ; i++) {
        let usersResponce = await fetch(paths.getUsers(i)) ;
        let json = await usersResponce.json() ;
      
        dispatch(addUserBlock ({usersBlock:json})) ;
    } 
  } catch(error) {
      return rejectWithValue({error:error.message}) ;
    }
  } 
) ;

const dataSlice = createSlice({
  name: 'data',
  initialState: {
      users:{
        rawUsers : [] ,
        ripeUsers : [] ,
        filtredUsers : [] ,
      } ,
      categoryFilter : "cn" ,
      inputFilter : "" ,
      status :null ,
      error:null ,    

    }
,
  reducers: {
     addUserBlock : (state , action)=>{
      state.users.rawUsers.push(action.payload.usersBlock);
      state.users.ripeUsers.push(action.payload.usersBlock.data); // передаю только необходимую информацию
      },
      inputFiltration : (state, action)=>{  //фильтр по вводу вариант 1 
        state.users.filtredUsers = state.users.ripeUsers.filter(user => user.name.toLowerCase().includes(action.payload.text)) ;
        if (action.payload.showAll) state.users.filtredUsers = state.users.ripeUsers ;
      } ,
      setInputFilter : (state ,action)=>{ // фильтр по вводу вар 2 
        state.inputFilter = action.payload ;
      } , 

      // setFultredUsers : (state , action) => {
      //   state.users.filtredUsers = action.payload.filtredUsers ;
      // } ,
      
      setCategoryFilter : (state , action) => { // задаем категорию для поиска
        state.categoryFilter = action.payload.categoryFilter ; 
        state.inputFilter = "" ;
      } ,

} ,
extraReducers : {
  [getData.pending] : (state)=>{
    state.status = "loading";
    state.error = null ;
  } ,
  [getData.fulfilled] : (state)=>{
    state.users.ripeUsers = state.users.ripeUsers.flat() ; // сплющиваю для удобства
    // state.users.filtredUsers = state.users.ripeUsers ; // вариант фильтрации 1
    state.status = "resolved" ;
    state.error = null ;
  } ,
  [getData.rejected] : (state , action)=>{
    state.error = action.payload.error ;
    state.status = "rejected" ;
  } ,
}
});

export const {addUserBlock , inputFiltration , setInputFilter , setFultredUsers , setCategoryFilter} = dataSlice.actions ;

export default dataSlice.reducer ;


