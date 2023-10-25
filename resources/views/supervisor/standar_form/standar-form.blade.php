@extends('layouts.layout_supervisor')
@section('title_page', 'list form')



{{-- Bungkus margin kiri-kanan atas --}}
<div class="container mx-auto justify-between">
    <div class="my-20 mx-10 flex">
        <div class="w-full relative sm:rounded-lg">
            {{-- isi konten --}}

            <div class="flex justify-between items-center ">

                <div>
                    <h1 class=" text-2xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                        Standar Formulir Umum
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

            <a href="/supervisor-tambah-data-form">
                <button type="button"
                    class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm p-1.5 text-center mb-2 mt-2 inline-flex items-center">
                    <svg class="my-1 mr-2" width="20" height="20" viewBox="0 0 80 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M40 0C17.908 0 0 17.908 0 40C0 62.092 17.908 80 40 80C62.092 80 80 62.092 80 40C80 17.908 62.092 0 40 0ZM60 44H44V60H36V44H20V36H36V20H44V36H60V44Z"
                            fill="white" />
                    </svg>
                    Tambah data
                </button>
            </a>
            {{-- Akhir Tombol Tambah Data --}}



            {{-- Tombol Data  terhapus --}}
            <a href="/supervisor-standar-form-dead-active">
                <button type="button"
                    class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm p-1.5 text-center m-2 inline-flex items-center">
                    <svg width="20" height="20" viewBox="0 0 20 22" fill="none" class="my-1 mr-2"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 4C3.57143 6.66666 16.4286 6.66662 19 4M9 17L12 13.5M9 17L6.20491 14.6708C6.07446 14.562 5.90405 14.5137 5.73595 14.5377L2.5 15M9 17L12 20M12 13.5L17 16M12 13.5L18 10.5M12 13.5L9.4546 11.3788C9.2025 11.1688 8.8284 11.2001 8.6149 11.4493L6 14.5M1.03919 3.2939C1.01449 3.10866 1.0791 2.92338 1.23133 2.81499C1.9272 2.31953 4.3142 1 10 1C15.6858 1 18.0728 2.31952 18.7687 2.81499C18.9209 2.92338 18.9855 3.10866 18.9608 3.2939L17.2616 16.0378C17.0968 17.2744 16.3644 18.3632 15.2813 18.9821L14.9614 19.1649C11.8871 20.9217 8.1129 20.9217 5.03861 19.1649L4.71873 18.9821C3.6356 18.3632 2.90325 17.2744 2.73838 16.0378L1.03919 3.2939Z"
                            stroke="white" stroke-width="1.5" />
                    </svg>
                    Trash &nbsp;
                </button>
            </a>
            {{-- Akhir Tombol Data  terhapus --}}

            <br>
            <br>

            <div class="rounded-md">
                {{-- Tabel --}}
                <table class="w-full text-sm text-gray-500  border-x border-b ">
                    <thead class="text-md text-gray-700 uppercase bg-gray-200 text-center table-fixed sticky top-0 ">
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
                                    <a href="/supervisor-edit-data-form/{{ $d_form->id }}"
                                        class="inline-flex items-center"><button
                                            class="hover:text-white font-semibold rounded-md hover:bg-blue-600 text-blue-600 w-full  p-2 focus:bg-blue-400 hover:fill-white fill-blue-600">
                                            <div class="flex justify-center items-center text-center space-x-1">
                                                <svg width="13" height="13" viewBox="0 0 73 73"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.101562 57.01V72.01H15.1016L59.3416 27.77L44.3416 12.77L0.101562 57.01ZM70.9416 16.17C72.5016 14.61 72.5016 12.09 70.9416 10.53L61.5816 1.17C60.0216 -0.39 57.5016 -0.39 55.9416 1.17L48.6216 8.49L63.6216 23.49L70.9416 16.17V16.17Z" />
                                                </svg>
                                                <p>Edit</p>
                                            </div>
                                        </button>
                                    </a>

                                    <a href="/supervisor-delete-data-form/ {{ $d_form->id }}"
                                        class="inline-flex items-center"><button
                                            class="hover:bg-red-600 text-red-600 font-semibold rounded-md hover:text-white w-full p-2 focus:bg-red-400 hover:fill-white fill-red-600">
                                            <div class="flex justify-center items-center text-center space-x-1">

                                                <svg width="16" height="16" viewBox="0 0 18 21"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 13.0333V13.5333C17.2761 13.5333 17.5 13.3095 17.5 13.0333H17ZM1 13.0333H0.5C0.5 13.3095 0.723858 13.5333 1 13.5333V13.0333ZM10.8462 10C10.57 10 10.3462 10.2239 10.3462 10.5C10.3462 10.7761 10.57 11 10.8462 11V10ZM12.6923 11C12.9685 11 13.1923 10.7761 13.1923 10.5C13.1923 10.2239 12.9685 10 12.6923 10V11ZM14.1077 10.0567L13.7491 9.70823L14.1077 10.0567ZM14.9692 10.0567L15.3278 9.70823L14.9692 10.0567ZM14.0385 7.96667C14.0385 8.24281 14.2623 8.46667 14.5385 8.46667C14.8146 8.46667 15.0385 8.24281 15.0385 7.96667H14.0385ZM14.5385 4.8H15.0385C15.0385 4.66988 14.9877 4.54489 14.8971 4.45156L14.5385 4.8ZM10.8462 1L11.2048 0.651564C11.1106 0.554671 10.9813 0.5 10.8462 0.5V1ZM10.8462 4.8H10.3462C10.3462 5.07614 10.57 5.3 10.8462 5.3V4.8ZM3.46154 1V0.5C3.1854 0.5 2.96154 0.723858 2.96154 1H3.46154ZM2.96154 7.96667C2.96154 8.24281 3.1854 8.46667 3.46154 8.46667C3.73768 8.46667 3.96154 8.24281 3.96154 7.96667H2.96154ZM9.5 14.9333C9.5 14.6572 9.27614 14.4333 9 14.4333C8.72386 14.4333 8.5 14.6572 8.5 14.9333H9.5ZM8.5 18.7333C8.5 19.0095 8.72386 19.2333 9 19.2333C9.27614 19.2333 9.5 19.0095 9.5 18.7333H8.5ZM7.65385 13.0333C7.65385 12.7572 7.42999 12.5333 7.15385 12.5333C6.8777 12.5333 6.65385 12.7572 6.65385 13.0333H7.65385ZM6.65385 16.2C6.65385 16.4761 6.8777 16.7 7.15385 16.7C7.42999 16.7 7.65385 16.4761 7.65385 16.2H6.65385ZM11.3462 17.4667C11.3462 17.1905 11.1223 16.9667 10.8462 16.9667C10.57 16.9667 10.3462 17.1905 10.3462 17.4667H11.3462ZM10.3462 20C10.3462 20.2761 10.57 20.5 10.8462 20.5C11.1223 20.5 11.3462 20.2761 11.3462 20H10.3462ZM13.1923 13.0333C13.1923 12.7572 12.9685 12.5333 12.6923 12.5333C12.4162 12.5333 12.1923 12.7572 12.1923 13.0333H13.1923ZM12.1923 15.5667C12.1923 15.8428 12.4162 16.0667 12.6923 16.0667C12.9685 16.0667 13.1923 15.8428 13.1923 15.5667H12.1923ZM14.0385 17.4667C14.0385 17.7428 14.2623 17.9667 14.5385 17.9667C14.8146 17.9667 15.0385 17.7428 15.0385 17.4667H14.0385ZM15.0385 13.0333C15.0385 12.7572 14.8146 12.5333 14.5385 12.5333C14.2623 12.5333 14.0385 12.7572 14.0385 13.0333H15.0385ZM2.96154 17.4667C2.96154 17.7428 3.1854 17.9667 3.46154 17.9667C3.73768 17.9667 3.96154 17.7428 3.96154 17.4667H2.96154ZM3.96154 13.0333C3.96154 12.7572 3.73768 12.5333 3.46154 12.5333C3.1854 12.5333 2.96154 12.7572 2.96154 13.0333H3.96154ZM5.80769 16.2C5.80769 15.9239 5.58383 15.7 5.30769 15.7C5.03155 15.7 4.80769 15.9239 4.80769 16.2H5.80769ZM4.80769 20C4.80769 20.2761 5.03155 20.5 5.30769 20.5C5.58383 20.5 5.80769 20.2761 5.80769 20H4.80769ZM17 12.5333H1V13.5333H17V12.5333ZM1.5 13.0333V9.23333H0.5V13.0333H1.5ZM1.5 9.23333C1.5 8.79916 1.84344 8.46667 2.23077 8.46667V7.46667C1.26425 7.46667 0.5 8.27417 0.5 9.23333H1.5ZM2.23077 8.46667H15.7692V7.46667H2.23077V8.46667ZM15.7692 8.46667C16.1566 8.46667 16.5 8.79916 16.5 9.23333H17.5C17.5 8.27417 16.7357 7.46667 15.7692 7.46667V8.46667ZM16.5 9.23333V13.0333H17.5V9.23333H16.5ZM10.8462 11H12.6923V10H10.8462V11ZM14.5385 10.6333C14.521 10.6333 14.512 10.6318 14.509 10.6312C14.5065 10.6307 14.5068 10.6306 14.508 10.6311C14.5112 10.6326 14.4989 10.6285 14.4663 10.5949L13.7491 11.2918C13.8395 11.3848 13.9504 11.4757 14.092 11.5405C14.2363 11.6065 14.3859 11.6333 14.5385 11.6333V10.6333ZM14.4663 10.5949C14.434 10.5617 14.4285 10.5477 14.4283 10.5472C14.4279 10.5463 14.4269 10.544 14.4259 10.5385C14.4247 10.5325 14.4231 10.5204 14.4231 10.5H13.4231C13.4231 10.8356 13.5467 11.0835 13.7491 11.2918L14.4663 10.5949ZM14.4231 10.5C14.4231 10.4796 14.4247 10.4675 14.4259 10.4615C14.4269 10.456 14.4279 10.4537 14.4283 10.4528C14.4285 10.4523 14.434 10.4383 14.4663 10.4051L13.7491 9.70823C13.5467 9.91648 13.4231 10.1644 13.4231 10.5H14.4231ZM14.4663 10.4051C14.4998 10.3706 14.5262 10.3667 14.5385 10.3667C14.5507 10.3667 14.5771 10.3706 14.6106 10.4051L15.3278 9.70823C14.8853 9.25281 14.1916 9.25281 13.7491 9.70823L14.4663 10.4051ZM14.6106 10.4051C14.6429 10.4383 14.6484 10.4523 14.6487 10.4528C14.6491 10.4537 14.65 10.456 14.6511 10.4615C14.6522 10.4675 14.6538 10.4796 14.6538 10.5H15.6538C15.6538 10.1644 15.5302 9.91648 15.3278 9.70823L14.6106 10.4051ZM14.6538 10.5C14.6538 10.5204 14.6522 10.5325 14.6511 10.5385C14.65 10.544 14.6491 10.5463 14.6487 10.5472C14.6484 10.5477 14.6429 10.5617 14.6106 10.5949L15.3278 11.2918C15.5302 11.0835 15.6538 10.8356 15.6538 10.5H14.6538ZM14.6106 10.5949C14.578 10.6285 14.5658 10.6326 14.5689 10.6311C14.5701 10.6306 14.5704 10.6307 14.5679 10.6312C14.5649 10.6318 14.5559 10.6333 14.5385 10.6333V11.6333C14.691 11.6333 14.8407 11.6065 14.9849 11.5405C15.1265 11.4757 15.2374 11.3848 15.3278 11.2918L14.6106 10.5949ZM15.0385 7.96667V4.8H14.0385V7.96667H15.0385ZM10.3462 1V4.8H11.3462V1H10.3462ZM10.8462 5.3H14.5385V4.3H10.8462V5.3ZM14.8971 4.45156L11.2048 0.651564L10.4876 1.34844L14.1799 5.14844L14.8971 4.45156ZM10.8462 0.5H3.46154V1.5H10.8462V0.5ZM2.96154 1V7.96667H3.96154V1H2.96154ZM8.5 14.9333V18.7333H9.5V14.9333H8.5ZM6.65385 13.0333V16.2H7.65385V13.0333H6.65385ZM10.3462 17.4667V20H11.3462V17.4667H10.3462ZM12.1923 13.0333V15.5667H13.1923V13.0333H12.1923ZM15.0385 17.4667V13.0333H14.0385V17.4667H15.0385ZM3.96154 17.4667V13.0333H2.96154V17.4667H3.96154ZM4.80769 16.2V20H5.80769V16.2H4.80769Z" />
                                                </svg>

                                                <p>Delete</p>
                                            </div>

                                        </button></a>
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
