<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">學期排課</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-center p-[50px]">
                    <div class="w-full pl-[200px] mb-[20px]" >
                        <Link href="/NewAllClass" class="p-[10px] rounded-[5px]  bg-green-400 mr-[5px]">新增學期課表</Link>
                    </div>
                    
                    <table class=" w-[80%]">
                        <tr class=" bg-gray-400">
                            <th>序號</th>
                            <th>學年</th>
                            <th>學期</th>
                            <th>操作</th>
                        </tr>
                        <tr class="text-center leading-[px]">
                            <td>1</td>
                            <td>113</td>
                            <td>上</td>
                            <td class="gap-5">
                                <button class="p-[8px] rounded-[5px]  bg-green-400 mr-[10px]">寄送</button>
                                <Link href="/EditAllClass" class="p-[8px] rounded-[5px]  bg-blue-400 mr-[10px]">編輯</Link>
                                <button class="p-[8px] rounded-[5px]  bg-red-400 mr-[10px]">刪除</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>