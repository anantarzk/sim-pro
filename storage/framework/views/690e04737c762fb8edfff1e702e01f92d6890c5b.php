
<?php $__env->startSection('title_page', 'Registrasi Akun'); ?>

<div class="mx-auto container">
    <div class="my-20 mx-11">
        
        <div class="w-full">
            
            <div class="mb-5">
                <a href="/dashboard-administrator" class="hover:underline text-blue-600 hover:text-blue-800 text-lg"><-
                        Kembali ke beranda</a>
            </div>
            <div class="w-full flex">
                <div class="bg-white rounded-lg border border-gray-200 shadow-md px-8 pt-6 pb-2 w-full mr-4">
                    <p class="text-2xl font-semibold font-mono tracking-tight text-black">
                        Registrasi akun website Engineering Design</p>
                    <p class="text-base font-normal text-gray-500">
                        Isian yang memiliki tanda (*) berarti wajib diisi.</p>
                    
                    <br>
                    <?php if($errors->any()): ?>
                        <div
                            class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg  alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="font-semibold"><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(Session::has('status')): ?>
                        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
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


                    <!-- Formulir -->
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="group relative z-0 mb-6 w-full">
                                <input id="name" type="text" name="name"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                    placeholder=" " required="">
                                <label for="name"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                    Nama Lengkap*</label>
                            </div>

                            <div class="group relative z-0 mb-6 w-full">
                                <input id="first_name" type="text" name="first_name"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                    placeholder=" " required="">
                                <label for="first_name"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                    Nama Panggilan*</label>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div class="group relative z-0 mb-6 w-full">
                                <input id="nik" type="number" name="nik" minlength="12" maxlength="12"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                    placeholder=" " required="">
                                <label for="nik"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                    Nomor Induk Karyawan* (harus 6 digit)</label>
                            </div>
                            <div class="group relative z-0 mb-6 w-full">

                                <select id="jabatan" name="jabatan"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                                    required>
                                    <option disabled selected="" value="">Jabatan/Posisi*</option>
                                    <option value="Manager Eng Design">  Manager Eng Design</option>
                                    <option value="Asst. Manager">Asst. Manager</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="Spv. Mechanical">Spv. Mechanical</option>
                                    <option value="Spv. Electrical">Spv. Electrical</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="Sr. Mechanical">Sr. Mechanical</option>
                                    <option value="Sr. Electrical">Sr. Electrical</option>
                                    <option value="Sr. MIT">Sr. MIT</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="MIT Engineer">MIT</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="Web admin">Web admin</option>
                                </select>
                            </div>

                            <div class="group relative z-0 mb-6 w-full">
                                <select id="section" name="section"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400">
                                    <option disabled selected="" value="">Divisi (Untuk assign PIC proyek)</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Manufacturing IT">Manufacturing IT</option>
                                </select>
                                <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500 dark:text-gray-400">
                                    Dapat dikosongkan untuk Manager dan Asst. Manager
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="group relative z-0 mb-6 w-full">
                                <input id="password" type="password" name="password"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                    placeholder=" " required="">
                                <label for="password"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                    Password*</label>
                            </div>
                            <div class="group relative z-0 mb-6 w-full">

                                <select id="role_id" name="role_id"
                                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                                    required>
                                    <option disabled selected="" value="">Hak Akses*</option>
                                    
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lvl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($lvl->id != 1): ?>
                                            <option value="<?php echo e($lvl->id); ?>"><?php echo e($lvl->name); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="group relative z-0 mb-6 w-full">
                            <input id="created_by" type="text" name="created_by" readonly
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                placeholder=" " required="" value="<?php echo e(Auth::user()->name); ?>">
                            <label for="created_by"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                Dibuat oleh</label>
                        </div>

                        
                        <input type="text" hidden name="aktivitas"
                            value="<?php echo e(Auth::user()->first_name); ?> - Telah Membuat Akun NIK = ">
                        <input type="text" hidden name="waktu" value="<?php echo e(date('d-m-Y H:i')); ?>">


                        <button type="submit"
                            class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                            Buat akun
                        </button>
                    </form>
                </div>

                
                <div class="bg-white rounded-lg border border-gray-200 shadow-md w-1/4 pt-2">
                    <div class="overflow-x-auto relative sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <caption
                                class="p-2 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                                Daftar Akun
                                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Semua akun yang
                                    telah
                                    terdaftar:</p>
                            </caption>
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-center">
                                <tr>
                                    <th scope="col" class="p-2">
                                        No
                                    </th>
                                    <th scope="col" class="p-2">
                                        NIK
                                    </th>

                                    <th scope="col" class="p-2 text-left">
                                        Nama panggilan
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 text-center">

                                        <th scope="row"
                                            class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?php echo e($loop->iteration); ?>

                                        </th>
                                        <td class="p-2"><?php echo e($item->nik); ?></td>
                                        <td class="p-2 text-left"><?php echo e($item->first_name); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                    <?php echo e($users->withQueryString()->links()); ?>

                </div>
            </div>

        </div>


    </div>
</div>

<?php echo $__env->make('layouts.layout_administrator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sim-pro\resources\views/administrator/account/registrasi.blade.php ENDPATH**/ ?>