<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page') | Manager</title>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    {{-- Sceool Bar --}}
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #8e8e8e;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #aeadad;
        }
    </style>


</head>

<body class="bg-gray-200">

    {{-- Navbar --}}
    <div class="container mb-20">

        <nav
            class="bg-black px-2 sm:px-2 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b-4 dark:border-gray-600 border-red-600 ">
            <div class=" flex flex-wrap justify-between items-center mx-auto">

                <div class="ml-6 flex text-center">
                    {{-- awal Button sidebar --}}
                    <button class="mr-4 p-0 text-sm  hover:bg-red-600 rounded" data-drawer-target="sidebar"
                        data-drawer-show="sidebar" type="button" aria-controls="sidebar">
                        <svg class="h-6 w-6" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    {{-- akhir Button sidebar --}}

                    {{-- Logo Bridgestone --}}
                    <span class="self-center whitespace-nowrap text-xl font-semibold">
                        <img src="{{ asset('/image/logo/02-logo-white-bridgestone.svg') }}" class="w-1/4"
                            alt="tidak ada gambar">
                    </span>
                    {{-- Akhir Logo --}}
                </div>

                <div class="mr-6 flex">

                    <div class="flex md:order-2">
                        {{-- Awal Profile --}}
                        <div class="flex items-center md:order-2">

                            <button id="user-menu-button"
                                class="mr-3 flex rounded-xl text-sm justify-items-center focus:underline  hover:underline text-white"
                                data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom" type="button"
                                aria-expanded="false">
                                <div class="flex items-center">
                                    <span
                                        class="mr-2">{{ Auth::user()->first_name }}&nbsp;({{ Auth::user()->jabatan }})</span>


                                    <svg width="20" height="8" viewBox="0 0 31 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.3575 0L15.5 11.4964L3.6425 0L0 3.53927L15.5 18.6L31 3.53927L27.3575 0Z"
                                            fill="white" />
                                    </svg>
                                </div>

                            </button>
                            <!-- Dropdown menu -->
                            <div id="user-dropdown"
                                class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 5069.63px, 0px);">
                                <div class="py-3 px-4">
                                    <span class="block text-lg text-gray-600  font-medium">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <span class="block truncate text-sm font-light text-gray-500 dark:text-gray-400">
                                        {{ Auth::user()->email }}
                                    </span>
                                </div>
                                <hr>
                                <ul class="py-1" aria-labelledby="user-menu-button">
                                    <li>
                                        <a class="py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 flex items-center space-x-2 text-center"
                                            href="/view_team_administrator">
                                            <p> View Team </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white"
                                            href="/view_profile_administrator">Profile</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <input type="text" hidden name="aktivitas"
                                                value="{{ Auth::user()->first_name }} - Telah Logout">
                                            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">
                                            <button type="submit"
                                                class="flex w-full items-center py-2 px-4 text-sm text-gray-700 text-left hover:bg-red-600 hover:text-white fill-gray-600 hover:fill-white hover:font-medium space-x-2">
                                                <svg width="14" height="14" viewBox="0 0 14 14" class=""
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.83347 11.8794H1.64111V1.64126H8.83376C8.99319 1.64126 9.12259 1.51186 9.12259 1.35243V0.288827C9.12259 0.129394 8.99319 0 8.83376 0H0.288827C0.129394 0 0 0.129394 0 0.288827V13.2316C0 13.391 0.129394 13.5204 0.288827 13.5204H8.83347C8.99305 13.5204 9.1223 13.391 9.1223 13.2316V12.1683C9.1223 12.0085 8.99319 11.8794 8.83347 11.8794Z" />
                                                    <path
                                                        d="M13.9148 6.55605L10.0269 2.66844C9.91856 2.55999 9.72678 2.56013 9.61847 2.66844L8.6961 3.59096C8.58331 3.70374 8.58331 3.88657 8.6961 3.99936L10.4522 5.75571H2.85011C2.69067 5.75571 2.56128 5.88511 2.56128 6.04454V7.47596C2.56128 7.63539 2.69067 7.76479 2.85011 7.76479H10.4526L8.69653 9.52114C8.58375 9.63393 8.58375 9.81676 8.69653 9.92954L9.6189 10.8522C9.67306 10.9064 9.74671 10.9368 9.8231 10.9368C9.89978 10.9368 9.97315 10.9064 10.0273 10.8522L13.9152 6.9646C13.9694 6.91044 13.9998 6.83679 13.9998 6.76039C13.9997 6.68357 13.9689 6.6102 13.9148 6.55605Z" />
                                                </svg>
                                                <p>Sign out</p>
                                            </button>
                                            {{-- <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                href="/logout">Sign out</a> --}}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- Akhir Profile --}}

                    </div>
                </div>

            </div>
        </nav>
    </div>
    {{-- akhir Navbar --}}

    {{--  Sidebar --}}
    <!-- drawer component -->
    <div id="sidebar"
        class="fixed z-40 h-screen p-2 overflow-y-auto bg-black border-r-4 border-red-600 w-80 dark:bg-gray-800 transition-transform left-0 top-0 -translate-x-full"
        tabindex="-1" aria-labelledby="sidebar-label" aria-hidden="true">

        <div class="p-2">
            <div>
                <p id="sidebar-label" class="text-2xl font-bold text-white uppercase">
                    administrator</p>
                <p class="text-sm font-light text-white uppercase tracking-wider">Engineering Design</p>
                <hr class="mt-2">
            </div>
            <button type="button" data-drawer-dismiss="sidebar" aria-controls="sidebar"
                class="text-white bg-transparent hover:bg-red-600 hover:text-white rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2">

                {{-- Konten Menu Staff --}}

                <li class="mb-7">
                    <a href="/dashboard-administrator"
                        class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600">

                        <svg width="17" height="35" viewBox="0 0 31 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 0L0 11.625V34.875H9.6875V21.3125H21.3125V34.875H31V11.625L15.5 0Z"
                                fill="white" />
                        </svg>

                        <span class="ml-8 flex-1">Beranda</span>

                    </a>
                </li>


                <li>
                    <a class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600"
                        data-collapse-toggle="dropdown-2" type="button" aria-controls="dropdown-2" href="#">

                        <svg width="18" height="auto" viewBox="0 0 31 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22.0805 12.8644C24.0109 14.1749 25.3636 15.9503 25.3636 18.3176V22.5449H31V18.3176C31 15.2458 25.9696 13.4281 22.0805 12.8644Z"
                                fill="white" />
                            <path
                                d="M11.2727 11.2727C14.3856 11.2727 16.9091 8.74924 16.9091 5.63636C16.9091 2.52349 14.3856 0 11.2727 0C8.15985 0 5.63636 2.52349 5.63636 5.63636C5.63636 8.74924 8.15985 11.2727 11.2727 11.2727Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.7273 11.2727C22.8414 11.2727 25.3637 8.75045 25.3637 5.63636C25.3637 2.52227 22.8414 0 19.7273 0C19.0651 0 18.4451 0.140909 17.8532 0.338181C19.0228 1.78955 19.7273 3.63545 19.7273 5.63636C19.7273 7.63727 19.0228 9.48318 17.8532 10.9345C18.4451 11.1318 19.0651 11.2727 19.7273 11.2727Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2727 12.6818C7.51045 12.6818 0 14.57 0 18.3182V22.5455H22.5455V18.3182C22.5455 14.57 15.035 12.6818 11.2727 12.6818Z"
                                fill="white" />
                        </svg>

                        <span class="ml-7  flex-1">Akun</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="font-regular text-sm">
                        <ul id="dropdown-2" class="hidden space-y-2 py-2 pl-14">
                            <li class="flex items-center rounded-lg px-2 hover:bg-red-600 decoration-red-600">


                                <svg width="22" height="auto" viewBox="0 0 33 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9091 5.63636C16.9091 8.74924 14.3856 11.2727 11.2727 11.2727C8.15985 11.2727 5.63636 8.74924 5.63636 5.63636C5.63636 2.52349 8.15985 0 11.2727 0C14.3856 0 16.9091 2.52349 16.9091 5.63636Z"
                                        fill="white" />
                                    <path
                                        d="M19.7273 11.2727C22.8414 11.2727 25.3637 8.75045 25.3637 5.63636C25.3637 2.52227 22.8414 0 19.7273 0C19.0651 0 18.4451 0.140909 17.8532 0.338181C19.0228 1.78955 19.7273 3.63545 19.7273 5.63636C19.7273 7.63727 19.0228 9.48318 17.8532 10.9345C18.4451 11.1318 19.0651 11.2727 19.7273 11.2727Z"
                                        fill="white" />
                                    <path
                                        d="M0 18.3182C0 14.57 7.51045 12.6818 11.2727 12.6818C13.3993 12.6818 16.7234 13.2851 19.2119 14.4865C18.4413 15.8133 18 17.3551 18 19C18 20.2589 18.2585 21.4575 18.7253 22.5455H0V18.3182Z"
                                        fill="white" />
                                    <path
                                        d="M27 13C23.6862 13 21 15.6862 21 19C21 22.3138 23.6862 25 27 25C30.3138 25 33 22.3138 33 19C33 15.6862 30.3138 13 27 13ZM30 19.6H27.6V22H26.4V19.6H24V18.4H26.4V16H27.6V18.4H30V19.6Z"
                                        fill="white" />
                                </svg>



                                <a class="group flex w-full items-center  p-2 pl-4 text-white"
                                    href="/registrasi-account">Tambah Akun</a>
                            </li>
                            <li class="flex items-center rounded-lg px-2 hover:bg-red-600 decoration-red-600">

                                <svg width="25" height="auto" viewBox="0 0 35 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9091 5.63636C16.9091 8.74924 14.3856 11.2727 11.2727 11.2727C8.15985 11.2727 5.63636 8.74924 5.63636 5.63636C5.63636 2.52349 8.15985 0 11.2727 0C14.3856 0 16.9091 2.52349 16.9091 5.63636Z"
                                        fill="white" />
                                    <path
                                        d="M24.8285 8.03763C25.1718 7.30924 25.3637 6.49532 25.3637 5.63636C25.3637 2.52227 22.8414 0 19.7273 0C19.0651 0 18.4451 0.140909 17.8532 0.338181C19.0228 1.78955 19.7273 3.63545 19.7273 5.63636C19.7273 7.13289 19.3332 8.54271 18.6452 9.7656C20.1416 8.65619 21.9942 8 24 8C24.2793 8 24.5557 8.01273 24.8285 8.03763Z"
                                        fill="white" />
                                    <path
                                        d="M15.7967 13.2926C15.2849 14.4231 15 15.6783 15 17C15 19.0919 15.7137 21.0171 16.9109 22.5455H0V18.3182C0 14.57 7.51045 12.6818 11.2727 12.6818C12.5091 12.6818 14.1503 12.8857 15.7967 13.2926Z"
                                        fill="white" />
                                    <path
                                        d="M29.4177 7.08053C29.3139 7.08233 29.2284 7.16139 29.2182 7.26437L29.138 8.07827C28.751 8.21987 28.4028 8.4311 28.1023 8.7001L27.3426 8.38857C27.247 8.34927 27.138 8.38687 27.0881 8.47768L26.3566 9.79225C26.3059 9.88228 26.3323 9.99592 26.4162 10.0563L27.0748 10.5264C27.0401 10.7248 27.0189 10.9287 27.0226 11.1375C27.0262 11.3463 27.0544 11.5493 27.096 11.7464L26.454 12.2391C26.3722 12.3015 26.3506 12.416 26.4036 12.505L27.1801 13.7935C27.2332 13.8825 27.3435 13.9179 27.4377 13.8753L28.186 13.5361C28.4957 13.7945 28.8511 13.9935 29.2427 14.1217L29.351 14.9323C29.3648 15.0349 29.453 15.1109 29.5568 15.1091L31.0616 15.083C31.1654 15.0812 31.2509 15.0022 31.2611 14.8992L31.3413 14.0853C31.7286 13.9436 32.0779 13.7328 32.3786 13.4634L33.1366 13.7734C33.2323 13.8127 33.3413 13.7751 33.3912 13.6843L34.1227 12.3697C34.1734 12.2797 34.147 12.1661 34.0631 12.1057L33.406 11.6355C33.4405 11.4377 33.4603 11.2343 33.4567 11.0261C33.4531 10.8172 33.4249 10.6142 33.3833 10.4172L34.0253 9.92449C34.1071 9.86204 34.1287 9.74756 34.0757 9.65853L33.2992 8.37009C33.2461 8.28106 33.1358 8.24569 33.0416 8.28828L32.2933 8.6275C31.9836 8.36907 31.6282 8.17003 31.2366 8.04191L31.1283 7.23128C31.1145 7.12872 31.0263 7.05266 30.9225 7.05446L29.4177 7.08053ZM30.2153 9.67678C30.9922 9.66332 31.6337 10.2818 31.6471 11.0574C31.6606 11.8338 31.0409 12.4733 30.264 12.4868C29.4871 12.5002 28.8456 11.8825 28.8322 11.1062C28.8187 10.3306 29.4384 9.69024 30.2153 9.67678ZM22.2766 12.8259C22.1728 12.8277 22.0874 12.9068 22.0771 13.0098L21.9579 14.2055C21.3119 14.4011 20.7315 14.7419 20.2689 15.2073L19.1674 14.7558C19.0718 14.7165 18.9627 14.7541 18.9128 14.8449L18.1814 16.1595C18.1306 16.2495 18.157 16.3631 18.2409 16.4235L19.2162 17.1187C19.1419 17.4355 19.0922 17.7611 19.0981 18.1011C19.104 18.4412 19.1649 18.7649 19.2501 19.0788L18.2996 19.809C18.2178 19.8715 18.1962 19.9859 18.2492 20.075L19.0257 21.3634C19.0788 21.4524 19.1891 21.4862 19.2833 21.4437L20.3684 20.9527C20.8469 21.4018 21.4387 21.7222 22.0912 21.8954L22.2516 23.0863C22.2655 23.1888 22.3536 23.2649 22.4574 23.2631L23.9623 23.237C24.066 23.2352 24.1515 23.1562 24.1618 23.0532L24.2809 21.8574C24.927 21.6618 25.5073 21.3211 25.97 20.8557L27.0715 21.3072C27.1671 21.3465 27.2761 21.3089 27.326 21.2181L28.0575 19.9035C28.1082 19.8135 28.0818 19.6998 27.9979 19.6394L27.0227 18.9442C27.097 18.6275 27.1467 18.3018 27.1408 17.9618C27.1349 17.6218 27.0739 17.2981 26.9887 16.9841L27.9393 16.2539C28.0211 16.1915 28.0427 16.077 27.9897 15.988L27.2131 14.6995C27.1601 14.6105 27.0498 14.5767 26.9556 14.6193L25.8705 15.1102C25.392 14.6611 24.8002 14.3407 24.1477 14.1676L23.9872 12.9767C23.9734 12.8741 23.8852 12.7981 23.7815 12.7999L22.2766 12.8259ZM23.0916 16.4258C23.9803 16.4104 24.7126 17.1165 24.728 18.0036C24.7433 18.8908 24.036 19.6218 23.1472 19.6372C22.2585 19.6526 21.5263 18.9465 21.5109 18.0593C21.4955 17.1722 22.2029 16.4412 23.0916 16.4258Z"
                                        fill="white" />
                                </svg>

                                <a class="group flex w-full items-center  p-2 pl-4 text-white"
                                    href="/kelola-akun">Kelola
                                    Akun</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="">
                    <a href="/log-activity"
                        class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600">

                        <svg width="24" height="auto" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4985 2.9585H2.39136V4.2106H11.4985V2.9585Z" fill="white" />
                            <path
                                d="M14.1155 5.10259V0H0V15.7092H6.30098C7.53283 17.988 9.94279 19.536 12.7129 19.536C16.7359 19.536 20 16.2745 20 12.2515C20 8.70563 17.4676 5.75681 14.1155 5.10259ZM6.7773 12.9171C6.40747 12.9171 6.109 12.6186 6.109 12.2506C6.109 11.8816 6.40747 11.5823 6.7773 11.5823C7.14537 11.5823 7.44385 11.8816 7.44385 12.2506C7.44385 12.6186 7.14537 12.9171 6.7773 12.9171ZM2.39147 7.22726V8.47846H6.48936C5.94344 9.37748 5.58067 10.3989 5.46797 11.4969H2.39147V12.749H5.45388C5.5023 13.4648 5.65464 14.1525 5.89502 14.7971C3.45511 14.7971 1.26353 14.7971 0.909545 14.7971C0.909545 13.9703 0.909545 1.73729 0.909545 0.909627C1.72843 0.909627 12.3862 0.909627 13.205 0.909627C13.205 1.19932 13.205 2.88551 13.205 4.98993C13.0413 4.9785 12.8783 4.96527 12.7119 4.96527C10.6392 4.96527 8.77073 5.83698 7.4447 7.2282L2.39147 7.22726ZM13.3829 6.31326C13.3829 6.68219 13.0826 6.98156 12.7129 6.98156C12.3457 6.98156 12.0454 6.68219 12.0454 6.31326C12.0454 5.94433 12.3457 5.64496 12.7129 5.64496C13.0818 5.6441 13.3829 5.94433 13.3829 6.31326ZM12.7129 18.8544C12.3457 18.8544 12.0454 18.5559 12.0454 18.187C12.0454 17.8172 12.3457 17.5178 12.7129 17.5178C13.0818 17.5178 13.3812 17.8163 13.3829 18.187C13.3829 18.5551 13.0827 18.8544 12.7129 18.8544ZM16.7553 9.23571L13.9323 12.0586C13.9464 12.1344 13.9552 12.2118 13.9552 12.2911C13.9552 13.0166 13.3679 13.604 12.6433 13.604C11.9204 13.604 11.3357 13.021 11.3314 12.299L8.4336 10.0467C8.17562 9.84593 8.1175 9.49018 8.30331 9.25335C8.48732 9.01471 8.84747 8.98479 9.1028 9.18554L11.8069 11.2882C11.9072 11.2037 12.0182 11.1306 12.1432 11.0795C12.3158 10.9932 12.5077 10.9404 12.7129 10.9404C12.8872 10.9404 13.0537 10.9765 13.206 11.0381C13.206 11.0619 13.206 11.0866 13.206 11.1104C13.2351 11.1253 13.2632 11.1412 13.2923 11.1579L15.984 8.46532C16.2314 8.21967 16.6013 8.19326 16.8143 8.40544C17.0265 8.61672 17.001 8.99006 16.7553 9.23571ZM18.6502 12.9171C18.2786 12.9171 17.9827 12.6186 17.9827 12.2506C17.9827 11.8816 18.2786 11.5823 18.6502 11.5823C19.0182 11.5823 19.3176 11.8816 19.3185 12.2506C19.3185 12.6186 19.0182 12.9171 18.6502 12.9171Z"
                                fill="white" />
                        </svg>

                        <span class="ml-5 flex-1">Log Activity</span>
                    </a>
                </li>



                {{-- Akhir konten menu staff --}}

            </ul>
        </div>
    </div>
    {{-- Akhir Sidebar --}}

    @yield('konten')

    {{-- Awal Footer --}}
    <div class="flex mt-96"></div>


    <!-- Javascript Tailwind -->
    @vite('resources/js/app.js')

</body>

</html>
