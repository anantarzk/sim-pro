
<?php $__env->startSection('title_page', 'Tambah Proyek'); ?>


<div class="container my-20 mx-auto">
    <br>
    <div class="mb-2 ml-6">
        <a href="/seluruh-proyek-supervisor-manager" class="hover:underline text-blue-600 hover:text-blue-800 text-lg"><-
                Kembali ke halaman seluruh proyek</a>
    </div>
    <div class="mx-6 px-8 pt-5 pb-3 bg-white shadow-md rounded">

        <p class="font-semibold text-gray-800 text-3xl mb-3">Tambah Proyek:</p>

        
        <?php if($errors->any()): ?>
        <div
            class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg  alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="font-bold"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
        
        
        <?php if(Session::has('status')): ?>
            <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                    
                    <?php echo e(Session::get('message')); ?>

                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        <?php endif; ?>
        

        <form action="" method="post">
            <?php echo csrf_field(); ?>


            <p class="font-light text-gray-800 text-xl mb-2">
                Identitas proyek
            </p>
            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 group">
                    <input type="text" name="project_name" id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " required />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Judul Proyek<span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="io_number" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " required="">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        IO Number (harus tepat 12 digit)<span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="budget_amount" id="floating_company" oninput="formatAngka(this)"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" ">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Budget (Rp)<span class="text-red-600">*</span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="section" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">Section<span class="text-red-600">*</span></option>
                        <option value="Design">Design</option>
                        <option value="IE">IE</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="PC">PC</option>
                        <option value="Production">Production</option>
                        <option value="SHE">SHE</option>
                        <option value="Tech">Tech</option>
                        <option value="QA">QA</option>
                    </select>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="cost_dept" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">Cost Dept<span class="text-red-600">*</span></option>
                        <option value="P1.K">P1.K</option>
                        <option value="P2.K">P2.K</option>
                        <option value="P3.K">P3.K</option>
                        <option value="P4.K">P4.K</option>
                        <option value="P5.K">P5.K</option>
                        <option value="P6.K">P6.K</option>
                        <option value="P7.K">P7.K</option>
                        <option value="P8.K">P8.K</option>
                        <option value="P9.K">P9.K</option>
                        <option value="P10.K">P10.K</option>
                        <option value="P11.K">P11.K</option>

                        <option value="S1.K">S1.K</option>
                        <option value="S2.K">S2.K</option>
                        <option value="S3.K">S3.K</option>
                        <option value="S4.K">S4.K</option>
                        <option value="S5.K">S5.K</option>
                        <option value="S6.K">S6.K</option>
                        <option value="S7.K">S7K.K</option>
                        <option value="S7.K">S7E.K</option>
                        <option value="S7.K">S7B.K</option>
                        <option value="S8.K">S8.K</option>
                        <option value="S9.K">S9-1.K</option>
                        <option value="S9.K">S9-2.K</option>
                        <option value="S10.K">S10.K</option>
                        <option value="S11.K">S11.K</option>
                        <option value="S12.K">S12.K</option>
                        <option value="S13.K">S13.K</option>

                        <option value="C4.1">C4.1</option>
                        <option value="C4.2">C4.2</option>
                        <option value="C4.3">C4.3</option>
                        <option value="C4.4">C4.4</option>



                    </select>
                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="status_project" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">Status Fund Request<span class="text-red-600">*</span></option>
                        <option value="Approval">Approval</option>
                        <option value="Cancel">Cancel</option>
                        <option value="On Progress">On Progress</option>

                    </select>
                </div>

            </div>
            <br>
            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="ob_year" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">OB Year<span class="text-red-600">*</span></option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2036">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2032">2033</option>
                    </select>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="date" name="date_start" id="floating_company" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" ">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Tanggal mulai<span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="date" name="date_end" id="floating_company" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" ">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Tanggal selesai<span class="text-red-600">*</span>
                    </label>
                </div>

            </div>

            <p class="font-light text-gray-800 text-xl">
                Penanggung jawab (PIC)<span class="text-red-600">*</span>
            </p>
            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 w-full group">
                    <select id="underline_select" name="pic_1_me"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">Mechanical</option>
                        <option disabled value="">Pilih PIC : </option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pic2->section == 'Mechanical'): ?>
                                <option value="<?php echo e($pic2->first_name); ?>">
                                    <?php echo e($pic2->first_name); ?>

                                </option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <option value="">None</option>

                    </select>
                </div>
                <div class="relative z-0 w-full group">
                    <select id="underline_select" name="pic_2_el"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">Electrical</option>
                        <option disabled value="">Pilih PIC : </option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pic2->section == 'Electrical'): ?>
                                <option value="<?php echo e($pic2->first_name); ?>">
                                    <?php echo e($pic2->first_name); ?>

                                </option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <option value="">None</option>
                    </select>
                </div>

                <div class="relative z-0 w-full group">
                    <select id="underline_select" name="pic_3_mit"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option disabled selected="" value="">Manufacturing IT</option>
                        <option disabled value="">Pilih PIC : </option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pic2->section == 'Manufacturing IT'): ?>
                                <option value="<?php echo e($pic2->first_name); ?>">
                                    <?php echo e($pic2->first_name); ?>

                                </option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <option value="">None</option>
                    </select>
                </div>
            </div>
            <br>

            <button type="submit"
                class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-bold rounded text-lg w-full py-2 text-center">
                Tambah proyek
            </button>
        </form>


    </div>

    <script>
     function formatAngka(input) {
        // Menghilangkan karakter selain angka
        let angka = input.value.replace(/[^\d]/g, '');

        // Menambahkan tanda titik setiap ribuan
        angka = angka.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Update nilai input
        input.value = angka;
    }
    </script>
</div>

<?php echo $__env->make('layouts.layout_supervisor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sim-pro\resources\views/supervisor/project/tambah_project.blade.php ENDPATH**/ ?>