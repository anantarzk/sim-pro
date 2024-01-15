<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page') | Supervisor</title>
    {{-- <meta http-equiv="refresh" content="5"> --}}

    @yield('custom_head')
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

<body class="{{-- bg-[url('image/BSIN-K.jpg')] bg-no-repeat bg-cover bg-center --}} bg-gray-200">

    {{-- Navbar --}}
    <div class="container mb-20">

        <nav class="bg-gray-600 px-2 sm:px-2 py-2.5 fixed w-full z-20 top-0 left-0 border-b-4 border-orange-500 ">
            <div class=" flex flex-wrap justify-between items-center mx-auto">

                <div class="ml-6 flex text-center">
                    {{-- awal Button sidebar --}}
                    <button class="mr-4 p-0 text-sm  hover:bg-orange-500 rounded" data-drawer-target="sidebar"
                        data-drawer-show="sidebar" type="button" aria-controls="sidebar">
                        <svg class="h-6 w-6" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    {{-- akhir Button sidebar --}}

                    {{-- Logo  --}}
                    <span class="self-center whitespace-nowrap text-xl font-semibold">
                        {{--  <img src="{{ asset('/image/logo/02-logo-white-bridgestone.svg') }}" class="w-1/4"
                            alt="tidak ada gambar"> --}}
                        <p class="text-white">
                            SIM Pro
                        </p>
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
                                </div>
                                <hr>
                                <ul class="py-1" aria-labelledby="user-menu-button">

                                    <li>
                                        <a class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white"
                                            href="/view_profile_supervisor">Profile</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <input type="text" hidden name="aktivitas"
                                                value="{{ Auth::user()->first_name }} - Telah Logout">
                                            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">
                                            <button type="submit"
                                                class="flex w-full items-center py-2 px-4 text-sm text-gray-700 text-left hover:bg-orange-500 hover:text-white fill-gray-600 hover:fill-white hover:font-medium space-x-2">
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
        class="fixed z-40 h-screen p-2 overflow-y-auto bg-gray-600 border-r-4 border-orange-500 w-80 transition-transform left-0 top-0 -translate-x-full"
        tabindex="-1" aria-labelledby="sidebar-label" aria-hidden="true">

        <div class="p-2">
            <div>
                @if (Auth::user()->jabatan == 'Manager Eng Design')
                    <p id="sidebar-label" class="text-2xl font-bold text-white uppercase">
                        MANAGER</p>
                @elseif (Auth::user()->jabatan == 'Asst. Manager')
                    <p id="sidebar-label" class="text-2xl font-bold text-white uppercase">
                        Asst. MANAGER</p>
                @else
                    <p id="sidebar-label" class="text-2xl font-bold text-white uppercase">
                        SUPERVISOR</p>
                @endif

                <p class="text-sm font-light text-white uppercase tracking-wider">Engineering Design</p>
                <hr class="mt-2">
            </div>

            <button type="button" data-drawer-dismiss="sidebar" aria-controls="sidebar"
                class="text-white bg-transparent hover:bg-orange-500 hover:text-white rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
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

                {{-- Konten menu supervisor --}}
                <li class="mb-8">
                    <a href="/dashboard-supervisor"
                        class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-orange-500 decoration-red-600">
                        <svg width="17" height="auto" viewBox="0 0 31 35" fill="none" class="ml-1"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 0L0 11.625V34.875H9.6875V21.3125H21.3125V34.875H31V11.625L15.5 0Z"
                                fill="white" />
                        </svg>
                        <span class="ml-6 flex-1">Dashboard OB</span>
                    </a>
                </li>


                <li>
                    <a class="flex items-center rounded-lg py-2 px-3 text-base font-semibold text-white hover:bg-orange-500 decoration-red-600"
                        data-collapse-toggle="dropdown-1" type="button" aria-controls="dropdown-1" href="#">

                        <svg width="15" height="auto" viewBox="0 0 31 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72437 38.75 0 37.0063 0 34.875V3.875C0 1.72437 1.72437 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z"
                                fill="white" />
                        </svg>

                        <span class="ml-7  flex-1">Proyek</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="font-regular text-sm">
                        <ul id="dropdown-1" class="hidden space-y-2 py-2 pl-14">
                            <li class="px-2 rounded-lg flex items-center  hover:bg-orange-500 decoration-red-600 ">
                                <svg width="19" height="auto" viewBox="0 0 31 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.3158 0H3.26316C1.45211 0 0 1.45211 0 3.26316V29.3684C0 31.1795 1.45211 32.6316 3.26316 32.6316H16.0058C15.1411 31.1468 14.6842 29.45 14.6842 27.7368C14.6842 27.1984 14.7332 26.6437 14.8147 26.1053H3.26316V22.8421H16.0058C16.7563 21.5368 17.8005 20.3947 19.0568 19.5789H3.26316V16.3158H22.8421V18.0779C23.3805 17.9963 23.9353 17.9474 24.4737 17.9474C25.0121 17.9474 25.5668 17.9963 26.1053 18.0779V9.78947L16.3158 0ZM14.6842 11.4211V2.44737L23.6579 11.4211H14.6842ZM22.8421 21.2105V26.1053H17.9474V29.3684H22.8421V34.2632H26.1053V29.3684H31V26.1053H26.1053V21.2105H22.8421Z"
                                        fill="white" />
                                </svg>
                                <a class="group flex w-full items-center  p-2 pl-4 text-white"
                                    href="/tambah-project">Tambah
                                    Proyek</a>
                            </li>
                            <li class="px-2 flex items-center rounded-lg hover:bg-orange-500 decoration-red-600">

                                <svg width="19" height="auto" viewBox="0 0 31 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31 23.8462L23.0513 31.7949L17.4872 26.2308L19.8718 23.8462L23.0513 27.0256L28.6154 21.4615L31 23.8462ZM3.17949 0C1.41487 0 0 1.41487 0 3.17949V28.6154C0 30.38 1.41487 31.7949 3.17949 31.7949H15.5954C14.7528 30.3482 14.3077 28.6949 14.3077 27.0256C14.3077 26.501 14.3554 25.9605 14.4349 25.4359H3.17949V22.2564H15.5954C16.3267 20.9846 17.3441 19.8718 18.5682 19.0769H3.17949V15.8974H22.2564V17.6144C22.781 17.5349 23.3215 17.4872 23.8462 17.4872C24.3867 17.4872 24.9113 17.5349 25.4359 17.6144V9.53846L15.8974 0M14.3077 2.38462L23.0513 11.1282H14.3077V2.38462Z"
                                        fill="white" />
                                </svg>
                                <a class="group flex w-full items-center  p-2 pl-4 text-white"
                                    href="/seluruh-proyek-supervisor-manager">Seluruh Proyek Aktif</a>
                            </li>

                            <li class="px-2 flex items-center rounded-lg hover:bg-orange-500 decoration-red-600">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 0H0V6H18V0ZM16 4H2V2H16V4ZM14 7C12.69 7 11.46 7.37 10.41 8H6.5C6.22 8 6 8.22 6 8.5V10H8.26C7.47 11.13 7 12.5 7 14C7 14.7 7.11 15.37 7.29 16H3V7H1V18H8.26C9.53 19.81 11.62 21 14 21C17.87 21 21 17.87 21 14C21 10.13 17.87 7 14 7ZM14 19C11.24 19 9 16.76 9 14C9 11.24 11.24 9 14 9C16.76 9 19 11.24 19 14C19 16.76 16.76 19 14 19ZM14.5 14.25L17.36 15.94L16.61 17.16L13 15V10H14.5V14.25Z"
                                        fill="white" />
                                </svg>
                                <a class="group flex w-full items-center  p-2 pl-4 text-white"
                                    href="/arsip-seluruh-proyek-supervisor-manager">Arsip Project</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a class="flex items-center rounded-lg py-2 pl-2 text-base font-semibold text-white hover:bg-orange-500 decoration-red-600"
                        data-collapse-toggle="dropdown-2" type="button" aria-controls="dropdown-2" href="#">
                        <svg width="24" height="auto" viewBox="0 0 48 48" fill="white"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 11.25C6 8.35051 8.3505 6 11.25 6H36.75C39.6495 6 42 8.3505 42 11.25V24.0436C41.2196 23.544 40.3823 23.1255 39.5 22.7999V11.25C39.5 9.73122 38.2688 8.5 36.75 8.5H11.25C9.73122 8.5 8.5 9.73122 8.5 11.25V36.75C8.5 38.2688 9.73122 39.5 11.25 39.5H22.7999C23.1255 40.3823 23.544 41.2196 24.0436 42H11.25C8.35051 42 6 39.6495 6 36.75V11.25Z" />
                            <path
                                d="M10 21.5C10 19.0147 12.0147 17 14.5 17C16.9853 17 19 19.0147 19 21.5C19 23.9853 16.9853 26 14.5 26C12.0147 26 10 23.9853 10 21.5ZM14.5 19.5C13.3954 19.5 12.5 20.3954 12.5 21.5C12.5 22.6046 13.3954 23.5 14.5 23.5C15.6046 23.5 16.5 22.6046 16.5 21.5C16.5 20.3954 15.6046 19.5 14.5 19.5Z" />
                            <path
                                d="M14.5 29C12.0147 29 10 31.0147 10 33.5C10 35.9853 12.0147 38 14.5 38C16.9853 38 19 35.9853 19 33.5C19 31.0147 16.9853 29 14.5 29ZM12.5 33.5C12.5 32.3954 13.3954 31.5 14.5 31.5C15.6046 31.5 16.5 32.3954 16.5 33.5C16.5 34.6046 15.6046 35.5 14.5 35.5C13.3954 35.5 12.5 34.6046 12.5 33.5Z" />
                            <path
                                d="M21.0012 20.25C21.0012 19.5596 21.5609 19 22.2512 19H36.75C37.4404 19 38 19.5596 38 20.25C38 20.9404 37.4404 21.5 36.75 21.5H22.2512C21.5609 21.5 21.0012 20.9404 21.0012 20.25Z" />
                            <path
                                d="M11.2632 11.0952C10.5728 11.0952 10.0132 11.6549 10.0132 12.3452C10.0132 13.0356 10.5728 13.5952 11.2632 13.5952H36.7298C37.4202 13.5952 37.9798 13.0356 37.9798 12.3452C37.9798 11.6549 37.4202 11.0952 36.7298 11.0952H11.2632Z" />
                            <path
                                d="M46 35C46 41.0751 41.0751 46 35 46C28.9249 46 24 41.0751 24 35C24 28.9249 28.9249 24 35 24C41.0751 24 46 28.9249 46 35ZM36 28C36 27.4477 35.5523 27 35 27C34.4477 27 34 27.4477 34 28V34H28C27.4477 34 27 34.4477 27 35C27 35.5523 27.4477 36 28 36H34V42C34 42.5523 34.4477 43 35 43C35.5523 43 36 42.5523 36 42V36H42C42.5523 36 43 35.5523 43 35C43 34.4477 42.5523 34 42 34H36V28Z" />
                        </svg>
                        <span class="ml-6 mr-9">Kelola Standar Formulir</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="font-regular text-sm">
                        <ul id="dropdown-2" class="hidden space-y-2 py-2 pl-14">
                            {{-- tombol formulir umum --}}
                            {{--  <li class="px-2 rounded-lg flex items-center  hover:bg-orange-500 decoration-red-600 ">
                                <svg width="20" height="auto" viewBox="0 0 52 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 54.5C18 55.3284 18.6716 56 19.5 56H32.5C33.3284 56 34 55.3284 34 54.5V1.5C34 0.671574 33.3284 0 32.5 0H19.5C18.6716 0 18 0.671573 18 1.5V54.5ZM20 5.5C20 4.67157 20.6716 4 21.5 4H30.5C31.3284 4 32 4.67157 32 5.5V24.5C32 25.3284 31.3284 26 30.5 26H21.5C20.6716 26 20 25.3284 20 24.5V5.5ZM26 39C29.309 39 32 41.691 32 45C32 48.309 29.309 51 26 51C22.691 51 20 48.309 20 45C20 41.691 22.691 39 26 39Z"
                                        fill="white" />
                                    <path
                                        d="M37.5 0C36.6716 0 36 0.671573 36 1.5V54.5C36 55.3284 36.6716 56 37.5 56H50.5C51.3284 56 52 55.3284 52 54.5V1.5C52 0.671574 51.3284 0 50.5 0H37.5ZM44 51C40.691 51 38 48.309 38 45C38 41.691 40.691 39 44 39C47.309 39 50 41.691 50 45C50 48.309 47.309 51 44 51ZM50 24.5C50 25.3284 49.3284 26 48.5 26H39.5C38.6716 26 38 25.3284 38 24.5V5.5C38 4.67157 38.6716 4 39.5 4H48.5C49.3284 4 50 4.67157 50 5.5V24.5Z"
                                        fill="white" />
                                    <path
                                        d="M0 54.5C0 55.3284 0.671573 56 1.5 56H14.5C15.3284 56 16 55.3284 16 54.5V1.5C16 0.671574 15.3284 0 14.5 0H1.5C0.671573 0 0 0.671573 0 1.5V54.5ZM2 5.5C2 4.67157 2.67157 4 3.5 4H12.5C13.3284 4 14 4.67157 14 5.5V24.5C14 25.3284 13.3284 26 12.5 26H3.5C2.67157 26 2 25.3284 2 24.5V5.5ZM8 39C11.309 39 14 41.691 14 45C14 48.309 11.309 51 8 51C4.691 51 2 48.309 2 45C2 41.691 4.691 39 8 39Z"
                                        fill="white" />
                                </svg>
                                <a class="group flex w-full items-center  p-2 pl-4 text-white"
                                    href="/supervisor-standar-form">Kelola Formulir Umum</a>
                            </li> --}}
                            <li class="px-2 flex items-center rounded-lg hover:bg-orange-500 decoration-red-600">
                                <svg width="26" height="auto" viewBox="0 0 1024 1024"
                                    xmlns="http://www.w3.org/2000/svg" class="icon" fill="white">
                                    <path
                                        d="M280 752h80c4.4 0 8-3.6 8-8V280c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v464c0 4.4 3.6 8 8 8zm192-280h80c4.4 0 8-3.6 8-8V280c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v184c0 4.4 3.6 8 8 8zm192 72h80c4.4 0 8-3.6 8-8V280c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v256c0 4.4 3.6 8 8 8zm216-432H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 728H184V184h656v656z" />
                                </svg>
                                <a class="group flex w-full items-center  p-2 ml-1 text-white"
                                    href="/tambah-standar-project">Kelola Formulir 7 Step Proyek</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Akhir Konten menu supervisor --}}
            </ul>
        </div>
    </div>
    {{-- Akhir Sidebar --}}

    @yield('konten')




    <!-- Javascript Tailwind -->
    @vite('resources/js/app.js')


</body>

</html>
