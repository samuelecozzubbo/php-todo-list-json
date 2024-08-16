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
        updateList(){
            const data = {
                toDoItem: {
                    text: this.toDoItem,
                    completed: false,  
                    description: ''
                }
            }
            axios.post(this.apiUrl, data,{
                headers :{'Content-type' : 'multipart/form-data'}
            })
            .then(response =>{
                console.log(response.data);
                this.list = response.data;
                this.toDoItem = '';
            })
            console.log(data);
        },
    },
    mounted(){
        this.getApi();

    }
}).mount('#app');  