<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程管理-編輯</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-start p-[30px]">
                    <div class="flex items-center">
                        <span>課程名稱</span>
                        <input type="text">
                    </div>
                    <div class="flex items-center">
                        <span>課程簡介</span>
                        <input type="text">
                    </div>
                    <div class="flex items-center">
                        <span>課程照片</span>
                        <img src="https://fakeimg.pl/250x150/">
                    </div>
                    <div class="flex">
                        <Link href="/EditTeacher" class="p-[5px] rounded-[5px]  border-gray-800 border-[2px] mr-[5px]">返回列表</Link>
                        <button class="p-[5px] rounded-[5px]  border-gray-800 border-[2px] mr-[5px]">編輯</button>
                    </div>

                    
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>