<template>
    <div>
        <button v-on:click="subNews()">Subscribe</button>
    </div>
</template>

<script>
    export default {
        name: "PostComponent",

        props: ['surveyData'],

        mounted () {
            console.dir(this.surveyData)
        },

        methods: {
            subNews() {
                let self = this;
                let id = self.surveyData;
                if (confirm("Do you really want to subscribe it?")) {
                    axios.post('/subscribe', {
                        id: id
                    })
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });

                }
            }
        }
    }
</script>

<style scoped>

</style>
