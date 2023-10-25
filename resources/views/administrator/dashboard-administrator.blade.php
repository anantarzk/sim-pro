@extends('layouts.layout_administrator')
@section('title_page', 'ADMINISTRATOR')


<div class="my-20 mx-10">
    <div class="flex">
        <div class=" w-2/3 flex flex-col mr-2 h-screen bg-white border shadow-md rounded p-4">
            <div>
                <h1 class=" text-xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                    Log Activity
                    <p class="text-base font-normal text-gray-500 ">
                        Seluruh Aktivitas yang ada pada Engineering Design.</p>
                </h1>
            </div>

            <div class="-mx-2 h-full overflow-x-auto overflow-y-auto p-2 mt-1">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal ">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Activity
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Time
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($log as $u)
                                <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200">
                                    <td class="px-2 py-2 border-b border-gray-200  text-sm ">
                                        <div class="flex items-center">

                                            <div class="ml-0">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $u->aktivitas }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2 py-2 border-b border-gray-200  text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $u->waktu }}</p>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>

            </div>
            <a href="/log-activity" class="mt-8">
                <button
                    class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                    View Detail Log Activity
                </button>
            </a>

        </div>
        <div class=" w-1/3 flex flex-col  h-screen bg-white border shadow-md rounded p-4">


            <div>
                <h1 class=" text-xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                    Kelola Akun
                    <p class="text-base font-normal text-gray-500 ">
                        Seluruh Akun yang ada pada Engineering Design.</p>
                </h1>
            </div>

            {{-- tabel akun --}}



            <div class="-mx-2 h-full overflow-x-auto overflow-y-auto p-2 mt-1">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal ">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Nama
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    NIK
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200">
                                    <td class="px-2 py-2 border-b border-gray-200  text-sm ">
                                        <div class="flex items-center">

                                            <div class="ml-0">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $u->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2 py-2 border-b border-gray-200  text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $u->nik }}</p>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>

            </div>

            {{-- akhir tabel akun --}}


            <a href="/kelola-akun" class="mt-8">
                <button
                    class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                    View Detail Kelola Akun
                </button>
            </a>
        </div>


    </div>
</div>
{{--
<br><br><br><br><br><br><br><br>
<h2>hal administrator</h2>


<br><br><br>
<hr><br><a href="/registrasi-account" class="m-5"><button
        class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
        <span
            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Tambah Akun
        </span>
    </button></a>
<hr>
@foreach ($tables as $table)
    {{ $table->Tables_in_12_okt_edd }}
@endforeach --}}
