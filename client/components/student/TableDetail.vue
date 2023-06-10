<template>
    <table class=" text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th class="px-6 py-3">Nis</th>
                <th class="px-6 py-3">Name</th>
                <th class="px-6 py-3">Gender</th>
                <th class="px-6 py-3">major</th>
            </tr>
        </thead>
        <tbody v-for="student in student">
            <tr class="bg-white border-b">
                <td class="px-5 py-3">
                    {{ student?.nis }}
                </td>
                <td class="px-5 py-3">
                    {{ student?.name }}
                </td>
                <td class="px-5 py-3">
                    {{ student?.gender }}
                </td>
                <td class="px-5 py-3">
                    {{ student?.major.name }}
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
const student = defineProps(['student'])
</script>