const app = Vue.createApp({
    data() {
        return {
            comments: []
        }
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            const urlParams = new URLSearchParams(window.location.search);
            const postId = urlParams.get('post');

            console.error(postId);

            fetch(`../api/comment/getcomment.php?postid=${postId}`)
                .then(response => response.json())
                .then(data => {
                    this.comments = data;

                    console.log(data);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }
    }
});

app.mount('#comment');