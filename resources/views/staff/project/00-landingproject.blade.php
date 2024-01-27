@extends('layouts.layout_staff')
@section('title_page', 'Proyek Saya')

<div id="cari" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between px-5 py-2 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Pencarian proyek:
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ms-auto inline-flex justify-center items-center"
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
            <div class="px-4 md:px-5 space-y-4">
                <form class="" action="" method="get">
                    <input type="hidden" name="kondisi" value="cari">
                    <div class="items-center space-y-2 my-3">
                        <p class="text-md font-semibold">Judul proyek atau IO Number</p>
                        <div class="flex space-x-3">
                            <input type="search" id="keyword" name="keyword"
                                class="p-2 py-3 text-sm text-gray-900 bg-gray-50 border rounded border-gray-300  focus:ring-orange-500 focus:border-orange-500 w-full"
                                placeholder="Ketik kata kunci di sini">
                            <a class="flex items-center bg-orange-500 rounded-lg hover:bg-orange-600 px-2 focus:bg-orange-600"
                                data-collapse-toggle="dropdown" type="button" aria-controls="dropdown" href="#">
                                <svg width="35" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <div class="font-regular text-sm">
                                <ul id="dropdown" class="hidden space-y-2">
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
                                            <input id="rb1" type="radio" value=1 name="nilai_proyek_type"
                                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                                            <label for="rb1" class="w-full ml-4 text-sm font-medium text-gray-900">
                                                < Rp100 Juta</label>
                                        </div>
                                        <div class="flex items-center p-4 border border-gray-200 rounded">
                                            <input id="rb2" type="radio" value=2 name="nilai_proyek_type"
                                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                                            <label for="rb2"
                                                class="w-full ml-4 text-sm font-medium text-gray-900">Rp100 Juta -
                                                Rp1 Milyar</label>
                                        </div>
                                        <div class="flex items-center p-4 border border-gray-200 rounded">
                                            <input id="rb3" type="radio" value=3 name="nilai_proyek_type"
                                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                                            <label for="rb3"
                                                class="w-full ml-4 text-sm font-medium text-gray-900">Rp1 Milyar -
                                                Rp10 Milyar</label>
                                        </div>
                                        <div class="flex items-center p-4 border border-gray-200 rounded">
                                            <input id="rb4" type="radio" value=4 name="nilai_proyek_type"
                                                class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500">
                                            <label for="rb4"
                                                class="w-full ml-4 text-sm font-medium text-gray-900">> Rp10
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
                                    <p class="mt-3 text-md font-semibold">Parameter Lainnya</p>
                                    <div class="flex space-x-4">
                                        <select id="underline_select" name="ob_year"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                            <option disabled selected="" value="">OB Year</option>
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
                                        <select id="underline_select" name="section"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                            <option disabled selected="" value="">Section</option>
                                            <option value="Design">Design</option>
                                            <option value="IE">IE</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="PC">PC</option>
                                            <option value="Production">Production</option>
                                            <option value="SHE">SHE</option>
                                            <option value="Tech">Tech</option>
                                            <option value="QA">QA</option>
                                        </select>
                                    </div>
                                </ul>
                            </div>
                        </li>
                    </ul>
            </div>
            <!-- Modal footer -->

            <div class="border-gray-200 rounded-b">
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-b-lg text-lg py-2 w-full items-center flex justify-center space-x-1">
                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <p class="tracking-wide">Cari!</p>
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
                    <p class="text-base font-normal text-gray-800">Semua proyek yang anda laksanakan.</p>
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
                    <div class="flex items-center bg-gray-700 text-white px-2 rounded">
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
        <p class="italic">{{ $filterMessage }}</p>
        <div class="mt-4">

            <div class="mx-auto md:mx-auto lg:w-9/12 xl:w-9/12 2xl:w-9/12">

                @if ($noResult == 1)

                        <p class="text-center py-4 italic text-lg font-semibold">Data tidak ditemukan.</p>

                @else
                    {{-- Memanggil seluruh project --}}
                    @foreach ($project as $object)
                        @if ($object->archive_at == '')
                            @if (
                                $object->pic_1_me == Auth::user()->first_name ||
                                    $object->pic_2_el == Auth::user()->first_name ||
                                    $object->pic_3_mit == Auth::user()->first_name)
                                {{-- kartu proyek --}}
                                @php
                                    $koneksifr = $object->koneksikefr;
                                    $koneksiar = $object->koneksikear;
                                    $koneksipr = $object->koneksikepr01;
                                    $koneksipa = $object->koneksikepa02;
                                    $koneksipo = $object->koneksikepo03;
                                    $koneksipay = $object->koneksikepay04;
                                    $koneksimn = $object->koneksikemn;
                                    $koneksiin = $object->koneksikein;
                                    $koneksicl = $object->koneksikecl;
                                @endphp
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
                                                        <div class=" text-gray-600 font-semibold text-lg">IO Number:
                                                        </div>
                                                        <p class="text-3xl font-bold text-gray-800 uppercase">
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
                                                @php
                                                    $totalStages = 9;
                                                    $completedStages = 0;

                                                    $statuses = [$koneksifr->status_fr, $koneksiar->status_ar, $koneksipr->status_pr_01, $koneksipa->status_pa_02, $koneksipo->status_po_03, $koneksipay->status_pay_04, $koneksimn->status_mn, $koneksiin->status_in, $koneksicl->status_cl];

                                                    foreach ($statuses as $status) {
                                                        if ($status == 'Complete') {
                                                            $completedStages++;
                                                        }
                                                    }

                                                    $purchasingPercentage = 70;
                                                    $otherStagesPercentage = 30;

                                                    $overallProgress = ceil(($completedStages / $totalStages) * ($purchasingPercentage + $otherStagesPercentage));

                                                    // Menetapkan warna berdasarkan persentase
                                                    $barColor = 'bg-red-500';

                                                    if ($overallProgress > 15) {
                                                        $barColor = 'bg-orange-500';
                                                    }
                                                    if ($overallProgress > 30) {
                                                        $barColor = 'bg-yellow-500';
                                                    }
                                                    if ($overallProgress > 50) {
                                                        $barColor = 'bg-blue-500';
                                                    }
                                                    if ($overallProgress > 70) {
                                                        $barColor = 'bg-green-500';
                                                    }
                                                    if ($overallProgress > 85) {
                                                        $barColor = 'bg-green-700';
                                                    }
                                                @endphp
                                                <div class="w-full bg-gray-200 rounded-full my-2">
                                                    <div class="text-sm font-medium text-white text-center leading-none rounded-lg hover:cursor-default relative transition-all duration-500
                        {{ $barColor }}"
                                                        style="width: {{ $overallProgress }}%;">
                                                        <p class="text-sm">{{ $overallProgress }}%</p>
                                                    </div>
                                                </div>
                                                {{-- akhir bar --}}

                                                {{-- status --}}
                                                <div class="flex justify-between">
                                                    <div class="flex">
                                                        <div>
                                                            <div
                                                                class="items-center pt-1 pr-4 text-xs font-medium  text-gray-700">
                                                                Keterangan:
                                                            </div>
                                                            {{-- Memamnggil Budget amount dari project --}}
                                                            <div class="items-center pr-4 text-sm font-medium">
                                                                {{ $object->status_project }}
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div
                                                                class="items-center pt-1 pr-4 text-xs font-medium  text-gray-700">
                                                                Jumlah Budget:
                                                            </div>
                                                            {{-- Memamnggil Budget amount dari project --}}
                                                            <div class="items-center pr-4 text-sm font-medium">
                                                                Rp{{ number_format($object->budget_amount, 0, ',', '.') }}
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div
                                                                class="items-center pt-1 pr-4 text-xs font-medium  text-gray-700">
                                                                Terakhir diperbaharui:</div>
                                                            {{-- Memanggil nama serta tanggal diupdate --}}
                                                            <div class="items-center pr-4 text-sm font-medium">
                                                                {{ $object->last_update_name }},
                                                                {{ $object->last_update_date }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- deadline tenggat waktu popover tooltip --}}
                                                    <div class="flex text-right">
                                                        @php
                                                            $deadline = hitungMundur($object->date_end);
                                                        @endphp
                                                        @if ($object->progress == 'Closed')
                                                            <div
                                                                class=" space-x-1 font-medium items-center py-1 px-3 text-center text-md rounded-xl drop-shadow-md flex justify-center w-fit bg-green-700 text-white mt-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                    viewBox="0 0 24 24" fill="none">
                                                                    <g id="Interface / Check_All">
                                                                        <path id="Vector"
                                                                            d="M8 12.4854L12.2426 16.728L20.727 8.24268M3 12.4854L7.24264 16.728M15.7279 8.24268L12.5 11.5001"
                                                                            stroke="#ffffff" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                                <p>
                                                                    Proyek telah SELESAI
                                                                </p>
                                                            </div>
                                                        @else
                                                            @if ($deadline > 150)
                                                                <div
                                                                    class="items-center py-1 px-2 text-center text-md rounded drop-shadow-md flex justify-center w-fit bg-green-500 text-white mt-1">
                                                                    Deadline dalam {{ $deadline }} hari
                                                                </div>
                                                            @elseif ($deadline > 100)
                                                                <div
                                                                    class="items-center py-1 px-2 text-center text-md rounded drop-shadow-md flex justify-center w-fit bg-blue-500 text-white mt-1">
                                                                    Deadline dalam {{ $deadline }} hari
                                                                </div>
                                                            @elseif ($deadline > 70)
                                                                <div
                                                                    class="items-center py-1 px-2 text-center text-md rounded drop-shadow-md flex justify-center w-fit bg-yellow-400 text-white mt-1">
                                                                    Deadline dalam {{ $deadline }} hari
                                                                </div>
                                                            @elseif ($deadline > 30)
                                                                <div
                                                                    class="items-center py-1 px-2 text-center text-md rounded drop-shadow-md flex justify-center w-fit bg-orange-400 text-white mt-1">
                                                                    Deadline dalam {{ $deadline }} hari
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="items-center py-1 px-2 text-center text-md rounded drop-shadow-md flex justify-center w-fit bg-red-600 text-white mt-1">
                                                                    Deadline dalam {{ $deadline }} hari
                                                                </div>
                                                            @endif
                                                        @endif

                                                        {{-- <div id="tooltip-bottom" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip">
                                    <div class="grid grid-cols-2 space-x-2">
                                        <div>
                                            <p class="text-left">Tanggal mulai:</p>
                                            <div class="text-left">
                                                {{ $object->date_start }}
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-left">Tanggal selesai:</p>
                                            <p class="text-left">
                                                {{ $object->date_end }}</p>
                                        </div>
                                    </div>
                                </div> --}}
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
                @endif
                {{ $project }}
            </div>

        </div>
    </div>
</div>

@php
    function hitungMundur($dateEnd)
    {
        $sekarang = time();
        $deadlineTimestamp = strtotime($dateEnd);
        $selisihWaktu = $deadlineTimestamp - $sekarang;

        $hari = floor($selisihWaktu / (60 * 60 * 24));

        $warnaLatarBelakang = '';

        if ($selisihWaktu <= 0) {
            // Project has passed the deadline
            return 'Proyek sudah melewati deadline.';
        } else {
            // Return the remaining days
            return $hari;
        }
    }
@endphp
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
