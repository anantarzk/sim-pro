<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page') | Web Admin</title>

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

<body class="bg-[url('image/icon/administrator/BSIN-K.jpg')] bg-no-repeat bg-cover bg-center bg-gray-200">

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
                                </div>
                                <hr>
                                <ul class="" aria-labelledby="user-menu-button">
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
                                                <p>Logout</p>
                                            </button>
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

                <li class="">
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

                <li class="flex items-center rounded-lg p-2 font-semibold hover:bg-red-600 decoration-red-600">
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
