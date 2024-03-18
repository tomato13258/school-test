<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">學期排課-編輯課表</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-center p-[50px] ">
                    <div class=" w-[80%] flex justify-between mb-[20px]">
                        <div class="">
                            <span class="pr-[15px]">學年度</span>
                            <input type="text" class="w-[330px] rounded-[5px]">
                        </div>
                        <div class="">
                            <span class="pr-[15px]">學期</span>
                            <input type="text" class="w-[400px] rounded-[5px]">
                        </div>
                    </div>
                    <div class="w-[80%] flex justify-between items-center">
                        <!-- 表格區 -->
                        <div class="rounded-[5px] border-[1px] border-gray-950 h-[400px] ">
                            <table class="  text-center  w-[400px]  px-[15px] rounded-[10px]">
                                <tr class="  h-[20px]">
                                    <th colspan="2" class=" bg-gray-200 rounded-t-[5px]">全部課程</th>
                                </tr>
                                <tr class=" h-[20px] bg-gray-200">
                                    <th>課程</th>
                                    <th>教師</th>
                                </tr>
                                <tr class=" h-[20px]">
                                    <td>國文</td>
                                    <td>Garry</td>
                                </tr>
                            </table>
                        </div>
                        <!-- 箭頭按鈕 -->
                        <div class="flex flex-col">
                            <button class="w-[50px] h-[50px] text-[50px]">→</button>
                            <button class="w-[50px] h-[50px] text-[50px]">←</button>
                        </div>
                        <!-- 表格區 -->
                        <div class="rounded-[5px] border-[1px] border-gray-950 h-[400px] ">
                            <table class="  text-center  w-[400px]  px-[15px] rounded-[10px]">
                                <tr class="  h-[20px]">
                                    <th colspan="2" class=" bg-gray-200 rounded-t-[5px]">學期課程</th>
                                </tr>
                                <tr class=" h-[20px] bg-gray-200">
                                    <th>課程</th>
                                    <th>教師</th>
                                </tr>
                                <tr class=" h-[20px]">
                                    <td>國文</td>
                                    <td>Garry</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="">
                        <Link href="/Addclass" class="p-[10px] rounded-[5px]  bg-gray-400 mr-[10px]">返回列表</Link>
                                <button class="p-[8px] rounded-[5px]  bg-blue-400 mr-[10px] text-gray-200 font-bold">儲存</button>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* table{
    border-radius: 5px;
    width: 300px;
} */
</style>