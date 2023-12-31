@extends('layouts.layout_supervisor')
@section('title_page', 'EDIT FORM')


<div class="container mx-auto justify-between">
    <div class="my-20 mx-11 flex">
        {{-- Card 1 --}}

        <div
            class="mr-6 flex w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">

            <div class="mr-6 w-2/3 p-6 bg-white">

                {{-- Form --}}
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-white">
                    Menambah Standar Formulir
                </h5>

                {{-- erorr notifikasi ketika inputan tidak sesuai --}}
                <br>
                @if ($errors->any())
                    <div
                        class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/supervisor-standar-form/{{ $standar_forms->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="name_form" type="text" name="name_form"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " value="{{ $standar_forms->name_form }}" required="">
                        <label for="name_form"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Nama Form</label>
                    </div>


                    <div class="grid grid-cols-2 gap-6">

                        <div class="group relative z-0 mb-6 w-full">


                            <a href="{{ asset('storage/supervisor/form/excel/' . $standar_forms->file_form_excel) }}"
                                download="">
                                <div
                                    class="inline-flex text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                    <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 17H14V15H0M14 6H10V0H4V6H0L7 13L14 6Z" fill="#393939" />
                                    </svg>

                                    &nbsp; Dokumen Sebelumnya
                                </div>
                            </a>
                        </div>

                        <div class="group relative z-0 mb-6 w-full">
                            <input id="first_name" type="file" name="form_excel"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                placeholder=" ">
                            <label for="first_name"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                File excel</label>
                        </div>

                    </div>




                    <div class="group relative z-0 mb-6 w-full">
                        <input id="uploaded_by" type="text" name="uploaded_by"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " value="{{ $standar_forms->uploaded_by }}" required="" readonly>
                        <label for="uploaded_by"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Edited_by</label>
                    </div>

                    {{-- input ke table log activity --}}
                    <input type="text" hidden name="aktivitas"
                        value="{{ Auth::user()->first_name }} - Telah Edit Standar Formulir  = ">
                    <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">



                    <button type="submit"
                        class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                        UPDATE FORM
                    </button>

                </form>

                {{-- EnD Form --}}
            </div>
            <div class="w-1/3 content-center ">
                {{-- Image --}}
                <img src="{{ asset('image/icon/administrator/register.png') }}" alt="tidak ada gambar">
                <p class="mt-6">Satu akun untuk seluruh fitur pada Engineering Design.
                </p>
                <P class="font-semibold"> PT. BRIDGESTONE TIRE INDONESIA KARAWANG PLANT</P>


                {{-- EnD Form --}}
            </div>

        </div>

        {{-- Card 2 --}}





    </div>


</div>