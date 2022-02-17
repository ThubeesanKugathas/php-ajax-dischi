new Vue({
    el: "#app",
    data: {
        discList: [],
    },
    mounted() {
        axios.get("http://localhost/esercizi/php-ajax-dischi/api.php")
            .then((response) => {
                this.discList = response.data;
            });
    }
})