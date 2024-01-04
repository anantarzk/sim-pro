@extends('layouts.layout_staff')
@section('title_page', 'Proyek Saya')

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
                        <input type="hidden" name="abc" value=123>
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
                            <input id="rb1" type="radio" value=1 name="nilai_proyek_type"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb1" class="w-full ml-4 text-sm font-medium text-gray-900">
                                < Rp100 Juta</label>
                        </div>
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb2" type="radio" value=2 name="nilai_proyek_type"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb2" class="w-full ml-4 text-sm font-medium text-gray-900">Rp100 Juta -
                                Rp1 Milyar</label>
                        </div>
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb3" type="radio" value=3 name="nilai_proyek_type"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb3" class="w-full ml-4 text-sm font-medium text-gray-900">Rp1 Milyar -
                                Rp10 Milyar</label>
                        </div>
                        <div class="flex items-center p-4 border border-gray-200 rounded">
                            <input id="rb4" type="radio" value=4 name="nilai_proyek_type"
                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                            <label for="rb4" class="w-full ml-4 text-sm font-medium text-gray-900">> Rp10
                                Milyar</label>
                        </div>
                    </div>
                    <div class="justify-between flex space-x-5 mt-2">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="budget_amount_min" id="floating_company"
                                oninput="formatAngka(this)"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                placeholder="">
                            <label for="floating_company"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Min Budget
                            </label>
                        </div>
                        <p class="font-bold mt-2"> - </p>
                        <div class="relative z-0 w-full group">
                            <input type="text" name="budget_amount_max" id="floating_company"
                                oninput="formatAngka(this)"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                placeholder="">
                            <label for="floating_company"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Max Budget
                            </label>
                        </div>
                    </div>
                    <p class="mt-3 mb-2 text-md font-semibold">Parameter waktu</p>
                    <div class="grid grid-cols-1">
                        <select id="underline_select" name="ob_year"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                            <option disabled selected="" value="">*OB Year</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2036">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2032">2033</option>
                            <option value="2032">2034</option>
                            <option value="2032">2035</option>
                        </select>
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

