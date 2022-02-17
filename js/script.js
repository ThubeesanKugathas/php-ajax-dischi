new Vue({
    el: "#app",
    data: {
        discList: [],
        filteredDiscList: [],
        value: '',
    },
    mounted() {
        axios.get("http://localhost/esercizi/php-ajax-dischi/api.php")
            .then((response) => {
                this.discList = response.data;
                this.filteredDiscList = response.data;
            });
    },
    methods: {
        filterGenre() {
            this.filteredDiscList = this.discList.filter((disco) => {
            return disco.genre === this.value || this.value === 'All';
            });
        }
    }
});