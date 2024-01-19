@extends('layouts.layout_staff')
@section('title_page', 'Installation - Project')


<a href="#submit-1">
    <button class="fixed right-0 bottom-0 m-2 z-10 bg-orange-400 rounded-lg p-2 opacity-70 hover:opacity-90">
        <svg width="10" height="auto" viewBox="0 0 39 42" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="fill-black">
            <path
                d="M1.75887 24.1504L1.75888 24.1504L17.6684 40.0595C18.1543 40.5454 18.8133 40.8183 19.5004 40.8183C20.1875 40.8183 20.8466 40.5453 21.3324 40.0594C21.3325 40.0594 21.3325 40.0593 21.3325 40.0593L37.2411 24.1503C38.253 23.1384 38.253 21.498 37.2411 20.4862C36.2295 19.4746 34.589 19.4742 33.5771 20.4863C33.5771 20.4863 33.5771 20.4864 33.577 20.4864L19.5004 34.5633L5.42295 20.4862C4.41129 19.4745 2.77075 19.4743 1.75887 20.4863C0.747043 21.4981 0.747043 23.1385 1.75887 24.1504ZM33.577 1.75887L33.577 1.75888L19.5003 15.8359L5.42302 1.75893C5.42299 1.75891 5.42297 1.75889 5.42295 1.75886C4.41117 0.746989 2.77065 0.747099 1.75887 1.75887C0.747043 2.7707 0.747043 4.41113 1.75887 5.42296L1.75888 5.42296L17.6684 21.3322C18.1543 21.8181 18.8133 22.091 19.5004 22.091C20.1875 22.091 20.8466 21.818 21.3324 21.3321C21.3325 21.332 21.3325 21.332 21.3325 21.332L37.2411 5.42295C38.2529 4.41115 38.253 2.77077 37.2412 1.75893C36.2294 0.746989 34.5888 0.747076 33.577 1.75887Z"
                stroke-width="2" />
        </svg>
    </button>
</a>

<a href="#submit-2">
    <button class="fixed right-0 bottom-9 m-2 z-10 bg-orange-400 rounded-lg p-2 opacity-70 hover:opacity-90">
        <svg width="10" height="auto" viewBox="0 0 39 42" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="fill-black rotate-180">
            <path
                d="M1.75887 24.1504L1.75888 24.1504L17.6684 40.0595C18.1543 40.5454 18.8133 40.8183 19.5004 40.8183C20.1875 40.8183 20.8466 40.5453 21.3324 40.0594C21.3325 40.0594 21.3325 40.0593 21.3325 40.0593L37.2411 24.1503C38.253 23.1384 38.253 21.498 37.2411 20.4862C36.2295 19.4746 34.589 19.4742 33.5771 20.4863C33.5771 20.4863 33.5771 20.4864 33.577 20.4864L19.5004 34.5633L5.42295 20.4862C4.41129 19.4745 2.77075 19.4743 1.75887 20.4863C0.747043 21.4981 0.747043 23.1385 1.75887 24.1504ZM33.577 1.75887L33.577 1.75888L19.5003 15.8359L5.42302 1.75893C5.42299 1.75891 5.42297 1.75889 5.42295 1.75886C4.41117 0.746989 2.77065 0.747099 1.75887 1.75887C0.747043 2.7707 0.747043 4.41113 1.75887 5.42296L1.75888 5.42296L17.6684 21.3322C18.1543 21.8181 18.8133 22.091 19.5004 22.091C20.1875 22.091 20.8466 21.818 21.3324 21.3321C21.3325 21.332 21.3325 21.332 21.3325 21.332L37.2411 5.42295C38.2529 4.41115 38.253 2.77077 37.2412 1.75893C36.2294 0.746989 34.5888 0.747076 33.577 1.75887Z"
                stroke-width="2" />
        </svg>
    </button>
</a>

