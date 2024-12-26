<script setup>
defineProps({
    name:{
        type: String,
        default:'',
    },
    res:{
        type:Array,
        default:[],
    }
})
</script>

<template>

<h1>This is from {{ name }}</h1>
<h1>{{ res.length }}</h1>


</template>
