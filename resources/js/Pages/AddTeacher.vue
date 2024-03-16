<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import EditTeacher from '@/Pages/Auth/TeacherManagement/EditTeacher.vue';
</script>

<template>

    <Head title="Dashboard" />


    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">教師列表-新增教師</h2>
        </template>

        <!-- <EditTeacher /> -->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-start p-[30px]">
                    <div class="flex items-center">
                        <div class="mb-[20px]">
                            <span class="mr-[60px]">課程</span>
                            <select class="h-[45px] text-[18px]  rounded-[5px]">
                                <option class="hidden">請選擇課程</option>
                                <option>國文</option>
                                <option>數學</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center mb-[20px]">
                        <span class="mr-[20px] ">教師姓名</span>
                        <input type="text" class="rounded-[5px]">
                    </div>
                    <div class="flex items-center mb-[50px]">
                        <span class="mr-[20px] ">教師簡介</span>
                        <input type="text" class="rounded-[5px] w-[1000px]">
                    </div>
                    <div class="flex">
                        <Link href="/TeacherManagement"
                            class="p-[8px] rounded-[5px]  bg-slate-400   mr-[5px]">返回列表
                        </Link>
                        <button class="p-[8px] rounded-[5px] bg-blue-500 text-gray-100 font-bold border-[2px] mr-[5px]">儲存</button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>