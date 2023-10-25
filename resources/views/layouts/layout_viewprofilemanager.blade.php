@extends('layouts.layout_manager')
@section('title_page', 'Profile')



<div class="my-20 mx-10 ">
    <div class="h-full">
        <div class="bg-white rounded-lg shadow-xl pb-8">

            <div class="w-full h-[250px]">

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="1431" height="560" preserveAspectRatio="none"
                    viewBox="0 0 1431 560" class="w-full h-full rounded-tl-lg rounded-tr-lg">
                    <g mask="url(&quot;#SvgjsMask2776&quot;)" fill="none">
                        <rect width="1431" height="560" x="0" y="0"
                            fill="url(#SvgjsLinearGradient2777)"></rect>
                        <path
                            d="M 0,80 C 95.4,70.4 286.2,21 477,32 C 667.8,43 763.2,132 954,135 C 1144.8,138 1335.6,64.6 1431,47L1431 560L0 560z"
                            fill="rgba(251, 133, 0, 1)"></path>
                        <path
                            d="M 0,225 C 95.4,217.4 286.2,185 477,187 C 667.8,189 763.2,240.2 954,235 C 1144.8,229.8 1335.6,175.8 1431,161L1431 560L0 560z"
                            fill="rgba(33, 158, 188, 1)"></path>
                        <path
                            d="M 0,322 C 71.6,337.4 214.8,399.4 358,399 C 501.2,398.6 572.8,317.8 716,320 C 859.2,322.2 931,414.2 1074,410 C 1217,405.8 1359.6,321.2 1431,299L1431 560L0 560z"
                            fill="rgba(142, 202, 230, 1)"></path>
                        <path
                            d="M 0,508 C 71.6,496.4 214.8,451.2 358,450 C 501.2,448.8 572.8,507.8 716,502 C 859.2,496.2 931,410.2 1074,421 C 1217,431.8 1359.6,529 1431,556L1431 560L0 560z"
                            fill="rgba(255, 255, 255, 1)"></path>
                    </g>
                    <defs>
                        <mask id="SvgjsMask2776">
                            <rect width="1431" height="560" fill="#ffffff"></rect>
                        </mask>
                        <linearGradient x1="15.22%" y1="-38.88%" x2="84.78%" y2="138.88%"
                            gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient2777">
                            <stop stop-color="rgba(200, 200, 192, 1)" offset="1"></stop>
                            <stop stop-color="rgba(230, 230, 207, 1)" offset="1"></stop>
                            <stop stop-color="rgba(213, 124, 21, 0.659)" offset="1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="flex flex-col items-center -mt-20">

                <div
                    class="inline-flex overflow-hidden relative justify-center items-center w-20 h-20 border-4 border-white bg-amber-500 rounded-full uppercase dark:bg-gray-600">
                    <span
                        class="font-medium text-gray-700 text-lg dark:text-gray-300 ">{{ Auth::user()->first_name[0] }}</span>
                </div>

                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">{{ Auth::user()->name }}</p>
                    <a href="#" class="bg-blue-500 rounded-full p-1">
                        <span title="Verified">

                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0334 13.6834L21.0334 14.6834L18.9834 12.6334L19.9834 11.6334C20.1934 11.4234 20.5434 11.4234 20.7534 11.6334L22.0334 12.9134C22.2434 13.1234 22.2434 13.4734 22.0334 13.6834ZM12.3334 19.2734L18.3934 13.2134L20.4434 15.2634L14.3934 21.3334H12.3334V19.2734ZM12.3334 14.3334C7.91337 14.3334 4.33337 16.1234 4.33337 18.3334V20.3334H10.3334V18.4434L14.3334 14.4434C13.6734 14.3634 13.0034 14.3334 12.3334 14.3334ZM12.3334 4.33337C11.2725 4.33337 10.2551 4.7548 9.50495 5.50495C8.7548 6.25509 8.33337 7.27251 8.33337 8.33337C8.33337 9.39424 8.7548 10.4117 9.50495 11.1618C10.2551 11.9119 11.2725 12.3334 12.3334 12.3334C13.3942 12.3334 14.4117 11.9119 15.1618 11.1618C15.9119 10.4117 16.3334 9.39424 16.3334 8.33337C16.3334 7.27251 15.9119 6.25509 15.1618 5.50495C14.4117 4.7548 13.3942 4.33337 12.3334 4.33337Z"
                                    fill="#ffffff" />
                            </svg>

                        </span>
                    </a>
                </div>
                <p class="text-gray-700">{{ Auth::user()->nik }}</p>
                <p class="text-sm text-gray-500">{{ Auth::user()->jabatan }}</p>
            </div>

        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col ">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Personal Info</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-40">Nama Lengkap</span>
                            <span class="text-gray-700">: {{ Auth::user()->name }}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-40">Nama Panggilan</span>
                            <span class="text-gray-700">: {{ Auth::user()->first_name }}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-40">Nomor Induk Karyawan</span>
                            <span class="text-gray-700">: {{ Auth::user()->nik }}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-40">Email</span>
                            <span class="text-gray-700">: {{ Auth::user()->email }}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-40">Jabatan</span>
                            <span class="text-gray-700">: {{ Auth::user()->jabatan }}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-40">Section</span>
                            <span class="text-gray-700">: {{ Auth::user()->section }}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-40">Pembuat Akun</span>
                            <span class="text-gray-700">: {{ Auth::user()->created_by }}</span>
                        </li>

                    </ul>
                </div>

            </div>

        </div>

    </div>
</div>