<div class="my-20 mx-10">
    {{-- header --}}
    <div class="">
        <div class="tracking-wide text-gray-600 mb-3 flex justify-between">
            <div>
                <h1 class="text-3xl font-bold font-mono tracking-tight text-gray-900 text-left">
                    Proyek Saya
                    <p class="text-base font-normal text-gray-500 ">
                        Semua proyek yang anda laksanakan.</p>
                </h1>
            </div>
            <div class="">
                <span class="hidden">{{ date_default_timezone_set('Asia/Jakarta') }}</span>
                <p class=" font-light text-2xl">
                    {{ $ldate = date('D, d-M-Y') }}
                </p>
            </div>
        </div>
        {{-- akhir header --}}

        <div>
            <div class="flex justify-between space-x-5 mt-1 mb-10">
                {{-- kiri --}}
                <div class="w-3.5/6 flex space-x-3">
                    {{-- dashboard status --}}
                    <div class="flex items-center bg-emerald-700 text-white px-2 rounded">
                        <div class="font-bold text-3xl p-1">
                            {{ $totalproject }}
                        </div>
                        <div class="pl-3 text-xl">
                            Total Proyek Anda
                        </div>
                    </div>


                </div>

                {{-- kanan --}}
                {{-- tombol cari --}}
                <button type="button"
                    class=" text-white bg-orange-500 hover:bg-orange-600 p-3 rounded-md cursor-pointer"
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
                {{-- tombol pencarian --}}
            </div>


        </div>
        {{-- list proyek aktif --}}
        {{-- div wadah luar --}}
        <div class="mt-4">

            <div class="mx-auto md:mx-auto lg:w-9/12 xl:w-9/12 2xl:w-9/12">
                {{-- <div class="mx-auto "> --}}

                {{-- Memanggil seluruh project --}}
                @foreach ($project as $object)
                    @if ($object->archive_at == '')
                        @if (
                            $object->pic_1_me == Auth::user()->first_name ||
                                $object->pic_2_el == Auth::user()->first_name ||
                                $object->pic_3_mit == Auth::user()->first_name)
                            {{-- kartu proyek --}}

                            <div class="shadow-md p-4 rounded-xl mb-3 border bg-white">
                                <div class=" flex overflow-x-auto">
                                    <div class="w-full">
                                        {{-- row judul proyek --}}
                                        <div class="justify-between flex">
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
                                                            href="/staff-redirect-proyek/{{ $object->id }}/{{ $object->koneksikefr->id_fr_1 }}/{{ $object->koneksikear->id_ar_2 }}/{{ $object->koneksikepr01->id_pr_01_3 }}/{{ $object->koneksikepa02->id_pa_02_3 }}/{{ $object->koneksikepo03->id_po_03_3 }}/{{ $object->koneksikepay04->id_pay_04_3 }}/{{ $object->koneksikemn->id_mn_4 }}/{{ $object->koneksikein->id_in_5 }}/{{ $object->koneksikecl->id_cl_6 }}">
                                                            <p
                                                                class="mb-1 text-3xl font-semibold tracking-normal text-gray-900 capitalize  hover:underline">
                                                                {{ $object->project_name }}
                                                            </p>
                                                        </a>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="">
                                                {{-- IO number --}}
                                                <div class="container text-right">
                                                    <div class=" text-red-500  font-semibold text-lg">IO Number:
                                                    </div>
                                                    <p class="text-3xl font-bold text-gray-700 uppercase">
                                                        {{ $object->io_number }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- akhir row judul --}}

                                        {{-- row pic --}}
                                        <div class="flex justify-between items-center">
                                            <div class="flex mt-3.5 space-x-2">
                                                {{-- Menampilkan PIC project --}}
                                                @if ($object->pic_1_me != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 rounded">
                                                        {{ $object->pic_1_me }}
                                                    </div>
                                                @endif
                                                @if ($object->pic_2_el != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 rounded">
                                                        {{ $object->pic_2_el }}
                                                    </div>
                                                @endif
                                                @if ($object->pic_3_mit != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 rounded">
                                                        {{ $object->pic_3_mit }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        {{-- akhir row pic --}}

                                        {{-- div row status --}}
                                        <div class="mt-3">
                                            <hr class="mb-2 w-full">
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
                                                        data-popover-target="popover-2"
                                                        data-popover-placement="bottom" style="width: 5%">
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
                                                        data-popover-target="popover-3"
                                                        data-popover-placement="bottom" style="width: 05%">
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
                                                        data-popover-target="popover-4"
                                                        data-popover-placement="bottom" style="width: 10%">
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
                                                        data-popover-target="popover-5"
                                                        data-popover-placement="bottom" style="width: 10%">
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
                                                        data-popover-target="popover-6"
                                                        data-popover-placement="bottom" style="width: 15%">
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
                                                        data-popover-target="popover-7"
                                                        data-popover-placement="bottom" style="width: 15%">
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
                                                        data-popover-target="popover-8"
                                                        data-popover-placement="bottom" style="width: 20%">
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
                                                        data-popover-target="popover-9"
                                                        data-popover-placement="bottom" style="width: 20%">
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
                                                        data-popover-target="popover-10"
                                                        data-popover-placement="bottom" style="width: 25%">
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
                                                        data-popover-target="popover-11"
                                                        data-popover-placement="bottom" style="width: 25%">
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
                                                        data-popover-target="popover-12"
                                                        data-popover-placement="bottom" style="width: 30%">
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
                                                        data-popover-target="popover-13"
                                                        data-popover-placement="bottom" style="width: 30%">
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
                                                        data-popover-target="popover-14"
                                                        data-popover-placement="bottom" style="width: 30%">
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
                                                        data-popover-target="popover-15"
                                                        data-popover-placement="bottom" style="width: 60%">
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
                                                        data-popover-target="popover-16"
                                                        data-popover-placement="bottom" style="width: 60%">
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
                                                        data-popover-target="popover-17"
                                                        data-popover-placement="bottom" style="width: 95%">
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
                                                        data-popover-target="popover-18"
                                                        data-popover-placement="bottom" style="width: 95%">
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
                                                        data-popover-target="popover-19"
                                                        data-popover-placement="bottom" style="width: 100%">
                                                        <p>100%</p>

                                                    </div>
                                                </div>
                                            @endif
                                            {{-- akhir bar --}}

                                            {{-- status --}}
                                            <div class="flex justify-between">
                                                <div class="flex">
                                                    <div>
                                                        <div
                                                            class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">
                                                            Keterangan :
                                                        </div>
                                                        {{-- Memamnggil Budget amount dari project --}}
                                                        <div class="items-center pr-4 text-sm font-medium">
                                                            {{ $object->status_project }}
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div
                                                            class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">
                                                            Budget Amount :
                                                        </div>
                                                        {{-- Memamnggil Budget amount dari project --}}
                                                        <div class="items-center pr-4 text-sm font-medium">
                                                            Rp{{ number_format($object->budget_amount, 0, ',', '.') }}
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div
                                                            class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">
                                                            Last
                                                            updated:</div>
                                                        {{-- Memanggil nama serta tanggal diupdate --}}
                                                        <div class="items-center pr-4 text-sm font-medium">
                                                            {{ $object->last_update_name }},
                                                            {{ $object->last_update_date }}
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="flex text-right">
                                                    <div class="flex items-center space-x-2">
                                                        {{-- Menampilkan PIC project --}}
                                                        <p class="font-semibold">Start :</p>
                                                        <div
                                                            class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-sky-400 rounded drop-shadow-md ">
                                                            {{ $object->date_start }}
                                                        </div>

                                                        <p class="font-semibold">End :</p>
                                                        <div
                                                            class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-red-600 rounded drop-shadow-md">
                                                            {{ $object->date_end }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- akhir row --}}
                                    </div>
                                </div>
                            </div>
                            {{-- akhir kartu proyek --}}
                        @endif
                    @endif
                @endforeach
                {{ $project }}
            </div>

        </div>
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
