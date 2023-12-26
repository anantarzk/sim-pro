{{-- Memanggil file untuk layout --}}
@extends('layouts.layout_supervisor')
@section('title_page', 'Seluruh Project')

<div id="cari" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Pencarian proyek berdasarkan:
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    onclick="simulateEscape()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form class="" action="" method="get">
                    <div>
                        <p class="text-md font-semibold">PIC proyek</p>
                        <div class="grid grid-cols-3 gap-4">
                            {{-- pic 1 --}}
                            <div class="relative z-0 w-full group">
                                <select id="pic1_select" name="pic_1_me"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer"><!-- Add your classes here -->
                                    <option disabled selected value="">Mechanical</option>
                                    <option disabled value="">Pilih PIC : </option>
                                    @foreach ($users as $pic)
                                        @if ($pic->section == 'Mechanical')
                                            <option value="{{ $pic->first_name }}">
                                                {{ $pic->first_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                    <option value="">None</option>
                                </select>
                            </div>

                            {{-- pic 2 --}}
                            <div class="relative z-0 w-full group">
                                <select id="pic2_select" name="pic_2_el"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer"><!-- Add your classes here -->
                                    <option disabled selected value="">Electrical</option>
                                    <option disabled value="">Pilih PIC : </option>
                                    @foreach ($users as $pic)
                                        @if ($pic->section == 'Electrical')
                                            <option value="{{ $pic->first_name }}">
                                                {{ $pic->first_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                    <option value="">None</option>
                                </select>
                            </div>

                            {{-- pic 3 --}}
                            <div class="relative z-0 w-full group">
                                <select id="pic3_select" name="pic_3_mit"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer"><!-- Add your classes here -->
                                    <option disabled selected value="">Manufacturing IT</option>
                                    <option disabled value="">Pilih PIC : </option>
                                    @foreach ($users as $pic)
                                        @if ($pic->section == 'Manufacturing IT')
                                            <option value="{{ $pic->first_name }}">
                                                {{ $pic->first_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                    <option value="">None</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-2 text-md font-semibold">Nilai Proyek </p>
                    <div class="grid grid-cols-4">
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb1" type="radio" value="" name="rb"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb1"
                                class="w-full ml-1 text-sm font-medium text-gray-900">>Rp100.000.000</label>
                        </div>
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb2" type="radio" value="" name="rb"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb2" class="w-full ml-1 text-sm font-medium text-gray-900">Rp100.000.000 -
                                Rp1 Milyar</label>
                        </div>
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb3" type="radio" value="" name="rb"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb3" class="w-full ml-1 text-sm font-medium text-gray-900">Rp1 Milyar -
                                Rp10 Milyar</label>
                        </div>
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb4" type="radio" value="" name="rb"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb4" class="w-full ml-1 text-sm font-medium text-gray-900">> Rp10
                                Milyar</label>
                        </div>
                    </div>
                    <div class="justify-between flex space-x-5 mt-2">
                        <div class="relative z-0 w-full group">
                            <input type="number" name="budget_amount" id="floating_company" oninput="formatAngka(this)"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                placeholder="">
                            <label for="floating_company"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Min Budget
                            </label>
                        </div>
                        <p class="font-bold mt-2"> - </p>
                        <div class="relative z-0 w-full group">
                            <input type="number" name="budget_amount" id="floating_company" oninput="formatAngka(this)"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                placeholder="">
                            <label for="floating_company"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Max Budget
                            </label>
                        </div>
                    </div>
                    <p class="mt-3 mb-2 text-md font-semibold">Parameter waktu</p>
                    <div class="grid grid-cols-2">

                    </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200">
                <input type="search" id="keyword" name="keyword"
                    class="p-2 py-3 text-sm text-gray-900 bg-gray-50 border rounded border-gray-300  focus:ring-orange-500 focus:border-orange-500 w-full"
                    placeholder="Judul Proyek; IO Number; ">
            </div>
            <div class="p-5 border-t border-gray-200 rounded-b">
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-3 py-2 w-full text-center flex">
                        <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <p class="tracking-widest">Cari!</p>
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="my-20 mx-10">

        <div class="flex justify-between mt-1 mb-5">
            {{-- kiri --}}
            <div class="flex space-x-3">
                {{-- dashboard status --}}
                <div class="flex items-center bg-emerald-700 text-white px-4">
                    <div class="font-bold text-4xl p-2">
                        {{ $totalproject }}
                    </div>
                    <div class="pl-3 text-xl">
                        Seluruh Proyek Aktif
                    </div>
                </div>
            </div>

            {{-- kanan --}}
            <button type="button" class=" text-white bg-orange-500 hover:bg-orange-600 p-3 rounded-md cursor-pointer"
                data-modal-target="cari" data-modal-show="cari" data-modal-toggle="cari">
                <div class="flex space-x-2 text-center">
                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <p>Tekan untuk melakukan pencarian</p>
                </div>
            </button>
        </div>
        {{-- Notifikasi --}}
        {{-- Notifikasi sukses --}}
        {{-- Mengambil sesion status --}}
        @if (Session::has('statusedited'))
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
        @elseif (Session::has('statushapus'))
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
        {{-- end notifikasi --}}


        {{-- Tabel view all projects --}}
        <div class="rounded-lg overflow-auto">
            <table class="w-full">
                <thead
                    class="text-md text-white uppercase bg-green-600 text-center table-fixed sticky top-0 border border-gray-500">
                    <th class="p-2 w-[5%]">No.</th>
                    <th class="w-[25%]">Nama Project</th>
                    <th class="w-[10%]">IO Number</th>
                    <th class="w-[15%]">PIC</th>
                    <th class="w-[10%]">Budget</th>
                    <th class="w-[20%]">Progress</th>
                    <th class="w-[5%]">Aksi</th>
                </thead>

                <tbody>
                    {{-- Ambil data dari controler --}}

                    @foreach ($project as $object)
                        @if ($object->archive_at == '')
                            <tr class="bg-white border border-gray-300 hover:bg-gray-100 text-center">

                                {{-- Loop i++ --}}
                                <td class="p-2 font-medium text-white bg-teal-600 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>

                                {{-- nama proyek --}}
                                <td class="p-2 text-left">
                                    <div class="max-w-3xl">
                                        <div class="container">
                                            {{-- Mengenerate project yang dipilih berdasarkan id --}}

                                            @if (
                                                $object->id == $object->koneksikefr->id_fr_1 &&
                                                    $object->id == $object->koneksikear->id_ar_2 &&
                                                    $object->id == $object->koneksikepr01->id_pr_01_3 &&
                                                    $object->id == $object->koneksikepa02->id_pa_02_3 &&
                                                    $object->id == $object->koneksikepo03->id_po_03_3 &&
                                                    $object->id == $object->koneksikepay04->id_pay_04_3 &&
                                                    $object->id == $object->koneksikemn->id_mn_4 &&
                                                    $object->id == $object->koneksikein->id_in_5 &&
                                                    $object->id == $object->koneksikecl->id_cl_6)
                                                <a
                                                    href="/redirect-proyek/{{ $object->id }}/{{ $object->koneksikefr->id_fr_1 }}/{{ $object->koneksikear->id_ar_2 }}/{{ $object->koneksikepr01->id_pr_01_3 }}/{{ $object->koneksikepa02->id_pa_02_3 }}/{{ $object->koneksikepo03->id_po_03_3 }}/{{ $object->koneksikepay04->id_pay_04_3 }}/{{ $object->koneksikemn->id_mn_4 }}/{{ $object->koneksikein->id_in_5 }}/{{ $object->koneksikecl->id_cl_6 }}">
                                                    <p
                                                        class="mb-1 text-base font-normal tracking-normal text-gray-900 hover:underline capitalize">
                                                        {{ $object->project_name }}
                                                    </p>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                {{-- io number --}}
                                <td class="p-2 text-left uppercase">
                                    {{ $object->io_number }}
                                </td>

                                {{-- pic --}}
                                <td class="p-2 flex text-left space-x-1 items-center">
                                    {{-- Menampilkan PIC project --}}
                                    @if ($object->pic_1_me != '')
                                        <div class="bg-orange-500 px-2 py-1 text-white rounded">
                                            {{ $object->pic_1_me }}
                                        </div>
                                    @endif
                                    @if ($object->pic_2_el != '')
                                        <div class="bg-orange-500 px-2 py-1 text-white rounded">
                                            &nbsp;{{ $object->pic_2_el }}
                                        </div>
                                    @endif
                                    @if ($object->pic_3_mit != '')
                                        <div class="bg-orange-500 px-2 py-1 text-white rounded">
                                            &nbsp;{{ $object->pic_3_mit }}
                                        </div>
                                    @endif
                                </td>

                                {{-- progress --}}
                                <td class="p-2 text-left">
                                    Rp{{ number_format($object->budget_amount, 0, ',', '.') }}
                                </td>
                                <td>
                                    {{-- awal bar --}}
                                    {{-- progress bar --}}
                                    @if ($object->progress == 'Not Started')
                                        {{-- popover tooltip --}}
                                        <div data-popover id="popover-0" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}
                                        <div class="w-full bg-gray-200 rounded-full my-2 text-xs font-medium text-black text-center"
                                            data-popover-target="popover-0" data-popover-placement="bottom">
                                            <p class="">0%</p>
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                style="width: 0%">
                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Fund Request')
                                        {{-- popover tooltip --}}
                                        <div data-popover id="popover-0" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}
                                        <div class="w-full bg-gray-200 rounded-full my-2 text-xs font-medium text-black text-center"
                                            data-popover-target="popover-0" data-popover-placement="bottom">
                                            <p class="">0%</p>
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                style="width: 0%">
                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Fund Request')
                                        <div data-popover id="popover-2" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-2" data-popover-placement="bottom"
                                                style="width: 15%">
                                                <p>05%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Arrangement')
                                        <div data-popover id="popover-3" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-3" data-popover-placement="bottom"
                                                style="width: 15%">
                                                <p>05%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Arrangement')
                                        <div data-popover id="popover-4" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-4" data-popover-placement="bottom"
                                                style="width: 18%">
                                                <p>10%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Purchasing - PR')
                                        <div data-popover id="popover-5" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-5" data-popover-placement="bottom"
                                                style="width: 18%">
                                                <p>10%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Purchasing - PR')
                                        <div data-popover id="popover-6" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-6" data-popover-placement="bottom"
                                                style="width: 21%">
                                                <p>15%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Purchasing - PA')
                                        <div data-popover id="popover-7" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-7" data-popover-placement="bottom"
                                                style="width: 21%">
                                                <p>15%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Purchasing - PA')
                                        <div data-popover id="popover-8" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-8" data-popover-placement="bottom"
                                                style="width: 23%">
                                                <p>20%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Purchasing - PO')
                                        <div data-popover id="popover-9" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-9" data-popover-placement="bottom"
                                                style="width: 23%">
                                                <p>20%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Purchasing - PO')
                                        <div data-popover id="popover-10" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-10" data-popover-placement="bottom"
                                                style="width: 25%">
                                                <p>25%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Purchasing - PAY')
                                        <div data-popover id="popover-11" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-11" data-popover-placement="bottom"
                                                style="width: 25%">
                                                <p>25%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Purchasing - PAY')
                                        <div data-popover id="popover-12" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-12" data-popover-placement="bottom"
                                                style="width: 30%">
                                                <p>30%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Purchasing')
                                        <div data-popover id="popover-13" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-13" data-popover-placement="bottom"
                                                style="width: 30%">
                                                <p>30%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Manufacturing')
                                        <div data-popover id="popover-14" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-14" data-popover-placement="bottom"
                                                style="width: 30%">
                                                <p>30%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Manufacturing')
                                        <div data-popover id="popover-15" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-15" data-popover-placement="bottom"
                                                style="width: 60%">
                                                <p>60%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Installation')
                                        <div data-popover id="popover-16" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-16" data-popover-placement="bottom"
                                                style="width: 60%">
                                                <p>60%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Installation')
                                        <div data-popover id="popover-17" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-17" data-popover-placement="bottom"
                                                style="width: 95%">
                                                <p>95%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Waiting Approval Closed')
                                        <div data-popover id="popover-18" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-18" data-popover-placement="bottom"
                                                style="width: 95%">
                                                <p>95%</p>

                                            </div>
                                        </div>
                                    @elseif ($object->progress == 'Closed')
                                        <div data-popover id="popover-19" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-30 font-normal text-gray-500 transition-opacity duration-300 bg-white border border-gray-300 rounded-lg shadow-md opacity-0">
                                            {{-- Menampilkan curent porggres --}}
                                            <div class="px-3 py-1">
                                                <p class="text-md font-semibold">Curent Progress :</p>
                                                <p class="text-md ">
                                                    {{ $object->progress }}
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        {{-- popover tooltip --}}

                                        <div class="w-full bg-gray-200 rounded-full my-2">
                                            <div class="bg-orange-500 hover:bg-orange-600 text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                                data-popover-target="popover-19" data-popover-placement="bottom"
                                                style="width: 100%">
                                                <p>100%</p>

                                            </div>
                                        </div>
                                    @endif

                                    {{-- akhir bar --}}
                                    {{-- akhir bar --}}
                                </td>
                                {{-- aksi --}}
                                <td class="flex justify-center items-center">
                                    <a href="/edit-project/{{ $object->id }}"
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
                                    <a href="/hapus-project/{{ $object->id }}"
                                        class="inline-flex items-center"><button
                                            class="hover:bg-red-600 text-red-600 font-semibold rounded-md hover:text-white w-full p-2 focus:bg-red-400 hover:fill-white fill-red-600">
                                            <div class="flex justify-center items-center text-center space-x-1">

                                                <svg width="18.53" height="22" viewBox="0 0 18 21"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 13.0333V13.5333C17.2761 13.5333 17.5 13.3095 17.5 13.0333H17ZM1 13.0333H0.5C0.5 13.3095 0.723858 13.5333 1 13.5333V13.0333ZM10.8462 10C10.57 10 10.3462 10.2239 10.3462 10.5C10.3462 10.7761 10.57 11 10.8462 11V10ZM12.6923 11C12.9685 11 13.1923 10.7761 13.1923 10.5C13.1923 10.2239 12.9685 10 12.6923 10V11ZM14.1077 10.0567L13.7491 9.70823L14.1077 10.0567ZM14.9692 10.0567L15.3278 9.70823L14.9692 10.0567ZM14.0385 7.96667C14.0385 8.24281 14.2623 8.46667 14.5385 8.46667C14.8146 8.46667 15.0385 8.24281 15.0385 7.96667H14.0385ZM14.5385 4.8H15.0385C15.0385 4.66988 14.9877 4.54489 14.8971 4.45156L14.5385 4.8ZM10.8462 1L11.2048 0.651564C11.1106 0.554671 10.9813 0.5 10.8462 0.5V1ZM10.8462 4.8H10.3462C10.3462 5.07614 10.57 5.3 10.8462 5.3V4.8ZM3.46154 1V0.5C3.1854 0.5 2.96154 0.723858 2.96154 1H3.46154ZM2.96154 7.96667C2.96154 8.24281 3.1854 8.46667 3.46154 8.46667C3.73768 8.46667 3.96154 8.24281 3.96154 7.96667H2.96154ZM9.5 14.9333C9.5 14.6572 9.27614 14.4333 9 14.4333C8.72386 14.4333 8.5 14.6572 8.5 14.9333H9.5ZM8.5 18.7333C8.5 19.0095 8.72386 19.2333 9 19.2333C9.27614 19.2333 9.5 19.0095 9.5 18.7333H8.5ZM7.65385 13.0333C7.65385 12.7572 7.42999 12.5333 7.15385 12.5333C6.8777 12.5333 6.65385 12.7572 6.65385 13.0333H7.65385ZM6.65385 16.2C6.65385 16.4761 6.8777 16.7 7.15385 16.7C7.42999 16.7 7.65385 16.4761 7.65385 16.2H6.65385ZM11.3462 17.4667C11.3462 17.1905 11.1223 16.9667 10.8462 16.9667C10.57 16.9667 10.3462 17.1905 10.3462 17.4667H11.3462ZM10.3462 20C10.3462 20.2761 10.57 20.5 10.8462 20.5C11.1223 20.5 11.3462 20.2761 11.3462 20H10.3462ZM13.1923 13.0333C13.1923 12.7572 12.9685 12.5333 12.6923 12.5333C12.4162 12.5333 12.1923 12.7572 12.1923 13.0333H13.1923ZM12.1923 15.5667C12.1923 15.8428 12.4162 16.0667 12.6923 16.0667C12.9685 16.0667 13.1923 15.8428 13.1923 15.5667H12.1923ZM14.0385 17.4667C14.0385 17.7428 14.2623 17.9667 14.5385 17.9667C14.8146 17.9667 15.0385 17.7428 15.0385 17.4667H14.0385ZM15.0385 13.0333C15.0385 12.7572 14.8146 12.5333 14.5385 12.5333C14.2623 12.5333 14.0385 12.7572 14.0385 13.0333H15.0385ZM2.96154 17.4667C2.96154 17.7428 3.1854 17.9667 3.46154 17.9667C3.73768 17.9667 3.96154 17.7428 3.96154 17.4667H2.96154ZM3.96154 13.0333C3.96154 12.7572 3.73768 12.5333 3.46154 12.5333C3.1854 12.5333 2.96154 12.7572 2.96154 13.0333H3.96154ZM5.80769 16.2C5.80769 15.9239 5.58383 15.7 5.30769 15.7C5.03155 15.7 4.80769 15.9239 4.80769 16.2H5.80769ZM4.80769 20C4.80769 20.2761 5.03155 20.5 5.30769 20.5C5.58383 20.5 5.80769 20.2761 5.80769 20H4.80769ZM17 12.5333H1V13.5333H17V12.5333ZM1.5 13.0333V9.23333H0.5V13.0333H1.5ZM1.5 9.23333C1.5 8.79916 1.84344 8.46667 2.23077 8.46667V7.46667C1.26425 7.46667 0.5 8.27417 0.5 9.23333H1.5ZM2.23077 8.46667H15.7692V7.46667H2.23077V8.46667ZM15.7692 8.46667C16.1566 8.46667 16.5 8.79916 16.5 9.23333H17.5C17.5 8.27417 16.7357 7.46667 15.7692 7.46667V8.46667ZM16.5 9.23333V13.0333H17.5V9.23333H16.5ZM10.8462 11H12.6923V10H10.8462V11ZM14.5385 10.6333C14.521 10.6333 14.512 10.6318 14.509 10.6312C14.5065 10.6307 14.5068 10.6306 14.508 10.6311C14.5112 10.6326 14.4989 10.6285 14.4663 10.5949L13.7491 11.2918C13.8395 11.3848 13.9504 11.4757 14.092 11.5405C14.2363 11.6065 14.3859 11.6333 14.5385 11.6333V10.6333ZM14.4663 10.5949C14.434 10.5617 14.4285 10.5477 14.4283 10.5472C14.4279 10.5463 14.4269 10.544 14.4259 10.5385C14.4247 10.5325 14.4231 10.5204 14.4231 10.5H13.4231C13.4231 10.8356 13.5467 11.0835 13.7491 11.2918L14.4663 10.5949ZM14.4231 10.5C14.4231 10.4796 14.4247 10.4675 14.4259 10.4615C14.4269 10.456 14.4279 10.4537 14.4283 10.4528C14.4285 10.4523 14.434 10.4383 14.4663 10.4051L13.7491 9.70823C13.5467 9.91648 13.4231 10.1644 13.4231 10.5H14.4231ZM14.4663 10.4051C14.4998 10.3706 14.5262 10.3667 14.5385 10.3667C14.5507 10.3667 14.5771 10.3706 14.6106 10.4051L15.3278 9.70823C14.8853 9.25281 14.1916 9.25281 13.7491 9.70823L14.4663 10.4051ZM14.6106 10.4051C14.6429 10.4383 14.6484 10.4523 14.6487 10.4528C14.6491 10.4537 14.65 10.456 14.6511 10.4615C14.6522 10.4675 14.6538 10.4796 14.6538 10.5H15.6538C15.6538 10.1644 15.5302 9.91648 15.3278 9.70823L14.6106 10.4051ZM14.6538 10.5C14.6538 10.5204 14.6522 10.5325 14.6511 10.5385C14.65 10.544 14.6491 10.5463 14.6487 10.5472C14.6484 10.5477 14.6429 10.5617 14.6106 10.5949L15.3278 11.2918C15.5302 11.0835 15.6538 10.8356 15.6538 10.5H14.6538ZM14.6106 10.5949C14.578 10.6285 14.5658 10.6326 14.5689 10.6311C14.5701 10.6306 14.5704 10.6307 14.5679 10.6312C14.5649 10.6318 14.5559 10.6333 14.5385 10.6333V11.6333C14.691 11.6333 14.8407 11.6065 14.9849 11.5405C15.1265 11.4757 15.2374 11.3848 15.3278 11.2918L14.6106 10.5949ZM15.0385 7.96667V4.8H14.0385V7.96667H15.0385ZM10.3462 1V4.8H11.3462V1H10.3462ZM10.8462 5.3H14.5385V4.3H10.8462V5.3ZM14.8971 4.45156L11.2048 0.651564L10.4876 1.34844L14.1799 5.14844L14.8971 4.45156ZM10.8462 0.5H3.46154V1.5H10.8462V0.5ZM2.96154 1V7.96667H3.96154V1H2.96154ZM8.5 14.9333V18.7333H9.5V14.9333H8.5ZM6.65385 13.0333V16.2H7.65385V13.0333H6.65385ZM10.3462 17.4667V20H11.3462V17.4667H10.3462ZM12.1923 13.0333V15.5667H13.1923V13.0333H12.1923ZM15.0385 17.4667V13.0333H14.0385V17.4667H15.0385ZM3.96154 17.4667V13.0333H2.96154V17.4667H3.96154ZM4.80769 16.2V20H5.80769V16.2H4.80769Z" />
                                                </svg>

                                                <p>Delete</p>
                                            </div>

                                        </button>
                                    </a>
                                    <a href="/arsip-project/{{ $object->id }}/{{ $object->koneksikefr->id_fr_1 }}/{{ $object->koneksikear->id_ar_2 }}/{{ $object->koneksikepr01->id_pr_01_3 }}/{{ $object->koneksikepa02->id_pa_02_3 }}/{{ $object->koneksikepo03->id_po_03_3 }}/{{ $object->koneksikepay04->id_pay_04_3 }}/{{ $object->koneksikemn->id_mn_4 }}/{{ $object->koneksikein->id_in_5 }}/{{ $object->koneksikecl->id_cl_6 }}"
                                        class="inline-flex items-center"><button
                                            class="hover:text-white font-semibold rounded-md hover:bg-orange-500 text-orange-500 w-full  p-2 focus:bg-orange-500 hover:fill-white fill-orange-500">
                                            <div class="flex justify-center items-center text-center space-x-1">
                                                <svg width="21" height="21" viewBox="0 0 21 21"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18 0H0V6H18V0ZM16 4H2V2H16V4ZM14 7C12.69 7 11.46 7.37 10.41 8H6.5C6.22 8 6 8.22 6 8.5V10H8.26C7.47 11.13 7 12.5 7 14C7 14.7 7.11 15.37 7.29 16H3V7H1V18H8.26C9.53 19.81 11.62 21 14 21C17.87 21 21 17.87 21 14C21 10.13 17.87 7 14 7ZM14 19C11.24 19 9 16.76 9 14C9 11.24 11.24 9 14 9C16.76 9 19 11.24 19 14C19 16.76 16.76 19 14 19ZM14.5 14.25L17.36 15.94L16.61 17.16L13 15V10H14.5V14.25Z" />
                                                </svg>

                                                <p>Arsip</p>
                                            </div>
                                        </button></a>

                                </td>

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            {{-- Akhir  Tabel --}}
        </div>

        {{ $project->withQueryString()->links() }}
    </div>
</div>
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

    // Your JavaScript code to add search functionality
    document.addEventListener('DOMContentLoaded', function() {
        function filterOptions(selectId, filterValue) {
            const select = document.getElementById(selectId);
            const options = select.getElementsByTagName('option');

            for (let i = 0; i < options.length; i++) {
                const option = options[i];
                if (option.value.toLowerCase().includes(filterValue.toLowerCase())) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            }
        }

        // Add event listeners for each dropdown
        document.getElementById('pic1_select').addEventListener('input', function() {
            filterOptions('pic1_select', this.value);
        });

        document.getElementById('pic2_select').addEventListener('input', function() {
            filterOptions('pic2_select', this.value);
        });

        document.getElementById('pic3_select').addEventListener('input', function() {
            filterOptions('pic3_select', this.value);
        });
    });

    function formatAngka(input) {
            // Menghilangkan karakter selain angka
            let angka = input.value.replace(/[^\d]/g, '');

            // Menambahkan tanda titik setiap ribuan
            angka = angka.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            // Update nilai input
            input.value = angka;
        }
</script>
</div>
