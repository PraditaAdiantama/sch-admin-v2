<template>
    <StudentModalCreate v-if="modal"/>
    <div class="pt-20">
        <div class="flex w-full justify-end max-w-3xl mx-auto">
            <button class="btn bg-green-400" @click="handleShow">+ Student</button>
        </div>
        <div class="overflow-x-auto flex justify-center mt-3">
            <StudentTable />
        </div>
    </div>
</template>

<script setup>
const modal =  useState('modal', () => false)

function handleShow(){
    modal.value = true
}

</script>