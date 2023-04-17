const { createApp } = Vue;

createApp({
    data(){
        return {
            items: [],
            apiUrl:'http://localhost:8888/php-oop-2/server.php',
        }
    },
    methods: {
        getItems(){
            axios.get(this.apiUrl)
            .then((result)=> {
                this.items = result.data;
            });
        }
    },
    created(){
        this.getItems();
    }
}).mount('#app');