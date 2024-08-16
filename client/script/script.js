const { createApp } = Vue ;

createApp( {
    data() {   
        return {
            title:'Todo List',
            apiUrl:'../server/addToDo.php',
            list:[],
            toDoItem:'',
        }
    },
    methods:{
        getApi(){
            axios.get(this.apiUrl)
            .then(response =>{
                console.log(response.data);
                this.list = response.data;
            })
        },
    },
    mounted(){
        this.getApi();

    }
}).mount('#app');  