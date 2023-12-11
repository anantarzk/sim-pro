@extends('layouts.layout_supervisor')

@section('title_page', 'Dashboard OB')


{{-- trim --}}

@section('konten')

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
                            Progress Approval ({{ $totalprojectaprroval }} Menunggu)
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
                                        <p class="font-light text-lg">Cancelled Projects:</p>
                                        <p class="font-semibold text-base">{{ $cancel }} Projects</p>
                                        <hr>
                                        <p class="font-light text-lg">Not Started Projects:</p>
                                        <p class="font-semibold text-base">{{ $not_started }} Projects</p>
                                        <hr>
                                        <p class="font-light text-lg">In Progress Projects:</p>
                                        <p class="font-semibold text-base">{{ $in_progress }} Projects</p>
                                        <hr>
                                        <p class="font-light text-lg">Finished Projects:</p>
                                        <p class="font-semibold text-base">{{ $finished }} Projects</p>
                                        <hr>

                                        <div class="justify-center items-center">
                                            <p class="font-light text-lg text-center">Total OB Projects:</p>
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
                                        <p class="font-light text-lg">Approved FR:</p>
                                        <p class="font-semibold text-base">{{ $approved_fr }} Projects</p>
                                        <hr>
                                        <p class="font-light text-lg">Waiting Approval FR:</p>
                                        <p class="font-semibold text-base">{{ $on_progress_fr }} Projects</p>
                                        <hr>
                                        {{-- <p class="font-light text-lg">Not Approved FR:</p>
                                        <p class="font-semibold text-base">{{ $cancel }} Projects</p>
                                         --}}
                                            <p class="font-light text-lg">&nbsp;</p>
                                        <p class="font-semibold text-base">&nbsp;</p>
                                        <br>

                                        <div class="justify-center items-center ">
                                            <p class="font-light text-lg text-center">Total FR:</p>
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
                                                                class="hover:bg-blue-800 bg-blue-600 text-white rounded py-1 px-1 flex items-center ">
                                                                <svg width="18" height="15" viewBox="0 0 10 11"
                                                                    fill="white" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.04888 8.57256L4.57934 7.53013C4.6427 7.48721 4.70607 7.44428 4.74899 7.4034L8.91668 2.32205C9.04341 2.12992 9.02297 1.87646 8.85332 1.72725L6.87474 0.0900165C6.71122 -0.0305787 6.45981 -0.0489746 6.30038 0.15338L2.11225 5.23269C2.06932 5.29605 2.04888 5.35942 2.0264 5.42482L1.49496 8.12493C1.46839 8.58687 1.83835 8.66659 2.04888 8.57256ZM6.66216 1.00163L8.00098 2.10743L4.36881 6.54493L3.04226 5.44731L6.66216 1.00163ZM2.71318 6.27308L3.62071 7.02527L2.45155 7.50765L2.71318 6.27308Z" />
                                                                    <path
                                                                        d="M9.57483 9.16735H2.4311C2.4311 9.16735 0.949208 9.23684 0.89402 8.85666C0.89402 8.83622 0.857229 8.7422 1.04936 8.50918C1.19857 8.31705 1.17609 8.06359 1.00644 7.91438C0.814305 7.76517 0.560851 7.78766 0.411639 7.95731C0.00692999 8.44582 -0.0993574 8.87097 0.0927774 9.25524C0.613994 10.2261 2.36774 9.99721 2.45154 10.0176H9.57483C9.80785 10.0176 9.99998 9.82551 9.99998 9.5925C10.002 9.35744 9.80989 9.16735 9.57483 9.16735Z" />
                                                                </svg>
                                                                <p class="text-sm">Insert/Edit Planned Target</p>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </span>


                                                <p class="font-light text-lg mt-2">Planned Target Payment:</p>
                                                <p class="font-semibold text-base">
                                                    Rp{{ number_format($sum_planned, 0, ',', '.') }}</p>
                                                </p>
                                                <hr>
                                                <p class="font-light text-lg mt-1">Cumulative Actual Payment:</p>
                                                <p class="font-semibold text-base">
                                                    Rp{{ number_format($mny_pay, 0, ',', '.') }}</p>
                                                <hr>
                                                <p class="font-light text-lg mt-1">YearOB Budget:</p>
                                                <p class="font-semibold text-base">
                                                    Rp{{ number_format($sum_ob, 0, ',', '.') }}</p>
                                                </p>
                                                <hr>
                                                <p class="font-light text-lg mt-2">Difference <span class="text-xs">(YearOB
                                                        Budget - Cumulative Actual Payment)</span>:</p>
                                                <p class="font-semibold text-base">
                                                    Rp{{ number_format($total_sisa_budget_ob, 0, ',', '.') }}</p>
                                                </p>
                                                <hr>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="bg-white border shadow-md rounded px-2 py-3">

                                        <p class="text-xl font-light">Financial Tracker - All Projects</p>
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
                                            {{ $totalprojectaprroval }}
                                        </p>
                                        <p class="font-normal text-lg">
                                            Ajuan menunggu approval
                                        </p>
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
                                                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                    {{-- Akhir Tombol Pencarian --}}
                                </div>
                                <div class="rounded-lg overflow-hidden bg-white">
                                    <table class="w-full">
                                        <thead
                                            class="text-md text-white uppercase bg-green-600 text-center  border border-gray-500">
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
                                                        class="p-2 font-medium text-center text-white bg-teal-600 whitespace-nowrap">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="p-2 text-left">
                                                        @if ($object->id == $object->koneksikefr->id_fr_1 &&
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

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    <script type="module" src="{{ asset('./chart.js/chart.js') }}"></script>
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


        document.addEventListener('DOMContentLoaded', function(){
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
                }],
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
                    'PR', 'PA', 'PO', 'Payment'
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
                    label: 'Actual PR PA PO Payment',
                    backgroundColor: [
                        'orange',
                        'skyblue',
                        '#1BF286',
                        '#2F97DE',
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
        },true);
    </script>
@endsection
