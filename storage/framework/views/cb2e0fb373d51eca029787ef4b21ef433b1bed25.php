<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-200 ">

    <?php if($count_user == 0): ?>
        <div class="flex flex-col items-center justify-center mt-44">
            <p class="text-2xl font-bold mb-2 uppercase">Selamat datang</p>
            <p class="text-1xl">Klik Tombol dibawah untuk memulai Website ENGINEERING DESIGN</p>

            <br>
            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="name" value="Manufacturing IT" hidden>
                <input type="text" name="first_name" value="Manufacturing IT" hidden>
                <input type="text" name="nik" value="123" hidden>
                <input type="text" name="section" value="" hidden>
                <input type="text" name="jabatan" value="Manufacturing IT" hidden>
                <input type="text" name="created_by" value="DEVELOPER" hidden>
                <input type="text" name="role_id" value="4" hidden>
                <input type="text" name="password"
                    value="$2y$10$.kX9kXESyzR12rUB/m09j.V4CzYYs0mPbAo5qPQJVFNLc3UVAAOwO" hidden>

                
                <input type="text" name="marking" value="Planned-1" hidden>

                <button type="submit"
                    class="text-white hover:text-white border border-orange-500 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Mulai Kelola
                </button>

            </form>
        </div>
    <?php else: ?>
        
        <div class="flex flex-col items-center mt-20 mb-12">
            
            <p class="text-7xl font-semibold tracking-tight">SIM Pro</p>
            <p class="text-sm text-center font-medium text-gray-900 uppercase mt-5">Engineering Design</p>
            <p class="text-2xl text-center font-semibold text-gray-900">Project Monitoring
                System
            </p>
        </div>

        
        <div class="flex justify-center mt-5">

            
            <div class="w-full max-w-md bg-white rounded-lg border border-gray-200 shadow-md px-5">

                <p class="mt-5 text-xl text-center text-gray-800 font-light">Selamat datang,</p>
                <p class="text-md font-normal text-center text-gray-600">silahkan masuk dengan akun yang dimiliki.</p>
                
                <?php if(Session::has('status')): ?>
                    <div class="flex p-4 mt-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>

                
                
                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
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
                    <input type="text" hidden name="waktu" value="<?php echo e(date('d-m-Y H:i')); ?>">

                    
                    
                    <button type="submit"
                        class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-md font-bold text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300">Login
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <!-- Javascript Tailwind -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\sim-pro\resources\views/login.blade.php ENDPATH**/ ?>