<template>

</template>

<script>
    export default {
        data() {
            return {
                categories: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/categories/')
                .then(response => {
                    this.categories = response.data;
                    console.log(this.categories);
                });
        }
    }
</script>

<style scoped>

</style>
