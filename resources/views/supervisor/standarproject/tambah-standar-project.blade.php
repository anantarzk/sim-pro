@extends('layouts.layout_supervisor')
@section('title_page', 'Formulir Kerja Standar')



<div class="my-20 mx-10">
    <p class="text-3xl font-bold font-mono mt-4 mb-3">Formulir Kerja Standar</p>

    @if (Session::has('status'))
        <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{-- Tampilkan isi teks message --}}
                {{ Session::get('message') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    {{-- end notifikasi --}}

    @if ($spCount == 0)
        <div class="flex flex-col items-center justify-center mt-44">
            <p>Klik Tombol dibawah untuk mulai mengelola Formulir Kerja Standar 6 Step Project</p>
            <br>
            <form action="" method="post">
                @csrf
                <input type="text" name="marking" value="Standar-1" hidden>
                <button type="submit"
                    class="text-orange-500 hover:text-white border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-orange-300 dark:text-orange-300 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-800">Mulai
                    Kelola</button>
            </form>
        </div>
    @else
        <!-- component -->
        <div class="w-full rounded">
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex px-1 pt-2 bg-gray-100">
                {{-- <li
                    class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-orange-500 rounded-t opacity-50">
                    <a id="default-tab" href="#first">All</a>
                </li> --}}
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a id="default-tab"
                        href="#first">Fund Request</a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Arrangement</a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Purchasing</a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a
                        href="#fourth">Manufacturing</a></li>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a
                        href="#five">Installation</a></li>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#six">Handover</a>
                </li>
            </ul>

            <!-- Tab Contents -->
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @foreach ($standarproject as $spt)
                    {{ $spt->pr_parts_material_form }}
                    {{-- atas form --}}
                    <div id="tab-contents">
                        {{-- batas konten 1 --}}
                        <div id="first" class="p-1">
                            <br>

                            {{-- awal tabel --}}
                            <div class=" font-light  overflow-x-auto rounded-md">
                                <table class="w-full ">
                                    <thead class="bg-emerald-600 text-white ">
                                        <th class="py-2 w-[15%]">Kategori Formulir</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[10%]">Uploaded by</th>
                                        <th class="w-[10%]">Last Update</th>
                                        <th class="w-[10%]">Upload</th>
                                    </thead>
                                    <tbody class="text-left">
                                        {{-- 1 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 ">
                                            <td class="py-4 font-bold bg-teal-600 rounded-b-md">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Fund Request
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_fr_sheet_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_fr_sheet_form) }}"
                                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_fr_sheet_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_fr_sheet_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_fr_sheet_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_fr_sheet_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_fr_sheet_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_fr_sheet_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal11" data-modal-show="modal11"
                                                            data-modal-toggle="modal11">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown11" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_fr_sheet_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_fr_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_fr_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            {{-- Akhir tabel --}}
                        </div>
                        {{-- akhir batas konten 1 --}}

                        {{-- batas konten 2 --}}
                        <div id="second" class="hidden p-1">
                            <br>
                            {{-- awal tabel --}}
                            <div class=" font-light  overflow-x-auto rounded-md">
                                <table class="w-full ">
                                    <thead class="bg-emerald-600 text-white ">
                                        <th class="py-2 w-[15%]">Kategori Formulir</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[10%]">Uploaded by</th>
                                        <th class="w-[10%]">Last Update</th>
                                        <th class="w-[10%]">Upload</th>
                                    </thead>
                                    <tbody class="text-left">
                                        {{-- 1 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Drawing - Mechanical
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_dr_m_sheet_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_m_sheet_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_m_sheet_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_dr_m_sheet_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_dr_m_sheet_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_dr_m_sheet_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_dr_m_sheet_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_dr_m_sheet_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal21" data-modal-show="modal21"
                                                            data-modal-toggle="modal21">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown21" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_dr_m_sheet_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_dr_m_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_dr_m_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Drawing Electrical
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_dr_e_sheet_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_e_sheet_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_e_sheet_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_dr_e_sheet_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_dr_e_sheet_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_dr_e_sheet_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_dr_e_sheet_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_dr_e_sheet_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal22" data-modal-show="modal22"
                                                            data-modal-toggle="modal22">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown22" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_dr_e_sheet_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_dr_e_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_dr_e_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 3 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Layout Approval
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_lay_aprvl_sheet_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_lay_aprvl_sheet_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_lay_aprvl_sheet_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_lay_aprvl_sheet_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_lay_aprvl_sheet_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_lay_aprvl_sheet_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_lay_aprvl_sheet_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_lay_aprvl_sheet_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal23" data-modal-show="modal23"
                                                            data-modal-toggle="modal23">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown23" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_lay_aprvl_sheet_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_lay_aprvl_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_lay_aprvl_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 4 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Drawing Approval
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_dr_aprvl_sheet_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_aprvl_sheet_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_aprvl_sheet_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_dr_aprvl_sheet_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_dr_aprvl_sheet_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_dr_aprvl_sheet_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_dr_aprvl_sheet_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_dr_aprvl_sheet_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal24" data-modal-show="modal24"
                                                            data-modal-toggle="modal24">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown24" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_dr_aprvl_sheet_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_dr_aprvl_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_dr_aprvl_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Design Sheet
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_design_sheet_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_design_sheet_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_design_sheet_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_design_sheet_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_design_sheet_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_design_sheet_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_design_sheet_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_design_sheet_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal25" data-modal-show="modal25"
                                                            data-modal-toggle="modal25">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown25" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_design_sheet_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_design_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_design_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>

                                        {{-- 6 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    DR Meeting
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_dr_meeting_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_meeting_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_meeting_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_dr_meeting_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_dr_meeting_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_dr_meeting_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_dr_meeting_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_dr_meeting_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal26" data-modal-show="modal26"
                                                            data-modal-toggle="modal26">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown26" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_dr_meeting_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_dr_meeting_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_dr_meeting_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 7 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 rounded-b-md">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Estimasi Budget
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_est_budget_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_est_budget_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_est_budget_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_est_budget_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_est_budget_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_est_budget_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_est_budget_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_est_budget_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal27" data-modal-show="modal27"
                                                            data-modal-toggle="modal27">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown27" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_est_budget_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_est_budget_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_est_budget_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            {{-- Akhir tabel --}}
                        </div>
                        {{-- akhir batas konten 2 --}}

                        {{-- awal batas konten 3 --}}
                        <div id="third" class="hidden p-1">
                            <br>
                            {{-- awal tabel --}}
                            <div class=" font-light  overflow-x-auto rounded-md">
                                <table class="w-full ">
                                    <thead class="bg-emerald-600 text-white ">
                                        <th class="py-2 w-[15%]">Kategori Formulir</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[10%]">Uploaded by</th>
                                        <th class="w-[10%]">Last Update</th>
                                        <th class="w-[10%]">Upload</th>
                                    </thead>
                                    <tbody class="text-left">
                                        {{-- 1 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    PR Parts & Material
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_pr_parts_material_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_parts_material_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_parts_material_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_pr_parts_material_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_pr_parts_material_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_pr_parts_material_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_pr_parts_material_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_pr_parts_material_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal31" data-modal-show="modal31"
                                                            data-modal-toggle="modal31">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown31" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_pr_parts_material_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_pr_parts_material_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_material_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    PR Pekerjaan/Jasa
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_pr_pekerjaan_jasa_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_pekerjaan_jasa_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_pekerjaan_jasa_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_pr_pekerjaan_jasa_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_pr_pekerjaan_jasa_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_pr_pekerjaan_jasa_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_pr_pekerjaan_jasa_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_pr_pekerjaan_jasa_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal32" data-modal-show="modal32"
                                                            data-modal-toggle="modal32">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown32" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_pr_pekerjaan_jasa_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_pr_pekerjaan_jasa_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_pekerjaan_jasa_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 3 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    PR Manufaktur
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_pr_manufaktur_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_manufaktur_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_manufaktur_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_pr_manufaktur_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_pr_manufaktur_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_pr_manufaktur_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_pr_manufaktur_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_pr_manufaktur_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal33" data-modal-show="modal33"
                                                            data-modal-toggle="modal33">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown33" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_pr_manufaktur_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_pr_manufaktur_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_manufaktur_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 4 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    PER (Preliminary Estimate Request)
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_pr_per_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_per_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_per_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_pr_per_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_pr_per_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_pr_per_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_pr_per_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_pr_per_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal34" data-modal-show="modal34"
                                                            data-modal-toggle="modal34">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown34" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_pr_per_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_pr_per_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_per_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 rounded-b-md ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white ">
                                                    Request For Quotation
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_pr_rfq_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_rfq_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_rfq_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_pr_rfq_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_pr_rfq_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_pr_rfq_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_pr_rfq_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_pr_rfq_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal35" data-modal-show="modal35"
                                                            data-modal-toggle="modal35">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown35" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_pr_rfq_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_pr_rfq_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_rfq_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>

                                    </tbody>
                                </table>
                                <br>
                            </div>
                            {{-- Akhir tabel --}}
                        </div>
                        {{-- akhir batas konten 3 --}}

                        {{-- awal batas konten 4 --}}
                        <div id="fourth" class="hidden p-1">
                            <br>
                            {{-- awal tabel --}}
                            <div class=" font-light  overflow-x-auto rounded-md">
                                <table class="w-full ">
                                    <thead class="bg-emerald-600 text-white ">
                                        <th class="py-2 w-[15%]">Kategori Formulir</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[10%]">Uploaded by</th>
                                        <th class="w-[10%]">Last Update</th>
                                        <th class="w-[10%]">Upload</th>
                                    </thead>
                                    <tbody class="text-left">
                                        {{-- 1 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 ">
                                            <td class="py-4 font-bold bg-teal-600 rounded-b-md ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Inspection Report and others
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_mn_ir_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_mn_ir_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_mn_ir_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_mn_ir_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_mn_ir_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_mn_ir_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_mn_ir_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_mn_ir_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal41" data-modal-show="modal41"
                                                            data-modal-toggle="modal41">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown41" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_mn_ir_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_mn_ir_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_mn_ir_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            {{-- Akhir tabel --}}
                        </div>
                        {{-- akhir batas konten 4 --}}

                        {{-- awal batas konten 5 --}}
                        <div id="five" class="hidden p-1">
                            <br>
                            {{-- awal tabel --}}
                            <div class=" font-light  overflow-x-auto rounded-md">
                                <table class="w-full ">
                                    <thead class="bg-emerald-600 text-white ">
                                        <th class="py-2 w-[15%]">Kategori Formulir</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[10%]">Uploaded by</th>
                                        <th class="w-[10%]">Last Update</th>
                                        <th class="w-[10%]">Upload</th>
                                    </thead>
                                    <tbody class="text-left">
                                        {{-- 1 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Izin Power On
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_ipo_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ipo_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ipo_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_ipo_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_ipo_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_ipo_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_ipo_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_ipo_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal51" data-modal-show="modal51"
                                                            data-modal-toggle="modal51">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown51" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_ipo_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_ipo_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_ipo_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Equipment Check Report - Electrical & Mechanical
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_ecr_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ecr_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ecr_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_ecr_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_ecr_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_ecr_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_ecr_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_ecr_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal52" data-modal-show="modal52"
                                                            data-modal-toggle="modal52">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown52" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_ecr_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_ecr_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_ecr_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 3 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Safety Check
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_sc_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_sc_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_sc_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_sc_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_sc_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_sc_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_sc_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_sc_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal53" data-modal-show="modal53"
                                                            data-modal-toggle="modal53">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown53" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_sc_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_sc_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_sc_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 4 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Safety Completeness Check
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_sccs_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_sccs_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_sccs_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_sccs_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_sccs_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_sccs_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_sccs_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_sccs_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal54" data-modal-show="modal54"
                                                            data-modal-toggle="modal54">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown54" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_sccs_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_sccs_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_sccs_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 rounded-b-md ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white ">
                                                    Inspection Report
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_in_ir_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_in_ir_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_in_ir_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_in_ir_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_in_ir_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_in_ir_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_in_ir_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_in_ir_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal55" data-modal-show="modal55"
                                                            data-modal-toggle="modal55">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown55" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_in_ir_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_in_ir_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_in_ir_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            {{-- Akhir tabel --}}
                        </div>
                        {{-- akhir batas konten 5 --}}

                        {{-- awal batas konten 6 --}}
                        <div id="six" class="hidden p-1">
                            <br>
                            {{-- awal tabel --}}
                            <div class=" font-light  overflow-x-auto rounded-md">
                                <table class="w-full ">
                                    <thead class="bg-emerald-600 text-white ">
                                        <th class="py-2 w-[15%]">Kategori Formulir</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[10%]">Uploaded by</th>
                                        <th class="w-[10%]">Last Update</th>
                                        <th class="w-[10%]">Upload</th>
                                    </thead>
                                    <tbody class="text-left">
                                        {{-- 1 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Izin Pemeriksaan Mesin
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_iperiksam_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_iperiksam_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_iperiksam_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_iperiksam_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_iperiksam_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_iperiksam_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_iperiksam_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_iperiksam_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal61" data-modal-show="modal61"
                                                            data-modal-toggle="modal61">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown61" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_iperiksam_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_iperiksam_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_iperiksam_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    System Quality Assurance
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_qas_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_qas_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_qas_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_qas_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_qas_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_qas_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_qas_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_qas_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal62" data-modal-show="modal62"
                                                            data-modal-toggle="modal62">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown62" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_qas_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_qas_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_qas_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 3 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Izin Pakai Mesin
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_ipakaim_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ipakaim_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ipakaim_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_ipakaim_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_ipakaim_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_ipakaim_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_ipakaim_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_ipakaim_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal63" data-modal-show="modal63"
                                                            data-modal-toggle="modal63">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown63" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_ipakaim_form"
                                                        id="">
                                                @endif

                                            </td>
                                            <input type="text" hidden name="as_up_ipakaim_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_ipakaim_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 4 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600 ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white">
                                                    Dokumen Training
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_training_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_training_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_training_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_training_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_training_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_training_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_training_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_training_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal64" data-modal-show="modal64"
                                                            data-modal-toggle="modal64">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown64" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_training_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_training_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_training_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600  ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white ">
                                                    Listup Trouble
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_lup_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_lup_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_lup_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_lup_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_lup_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_lup_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_lup_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_lup_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal65" data-modal-show="modal65"
                                                            data-modal-toggle="modal65">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown65" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_lup_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_lup_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_lup_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 6 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600  ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white ">
                                                    Control Awal Mesin Baru
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_camb_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_camb_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_camb_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_camb_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_camb_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_camb_form }}
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="text-center">{{ $spt->date_camb_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_camb_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal66" data-modal-show="modal66"
                                                            data-modal-toggle="modal66">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown66" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_camb_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_camb_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_camb_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 7 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600  ">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white ">
                                                    Instruction Manual
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_cl_im_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_cl_im_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_cl_im_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_cl_im_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_cl_im_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_cl_im_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_cl_im_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_cl_im_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal67" data-modal-show="modal67"
                                                            data-modal-toggle="modal67">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown67" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_cl_im_form"
                                                        id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_cl_im_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_cl_im_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 8 --}}
                                        <tr
                                            class="  hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 border-b ">
                                            <td class="py-4 font-bold bg-teal-600  rounded-b-md">
                                                <p class="font-normal py-1 px-2 text-md text-center  text-white ">
                                                    Completion and Handover Report
                                                </p>
                                            </td>
                                            <td class="flex justify-start py-4 px-3 items-center">
                                                @if ($spt->file_chor_form != '')
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_chor_form) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-300   ">
                                                        <svg width="22" height="17" viewBox="0 0 22 17"
                                                            fill="none" class="mx-2"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </a>
                                                    {{--  --}}
                                                    <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_chor_form) }}"
                                                        target="blank" download=""
                                                        class="hover:underline">{{ $spt->file_chor_form }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($spt->up_chor_form != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                                        {{ $spt->up_chor_form }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $spt->date_chor_form }}</td>
                                            <td class="space-y-2 py-3 px-2">
                                                @if ($spt->file_chor_form != '')
                                                    <div class="justify-center flex space-x-2">
                                                        <button type="button"
                                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                            data-modal-target="modal68" data-modal-show="modal68"
                                                            data-modal-toggle="modal68">
                                                            Ubah
                                                        </button>
                                                        <button data-dropdown-toggle="dropdown68" type="button"
                                                            class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="22" fill="white" viewBox="0 0 48 48">
                                                                <path
                                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                @else
                                                    <input type="file" name="as_file_chor_form" id="">
                                                @endif
                                            </td>
                                            <input type="text" hidden name="as_up_chor_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_chor_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            {{-- Akhir tabel --}}
                        </div>
                        {{-- akhir batas konten 6 --}}
                    </div>

                    <button type="submit"
                        class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-md shadow-md">Submit</button>
                @endforeach
            </form>
        </div>

        <script>
            let tabsContainer = document.querySelector("#tabs");

            let tabTogglers = tabsContainer.querySelectorAll("a");
            console.log(tabTogglers);

            tabTogglers.forEach(function(toggler) {
                toggler.addEventListener("click", function(e) {
                    e.preventDefault();

                    let tabName = this.getAttribute("href");

                    let tabContents = document.querySelector("#tab-contents");

                    for (let i = 0; i < tabContents.children.length; i++) {

                        tabTogglers[i].parentElement.classList.remove("border-orange-500", "border-b", "-mb-px",
                            "opacity-100");
                        tabContents.children[i].classList.remove("hidden");
                        if ("#" + tabContents.children[i].id === tabName) {
                            continue;
                        }
                        tabContents.children[i].classList.add("hidden");

                    }
                    e.target.parentElement.classList.add("border-orange-500", "border-b-4", "-mb-px",
                        "opacity-100");
                });
            });

            document.getElementById("default-tab").click();
        </script>
    @endif

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- modal ubah FR --}}
        <div id="modal11"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                        <p class="text-2xl font-semibold text-gray-900 font-mono">
                            Ubah formulir kerja standar
                        </p>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            onclick="simulateEscape()">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="py-2 px-5">
                        <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                        <div class="grid grid-cols-2 space-x-2">
                            <div>
                                <p class="text-base leading-relaxed text-gray-600">
                                    Nama dokumen:
                                </p>
                                <p class="text-gray-900">
                                    {{ $spt->file_fr_sheet_form }}
                                </p>
                            </div>
                            <div>
                                <p class="text-base leading-relaxed text-gray-600">
                                    Oleh:
                                </p>
                                <p class="text-gray-900">
                                    {{ $spt->up_fr_sheet_form }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                        <p class="font-light text-lg">
                            Unggah dokumen baru
                        </p>
                        <div class="items-center justify-center w-full border my-4">
                            @if ($spt->file_fr_sheet_form != '')
                                <input type="file"name="as_file_fr_sheet_form" id="">
                                <input type="text" hidden name="as_up_fr_sheet_form"
                                    value="{{ Auth::user()->first_name }}">
                                <input type="date" hidden name="as_date_fr_sheet_form"
                                    value="{{ date('Y-m-d') }}">
                            @else()
                            @endif
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                </div>
            </div>
        </div>

        {{-- modal ubah AR --}}
        @php
            $words = ['dr_m_sheet', 'dr_e_sheet', 'lay_aprvl_sheet', 'dr_aprvl_sheet', 'design_sheet', 'dr_meeting', 'est_budget'];
        @endphp

        @foreach ($words as $index => $word)
            <div id="modal{{ $index + 21 }}"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                            <p class="text-2xl font-semibold text-gray-900 font-mono">
                                Ubah formulir kerja standar
                            </p>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                onclick="simulateEscape()">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="py-2 px-5">
                            <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                            <div class="grid grid-cols-2 space-x-2">
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Nama dokumen:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'file_' . $word . '_form'} }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Oleh:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'up_' . $word . '_form'} }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                            <p class="font-light text-lg">
                                Unggah dokumen baru
                            </p>
                            <div class="items-center justify-center w-full border my-4">
                                @if ($spt->{'file_' . $word . '_form'} != '')
                                    <input type="file" name="as_file_{{ $word }}_form"
                                        id="">
                                    <input type="text" hidden name="as_up_{{ $word }}_form"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_{{ $word }}_form"
                                        value="{{ date('Y-m-d') }}">
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                            class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- modal ubah Purchasing --}}
        @php
            $words = ['pr_parts_material', 'pr_pekerjaan_jasa', 'pr_manufaktur', 'pr_per', 'pr_rfq'];
        @endphp

        @foreach ($words as $index => $word)
            <div id="modal{{ $index + 31 }}"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                            <p class="text-2xl font-semibold text-gray-900 font-mono">
                                Ubah formulir kerja standar
                            </p>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                onclick="simulateEscape()">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="py-2 px-5">
                            <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                            <div class="grid grid-cols-2 space-x-2">
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Nama dokumen:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'file_' . $word . '_form'} }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Oleh:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'up_' . $word . '_form'} }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                            <p class="font-light text-lg">
                                Unggah dokumen baru
                            </p>
                            <div class="items-center justify-center w-full border my-4">
                                @if ($spt->{'file_' . $word . '_form'} != '')
                                    <input type="file" name="as_file_{{ $word }}_form"
                                        id="">
                                    <input type="text" hidden name="as_up_{{ $word }}_form"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_{{ $word }}_form"
                                        value="{{ date('Y-m-d') }}">
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                            class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                    </div>
                </div>
            </div>
        @endforeach


        {{-- modal ubah Manufacturing --}}
        <div id="modal41"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                        <p class="text-2xl font-semibold text-gray-900 font-mono">
                            Ubah formulir kerja standar
                        </p>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            onclick="simulateEscape()">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="py-2 px-5">
                        <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                        <div class="grid grid-cols-2 space-x-2">
                            <div>
                                <p class="text-base leading-relaxed text-gray-600">
                                    Nama dokumen:
                                </p>
                                <p class="text-gray-900">
                                    {{ $spt->file_mn_ir_form }}
                                </p>
                            </div>
                            <div>
                                <p class="text-base leading-relaxed text-gray-600">
                                    Oleh:
                                </p>
                                <p class="text-gray-900">
                                    {{ $spt->up_mn_ir_form }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                        <p class="font-light text-lg">
                            Unggah dokumen baru
                        </p>
                        <div class="items-center justify-center w-full border my-4">
                            @if ($spt->file_fr_sheet_form != '')
                                <input type="file"name="as_file_mn_ir_form" id="">
                                <input type="text" hidden name="as_up_mn_ir_form"
                                    value="{{ Auth::user()->first_name }}">
                                <input type="date" hidden name="as_mn_ir_form" value="{{ date('Y-m-d') }}">
                            @else()
                            @endif
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                </div>
            </div>
        </div>


        {{-- modal ubah Installation --}}
        @php
            $words = ['ipo', 'ecr', 'sc', 'sccs', 'in_ir'];
        @endphp

        @foreach ($words as $index => $word)
            <div id="modal{{ $index + 51 }}"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                            <p class="text-2xl font-semibold text-gray-900 font-mono">
                                Ubah formulir kerja standar
                            </p>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                onclick="simulateEscape()">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="py-2 px-5">
                            <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                            <div class="grid grid-cols-2 space-x-2">
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Nama dokumen:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'file_' . $word . '_form'} }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Oleh:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'up_' . $word . '_form'} }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                            <p class="font-light text-lg">
                                Unggah dokumen baru
                            </p>
                            <div class="items-center justify-center w-full border my-4">
                                @if ($spt->{'file_' . $word . '_form'} != '')
                                    <input type="file" name="as_file_{{ $word }}_form"
                                        id="">
                                    <input type="text" hidden name="as_up_{{ $word }}_form"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_{{ $word }}_form"
                                        value="{{ date('Y-m-d') }}">
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                            class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- modal ubah handover --}}
        @php
            $words = ['iperiksam', 'qas', 'ipakaim', 'training', 'lup', 'camb', 'cl_im', 'chor'];
        @endphp

        @foreach ($words as $index => $word)
            <div id="modal{{ $index + 61 }}"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                            <p class="text-2xl font-semibold text-gray-900 font-mono">
                                Ubah formulir kerja standar
                            </p>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                onclick="simulateEscape()">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="py-2 px-5">
                            <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                            <div class="grid grid-cols-2 space-x-2">
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Nama dokumen:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'file_' . $word . '_form'} }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-600">
                                        Oleh:
                                    </p>
                                    <p class="text-gray-900">
                                        {{ $spt->{'up_' . $word . '_form'} }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                            <p class="font-light text-lg">
                                Unggah dokumen baru
                            </p>
                            <div class="items-center justify-center w-full border my-4">
                                @if ($spt->{'file_' . $word . '_form'} != '')
                                    <input type="file" name="as_file_{{ $word }}_form"
                                        id="">
                                    <input type="text" hidden name="as_up_{{ $word }}_form"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_{{ $word }}_form"
                                        value="{{ date('Y-m-d') }}">
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                            class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                    </div>
                </div>
            </div>
        @endforeach
    </form>

    {{-- modal hapus FR --}}
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- hapus form fr --}}
        <div id="dropdown11" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
            <input type="text" hidden name="up_fr_sheet_form" value="">
            <input type="text" hidden name="date_fr_sheet_form" value="">
            <input type="text" hidden name="file_fr_sheet_form" value="">
            <p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
            <div class="grid grid-cols-1 space-x-2 mt-2">
                <button type="submit"
                    class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                    Ya, saya yakin
                </button>
            </div>
        </div>
    </form>

    {{-- hapus form AR --}}
    @php
        $dw2 = ['dr_m_sheet', 'dr_e_sheet', 'lay_aprvl_sheet', 'dr_aprvl_sheet', 'design_sheet', 'dr_meeting', 'est_budget'];
    @endphp

    @foreach ($dw2 as $index => $dd2)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown{{ $index + 21 }}" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                <input type="text" hidden name="up_{{ $dd2 }}_form" value="">
                <input type="text" hidden name="date_{{ $dd2 }}_form" value="">
                <input type="text" hidden name="file_{{ $dd2 }}_form" value="">
                <p class="text-white">Apakah Anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach

    {{-- hapus PR --}}
    @php
        $dw3 = ['pr_parts_material', 'pr_pekerjaan_jasa', 'pr_manufaktur', 'pr_per', 'pr_rfq'];
    @endphp

    @foreach ($dw3 as $index => $dd3)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown{{ $index + 31 }}" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                <input type="text" hidden name="up_{{ $dd3 }}_form" value="">
                <input type="text" hidden name="date_{{ $dd3 }}_form" value="">
                <input type="text" hidden name="file_{{ $dd3 }}_form" value="">
                <p class="text-white">Apakah Anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach

    {{-- hapus manufacturing --}}
    <div id="dropdown41" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
        <input type="text" hidden name="up_mn_ir_form" value="">
        <input type="text" hidden name="date_mn_ir_form" value="">
        <input type="text" hidden name="file_mn_ir_form" value="">
        <p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
        <div class="grid grid-cols-1 space-x-2 mt-2">
            <button type="submit" class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                Ya, saya yakin
            </button>
        </div>
    </div>

    {{-- hapus installation --}}
    @php
        $dw5 = ['ipo', 'ecr', 'sc', 'sccs', 'in_ir'];
    @endphp

    @foreach ($dw5 as $index => $dd5)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown{{ $index + 51 }}" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                <input type="text" hidden name="up_{{ $dd5 }}_form" value="">
                <input type="text" hidden name="date_{{ $dd5 }}_form" value="">
                <input type="text" hidden name="file_{{ $dd5 }}_form" value="">
                <p class="text-white">Apakah Anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach

    {{-- hapus handover --}}
    @php
        $dw6 = ['iperiksam', 'qas', 'ipakaim', 'training', 'lup', 'camb', 'cl_im', 'chor'];
    @endphp

    @foreach ($dw6 as $index => $dd6)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown{{ $index + 61 }}" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                <input type="text" hidden name="up_{{ $dd6 }}_form" value="">
                <input type="text" hidden name="date_{{ $dd6 }}_form" value="">
                <input type="text" hidden name="file_{{ $dd6 }}_form" value="">
                <p class="text-white">Apakah Anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach
    </form>

    <script>
        function simulateEscape() {
            // Create a new KeyboardEvent for the "Escape" key
            const escapeEvent = new KeyboardEvent('keydown', {
                key: 'Escape',
                code: 'Escape',
                keyCode: 27,
                which: 27,
            });
            document.dispatchEvent(escapeEvent);
        }
    </script>
</div>
