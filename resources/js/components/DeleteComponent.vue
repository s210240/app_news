<template>
    <div>
        <button type="button" class="btn btn-primary" v-on:click="unsubNews()">UnSubscribe</button>
    </div>
</template>

<script>
    export default {
        name: "DeleteComponent",
        props: ['deleteId'],

        mounted () {
            console.dir(this.deleteId)
        },

        methods: {
            unsubNews() {
                let self = this;
                let id = self.deleteId;
                if (confirm("Do you really want to unsubscribe it?")) {
                    axios.delete('/subscribe/' + id)
                        .then(function (response) {
                            console.log(response);
                            location.reload();
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
