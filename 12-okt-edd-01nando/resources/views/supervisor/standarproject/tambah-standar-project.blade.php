@extends('layouts.layout_supervisor')
@section('title_page', 'FORM project')



<div class="my-20 mx-10">

    @if ($spCount == 0)
        <div class="flex flex-col items-center justify-center mt-44">
            <p>Klik Tombol dibawah untuk mulai mengelola standar formulir pada 6 Step Project</p>

            <br>
            <form action="" method="post">
                @csrf
                <input type="text" name="marking" value="Standar-1" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Mulai mengelola Standar Formulir untuk Step Project">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

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
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#six">Closed</a></li>
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
                                                <input type="file" name="as_file_fr_sheet_form" id="">
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
                                                <input type="file" name="as_file_dr_m_sheet_form" id="">
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
                                                <input type="file" name="as_file_dr_e_sheet_form" id="">
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
                                                <input type="file" name="as_file_lay_aprvl_sheet_form"
                                                    id="">
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
                                                <input type="file" name="as_file_dr_aprvl_sheet_form"
                                                    id="">
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
                                                <input type="file" name="as_file_design_sheet_form"
                                                    id="">
                                            </td>
                                            <input type="text" hidden name="as_up_design_sheet_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_design_sheet_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>

                                        {{-- 7 --}}
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
                                                <input type="file" name="as_file_dr_meeting_form" id="">
                                            </td>
                                            <input type="text" hidden name="as_up_dr_meeting_form"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_dr_meeting_form"
                                                value="{{ date('Y-m-d') }}">
                                        </tr>
                                        {{-- 8 --}}
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
                                                <input type="file" name="as_file_est_budget_form" id="">
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
                                                <input type="file" name="as_file_pr_parts_material_form"
                                                    id="">
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
                                                <input type="file" name="as_file_pr_pekerjaan_jasa_form"
                                                    id="">
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
                                                <input type="file" name="as_file_pr_manufaktur_form"
                                                    id="">
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
                                                <input type="file" name="as_file_pr_per_form" id="">
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
                                                <input type="file" name="as_file_pr_rfq_form" id="">
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
                                                <input type="file" name="as_file_mn_ir_form" id="">
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
                                                    Ijin Power On
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
                                                <input type="file" name="as_file_ipo_form" id="">
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
                                                <input type="file" name="as_file_ecr_form" id="">
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
                                                <input type="file" name="as_file_sc_form" id="">
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
                                                <input type="file" name="as_file_sccs_form" id="">
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
                                                <input type="file" name="as_file_in_ir_form" id="">
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
                                                    Ijin Pemeriksaan Mesin
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
                                                <input type="file" name="as_file_iperiksam_form" id="">
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
                                                <input type="file" name="as_file_qas_form" id="">
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
                                                    Ijin Pakai Mesin
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
                                                <input type="file" name="as_file_ipakaim_form" id="">
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
                                                    Training Document
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
                                                <input type="file" name="as_file_training_form" id="">
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
                                                <input type="file" name="as_file_lup_form" id="">
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
                                                <input type="file" name="as_file_camb_form" id="">
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
                                                <input type="file" name="as_file_cl_im_form" id="">
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
                                                <input type="file" name="as_file_chor_form" id="">
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


                    {{-- input ke table log activity --}}
                    <input type="text" hidden name="aktivitas"
                        value="{{ Auth::user()->first_name }} - Memperbarui Standar Formulir untuk Step Project">
                    <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

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


</div>
