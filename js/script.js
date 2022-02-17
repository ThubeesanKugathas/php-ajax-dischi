new Vue({
    el: "#app",
    data: {
        discList: [],
        filteredDiscList: [],
        genreValue: '',
        artistValue: '',
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
            return disco.genre === this.genreValue || this.genreValue === 'All';
            });
        },
        filterArtist() {
            this.filteredDiscList = this.discList.filter((disco) => {
              return disco.author === this.artistValue || this.artistValue === 'All';
            });
          },
    }
});