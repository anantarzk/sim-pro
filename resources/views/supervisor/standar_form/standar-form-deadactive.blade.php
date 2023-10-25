@extends('layouts.layout_supervisor')
@section('title_page', 'Trash Formulir')




{{-- Bungkus margin kiri-kanan atas --}}
<div class="container mx-auto justify-between">
    <div class="my-20 mx-10 flex">
        <div class="w-full relative sm:rounded-lg">
            {{-- isi konten --}}

            <div class="flex justify-between items-center ">

                <div>
                    <h1 class=" text-2xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                        Trash Standar Formulir Umum
                        <p class="text-base font-normal text-gray-500 ">
                            Standar Formulir Untuk Engineering Design BSIN-K.</p>
                    </h1>
                </div>

                {{-- Tombol Pencarian --}}
                <div class="w-2.5/ mt-3">

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
                {{-- Akhir Tombol Pencarian --}}

            </div>
            <br>

            {{-- Notifikasi --}}

            {{-- Notifikasi sukses --}}
            {{-- Mengambil sesion status --}}
            @if (Session::has('status'))
                <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
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

                {{-- Notifikasi delete --}}
                {{-- Mengambil sesion statusdeleted --}}
            @elseif (Session::has('statusdeleted'))
                <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                        {{-- Tampilkan isi teks messagedeleted --}}
                        {{ Session::get('messagedeleted') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif

            {{-- Akhir Notifikasi --}}

            {{-- Tombol Tambah Data --}}

            <a href="/supervisor-standar-form">
                <button type="button"
                    class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Kembali
                </button>

            </a>

            {{-- Akhir Tombol Data  terhapus --}}

            <br>
            <br>

            <div class="rounded-md">
                {{-- Tabel --}}
                <table class="w-full text-sm text-gray-500  border-x border-b">
                    <thead class="text-md text-gray-700 uppercase bg-gray-200 text-center table-fixed sticky top-0">
                        <th class="p-2">No.</th>
                        <th class="text-left">Nama Formulir</th>
                        <th class="">Uploaded By</th>
                        <th class="">Deleted date</th>
                        <th class="">Action</th>
                    </thead>

                    <tbody>
                        {{-- Ambil data dari controler --}}
                        @foreach ($standar_forms as $d_form)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200">

                                {{-- Loop i++ --}}
                                <td class="p-2 font-medium text-gray-900 whitespace-nowrap text-center">
                                    {{ $loop->iteration }}
                                </td>

                                {{-- Panggil data --}}
                                <td class="p-2">
                                    {{ $d_form->name_form }}
                                </td>


                                <td class="p-2 text-center">
                                    {{ $d_form->uploaded_by }}
                                </td>
                                <td class="p-2 text-center">
                                    {{ $d_form->deleted_at }}
                                </td>


                                <td class="text-center justify-between p-2">
                                    <a href="{{ asset('storage/supervisor/form/excel/' . $d_form->file_form_excel) }}"
                                        download="" class="inline-flex items-center"><button
                                            class="hover:text-white font-semibold rounded-md hover:bg-orange-500 text-orange-500 w-full  p-2 focus:bg-orange-200 hover:fill-white fill-orange-500">
                                            <div class="flex justify-center items-center text-center space-x-1">
                                                <svg width="14" height="17" viewBox="0 0 14 17"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 17H14V15H0M14 6H10V0H4V6H0L7 13L14 6Z" />
                                                </svg>
                                                <p>Unduh</p>
                                            </div>
                                        </button>
                                    </a>


                                    <a href="/supervisor-standar-form-dead-active/{{ $d_form->id }}/restore"
                                        class="inline-flex items-center"><button
                                            class="hover:text-white font-semibold rounded-md hover:bg-blue-600 text-blue-600 w-full  p-2 focus:bg-blue-400 hover:fill-white fill-blue-600">
                                            <div class="flex justify-center items-center text-center space-x-1">
                                                <svg width="16" height="20" viewBox="0 0 16 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 0H2C0.9 0 0 0.9 0 2V18C0 19.1 0.9 20 2 20H14C15.1 20 16 19.1 16 18V6L10 0ZM14 18H2V2H9L14 7V18ZM13 11.24C13 13.86 10.87 16 8.24 16C6.29 16 4.61 14.82 3.88 13.14H5.5C6.11 14 7.11 14.57 8.24 14.57C10.08 14.57 11.57 13.07 11.57 11.24C11.57 9.41 10.08 7.9 8.24 7.9C6.95 7.9 5.86 8.65 5.29 9.71L6.81 11.24H3V7.43L4.24 8.67C5.09 7.35 6.55 6.5 8.24 6.5C10.87 6.47 13 8.61 13 11.24Z" />
                                                </svg>
                                                <p>Restore</p>
                                            </div>
                                        </button>
                                    </a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Akhir  Tabel --}}
            </div>

            <br>

            {{ $standar_forms->withQueryString()->links() }}



        </div>
        {{-- Akhir isi konten --}}


    </div>
    {{-- Pagination --}}

</div>
