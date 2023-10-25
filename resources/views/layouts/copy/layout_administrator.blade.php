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

<body>

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
                                    <span class="block text-xs text-gray-900 dark:text-white">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <span class="block truncate text-xs font-medium text-gray-500 dark:text-gray-400">
                                        {{ Auth::user()->email }}
                                    </span>
                                </div>
                                <ul class="py-1" aria-labelledby="user-menu-button">

                                    <li>
                                        <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="/view_team_administrator">View Team</a>
                                    </li>
                                    <li>
                                        <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="/view_profile_administrator">Profile</a>
                                    </li>
                                    <li>
                                        <form action="/logout" method="POST">

                                            @csrf
                                            <input type="text" hidden name="aktivitas"
                                                value="{{ Auth::user()->first_name }} - Telah Logout">
                                            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">
                                            <button type="submit"
                                                class="w-full block py-2 px-4 text-xs text-gray-700 text-left hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Sign out
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
            <h5 id="sidebar-label" class="text-xl font-bold text-white uppercase dark:text-gray-400">
                ADMINISTRATOR
            </h5>
            <h8 class="text-xs font-semibold text-white uppercase dark:text-gray-400">Engineering Design</h8>
            <br><br>
            <hr>
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
                    <a href="#"
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

                                <a class="group flex w-full items-center  p-2 pl-4 text-white" href="#">Kelola
                                    Akun</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600"
                        data-collapse-toggle="dropdown-3" type="button" aria-controls="dropdown-3" href="#">


                        <svg width="18" height="auto" viewBox="0 0 28 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14 0C6.265 0 0 2.98333 0 6.66667C0 10.35 6.265 13.3333 14 13.3333C21.735 13.3333 28 10.35 28 6.66667C28 2.98333 21.735 0 14 0ZM0 10V15C0 18.6833 6.265 21.6667 14 21.6667C21.735 21.6667 28 18.6833 28 15V10C28 13.6833 21.735 16.6667 14 16.6667C6.265 16.6667 0 13.6833 0 10ZM0 18.3333V23.3333C0 27.0167 6.265 30 14 30C21.735 30 28 27.0167 28 23.3333V18.3333C28 22.0167 21.735 25 14 25C6.265 25 0 22.0167 0 18.3333Z"
                                fill="white" />
                        </svg>


                        <span class="ml-7  flex-1">Database</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="font-regular text-sm">
                        <ul id="dropdown-3" class="hidden space-y-2 py-2 pl-14">
                            <li class="flex items-center hover:bg-red-600 decoration-red-600">


                                <svg width="24" height="auto" viewBox="0 0 38 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.4084 11.6724C31.2865 11.6874 31.1958 11.7911 31.1966 11.9135L31.2037 12.8811C30.7661 13.0959 30.3827 13.3878 30.0626 13.7418L29.1301 13.4699C29.0127 13.4356 28.8891 13.4934 28.8417 13.6065L28.145 15.2443C28.0965 15.3565 28.1417 15.4869 28.2479 15.5475L29.0815 16.0185C29.0654 16.2563 29.0659 16.4987 29.0961 16.744C29.1264 16.9892 29.1849 17.2245 29.2584 17.4512L28.5645 18.1109C28.476 18.1945 28.4649 18.3319 28.5383 18.43L29.6126 19.8491C29.686 19.9473 29.8202 19.9751 29.9258 19.9133L30.7639 19.4209C31.1605 19.6864 31.6034 19.8762 32.0801 19.9782L32.3085 20.9184C32.3376 21.0373 32.4508 21.1158 32.5726 21.1008L34.3399 20.8825C34.4617 20.8675 34.5524 20.7638 34.5517 20.6414L34.5446 19.6738C34.9826 19.4588 35.3672 19.1673 35.6875 18.8129L36.618 19.0831C36.7353 19.1175 36.859 19.0596 36.9064 18.9466L37.6031 17.3088C37.6516 17.1966 37.6063 17.0661 37.5001 17.0056L36.6684 16.5343C36.6844 16.2972 36.6823 16.0555 36.6521 15.8109C36.6218 15.5657 36.5633 15.3304 36.4899 15.1037L37.1838 14.4441C37.2722 14.3604 37.2834 14.223 37.2099 14.1249L36.1357 12.7058C36.0622 12.6077 35.928 12.5798 35.8225 12.6416L34.9843 13.134C34.5878 12.8686 34.1449 12.6787 33.6682 12.5768L33.4397 11.6365C33.4107 11.5176 33.2975 11.4391 33.1756 11.4542L31.4084 11.6724ZM32.6704 14.6275C33.5828 14.5148 34.4145 15.1626 34.527 16.0734C34.6396 16.9851 33.9903 17.8148 33.0779 17.9274C32.1655 18.0401 31.3338 17.3933 31.2213 16.4816C31.1088 15.5708 31.758 14.7402 32.6704 14.6275ZM23.7229 19.3219C23.601 19.337 23.5103 19.4407 23.5111 19.5631L23.5199 20.9847C22.7842 21.2954 22.1439 21.7687 21.6576 22.3738L20.3054 21.9799C20.188 21.9456 20.0644 22.0035 20.017 22.1165L19.3203 23.7543C19.2718 23.8665 19.317 23.9969 19.4233 24.0575L20.6573 24.7539C20.6094 25.1358 20.5915 25.5251 20.6408 25.9244C20.6901 26.3238 20.8022 26.697 20.9416 27.0558L19.9142 28.0333C19.8258 28.117 19.8146 28.2543 19.8881 28.3525L20.9623 29.7716C21.0358 29.8697 21.1697 29.8957 21.2753 29.8339L22.4907 29.121C23.1097 29.5897 23.8459 29.893 24.6351 30.0154L24.9723 31.3965C25.0014 31.5154 25.1146 31.5939 25.2364 31.5788L27.0037 31.3606C27.1255 31.3456 27.2162 31.2419 27.2155 31.1195L27.2066 29.6978C27.9424 29.3871 28.5827 28.9139 29.069 28.3087L30.4212 28.7026C30.5386 28.7369 30.6622 28.6791 30.7096 28.566L31.4063 26.9283C31.4548 26.816 31.4096 26.6856 31.3033 26.625L30.0693 25.9286C30.1172 25.5467 30.1351 25.1574 30.0858 24.7581C30.0365 24.3588 29.9244 23.9855 29.785 23.6268L30.8124 22.6493C30.9008 22.5656 30.912 22.4282 30.8385 22.3301L29.7643 20.911C29.6908 20.8129 29.5568 20.7868 29.4513 20.8487L28.2358 21.5615C27.6169 21.0928 26.8807 20.7896 26.0915 20.6672L25.7542 19.2861C25.7252 19.1672 25.612 19.0887 25.4901 19.1037L23.7229 19.3219ZM25.1304 23.4556C26.1741 23.3267 27.1236 24.0662 27.2523 25.108C27.3809 26.1498 26.6398 27.0981 25.5961 27.227C24.5525 27.3558 23.6029 26.6164 23.4743 25.5745C23.3456 24.5327 24.0868 23.5845 25.1304 23.4556Z"
                                        fill="white" />
                                    <path
                                        d="M0 7.34815C0 3.2883 6.93625 0 15.5 0C24.0637 0 31 3.2883 31 7.34815C31 8.31261 30.6085 9.23353 29.8968 10.0772C29.4382 10.0262 28.9722 10 28.5 10C24.6295 10 21.1698 11.7592 18.877 14.5216C17.79 14.636 16.6599 14.6963 15.5 14.6963C6.93625 14.6963 0 11.408 0 7.34815Z"
                                        fill="white" />
                                    <path
                                        d="M16.7059 18.3485C16.308 18.363 15.9058 18.3704 15.5 18.3704C6.93625 18.3704 0 15.0821 0 11.0222V16.5333C0 20.5932 6.93625 23.8815 15.5 23.8815C15.6925 23.8815 15.8841 23.8798 16.0749 23.8765C16.0254 23.4245 16 22.9652 16 22.5C16 21.0447 16.2487 19.6474 16.7059 18.3485Z"
                                        fill="white" />
                                    <path
                                        d="M17.0486 27.5194C16.5393 27.5433 16.0227 27.5556 15.5 27.5556C6.93625 27.5556 0 24.2673 0 20.2074V25.7185C0 29.7784 6.93625 33.0667 15.5 33.0667C17.474 33.0667 19.3614 32.892 21.0974 32.5734C19.3413 31.2807 17.9354 29.5398 17.0486 27.5194Z"
                                        fill="white" />
                                </svg>

                                <a class="group flex w-full items-center rounded-lg p-2 pl-4 text-white"
                                    href="#">Kelola Database</a>
                            </li>
                            <li class="flex items-center hover:bg-red-600 decoration-red-600">


                                <svg width="22" height="auto" viewBox="0 0 31 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.8333 17.2222C22.0961 17.2222 18.8239 19.22 17.0156 22.1994C15.9822 22.32 14.8972 22.3889 13.7778 22.3889C6.16556 22.3889 0 19.3061 0 15.5V10.3333C0 14.1394 6.16556 17.2222 13.7778 17.2222C21.39 17.2222 27.5556 14.1394 27.5556 10.3333V15.5C27.5556 16.12 27.3833 16.7228 27.0733 17.3083C26.6944 17.2222 26.2467 17.2222 25.8333 17.2222ZM13.7778 13.7778C21.39 13.7778 27.5556 10.695 27.5556 6.88889C27.5556 3.08278 21.39 0 13.7778 0C6.16556 0 0 3.08278 0 6.88889C0 10.695 6.16556 13.7778 13.7778 13.7778ZM15.6722 25.7644C15.0522 25.8333 14.415 25.8333 13.7778 25.8333C6.16556 25.8333 0 22.7506 0 18.9444V24.1111C0 27.9172 6.16556 31 13.7778 31C14.57 31 15.3278 31 16.0683 30.8967C15.7067 29.8461 15.5 28.7267 15.5 27.5556C15.5 26.9356 15.5689 26.35 15.6722 25.7644ZM27.5556 29.2778V22.3889H24.1111V29.2778H20.6667L25.8333 34.4444L31 29.2778H27.5556Z"
                                        fill="white" />
                                </svg>

                                <a class="group flex w-full items-center rounded-lg p-2 pl-4 text-white"
                                    href="#">Backup Database</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="/log-activity"
                        class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600">
                        <svg width="26" height="auto" viewBox="0 0 123 97" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.3953 80.3191L62.5594 57.9372L74.355 73.5825L102.334 49.4246L106.491 54.9396L72.9464 83.919L61.1509 68.2737L37.8186 86.1861L33.3953 80.3191ZM40.6357 65.5131L63.968 47.6007L75.7635 63.246L109.309 34.2666L105.151 28.7516L77.1721 52.9095L65.3766 37.2642L36.2124 59.6461L40.6357 65.5131Z"
                                fill="white" />
                            <path
                                d="M78.1328 10.2111L18.1328 10.2144C13.7328 10.2146 10.133 13.8148 10.1333 18.2148L10.1339 30.2148L86.1339 30.2107L86.1333 18.2107C86.133 13.8107 82.5328 10.2109 78.1328 10.2111ZM10.1363 74.2148C10.1366 78.6148 13.7368 82.2146 18.1368 82.2144L30.1368 82.2137L30.1344 38.2137L10.1344 38.2148L10.1363 74.2148Z"
                                fill="white" />
                            <path
                                d="M121.364 19.8595L93.0029 25.2408L111.844 47.1119L121.364 19.8595ZM96.6961 44.41L105.949 36.4388L102.686 32.6506L93.4328 40.6218L96.6961 44.41Z"
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




    {{-- Awal Footer --}}
    <div class="flex  border-t-2 mt-96">
        <footer class="bg-white py-8 w-screen">
            <div class="ml-6 mr-6 flex sm:items-center sm:justify-between">
                <p class="mb-4 flex items-center sm:mb-0" href="#">
                    <img src="{{ asset('/image/logo/01-logo-ori-bridgestone.svg') }}" class="w-1/4"
                        alt="tidak ada gambar">

                    <span class="self-center whitespace-nowrap text-base font-semibold ">
                        &nbsp TIRE INDONESIA | KARAWANG PLANT
                    </span>

                <ul class="mb-6 flex flex-wrap items-center text-sm text-gray-500 sm:mb-0">
                    <li>
                        <a class="mr-4 hover:underline decoration-red-600 md:mr-6" href="#">About</a>
                    </li>
                    <li>
                        <a class="mr-4 hover:underline decoration-red-600 md:mr-6" href="#">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a class="mr-4 hover:underline decoration-red-600 md:mr-6" href="#">Licensing</a>
                    </li>
                    <li>
                        <a class="hover:underline decoration-red-600" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 dark:border-gray-700 sm:mx-auto lg:my-8">
            <span class="block text-sm text-gray-500 sm:text-center">2022
                <a class="hover:underline decoration-red-600" href="#">
                    Engineering Design - BSIN-K
                </a>
            </span>
        </footer>
    </div>



    <!-- Javascript Tailwind -->
    @vite('resources/js/app.js')

</body>

</html>
