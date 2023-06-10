<template>
    <div class="flex w-full justify-center pt-20">
        <StudentTableDetail :student="student?.student" />
        {{ student?.student }}
    </div>
</template>

<script setup>
const { id } = useRoute().params
const { data } = await useFetch(`http://127.0.0.1:8000/api/students/${id}`)
const student = useState('student')
onMounted(() => {
    student.value = data
})
</script>