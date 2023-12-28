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
                                            href="/view_team_staff">View Team</a>
                                    </li>
                                    <li>
                                        <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="/view_profile_staff">Profile</a>
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
                STAFF
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
                        data-collapse-toggle="dropdown-1" type="button" aria-controls="dropdown-1" href="#">

                        <svg width="15" height="auto" viewBox="0 0 31 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72437 38.75 0 37.0063 0 34.875V3.875C0 1.72437 1.72437 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z"
                                fill="white" />
                        </svg>

                        <span class="ml-8  flex-1">Proyek</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="font-regular text-sm">
                        <ul id="dropdown-1" class="hidden space-y-2 py-2 pl-14">
                            <li class="flex items-center rounded-lg px-2 hover:bg-red-600 decoration-red-600">

                                <svg width="16" height="auto" viewBox="0 0 31 39" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.375 0H3.875C1.74375 0 0 1.74375 0 3.875V34.875C0 37.0063 1.74375 38.75 3.875 38.75H27.125C29.2563 38.75 31 37.0063 31 34.875V11.625L19.375 0ZM23.25 31H7.75V27.125H23.25V31ZM23.25 23.25H7.75V19.375H23.25V23.25ZM17.4375 13.5625V2.90625L28.0938 13.5625H17.4375Z"
                                        fill="white" />
                                </svg>


                                <a class="group flex w-full items-center  p-2 pl-4 text-white" href="/staff-seluruh-proyek">Proyek
                                    Saya</a>
                            </li>

                            <li class="flex items-center rounded-lg px-2 hover:bg-red-600 decoration-red-600">

                                <svg width="19" height="auto" viewBox="0 0 31 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31 23.8462L23.0513 31.7949L17.4872 26.2308L19.8718 23.8462L23.0513 27.0256L28.6154 21.4615L31 23.8462ZM3.17949 0C1.41487 0 0 1.41487 0 3.17949V28.6154C0 30.38 1.41487 31.7949 3.17949 31.7949H15.5954C14.7528 30.3482 14.3077 28.6949 14.3077 27.0256C14.3077 26.501 14.3554 25.9605 14.4349 25.4359H3.17949V22.2564H15.5954C16.3267 20.9846 17.3441 19.8718 18.5682 19.0769H3.17949V15.8974H22.2564V17.6144C22.781 17.5349 23.3215 17.4872 23.8462 17.4872C24.3867 17.4872 24.9113 17.5349 25.4359 17.6144V9.53846L15.8974 0M14.3077 2.38462L23.0513 11.1282H14.3077V2.38462Z"
                                        fill="white" />
                                </svg>

                                <a class="group flex w-full items-center p-2 pl-4 text-white" href="#">Proyek
                                    Selesai</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="/staff-standar-form"
                        class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600">

                        <svg width="20" height="26" viewBox="0 0 31 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.9 3.14844H15.5L12.4 0H3.1C2.27783 0 1.48933 0.331709 0.907969 0.922156C0.326606 1.5126 0 2.31342 0 3.14844V22.0391C0 22.8741 0.326606 23.6749 0.907969 24.2653C1.48933 24.8558 2.27783 25.1875 3.1 25.1875H27.9C28.7222 25.1875 29.5107 24.8558 30.092 24.2653C30.6734 23.6749 31 22.8741 31 22.0391V6.29688C31 5.46186 30.6734 4.66104 30.092 4.07059C29.5107 3.48015 28.7222 3.14844 27.9 3.14844M20.15 18.8906H6.2V15.7422H20.15V18.8906ZM24.8 12.5938H6.2V9.44531H24.8V12.5938Z"
                                fill="white" />
                        </svg>

                        <span class="ml-6 flex-1">Standar Formulir</span>

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
