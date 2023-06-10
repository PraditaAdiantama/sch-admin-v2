<template>
    <header class="py-5 border fixed w-full bg-white z-30">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">School Admin</h1>
            <nav>
                <ul class="flex gap-10 font-semibold">
                    <li><NuxtLink to="/">Home</NuxtLink></li>
                    <li><NuxtLink to="/student">Stundent</NuxtLink></li>
                    <li><NuxtLink to="/teacher">Teacher</NuxtLink></li>
                    <li><NuxtLink to="/major">Major</NuxtLink></li>
                    <li><NuxtLink to="/subject">Subject</NuxtLink></li>
                </ul>
            </nav>
        </div>
    </header>
</template>