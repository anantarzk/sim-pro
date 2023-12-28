@extends('layouts.layout_staff')
@section('title_page', 'list form')



{{-- Bungkus margin kiri-kanan atas --}}
<div class="container mx-auto justify-between">
    <div class="my-20 mx-10 flex">
        <div class="w-full relative sm:rounded-lg">
            {{-- isi konten --}}

            <div class="flex justify-between items-center ">

                <div>
                    <h1
                        class=" text-2xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                        Standar Formulir
                        <p class="text-base font-normal text-gray-500 ">
                            Standar Formulir untuk kebutuhan Engineering Design BSIN-K.</p>
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
                {{-- Akhir Tombol Pencarian --}}

            </div>
            <br>

            <div class="rounded-md">
                {{-- Tabel --}}
                <table class="w-full text-sm text-gray-500  border-x border-b">
                    <thead class="text-md text-gray-700 uppercase bg-gray-200 text-center table-fixed sticky top-0">
                        <th class="p-2">No.</th>
                        <th class="text-left">Nama Formulir</th>
                        <th class="">Uploaded By</th>
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
