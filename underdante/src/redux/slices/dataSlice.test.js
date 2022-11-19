import datareducer , {
    addUserBlock ,
    resetFultredUsers ,
    selection ,
    setCategoryFilter ,
} from "./dataSlice" ;

import { testUsers ,KostinaTest } from "./usersForTests";

import { testState , initialState } from "./testState";

describe("data slice testing" , () => {
    // эмулируем монтирование компонента и стора
    it('first start reducer' , () => {
        const result = datareducer(undefined , {type:''}); // вызываем редьюсер со значением стора андефаинед и пустым типом экшеном

        expect(result).toEqual(initialState) ; // ожидаем что созданный слаис будет идентичен шаблону
    }) ;


    it ('addUserBlock test' , () => { // тест добавления 
        const action = { type :addUserBlock.type , payload : {usersBlock:testUsers}} ; // передаемтип и пеилоад

        const result = datareducer(initialState , action) ;

        expect(result.users.rawUsers).toEqual([testUsers]) ;
        expect(result.users.ripeUsers).toEqual([testUsers.data]) ;
    }) ;
    
    it ('resetFultredUsers test' , () => {
        const action = { type :resetFultredUsers.type , payload : '' } ;

        const result = datareducer(initialState , action) ;

        expect(result.users.filtredUsers).toEqual(result.users.ripeUsers) ;
    }) ;
    
    
    it ('setCategoryFilter test' , () => {
        const action = { type :setCategoryFilter.type , payload : {categoryFilter : "test"} } ;

        const result = datareducer(initialState , action) ;

        expect(result.categoryFilter).toEqual('test') ;
    }) ;
    
    
    it ('selection test' , () => {
        const action = { type :selection.type , payload : {categoryFilter : "email" , word : "Kostina.I@example.ru"} } ;

        const result = datareducer(testState , action) ;

        expect(result.users.filtredUsers).toEqual([[KostinaTest]]) ;
    }) ;


}) ;