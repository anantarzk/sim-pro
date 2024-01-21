@extends('layouts.layout_supervisor')

@section('title_page', 'Dashboard OB')

@section('konten')

    <head>
        <meta http-equiv="refresh" content="300">
    </head>
    <div class="my-20 mx-10">

        <div class="flex justify-between items-center">
            <p class="text-3xl font-light">Selamat Datang, {{ Auth::user()->name }}</p>
            <div class="">
                <span class="hidden">{{ date_default_timezone_set('Asia/Jakarta') }}</span>
                <p class=" font-light text-2xl">
                    {{ $ldate = date('D, d-M-Y') }}
                </p>
            </div>
        </div>

            @if (Session::has('status'))
            <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="mx-auto mt-2 ">
            <!-- component -->
            <div class="w-full rounded">
                <!-- Tabs -->
                <ul id="tabs" class="flex bg-gray-100 text-center rounded-md">
                    <li class="w-full py-2 font-semibold text-gray-800 rounded-lg opacity-50 hover:bg-gray-200">
                        <a id="default-tab" href="#first" class="hover:text-gray-500">
                            Dashboard OB - Supervisor
                        </a>
                    </li>
                    <li
                        class="w-full py-2 font-semibold text-gray-800 rounded-lg opacity-50 hover:bg-gray-200 flex justify-center ">
                        <a href="#second" class="hover:text-gray-500">
                            Ajuan menunggu persetujuan ({{ $totalprojectapproval }} Menunggu)
                        </a>
                    </li>
                </ul>

                <div id="tab-contents" class="">
                    <div id="first" class="py-4">

                        <div class="flex  max-h-fit">
                            <div class=" w-1/3 flex flex-col mr-2">
                                <p class="text-2xl font-medium mb-1">Yearly Project</p>
                                <div class="bg-white border shadow-md rounded mb-2 flex h-fit">
                                    <div class="w-1/2  p-1 "><canvas id="obproject" class=""></canvas>
                                    </div>
                                    <div class="w-1/2  p-1">
                                        <p class="font-bold text-xl text-center">Project Status</p>
                                        <hr>
                                        <p class="text-sm">Cancelled Projects:</p>
                                        <p class="font-semibold text-lg">{{ $cancel }} Projects</p>
                                        <hr>
                                        <p class="text-sm">Not Started Projects:</p>
                                        <p class="font-semibold text-lg">{{ $not_started }} Projects</p>
                                        <hr>
                                        <p class="text-sm">In Progress Projects:</p>
                                        <p class="font-semibold text-lg">{{ $in_progress }} Projects</p>
                                        <hr>
                                        <p class="text-sm">Finished Projects:</p>
                                        <p class="font-semibold text-lg">{{ $finished }} Projects</p>
                                        <hr>

                                        <div class="justify-center items-center">
                                            <p class="text-sm text-center">Total OB Projects:</p>
                                            <p class="font-semibold text-xl text-center">{{ $totalproject }}
                                                Projects
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="bg-white border shadow-md rounded flex">
                                    <div class="w-1/2  p-1"><canvas id="FR" class="max-h-64"></canvas></div>

                                    <div class="w-1/2  p-1">
                                        <p class="font-bold text-xl text-center">FR Status</p>
                                        <hr>
                                        <p class="text-sm">Approved FR:</p>
                                        <p class="font-semibold text-lg">{{ $approved_fr }} Projects</p>
                                        <hr>
                                        <p class="text-sm">Waiting Approval FR:</p>
                                        <p class="font-semibold text-lg">{{ $on_progress_fr }} Projects</p>
                                        <hr>
                                        <p class="text-sm">&nbsp;</p>
                                        <p class="font-semibold text-lg">&nbsp;</p>
                                        <br>

                                        <div class="justify-center items-center ">
                                            <p class="text-sm text-center">Total FR:</p>
                                            <p class="font-semibold text-xl text-center">{{ $totalproject }}
                                                Projects
                                            </p>
                                        </div>
                                        <br>
                                    </div>
                                </div>

                            </div>
                            <div class=" w-2/3">
                                <p class="text-2xl font-medium mb-1">Budget Control</p>
                                <div class="flex flex-col">
                                    <div class="bg-white border shadow-md rounded mb-2 ">

                                        <div class="flex max-h-80">
                                            <div class="w-[60%] p-2"><canvas id="bcontrol"></canvas></div>

                                            <div class="w-[40%] p-2 ">

                                                <span class="text-xl font-semibold">Planned Target vs Actual Payment
                                                    <div class="my-1">

                                                        <a href="/budget-control-ob-supervisor">
                                                            <button
                                                                class="hover:bg-blue-500 border-blue-500 border-2 hover:text-white text-blue-500 rounded py-1 px-1 flex items-center ">
                                                                <p class="text-sm">Ubah Planned Target Payment</p>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </span>
                                                <p class="text-lg mt-2">Planned Target Payment:</p>
                                                <p class="font-semibold text-lg">
                                                    Rp{{ number_format($sum_planned, 0, ',', '.') }}</p>
                                                </p>
                                                <hr>
                                                <p class="text-lg mt-1">Kumulatif Actual Payment:</p>
                                                <p class="font-semibold text-lg">
                                                    Rp{{ number_format($mny_pay, 0, ',', '.') }}</p>
                                                <hr>
                                                <p class="text-lg mt-1">YearOB Budget:</p>
                                                <p class="font-semibold text-lg">
                                                    Rp{{ number_format($sum_ob, 0, ',', '.') }}</p>
                                                </p>
                                                <hr>
                                                <p class="text-lg mt-2">Difference <span class="text-xs">(YearOB
                                                        Budget - Kumulatif Actual Payment)</span>:</p>
                                                <p class="font-semibold text-lg">
                                                    Rp{{ number_format($total_sisa_budget_ob, 0, ',', '.') }}</p>
                                                </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white border shadow-md rounded px-2 py-3">
                                        <hr>
                                        <canvas id="finance" class="max-h-60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- dua --}}
                    <div id="second" class="hidden p-1">
                        <div class="mt-3">
                            <div class="mx-auto w-full">
                                <div class="flex justify-between my-2">
                                    <div
                                        class="bg-red-600 px-4 py-2 w-fit rounded-md text-white flex items-center space-x-3">
                                        <p class="text-4xl font-medium">
                                            {{ $totalprojectapproval }}
                                        </p>
                                        <p class="font-normal text-lg">
                                            Ajuan menunggu persetujuan
                                        </p>
                                    </div>
                                </div>
                                <div class="rounded-lg overflow-hidden bg-white">
                                    <table class="w-full">
                                        <thead
                                            class="text-md text-gray-800 bg-gray-300 text-center">
                                            <th class="p-2 w-[5%]">No.</th>
                                            <th class="w-[25%]">Nama Proyek</th>
                                            <th class="w-[10%]">Fase</th>
                                            <th class="w-[15%]">Diajukan Oleh</th>
                                            <th class="w-[15%]">Tanggal Ajuan</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($project as $object)
                                                <tr
                                                    class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border">
                                                    {{-- Loop i++ --}}
                                                    <td
                                                        class="p-2 font-medium text-center text-nite bg-teal-600 whitespace-nowrap text-white">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="p-2 text-left">
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
                                                                    class="mb-1 text-base font-normal tracking-normal text-gray-900 hover:underline">
                                                                    {{ $object->project_name }}
                                                                </p>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td class="p-2 text-center">
                                                        {{ $object->progress }}
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="py-1 px-2 text-sm font-medium mx-auto text-white bg-orange-500 rounded w-fit">
                                                            {{ $object->last_update_name }}
                                                        </div>
                                                    </td>
                                                    <td class="p-2 text-center">
                                                        {{ $object->last_update_date }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $project }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  @dd($request->all()); --}}
    {{-- @dd($jan_mny_pay, $feb_mny_pay, $mar_mny_pay); --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    <script type="module" src="{{ asset('./chart.js/chart.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script> --}}
    {{-- <script src="{{ asset('chart.js/chart.js') }}"></script> --}}
    {{-- <script src="{{ mix('node_modules/chart.js/dist/chart.js') }}"></script> --}}
    <script>
        // import Chart from 'chart.js/auto'
        // import {
        //     colors
        // } from 'laravel-mix/src/Log';

        let tabsContainer = document.querySelector("#tabs");
        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);
        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();
                let tabName = this.getAttribute("href");
                let tabContents = document.querySelector("#tab-contents");
                for (let i = 0; i < tabContents.children.length; i++) {
                    tabTogglers[i].parentElement.classList.remove("border-orange-500", "border-b", "-mb-px",
                        "opacity-100", );
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");
                }
                e.target.parentElement.classList.add("border-orange-500", "border-b-4", "-mb-px",
                    "opacity-100");
            });
        });
        document.getElementById("default-tab").click();


        document.addEventListener('DOMContentLoaded', function() {
            const obp = {
                labels: [
                    'Not Started', 'Cancelled', 'In Progress', 'Finished'
                ],
                datasets: [{
                    data: ['{{ $not_started }}', '{{ $cancel }}', '{{ $in_progress }}',
                        '{{ $finished }}'
                    ],
                    fill: true,
                    backgroundColor: [
                        '#314751',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        '#09FA5E',
                    ],
                    borderWidth: 4
                }, ],
            };
            const configobp = {
                type: "doughnut",
                data: obp,
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom',
                            align: 'center',
                        }
                    }
                },
            };
            new Chart(
                document.getElementById("obproject"),
                configobp
            );
            // FR Status
            const dtFR = {
                labels: [
                    'Approved', 'Waiting Approval',
                ],
                datasets: [{
                    data: ['{{ $approved_fr }}', '{{ $on_progress_fr }}'],
                    fill: true,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 4
                }, ],
            };
            const configFR = {
                type: "doughnut",
                data: dtFR,
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom',
                            align: 'center',
                        }
                    }
                },
            };
            new Chart(
                document.getElementById("FR"),
                configFR
            );
            // Budget control chart
            //  payment per month
            const dtbcontrol = {
                datasets: [
                    //     {
                    //     label: "Accumulative Payment",
                    //     type: "line",
                    //     borderColor: "purple",
                    //     borderWidth: "4",
                    //     pointBorderColor: "orange",
                    //     data: [133, 221, 783, 2478, 4590],
                    //     fill: false
                    // },
                    {
                        label: "Planned Target Payment",
                        type: "bar",
                        backgroundColor: "#4A93F7",
                        data: ['{{ $planned->planned_1 }}', '{{ $planned->planned_2 }}',
                            '{{ $planned->planned_3 }}',
                            '{{ $planned->planned_4 }}', '{{ $planned->planned_5 }}',
                            '{{ $planned->planned_6 }}', '{{ $planned->planned_7 }}',
                            '{{ $planned->planned_8 }}', '{{ $planned->planned_9 }}',
                            '{{ $planned->planned_10 }}', '{{ $planned->planned_11 }}',
                            '{{ $planned->planned_12 }}'
                        ],
                    }, {
                        label: "Actual Payment",
                        type: "bar",
                        backgroundColor: "#F0172D",
                        backgroundColorHover: "#3e95cd",
                        data: ['{{ $jan_mny_pay }}', '{{ $feb_mny_pay }}', '{{ $mar_mny_pay }}',
                            '{{ $apr_mny_pay }}', '{{ $mei_mny_pay }}', '{{ $jun_mny_pay }}',
                            '{{ $jul_mny_pay }}', '{{ $agu_mny_pay }}', '{{ $sep_mny_pay }}',
                            '{{ $okt_mny_pay }}', '{{ $nov_mny_pay }}', '{{ $des_mny_pay }}'
                        ]
                    }
                ],
                labels: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ],
            }
            const configbcontrol = {
                data: dtbcontrol,
                options: {
                    plugins: {
                        legend: {
                            display: true
                        },
                        tooltip: {
                            callbacks: {
                                label: (uang) => {
                                    const Operasi = uang.raw;
                                    const Display = Operasi.toLocaleString("id-ID");
                                    return `Rp${Display}`
                                }
                            }
                        },
                    }
                },
            };
            new Chart(
                document.getElementById("bcontrol"),
                configbcontrol
            );
            // Financial info semua proyek
            const dtfinance = {
                labels: [
                    'PR', 'PA', 'PO', 'PAY'
                ],
                datasets: [{
                    type: 'line',
                    label: 'Target (Based on Target Payments)',
                    // data ini sama dengan sum planned payments
                    data: ['{{ $sum_planned }}', '{{ $sum_planned }}', '{{ $sum_planned }}',
                        '{{ $sum_planned }}'
                    ],
                    fill: false,
                    borderColor: 'purple'
                }, {
                    data: ['{{ $mny_pr }}', '{{ $mny_pa }}', '{{ $mny_po }}',
                        '{{ $mny_pay }}',
                    ],
                    fill: true,
                    label: 'Kumulatif PR PA PO PAY',
                    backgroundColor: [
                        'orange',
                        'skyblue',
                        '#1BF286',
                        '##fcba03',
                    ],
                    borderWidth: 2
                }, ],
            };
            const configfinance = {
                type: "bar",
                data: dtfinance,
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: "",
                            },
                        },
                        tooltip: {
                            callbacks: {
                                label: (uang) => {
                                    const Operasi = uang.raw;
                                    const Display = Operasi.
                                    toLocaleString("id-ID")
                                    const today = new Date().toLocaleString().slice(0, 10)
                                    return `Total ${today} Rp${Display}`
                                }
                            }
                        },
                    }
                },
            };
            new Chart(
                document.getElementById("finance"),
                configfinance
            );
        }, true);
    </script>
@endsection
