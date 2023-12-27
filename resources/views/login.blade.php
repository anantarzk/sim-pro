<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 {{-- bg-[url('image/icon/global/BSIN-K.jpg')] bg-no-repeat bg-cover bg-center --}}">

    @if ($count_user == 0)
        <div class="flex flex-col items-center justify-center mt-44">
            <p class="text-2xl font-bold mb-2">Selamat datang,</p>
            <p class="font-mono text-1xl">Klik Tombol dibawah untuk mulai mengelola Website ENGINEERING DESIGN - BSIN-K</p>

            <br>
            <form action="" method="post">
                @csrf
                <input type="text" name="name" value="Manufacturing IT" hidden>
                <input type="text" name="first_name" value="Manufacturing IT" hidden>
                <input type="text" name="nik" value="123" hidden>
                <input type="text" name="section" value="" hidden>
                <input type="text" name="jabatan" value="Manufacturing IT" hidden>
                <input type="text" name="created_by" value="DEVELOPER" hidden>
                <input type="text" name="email" value="1@1" hidden>
                <input type="text" name="role_id" value="4" hidden>
                <input type="text" name="password"
                    value="$2y$10$.kX9kXESyzR12rUB/m09j.V4CzYYs0mPbAo5qPQJVFNLc3UVAAOwO" hidden>

                {{-- planned --}}
                <input type="text" name="marking" value="Planned-1" hidden>

                <button type="submit"
                    class="text-white hover:text-white border border-orange-500 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Mulai Kelola
                </button>

            </form>
        </div>
    @else
        {{-- Card form login --}}
        <div class="flex flex-col items-center mt-20 mb-24">
            {{-- Logo Bridgestone --}}

            <svg viewBox="0 0 1000 124" fill="none" xmlns="http://www.w3.org/2000/svg" width="25%" height="auto">
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

            <p class="text-sm text-center font-medium text-gray-900 uppercase mt-5">Engineering Design - BSIN K</p>
            <p class="text-2xl text-center font-bold text-gray-900 font-mono">Project Monitoring
                System
            </p>
        </div>

        {{-- box form login --}}
        <div class="flex justify-center mt-5">

            {{-- card login --}}
            <div class="w-full max-w-md bg-white rounded-lg border border-gray-200 shadow-md px-5">

                <p class="mt-5 text-xl font-bold text-center text-gray-800">Selamat datang,</p>
                <p class="text-md font-normal text-center text-gray-600">silahkan masuk dengan akun yang dimiliki.</p>
                {{-- Eror message ketika user salah memasukkan input --}}
                @if (Session::has('status'))
                    <div class="flex p-4 mt-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{-- <span class="sr-only">Login Gagal</span> --}}
                        {{ Session::get('message') }}
                    </div>
                @endif

                {{-- card content --}}
                {{-- Form Input --}}
                <form action="" method="POST">
                    @csrf
                    <div class="relative z-0 mb-6 w-full group mt-4">
                        <input id="nip" type="number" name="nik"
                            class="peer block w-full [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder="" required="">
                        <label for="nik"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Nomor Induk Karyawan
                        </label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input id="password" type="password" name="password"
                            class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="">
                        <label for="password"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Password
                        </label>
                    </div>

                    <input type="text" hidden name="aktivitas">
                    <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

                    {{-- card footer --}}
                    {{-- Sumbit --}}
                    <button type="submit"
                        class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-md font-bold text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300">Login
                    </button>
                </form>
            </div>
        </div>
    @endif
    <!-- Javascript Tailwind -->
    @vite('resources/js/app.js')
</body>

</html>
