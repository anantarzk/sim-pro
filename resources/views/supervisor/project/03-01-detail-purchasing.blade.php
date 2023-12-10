@extends('layouts.layout_supervisor')
@section('title_page', 'Purchasing - PR - Project')


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
        <p class=" font-mono font-bold text-3xl mb-3">Detail proyek - PR:</p>
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
                            <div class=" text-red-500  font-semibold text-lg">IO Number:</div>
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
                    <hr class="mb-2 w-full border">
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
                                <div class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">Last updated:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    {{ $viewdataproject->last_update_name }},
                                    {{ $viewdataproject->last_update_date }}

                                </div>
                            </div>
                            <div>
                                <div class="items-center pt-1 pr-4 text-xs font-medium  text-gray-500">Tahap Project:
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
                        @elseif(
                            $koneksifr->status_fr == 'Revisi Fund Request')
                            <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                                <p class="font-bold text-md text-black">FR</p>
                            </div>
                        @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">FR</p>
                        </div>
                    @endif

                    <div class="absolute top-0 -ml-10 text-center mt-14 w-36 text-xs font-medium">
                        <a
                            href="/01-fundrequest-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">
                                Fund Request
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksifr->status_fr }}</p>
                        <p>{{ $koneksifr->status_fr_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksiar->status_ar == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white  border-4">
                            <p class="font-bold text-md text-white">AR</p>
                        </div>
                        @elseif(
                            $koneksiar->status_ar == 'Revisi Arrangement')
                            <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white  border-4">
                                <p class="font-bold text-md text-black">AR</p>
                            </div>
                        @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white  border-4">
                            <p class="font-bold text-md text-white">AR</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/02-arrangement-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Arrangement
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksiar->status_ar }}</p>
                        <p>{{ $koneksiar->status_ar_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksipr->status_purchasing == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @elseif(
                        $koneksipr->status_pr_01 == 'Revisi Purchasing - PR' ||
                            $koneksipa->status_pa_02 == 'Revisi Purchasing - PA' ||
                            $koneksipo->status_po_03 == 'Revisi Purchasing - PO' ||
                            $koneksipay->status_pay_04 == 'Revisi Purchasing - PAY')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-orange-500 border-4">
                            <p class="font-bold text-md text-black">PR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-01-PR-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Purchasing
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksipr->status_purchasing }}</p>
                        <p>{{ $koneksipr->status_purchasing_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksimn->status_mn == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">MN</p>
                        </div>
                        @elseif(
                            $koneksimn->status_mn == 'Revisi Manufacturing')
                            <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-yellow-300 border-white border-4">
                                <p class="font-bold text-md text-black">MN</p>
                            </div>
                        @else
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">MN</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/04-manufacturing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Manufacturing
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksimn->status_mn }}</p>
                        <p>{{ $koneksimn->status_mn_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksiin->status_in == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">IN</p>
                        </div>
                        @elseif(
                            $koneksiin->status_in == 'Revisi Installation')
                            <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-yellow-300 border-white border-4">
                                <p class="font-bold text-md text-black">IN</p>
                            </div>
                        @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">IN</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/05-installation-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Installation
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksiin->status_in }}</p>
                        <p>{{ $koneksiin->status_in_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksicl->status_cl == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 pl-0.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">HOV</p>
                        </div>
                        @elseif(
                            $koneksicl->status_cl == 'Revisi Handover')
                            <div class="rounded-full h-12 w-12 py-2 px-0.5 bg-yellow-300 border-white border-4">
                                <p class="font-bold text-md text-black">HOV</p>
                            </div>
                        @else
                        <div class="rounded-full h-12 w-12 py-2 pl-0.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">HOV</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/06-closed-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Handover
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksicl->status_cl }}</p>
                        <p>{{ $koneksicl->status_cl_date }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- akhir stepper --}}

        {{-- financial status --}}
        <div class="mt-24 w-full ">
            <hr class="mb-2 w-full border">
            <div class=" bg-gray-300 overflow-x-auto rounded">
                <div class="grid grid-cols-1 gap-1">
                    <div class="bg-gray-300 p-1 text-lg text-center font-bold text-pink-600 tracking-wider font-mono">
                        Status Finansial:
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-1 text-white text-left pt-1 text-base font-thin ">
                    <div class="bg-pink-600 font-mono px-1 text-lg ">
                        Total budget
                    </div>
                    <div class="bg-pink-600 font-mono px-1 ">
                        PR
                    </div>
                    <div class="bg-pink-600 font-mono px-1 ">
                        PA
                    </div>
                    <div class="bg-pink-600 font-mono px-1 ">
                        PO
                    </div>
                    <div class="bg-pink-600 font-mono px-1 ">
                        PAYMENT
                    </div>
                    <div class="bg-blue-800 font-mono px-1 ">
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
                        {{-- initial kondisi, balance = budget amount sebelum ada oprasi perhitungan --}}
                        Rp{{ number_format($balance, 0, ',', '.') }}
                    </div>
                </div>
            </div>
        </div>

        {{-- selesai financial status --}}
    </div>



    {{-- Awal progress file --}}
    <div class="bg-white mt-3 w-full rounded-md shadow-md p-3">
        {{-- awal stepper khusus purchasing --}}
        <div class="max-w-2xl mx-auto mb-16 mt-2">

            <div class="flex items-center">
                <div class="flex items-center relative">
                    @if ($koneksipr->status_pr_01 == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @elseif($koneksipr->status_pr_01 == 'Revisi Purchasing - PR')
                    <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-orange-500 border-4">
                        <p class="font-bold text-md text-black">PR</p>
                    </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-01-PR-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Pur. Request
                            </p>
                        </a>
                        <p>{{ $koneksipr->status_pr_01 }}</p>
                        <p>{{ $koneksipr->status_pr_01_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksipa->status_pa_02 == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">PA</p>
                        </div>
                        @elseif($koneksipa->status_pa_02 == 'Revisi Purchasing - PA')
                    <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                        <p class="font-bold text-md text-black">PA</p>
                    </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">PA</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-02-PA-purchase-approval-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Pur. Approval
                            </p>
                        </a>
                        <p>{{ $koneksipa->status_pa_02 }}</p>
                        <p>{{ $koneksipa->status_pa_02_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksipo->status_po_03 == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">PO</p>
                        </div>
                        @elseif($koneksipo->status_po_03 == 'Revisi Purchasing - PO')
                    <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                        <p class="font-bold text-md text-black">PO</p>
                    </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">PO</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-03-PO-purchase-order-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Pur. Order
                            </p>
                        </a>
                        <p>{{ $koneksipo->status_po_03 }}</p>
                        <p>{{ $koneksipo->status_po_03_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksipay->status_pay_04 == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">PAY</p>
                        </div>
                        @elseif($koneksipay->status_pay_04 == 'Revisi Purchasing - PAY')
                    <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-yellow-300 border-white border-4">
                        <p class="font-bold text-md text-black">PAY</p>
                    </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-1.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">PAY</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-04-PAY-payment-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Actual Payment
                            </p>
                        </a>
                        <p>{{ $koneksipay->status_pay_04 }}</p>
                        <p>{{ $koneksipay->status_pay_04_date }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- akhir stepper --}}

        <br>
        <hr class="mb-2 w-full border">

            <div class="flex justify-between items-center mb-3">

                {{-- status approval row --}}
                <div class="flex">
                    <p>Checked by: &nbsp;
                    <div
                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-red-700 mr-2 rounded">
                        {{ $koneksipr->approval_by }}
                    </div>
                    </p>
                    &nbsp;&nbsp;
                    <p>On: &nbsp;
                    <p class="font-semibold">
                        {{ $koneksipr->approval_date }}
                    </p>
                    </p>
                </div>


                @if ($koneksipr->status_pr_01 == 'Complete')
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
                                {{ $koneksipr->status_pr_01 }}
                            </p>
                        </div>
                    </div>
                @elseif ($koneksipr->status_pr_01 == '-')
                    {{-- - abu2 --}}
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
                                {{ $koneksipr->status_pr_01 }}
                            </p>
                        </div>
                    </div>
                @elseif ($koneksipr->status_pr_01 == 'Waiting Approval')
                    {{-- waiting approval abu2 --}}
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
                                {{ $koneksipr->status_pr_01 }}
                            </p>
                        </div>
                    </div>
                @elseif ($koneksipr->status_pr_01 == 'Revisi Purchasing - PR')
                    {{-- revisi --}}
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
                                {{ $koneksipr->status_pr_01 }}
                            </p>
                        </div>
                    </div>
                @endif

            </div>
            {{-- approval abu2 slesai --}}
            {{-- selesai status approval row --}}

            {{-- Yang diganti pertahapnya --}}
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- atas form --}}

                <div class="w-full mt-3">
                    {{-- card tabel approval dan revisi --}}
                    <div class="flex text-sm font-medium rounded-t-lg bg-gray-300 " id="defaultTab"
                        data-tabs-toggle="#defaultTabContent" role="tab">
                        <div class="flex mx-auto w-full space-x-4">
                            <div class="w-full">
                                <button class=" p-3 w-full rounded-tl-lg border-b-2" id="lokal-tab"
                                    data-tabs-target="#lokal" type="button" role="tab" aria-controls="lokal"
                                    aria-selected="false">
                                    PR Lokal
                                </button>
                            </div>

                            <div class="w-full">
                                <button class=" p-3 w-full rounded-tr-lg border-b-2" id="impor-tab"
                                    data-tabs-target="#impor" type="button" role="tab" aria-controls="impor"
                                    aria-selected="false">
                                    PR Impor
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="defaultTabContent">
                        <div class="bg-white mt-3" id="lokal" role="tabpanel" aria-labelledby="lokal-tab">
                            {{-- PR Parts & Material --}}
                            {{-- awal standar formulir --}}

                            <div class="flex space-x-2 items-center justify-between">
                                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded">
                                    PR Parts & Material
                                </p>
                                {{-- tombol form --}} @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_parts_material_form != '')
                                        <div class="mb-1">
                                            <p class="text-right font-light text-sm">Harap Menggunakan Standar
                                                formulir:
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_parts_material_form) }}"
                                                    download="">
                                                    <div class="w-fit items-center space-x-2 flex">
                                                        <svg width="10" height="auto" viewBox="0 0 31 39"
                                                            class="fill-blue-700" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                                        </svg>
                                                        <p
                                                            class="text-right hover:underline font-normal text-sm text-blue-700  ">
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

                            <div class="overflow-x-auto rounded-md mb-5 max-h-screen overflow-y-auto border">
                                <table class="w-full ">
                                    <thead class="bg-green-600 text-white sticky top-0">
                                        <th class="py-2 w-[5%]">No.</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[12%]">Uploaded by</th>
                                        <th class="w-[12%]">Last Update</th>
                                        <th class="w-[11%]">PR Amount</th>
                                        <th class="w-[15%]">Aksi</th>
                                    </thead>
                                    <tbody class="text-left border">
                                        {{-- 1 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">1.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_1 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_1) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_1) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_1 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_1 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_1 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_1 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_1 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_1, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_1" id="">
                                                <div class="">
                                                    <input type="number"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_1">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_1"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_1"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">2.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_2 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_2) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_2) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_2 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_2 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_2 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_2 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_2 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_2, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_2" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_2">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_2"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_2"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 3 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">3.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_3 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_3) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_3) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_3 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_3 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_3 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_3 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_3 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_3, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_3" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_3">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_3"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_3"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 4 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">4.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_4 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_4) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_4) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_4 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_4 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_4 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_4 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_4 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_4, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_4" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_4">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_4"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_4"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 5 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">5.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_5 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_5) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_5) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_5 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_5 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_5 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_5 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_5 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_5, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_5" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_5">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_5"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_5"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- batas 5 --}}
                                        {{-- 6 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">6.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_6 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_6) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_6) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_6 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_6 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_6 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_6 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_6 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_6, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_6" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_6">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_6"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_6"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 7 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">7.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_7 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_7) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_7) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_7 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_7 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_7 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_7 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_7 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_7, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_7" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_7">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_7"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_7"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 8 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">8.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_8 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_8) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_8) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_8 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_8 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_8 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_8 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_8 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_8, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_8" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_8">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_8"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_8"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 9 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">9.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_9 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_9) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_9) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_9 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_9 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_9 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_9 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_9 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_9, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_9" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_9">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_9"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_9"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 10 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">10.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_10 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_10) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_10) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_10 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_10 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_10 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_10 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_10 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_10, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_10" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_10">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_10"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_10"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- batas 10 --}}
                                        {{-- batas 11 --}}
                                        {{-- 11 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">11.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_11 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_11) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_11) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_11 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_11 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_11 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_11 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_11 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_11, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_11" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_11">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_11"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_11"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 12 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">12.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_12 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_12) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_12) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_12 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_12 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_12 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_12 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_12 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_12, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_12" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_12">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_12"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_12"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 13 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">13.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_13 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_13) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_13) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_13 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_13 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_13 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_13 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_13 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_13, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_13" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_13">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_13"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_13"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 14 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">14.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_14 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_14) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_14) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_14 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_14 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_14 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_14 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_14 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_14, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_14" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_14">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_14"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_14"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 15 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">15.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_15 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_15) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_15) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_15 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_15 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_15 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_15 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_15 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_15, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_15" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_15">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_15"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_15"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>


                                        {{-- 16 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">16.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_16 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_16) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_16) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_16 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_16 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_16 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_16 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_16 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_16, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_16" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_16">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_16"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_16"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 17 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">17.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_17 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_17) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_17) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_17 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_17 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_17 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_17 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_17 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_17, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_17" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_17">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_17"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_17"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 18 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">18.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_18 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_18) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_18) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_18 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_18 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_18 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_18 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_18 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_18, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_18" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_18">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_18"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_18"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- batas 18 --}}
                                        {{-- batas 18-20 --}}
                                        {{-- 19 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">19.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_19 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_19) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_19) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_19 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_19 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_19 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_19 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_19 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_19, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_19" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_19">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_19"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_19"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 20 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">20.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_20 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_20) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_20) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_20 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_20 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_20 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_20 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_20 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_20, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_20" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_20">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_20"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_20"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- akhir batas 18-20 --}}
                                        {{-- batas 20-30 --}}
                                        {{-- 21 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">21.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_21 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_21) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_21) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_21 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_21 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_21 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_21 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_21 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_21, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_21" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_21">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_21"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_21"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 22 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">22.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_22 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_22) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_22) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_22 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_22 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_22 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_22 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_22 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_22, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_22" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_22">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_22"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_22"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 23 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">23.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_23 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_23) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_23) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_23 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_23 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_23 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_23 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_23 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_23, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_23" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_23">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_23"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_23"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 24 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">24.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_24 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_24) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_24) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_24 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_24 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_24 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_24 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_24 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_24, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_24" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_24">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_24"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_24"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 25 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">25.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_25 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_25) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_25) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_25 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_25 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_25 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_25 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_25 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_25, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_25" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_25">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_25"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_25"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 26 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">26.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_26 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_26) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_26) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_26 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_26 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_26 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_26 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_26 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_26, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_26" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_26">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_26"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_26"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 27 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">27.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_27 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_27) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_27) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_27 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_27 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_27 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_27 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_27 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_27, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_27" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_27">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_27"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_27"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 28 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">28.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_28 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_28) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_28) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_28 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_28 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_28 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_28 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_28 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_28, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_28" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_28">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_28"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_28"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 29 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">29.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_29 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_29) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_29) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_29 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_29 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_29 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_29 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_29 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_29, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_29" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_29">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_29"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_29"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 30 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">30.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_30 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_30) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_30) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_30 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_30 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_30 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_30 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_30 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_30, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_30" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_30">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_30"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_30"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- akhir batas 20-30 --}}
                                        {{-- batas 30-36 --}}
                                        {{-- 31 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">31.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_31 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_31) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_31) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_31 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_31 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_31 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_31 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_31 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_31, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_31" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_31">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_31"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_31"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 32 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">32.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_32 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_32) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_32) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_32 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_32 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_32 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_32 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_32 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_32, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_32" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_32">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_32"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_32"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 33 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">33.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_33 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_33) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_33) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_33 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_33 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_33 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_33 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_33 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_33, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_33" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_33">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_33"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_33"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 34 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">34.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_34 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_34) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_34) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_34 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_34 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_34 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_34 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_34 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_34, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_34" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_34">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_34"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_34"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 35 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">35.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_35 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_35) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_35) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_35 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_35 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_35 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_35 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_35 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_35, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_35" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_35">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_35"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_35"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 36 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">36.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_36 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_36) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_36) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_36 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_36 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_36 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_36 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_36 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_36, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_36" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_36">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_36"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_36"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- akhir batas 30-36 --}}
                                        {{-- 37 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">37.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_37 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_37) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_37) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_37 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_37 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_37 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_37 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_37 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_37, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_37" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_37">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_37"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_37"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 38 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">38.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_38 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_38) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_38) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_38 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_38 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_38 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_38 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_38 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_38, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_38" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_38">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_38"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_38"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 39 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">39.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_39 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_39) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_39) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_39 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_39 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_39 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_39 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_39 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_39, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_39" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_39">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_39"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_39"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 40 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">40.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_40 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_40) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_40) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_40 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_40 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_40 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_40 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_40 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_40, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_40" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_40">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_40"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_40"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 40 --}}
                                        {{-- parts 41 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">41.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_41 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_41) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_41) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_41 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_41 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_41 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_41 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_41 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_41, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_41" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_41">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_41"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_41"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 42 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">42.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_42 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_42) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_42) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_42 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_42 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_42 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_42 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_42 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_42, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_42" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_42">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_42"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_42"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 43 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">43.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_43 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_43) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_43) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_43 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_43 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_43 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_43 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_43 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_43, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_43" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_43">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_43"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_43"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 44 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">44.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_44 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_44) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_44) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_44 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_44 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_44 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_44 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_44 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_44, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_44" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_44">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_44"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_44"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 45 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">45.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_45 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_45) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_45) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_45 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_45 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_45 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_45 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_45 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_45, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_45" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_45">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_45"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_45"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 46 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">46.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_46 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_46) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_46) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_46 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_46 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_46 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_46 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_46 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_46, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_46" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_46">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_46"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_46"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- akhir batas 30-36 --}}
                                        {{-- parts 47 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">47.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_47 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_47) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_47) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_47 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_47 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_47 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_47 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_47 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_47, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_47" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_47">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_47"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_47"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 48 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">48.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_48 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_48) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_48) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_48 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_48 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_48 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_48 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_48 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_48, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_48" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_48">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_48"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_48"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- parts 49 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">49.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_49 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_49) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_49) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_49 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_49 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_49 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_49 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_49 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_49, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_49" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_49">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_49"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_49"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 50 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">50.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_parts_50 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_50) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_parts_50) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_parts_50 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_parts_pr_50 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_parts_pr_50 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_parts_50 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_parts_pr_50 != '')
                                                    Rp{{ number_format($koneksipr->mny_parts_pr_50, 0, ',', '.') }}
                                                @endif
                                            </td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_parts_50" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_parts_pr_50">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_parts_pr_50"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_parts_50"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            {{-- Akhir material --}}

                            {{-- PR Pekerjaan/Jasa --}}
                            {{-- awal standar formulir --}}

                            <div class="flex space-x-2 items-center justify-between">
                                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded">
                                    PR Pekerjaan/Jasa
                                </p>
                                @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_pekerjaan_jasa_form != '')
                                        {{-- tombol form --}}
                                        <div class="mb-1">
                                            <p class="text-right font-light text-sm">Harap Menggunakan Standar
                                                formulir:
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_pekerjaan_jasa_form) }}"
                                                    download="">
                                                    <div class="w-fit items-center space-x-2 flex">
                                                        <svg width="10" height="auto" viewBox="0 0 31 39"
                                                            class="fill-blue-700"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                                        </svg>
                                                        <p
                                                            class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                                            Klik untuk mulai mengunduh
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                {{-- tombol form --}}
                            </div>

                            {{-- akhir standar formulir --}}

                            <div class="overflow-x-auto rounded-md mb-5 max-h-screen overflow-y-auto border">
                                <table class="w-full">
                                    <thead class="bg-green-600 text-white">
                                        <th class="py-2 w-[5%]">No.</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[12%]">Uploaded by</th>
                                        <th class="w-[12%]">Last Update</th>
                                        <th class="w-[11%]">PR Amount</th>
                                        <th class="w-[15%]">Aksi</th>
                                    </thead>
                                    <tbody class="text-left border">
                                        {{-- 1 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">1.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_1 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_1) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_1) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_1 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_1 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_1 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_1 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_1 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_1, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_1" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_1">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_1"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_1"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">2.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_2 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_2) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_2) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_2 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_2 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_2 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_2 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_2 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_2, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_2" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_2">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_2"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_2"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 3 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">3.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_3 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_3) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_3) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_3 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_3 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_3 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_3 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_3 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_3, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_3" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_3">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_3"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_3"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 4 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">4.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_4 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_4) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_4) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_4 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_4 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_4 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_4 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_4 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_4, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_4" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_4">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_4"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_4"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">5.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_5 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_5) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_5) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_5 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_5 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_5 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_5 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_5 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_5, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_5" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_5">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_5"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_5"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 6 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">6.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_6 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_6) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_6) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_6 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_6 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_6 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_6 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_6 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_6, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_6" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_6">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_6"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_6"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 7 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">7.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_7 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_7) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_7) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_7 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_7 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_7 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_7 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_7 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_7, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_7" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_7">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_7"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_7"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 8 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">8.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_8 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_8) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_8) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_8 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_8 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_8 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_8 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_8 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_8, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_8" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_8">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_8"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_8"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 9 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">9.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_9 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_9) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_9) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_9 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_9 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_9 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_9 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_9 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_9, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_9" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_9">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_9"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_9"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 10 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">10.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_10 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_10) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_10) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_10 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_10 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_10 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_10 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_10 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_10, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_10" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_10">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_10"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_10"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 11 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">11.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_11 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_11) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_11) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_11 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_11 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_11 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_11 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_11 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_11, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_11" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_11">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_11"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_11"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 12 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">12.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_12 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_12) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_12) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_12 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_12 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_12 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_12 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_12 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_12, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_12" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_12">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_12"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_12"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 13 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">13.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_13 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_13) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_13) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_13 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_13 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_13 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_13 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_13 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_13, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_13" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_13">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_13"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_13"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 14 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">14.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_14 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_14) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_14) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_14 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_14 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_14 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_14 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_14 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_14, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_14" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_14">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_14"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_14"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 15 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">15.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_15 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_15) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_15) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_15 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_15 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_15 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_15 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_15 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_15, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_15" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_15">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_15"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_15"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 16 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">16.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_16 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_16) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_16) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_16 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_16 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_16 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_16 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_16 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_16, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_16" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_16">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_16"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_16"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 17 jasa --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">17.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_17 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_17) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_17) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_17 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_17 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_17 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_17 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_17 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_17, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_17" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_17">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_17"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_17"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 18 jasa --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">18.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_18 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_18) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_18) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_18 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_18 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_18 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_18 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_18 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_18, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_18" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_18">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_18"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_18"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 19 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">19.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_19 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_19) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_19) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_19 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_19 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_19 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_19 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_19 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_19, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_19" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_19">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_19"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_19"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 20 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">20.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_20 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_20) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_20) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_20 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_20 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_20 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_20 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_20 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_20, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_20" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_20">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_20"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_20"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 21 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">21.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_21 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_21) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_21) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_21 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_21 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_21 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_21 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_21 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_21, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_21" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_21">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_21"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_21"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 22 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">22.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_22 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_22) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_22) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_22 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_22 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_22 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_22 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_22 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_22, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_22" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_22">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_22"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_22"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 23 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">23.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_23 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_23) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_23) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_23 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_23 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_23 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_23 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_23 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_23, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_23" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_23">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_23"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_23"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 24 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">24.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_24 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_24) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_24) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_24 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_24 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_24 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_24 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_24 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_24, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_24" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_24">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_24"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_24"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 25 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">25.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_25 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_25) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_25) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_25 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_25 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_25 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_25 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_25 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_25, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_25" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_25">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_25"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_25"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 26 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">26.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_26 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_26) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_26) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_26 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_26 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_26 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_26 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_26 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_26, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_26" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_26">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_26"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_26"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 27 jasa --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">27.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_27 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_27) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_27) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_27 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_27 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_27 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_27 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_27 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_27, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_27" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_27">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_27"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_27"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 28 jasa --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">28.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_28 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_28) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_28) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_28 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_28 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_28 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_28 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_28 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_28, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_28" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_28">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_28"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_28"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 29 parts --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">29.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_29 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_29) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_29) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_29 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_29 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_29 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_29 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_29 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_29, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_29" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_29">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_29"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_29"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 30 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">30.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_jasa_30 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_30) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_jasa_30) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_jasa_30 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_jasa_pr_30 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_jasa_pr_30 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_jasa_30 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_jasa_pr_30 != '')
                                                    Rp{{ number_format($koneksipr->mny_jasa_pr_30, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_jasa_30" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_jasa_pr_30">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_jasa_pr_30"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_jasa_30"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            {{-- Akhir pekerjaan --}}

                            {{-- PR Manufaktur --}}
                            {{-- awal standar formulir --}}

                            <div class="flex space-x-2 items-center justify-between">
                                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded">
                                    PR Manufaktur
                                </p>
                                @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_manufaktur_form != '')
                                        {{-- tombol form --}}
                                        <div class="mb-1">
                                            <p class="text-right font-light text-sm">Harap Menggunakan Standar
                                                formulir:
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_manufaktur_form) }}"
                                                    download="">
                                                    <div class="w-fit items-center space-x-2 flex">
                                                        <svg width="10" height="auto" viewBox="0 0 31 39"
                                                            class="fill-blue-700"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                                        </svg>
                                                        <p
                                                            class="text-right hover:underline font-normal text-sm text-blue-700  ">
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

                            <div class="overflow-x-auto rounded-t-md max-h-screen overflow-y-auto border">
                                <table class="w-full">
                                    <thead class="bg-green-600 text-white">
                                        <th class="py-2 w-[5%]">No.</th>
                                        <th class="w-[45%]">Nama File</th>
                                        <th class="w-[12%]">Uploaded by</th>
                                        <th class="w-[12%]">Last Update</th>
                                        <th class="w-[11%]">PR Amount</th>
                                        <th class="w-[15%]">Aksi</th>
                                    </thead>
                                    <tbody class="text-left border">
                                        {{-- 1 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">1.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_1 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_1) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_1) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_1 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_1 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_1 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_1 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_1 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_1, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_1" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_1">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_1"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_1"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">2.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_2 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_2) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_2) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_2 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_2 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_2 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_2 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_2 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_2, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_2" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_2">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_2"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_2"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 3 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">3.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_3 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_3) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_3) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_3 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_3 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_3 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_3 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_3 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_3, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_3" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_3">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_3"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_3"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 4 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">4.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_4 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_4) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_4) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_4 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_4 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_4 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_4 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_4 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_4, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_4" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_4">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_4"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_4"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">5.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_5 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_5) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_5) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_5 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_5 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_5 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_5 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_5 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_5, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_5" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_5">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_5"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_5"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 6 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">6.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_6 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_6) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_6) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_6 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_6 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_6 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_6 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_6 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_6, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_6" id="">
                                                <div class="" id="submit-1">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_6">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_6"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_6"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 7 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">7.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_7 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_7) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_7) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_7 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_7 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_7 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_7 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_7 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_7, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_7" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_7">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_7"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_7"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 8 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">8.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_8 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_8) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_8) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_8 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_8 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_8 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_8 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_8 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_8, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_8" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_8">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_8"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_8"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 9 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">9.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_9 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_9) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_9) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_9 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_9 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_9 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_9 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_9 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_9, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_9" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_9">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_9"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_9"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 10 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">10.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_mnftr_10 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_10) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_mnftr_10) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_mnftr_10 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_mnftr_pr_10 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_mnftr_pr_10 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_mnftr_10 }}</td>
                                            <td>
                                                @if ($koneksipr->mny_mnftr_pr_10 != '')
                                                    Rp{{ number_format($koneksipr->mny_mnftr_pr_10, 0, ',', '.') }}
                                                @endif
                                            </td>
                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_mnftr_10" id="">
                                                <div class="">
                                                    <input type="number" id="base-input"
                                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                        placeholder="Rp (input nilai PR)" min="0"
                                                        max="999999999999" oninput="validity.valid||(value='');"
                                                        name="as_mny_mnftr_pr_10">
                                                </div>
                                            </td>
                                            <input type="text" hidden name="as_up_by_mnftr_pr_10"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_mnftr_10"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            {{-- Akhir manufaktur --}}

                            {{-- akhir tabel PR dari awal --}}
                        </div>
                        {{-- akhir tab lokal --}}

                        {{-- awal tab impor --}}
                        <div class="mt-3 bg-white rounded-lg" id="impor" role="tabpanel"
                            aria-labelledby="impor-tab">
                            {{-- PR PER --}}
                            {{-- awal standar formulir --}}

                            <div class="flex space-x-2 items-center justify-between">
                                <p class="font-normal text-lg bg-teal-600 px-4 py-1 w-fit text-white mb-2 rounded">
                                    PER (Preliminary Estimate Request)
                                </p>
                                @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_rfq_form != '' || $spt->file_pr_per_form)
                                        {{-- tombol form --}}
                                        <div class="mb-1">
                                            <p class="text-right font-light text-sm">Harap Menggunakan Standar
                                                formulir:
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_rfq_form) }}"
                                                    download="">
                                                    <div class="w-fit items-center space-x-2 flex mr-4">
                                                        <svg width="10" height="auto" viewBox="0 0 31 39"
                                                            class="fill-blue-700"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                                        </svg>
                                                        <p
                                                            class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                                            RFQ</p>

                                                    </div>
                                                </a>
                                                <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_per_form) }}"
                                                    download="">
                                                    <div class="w-fit items-center space-x-2 flex">
                                                        <svg width="10" height="auto" viewBox="0 0 31 39"
                                                            class="fill-blue-700"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                                        </svg>
                                                        <p
                                                            class="text-right hover:underline font-normal text-sm text-blue-700  ">
                                                            PER</p>

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                {{-- tombol form --}}
                            </div>

                            {{-- akhir standar formulir --}}

                            <div class="overflow-x-auto rounded-md mb-5">
                                <table class="w-full">
                                    <thead class="bg-green-600 text-white">
                                        <th class="py-2 w-[5%]">No.</th>
                                        <th class="w-[50%]">Nama File</th>
                                        <th class="w-[15%]">Uploaded by</th>
                                        <th class="w-[15%]">Last Update</th>
                                        <th class="w-[15%]">Aksi</th>
                                    </thead>
                                    <tbody class="text-left border">
                                        {{-- 1 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">1.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_rfq_1 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_1) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_1) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_rfq_1 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_rfq_pr_1 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_rfq_pr_1 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_rfq_1 }}</td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_rfq_1" id="">

                                            </td>
                                            <input type="text" hidden name="as_up_by_rfq_pr_1"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_rfq_1"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 2 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">2.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_rfq_2 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_2) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_2) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_rfq_2 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_rfq_pr_2 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_rfq_pr_2 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_rfq_2 }}</td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_rfq_2" id="">

                                            </td>
                                            <input type="text" hidden name="as_up_by_rfq_pr_2"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_rfq_2"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 3 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">3.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_rfq_3 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_3) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_3) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_rfq_3 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_rfq_pr_3 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_rfq_pr_3 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_rfq_3 }}</td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_rfq_3" id="">

                                            </td>
                                            <input type="text" hidden name="as_up_by_rfq_pr_3"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_rfq_3"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>

                                        {{-- 4 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">4.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_rfq_4 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_4) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_4) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_rfq_4 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_rfq_pr_4 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_rfq_pr_4 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_rfq_4 }}</td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_rfq_4" id="">

                                            </td>
                                            <input type="text" hidden name="as_up_by_rfq_pr_4"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_rfq_4"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                        {{-- 5 --}}
                                        <tr
                                            class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                            <td class="py-4 font-bold text-center">4.</td>
                                            <td class="flex items-center my-10">

                                                @if ($koneksipr->pr_rfq_5 != '')
                                                    <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_5) }}"
                                                        target="blank"
                                                        class=" py-2 px-1 rounded  hover:bg-gray-200   ">
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
                                                <a href="{{ asset('storage/supervisor/project/03_01_PR/' . $koneksipr->pr_rfq_5) }}"
                                                    target="blank" download="" class="hover:underline">
                                                    {{ $koneksipr->pr_rfq_5 }}</a>
                                                {{-- == --}}

                                            </td>
                                            <td>
                                                @if ($koneksipr->up_by_rfq_pr_5 != '')
                                                    <div
                                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                        {{ $koneksipr->up_by_rfq_pr_5 }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $koneksipr->date_pr_rfq_5 }}</td>

                                            <td class="space-y-2 py-3 px-2">
                                                <input type="file" name="as_pr_rfq_5" id="">

                                            </td>
                                            <input type="text" hidden name="as_up_by_rfq_pr_5"
                                                value="{{ Auth::user()->first_name }}">
                                            <input type="date" hidden name="as_date_pr_rfq_5"
                                                value="{{ date('Y-m-d') }}">

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                 {{-- Akhir manufaktur --}}
                        </div>
                    </div>
                    {{-- tabcontent --}}
                </div>
                {{-- bungkus --}}
                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>

                <input type="text" name="status_purchasing" value="Purchasing - PR" hidden>
                <input type="date" hidden name="status_purchasing_date" value="{{ date('Y-m-d') }}">

                <input type="text" name="status_pr_01" value="Complete" hidden>
                <input type="date" hidden name="status_pr_01_date" value="{{ date('Y-m-d') }}">
                {{-- table project --}}
                <input type="text" name="check" value="donecheck" hidden>
                <input type="text" name="progress" value="Purchasing - PR" hidden>
                <input type="text" name="last_update_name" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="last_update_date" value="{{ date('d-M-Y') }}" hidden>

                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Memperbarui dan Menyetujui Purchasing -> Purchase Request pada project id= {{ $viewdataproject->id }}">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

                <button type="submit"
                    class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-lg mt-3 shadow-md">
                    Submit
                </button>
            </form>
        </div>
        {{-- Tombol Approve --}}
        <div class="grid grid-cols-2 gap-2 mt-3">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="check" value="donecheck" hidden>
                <input type="text" name="progress" value="Purchasing - PR" hidden>

                <input type="text" name="status_purchasing" value="Purchasing - PR" hidden>
                <input type="date" hidden name="status_purchasing_date" value="{{ date('Y-m-d') }}">

                <input type="text" name="status_pr_01" value="Complete" hidden>
                <input type="date" hidden name="status_pr_01_date" value="{{ date('Y-m-d') }}">

                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Menyetujui Purchasing -> Purchase Request pada project id= {{ $viewdataproject->id }}">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">
                <div class="flex space-x-1 w-full">
                    <button type="submit"
                        class="rounded-lg items-center p-3 my-1 w-full hover:bg-green-800 bg-green-600 flex shadow-md">
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
            {{-- atasbawah --}}
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="check" value="donecheck" hidden>
                <input type="text" name="progress" value="Waiting Approval Purchasing - PR" hidden>

                <input type="text" name="status_purchasing" value="Revisi Approval Purchasing - PR" hidden>
                <input type="date" hidden name="status_purchasing_date" value="{{ date('Y-m-d') }}">

                <input type="text" name="status_pr_01" value="Revisi Purchasing - PR" hidden>
                <input type="date" hidden name="status_pr_01_date" value="{{ date('Y-m-d') }}">

                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Memberi Revisi Purchasing -> Purchase Request pada project id= {{ $viewdataproject->id }}">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">
                <button type="submit"
                    class="rounded-lg items-center text-white p-3 my-1 w-full hover:bg-yellow-600 bg-yellow-400 flex space-x-2 shadow-md">
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

{{-- tutup bungkus --}}

</div>
