const testState = {
    users:{
      rawUsers : [  { data:[
        {
        id:"97bbe3f4-617c-4a94-8590-f6e69d42def2" ,
        name:"Kostina.I.d49915cf-730d-3d32-b91a-5af102191b17" ,
        hide:false ,
        thumbnail:true,
        gender:"f",
        'first_name':"Изабелла",
        'last_name':"Костина",
        'middle_name':"Максимовна" ,
        birthday:"11.05",
        email:"Kostina.I@example.ru",
        cn:"Костина Изабелла Максимовна",
        telephone:"3511",
        mobile:"9890675977",
        title:"Моторист механической лопаты" ,
        department:"Администрация" ,
        company:`ООО "Партнер"` ,
        city:"Владивосток"
    } ,
        
        {
        id:"97bbe3f4-6963-4794-a8eb-0e845f465a9e" ,
        name:"Bykova.A.3269ec30-2da1-3a97-9d94-1264ad4858da" ,
        hide:false ,
        thumbnail:false,
        gender:"f",
        'first_name':"Алиса",
        'last_name':"Быкова",
        'middle_name':"Максимовна" ,
        birthday:"04.09",
        email:"Bykova.A@example.ru",
        cn:"Быкова Алиса Максимовна",
        telephone:"1578",
        mobile:"9890554019",
        title:"Раздирщик пакетов" ,
        department:"Отдел продаж" ,
        company:`ООО "Рога и копыта` ,
        city:"Москва"
    },
    ],
    links : { test : 'test'} ,
    meta : { data : 'some data'} 
      }
] ,
      ripeUsers : [[
        {
        id:"97bbe3f4-617c-4a94-8590-f6e69d42def2" ,
        name:"Kostina.I.d49915cf-730d-3d32-b91a-5af102191b17" ,
        hide:false ,
        thumbnail:true,
        gender:"f",
        'first_name':"Изабелла",
        'last_name':"Костина",
        'middle_name':"Максимовна" ,
        birthday:"11.05",
        email:"Kostina.I@example.ru",
        cn:"Костина Изабелла Максимовна",
        telephone:"3511",
        mobile:"9890675977",
        title:"Моторист механической лопаты" ,
        department:"Администрация" ,
        company:`ООО "Партнер"` ,
        city:"Владивосток"
    } ,
        
        {
        id:"97bbe3f4-6963-4794-a8eb-0e845f465a9e" ,
        name:"Bykova.A.3269ec30-2da1-3a97-9d94-1264ad4858da" ,
        hide:false ,
        thumbnail:false,
        gender:"f",
        'first_name':"Алиса",
        'last_name':"Быкова",
        'middle_name':"Максимовна" ,
        birthday:"04.09",
        email:"Bykova.A@example.ru",
        cn:"Быкова Алиса Максимовна",
        telephone:"1578",
        mobile:"9890554019",
        title:"Раздирщик пакетов" ,
        department:"Отдел продаж" ,
        company:`ООО "Рога и копыта` ,
        city:"Москва"
    },
    ]] ,
      filtredUsers : [[
        {
        id:"97bbe3f4-617c-4a94-8590-f6e69d42def2" ,
        name:"Kostina.I.d49915cf-730d-3d32-b91a-5af102191b17" ,
        hide:false ,
        thumbnail:true,
        gender:"f",
        'first_name':"Изабелла",
        'last_name':"Костина",
        'middle_name':"Максимовна" ,
        birthday:"11.05",
        email:"Kostina.I@example.ru",
        cn:"Костина Изабелла Максимовна",
        telephone:"3511",
        mobile:"9890675977",
        title:"Моторист механической лопаты" ,
        department:"Администрация" ,
        company:`ООО "Партнер"` ,
        city:"Владивосток"
    } ,
        
        {
        id:"97bbe3f4-6963-4794-a8eb-0e845f465a9e" ,
        name:"Bykova.A.3269ec30-2da1-3a97-9d94-1264ad4858da" ,
        hide:false ,
        thumbnail:false,
        gender:"f",
        'first_name':"Алиса",
        'last_name':"Быкова",
        'middle_name':"Максимовна" ,
        birthday:"04.09",
        email:"Bykova.A@example.ru",
        cn:"Быкова Алиса Максимовна",
        telephone:"1578",
        mobile:"9890554019",
        title:"Раздирщик пакетов" ,
        department:"Отдел продаж" ,
        company:`ООО "Рога и копыта` ,
        city:"Москва"
    },
    ]] ,
    } ,
    categoryFilter : "email" ,
    status :null ,
    error:null ,    
    
    } ;



const initialState = {
        users:{
          rawUsers : [] ,
          ripeUsers : [] ,
          filtredUsers : [] ,
        } ,
        categoryFilter : "email" ,
        status :null ,
        error:null ,    
        
        } ;

export {testState , initialState} ;