<div class="mx-10 my-20">



    {{-- header --}}
    <div class="tracking-wide mb-2">
        <p class=" font-mono font-bold text-3xl mb-3">Detail proyek - IN:</p>
    </div>
    {{-- akhir header --}}

    {{-- mulai card --}}
    <div class="bg-white p-4 rounded-md shadow-md">
        <div class=" flex overflow-x-auto">
            <div class="w-full">
                {{-- row judul proyek --}}
                <div class="justify-between flex">
                    <div class="max-w-3xl">
                        <div class="container">
                            <p class="mb-1 text-3xl font-semibold tracking-normal text-gray-900 capitalize">
                                {{ $viewdataproject->project_name }}
                        </div>
                    </div>
                    <div class="">
                        {{-- IO number --}}
                        <div class="container text-right">
                            <div class="font-semibold text-lg text-gray-600">IO Number:</div>
                            <p class="text-3xl font-bold text-gray-700">
                                {{ $viewdataproject->io_number }}
                            </p>
                        </div>
                    </div>
                </div>
                {{-- akhir row judul --}}

                {{-- row pic --}}
                <div class="flex justify-between items-center">
                    <div class="flex mt-3.5 space-x-2">
                        {{-- Cek PIC --}}
                        @if ($viewdataproject->pic_1_me != '')
                            <div
                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 rounded">
                                {{ $viewdataproject->pic_1_me }}
                            </div>
                        @endif
                        @if ($viewdataproject->pic_2_el != '')
                            <div
                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 rounded">
                                {{ $viewdataproject->pic_2_el }}
                            </div>
                        @endif
                        @if ($viewdataproject->pic_3_mit != '')
                            <div
                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 rounded">
                                {{ $viewdataproject->pic_3_mit }}
                            </div>
                        @endif

                        {{-- Akhir cek PIC --}}
                    </div>
                    <div>
                        <div class="flex justify-between max-w-xl text-right space-x-10 auto-cols-auto">
                            <div>
                                <p class="text-md font-medium text-gray-600">Section:</p>
                                <p class="text-lg font-semibold">
                                    {{ $viewdataproject->section }}
                                </p>
                            </div>
                            <div>
                                <p class="text-md font-medium text-gray-600">Cost Dept:</p>
                                <p class="text-lg font-semibold">
                                    {{ $viewdataproject->cost_dept }}
                                </p>
                            </div>
                            @if ($viewdataproject->remarks != '')
                                <div>
                                    <p class="text-md font-medium text-gray-600">Remarks:</p>
                                    <p class="text-lg font-semibold">
                                        {{ $viewdataproject->remarks }}
                                    </p>
                                </div>
                            @endif
                            <div>
                                <p class="text-md font-medium text-gray-600">OB Year:</p>
                                <p class="text-lg font-semibold">
                                    {{ $viewdataproject->ob_year }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- akhir row pic --}}



                {{-- div row status --}}
                <div class="mt-3">
                    <hr class="mb-2 w-full border">
                    {{-- progress bar --}}
                    @if ($viewdataproject->progress == 'Not Started')
                        <div class="w-full bg-gray-200 rounded-full my-2 text-sm font-medium text-black text-center"
                            data-popover-target="popover-0" data-popover-placement="bottom">
                            <p class="">0%</p>
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                style="width: 0%">
                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Fund Request')
                        <div class="w-full bg-gray-200 rounded-full my-2 text-sm font-medium text-black text-center"
                            data-popover-target="popover-0" data-popover-placement="bottom">
                            <p class="">0%</p>
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                style="width: 0%">
                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Fund Request')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-2" data-popover-placement="bottom" style="width: 5%">
                                <p>05%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Arrangement')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-3" data-popover-placement="bottom" style="width: 05%">
                                <p>05%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Arrangement')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-4" data-popover-placement="bottom" style="width: 10%">
                                <p>10%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PR')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-5" data-popover-placement="bottom" style="width: 10%">
                                <p>10%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Purchasing - PR')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-6" data-popover-placement="bottom" style="width: 15%">
                                <p>15%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PA')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-7" data-popover-placement="bottom" style="width: 15%">
                                <p>15%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Purchasing - PA')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-8" data-popover-placement="bottom" style="width: 20%">
                                <p>20%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PO')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-9" data-popover-placement="bottom" style="width: 20%">
                                <p>20%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Purchasing - PO')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-10" data-popover-placement="bottom" style="width: 25%">
                                <p>25%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PAY')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-11" data-popover-placement="bottom" style="width: 25%">
                                <p>25%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Purchasing - PAY')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-12" data-popover-placement="bottom" style="width: 30%">
                                <p>30%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Purchasing')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-13" data-popover-placement="bottom" style="width: 30%">
                                <p>30%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Manufacturing')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-14" data-popover-placement="bottom" style="width: 30%">
                                <p>30%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Manufacturing')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-15" data-popover-placement="bottom" style="width: 60%">
                                <p>60%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Installation')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-16" data-popover-placement="bottom" style="width: 60%">
                                <p>60%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Installation')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-17" data-popover-placement="bottom" style="width: 95%">
                                <p>95%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Waiting Approval Closed')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-18" data-popover-placement="bottom" style="width: 95%">
                                <p>95%</p>

                            </div>
                        </div>
                    @elseif ($viewdataproject->progress == 'Closed')
                        <div class="w-full bg-gray-200 rounded-full my-2">
                            <div class="bg-orange-500  text-sm font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                                data-popover-target="popover-19" data-popover-placement="bottom" style="width: 100%">
                                <p>100%</p>

                            </div>
                        </div>
                    @endif

                    {{-- akhir bar --}}

                    {{-- status --}}
                    <div class="flex justify-between">
                        <div class="flex">
                            <div>
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Keterangan
                                    FR:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    {{ $viewdataproject->status_project }}
                                </div>
                            </div>
                            <div>
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Budget
                                    Amount :
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    Rp{{ number_format($viewdataproject->budget_amount, 0, ',', '.') }}
                                </div>
                            </div>

                            <div>
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Last
                                    updated:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    {{ $viewdataproject->last_update_name }},
                                    {{ $viewdataproject->last_update_date }}

                                </div>
                            </div>
                            <div>
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Tahap
                                    Project:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    {{ $viewdataproject->progress }}

                                </div>
                            </div>

                        </div>
                        {{-- button edit --}}
                        <div class="flex text-right">


                            <div class="flex items-center space-x-2">
                                {{-- Menampilkan PIC project --}}
                                <p class="font-semibold text-gray-600">Start :</p>
                                <div
                                    class="items-center py-1 px-2 text-lg font-medium text-center text-gray-900 rounded drop-shadow-md ">
                                    {{ $viewdataproject->date_start }}
                                </div>

                                <p class="font-semibold text-gray-600">End :</p>
                                <div
                                    class="items-center py-1 px-2 text-lg font-medium text-center text-gray-900 rounded drop-shadow-md">
                                    {{ $viewdataproject->date_end }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- akhir row --}}
            </div>
        </div>

        {{-- financial status --}}
        <div class="mt-3 w-full ">
            <hr class="w-full border">
            <div class="overflow-x-auto rounded">
                <div class="grid grid-cols-1 my-1">
                    <div class="text-lg text-center font-medium tracking-wider">
                        Status Finansial Proyek
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-1 bg-gray-500 text-gray-900 text-left">
                    <div class="bg-gray-300 px-1 text-lg ">
                        Total budget
                    </div>
                    <div class="bg-gray-300 px-1 ">
                        PR
                    </div>
                    <div class="bg-gray-300 px-1 ">
                        PA
                    </div>
                    <div class="bg-gray-300 px-1 ">
                        PO
                    </div>
                    <div class="bg-gray-300 px-1 ">
                        PAYMENT
                    </div>
                    <div class="bg-gray-800 text-gray-200 px-1 ">
                        BALANCE
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-1 text-gray-900 text-left text-md bg-gray-500">
                    <div class="bg-gray-300 px-1 font-bold">
                        Rp{{ number_format($viewdataproject->budget_amount, 0, ',', '.') }}
                    </div>
                    <div class="bg-gray-300 px-1 font-bold">
                        Rp{{ number_format($sum_pr, 0, ',', '.') }}
                    </div>
                    <div class="bg-gray-300 px-1 font-bold">
                        Rp{{ number_format($sum_pa, 0, ',', '.') }}
                    </div>
                    <div class="bg-gray-300 px-1 font-bold">
                        Rp{{ number_format($sum_po, 0, ',', '.') }}
                    </div>
                    <div class="bg-gray-300 px-1 font-bold">
                        Rp{{ number_format($sum_pay, 0, ',', '.') }}
                    </div>
                    <div class="bg-gray-800 px-1 text-gray-200 font-bold">
                        {{-- initial kondisi, balance = budget amount sebelum ada oprasi perhitungan --}}
                        Rp{{ number_format($balance, 0, ',', '.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- awal stepper --}}
    <div class="bg-white mt-3 h-40 pt-3 rounded-lg shadow-md">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center">
                <div class="flex items-center relative">
                    @if ($koneksifr->status_fr == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">FR</p>
                        </div>
                    @elseif($koneksifr->status_fr == 'Revisi Fund Request')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">FR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">FR</p>
                        </div>
                    @endif

                    <div class="absolute top-0 -ml-10 text-center mt-14 w-36 text-sm font-medium">
                        <a
                            href="/staff-01-fundrequest-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">
                                Fund Request<span class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase text-xs">{{ $koneksifr->status_fr }}</p>
                        <p>{{ $koneksifr->status_fr_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksiar->status_ar == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">AR</p>
                        </div>
                    @elseif($koneksiar->status_ar == 'Revisi Arrangement')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">AR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">AR</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/staff-02-arrangement-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Arrangement
                            </p>
                        </a>
                        <p class="uppercase text-xs">{{ $koneksiar->status_ar }}</p>
                        <p>{{ $koneksiar->status_ar_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksipr->status_purchasing == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @elseif(
                        $koneksipr->status_pr_01 == 'Revisi Purchasing - PR' ||
                            $koneksipa->status_pa_02 == 'Revisi Purchasing - PA' ||
                            $koneksipo->status_po_03 == 'Revisi Purchasing - PO' ||
                            $koneksipay->status_pay_04 == 'Revisi Purchasing - PAY')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">PR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/staff-03-01-PR-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Purchasing<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase text-xs">{{ $koneksipr->status_purchasing }}</p>
                        <p>{{ $koneksipr->status_purchasing_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksimn->status_mn == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">MN</p>
                        </div>
                    @elseif($koneksimn->status_mn == 'Revisi Manufacturing')
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">MN</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">MN</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/staff-04-manufacturing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Manufacturing
                            </p>
                        </a>
                        <p class="uppercase text-xs">{{ $koneksimn->status_mn }}</p>
                        <p>{{ $koneksimn->status_mn_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksiin->status_in == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">IN</p>
                        </div>
                    @elseif($koneksiin->status_in == 'Revisi Installation')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-yellow-300 border-orange-500 border-4">
                            <p class="font-bold text-md text-black">IN</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">IN</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/staff-05-installation-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Installation<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase text-xs">{{ $koneksiin->status_in }}</p>
                        <p>{{ $koneksiin->status_in_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksicl->status_cl == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 pl-0.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">HOV</p>
                        </div>
                    @elseif($koneksicl->status_cl == 'Revisi Handover')
                        <div class="rounded-full h-12 w-12 py-2 px-0.5 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">HOV</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 pl-0.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">HOV</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/staff-06-closed-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Handover<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase text-xs">{{ $koneksicl->status_cl }}</p>
                        <p>{{ $koneksicl->status_cl_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir stepper --}}


    @if (
        $koneksifr->status_fr != 'Complete' ||
        $koneksiar->status_ar != 'Complete' ||
            $koneksipr->status_pr_01 != 'Complete' ||
            $koneksipa->status_pa_02 != 'Complete' ||
            $koneksipo->status_po_03 != 'Complete' ||
            $koneksimn->status_mn != 'Complete')
        <p class="bg-gray-600 uppercase p-3 mt-2 text-center font-bold text-white">Tahapan sebelumnya belum
            disetujui</p>
    @else
        {{-- Awal progress file --}}

        <div class="bg-white mt-3 w-full rounded-md shadow-md p-3">
            <div class="flex justify-between items-center mb-3">
                {{-- status approval row --}}
                <div class="flex">
                    <p>Diperiksa oleh: &nbsp;
                    <div
                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 mr-2 rounded">
                        {{ $koneksiin->approval_by }}
                    </div>
                    </p>
                    &nbsp;&nbsp;
                    <p>Pada: &nbsp;
                    <p class="font-semibold">
                        {{ $koneksiin->approval_date }}
                    </p>
                    </p>
                </div>


                @if ($koneksiin->status_in == 'Complete')
                    {{-- approval ijo --}}
                    <div class="bg-green-600 flex  py-1 px-2   items-center rounded">
                        <div class="">
                            <svg width="18" height="auto" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M12 0C5.376 0 0 5.376 0 12C0 18.624 5.376 24 12 24C18.624 24 24 18.624 24 12C24 5.376 18.624 0 12 0ZM9.6 18L3.6 12L5.292 10.308L9.6 14.604L18.708 5.496L20.4 7.2L9.6 18Z"
                                    fill="white" />

                            </svg>
                        </div>
                        <div class="text-white font-medium ml-3">
                            <p>
                                {{ $koneksiin->status_in }}
                            </p>
                        </div>
                    </div>
                @elseif ($koneksiin->status_in == '-')
                    {{-- approval abu2 --}}
                    <div class="bg-gray-400 flex  py-1 px-2   items-center rounded">
                        <div class="">
                            <svg width="18" height="auto" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6667 18.6667C10.6667 19.4 11.2667 20 12 20C12.7333 20 13.3333 19.4 13.3333 18.6667C13.3333 17.9333 12.7333 17.3333 12 17.3333C11.2667 17.3333 10.6667 17.9333 10.6667 18.6667ZM10.6667 0V5.33333H13.3333V2.77333C17.8533 3.42667 21.3333 7.29333 21.3333 12C21.3333 17.16 17.16 21.3333 12 21.3333C6.84 21.3333 2.66667 17.16 2.66667 12C2.66667 9.76 3.45333 7.70667 4.77333 6.10667L12 13.3333L13.88 11.4533L4.81333 2.38667V2.41333C1.89333 4.6 0 8.06667 0 12C0 18.6267 5.36 24 12 24C18.6267 24 24 18.6267 24 12C24 5.37333 18.6267 0 12 0H10.6667ZM20 12C20 11.2667 19.4 10.6667 18.6667 10.6667C17.9333 10.6667 17.3333 11.2667 17.3333 12C17.3333 12.7333 17.9333 13.3333 18.6667 13.3333C19.4 13.3333 20 12.7333 20 12ZM4 12C4 12.7333 4.6 13.3333 5.33333 13.3333C6.06667 13.3333 6.66667 12.7333 6.66667 12C6.66667 11.2667 6.06667 10.6667 5.33333 10.6667C4.6 10.6667 4 11.2667 4 12Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="text-white font-medium ml-3">
                            <p>
                                {{ $koneksiin->status_in }}
                            </p>
                        </div>
                    </div>
                @elseif ($koneksiin->status_in == 'Waiting Approval')
                    {{-- approval abu2 --}}
                    <div class="bg-gray-400 flex  py-1 px-2   items-center rounded">
                        <div class="">
                            <svg width="18" height="auto" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6667 18.6667C10.6667 19.4 11.2667 20 12 20C12.7333 20 13.3333 19.4 13.3333 18.6667C13.3333 17.9333 12.7333 17.3333 12 17.3333C11.2667 17.3333 10.6667 17.9333 10.6667 18.6667ZM10.6667 0V5.33333H13.3333V2.77333C17.8533 3.42667 21.3333 7.29333 21.3333 12C21.3333 17.16 17.16 21.3333 12 21.3333C6.84 21.3333 2.66667 17.16 2.66667 12C2.66667 9.76 3.45333 7.70667 4.77333 6.10667L12 13.3333L13.88 11.4533L4.81333 2.38667V2.41333C1.89333 4.6 0 8.06667 0 12C0 18.6267 5.36 24 12 24C18.6267 24 24 18.6267 24 12C24 5.37333 18.6267 0 12 0H10.6667ZM20 12C20 11.2667 19.4 10.6667 18.6667 10.6667C17.9333 10.6667 17.3333 11.2667 17.3333 12C17.3333 12.7333 17.9333 13.3333 18.6667 13.3333C19.4 13.3333 20 12.7333 20 12ZM4 12C4 12.7333 4.6 13.3333 5.33333 13.3333C6.06667 13.3333 6.66667 12.7333 6.66667 12C6.66667 11.2667 6.06667 10.6667 5.33333 10.6667C4.6 10.6667 4 11.2667 4 12Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="text-white font-medium ml-3">
                            <p>
                                {{ $koneksiin->status_in }}
                            </p>
                        </div>
                    </div>
                @elseif ($koneksiin->status_in == 'Revisi Installation')
                    {{-- menunggu approval abu abu --}}
                    <div class="bg-yellow-300 flex py-1 px-2 items-center rounded border-red-500 border-4">
                        <div class="">
                            <svg width="20" height="auto" viewBox="0 0 80 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40 0C17.92 0 0 17.92 0 40C0 62.08 17.92 80 40 80C62.08 80 80 62.08 80 40C80 17.92 62.08 0 40 0ZM44 60H36V52H44V60ZM44 44H36V20H44V44Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="text-black font-medium ml-3">
                            <p>
                                {{ $koneksiin->status_in }}
                            </p>
                        </div>
                    </div>
                @endif

            </div>
            {{-- approval abu2 slesai --}}
            <hr class="mb-2 mt-2 w-full border">
            {{-- selesai status approval row --}}

            {{-- Yang diganti pertahapnya --}}
            <form action="" method="post" enctype="multipart/form-data" id="uploadForm">
                @csrf
                @method('PUT')
                {{-- atas form --}}
                <div class="w-full bg-white rounded-t-lg  mt-3">
                    {{-- Izin Power On --}}
                    {{-- awal standar formulir --}}
                    <div class="flex justify-between">
                        <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> Izin power
                            on
                            @foreach ($standar_project as $spt)
                                @if ($spt->file_ipo_form != '')
                                    <div class="flex justify-end mr-1 mt-4">
                                        <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ipo_form) }}"
                                            download="">
                                            <div
                                                class="w-fit items-center space-x-1 flex fill-blue-600 hover:fill-blue-800">
                                                <svg width="15" height="" viewBox="0 0 52 52"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z" />

                                                    <path
                                                        d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z" />
                                                </svg>
                                                <p
                                                    class="text-right hover:underline font-semibold text-md text-blue-600 hover:text-blue-800 ">
                                                    Klik untuk mengunduh formulir kerja</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            {{-- tombol form --}}
                    </div>
                    {{-- akhir standar formulir --}}

                    <div class="overflow-x-auto rounded-md mb-5 border">
                        <table class="w-full ">
                            <thead class="bg-gray-300 text-gray-700 sticky top-0">
                                <th class="py-2 w-[5%] font-medium">No.</th>
                                <th class="w-[57%] font-medium">Nama File</th>
                                <th class="w-[10%] font-medium">Uploaded by</th>
                                <th class="w-[13%] font-medium">Last Update</th>
                                <th class="w-[15%] font-medium">Aksi</th>
                            </thead>
                            <tbody class="text-left border">
                                {{-- 1 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">1.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_ipo_1 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ipo_1) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ipo_1) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ipo_1 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ipo_in_1 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ipo_in_1 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ipo_1 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ipo_1 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ipo_1" id="fileInput_in_ipo_1"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ipo_1')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ipo_1 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal11" data-modal-show="modal11"
                                                    data-modal-toggle="modal11">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ipo_in_1"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ipo_1"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 2 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">2.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_ipo_2 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ipo_2) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ipo_2) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ipo_2 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ipo_in_2 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ipo_in_2 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ipo_2 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ipo_2 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ipo_2" id="fileInput_in_ipo_2"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ipo_2')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ipo_2 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal12" data-modal-show="modal12"
                                                    data-modal-toggle="modal12">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ipo_in_2"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ipo_2"
                                        value="{{ date('Y-m-d') }}">
                                </tr>

                                {{-- 3 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">3.</td>
                                    <td class="flex justify-start py-4 items-center">
                                        @if ($koneksiin->in_ipo_3 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ipo_3) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ipo_3) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ipo_3 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ipo_in_3 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ipo_in_3 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ipo_3 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ipo_3 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ipo_3" id="fileInput_in_ipo_3"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ipo_3')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ipo_3 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal13" data-modal-show="modal13"
                                                    data-modal-toggle="modal13">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ipo_in_3"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ipo_3"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Akhir --}}

                    {{-- Equipment Check Report --}}
                    {{-- awal standar formulir --}}
                    <div class="flex justify-between">
                        <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> Equipment
                            Check Report - Mechanical & Electrical
                            @foreach ($standar_project as $spt)
                                @if ($spt->file_ecr_form != '')
                                    <div class="flex justify-end mr-1 mt-4">
                                        <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_ecr_form) }}"
                                            download="">
                                            <div
                                                class="w-fit items-center space-x-1 flex fill-blue-600 hover:fill-blue-800">
                                                <svg width="15" height="" viewBox="0 0 52 52"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z" />

                                                    <path
                                                        d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z" />
                                                </svg>
                                                <p
                                                    class="text-right hover:underline font-semibold text-md text-blue-600 hover:text-blue-800 ">
                                                    Klik untuk mengunduh formulir kerja</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            {{-- tombol form --}}
                    </div>
                    {{-- akhir standar formulir --}}

                    <div class="overflow-x-auto rounded-md mb-5 border">
                        <table class="w-full ">
                            <thead class="bg-gray-300 text-gray-700 sticky top-0">
                                <th class="py-2 w-[5%] font-medium">No.</th>
                                <th class="w-[57%] font-medium">Nama File</th>
                                <th class="w-[10%] font-medium">Uploaded by</th>
                                <th class="w-[13%] font-medium">Last Update</th>
                                <th class="w-[15%] font-medium">Upload</th>
                            </thead>
                            <tbody class="text-left border">
                                {{-- 1 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">1.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_ecr_1 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_1) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_1) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ecr_1 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ecr_in_1 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ecr_in_1 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ecr_1 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ecr_1 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ecr_1" id="fileInput_in_ecr_1"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ecr_1')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ecr_1 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal21" data-modal-show="modal21"
                                                    data-modal-toggle="modal21">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ecr_in_1"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ecr_1"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 2 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">2.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_ecr_2 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_2) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_2) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ecr_2 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ecr_in_2 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ecr_in_2 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ecr_2 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ecr_2 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ecr_2" id="fileInput_in_ecr_2"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ecr_2')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ecr_2 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal22" data-modal-show="modal22"
                                                    data-modal-toggle="modal22">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ecr_in_2"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ecr_2"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 3 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">3.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_ecr_3 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_3) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_3) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ecr_3 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ecr_in_3 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ecr_in_3 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ecr_3 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ecr_3 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ecr_3" id="fileInput_in_ecr_3"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ecr_3')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ecr_3 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal23" data-modal-show="modal23"
                                                    data-modal-toggle="modal23">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ecr_in_3"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ecr_3"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 4 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">4.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_ecr_4 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_4) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ecr_4) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_ecr_4 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_ecr_in_4 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_ecr_in_4 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_ecr_4 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ecr_4 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_ecr_4" id="fileInput_in_ecr_4"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_ecr_4')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_ecr_4 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal24" data-modal-show="modal24"
                                                    data-modal-toggle="modal24">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_ecr_in_4"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_ecr_4"
                                        value="{{ date('Y-m-d') }}">
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Akhir --}}

                    {{-- Safety Check --}}
                    {{-- awal standar formulir --}}
                    <div class="flex justify-between">
                        <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> Safety
                            Check
                            @foreach ($standar_project as $spt)
                                @if ($spt->file_sc_form != '')
                                    <div class="flex justify-end mr-1 mt-4">
                                        <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_sc_form) }}"
                                            download="">
                                            <div
                                                class="w-fit items-center space-x-1 flex fill-blue-600 hover:fill-blue-800">
                                                <svg width="15" height="" viewBox="0 0 52 52"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z" />

                                                    <path
                                                        d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z" />
                                                </svg>
                                                <p
                                                    class="text-right hover:underline font-semibold text-md text-blue-600 hover:text-blue-800 ">
                                                    Klik untuk mengunduh formulir kerja</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            {{-- tombol form --}}
                    </div>
                    {{-- akhir standar formulir --}}

                    <div class="overflow-x-auto rounded-md mb-5 border">
                        <table class="w-full ">
                            <thead class="bg-gray-300 text-gray-700 sticky top-0">
                                <th class="py-2 w-[5%] font-medium">No.</th>
                                <th class="w-[57%] font-medium">Nama File</th>
                                <th class="w-[10%] font-medium">Uploaded by</th>
                                <th class="w-[13%] font-medium">Last Update</th>
                                <th class="w-[15%] font-medium">Upload</th>
                            </thead>
                            <tbody class="text-left border">
                                {{-- 1 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">1.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_sc_1 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sc_1) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sc_1) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_sc_1 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_sc_in_1 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_sc_in_1 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_sc_1 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_sc_1 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_sc_1" id="fileInput_in_sc_1"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_sc_1')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_sc_1 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal31" data-modal-show="modal31"
                                                    data-modal-toggle="modal31">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_sc_in_1"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_sc_1"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 2 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">2.</td>
                                    <td class="flex justify-start py-4 items-center">
                                        <div id="submit-1"></div>
                                        @if ($koneksiin->in_sc_2 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sc_2) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sc_2) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_sc_2 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_sc_in_2 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_sc_in_2 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_sc_2 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_sc_2 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_sc_2" id="fileInput_in_sc_2"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_sc_2')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_sc_2 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal32" data-modal-show="modal32"
                                                    data-modal-toggle="modal32">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_sc_in_2"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_sc_2"
                                        value="{{ date('Y-m-d') }}">
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Akhir --}}



                    {{-- Safety Completeness Check --}}
                    {{-- awal standar formulir --}}
                    <div class="flex justify-between">
                        <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> Safety
                            Completeness Check
                            @foreach ($standar_project as $spt)
                                @if ($spt->file_sccs_form != '')
                                    <div class="flex justify-end mr-1 mt-4">
                                        <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_sccs_form) }}"
                                            download="">
                                            <div
                                                class="w-fit items-center space-x-1 flex fill-blue-600 hover:fill-blue-800">
                                                <svg width="15" height="" viewBox="0 0 52 52"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z" />

                                                    <path
                                                        d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z" />
                                                </svg>
                                                <p
                                                    class="text-right hover:underline font-semibold text-md text-blue-600 hover:text-blue-800 ">
                                                    Klik untuk mengunduh formulir kerja</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            {{-- tombol form --}}
                    </div>
                    {{-- akhir standar formulir --}}

                    <div class="overflow-x-auto rounded-md mb-5 border">
                        <table class="w-full ">
                            <thead class="bg-gray-300 text-gray-700 sticky top-0">
                                <th class="py-2 w-[5%] font-medium">No.</th>
                                <th class="w-[57%] font-medium">Nama File</th>
                                <th class="w-[10%] font-medium">Uploaded by</th>
                                <th class="w-[13%] font-medium">Last Update</th>
                                <th class="w-[15%] font-medium">Upload</th>
                            </thead>
                            <tbody class="text-left border">
                                {{-- 1 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">1.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_sccs_1 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sccs_1) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sccs_1) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_sccs_1 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_sccs_in_1 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_sccs_in_1 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_sccs_1 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_sccs_1 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_sccs_1" id="fileInput_in_sccs_1"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_sccs_1')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_sccs_1 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal41" data-modal-show="modal41"
                                                    data-modal-toggle="modal41">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_sccs_in_1"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_sccs_1"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 2 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">2.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_sccs_2 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sccs_2) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sccs_2) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_sccs_2 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_sccs_in_2 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_sccs_in_2 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_sccs_2 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_sccs_2 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_sccs_2" id="fileInput_in_sccs_2"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_sccs_2')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_sccs_2 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal42" data-modal-show="modal42"
                                                    data-modal-toggle="modal42">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_sccs_in_2"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_sccs_2"
                                        value="{{ date('Y-m-d') }}">

                                </tr>
                                {{-- 3 --}}
                                <tr
                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                    <td class="py-4 font-bold text-center">3.</td>
                                    <td class="flex justify-start py-4 items-center">

                                        @if ($koneksiin->in_sccs_3 != '')
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sccs_3) }}"
                                                target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                <svg width="22" height="17" viewBox="0 0 22 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                        fill="black" />
                                                </svg>
                                            </a>

                                            &emsp;
                                        @endif
                                        {{--  --}}
                                        <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_sccs_3) }}"
                                            target="blank" download="" class="hover:underline">
                                            {{ $koneksiin->in_sccs_3 }}</a>
                                        {{-- == --}}

                                    </td>
                                    <td>
                                        @if ($koneksiin->up_by_sccs_in_3 != '')
                                            <div
                                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                {{ $koneksiin->up_by_sccs_in_3 }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $koneksiin->date_in_sccs_3 }}</td>
                                    <td class="space-y-2 py-3 px-2">
                                        @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_sccs_3 == '')
                                            <div class="justify-center flex space-x-2">
                                                <input type="file" name="as_in_sccs_3" id="fileInput_in_sccs_3"
                                                    style="display: none;">
                                                <button type="button" onclick="openFileInput('in_sccs_3')"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                    + Tambah dokumen
                                                </button>
                                            </div>
                                        @elseif (
                                            ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                $koneksimn->in_sccs_3 != '' &&
                                                $koneksiin->status_in != 'Complete' &&
                                                $koneksiin->status_in != 'Waiting Approval')
                                            <div class="justify-center flex space-x-2">
                                                <button type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                    data-modal-target="modal43" data-modal-show="modal43"
                                                    data-modal-toggle="modal43">
                                                    Ubah
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <input type="text" hidden name="as_up_by_sccs_in_3"
                                        value="{{ Auth::user()->first_name }}">
                                    <input type="date" hidden name="as_date_in_sccs_3"
                                        value="{{ date('Y-m-d') }}">

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    {{-- Akhir --}}

                    {{-- inspection report --}}
                    {{-- awal standar formulir --}}
                    <div class="flex justify-between">
                        <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> Inspection
                            Report
                            @foreach ($standar_project as $spt)
                                @if ($spt->file_in_ir_form != '')
                                    <div class="flex justify-end mr-1 mt-4">
                                        <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_in_ir_form) }}"
                                            download="">
                                            <div
                                                class="w-fit items-center space-x-1 flex fill-blue-600 hover:fill-blue-800">
                                                <svg width="15" height="" viewBox="0 0 52 52"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z" />

                                                    <path
                                                        d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z" />
                                                </svg>
                                                <p
                                                    class="text-right hover:underline font-semibold text-md text-blue-600 hover:text-blue-800 ">
                                                    Klik untuk mengunduh formulir kerja</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            {{-- tombol form --}}
                    </div>
                    {{-- akhir standar formulir --}}
                    <div class="">

                        <div class="overflow-x-auto rounded-md mb-5">
                            <table class="w-full">
                                <thead class="bg-gray-300 text-gray-700">
                                    <th class="py-2 w-[5%] font-medium">No.</th>
                                    <th class="w-[57%] font-medium">Nama File</th>
                                    <th class="w-[10%] font-medium">Uploaded by</th>
                                    <th class="w-[13%] font-medium">Last Update</th>
                                    <th class="w-[15%] font-medium">Upload</th>
                                </thead>
                                <tbody class="text-left border">
                                    {{-- 1 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">1.</td>
                                        <td class="flex justify-start py-4 items-center">

                                            @if ($koneksiin->in_ir_1 != '')
                                                <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ir_1) }}"
                                                    target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                    <svg width="22" height="17" viewBox="0 0 22 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>

                                                &emsp;
                                            @endif
                                            {{--  --}}
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ir_1) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksiin->in_ir_1 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksiin->up_by_ir_in_1 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksiin->up_by_ir_in_1 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksiin->date_in_ir_1 }}</td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ir_1 == '')
                                                <div class="justify-center flex space-x-2">
                                                    <input type="file" name="as_in_ir_1" id="fileInput_in_ir_1"
                                                        style="display: none;">
                                                    <button type="button" onclick="openFileInput('in_ir_1')"
                                                        class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                        + Tambah dokumen
                                                    </button>
                                                </div>
                                            @elseif (
                                                ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                    $koneksimn->in_ir_1 != '' &&
                                                    $koneksiin->status_in != 'Complete' &&
                                                    $koneksiin->status_in != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal51" data-modal-show="modal51"
                                                        data-modal-toggle="modal51">
                                                        Ubah
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_ir_in_1"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_in_ir_1"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 2 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">2.</td>
                                        <td class="flex justify-start py-4 items-center">

                                            @if ($koneksiin->in_ir_2 != '')
                                                <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ir_2) }}"
                                                    target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                                    <svg width="22" height="17" viewBox="0 0 22 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>

                                                &emsp;
                                            @endif
                                            {{--  --}}
                                            <a href="{{ asset('storage/supervisor/project/05_IN/' . $koneksiin->in_ir_2) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksiin->in_ir_2 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksiin->up_by_ir_in_2 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksiin->up_by_ir_in_2 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksiin->date_in_ir_2 }}</td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') && $koneksiin->in_ir_2 == '')
                                                <div class="justify-center flex space-x-2">
                                                    <input type="file" name="as_in_ir_2" id="fileInput_in_ir_2"
                                                        style="display: none;">
                                                    <button type="button" onclick="openFileInput('in_ir_2')"
                                                        class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md">
                                                        + Tambah dokumen
                                                    </button>
                                                </div>
                                            @elseif (
                                                ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Installation') &&
                                                    $koneksimn->in_ir_2 != '' &&
                                                    $koneksiin->status_in != 'Complete' &&
                                                    $koneksiin->status_in != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal52" data-modal-show="modal52"
                                                        data-modal-toggle="modal52">
                                                        Ubah
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_ir_in_2"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_in_ir_2"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Akhir pekerjaan --}}
                    </div>
                </div>
                {{-- bungkus --}}

                {{-- modal ubah --}}
                @php
                    $m = range(1, 4);
                @endphp

                @foreach ($m as $index => $number)
                    <div id="modal1{{ $number }}"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                    <p class="text-2xl font-semibold text-gray-900 font-mono">
                                        Ubah dokumen unggahan
                                    </p>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        onclick="simulateEscape()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                {{ $koneksiin->{'in_ipo_' . $number} }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-base leading-relaxed text-gray-600">
                                                Oleh:
                                            </p>
                                            <p class="text-gray-900">
                                                {{ $koneksiin->{'up_by_ipo_in_' . $number} }}
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
                                        @if ($koneksiin->{'in_ipo_' . $number} != '')
                                            <input type="file"name="as_in_ipo_{{ $number }}"
                                                id="">
                                        @else()
                                        @endif
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($m as $index => $number)
                    <div id="modal2{{ $number }}"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                    <p class="text-2xl font-semibold text-gray-900 font-mono">
                                        Ubah dokumen unggahan
                                    </p>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        onclick="simulateEscape()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                {{ $koneksiin->{'in_ecr_' . $number} }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-base leading-relaxed text-gray-600">
                                                Oleh:
                                            </p>
                                            <p class="text-gray-900">
                                                {{ $koneksiin->{'up_by_ecr_in_' . $number} }}
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
                                        @if ($koneksiin->{'in_ecr_' . $number} != '')
                                            <input type="file"name="as_in_ecr_{{ $number }}"
                                                id="">
                                        @else()
                                        @endif
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($m as $index => $number)
                    <div id="modal3{{ $number }}"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                    <p class="text-2xl font-semibold text-gray-900 font-mono">
                                        Ubah dokumen unggahan
                                    </p>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        onclick="simulateEscape()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                {{ $koneksiin->{'in_sc_' . $number} }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-base leading-relaxed text-gray-600">
                                                Oleh:
                                            </p>
                                            <p class="text-gray-900">
                                                {{ $koneksiin->{'up_by_sc_in_' . $number} }}
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
                                        @if ($koneksiin->{'in_sc_' . $number} != '')
                                            <input type="file"name="as_in_sc_{{ $number }}"
                                                id="">
                                        @else()
                                        @endif
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($m as $index => $number)
                    <div id="modal4{{ $number }}"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                    <p class="text-2xl font-semibold text-gray-900 font-mono">
                                        Ubah dokumen unggahan
                                    </p>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        onclick="simulateEscape()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                {{ $koneksiin->{'in_sccs_' . $number} }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-base leading-relaxed text-gray-600">
                                                Oleh:
                                            </p>
                                            <p class="text-gray-900">
                                                {{ $koneksiin->{'up_by_sccs_in_' . $number} }}
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
                                        @if ($koneksiin->{'in_sccs_' . $number} != '')
                                            <input type="file"name="as_in_sccs_{{ $number }}"
                                                id="">
                                        @else()
                                        @endif
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($m as $index => $number)
                    <div id="modal5{{ $number }}"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                    <p class="text-2xl font-semibold text-gray-900 font-mono">
                                        Ubah dokumen unggahan
                                    </p>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        onclick="simulateEscape()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                {{ $koneksiin->{'in_ir_' . $number} }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-base leading-relaxed text-gray-600">
                                                Oleh:
                                            </p>
                                            <p class="text-gray-900">
                                                {{ $koneksiin->{'up_by_ir_in_' . $number} }}
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
                                        @if ($koneksiin->{'in_ir_' . $number} != '')
                                            <input type="file"name="as_in_ir_{{ $number }}"
                                                id="">
                                        @else()
                                        @endif
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- selesai modal ubah --}}

                {{-- last updated pengubah terakhir --}}
                <input type="text" name="last_update_name" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="last_update_date" value="{{ date('d-M-Y') }}" hidden>
            </form>

        </div>
        {{-- Akhir progress file --}}

        @if ($koneksiin->status_in == '-' || $koneksiin->status_in == 'Revisi Manufacturing')
            @if (
                /* 1m */
                $koneksiin->in_ipo_1 ||
                    $koneksiin->in_ipo_2 ||
                    $koneksiin->in_ipo_3 ||
                    /* 2n */
                    $koneksiin->in_ecr_1 ||
                    $koneksiin->in_ecr_2 ||
                    $koneksiin->in_ecr_3 ||
                    $koneksiin->in_ecr_4 ||
                    /* 3o */
                    $koneksiin->in_sc_1 ||
                    $koneksiin->in_sc_2 ||
                    /* 4p */
                    $koneksiin->in_sccs_1 ||
                    $koneksiin->in_sccs_2 ||
                    $koneksiin->in_sccs_3 ||
                    /* 5q */
                    $koneksiin->in_ir_1 ||
                    $koneksiin->in_ir_2 != '')
                <p class="mb-1 mt-3">
                    Pastikan unggahan dokumen sudah sesuai dengan proyek.
                </p>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" name="status_in" value="Waiting Approval" hidden>
                    <input type="date" hidden name="status_in_date" value="{{ date('Y-m-d') }}">

                    {{-- table project --}}
                    <input type="text" name="check" value="needcheck" hidden>
                    <input type="text" name="progress" value="Waiting Approval Installation" hidden>
                    <input type="text" name="last_update_name" value="{{ Auth::user()->first_name }}" hidden>
                    <input type="text" name="last_update_date" value="{{ date('d-M-Y') }}" hidden>
                    <button type="submit"
                        class="border-gray-500 border-2 w-full hover:bg-gray-600 text-gray-700 hover:text-white font-medium py-2 rounded-lg shadow-md mb-3 bg-white">
                        Klik untuk ajukan tahapan
                    </button>
                </form>
            @endif
        @elseif($koneksiin->status_in == 'Waiting Approval')
            <p class="bg-gray-600 mt-3 py-3 text-center text-lg text-white font-medium uppercase tracking-wide">
                Tahapan sedang menunggu persetujuan
            </p>
        @else
            <p class="bg-green-700 text-white mt-3 py-3 text-center text-lg font-medium uppercase tracking-wide">
                Tahapan telah disetujui
            </p>
        @endif
    @endif

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

        function openFileInput(namaVariabel) {
            // Temukan elemen file input berdasarkan nama variabel
            const fileInput = document.getElementById('fileInput_' + namaVariabel);

            // Klik pada elemen file input
            fileInput.click();

            // Tambahkan event listener untuk menangani perubahan file
            fileInput.addEventListener('change', function(event) {
                const selectedFile = event.target.files[0];
                console.log('File yang dipilih untuk ' + namaVariabel + ':', selectedFile.name);

                // Sekarang, kirim formulir
                document.getElementById('uploadForm').submit();
            });
        }
    </script>


</div>
{{-- tutup bungkus --}}
<div id="submit-1" class="-mt-52"></div>
</div>
