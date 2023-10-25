@extends('layouts.layout_supervisor')
@section('title_page', 'Aranggement - Project')


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

<div class="mx-10 my-20">



    {{-- header --}}
    <div class="tracking-wide text-gray-600 mb-2">
        <p class=" font-light text-2xl">Projects Detail:</p>
    </div>
    {{-- akhir header --}}

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
                        <div class=" text-red-500  font-semibold text-lg">IO Number:</div>
                        <p class="text-3xl font-bold text-gray-700 uppercase">
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
                            <p class="text-md font-medium text-gray-500">Section:</p>
                            <p class="text-lg font-semibold">
                                {{ $viewdataproject->section }}
                            </p>
                        </div>
                        <div>
                            <p class="text-md font-medium text-gray-500">Cost Dept:</p>
                            <p class="text-lg font-semibold">
                                {{ $viewdataproject->cost_dept }}
                            </p>
                        </div>
                        @if ($viewdataproject->remarks != '')
                            <div>
                                <p class="text-md font-medium text-gray-500">Remarks:</p>
                                <p class="text-lg font-semibold">
                                    {{ $viewdataproject->remarks }}
                                </p>
                            </div>
                        @endif
                        <div>
                            <p class="text-md font-medium text-gray-500">OB Year:</p>
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

                <hr class="mb-2 w-full">


                {{-- progress bar --}}
                @if ($viewdataproject->progress == 'Not Started')
                    <div class="w-full bg-gray-200 rounded-full my-2 text-xs font-medium text-black text-center"
                        data-popover-target="popover-0" data-popover-placement="bottom">
                        <p class="">0%</p>
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            style="width: 0%">
                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Fund Request')
                    <div class="w-full bg-gray-200 rounded-full my-2 text-xs font-medium text-black text-center"
                        data-popover-target="popover-0" data-popover-placement="bottom">
                        <p class="">0%</p>
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            style="width: 0%">
                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Fund Request')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-2" data-popover-placement="bottom" style="width: 5%">
                            <p>05%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Arrangement')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-3" data-popover-placement="bottom" style="width: 05%">
                            <p>05%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Arrangement')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-4" data-popover-placement="bottom" style="width: 10%">
                            <p>10%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PR')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-5" data-popover-placement="bottom" style="width: 10%">
                            <p>10%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Purchasing - PR')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-6" data-popover-placement="bottom" style="width: 15%">
                            <p>15%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PA')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-7" data-popover-placement="bottom" style="width: 15%">
                            <p>15%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Purchasing - PA')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-8" data-popover-placement="bottom" style="width: 20%">
                            <p>20%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PO')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-9" data-popover-placement="bottom" style="width: 20%">
                            <p>20%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Purchasing - PO')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-10" data-popover-placement="bottom" style="width: 25%">
                            <p>25%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Purchasing - PAY')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-11" data-popover-placement="bottom" style="width: 25%">
                            <p>25%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Purchasing - PAY')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-12" data-popover-placement="bottom" style="width: 30%">
                            <p>30%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Purchasing')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-13" data-popover-placement="bottom" style="width: 30%">
                            <p>30%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Manufacturing')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-14" data-popover-placement="bottom" style="width: 30%">
                            <p>30%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Manufacturing')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-15" data-popover-placement="bottom" style="width: 60%">
                            <p>60%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Installation')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-16" data-popover-placement="bottom" style="width: 60%">
                            <p>60%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Installation')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-17" data-popover-placement="bottom" style="width: 95%">
                            <p>95%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Waiting Approval Closed')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
                            data-popover-target="popover-18" data-popover-placement="bottom" style="width: 95%">
                            <p>95%</p>

                        </div>
                    </div>
                @elseif ($viewdataproject->progress == 'Closed')
                    <div class="w-full bg-gray-200 rounded-full my-2">
                        <div class="bg-orange-500  text-xs font-medium text-blue-100 text-center leading-none rounded-lg hover:cursor-default"
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
                            <div class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">Keterangan :
                            </div>
                            <div class="items-center pr-4 text-sm font-medium">
                                {{ $viewdataproject->status_project }}
                            </div>
                        </div>
                        <div>
                            <div class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">Budget Amount :
                            </div>
                            <div class="items-center pr-4 text-sm font-medium">
                                Rp{{ number_format($viewdataproject->budget_amount, 0, ',', '.') }}
                            </div>
                        </div>

                        <div>
                            <div class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">Last updated:</div>
                            <div class="items-center pr-4 text-sm font-medium">
                                {{ $viewdataproject->last_update_name }},
                                {{ $viewdataproject->last_update_date }}

                            </div>
                        </div>
                        <div>
                            <div class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">Tahap Project:</div>
                            <div class="items-center pr-4 text-sm font-medium">
                                {{ $viewdataproject->progress }}

                            </div>
                        </div>

                    </div>
                    {{-- button edit --}}
                    <div class="flex text-right">


                        <div class="flex items-center space-x-2">
                            {{-- Menampilkan PIC project --}}
                            <p class="font-semibold">Start :</p>
                            <div
                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-sky-400 rounded drop-shadow-md ">
                                {{ $viewdataproject->date_start }}
                            </div>

                            <p class="font-semibold">End :</p>
                            <div
                                class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-red-600 rounded drop-shadow-md">
                                {{ $viewdataproject->date_end }}
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            {{-- akhir row --}}
        </div>

    </div>


    {{-- awal stepper --}}
    <div class="max-w-4xl mx-auto mt-8">
        <div class="flex items-center">
            <div class="flex items-center relative">
                @if ($koneksifr->status_fr == 'Complete')
                    <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-white border-4">
                        <p class="font-bold text-md text-white">FR</p>
                    </div>
                @else
                    <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
                        <p class="font-bold text-md text-white">FR</p>
                    </div>
                @endif

                <div class="absolute top-0 -ml-10 text-center mt-14 w-36 text-xs font-medium uppercase">
                    <a
                        href="/01-fundrequest-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                        <p class="font-semibold text-lg text-gray-900 hover:underline">
                            Fund Request
                        </p>
                    </a>
                    <p>{{ $koneksifr->status_fr }}</p>
                    <p>{{ $koneksifr->status_fr_date }}</p>
                </div>
            </div>

            <div class="flex-auto border-t-2 border-gray-300"></div>

            <div class="flex items-center relative">
                @if ($koneksiar->status_ar == 'Complete')
                    <div class="rounded-full h-12 w-12 py-2 px-3.5 bg-green-600 border-orange-500 border-4">
                        <p class="font-bold text-md text-white">A</p>
                    </div>
                @else
                    <div class="rounded-full h-12 w-12 py-2 px-3.5 bg-gray-400 border-orange-500 border-4">
                        <p class="font-bold text-md text-white">A</p>
                    </div>
                @endif
                <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium uppercase">
                    <a
                        href="/02-arrangement-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                        <p class="font-semibold text-lg text-gray-900 hover:underline">Arrangement
                        </p>
                    </a>
                    <p>{{ $koneksiar->status_ar }}</p>
                    <p>{{ $koneksiar->status_ar_date }}</p>
                </div>
            </div>

            <div class="flex-auto border-t-2 border-gray-300"></div>

            <div class="flex items-center relative">
                @if ($koneksipr->status_purchasing == 'Complete')
                    <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white border-4">
                        <p class="font-bold text-md text-white">PR</p>
                    </div>
                @else
                    <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white border-4">
                        <p class="font-bold text-md text-white">PR</p>
                    </div>
                @endif
                <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium uppercase">
                    <a
                        href="/03-01-PR-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                        <p class="font-semibold text-lg text-gray-900 hover:underline">Purchasing
                        </p>
                    </a>
                    <p>{{ $koneksipr->status_purchasing }}</p>
                    <p>{{ $koneksipr->status_purchasing_date }}</p>
                </div>
            </div>

            <div class="flex-auto border-t-2 border-gray-300"></div>

            <div class="flex items-center relative">
                @if ($koneksimn->status_mn == 'Complete')
                    <div class="rounded-full h-12 w-12 py-2 px-3 bg-green-600 border-white border-4">
                        <p class="font-bold text-md text-white">M</p>
                    </div>
                @else
                    <div class="rounded-full h-12 w-12 py-2 px-3 bg-gray-400 border-white border-4">
                        <p class="font-bold text-md text-white">M</p>
                    </div>
                @endif
                <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium uppercase">
                    <a
                        href="/04-manufacturing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                        <p class="font-semibold text-lg text-gray-900 hover:underline">Manufacturing
                        </p>
                    </a>
                    <p>{{ $koneksimn->status_mn }}</p>
                    <p>{{ $koneksimn->status_mn_date }}</p>
                </div>
            </div>

            <div class="flex-auto border-t-2 border-gray-300"></div>

            <div class="flex items-center relative">
                @if ($koneksiin->status_in == 'Complete')
                    <div class="rounded-full h-12 w-12 py-2 px-4 bg-green-600 border-white border-4">
                        <p class="font-bold text-md text-white">I</p>
                    </div>
                @else
                    <div class="rounded-full h-12 w-12 py-2 px-4 bg-gray-400 border-white border-4">
                        <p class="font-bold text-md text-white">I</p>
                    </div>
                @endif
                <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium uppercase">
                    <a
                        href="/05-installation-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                        <p class="font-semibold text-lg text-gray-900 hover:underline">Installation
                        </p>
                    </a>
                    <p>{{ $koneksiin->status_in }}</p>
                    <p>{{ $koneksiin->status_in_date }}</p>
                </div>
            </div>

            <div class="flex-auto border-t-2 border-gray-300"></div>

            <div class="flex items-center relative">
                @if ($koneksicl->status_cl == 'Complete')
                    <div class="rounded-full h-12 w-12 py-2 px-3.5 bg-green-600 border-white border-4">
                        <p class="font-bold text-md text-white">X</p>
                    </div>
                @else
                    <div class="rounded-full h-12 w-12 py-2 px-3.5 bg-gray-400 border-white border-4">
                        <p class="font-bold text-md text-white">X</p>
                    </div>
                @endif
                <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium uppercase">
                    <a
                        href="/06-closed-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                        <p class="font-semibold text-lg text-gray-900 hover:underline">Closed
                        </p>
                    </a>
                    <p>{{ $koneksicl->status_cl }}</p>
                    <p>{{ $koneksicl->status_cl_date }}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir stepper --}}

    {{-- financial status --}}
    <div class="mt-24 w-full ">

        <div class=" bg-gray-300 overflow-x-auto rounded">
            <div class="grid grid-cols-1 gap-1">
                <div class="bg-gray-300 p-1 text-lg text-center font-bold text-pink-600">
                    Control Budget Status :
                </div>
            </div>
            <div class="grid grid-cols-6 gap-1 text-white text-left pt-1 text-base font-thin ">
                <div class="bg-pink-600 px-1 text-lg ">
                    Total budget
                </div>
                <div class="bg-pink-600 px-1 ">
                    PR
                </div>
                <div class="bg-pink-600 px-1 ">
                    PA
                </div>
                <div class="bg-pink-600 px-1 ">
                    PO
                </div>
                <div class="bg-pink-600 px-1 ">
                    PAYMENT
                </div>
                <div class="bg-blue-800 px-1 ">
                    BALANCE
                </div>
            </div>
            <div class="grid grid-cols-6 gap-1 text-white text-left font-semibold text-base">
                <div class="bg-pink-600 px-1">
                    Rp{{ number_format($viewdataproject->budget_amount, 0, ',', '.') }}
                </div>
                <div class="bg-pink-600 px-1">
                    Rp{{ number_format($sum_pr, 0, ',', '.') }}
                </div>
                <div class="bg-pink-600 px-1">
                    Rp{{ number_format($sum_pa, 0, ',', '.') }}
                </div>
                <div class="bg-pink-600 px-1">
                    Rp{{ number_format($sum_po, 0, ',', '.') }}
                </div>
                <div class="bg-pink-600 px-1">
                    Rp{{ number_format($sum_pay, 0, ',', '.') }}
                </div>
                <div class="bg-blue-800 px-1">

                    Rp{{ number_format($balance, 0, ',', '.') }}
                </div>
            </div>
        </div>
    </div>

    {{-- selesai financial status --}}



    {{-- Awal progress file --}}

    <div class="bg-white mt-10 w-full rounded-t">
        <div class="flex justify-between items-center mb-3">
            <div class="flex">
                <p>Checked by: &nbsp;
                <div class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-red-700 mr-2 rounded">
                    {{ $koneksiar->approval_by }}
                </div>
                </p>
                &nbsp;&nbsp;
                <p>On: &nbsp;
                <p class="font-semibold">
                    {{ $koneksiar->approval_date }}
                </p>
                </p>
            </div>


            @if ($koneksiar->status_ar == 'Complete')
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
                            {{ $koneksiar->status_ar }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksiar->status_ar == '-')
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
                            {{ $koneksiar->status_ar }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksiar->status_ar == 'Waiting Approval')
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
                            {{ $koneksiar->status_ar }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksiar->status_ar == 'Revisi Arrangement')
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
                            {{ $koneksiar->status_ar }}
                        </p>
                    </div>
                </div>
            @endif

        </div>
        <br>

        {{-- approval abu2 slesai --}}

        {{-- Yang diganti pertahapnya --}}
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- atas form --}}
            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> Drawing -
                    Mechanical
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_dr_m_sheet_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_m_sheet_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- tombol form --}}
            </div>

            {{-- akhir standar formulir --}}
            {{-- mechanical --}}

            <div class="overflow-x-auto rounded-md mb-10">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->draw_me_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_me_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_me_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->draw_me_1 }}</a>
                                {{-- == --}}

                            </td>
                            <td>
                                @if ($koneksiar->up_draw_me_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_draw_me_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_draw_me_1 }}</td>
                            <td><input type="file" name="as_draw_me_1" id=""></td>
                            <input type="text" hidden name="as_up_draw_me_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_draw_me_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->draw_me_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_me_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_me_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->draw_me_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_draw_me_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_draw_me_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_draw_me_2 }}</td>
                            <td><input type="file" name="as_draw_me_2" id=""></td>
                            <input type="text" hidden name="as_up_draw_me_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_draw_me_2" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir mechanical --}}

            {{-- electrical --}}
            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> Drawing
                    Electrical
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_dr_e_sheet_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_e_sheet_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- tombol form --}}
                    @endif
                @endforeach
            </div>

            {{-- akhir standar formulir --}}

            <div class="overflow-x-auto rounded-md mb-10">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->draw_el_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_el_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_el_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->draw_el_1 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_draw_el_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_draw_el_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_draw_el_1 }}</td>
                            <td><input type="file" name="as_draw_el_1" id=""></td>
                            <input type="text" hidden name="as_up_draw_el_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_draw_el_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->draw_el_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_el_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->draw_el_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->draw_el_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_draw_el_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_draw_el_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_draw_el_2 }}</td>
                            <td><input type="file" name="as_draw_el_2" id=""></td>
                            <input type="text" hidden name="as_up_draw_el_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_draw_el_2" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir electrical --}}

            {{-- layout approval --}}
            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> Layout
                    Approval
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_lay_aprvl_sheet_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_lay_aprvl_sheet_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- tombol form --}}
            </div>

            {{-- akhir standar formulir --}}

            <div class="overflow-x-auto rounded-md mb-10">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->approval_lay_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_lay_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_lay_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->approval_lay_1 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_approval_lay_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_approval_lay_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_approval_lay_1 }}</td>
                            <td><input type="file" name="as_approval_lay_1" id=""></td>
                            <input type="text" hidden name="as_up_approval_lay_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_approval_lay_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->approval_lay_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_lay_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_lay_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->approval_lay_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_approval_lay_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_approval_lay_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_approval_lay_2 }}</td>
                            <td><input type="file" name="as_approval_lay_2" id=""></td>
                            <input type="text" hidden name="as_up_approval_lay_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_approval_lay_2" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir layout approval --}}

            {{-- drawing approval --}}
            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> Drawing
                    Approval
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_dr_aprvl_sheet_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_aprvl_sheet_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- tombol form --}}
            </div>

            {{-- akhir standar formulir --}}

            <div class="overflow-x-auto rounded-md mb-10">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->approval_draw_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_draw_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_draw_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->approval_draw_1 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_approval_draw_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_approval_draw_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_approval_draw_1 }}</td>
                            <td><input type="file" name="as_approval_draw_1" id=""></td>
                            <input type="text" hidden name="as_up_approval_draw_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_approval_draw_1"
                                value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->approval_draw_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_draw_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->approval_draw_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->approval_draw_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_approval_draw_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_approval_draw_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_approval_draw_2 }}</td>
                            <td><input type="file" name="as_approval_draw_2" id=""></td>
                            <input type="text" hidden name="as_up_approval_draw_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_approval_draw_2"
                                value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir drawing approval --}}

            {{-- Design Sheet --}}
            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> Design
                    Sheet
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_design_sheet_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_design_sheet_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- tombol form --}}
            </div>

            {{-- akhir standar formulir --}}



            <div class="overflow-x-auto rounded-md mb-10">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dsgn_sheet_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dsgn_sheet_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dsgn_sheet_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->dsgn_sheet_1 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_dsgn_sheet_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dsgn_sheet_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dsgn_sheet_1 }}</td>
                            <td><input type="file" name="as_dsgn_sheet_1" id=""></td>
                            <input type="text" hidden name="as_up_dsgn_sheet_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dsgn_sheet_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dsgn_sheet_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dsgn_sheet_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dsgn_sheet_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->dsgn_sheet_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_dsgn_sheet_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dsgn_sheet_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dsgn_sheet_2 }}</td>
                            <td><input type="file" name="as_dsgn_sheet_2" id=""></td>
                            <input type="text" hidden name="as_up_dsgn_sheet_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dsgn_sheet_2" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir design sheet --}}

            {{--  DR Meeting --}}
            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> DR Meeting
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_dr_meeting_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_meeting_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- tombol form --}}
            </div>

            {{-- akhir standar formulir --}}



            <div class="overflow-x-auto rounded-md mb-10">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dr_meet_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->dr_meet_1 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_dr_meet_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dr_meet_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dr_meet_1 }}</td>
                            <td><input type="file" name="as_dr_meet_1" id=""></td>
                            <input type="text" hidden name="as_up_dr_meet_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dr_meet_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dr_meet_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->dr_meet_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_dr_meet_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dr_meet_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dr_meet_2 }}</td>
                            <td><input type="file" name="as_dr_meet_2" id=""></td>
                            <input type="text" hidden name="as_up_dr_meet_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dr_meet_2" value="{{ date('Y-m-d') }}">
                        </tr>
                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">3.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dr_meet_3 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_3) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_3) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->dr_meet_3 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_dr_meet_by_3 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dr_meet_by_3 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dr_meet_3 }}</td>
                            <td><input type="file" name="as_dr_meet_3" id=""></td>
                            <input type="text" hidden name="as_up_dr_meet_by_3"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dr_meet_3" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">4.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dr_meet_4 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_4) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_4) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->dr_meet_4 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_dr_meet_by_4 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dr_meet_by_4 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dr_meet_4 }}</td>
                            <td><input type="file" name="as_dr_meet_4" id=""></td>
                            <input type="text" hidden name="as_up_dr_meet_by_4"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dr_meet_4" value="{{ date('Y-m-d') }}">
                        </tr>
                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">5.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->dr_meet_5 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_5) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->dr_meet_5) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->dr_meet_5 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_dr_meet_by_5 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_dr_meet_by_5 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_dr_meet_5 }}</td>
                            <td><input type="file" name="as_dr_meet_5" id=""></td>
                            <input type="text" hidden name="as_up_dr_meet_by_5"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_dr_meet_5" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir dr meeting --}}

            {{-- Estimasi Budget --}}

            {{-- awal standar formulir --}}

            <div class="flex space-x-2 items-center justify-between">
                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded"> Estimasi
                    Budget
                </p>
                @foreach ($standar_project as $spt)
                    @if ($spt->file_est_budget_form != '')
                        {{-- tombol form --}}
                        <div class="mb-1">
                            <p class="text-right font-light text-sm">Harap Menggunakan Standar formulir:</p>
                            <div class="flex items-center justify-end">
                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_est_budget_form) }}"
                                    download="">
                                    <div class="w-fit items-center space-x-2 flex">
                                        <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                        </svg>
                                        <p class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                            Klik untuk mulai mengunduh</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- tombol form --}}
            </div>

            {{-- akhir standar formulir --}}


            <div class="overflow-x-auto rounded-md mb-1">
                <table class="w-full">
                    <thead class="bg-green-600 text-white">
                        <th class="py-2 w-[5%]">No.</th>
                        <th class="w-[57%]">Nama File</th>
                        <th class="w-[10%]">Uploaded by</th>
                        <th class="w-[13%]">Last Update</th>
                        <th class="w-[15%]">Upload</th>
                    </thead>
                    <tbody class="text-left border">

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">1.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->est_budget_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->est_budget_1) }}"
                                        target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->est_budget_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksiar->est_budget_1 }}</a>
                                {{-- == --}}



                            </td>
                            <td>
                                @if ($koneksiar->up_est_budget_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_est_budget_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_est_budget_1 }}</td>
                            <td><input type="file" name="as_est_budget_1" id=""></td>
                            <input type="text" hidden name="as_up_est_budget_by_1"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_est_budget_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksiar->est_budget_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->est_budget_2) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200 ">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
                                                fill="black" />
                                        </svg>
                                    </a>

                                    &emsp;
                                @endif
                                {{--  --}}
                                <a href="{{ asset('storage/supervisor/project/02_AR/' . $koneksiar->est_budget_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksiar->est_budget_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksiar->up_est_budget_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                        {{ $koneksiar->up_est_budget_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksiar->date_est_budget_2 }}</td>
                            <td><input type="file" name="as_est_budget_2" id=""></td>
                            <input type="text" hidden name="as_up_est_budget_by_2"
                                value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_est_budget_2" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- Akhir estimasi budget --}}



            <input type="text" name="status_ar" value="Complete" hidden>
            <input type="date" hidden name="status_ar_date" value="{{ date('Y-m-d') }}">
            {{-- table project --}}
            <input type="text" name="check" value="donecheck" hidden>
            <input type="text" name="progress" value="Arrangement" hidden>
            <input type="text" name="last_update_name" value="{{ Auth::user()->first_name }}" hidden>
            <input type="text" name="last_update_date" value="{{ date('d-M-Y') }}" hidden>

            <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
            <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>

            {{-- input ke table log activity --}}
            <input type="text" hidden name="aktivitas"
                value="{{ Auth::user()->first_name }} - Memperbarui Arrangement pada project  id={{ $viewdataproject->id }}">
            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">


            <button type="submit"
                class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
        </form>
        {{-- Tombol Approve --}}
        <div class="grid grid-cols-2 gap-2">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="check" value="donecheck" hidden>
                <input type="text" name="progress" value="Arrangement" hidden>
                <input type="text" name="status_ar" value="Complete" hidden>
                <input type="date" hidden name="status_ar_date" value="{{ date('Y-m-d') }}">
                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Menyetujui Arrangement pada project id={{ $viewdataproject->id }}">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">
                <div class="flex space-x-1 w-full">
                    <button type="submit"
                        class="rounded-lg items-center p-3 my-1 w-full hover:bg-green-800 bg-green-600 flex">
                        <div class="flex mx-auto space-x-2 items-center">
                            <svg width="20" height="auto" viewBox="0 0 80 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36 57.6L17.2 38.8L22.8 33.2L36 46.4L69.6 12.8C62 5.2 51.6 0 40 0C18 0 0 18 0 40C0 62 18 80 40 80C62 80 80 62 80 40C80 32.4 78 25.6 74.4 19.6L36 57.6Z"
                                    fill="white" />
                            </svg>
                            <p class="text-white font-medium">
                                Approve Progress
                            </p>
                        </div>
                    </button>
                </div>
            </form>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="check" value="donecheck" hidden>
                <input type="text" name="progress" value="Waiting Approval Arrangement" hidden>
                <input type="text" name="status_ar" value="Revisi Arrangement" hidden>
                <input type="date" hidden name="status_ar_date" value="{{ date('Y-m-d') }}">
                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Memberi Revisi Arrangement pada project id={{ $viewdataproject->id }}">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

                <button type="submit"
                    class="rounded-lg items-center text-white p-3 my-1 w-full hover:bg-yellow-600 bg-yellow-400 flex space-x-2">
                    <div class="flex mx-auto space-x-2 items-center">
                        <svg width="20" height="auto" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M40 0C17.92 0 0 17.92 0 40C0 62.08 17.92 80 40 80C62.08 80 80 62.08 80 40C80 17.92 62.08 0 40 0ZM44 60H36V52H44V60ZM44 44H36V20H44V44Z"
                                fill="white" />
                        </svg>
                        <p class="text-white font-medium">
                            Revisi Progress
                        </p>
                    </div>

                </button>
            </form>
        </div>
        {{-- Akhir Tombol Approve --}}

    </div>
    {{-- Akhir progress file --}}
</div>
{{-- tutup bungkus --}}


<div id="submit-1" class="-mt-52"></div>
</div>
