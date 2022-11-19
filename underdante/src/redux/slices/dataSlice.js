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
      categoryFilter : "email" ,
      status :null ,
      error:null ,    

    }
,
  reducers: {

     addUserBlock : (state , action) => {
      state.users.rawUsers.push(action.payload.usersBlock);
      state.users.ripeUsers.push(action.payload.usersBlock.data); // передаю только необходимую информацию
      },

      // inputFiltration : (state, action) => {  //фильтр по вводу вариант 1 
      //   state.users.filtredUsers = state.users.ripeUsers.filter(user => user.name.toLowerCase().includes(action.payload.text)) ;
      //   if (action.payload.showAll) state.users.filtredUsers = state.users.ripeUsers ;
      // } ,
      
      // setInputFilter : (state ,action) => { // фильтр по вводу вар 2 
      //   state.inputFilter = action.payload ;
      // } , 

      resetFultredUsers : (state) => {  // задаем отфильтованных пользователей
        // if (action.payload.isStart)
        state.users.filtredUsers = Object.assign(state.users.ripeUsers , []) ;
      } ,
      
      setCategoryFilter : (state , action) => { // задаем категорию для поиска
        state.categoryFilter = action.payload.categoryFilter ; 
        state.inputFilter = "" ;
      } ,

      selection : (state , action) => {  // поиск по категории и буквам
        const { ripeUsers } = state.users ;  // получаем готовых юзеров
        const { categoryFilter , word }  = action.payload ; // получаем категорию и слово для поиска
    
        const base = Object.assign([] , ripeUsers).flat() ; // копирую и сплющиваю массив юзеров
    
        let filtered = base.filter(user => user[`${categoryFilter}`].toLowerCase().includes(word.toLowerCase())) ;  // фильтрация
        
        const output = filtered.reduce((acc , cur) => { // разбиваю на массивы по 100 юзеров , т.к. в компоненте отрисовки ожидается именно такой формат
          if (acc[acc.length - 1].length === 100) {
            acc.push([]) ;
          }
          
          acc[acc.length - 1].push(cur) ;
          
          return acc ;
        } , [[]]);
        
        state.users.filtredUsers = output ; 

          }

} ,
extraReducers : {
  [getData.pending] : (state)=>{
    state.status = "loading";
    state.error = null ;
  } ,
  [getData.fulfilled] : (state)=>{
    state.users.filtredUsers = Object.assign(state.users.ripeUsers , [])  ; // после успешного получения всех данных
    state.status = "resolved" ;
    state.error = null ;
  } ,
  [getData.rejected] : (state , action)=>{
    state.error = action.payload.error ;
    state.status = "rejected" ;
  } ,
}
});

export const {addUserBlock  , resetFultredUsers , setCategoryFilter , selection} = dataSlice.actions ;

export default dataSlice.reducer ;


