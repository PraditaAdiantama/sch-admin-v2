<template>
    <table class=" text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th class="px-6 py-3">Nis</th>
                <th class="px-6 py-3">Name</th>
                <th class="px-6 py-3">Gender</th>
                <th class="px-6 py-3">major</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody v-for="student in students?.students">
            <tr class="bg-white border-b">
                <td class="px-5 py-3">
                    {{ student.nis }}
                </td>
                <td class="px-5 py-3">
                    {{ student.name }}
                </td>
                <td class="px-5 py-3">
                    {{ student.gender }}
                </td>
                <td class="px-5 py-3">
                    {{ student["major"].name }}
                </td>
                <td class="px-5 py-3">
                    <NuxtLink :to="`student/${student.id}`" class="btn bg-blue-300">Edit</NuxtLink>
                    <button class="btn bg-red-500 mx-5" @click="handleDelete(student.id)">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
const { data } = await useFetch('http://127.0.0.1:8000/api/students')
const students = useState('students')

onMounted(() => {
    students.value = data
})

async function handleDelete(id) {
    await $fetch(`http://127.0.0.1:8000/api/students/${id}`, {
        method: 'DELETE'
    }).then(() => console.log('tes'))
    refreshNuxtData()
}
</script>