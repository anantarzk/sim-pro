@extends('layouts.layout_supervisor')
@section('title_page', 'Fund Request - Project')



<div class="mx-10 my-20">
    {{-- header --}}
    <div class="tracking-wide mb-2">
        <p class=" font-mono font-bold text-3xl mb-3">Detail proyek - FR:</p>
    </div>
    {{-- akhir header --}}


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
                    {{-- @if ($viewdataproject->progress == 'Not Started')
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
 --}}
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
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">FR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-orange-500 border-4">
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
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">AR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white border-4">
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
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
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
                            <p class="font-bold text-md text-white">X</p>
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

    <div class="bg-white mt-5 w-full rounded-md shadow-md p-3">
        <div class="flex justify-between items-center">
            <div class="flex">
                <p>Checked by: &nbsp;
                <div class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-red-700 mr-2 rounded">
                    {{ $koneksifr->approval_by }}
                </div>
                </p>
                &nbsp;&nbsp;
                <p>On: &nbsp;
                <p class="font-semibold">
                    {{ $koneksifr->approval_date }}
                </p>
                </p>
            </div>

            @if ($koneksifr->status_fr == 'Complete')
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
                            {{ $koneksifr->status_fr }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksifr->status_fr == '-')
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
                            {{ $koneksifr->status_fr }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksifr->status_fr == 'Waiting Approval')
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
                            {{ $koneksifr->status_fr }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksifr->status_fr == 'Revisi Fund Request')
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
                            {{ $koneksifr->status_fr }}
                        </p>
                    </div>
                </div>
            @endif

        </div>


        {{-- awal standar formulir --}}
        <hr class="mb-1 w-full border mt-2">
        <div class="flex space-x-2 items-center justify-between">
            <p>
            </p>
            @foreach ($standar_project as $spt)
                @if ($spt->file_fr_sheet_form != '')
                    <div class="mb-1">
                        <div class="flex items-center justify-end">
                            <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_fr_sheet_form) }}"
                                download="">
                                <div class="w-fit items-center space-x-2 flex">
                                    <svg width="10" height="auto" viewBox="0 0 31 39" class="fill-blue-700"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72438 38.75 0 37.0062 0 34.875V3.875C0 1.72438 1.72438 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z" />
                                    </svg>
                                    <p class="text-right hover:underline font-semibold text-md text-blue-700 ">
                                        Klik untuk mengunduh standar formulir</p>

                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

        {{-- akhir standar formulir --}}
        {{-- approval abu2 slesai --}}

        {{-- Yang diganti pertahapnya --}}

        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="overflow-x-auto rounded-md">
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
                                @if ($koneksifr->atribut_1 != '')
                                    <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_1) }}"
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
                                <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_1) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksifr->atribut_1 }}</a>
                                {{-- == --}}
                            </td>
                            <td>
                                @if ($koneksifr->up_by_1 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                        {{ $koneksifr->up_by_1 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksifr->date_atribut_1 }}</td>
                            <td>
                                @if ($koneksifr->atribut_1 != '')
                                    <div class="justify-center flex space-x-2">
                                        <button
                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md">Ubah</button>
                                        <button class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22"
                                                fill="white" viewBox="0 0 48 48">
                                                <path
                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                @else
                                    <input type="file" name="as_atribut_1" id="">
                                @endif
                            </td>
                            <input type="text" hidden name="as_up_by_1" value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_atribut_1" value="{{ date('Y-m-d') }}">

                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">2.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksifr->atribut_2 != '')
                                    <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_2) }}"
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
                                <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_2) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksifr->atribut_2 }}</a>
                                {{-- == --}}


                            </td>
                            <td>
                                @if ($koneksifr->up_by_2 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                        {{ $koneksifr->up_by_2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksifr->date_atribut_2 }}</td>
                            <td>
                                @if ($koneksifr->atribut_2 != '')
                                    <div class="justify-center flex space-x-2">
                                        <button
                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md">Ubah</button>
                                        <button class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22"
                                                fill="white" viewBox="0 0 48 48">
                                                <path
                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                @else
                                    <input type="file" name="as_atribut_2" id="">
                                @endif
                            </td>
                            <input type="text" hidden name="as_up_by_2" value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_atribut_2" value="{{ date('Y-m-d') }}">
                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">3.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksifr->atribut_3 != '')
                                    <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_3) }}"
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
                                <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_3) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksifr->atribut_3 }}</a>
                                {{-- == --}}

                            </td>
                            <td>
                                @if ($koneksifr->up_by_3 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                        {{ $koneksifr->up_by_3 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksifr->date_atribut_3 }}</td>
                            <td>
                                @if ($koneksifr->atribut_3 != '')
                                    <div class="justify-center flex space-x-2">
                                        <button
                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md">Ubah</button>
                                        <button class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22"
                                                fill="white" viewBox="0 0 48 48">
                                                <path
                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                @else
                                    <input type="file" name="as_atribut_3" id="">
                                @endif
                            </td>
                            <input type="text" hidden name="as_up_by_3" value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_atribut_3" value="{{ date('Y-m-d') }}">
                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">4.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksifr->atribut_4 != '')
                                    <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_4) }}"
                                        target="blank" class="py-2 px-1 rounded hover:bg-gray-200">
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
                                <a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_4) }}"
                                    target="blank" download="" class="hover:underline ">
                                    {{ $koneksifr->atribut_4 }}</a>
                                {{-- == --}}

                            </td>
                            <td>
                                @if ($koneksifr->up_by_4 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                        {{ $koneksifr->up_by_4 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksifr->date_atribut_4 }}</td>
                            <td>
                                @if ($koneksifr->atribut_4 != '')
                                    <div class="justify-center flex space-x-2">
                                        <button
                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md">Ubah</button>
                                        <button class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22"
                                                fill="white" viewBox="0 0 48 48">
                                                <path
                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                @else
                                    <input type="file" name="as_atribut_4" id="">
                                @endif
                            </td>
                            <input type="text" hidden name="as_up_by_4" value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_atribut_4" value="{{ date('Y-m-d') }}">
                        </tr>

                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                            <td class="py-4 font-bold text-center">5.</td>
                            <td class="flex justify-start py-4 items-center">

                                @if ($koneksifr->atribut_5 != '')
                                    <a href="{{ asset('storage/supervisor/project/fr/' . $koneksifr->atribut_5) }}"
                                        target="blank" class=" py-2 px-1 rounded hover:bg-gray-200   ">
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
                                <a href="{{ asset('storage/supervisor/project/fr/' . $koneksifr->atribut_5) }}"
                                    target="blank" download="" class="hover:underline">
                                    {{ $koneksifr->atribut_5 }}</a>
                                {{-- == --}}

                            </td>
                            <td>
                                @if ($koneksifr->up_by_5 != '')
                                    <div
                                        class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-fit mx-auto rounded">
                                        {{ $koneksifr->up_by_5 }}
                                    </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $koneksifr->date_atribut_5 }}</td>
                            <td>
                                @if ($koneksifr->atribut_5 != '')
                                    <div class="justify-center flex space-x-2">
                                        <button
                                            class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md">Ubah</button>
                                        <button class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22"
                                                fill="white" viewBox="0 0 48 48">
                                                <path
                                                    d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                @else
                                    <input type="file" name="as_atribut_5" id="">
                                @endif
                            </td>
                            <input type="text" hidden name="as_up_by_5" value="{{ Auth::user()->first_name }}">
                            <input type="date" hidden name="as_date_atribut_5" value="{{ date('Y-m-d') }}">
                        </tr>

                    </tbody>
                </table>
            </div>

            {{-- input ke table project --}}
            <input type="text" name="status_fr" value="Complete" hidden>
            <input type="date" hidden name="status_fr_date" value="{{ date('Y-m-d') }}">
            {{-- table project --}}
            <input type="text" name="check" value="donecheck" hidden>
            <input type="text" name="progress" value="Fund Request" hidden>
            <input type="text" name="last_update_name" value="{{ Auth::user()->first_name }}" hidden>
            <input type="text" name="last_update_date" value="{{ date('d-M-Y') }}" hidden>

            <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
            <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
            {{-- input ke table log activity --}}
            <input type="text" hidden name="aktivitas"
                value="{{ Auth::user()->first_name }} - Memperbarui dan Menyetujui Fund Request pada project id={{ $viewdataproject->id }}">
            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

            <button type="submit"
                class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
            <br>

        </form>
        {{-- Tombol Approve --}}
        <div class="grid grid-cols-2 gap-2">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- tabel fr --}}
                <input type="text" name="status_fr" value="Complete" hidden>
                <input type="date" hidden name="status_fr_date" value="{{ date('Y-m-d') }}">
                {{-- tabel project --}}
                <input type="text" name="check" value="donecheck" hidden>
                <input type="text" name="progress" value="Fund Request" hidden>
                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Menyetujui Fund Request pada project id={{ $viewdataproject->id }}">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

                {{-- submit --}}
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
                <input type="text" name="progress" value="Waiting Approval Fund Request" hidden>
                <input type="text" name="status_fr" value="Revisi Fund Request" hidden>
                <input type="date" hidden name="status_fr_date" value="{{ date('Y-m-d') }}">
                <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Memberi Revisi Fund Request pada project id={{ $viewdataproject->id }}">
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
