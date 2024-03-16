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
                    <div class="flex items-center mb-[20px]">
                        <span class="mr-[20px] ">課程名稱</span>
                        <input type="text" class="rounded-[5px]">
                    </div>
                    <div class="flex items-center  mb-[20px]">
                        <span  class="mr-[20px]">課程簡介</span>
                        <input type="text" class="rounded-[5px]">
                    </div>
                    <div class="flex items-center mb-[50px]">
                        <span class="mr-[20px]">課程照片</span>
                        <button class="w-[100px] h-[50px] bg-blue-300">按下新增</button>
                    </div>
                    <div class="flex">
                        <Link href="/ClassManagement" class="p-[8px] rounded-[5px]  bg-slate-400 mr-[5px]">返回列表</Link>
                        <button class="p-[5px] rounded-[5px] bg-green-400p-[8px]  bg-blue-500 text-gray-100 font-bold border-[2px]  mr-[5px]">儲存</button>
                    </div>

                    
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>