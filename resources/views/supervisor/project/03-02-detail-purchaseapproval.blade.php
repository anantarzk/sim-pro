@extends('layouts.layout_supervisor')
@section('title_page', 'Purchasing - PA- Project')


{{-- <a href="#submit-1">
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
</a> --}}



<div class="mx-10 my-20">



    {{-- header --}}
    <div class="tracking-wide mb-2">
        <p class=" font-mono font-bold text-3xl mb-3">Detail proyek - PApproval:</p>
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
                    @php
                        $totalStages = 9;
                        $completedStages = 0;

                        $statuses = [
                            $koneksifr->status_fr,
                            $koneksiar->status_ar,
                            $koneksipr->status_pr_01,
                            $koneksipa->status_pa_02,
                            $koneksipo->status_po_03,
                            $koneksipay->status_pay_04,
                            $koneksimn->status_mn,
                            $koneksiin->status_in,
                            $koneksicl->status_cl,
                        ];

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
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Keterangan
                                    FR:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    {{ $viewdataproject->status_project }}
                                </div>
                            </div>
                            <div>
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Jumlah Budget:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    Rp{{ number_format($viewdataproject->budget_amount, 0, ',', '.') }}
                                </div>
                            </div>

                            <div>
                                <div class="items-center pt-1 pr-4 text-sm font-medium  text-gray-600">Terakhir diperbaharui:
                                </div>
                                <div class="items-center pr-4 text-sm font-medium">
                                    {{ $viewdataproject->last_update_name }},
                                    {{ $viewdataproject->last_update_date }}
                                </div>
                            </div>
                        </div>
                        {{-- deadline countdown --}}
                        <div class="flex text-right">
                            @if ($viewdataproject->progress == 'Closed')
                                <div
                                    class=" space-x-1 font-medium items-center py-1 px-3 text-center text-lg rounded-xl drop-shadow-md flex justify-center w-fit bg-green-700 text-white mt-1" data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" viewBox="0 0 24 24" fill="none">
                                        <g id="Interface / Check_All">
                                        <path id="Vector" d="M8 12.4854L12.2426 16.728L20.727 8.24268M3 12.4854L7.24264 16.728M15.7279 8.24268L12.5 11.5001" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                <p>
                                    Proyek telah SELESAI
                                </p>
                                </div>
                            @else
                                <div id="countdown-{{ $viewdataproject->id }}"
                                    class="items-center py-1 px-2 font-medium text-center text-lg rounded drop-shadow-md flex justify-center mt-2"
                                    data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom">
                                </div>
                            @endif
                            <div id="tooltip-bottom" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip">
                                <div class="grid grid-cols-2 space-x-2">
                                    <div>
                                        <p class="text-left">Tanggal mulai:</p>
                                        <div class="text-left">
                                            {{ $viewdataproject->date_start }}
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-left">Tanggal selesai:</p>
                                        <p class="text-left">
                                            {{ $viewdataproject->date_end }}</p>
                                    </div>
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
                            href="/01-fundrequest-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
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
                            href="/02-arrangement-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
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
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/03-01-PR-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
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
                            href="/04-manufacturing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
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
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">IN</p>
                        </div>
                    @elseif($koneksiin->status_in == 'Revisi Installation')
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">IN</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2.5 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">IN</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-sm font-medium">
                        <a
                            href="/05-installation-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
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
                            href="/06-closed-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
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

    <div id="DeadlineCheck">
         {{-- Awal progress file --}}
    <div class="bg-white mt-3 w-full rounded-md shadow-md p-3">
        {{-- awal stepper khusus purchasing --}}
        <div class="max-w-2xl mx-auto mb-16 mt-2">

            <div class="flex items-center">
                <div class="flex items-center relative">
                    @if ($koneksipr->status_pr_01 == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-white border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @elseif($koneksipr->status_pr_01 == 'Revisi Purchasing - PR')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-white border-4">
                            <p class="font-bold text-md text-black">PR</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-white border-4">
                            <p class="font-bold text-md text-white">PR</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-01-PR-purchasing-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Pur. Request<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksipr->status_pr_01 }}</p>
                        <p>{{ $koneksipr->status_pr_01_date }}</p>
                    </div>
                </div>

                <div class="flex-auto border-t-2 border-gray-300"></div>

                <div class="flex items-center relative">
                    @if ($koneksipa->status_pa_02 == 'Complete')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-green-600 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">PA</p>
                        </div>
                    @elseif($koneksipa->status_pa_02 == 'Revisi Purchasing - PA')
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-yellow-300 border-orange-500 border-4">
                            <p class="font-bold text-md text-black">PA</p>
                        </div>
                    @else
                        <div class="rounded-full h-12 w-12 py-2 px-2 bg-gray-400 border-orange-500 border-4">
                            <p class="font-bold text-md text-white">PA</p>
                        </div>
                    @endif
                    <div class="absolute top-0 -ml-10 text-center mt-14 w-32 text-xs font-medium">
                        <a
                            href="/03-02-PA-purchase-approval-proyek/{{ $viewdataproject->id }}/{{ $koneksifr->id_fr_1 }}/{{ $koneksiar->id_ar_2 }}/{{ $koneksipr->id_pr_01_3 }}/{{ $koneksipa->id_pa_02_3 }}/{{ $koneksipo->id_po_03_3 }}/{{ $koneksipay->id_pay_04_3 }}/{{ $koneksimn->id_mn_4 }}/{{ $koneksiin->id_in_5 }}/{{ $koneksicl->id_cl_6 }}">
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Pur. Approval<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksipa->status_pa_02 }}</p>
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
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Pur. Order<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksipo->status_po_03 }}</p>
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
                            <p class="font-semibold text-lg text-gray-900 hover:underline">Act. Payment<span
                                    class="text-red-600">*</span>
                            </p>
                        </a>
                        <p class="uppercase">{{ $koneksipay->status_pay_04 }}</p>
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
                <p>Diperiksa oleh: &nbsp;
                <div
                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 mr-2 rounded">
                    {{ $koneksipa->approval_by }}
                </div>
                </p>
                &nbsp;&nbsp;
                <p>Pada: &nbsp;
                <p class="font-semibold">
                    {{ $koneksipa->approval_date }}
                </p>
                </p>
            </div>


            @if ($koneksipa->status_pa_02 == 'Complete')
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
                            {{ $koneksipa->status_pa_02 }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksipa->status_pa_02 == '-')
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
                            {{ $koneksipa->status_pa_02 }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksipa->status_pa_02 == 'Waiting Approval')
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
                            {{ $koneksipa->status_pa_02 }}
                        </p>
                    </div>
                </div>
            @elseif ($koneksipa->status_pa_02 == 'Revisi Purchasing - PA')
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
                            {{ $koneksipa->status_pa_02 }}
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
                                Purchase Approval Lokal
                            </button>
                        </div>

                        <div class="w-full">
                            <button class=" p-3 w-full rounded-tr-lg border-b-2" id="impor-tab"
                                data-tabs-target="#impor" type="button" role="tab" aria-controls="impor"
                                aria-selected="false">
                                Purchase Approval Impor
                            </button>
                        </div>
                    </div>
                </div>
                <div id="defaultTabContent">
                    <div class="bg-white mt-3" id="lokal" role="tabpanel" aria-labelledby="lokal-tab">
                        {{-- PR Parts & Material --}}
                        {{-- awal standar formulir --}}
                        <div class="flex justify-between">
                            <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> PA
                                Parts & Material
                                @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_parts_material_form != '')
                                        <div class="flex justify-end mr-1 mt-4">
                                            <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_parts_material_form) }}"
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

                        <div class="overflow-x-auto rounded-md mb-5 max-h-screen overflow-y-auto border">
                            <table class="w-full ">
                                <thead class="bg-gray-300 text-gray-700 sticky top-0">
                                    <th class="py-2 w-[5%] font-medium">No.</th>
                                    <th class="w-[45%]  font-medium">Nama File</th>
                                    <th class="w-[11%]  font-medium">Diunggah oleh</th>
                                    <th class="w-[10%]  font-medium">Terakhir diubah</th>
                                    <th class="w-[14%]  font-medium">Jumlah PA</th>
                                    <th class="w-[14%]  font-medium">Aksi</th>
                                </thead>
                                <tbody class="text-left border">
                                    {{-- 1 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">1.</td>
                                        <td class="flex items-center my-4">
                                            @if ($koneksipa->pa_parts_1 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_1) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_1) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_1 }}</a>
                                            {{-- == --}}
                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_1 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_1 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_1 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_1 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_1, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_1 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala11" data-modal-show="modala11"
                                                    data-modal-toggle="modala11">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_1 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal11" data-modal-show="modal11"
                                                        data-modal-toggle="modal11">
                                                        Ubah
                                                    </button>
                                                    <button data-dropdown-toggle="dropdown11" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_1"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_1"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 2 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">2.</td>
                                        <td class="flex items-center my-4">
                                            @if ($koneksipa->pa_parts_2 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_2) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_2) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_2 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_2 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_2 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_2 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_2 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_2, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_2 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala12" data-modal-show="modala12"
                                                    data-modal-toggle="modala12">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_2 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal12" data-modal-show="modal12"
                                                        data-modal-toggle="modal12">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown12" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_2"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_2"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 3 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">3.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_3 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_3) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_3) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_3 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_3 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_3 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_3 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_3 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_3, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_3 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala13" data-modal-show="modala13"
                                                    data-modal-toggle="modala13">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_3 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal13" data-modal-show="modal13"
                                                        data-modal-toggle="modal13">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown13" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_3"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_3"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 4 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">4.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_4 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_4) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_4) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_4 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_4 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_4 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_4 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_4 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_4, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_4 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala14" data-modal-show="modala14"
                                                    data-modal-toggle="modala14">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_4 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal14" data-modal-show="modal14"
                                                        data-modal-toggle="modal14">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown14" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_4"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_4"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 5 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">5.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_5 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_5) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_5) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_5 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_5 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_5 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_5 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_5 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_5, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_5 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala15" data-modal-show="modala15"
                                                    data-modal-toggle="modala15">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_5 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal15" data-modal-show="modal15"
                                                        data-modal-toggle="modal15">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown15" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_5"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_5"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- batas 5 --}}
                                    {{-- 6 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">6.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_6 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_6) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_6) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_6 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_6 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_6 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_6 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_6 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_6, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_6 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala16" data-modal-show="modala16"
                                                    data-modal-toggle="modala16">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_6 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal16" data-modal-show="modal16"
                                                        data-modal-toggle="modal16">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown16" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_6"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_6"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 7 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">7.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_7 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_7) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_7) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_7 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_7 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_7 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_7 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_7 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_7, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_7 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala17" data-modal-show="modala17"
                                                    data-modal-toggle="modala17">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_7 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal17" data-modal-show="modal17"
                                                        data-modal-toggle="modal17">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown17" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_7"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_7"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 8 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">8.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_8 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_8) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_8) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_8 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_8 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_8 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_8 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_8 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_8, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_8 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala18" data-modal-show="modala18"
                                                    data-modal-toggle="modala18">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_8 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal18" data-modal-show="modal18"
                                                        data-modal-toggle="modal18">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown18" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_8"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_8"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 9 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">9.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_9 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_9) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_9) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_9 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_9 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_9 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_9 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_9 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_9, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_9 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala19" data-modal-show="modala19"
                                                    data-modal-toggle="modala19">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_9 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal19" data-modal-show="modal19"
                                                        data-modal-toggle="modal19">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown19" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_9"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_9"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 10 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">10.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_10 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_10) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_10) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_10 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_10 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_10 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_10 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_10 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_10, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_10 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala110" data-modal-show="modala110"
                                                    data-modal-toggle="modala110">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_10 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal110" data-modal-show="modal110"
                                                        data-modal-toggle="modal110">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown110" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_10"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_10"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- batas 10 --}}
                                    {{-- batas 11 --}}
                                    {{-- 11 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">11.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_11 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_11) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_11) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_11 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_11 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_11 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_11 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_11 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_11, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_11 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala111" data-modal-show="modala111"
                                                    data-modal-toggle="modala111">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_11 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal111" data-modal-show="modal111"
                                                        data-modal-toggle="modal111">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown111" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_11"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_11"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 12 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">12.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_12 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_12) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_12) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_12 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_12 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_12 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_12 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_12 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_12, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_12 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala112" data-modal-show="modala112"
                                                    data-modal-toggle="modala112">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_12 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal112" data-modal-show="modal112"
                                                        data-modal-toggle="modal112">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown112" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_12"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_12"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 13 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">13.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_13 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_13) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_13) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_13 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_13 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_13 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_13 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_13 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_13, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_13 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala113" data-modal-show="modala113"
                                                    data-modal-toggle="modala113">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_13 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal113" data-modal-show="modal113"
                                                        data-modal-toggle="modal113">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown113" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_13"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_13"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 14 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">14.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_14 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_14) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_14) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_14 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_14 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_14 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_14 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_14 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_14, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_14 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala114" data-modal-show="modala114"
                                                    data-modal-toggle="modala114">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_14 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal114" data-modal-show="modal114"
                                                        data-modal-toggle="modal114">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown114" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_14"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_14"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 15 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">15.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_15 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_15) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_15) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_15 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_15 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_15 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_15 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_15 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_15, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_15 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala115" data-modal-show="modala115"
                                                    data-modal-toggle="modala115">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_15 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal115" data-modal-show="modal115"
                                                        data-modal-toggle="modal115">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown115" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_15"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_15"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>


                                    {{-- 16 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">16.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_16 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_16) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_16) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_16 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_16 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_16 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_16 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_16 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_16, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_16 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala116" data-modal-show="modala116"
                                                    data-modal-toggle="modala116">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_16 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal116" data-modal-show="modal116"
                                                        data-modal-toggle="modal116">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown116" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_16"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_16"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 17 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">17.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_17 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_17) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_17) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_17 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_17 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_17 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_17 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_17 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_17, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_17 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala117" data-modal-show="modala117"
                                                    data-modal-toggle="modala117">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_17 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal117" data-modal-show="modal117"
                                                        data-modal-toggle="modal117">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown117" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_17"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_17"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 18 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">18.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_18 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_18) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_18) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_18 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_18 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_18 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_18 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_18 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_18, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_18 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala118" data-modal-show="modala118"
                                                    data-modal-toggle="modala118">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_18 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal118" data-modal-show="modal118"
                                                        data-modal-toggle="modal118">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown118" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_18"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_18"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- batas 18 --}}
                                    {{-- batas 18-20 --}}
                                    {{-- 19 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">19.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_19 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_19) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_19) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_19 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_19 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_19 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_19 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_19 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_19, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_19 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala119" data-modal-show="modala119"
                                                    data-modal-toggle="modala119">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_19 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal119" data-modal-show="modal119"
                                                        data-modal-toggle="modal119">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown119" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_19"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_19"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 20 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">20.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_20 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_20) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_20) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_20 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_20 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_20 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_20 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_20 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_20, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_20 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala120" data-modal-show="modala120"
                                                    data-modal-toggle="modala120">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_20 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal120" data-modal-show="modal120"
                                                        data-modal-toggle="modal120">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown120" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_20"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_20"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- akhir batas 18-20 --}}
                                    {{-- batas 20-30 --}}
                                    {{-- 21 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">21.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_21 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_21) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_21) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_21 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_21 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_21 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_21 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_21 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_21, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_21 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala121" data-modal-show="modala121"
                                                    data-modal-toggle="modala121">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_21 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal121" data-modal-show="modal121"
                                                        data-modal-toggle="modal121">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown121" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_21"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_21"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 22 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">22.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_22 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_22) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_22) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_22 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_22 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_22 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_22 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_22 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_22, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_22 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala122" data-modal-show="modala122"
                                                    data-modal-toggle="modala122">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_22 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal122" data-modal-show="modal122"
                                                        data-modal-toggle="modal122">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown122" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_22"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_22"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 23 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">23.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_23 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_23) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_23) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_23 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_23 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_23 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_23 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_23 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_23, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_23 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala123" data-modal-show="modala123"
                                                    data-modal-toggle="modala123">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_23 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal123" data-modal-show="modal123"
                                                        data-modal-toggle="modal123">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown123" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_23"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_23"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 24 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">24.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_24 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_24) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_24) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_24 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_24 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_24 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_24 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_24 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_24, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_24 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala124" data-modal-show="modala124"
                                                    data-modal-toggle="modala124">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_24 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal124" data-modal-show="modal124"
                                                        data-modal-toggle="modal124">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown124" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif

                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_24"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_24"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 25 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">25.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_25 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_25) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_25) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_25 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_25 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_25 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_25 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_25 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_25, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_25 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala125" data-modal-show="modala125"
                                                    data-modal-toggle="modala125">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_25 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal125" data-modal-show="modal125"
                                                        data-modal-toggle="modal125">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown125" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_25"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_25"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 26 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">26.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_26 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_26) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_26) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_26 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_26 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_26 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_26 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_26 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_26, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_26 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala126" data-modal-show="modala126"
                                                    data-modal-toggle="modala126">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_26 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal126" data-modal-show="modal126"
                                                        data-modal-toggle="modal126">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown126" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_26"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_26"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 27 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">27.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_27 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_27) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_27) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_27 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_27 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_27 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_27 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_27 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_27, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_27 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala127" data-modal-show="modala127"
                                                    data-modal-toggle="modala127">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_27 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal127" data-modal-show="modal127"
                                                        data-modal-toggle="modal127">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown127" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_27"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_27"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 28 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">28.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_28 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_28) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_28) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_28 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_28 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_28 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_28 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_28 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_28, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_28 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala128" data-modal-show="modala128"
                                                    data-modal-toggle="modala128">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_28 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal128" data-modal-show="modal128"
                                                        data-modal-toggle="modal128">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown128" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_28"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_28"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 29 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">29.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_29 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_29) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_29) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_29 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_29 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_29 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_29 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_29 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_29, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_29 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala129" data-modal-show="modala129"
                                                    data-modal-toggle="modala129">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_29 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal129" data-modal-show="modal129"
                                                        data-modal-toggle="modal129">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown129" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_29"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_29"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 30 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">30.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_30 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_30) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_30) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_30 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_30 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_30 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_30 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_30 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_30, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_30 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala130" data-modal-show="modala130"
                                                    data-modal-toggle="modala130">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_30 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal130" data-modal-show="modal130"
                                                        data-modal-toggle="modal130">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown130" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_30"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_30"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- akhir batas 20-30 --}}
                                    {{-- batas 30-36 --}}
                                    {{-- 31 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">31.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_31 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_31) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_31) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_31 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_31 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_31 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_31 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_31 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_31, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_31 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala131" data-modal-show="modala131"
                                                    data-modal-toggle="modala131">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_31 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal131" data-modal-show="modal131"
                                                        data-modal-toggle="modal131">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown131" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_31"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_31"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 32 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">32.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_32 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_32) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_32) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_32 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_32 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_32 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_32 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_32 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_32, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_32 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala132" data-modal-show="modala132"
                                                    data-modal-toggle="modala132">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_32 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal132" data-modal-show="modal132"
                                                        data-modal-toggle="modal132">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown132" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_32"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_32"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 33 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">33.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_33 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_33) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_33) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_33 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_33 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_33 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_33 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_33 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_33, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_33 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala133" data-modal-show="modala133"
                                                    data-modal-toggle="modala133">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_33 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal133" data-modal-show="modal133"
                                                        data-modal-toggle="modal133">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown133" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif

                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_33"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_33"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 34 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">34.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_34 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_34) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_34) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_34 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_34 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_34 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_34 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_34 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_34, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_34 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala134" data-modal-show="modala134"
                                                    data-modal-toggle="modala134">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_34 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal134" data-modal-show="modal134"
                                                        data-modal-toggle="modal134">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown134" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_34"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_34"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 35 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">35.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_35 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_35) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_35) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_35 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_35 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_35 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_35 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_35 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_35, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_35 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala135" data-modal-show="modala135"
                                                    data-modal-toggle="modala135">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_35 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal135" data-modal-show="modal135"
                                                        data-modal-toggle="modal135">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown135" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_35"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_35"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 36 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">36.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_36 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_36) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_36) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_36 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_36 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_36 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_36 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_36 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_36, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_36 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala136" data-modal-show="modala136"
                                                    data-modal-toggle="modala136">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_36 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal136" data-modal-show="modal136"
                                                        data-modal-toggle="modal136">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown136" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_36"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_36"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- akhir batas 30-36 --}}
                                    {{-- 37 parts --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">37.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_37 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_37) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_37) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_37 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_37 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_37 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_37 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_37 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_37, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_37 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala137" data-modal-show="modala137"
                                                    data-modal-toggle="modala137">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_37 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal137" data-modal-show="modal137"
                                                        data-modal-toggle="modal137">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown137" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_37"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_37"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 38 parts --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">38.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_38 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_38) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_38) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_38 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_38 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_38 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_38 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_38 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_38, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_38 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala138" data-modal-show="modala138"
                                                    data-modal-toggle="modala138">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_38 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal138" data-modal-show="modal138"
                                                        data-modal-toggle="modal138">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown138" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_38"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_38"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 39 parts --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">39.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_39 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_39) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_39) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_39 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_39 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_39 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_39 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_39 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_39, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_39 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala139" data-modal-show="modala139"
                                                    data-modal-toggle="modala139">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_39 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal139" data-modal-show="modal139"
                                                        data-modal-toggle="modal139">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown139" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_39"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_39"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 40 parts --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">40.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_40 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_40) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_40) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_40 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_40 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_40 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_40 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_40 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_40, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_40 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala140" data-modal-show="modala140"
                                                    data-modal-toggle="modala140">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_40 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal140" data-modal-show="modal140"
                                                        data-modal-toggle="modal140">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown140" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_40"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_40"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 40 --}}
                                    {{-- parts 41 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">41.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_41 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_41) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_41) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_41 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_41 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_41 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_41 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_41 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_41, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_41 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala141" data-modal-show="modala141"
                                                    data-modal-toggle="modala141">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_41 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal141" data-modal-show="modal141"
                                                        data-modal-toggle="modal141">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown141" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_41"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_41"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- parts 42 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">42.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_42 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_42) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_42) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_42 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_42 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_42 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_42 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_42 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_42, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_42 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala142" data-modal-show="modala142"
                                                    data-modal-toggle="modala142">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_42 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal142" data-modal-show="modal142"
                                                        data-modal-toggle="modal142">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown142" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_42"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_42"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- parts 43 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">43.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_43 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_43) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_43) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_43 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_43 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_43 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_43 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_43 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_43, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_43 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala143" data-modal-show="modala143"
                                                    data-modal-toggle="modala143">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_43 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal143" data-modal-show="modal143"
                                                        data-modal-toggle="modal143">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown143" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_43"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_43"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- parts 44 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">44.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_44 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_44) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_44) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_44 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_44 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_44 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_44 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_44 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_44, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_44 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala144" data-modal-show="modala144"
                                                    data-modal-toggle="modala144">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_44 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal144" data-modal-show="modal144"
                                                        data-modal-toggle="modal144">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown144" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_44"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_44"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- parts 45 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">45.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_parts_45 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_45) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_parts_45) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_parts_45 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_parts_pa_45 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_parts_pa_45 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_parts_45 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_parts_pa_45 != '')
                                                Rp{{ number_format($koneksipa->mny_parts_pa_45, 0, ',', '.') }}
                                            @endif
                                        </td>

                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_45 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala145" data-modal-show="modala145"
                                                    data-modal-toggle="modala145">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_parts_45 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal145" data-modal-show="modal145"
                                                        data-modal-toggle="modal145">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown145" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_parts_pa_45"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_parts_45"
                                            value="{{ date('Y-m-d') }}">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Akhir material --}}

                        {{-- PA Pekerjaan/Jasa --}}
                        {{-- awal standar formulir --}}
                        <div class="flex justify-between">
                            <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> PA
                                Pekerjaan/Jasa
                                @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_pekerjaan_jasa_form != '')
                                        <div class="flex justify-end mr-1 mt-4">
                                            <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_pekerjaan_jasa_form) }}"
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

                        <div class="overflow-x-auto rounded-md mb-5 max-h-screen overflow-y-auto border">
                            <table class="w-full">
                                <thead class="bg-gray-300 text-gray-700">
                                    <th class="py-2 w-[5%] font-medium">No.</th>
                                    <th class="w-[45%]  font-medium">Nama File</th>
                                    <th class="w-[11%]  font-medium">Diunggah oleh</th>
                                    <th class="w-[10%]  font-medium">Terakhir diubah</th>
                                    <th class="w-[14%]  font-medium">PA Amount</th>
                                    <th class="w-[14%]  font-medium">Aksi</th>
                                </thead>
                                <tbody class="text-left border">
                                    {{-- 1 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">1.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_1 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_1) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_1) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_1 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_1 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_1 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_1 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_1 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_1, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_1 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala21" data-modal-show="modala21"
                                                    data-modal-toggle="modala21">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_1 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal21" data-modal-show="modal21"
                                                        data-modal-toggle="modal21">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown21" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_1"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_1"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 2 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">2.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_2 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_2) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_2) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_2 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_2 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_2 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_2 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_2 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_2, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_2 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala22" data-modal-show="modala22"
                                                    data-modal-toggle="modala22">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_2 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal22" data-modal-show="modal22"
                                                        data-modal-toggle="modal22">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown22" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_2"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_2"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 3 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">3.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_3 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_3) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_3) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_3 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_3 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_3 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_3 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_3 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_3, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_3 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala23" data-modal-show="modala23"
                                                    data-modal-toggle="modala23">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_3 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal23" data-modal-show="modal23"
                                                        data-modal-toggle="modal23">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown23" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_3"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_3"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 4 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">4.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_4 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_4) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_4) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_4 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_4 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_4 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_4 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_4 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_4, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_4 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala24" data-modal-show="modala24"
                                                    data-modal-toggle="modala24">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_4 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal24" data-modal-show="modal24"
                                                        data-modal-toggle="modal24">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown24" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_4"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_4"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 5 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">5.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_5 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_5) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_5) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_5 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_5 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_5 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_5 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_5 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_5, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_5 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala25" data-modal-show="modala25"
                                                    data-modal-toggle="modala25">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_5 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal25" data-modal-show="modal25"
                                                        data-modal-toggle="modal25">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown25" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_5"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_5"
                                            value="{{ date('Y-m-d') }}">
                                    </tr>
                                    {{-- 6 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">6.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_6 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_6) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_6) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_6 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_6 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_6 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_6 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_6 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_6, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_6 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala26" data-modal-show="modala26"
                                                    data-modal-toggle="modala26">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_6 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal26" data-modal-show="modal26"
                                                        data-modal-toggle="modal26">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown26" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_6"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_6"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 7 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">7.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_7 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_7) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_7) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_7 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_7 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_7 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_7 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_7 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_7, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_7 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala27" data-modal-show="modala27"
                                                    data-modal-toggle="modala27">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_7 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal27" data-modal-show="modal27"
                                                        data-modal-toggle="modal27">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown27" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_7"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_7"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 8 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">8.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_8 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_8) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_8) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_8 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_8 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_8 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_8 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_8 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_8, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_8 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala28" data-modal-show="modala28"
                                                    data-modal-toggle="modala28">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_8 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal28" data-modal-show="modal28"
                                                        data-modal-toggle="modal28">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown28" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_8"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_8"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 9 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">9.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_9 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_9) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_9) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_9 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_9 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_9 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_9 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_9 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_9, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_9 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala29" data-modal-show="modala29"
                                                    data-modal-toggle="modala29">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_9 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal29" data-modal-show="modal29"
                                                        data-modal-toggle="modal29">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown29" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_9"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_9"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 10 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">10.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_10 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_10) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_10) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_10 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_10 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_10 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_10 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_10 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_10, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_10 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala210" data-modal-show="modala210"
                                                    data-modal-toggle="modala210">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_10 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal210" data-modal-show="modal210"
                                                        data-modal-toggle="modal210">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown210" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_10"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_10"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 11 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">11.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_11 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_11) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_11) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_11 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_11 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_11 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_11 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_11 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_11, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_11 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala211" data-modal-show="modala211"
                                                    data-modal-toggle="modala211">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_11 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal211" data-modal-show="modal211"
                                                        data-modal-toggle="modal211">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown211" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_11"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_11"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 12 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">12.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_12 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_12) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_12) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_12 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_12 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_12 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_12 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_12 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_12, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_12 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala212" data-modal-show="modala212"
                                                    data-modal-toggle="modala212">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_12 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal212" data-modal-show="modal212"
                                                        data-modal-toggle="modal212">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown212" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_12"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_12"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 13 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">13.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_13 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_13) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_13) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_13 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_13 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_13 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_13 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_13 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_13, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_13 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala213" data-modal-show="modala213"
                                                    data-modal-toggle="modala213">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_13 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal213" data-modal-show="modal213"
                                                        data-modal-toggle="modal213">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown213" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_13"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_13"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 14 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">14.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_14 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_14) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_14) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_14 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_14 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_14 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_14 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_14 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_14, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_14 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala214" data-modal-show="modala214"
                                                    data-modal-toggle="modala214">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_14 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal214" data-modal-show="modal214"
                                                        data-modal-toggle="modal214">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown214" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_14"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_14"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 15 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">15.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_15 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_15) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_15) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_15 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_15 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_15 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_15 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_15 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_15, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_15 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala215" data-modal-show="modala215"
                                                    data-modal-toggle="modala215">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_15 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal215" data-modal-show="modal215"
                                                        data-modal-toggle="modal215">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown215" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_15"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_15"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 16 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">16.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_16 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_16) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_16) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_16 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_16 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_16 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_16 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_16 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_16, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_16 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala216" data-modal-show="modala216"
                                                    data-modal-toggle="modala216">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_16 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal216" data-modal-show="modal216"
                                                        data-modal-toggle="modal216">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown216" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_16"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_16"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 17 jasa --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">17.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_17 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_17) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_17) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_17 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_17 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_17 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_17 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_17 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_17, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_17 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala217" data-modal-show="modala217"
                                                    data-modal-toggle="modala217">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_17 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal217" data-modal-show="modal217"
                                                        data-modal-toggle="modal217">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown217" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_17"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_17"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 18 jasa --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">18.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_18 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_18) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_18) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_18 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_18 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_18 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_18 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_18 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_18, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_18 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala218" data-modal-show="modala218"
                                                    data-modal-toggle="modala218">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_18 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal218" data-modal-show="modal218"
                                                        data-modal-toggle="modal218">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown218" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_18"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_18"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 19 parts --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">19.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_19 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_19) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_19) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_19 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_19 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_19 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_19 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_19 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_19, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_19 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala219" data-modal-show="modala219"
                                                    data-modal-toggle="modala219">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_19 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal219" data-modal-show="modal219"
                                                        data-modal-toggle="modal219">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown219" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_19"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_19"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 20 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">20.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_20 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_20) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_20) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_20 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_20 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_20 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_20 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_20 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_20, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_20 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala220" data-modal-show="modala220"
                                                    data-modal-toggle="modala220">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_20 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal220" data-modal-show="modal220"
                                                        data-modal-toggle="modal220">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown220" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_20"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_20"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 21 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">21.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_21 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_21) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_21) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_21 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_21 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_21 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_21 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_21 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_21, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_21 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala221" data-modal-show="modala221"
                                                    data-modal-toggle="modala221">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_21 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal221" data-modal-show="modal221"
                                                        data-modal-toggle="modal221">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown221" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_21"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_21"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 22 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">22.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_22 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_22) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_22) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_22 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_22 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_22 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_22 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_22 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_22, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_22 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala222" data-modal-show="modala222"
                                                    data-modal-toggle="modala222">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_22 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal222" data-modal-show="modal222"
                                                        data-modal-toggle="modal222">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown222" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_22"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_22"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 23 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">23.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_23 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_23) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_23) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_23 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_23 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_23 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_23 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_23 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_23, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_23 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala223" data-modal-show="modala223"
                                                    data-modal-toggle="modala223">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_23 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal223" data-modal-show="modal223"
                                                        data-modal-toggle="modal223">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown223" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_23"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_23"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 24 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">24.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_24 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_24) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_24) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_24 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_24 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_24 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_24 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_24 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_24, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_24 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala224" data-modal-show="modala224"
                                                    data-modal-toggle="modala224">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_24 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal224" data-modal-show="modal224"
                                                        data-modal-toggle="modal224">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown224" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_24"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_24"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 25 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">25.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_25 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_25) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_25) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_25 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_25 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_25 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_25 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_25 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_25, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_25 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala225" data-modal-show="modala225"
                                                    data-modal-toggle="modala225">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_25 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal225" data-modal-show="modal225"
                                                        data-modal-toggle="modal225">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown225" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_25"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_25"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 26 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">26.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_26 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_26) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_26) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_26 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_26 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_26 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_26 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_26 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_26, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_26 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala226" data-modal-show="modala226"
                                                    data-modal-toggle="modala226">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_26 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal226" data-modal-show="modal226"
                                                        data-modal-toggle="modal226">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown226" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_26"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_26"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 27 jasa --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">27.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_27 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_27) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_27) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_27 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_27 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_27 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_27 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_27 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_27, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_27 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala227" data-modal-show="modala227"
                                                    data-modal-toggle="modala227">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_27 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal227" data-modal-show="modal227"
                                                        data-modal-toggle="modal227">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown227" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_27"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_27"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 28 jasa --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">28.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_28 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_28) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_28) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_28 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_28 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_28 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_28 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_28 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_28, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_28 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala228" data-modal-show="modala228"
                                                    data-modal-toggle="modala228">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_28 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal228" data-modal-show="modal228"
                                                        data-modal-toggle="modal228">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown228" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_28"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_28"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 29 parts --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">29.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_29 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_29) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_29) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_29 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_29 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_29 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_29 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_29 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_29, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_29 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala229" data-modal-show="modala229"
                                                    data-modal-toggle="modala229">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_29 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal229" data-modal-show="modal229"
                                                        data-modal-toggle="modal229">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown229" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_29"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_29"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 30 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">30.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_jasa_30 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_30) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_jasa_30) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_jasa_30 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_jasa_pa_30 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_jasa_pa_30 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_jasa_30 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_jasa_pa_30 != '')
                                                Rp{{ number_format($koneksipa->mny_jasa_pa_30, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_30 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala230" data-modal-show="modala230"
                                                    data-modal-toggle="modala230">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_jasa_30 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal230" data-modal-show="modal230"
                                                        data-modal-toggle="modal230">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown230" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_jasa_pa_30"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_jasa_30"
                                            value="{{ date('Y-m-d') }}">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Akhir pekerjaan --}}

                        {{-- PA Manufaktur --}}
                        {{-- awal standar formulir --}}
                        <div class="flex justify-between">
                            <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded"> PA
                                Manufaktur
                                @foreach ($standar_project as $spt)
                                    @if ($spt->file_pr_manufaktur_form != '')
                                        <div class="flex justify-end mr-1 mt-4">
                                            <a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_pr_manufaktur_form) }}"
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

                        <div class="overflow-x-auto rounded-t-md max-h-screen overflow-y-auto border">
                            <table class="w-full">
                                <thead class="bg-gray-300 text-gray-700">
                                    <th class="py-2 w-[5%] font-medium">No.</th>
                                    <th class="w-[45%]  font-medium">Nama File</th>
                                    <th class="w-[11%]  font-medium">Diunggah oleh</th>
                                    <th class="w-[10%]  font-medium">Terakhir diubah</th>
                                    <th class="w-[14%]  font-medium">PA Amount</th>
                                    <th class="w-[14%]  font-medium">Aksi</th>
                                </thead>
                                <tbody class="text-left border">
                                    {{-- 1 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">1.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_1 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_1) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_1) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_1 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_1 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_1 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_1 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_1 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_1, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_1 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala31" data-modal-show="modala31"
                                                    data-modal-toggle="modala31">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_1 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal31" data-modal-show="modal31"
                                                        data-modal-toggle="modal31">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown31" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_1"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_1"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 2 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">2.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_2 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_2) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_2) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_2 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_2 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_2 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_2 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_2 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_2, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_2 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala32" data-modal-show="modala32"
                                                    data-modal-toggle="modala32">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_2 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal32" data-modal-show="modal32"
                                                        data-modal-toggle="modal32">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown32" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_2"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_2"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 3 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">3.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_3 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_3) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_3) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_3 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_3 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_3 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_3 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_3 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_3, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_3 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala33" data-modal-show="modala33"
                                                    data-modal-toggle="modala33">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_3 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal33" data-modal-show="modal33"
                                                        data-modal-toggle="modal33">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown33" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_3"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_3"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 4 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">4.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_4 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_4) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_4) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_4 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_4 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_4 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_4 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_4 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_4, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_4 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala34" data-modal-show="modala34"
                                                    data-modal-toggle="modala34">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_4 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal34" data-modal-show="modal34"
                                                        data-modal-toggle="modal34">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown34" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_4"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_4"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 5 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">5.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_5 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_5) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_5) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_5 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_5 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_5 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_5 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_5 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_5, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_5 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala35" data-modal-show="modala35"
                                                    data-modal-toggle="modala35">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_5 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal35" data-modal-show="modal35"
                                                        data-modal-toggle="modal35">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown35" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_5"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_5"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 6 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">6.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_6 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_6) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_6) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_6 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_6 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_6 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_6 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_6 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_6, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_6 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala36" data-modal-show="modala36"
                                                    data-modal-toggle="modala36">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_6 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal36" data-modal-show="modal36"
                                                        data-modal-toggle="modal36">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown36" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_6"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_6"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 7 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">7.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_7 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_7) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_7) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_7 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_7 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_7 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_7 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_7 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_7, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_7 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala37" data-modal-show="modala37"
                                                    data-modal-toggle="modala37">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_7 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal37" data-modal-show="modal37"
                                                        data-modal-toggle="modal37">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown37" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_7"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_7"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 8 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">8.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_8 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_8) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_8) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_8 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_8 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_8 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_8 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_8 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_8, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_8 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala38" data-modal-show="modala38"
                                                    data-modal-toggle="modala38">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_8 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal38" data-modal-show="modal38"
                                                        data-modal-toggle="modal38">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown38" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_8"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_8"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 9 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">9.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_9 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_9) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_9) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_9 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_9 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_9 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_9 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_9 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_9, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_9 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala39" data-modal-show="modala39"
                                                    data-modal-toggle="modala39">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_9 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal39" data-modal-show="modal39"
                                                        data-modal-toggle="modal39">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown39" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_9"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_9"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 10 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">10.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_mnftr_10 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_10) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_mnftr_10) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_mnftr_10 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_mnftr_pa_10 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_mnftr_pa_10 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_mnftr_10 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_mnftr_pa_10 != '')
                                                Rp{{ number_format($koneksipa->mny_mnftr_pa_10, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_10 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala310" data-modal-show="modala310"
                                                    data-modal-toggle="modala310">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_mnftr_10 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal310" data-modal-show="modal310"
                                                        data-modal-toggle="modal310">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown310" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_mnftr_pa_10"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_mnftr_10"
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
                        {{-- PA EPQ --}}
                        {{-- awal standar formulir --}}
                        <div class="flex space-x-2 items-center justify-between">
                            <p class="font-medium text-lg bg-gray-800 px-4 py-1 w-fit text-white mb-2 rounded">
                                EPQ (Estimate Price Quotation)
                            </p>
                            {{-- tombol form --}}
                        </div>
                        {{-- akhir standar formulir --}}

                        <div class="overflow-x-auto rounded-md mb-5">
                            <table class="w-full">
                                <thead class="bg-gray-300 text-gray-700">
                                    <th class="py-2 w-[5%] font-medium">No.</th>
                                    <th class="w-[45%]  font-medium">Nama File</th>
                                    <th class="w-[11%]  font-medium">Diunggah oleh</th>
                                    <th class="w-[10%]  font-medium">Terakhir diubah</th>
                                    <th class="w-[14%]  font-medium">Jumlah PA</th>
                                    <th class="w-[14%]  font-medium">Aksi</th>
                                </thead>
                                <tbody class="text-left border">
                                    {{-- 1 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">1.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_epq_1 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_1) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_1) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_epq_1 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_epq_pa_1 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_epq_pa_1 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_epq_1 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_epq_pa_1 != '')
                                                Rp{{ number_format($koneksipa->mny_epq_pa_1, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_1 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala41" data-modal-show="modala41"
                                                    data-modal-toggle="modala41">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_1 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal41" data-modal-show="modal41"
                                                        data-modal-toggle="modal41">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown41" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_epq_pa_1"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_epq_1"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 2 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">2.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_epq_2 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_2) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_2) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_epq_2 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_epq_pa_2 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_epq_pa_2 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_epq_2 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_epq_pa_2 != '')
                                                Rp{{ number_format($koneksipa->mny_epq_pa_2, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_2 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala42" data-modal-show="modala42"
                                                    data-modal-toggle="modala42">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_2 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal42" data-modal-show="modal42"
                                                        data-modal-toggle="modal42">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown42" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_epq_pa_2"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_epq_2"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>

                                    {{-- 3 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">3.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_epq_3 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_3) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_3) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_epq_3 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_epq_pa_3 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_epq_pa_3 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_epq_3 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_epq_pa_3 != '')
                                                Rp{{ number_format($koneksipa->mny_epq_pa_3, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_3 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala43" data-modal-show="modala43"
                                                    data-modal-toggle="modala43">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_3 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal43" data-modal-show="modal43"
                                                        data-modal-toggle="modal43">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown43" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_epq_pa_3"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_epq_3"
                                            value="{{ date('Y-m-d') }}">
                                    </tr>

                                    {{-- 4 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">4.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_epq_4 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_4) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_4) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_epq_4 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_epq_pa_4 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_epq_pa_4 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_epq_4 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_epq_pa_4 != '')
                                                Rp{{ number_format($koneksipa->mny_epq_pa_4, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_4 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala44" data-modal-show="modala44"
                                                    data-modal-toggle="modala44">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_4 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal44" data-modal-show="modal44"
                                                        data-modal-toggle="modal44">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown44" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_epq_pa_4"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_epq_4"
                                            value="{{ date('Y-m-d') }}">

                                    </tr>
                                    {{-- 5 --}}
                                    <tr
                                        class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border-b">
                                        <td class="py-4 font-bold text-center">5.</td>
                                        <td class="flex items-center my-4">

                                            @if ($koneksipa->pa_epq_5 != '')
                                                <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_5) }}"
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
                                            <a href="{{ asset('storage/supervisor/project/03_02_PR/' . $koneksipa->pa_epq_5) }}"
                                                target="blank" download="" class="hover:underline">
                                                {{ $koneksipa->pa_epq_5 }}</a>
                                            {{-- == --}}

                                        </td>
                                        <td>
                                            @if ($koneksipa->up_by_epq_pa_5 != '')
                                                <div
                                                    class="items-center py-1 px-2 text-sm font-medium text-center text-white bg-orange-500 w-[100] mx-auto rounded">
                                                    {{ $koneksipa->up_by_epq_pa_5 }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $koneksipa->date_pa_epq_5 }}</td>
                                        <td>
                                            @if ($koneksipa->mny_epq_pa_5 != '')
                                                Rp{{ number_format($koneksipa->mny_epq_pa_5, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td class="space-y-2 py-3 px-2">
                                            @if (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_5 == '')
                                                <button type="button"
                                                    class="px-3 py-1 border-gray-600 border-2 rounded-lg text-white bg-gray-600 hover:bg-white hover:text-gray-600 font-medium text-md"
                                                    data-modal-target="modala45" data-modal-show="modala45"
                                                    data-modal-toggle="modala45">
                                                    + Tambah dokumen
                                                </button>
                                            @elseif (
                                                ($koneksipa->status_pa_02 == '-' || $koneksipa->status_pa_02 == 'Revisi Purchasing - PA') &&
                                                    $koneksipa->pa_epq_5 != '' &&
                                                    $koneksipa->status_pa_02 != 'Complete' &&
                                                    $koneksipa->status_pa_02 != 'Waiting Approval')
                                                <div class="justify-center flex space-x-2">
                                                    <button type="button"
                                                        class=" text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                                                        data-modal-target="modal45" data-modal-show="modal45"
                                                        data-modal-toggle="modal45">Ubah</button>
                                                    <button data-dropdown-toggle="dropdown45" type="button"
                                                        class=" text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="22" fill="white" viewBox="0 0 48 48">
                                                            <path
                                                                d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                        <input type="text" hidden name="as_up_by_epq_pa_5"
                                            value="{{ Auth::user()->first_name }}">
                                        <input type="date" hidden name="as_date_pa_epq_5"
                                            value="{{ date('Y-m-d') }}">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Akhir epq --}}
                    </div>
                </div>
                {{-- tabcontent --}}
            </div>

            {{-- bungkus --}}

            {{-- modal tambah --}}
            @php
                $t = range(1, 50);
            @endphp
            {{-- tambah parts --}}
            @foreach ($t as $index => $number)
                <div id="modala1{{ $number }}"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                <p class="text-2xl font-semibold text-gray-900 font-mono">
                                    Tambah dokumen dan nilai finansial - PA Parts
                                </p>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    onclick="simulateEscape()">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal footer -->
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <p class="text-sm font-bold">*Pastikan isi kedua bidang isian (file & nilai
                                    finansial)</p>
                                <div class="items-center justify-center w-full border my-4">
                                    <div class="grid grid-cols-2">
                                        <input type="file"name="as_pa_parts_{{ $number }}"
                                            id="">
                                        <div class="">
                                            <input type="text" id="base-input"
                                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                placeholder="Sesuaikan nilai finansial dengan dokumen"
                                                min="0" max="999999999999"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                name="as_mny_parts_pa_{{ $number }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- tambah pekerjaan jasa --}}
            @foreach ($t as $index => $number)
                <div id="modala2{{ $number }}"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                <p class="text-2xl font-semibold text-gray-900 font-mono">
                                    Tambah dokumen dan nilai finansial - PA Pekerjaan/jasa
                                </p>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    onclick="simulateEscape()">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <p class="text-sm font-bold">*Pastikan isi kedua bidang isian (file & nilai
                                    finansial)
                                    untuk dapat mengubah ajuan</p>
                                <div class="items-center justify-center w-full border my-4">
                                    <div class="grid grid-cols-2">
                                        <input type="file"name="as_pa_jasa_{{ $number }}" id="">
                                        <div class="">
                                            <input type="text" id="base-input"
                                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                placeholder="Sesuaikan nilai finansial dengan dokumen"
                                                min="0" max="999999999999"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                name="as_mny_jasa_pa_{{ $number }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- tambah manufaktur --}}
            @foreach ($t as $index => $number)
                <div id="modala3{{ $number }}"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                <p class="text-2xl font-semibold text-gray-900 font-mono">
                                    Tambah dokumen dan nilai finansial - PA Manufaktur
                                </p>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    onclick="simulateEscape()">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <div class="items-center justify-center w-full border my-4">
                                    <div class="grid grid-cols-2">
                                        <input type="file"name="as_pa_mnftr_{{ $number }}"
                                            id="">
                                        <div class="">
                                            <input type="text" id="base-input"
                                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                placeholder="Sesuaikan nilai finansial dengan dokumen"
                                                min="0" max="999999999999"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                name="as_mny_mnftr_pa_{{ $number }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- tambah epq --}}
            @foreach ($t as $index => $number)
                <div id="modala4{{ $number }}"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 inset-0 justify-center items-center w-full max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-5 py-3 border-b rounded-t">
                                <p class="text-2xl font-semibold text-gray-900 font-mono">
                                    Tambah dokumen dan nilai finansial - EPQ
                                </p>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    onclick="simulateEscape()">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <div class="items-center justify-center w-full border my-4">
                                    <div class="grid grid-cols-2">
                                        <input type="file"name="as_pa_epq_{{ $number }}" id="">
                                        <div class="">
                                            <input type="text" id="base-input"
                                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                placeholder="Sesuaikan nilai finansial dengan dokumen"
                                                min="0" max="999999999999"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                name="as_mny_epq_pa_{{ $number }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-orange-500 w-full hover:bg-orange-600 text-white font-bold py-2 rounded-b-lg shadow-md">Submit</button>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- modal ubah --}}
            @php
                $m = range(1, 50);
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="py-2 px-5">
                                <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                                <div class="grid grid-cols-3 space-x-2">
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Nama dokumen:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'pa_parts_' . $number} }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Jumlah:
                                        </p>
                                        <p class="text-gray-900">

                                            Rp{{ number_format($koneksipa->{'mny_parts_pa_' . $number}, 0, ',', '.') }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Oleh:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'up_by_parts_pa_' . $number} }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <p class="font-light text-lg">
                                    Unggah dokumen dan nilai finansial baru
                                </p>
                                <p class="text-sm font-bold">*Pastikan isi kedua bidang isian (file & nilai finansial)
                                    untuk dapat mengubah ajuan</p>
                                <div class="items-center justify-center w-full border my-4">
                                    @if ($koneksipa->{'pa_parts_' . $number} != '')
                                        <div class="grid grid-cols-2">
                                            <input type="file"name="as_pa_parts_{{ $number }}"
                                                id="">
                                            <div class="">
                                                <input type="text" id="base-input"
                                                    class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                    value="{{ isset($koneksipa->{'mny_parts_pa_' . $number}) ? number_format($koneksipa->{'mny_parts_pa_' . $number}, 0, ',', '.') : '' }}"
                                                    min="0" max="999999999999"
                                                    oninput="validity.valid||(value='');"
                                                    name="as_mny_parts_pa_{{ $number }}">
                                            </div>
                                        </div>
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="py-2 px-5">
                                <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                                <div class="grid grid-cols-3 space-x-2">
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Nama dokumen:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'pa_jasa_' . $number} }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Jumlah:
                                        </p>
                                        <p class="text-gray-900">

                                            Rp{{ number_format($koneksipa->{'mny_jasa_pa_' . $number}, 0, ',', '.') }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Oleh:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'up_by_jasa_pa_' . $number} }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <p class="font-light text-lg">
                                    Unggah dokumen dan nilai finansial baru
                                </p>
                                <p class="text-sm font-bold">*Pastikan isi kedua bidang isian (file & nilai finansial)
                                    untuk dapat mengubah ajuan</p>
                                <div class="items-center justify-center w-full border my-4">
                                    @if ($koneksipa->{'pa_jasa_' . $number} != '')
                                        <div class="grid grid-cols-2">
                                            <input type="file"name="as_pa_jasa_{{ $number }}"
                                                id="">
                                            <div class="">
                                                <input type="text" id="base-input"
                                                    class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                    value="{{ isset($koneksipa->{'mny_jasa_pa_' . $number}) ? number_format($koneksipa->{'mny_jasa_pa_' . $number}, 0, ',', '.') : '' }}"
                                                    min="0" max="999999999999"
                                                    oninput="validity.valid||(value='');"
                                                    name="as_mny_jasa_pa_{{ $number }}">
                                            </div>
                                        </div>
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="py-2 px-5">
                                <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                                <div class="grid grid-cols-3 space-x-2">
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Nama dokumen:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'pa_mnftr_' . $number} }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Jumlah:
                                        </p>
                                        <p class="text-gray-900">

                                            Rp{{ number_format($koneksipa->{'mny_mnftr_pa_' . $number}, 0, ',', '.') }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Oleh:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'up_by_mnftr_pa_' . $number} }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <p class="font-light text-lg">
                                    Unggah dokumen dan nilai finansial baru
                                </p>
                                <p class="text-sm font-bold">*Pastikan isi kedua bidang isian (file & nilai finansial)
                                    untuk dapat mengubah ajuan</p>
                                <div class="items-center justify-center w-full border my-4">
                                    @if ($koneksipa->{'pa_mnftr_' . $number} != '')
                                        <div class="grid grid-cols-2">
                                            <input type="file"name="as_pa_mnftr_{{ $number }}"
                                                id="">
                                            <div class="">
                                                <input type="text" id="base-input"
                                                    class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                    value="{{ isset($koneksipa->{'mny_mnftr_pa_' . $number}) ? number_format($koneksipa->{'mny_mnftr_pa_' . $number}, 0, ',', '.') : '' }}"
                                                    min="0" max="999999999999"
                                                    oninput="validity.valid||(value='');"
                                                    name="as_mny_mnftr_pa_{{ $number }}">
                                            </div>
                                        </div>
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="py-2 px-5">
                                <p class="font-light text-lg mb-2">Dokumen sebelumnya</p>
                                <div class="grid grid-cols-3 space-x-2">
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Nama dokumen:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'pa_epq_' . $number} }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Jumlah:
                                        </p>
                                        <p class="text-gray-900">
                                            Rp{{ number_format($koneksipa->{'mny_epq_pa_' . $number}, 0, ',', '.') }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-600">
                                            Oleh:
                                        </p>
                                        <p class="text-gray-900">
                                            {{ $koneksipa->{'up_by_epq_pa_' . $number} }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="items-center px-5 py-2 border-t border-gray-200 rounded-b">
                                <p class="font-light text-lg">
                                    Unggah dokumen baru
                                </p>
                                <p class="text-sm font-bold">*Pastikan isi kedua bidang isian (file & nilai finansial)
                                    untuk dapat mengubah ajuan</p>
                                <div class="items-center justify-center w-full border my-4">
                                    @if ($koneksipa->{'pa_epq_' . $number} != '')
                                        <div class="grid grid-cols-2">
                                            <input type="file"name="as_pa_epq_{{ $number }}"
                                                id="">
                                            <input type="text" id="base-input"
                                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                                value="{{ isset($koneksipa->{'mny_epq_pa_' . $number}) ? number_format($koneksipa->{'mny_epq_pa_' . $number}, 0, ',', '.') : '' }}"
                                                min="0" max="999999999999"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                name="as_mny_epq_pa_{{ $number }}">
                                        </div>
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
        </form>
    </div>

    {{-- Akhir progress file --}}
    @if (
        $koneksipa->pa_parts_1 ||
            $koneksipa->pa_parts_2 ||
            $koneksipa->pa_parts_3 ||
            $koneksipa->pa_parts_4 ||
            $koneksipa->pa_parts_5 ||
            $koneksipa->pa_parts_6 ||
            $koneksipa->pa_parts_7 ||
            $koneksipa->pa_parts_8 ||
            $koneksipa->pa_parts_9 ||
            $koneksipa->pa_parts_10 ||
            $koneksipa->pa_parts_11 ||
            $koneksipa->pa_parts_12 ||
            $koneksipa->pa_parts_13 ||
            $koneksipa->pa_parts_14 ||
            $koneksipa->pa_parts_15 ||
            $koneksipa->pa_parts_16 ||
            $koneksipa->pa_parts_17 ||
            $koneksipa->pa_parts_18 ||
            $koneksipa->pa_parts_19 ||
            $koneksipa->pa_parts_20 ||
            $koneksipa->pa_parts_21 ||
            $koneksipa->pa_parts_22 ||
            $koneksipa->pa_parts_23 ||
            $koneksipa->pa_parts_24 ||
            $koneksipa->pa_parts_25 ||
            $koneksipa->pa_parts_26 ||
            $koneksipa->pa_parts_27 ||
            $koneksipa->pa_parts_28 ||
            $koneksipa->pa_parts_29 ||
            $koneksipa->pa_parts_30 ||
            $koneksipa->pa_parts_31 ||
            $koneksipa->pa_parts_32 ||
            $koneksipa->pa_parts_33 ||
            $koneksipa->pa_parts_34 ||
            $koneksipa->pa_parts_35 ||
            $koneksipa->pa_parts_36 ||
            $koneksipa->pa_parts_37 ||
            $koneksipa->pa_parts_38 ||
            $koneksipa->pa_parts_39 ||
            $koneksipa->pa_parts_40 ||
            $koneksipa->pa_parts_41 ||
            $koneksipa->pa_parts_42 ||
            $koneksipa->pa_parts_43 ||
            $koneksipa->pa_parts_44 ||
            $koneksipa->pa_parts_45 ||
            $koneksipa->pa_epq_1 ||
            $koneksipa->pa_epq_2 ||
            $koneksipa->pa_epq_3 ||
            $koneksipa->pa_epq_4 ||
            $koneksipa->pa_epq_5 ||
            $koneksipa->pa_jasa_1 ||
            $koneksipa->pa_jasa_2 ||
            $koneksipa->pa_jasa_3 ||
            $koneksipa->pa_jasa_4 ||
            $koneksipa->pa_jasa_5 ||
            $koneksipa->pa_jasa_5 ||
            $koneksipa->pa_jasa_6 ||
            $koneksipa->pa_jasa_7 ||
            $koneksipa->pa_jasa_8 ||
            $koneksipa->pa_jasa_9 ||
            $koneksipa->pa_jasa_10 ||
            $koneksipa->pa_jasa_11 ||
            $koneksipa->pa_jasa_12 ||
            $koneksipa->pa_jasa_13 ||
            $koneksipa->pa_jasa_14 ||
            $koneksipa->pa_jasa_15 ||
            $koneksipa->pa_jasa_16 ||
            $koneksipa->pa_jasa_17 ||
            $koneksipa->pa_jasa_18 ||
            $koneksipa->pa_jasa_19 ||
            $koneksipa->pa_jasa_20 ||
            $koneksipa->pa_jasa_21 ||
            $koneksipa->pa_jasa_22 ||
            $koneksipa->pa_jasa_23 ||
            $koneksipa->pa_jasa_24 ||
            $koneksipa->pa_jasa_25 ||
            $koneksipa->pa_jasa_26 ||
            $koneksipa->pa_jasa_27 ||
            $koneksipa->pa_jasa_28 ||
            $koneksipa->pa_jasa_29 ||
            $koneksipa->pa_jasa_30 ||
            $koneksipa->pa_mnftr_1 ||
            $koneksipa->pa_mnftr_2 ||
            $koneksipa->pa_mnftr_3 ||
            $koneksipa->pa_mnftr_4 ||
            $koneksipa->pa_mnftr_5 ||
            $koneksipa->pa_mnftr_6 ||
            $koneksipa->pa_mnftr_7 ||
            $koneksipa->pa_mnftr_8 ||
            $koneksipa->pa_mnftr_9 ||
            $koneksipa->pa_mnftr_10 != '')
        {{-- Tombol Approve --}}
        <div class="grid grid-cols-2 gap-2 mt-3 mb-10">
            @if ($koneksipa->status_pa_02 != 'Complete')
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" name="check" value="donecheck" hidden>
                    <input type="text" name="progress" value="Purchasing - PA" hidden>

                    <input type="text" name="status_purchasing" value="Purchasing - PA" hidden>
                    <input type="date" hidden name="status_purchasing_date" value="{{ date('Y-m-d') }}">

                    <input type="text" name="status_pa_02" value="Complete" hidden>
                    <input type="date" hidden name="status_pa_02_date" value="{{ date('Y-m-d') }}">

                    <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                    <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>

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
                                    Setujui Ajuan
                                </p>
                            </div>
                        </button>
                    </div>
                </form>
            @endif
            @if ($koneksipa->status_pa_02 != 'Revisi Purchasing - PA' && $koneksipay->status_pay_04 != 'Complete' && $koneksicl->status_cl != 'Complete')
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" name="check" value="donecheck" hidden>
                    <input type="text" name="progress" value="Waiting Approval Purchasing - PA" hidden>

                    <input type="text" name="status_purchasing" value="Waiting Approval Purchasing - PA"
                        hidden>
                    <input type="date" hidden name="status_purchasing_date" value="{{ date('Y-m-d') }}">

                    <input type="text" name="status_pa_02" value="Revisi Purchasing - PA" hidden>
                    <input type="date" hidden name="status_pa_02_date" value="{{ date('Y-m-d') }}">

                    <input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
                    <input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>

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
                                Revisi Ajuan
                            </p>
                        </div>
                    </button>
                </form>
                @else
                <p class="flex text-center text-sm items-center justify-center p-2 font-semibold text-white bg-gray-800 border-yellow-400 border-8">
                    Jika ingin merevisi tahap ini, silahkan nyatakan revisi pada tahap PAY terlebih dahulu. </p>
            @endif
        </div>
    @endif
    {{-- Akhir Tombol Approve --}}
    </div>

    {{-- hapus PA --}}
    @php
        $num = range(1, 50);
    @endphp
    {{-- 1 --}}
    @foreach ($num as $index => $number)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown1{{ $number }}"
                class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                @if ($number)
                    <input type="text" hidden name="up_by_parts_pa_{{ $number }}" value="">
                    <input type="text" hidden name="date_pa_parts_{{ $number }}" value="">
                    <input type="text" hidden name="mny_parts_pa_{{ $number }}" value="">
                    <input type="text" hidden name="pa_parts_{{ $number }}" value="">
                @endif
                <p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach

    {{-- 2 --}}
    @foreach ($num as $index => $number)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown2{{ $number }}"
                class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                @if ($number)
                    <input type="text" hidden name="up_by_jasa_pa_{{ $number }}" value="">
                    <input type="text" hidden name="date_pa_jasa_{{ $number }}" value="">
                    <input type="text" hidden name="mny_jasa_pa_{{ $number }}" value="">
                    <input type="text" hidden name="pa_jasa_{{ $number }}" value="">
                @endif
                <p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach

    {{-- 3 --}}
    @foreach ($num as $index => $number)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown3{{ $number }}"
                class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                @if ($number)
                    <input type="text" hidden name="up_by_mnftr_pa_{{ $number }}" value="">
                    <input type="text" hidden name="date_pa_mnftr_{{ $number }}" value="">
                    <input type="text" hidden name="mny_mnftr_pa_{{ $number }}" value="">
                    <input type="text" hidden name="pa_mnftr_{{ $number }}" value="">
                @endif
                <p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach

    {{--  4 --}}
    @foreach ($num as $index => $number)
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="dropdown4{{ $number }}"
                class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
                @if ($number)
                    <input type="text" hidden name="up_by_epq_pa_{{ $number }}" value="">
                    <input type="text" hidden name="date_pa_epq_{{ $number }}" value="">
                    <input type="text" hidden name="pa_epq_{{ $number }}" value="">
                @endif
                <p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
                <div class="grid grid-cols-1 space-x-2 mt-2">
                    <button type="submit"
                        class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
                        Ya, saya yakin
                    </button>
                </div>
            </div>
        </form>
    @endforeach
    {{-- tutup bungkus --}}

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

        function formatAngka(input) {
            // Menghilangkan karakter selain angka
            let angka = input.value.replace(/[^\d]/g, '');

            // Menambahkan tanda titik setiap ribuan
            angka = angka.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            // Update nilai input
            input.value = angka;
        }

        const kartuProyekId = @json($viewdataproject->id);
    const elementId = "countdown-" + kartuProyekId;

    const serverTimeStr = "{{ $serverTime }}"; // Menggunakan waktu server yang disertakan
    const serverTime = new Date(serverTimeStr);

    const deadlineStr = "{{ $viewdataproject->date_end }}";
    const deadline = new Date(deadlineStr);

    // Menggunakan waktu UTC untuk konsistensi
    const sekarang = new Date(
        
    );

    const selisihWaktu = deadline - sekarang;
    const hari = Math.floor(selisihWaktu / (1000 * 60 * 60 * 24));

    let warnaLatarBelakang = '';

    if (selisihWaktu <= 0) {
        document.getElementById(elementId).innerText = "Proyek telah melewati deadline";
        warnaLatarBelakang = 'red';
    } else {
        const jam = Math.floor((selisihWaktu % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const menit = Math.floor((selisihWaktu % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById(elementId).innerText = `Deadline dalam ${hari} hari`;

        // Atur warna latar belakang berdasarkan rentang hari
        if (hari > 150) {
            warnaLatarBelakang = 'green';
        } else if (hari > 100) {
            warnaLatarBelakang = 'CornflowerBlue';
        } else if (hari > 70) {
            warnaLatarBelakang = 'GoldenRod';
        } else if (hari > 30) {
            warnaLatarBelakang = 'DarkOrange';
        } else {
            warnaLatarBelakang = 'red';
        }
    }

    // Atur latar belakang dan warna teks
    document.getElementById(elementId).style.backgroundColor = warnaLatarBelakang;
    document.getElementById(elementId).style.color = 'white';

    let is_project_closed = '{{ $viewdataproject->progress }}'

        if (hari < 0 && is_project_closed != 'Closed') {
            text =
                '<p class="bg-red-600 uppercase p-3 mt-2 text-center font-bold text-white">Proyek melewati deadline!, silahkan sesuaikan deadline proyek (tanggal selesai).</p>'

            document.getElementById('DeadlineCheck').innerHTML = text
        } else {
            console.log('proyek belum melewati deadline')
        }

    /* console.log('Server Time (ISO):', "{{ $serverTime }}");
    console.log('Deadline (ISO):', "{{ $viewdataproject->date_end }}");
    console.log('Time Difference:', {{ $timeDiff }});
    console.log('data yang dipass:', hari) */
    </script>
</div>
{{-- tutup bungkus --}}

<div id="submit-1" class="-mt-52"></div>
</div>
