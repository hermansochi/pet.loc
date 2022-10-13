const paths = {
dev:{
    baseUrl : "http://api.localhost/api" ,
    ver : "v1" ,
    
    fullUrl() {
        return (`${this.baseUrl}/${this.ver}`) ;
    } ,
} ,
test :{
    baseUrl : "http://api.localhost/api" ,
    ver : "v1" ,
},
prod :{
    baseUrl : "http://api.localhost/api" ,
    ver : "v1" ,
},
healthCheck() {
    return `${this.dev.fullUrl()}/healthcheck`;
} ,

getUsers(page = 1) {
    return `${this.dev.fullUrl()}/org/users?page=${page}`;
},

} ;

export default  paths ;
