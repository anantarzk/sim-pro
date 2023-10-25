@extends('layouts.layout_administrator')
@section('title_page', 'View Team')

<!-- component -->
<div class="antialiased my-20 mx-10">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-0">
            <div class="flex justify-between">
                <div>
                    <h1 class=" text-2xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                        Team Engineering Design
                        <p class="text-base font-normal text-gray-500 ">
                            Seluruh Akun yang ada pada Engineering Design.</p>
                    </h1>
                </div>

                {{-- Tombol Pencarian --}}
                <div class="w-2.5/">

                    <form class="" action="" method="get">
                        <div class="flex">
                            <input type="search" id="keyword" name="keyword"
                                class="p-2 py-3 text-sm text-gray-900 bg-gray-50 border rounded-l border-gray-300  focus:ring-orange-500 focus:border-orange-500"
                                style="width: 350px;" placeholder="Type your search here" required>
                            <button type="submit"
                                class="text-white right-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-r-lg text-sm px-3 py-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            {{-- Akhir Tombol Pencarian --}}
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
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
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Posisi
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Section
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200">
                                    <td class="px-5 py-5 border-b border-gray-200  text-sm ">
                                        <div class="flex items-center">
                                            {{-- <div class="flex-shrink-0 w-10 h-10">
                                                <div
                                                    class="inline-flex overflow-hidden relative justify-center items-center  border-4 border-white bg-amber-500 w-full h-full rounded-full uppercase dark:bg-gray-600 ">
                                                    <span class="font-medium text-gray-700 text-lg dark:text-gray-300 ">
                                                       {{$u->first_name[0]}}
                                                    </span>
                                                </div>
                                            </div> --}}
                                            <div class="ml-0">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $u->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200  text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $u->nik }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200  text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $u->jabatan }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200  text-sm">
                                        @if ($u->section == 'Mechanical')
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-rose-500 opacity-50 rounded-lg"></span>
                                                <span class="relative">{{ $u->section }}</span>
                                            </span>
                                        @elseif ($u->section == 'Electrical')
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-teal-500 opacity-50 rounded-lg"></span>
                                                <span class="relative">{{ $u->section }}</span>
                                            </span>
                                        @elseif ($u->section == 'Manufacturing IT')
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-sky-500 opacity-50 rounded-lg"></span>
                                                <span class="relative">{{ $u->section }}</span>
                                            </span>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>

            </div>
            {{ $users->withQueryString()->links() }}
        </div>
    </div>
</div>
