<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">儀錶板</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-center">
                    教師列表
                    <table class=" w-[80%]">
                        <tr class=" bg-red-400">
                            <th>序號</th>
                            <th>教師姓名</th>
                            <th>操作</th>
                        </tr>
                        <tr class="text-center leading-[30px]">
                            <td>1</td>
                            <td>Garry</td>
                            <td class="gap-5">
                                <button class="p-[5px] rounded-[5px]  border-gray-800 border-[2px] mr-[5px]">新增</button>
                                <button class="p-[5px] rounded-[5px] border-gray-800 border-[2px]">刪除</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>