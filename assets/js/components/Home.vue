<template>
    <div>
        Home Component content  by : 
    {{author_Name}} :)
    </div>
</template>
<script>
export default {
    name: 'Home',
    data() {
        var data = {
            author_Name: "Dezz",
        };
        return data;
    }
}
</script>
</style>
<style scoped>
