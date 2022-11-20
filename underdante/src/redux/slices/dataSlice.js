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



function typisedArray (array) {
   return array.reduce((acc , cur) => { // разбиваю на массивы по 100 юзеров , т.к. в компоненте отрисовки ожидается именно такой формат
    if (acc[acc.length - 1].length === 100) {
      acc.push([]) ;
    }
    
    acc[acc.length - 1].push(cur) ;
    
    return acc ;
  } , [[]]);
} 

function sortUsers(array , category) {
  let sorted = array.sort((a, b) => {
    const nameA = a[`${category}`].toLowerCase() ;
    const nameB = b[`${category}`].toLowerCase() ;

    switch (nameA > nameB) {
      case (true) : 
        return 1 ;
      case (false) :
        return -1 ;
      default :
        return 0 ;
    }
  }) ; 

  return typisedArray(sorted) ;
}


const dataSlice = createSlice({
  name: 'data',
  initialState: {
      users:{
        rawUsers : [] ,
        ripeUsers : [] ,
        filtredUsers : [] ,
      } ,
      categoryFilter : "email" ,
      status :null ,
      error:null ,    
      sortAt: "last_name" ,  
    }
,
  reducers: {

     addUserBlock : (state , action) => {
      state.users.rawUsers.push(action.payload.usersBlock);
      state.users.ripeUsers.push(action.payload.usersBlock.data); // передаю только необходимую информацию
      },

    resetFiltredUsers : (state) => {  // задаем отфильтованных пользователей
        const base = Object.assign(state.users.ripeUsers , []).flat() ;
        state.users.filtredUsers = sortUsers(base , state.sortAt) ;

      } ,
      
    setCategoryFilter : (state , action) => { // задаем категорию для поиска
        state.categoryFilter = action.payload.categoryFilter ; 
      } ,

    selection : (state , action) => {  // поиск по категории и буквам
        const { ripeUsers } = state.users ;  // получаем готовых юзеров
        const { categoryFilter , word }  = action.payload ; // получаем категорию и слово для поиска
    
        const base = Object.assign([] , ripeUsers).flat(); // копирую массив юзеров
    
        let filtered = base.filter(user => user[`${categoryFilter}`].toLowerCase().includes(word.toLowerCase())) ;  // фильтрация
        
        // const output = typisedArray(filtered) ;
        const output = sortUsers(filtered , state.sortAt) ;
            
        state.users.filtredUsers = output ; 
        
      } ,
      
    setSortCategory : (state , action) => {
        const { sortAt }  = action.payload ; // получаем категорию сортировки
        state.sortAt = sortAt ;
      } ,

    sorting : (state) => {
        const { sortAt } = state ;
        
        let users = state.users.filtredUsers ;
        const base = Object.assign([] , users).flat();
        state.users.filtredUsers = sortUsers(base , sortAt) ;
      } ,

} ,
extraReducers : {
  [getData.pending] : (state) => {
    state.status = "loading";
    state.error = null ;
  } ,
  [getData.fulfilled] : (state) => { 
    state.status = "resolved" ;
    const base = Object.assign(state.users.ripeUsers , []).flat() ;
    state.users.ripeUsers = sortUsers(base , state.sortAt)  ;
    state.users.filtredUsers = state.users.ripeUsers ;
    state.error = null ;
  } ,
  [getData.rejected] : (state , action) => {
    state.error = action.payload.error ;
    state.status = "rejected" ;
  } ,
}
});

export const {addUserBlock  , resetFiltredUsers , setCategoryFilter , selection , setSortCategory , sorting } = dataSlice.actions ;

export default dataSlice.reducer ;


