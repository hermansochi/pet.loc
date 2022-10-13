import { createSlice ,createAsyncThunk } from '@reduxjs/toolkit' ;


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
      users:[] ,
      status :null ,
      error:null ,    

    }
,
  reducers: {
     addUserBlock : (state , action)=>{
      state.users.push(action.payload.usersBlock) ;
    },
} ,
extraReducers : {
  [getData.pending] : (state)=>{
    state.status = "loading";
    state.error = null ;
  } ,
  [getData.fulfilled] : (state)=>{
    state.status = "resolved" ;
    state.error = null ;
  } ,
  [getData.rejected] : (state , action)=>{
    state.error = action.payload.error ;
    state.status = "rejected" ;
  } ,
}
});

export const {addUserBlock } = dataSlice.actions ;

export default dataSlice.reducer ;