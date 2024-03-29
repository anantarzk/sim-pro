<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
                                    {{-- <span class="mr-2">{{ Auth::user()->name}}&nbsp;({{ Auth::user()->role_id}})</span> --}}
                                    <span class="mr-2"> user
                                        {{-- {{ Auth::user()->first_name }}&nbsp;
                                        (
                                            @if (Auth::user()->role_id == 1)
                                            Manager
                                        @elseif (Auth::user()->role_id == 2)
                                            Supervisor
                                        @elseif (Auth::user()->role_id == 3)
                                            Staff
                                        @elseif (Auth::user()->role_id == 4)
                                            Administrator
                                        @endif) --}}
                                    </span>

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
                                        {{-- {{ Auth::user()->name }} --}}
                                    </span>
                                    <span class="block truncate text-xs font-medium text-gray-500 dark:text-gray-400">
                                        {{-- {{ Auth::user()->email }} --}}
                                    </span>
                                </div>
                                <ul class="py-1" aria-labelledby="user-menu-button">

                                    <li>
                                        <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">View Team</a>
                                    </li>
                                    <li>
                                        <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Edit Profile</a>
                                    </li>
                                    <li>
                                        <a class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="/logout">Sign out</a>
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
                MANAGER</h5>
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

                <li class="">
                    <a href="#"
                        class="flex items-center rounded-lg p-2 text-base font-semibold text-white hover:bg-red-600 decoration-red-600">

                        <svg width="24" height="26" viewBox="0 0 35 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.6682 14.7021L21.4747 12.7445C21.3356 12.6242 21.3128 12.4212 21.4062 12.2686L22.4998 10.6228C22.3974 10.4129 22.3016 10.1896 22.2258 9.95984C22.15 9.73003 22.0942 9.49365 22.0483 9.25397L20.1903 8.58167C20.0244 8.51451 19.9219 8.33782 19.9622 8.15835L20.5608 5.27995C20.6011 5.10048 20.7608 4.98133 20.9401 4.98866L22.9058 5.11585C23.1725 4.71769 23.4856 4.35962 23.8551 4.03836L23.5047 2.1044C23.4819 1.93466 23.5886 1.75544 23.7582 1.69953L26.5502 0.7787C26.7197 0.722792 26.9121 0.803354 26.9981 0.963346L27.867 2.7263C28.3451 2.76802 28.8197 2.86628 29.271 3.02766L30.7754 1.75601C30.9151 1.64344 31.1144 1.64419 31.2536 1.76447L33.4471 3.72203C33.5862 3.84231 33.6089 4.04531 33.5156 4.19797L32.422 5.84373C32.5244 6.05368 32.6202 6.27691 32.696 6.50672C32.7718 6.73652 32.8276 6.97291 32.8735 7.21258L34.7315 7.88489C34.8974 7.95205 34.9999 8.12873 34.9596 8.30821L34.361 11.1866C34.3207 11.3661 34.161 11.4852 33.9817 11.4779L32.016 11.3507C31.7493 11.7489 31.4362 12.1069 31.0667 12.4282L31.4171 14.3622C31.4399 14.5319 31.3332 14.7111 31.1636 14.767L28.3716 15.6879C28.2021 15.7438 28.0097 15.6632 27.9237 15.5032L27.0548 13.7403C26.5767 13.6985 26.1021 13.6003 25.6508 13.4389L24.1464 14.7105C24.0067 14.8231 23.8074 14.8224 23.6682 14.7021ZM28.12 10.2316C29.2168 9.86985 29.8177 8.67462 29.4552 7.57554C29.0927 6.47646 27.8987 5.87319 26.8018 6.23495C25.705 6.5967 25.1041 7.79193 25.4666 8.89102C25.8291 9.9901 27.0231 10.5934 28.12 10.2316Z"
                                fill="white" />
                            <path
                                d="M17.5747 22.2067L18.2882 21.1516C18.2221 21.0183 18.1527 20.875 18.1033 20.7251C18.0539 20.5752 18.0144 20.4221 17.9982 20.2723L16.807 19.8454C16.7042 19.8017 16.6347 19.6917 16.6616 19.572L17.0483 17.7274C17.0652 17.611 17.1749 17.5416 17.2945 17.5354L18.5497 17.6199C18.7197 17.3645 18.9195 17.1324 19.1625 16.9304L18.9432 15.6954C18.9136 15.5723 18.9869 15.4594 19.0867 15.4265L20.8716 14.8379C20.9813 14.8017 21.1073 14.8487 21.1536 14.9554L21.7119 16.0785C22.0207 16.1096 22.3261 16.164 22.6148 16.2682L23.5733 15.4535C23.6598 15.3806 23.7927 15.3811 23.8855 15.4613L25.2937 16.7141C25.3765 16.7975 25.4061 16.9207 25.3394 17.0203L24.6359 18.0721C24.702 18.2054 24.7614 18.352 24.8109 18.5018C24.8603 18.6517 24.8997 18.8049 24.9259 18.9513L26.1171 19.3783C26.2199 19.4219 26.2894 19.532 26.2625 19.6516L25.8758 21.4963C25.8589 21.6126 25.7492 21.6821 25.6296 21.6883L24.3745 21.6037C24.2044 21.8592 24.0046 22.0913 23.7616 22.2933L23.9809 23.5282C23.9972 23.6447 23.9339 23.7542 23.8242 23.7904L22.0393 24.3791C21.9296 24.4152 21.8035 24.3682 21.7573 24.2616L21.1989 23.1385C20.8901 23.1074 20.5847 23.053 20.3061 22.9455L19.3375 23.7635C19.251 23.8363 19.1182 23.8358 19.0254 23.7556L17.6172 22.5029C17.5277 22.4327 17.518 22.3029 17.5747 22.2067ZM21.9053 20.9557C22.6432 20.7123 23.0537 19.9122 22.8066 19.1629C22.5594 18.4135 21.7634 18.0113 21.0155 18.258C20.2677 18.5046 19.8671 19.3014 20.1142 20.0508C20.3614 20.8002 21.1674 21.1991 21.9053 20.9557Z"
                                fill="white" />
                            <path
                                d="M22.3238 3.14844H15.5L12.4 0H3.1C2.27783 0 1.48933 0.331709 0.907969 0.922156C0.326606 1.5126 0 2.31342 0 3.14844V22.0391C0 22.8741 0.326606 23.6749 0.907969 24.2653C1.48933 24.8558 2.27783 25.1875 3.1 25.1875H18.8545C16.9525 23.7016 15.6025 21.4689 14.9969 18.8906H6.2V15.7422H14.6396C14.6411 14.7118 14.7547 13.6556 14.9901 12.5938H6.2V9.44531H16.0659C17.4574 6.50718 19.7272 4.27671 22.3238 3.14844Z"
                                fill="white" />
                        </svg>
                        <span class="ml-6 flex-1">Kelola Standar Formulir</span>

                    </a>
                </li>



                <li class="">
                    <a href="#"
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
                        <span class="ml-5 flex-1">Dashboard OB</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {{-- Akhir Sidebar --}}




    {{-- Awal Footer --}}
    <div class="flex  border-t-2 mt-96">
        <footer class="bg-white py-8 w-screen">
            <div class="ml-6 mr-6 flex sm:items-center sm:justify-between">
                <p class="mb-4 flex items-center sm:mb-0" href="#">
                    <svg viewBox="0 0 1000 124" fill="none" xmlns="http://www.w3.org/2000/svg" width="20%"
                        height="auto">
                        <g id="2b684ee162c384d2bc2515eb2b253fad">
                            <g id="43c012495f5f66a41d03af6b7499bd87">
                                <g id="288d66471ef0b0698f0a2ddc21c54bd8" clip-path="url(#clip0_439_48)">
                                    <path id="d5996b4ad5d9cbbcdb6ceffe09278fd1"
                                        d="M108.082 0.00837805C107.533 0.0198381 106.981 0.0443011 106.427 0.0793431L79.2871 95.0893C77.8215 100.235 72.3219 104.542 67.1098 104.542H56.6931L73.0929 47.198C73.3354 46.3275 72.399 45.688 71.7048 46.2941C47.5723 67.0546 18.4487 97.3691 0.233677 120.3C-0.229138 120.895 0.0128481 121.777 0.806244 121.777H71.8037C101.743 121.777 118.129 112.51 124.068 90.3393C128.906 72.2896 119.453 59.9705 104.356 56.7969C104.081 56.7418 103.838 56.2332 104.356 56.134C117.128 53.9522 130.008 48.8077 134.604 30.1739C139.418 10.6386 125.101 -0.346182 108.082 0.00832295V0.00837805ZM611.203 13.6104C586.09 13.6104 572.536 23.4619 567.666 42.3491C566.321 47.5282 566.818 55.98 569.915 61.2693C576.813 73.0821 595.083 74.5583 605.187 81.5777C609.584 84.6301 609.715 88.7525 608.547 93.2815C606.277 102.097 601.847 106.296 593.042 106.296C584.568 106.296 579.49 101.37 584.328 85.9316H557.43C546.653 111.706 560.701 123.376 589.33 123.376C615.457 123.376 629.958 117.171 636.173 93.1373C638.3 84.9278 636.933 76.0696 631.886 70.582C622.112 59.9593 603.325 57.9744 596.725 51.8146C593.364 48.6851 593.396 44.2991 594.366 40.5305C596.162 33.6103 600.812 29.8425 608.349 29.8425C620.162 29.8425 620.459 37.1042 617.56 45.7324H642.894C648.856 27.7267 641.043 13.6104 611.203 13.6104ZM443.973 14.4821C406.937 14.4821 396.865 22.2932 384.931 68.4534C373.812 111.44 377.471 122.847 417.505 122.847C436.491 122.847 444.447 121.447 456.006 119.343L469.395 69.0926H440.844V69.0816L431.333 104.036C429.327 104.223 426.816 104.52 422.915 104.52C404.249 104.52 406.331 98.8997 414.199 68.4531C422.386 36.7944 427.147 31.0217 438.805 31.0217C450.012 31.0217 450.111 38.5802 447.257 48.134H475.71C480.327 30.2936 477.24 14.4818 443.973 14.4818V14.4821ZM779.195 14.5036C747.15 14.5036 733.254 20.2002 720.659 68.8838C709.76 111.044 718.498 123.253 751.072 123.253C784.229 123.253 797.321 116.432 809.608 68.8838C818.511 34.4593 816.705 14.5036 779.195 14.5036ZM874.601 15.7605C852.65 15.7605 842.456 16.2337 836.461 15.9692L809.905 118.605C809.453 120.357 810.478 121.777 812.186 121.777H837.651L860.715 32.5866C863.062 32.5756 866.643 32.3778 870.258 32.3778C882.621 32.3778 884.252 36.7739 880.991 49.3911L863.084 118.605C862.632 120.357 863.657 121.777 865.376 121.777H890.831L909.553 49.3911C916.032 24.311 905.025 15.7605 874.601 15.7605V15.7605ZM156.533 15.9585L129.987 118.592C129.535 120.344 130.56 121.766 132.279 121.766H157.733L180.797 32.5758C183.265 32.5648 185.612 32.4661 191.474 32.4661C201.281 32.4661 204.919 38.5266 202.803 46.703C200.015 57.4579 191.674 63.5076 181.757 63.5076H178.01L188.609 114.713C189.865 119.716 192.379 121.766 198.109 121.766H220.841L210.969 79.3523C210.021 76.1897 208.985 73.8975 207.486 72.0132C207.299 71.7708 207.244 71.4411 207.596 71.3309C219.762 67.5733 227.718 59.8934 231.09 46.8795C235.542 29.6672 224.688 15.9585 197.272 15.9585L156.533 15.9585ZM303.521 15.9585L276.986 118.592C276.534 120.344 277.559 121.766 279.278 121.766H313.206C355.829 121.766 363.014 113.612 374.706 68.4103C384.855 29.1262 378.594 15.9585 341.613 15.9585H303.521ZM654.114 15.9585L649.717 33.1483H678.004C678.29 33.1483 678.29 33.5009 678.025 33.6993C673.507 37.1043 670.751 41.9529 669.44 47.0108L650.883 118.605C650.432 120.357 651.468 121.777 653.176 121.777H680.505L703.469 33.1591H717.475C725.332 33.1591 730.113 29.8654 732.769 23.0113L735.446 15.9692H654.114V15.9585ZM255.1 15.9695L228.555 118.605C228.103 120.357 229.128 121.777 230.847 121.777H257.745L284.302 19.1419C284.753 17.3898 283.728 15.9695 282.009 15.9695H255.1ZM520.327 15.9695C501.958 15.9695 496.437 19.2539 489.297 46.8905L476.151 97.4355C472.107 114.405 477.152 121.777 491.014 121.777H529.231C536.757 121.777 541.606 117.778 543.931 111.64L547.06 103.563H508.701C504.987 103.563 503.698 102.428 504.392 99.4306L510.849 74.1527H548.911L553.198 57.5677H515.125L519.456 40.7179C520.591 36.3102 523.72 32.5653 529.847 32.5653H560.326L564.614 15.9695H520.327ZM955.714 15.9695C937.333 15.9695 931.813 19.2539 924.672 46.8905L911.526 97.4355C907.482 114.405 912.528 121.777 926.379 121.777H964.607C972.133 121.777 976.97 117.778 979.306 111.64L982.446 103.563H944.077C940.374 103.563 939.074 102.428 939.768 99.4306L946.227 74.1527H984.287L988.585 57.5677H950.512L954.831 40.7179C955.977 36.3102 959.108 32.5653 965.235 32.5653H995.702L1000 15.9695H955.714ZM774.929 31.0221C787.138 31.0221 788.483 37.6005 780.604 68.0361C772.814 98.1961 765.11 105.47 755.667 105.47C743.446 105.47 741.639 101.017 750.157 68.0361C757.253 40.5978 764.031 31.0221 774.929 31.0221ZM336.898 32.477C353.416 32.477 353.394 37.9417 345.504 68.4213C337.548 99.2646 332.909 103.705 317.207 103.705H309.394L327.785 32.5868C330.154 32.5758 331.035 32.477 336.898 32.477V32.477Z"
                                        fill="#222326">
                                    </path>
                                    <path id="2cffe6079f57c7e9a42c1926dae9c843"
                                        d="M16.6412 69.6665L33.2143 11.5282C34.8121 5.54468 41.4238 0.0900879 48.1015 0.0900879H98.7907C99.6392 0.0900879 99.9147 1.20305 99.2535 1.65484C72.8952 19.6936 41.1152 46.4487 18.0627 70.4158C17.4786 71.0439 16.4098 70.537 16.6412 69.6665Z"
                                        fill="#E60012">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="self-center whitespace-nowrap text-sm font-semibold ">
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
