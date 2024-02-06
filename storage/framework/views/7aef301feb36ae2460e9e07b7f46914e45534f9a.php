
<?php $__env->startSection('title_page', 'Profile'); ?>



<div class="my-32 mx-56">
    <div class= "font-bold text-3xl text-gray-900 ml-5">Profil</div>
    <div class="mt-6 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4 rounded-lg">
        <div class="w-full ">
            <div class="bg-white rounded-lg shadow-xl border-2">
                
                <div class="flex space-x-20 mx-12 my-5">
                    <div class="space-y-10">
                        <div class="py-2">
                            <div class="font-light text-lg">Nama Lengkap:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"><?php echo e(Auth::user()->name); ?></div>
                        </div>
                        <div class="py-2">
                            <div class="font-light text-lg">Nomor Induk Karyawan:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> <?php echo e(Auth::user()->nik); ?></div>
                        </div>
                    </div>
                    <div class="space-y-10">
                        <div class="py-2">
                            <div class="font-light text-lg">Nama Panggilan:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> <?php echo e(Auth::user()->first_name); ?>

                            </div>
                        </div>
                        <div class="py-2">
                            <div class="font-light text-lg">Posisi/Jabatan:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> <?php echo e(Auth::user()->jabatan); ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="py-2">
                            <div class="font-light text-lg">Divisi:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> <?php echo e(Auth::user()->section); ?></div>
                        </div>
                    </div>
                </div>

                
                <div class="border-t-2  ">
                    <div class="mx-12 my-3 flex space-x-20">
                        <div class="py-2">
                            <div class="font-light text-lg">Dibuat oleh:</div>
                            <div class="text-gray-800 text-2xl font-mono font-medium"> <?php echo e(Auth::user()->created_by); ?>

                            </div>
                        </div>
                        <div class="py-2">
                            <div class="font-light text-lg">Hak akses:</div>
                            <div class="text-gray-800 text-2xl font-mono font-medium">
                                <?php
                                    $role_id = Auth::user()->role_id;
                                    $role_mapping = [
                                        1 && 2 => 'Manajerial',
                                        3 => 'Staff',
                                        4 => 'Web Admin'
                                    ];
                                ?>
                                <?php echo e($role_mapping[$role_id] ?? 'Undefined'); ?>

                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.layout_staff', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sim-pro\resources\views/layouts/layout_viewprofilestaff.blade.php ENDPATH**/ ?>