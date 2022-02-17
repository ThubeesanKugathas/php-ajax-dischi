new Vue({
    el: "#app",
    data: {
        discList: [],
        filteredDiscList: [],
        genreValue: '',
        artistValue: '',
    },
    // mounted for fill the arrays from give data from api.php
    mounted() {
        axios.get("http://localhost/esercizi/php-ajax-dischi/api.php")
            .then((response) => {
                this.discList = response.data;
                this.filteredDiscList = response.data;
            });
    },
    methods: {
        // filter genre like vue-dischi project
        filterGenre() {
            this.filteredDiscList = this.discList.filter((disco) => {
            return disco.genre === this.genreValue || this.genreValue === 'All';
            });
        },
        // filter artist like vue-dischi project
        filterArtist() {
            this.filteredDiscList = this.discList.filter((disco) => {
              return disco.author === this.artistValue || this.artistValue === 'All';
            });
          },
    }
});