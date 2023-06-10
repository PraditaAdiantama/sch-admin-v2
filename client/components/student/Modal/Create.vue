<template>
    <div id="modal" class="fixed z-40 w-full h-full left-0">
        <div class="absolute z-40 flex justify-center w-full h-screen items-center">
            <div class="w-3/6 bg-white border border-10 rounded-xl">
                <h3 class="px-4 py-5 border-b-2 font-semibold">Add New Student</h3>
                <form action="" class="px-4 py-3">
                    <div class="my-3">
                        <label class="font-semibold my-3">Nis</label>
                        <input type="number" v-model="formData.nis" class="w-full">
                    </div>
                    <div class="my-3">
                        <label class="font-semibold my-3">Name</label>
                        <input type="text" v-model="formData.name" class="w-full">
                    </div>
                    <div class="my-3">
                        <label class="font-semibold my-3">Gender</label>
                        <br>
                        <select v-model="formData.gender" class="w-full border py-2 px-4 rounded-xl">
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label class="font-semibold my-3">Major</label>
                        <select v-model="formData.major_id" class="w-full border py-2 px-4 rounded-xl">
                            <option v-for="major in majors?.majors" :value="major.id">{{ major.name }}</option>
                        </select>
                    </div>
                </form>
                <div class="py-3 px-4 border-t-2 flex justify-between">
                    <button class="btn bg-gray-500" @click="handleShow">Cancel</button>
                    <button type="submit" @click="handleSubmit" class="btn bg-green-500">Submit</button>
                </div>
            </div>
        </div>
        <div class="w-full h-full opacity-50 bg-black"></div>
    </div>
</template>

<script setup>
const majors = useState('majors')
const modal = useState('modal')

let formData = {
    nis: null,
    name: "",
    gender: "",
    major_id: null
}

async function handleSubmit() {
    console.log(formData)
    await $fetch('http://localhost:8000/api/students', {
        method: 'POST',
        body: formData
    })
    refreshNuxtData()
    modal.value = false
}

function handleShow() {
    modal.value = false
}

const { data } = await useFetch('http://localhost:8000/api/majors')
onMounted(() => {
    majors.value = data
})

</script>