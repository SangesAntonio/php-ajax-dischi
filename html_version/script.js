console.log('vue ok', Vue);
const app = new Vue({
    el: '#root',
    data: {
        movies: [],

    },
    methods: {
        getMovies() {
            axios.get('http://localhost/php-ajax-dischi/php-movies/index.php').then(res => {
                this.movies = res.data;
            })
        },
    },
    mounted() {
        this.getMovies();

    }
});
