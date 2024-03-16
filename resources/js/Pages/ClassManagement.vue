<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程管理</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-center p-[80px]">
                    
                    <table class=" w-[80%]">
                        <tr class=" bg-gray-400">
                            <th>序號</th>
                            <th>課程名稱</th>
                            <th>課程照片</th>
                            <th>操作</th>
                        </tr>
                        <tr class="text-center ">
                            <td>1</td>
                            <td>國文</td>
                            <td>PIC</td>
                            <td class="gap-5">
                                <Link href="/ClassEdit" class="p-[8px] rounded-[5px]  bg-blue-400 mr-[10px]">編輯</Link>
                                <button class="p-[5px] rounded-[5px] bg-red-400">刪除</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>