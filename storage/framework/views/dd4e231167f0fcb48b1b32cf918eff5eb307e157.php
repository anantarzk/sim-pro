<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title_page'); ?> | Staff</title>

    <!-- Tailwind CSS -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    
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

<body class="bg-gray-200">

    
    <div class="container mb-20">

        <nav
            class="bg-gray-600 px-2 sm:px-2 py-2.5 fixed w-full z-20 top-0 left-0 border-b-4 border-orange-500 ">
            <div class=" flex flex-wrap justify-between items-center mx-auto">

                <div class="ml-6 flex text-center">
                    
                    <button class="mr-4 p-0 text-sm  hover:bg-orange-500 rounded" data-drawer-target="sidebar"
                        data-drawer-show="sidebar" type="button" aria-controls="sidebar">
                        <svg class="h-6 w-6" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    

                    
                    <span class="self-center whitespace-nowrap text-xl font-semibold">
                        
                            <p class="text-white">
                                SIM Pro
                            </p>
                    </span>
                    
                </div>

                <div class="mr-6 flex">

                    <div class="flex md:order-2">
                        
                        <div class="flex items-center md:order-2">

                            <button id="user-menu-button"
                                class="mr-3 flex rounded-xl text-sm justify-items-center focus:underline  hover:underline text-white"
                                data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom" type="button"
                                aria-expanded="false">
                                <div class="flex items-center">
                                    <span
                                        class="mr-2"><?php echo e(Auth::user()->first_name); ?>&nbsp;(<?php echo e(Auth::user()->jabatan); ?>)</span>


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
                                <div class="py-3 px-4 space-y-1">
                                    <span class="block text-lg text-gray-600  font-medium">
                                        <?php echo e(Auth::user()->name); ?>

                                    </span>
                                </div>
                                <hr>
                                <ul class="" aria-labelledby="user-menu-button">
                                    <li>
                                        <a class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white"
                                            href="/view_profile_staff">Profile</a>
                                    </li>
                                    <hr>
                                    <li class="">
                                        <form action="/logout" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" hidden name="aktivitas"
                                                value="<?php echo e(Auth::user()->first_name); ?> - Telah Logout">
                                            <input type="text" hidden name="waktu" value="<?php echo e(date('d-m-Y H:i')); ?>">
                                            <button type="submit"
                                                class="flex w-full items-center py-2 px-4 text-sm text-gray-700 text-left hover:bg-red-600 hover:text-white fill-gray-600 hover:fill-white hover:font-medium space-x-2">
                                                <svg width="14" height="14" viewBox="0 0 14 14" class=""
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.83347 11.8794H1.64111V1.64126H8.83376C8.99319 1.64126 9.12259 1.51186 9.12259 1.35243V0.288827C9.12259 0.129394 8.99319 0 8.83376 0H0.288827C0.129394 0 0 0.129394 0 0.288827V13.2316C0 13.391 0.129394 13.5204 0.288827 13.5204H8.83347C8.99305 13.5204 9.1223 13.391 9.1223 13.2316V12.1683C9.1223 12.0085 8.99319 11.8794 8.83347 11.8794Z" />
                                                    <path
                                                        d="M13.9148 6.55605L10.0269 2.66844C9.91856 2.55999 9.72678 2.56013 9.61847 2.66844L8.6961 3.59096C8.58331 3.70374 8.58331 3.88657 8.6961 3.99936L10.4522 5.75571H2.85011C2.69067 5.75571 2.56128 5.88511 2.56128 6.04454V7.47596C2.56128 7.63539 2.69067 7.76479 2.85011 7.76479H10.4526L8.69653 9.52114C8.58375 9.63393 8.58375 9.81676 8.69653 9.92954L9.6189 10.8522C9.67306 10.9064 9.74671 10.9368 9.8231 10.9368C9.89978 10.9368 9.97315 10.9064 10.0273 10.8522L13.9152 6.9646C13.9694 6.91044 13.9998 6.83679 13.9998 6.76039C13.9997 6.68357 13.9689 6.6102 13.9148 6.55605Z" />
                                                </svg>
                                                <p>Log out</p>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                    </div>
                </div>

            </div>
        </nav>
    </div>
    

    
    <!-- drawer component -->
    <div id="sidebar"
        class="fixed z-40 h-screen p-2 overflow-y-auto bg-gray-600 border-r-4 border-orange-500 w-80 dark:bg-gray-800 transition-transform left-0 top-0 -translate-x-full"
        tabindex="-1" aria-labelledby="sidebar-label" aria-hidden="true">

        <div class="p-2">
            <div>
                <p id="sidebar-label" class="text-2xl font-bold text-white uppercase">
                    staff</p>
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
                <li class="flex items-center rounded-lg px-2 hover:bg-orange-500 decoration-red-600">


                    <svg width="15" height="auto" viewBox="0 0 31 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.4375 13.5625H28.0938L17.4375 2.90625V13.5625ZM3.875 0H19.375L31 11.625V34.875C31 35.9027 30.5917 36.8883 29.865 37.615C29.1383 38.3417 28.1527 38.75 27.125 38.75H3.875C1.72437 38.75 0 37.0063 0 34.875V3.875C0 1.72437 1.72437 0 3.875 0ZM5.8125 34.875H9.6875V23.25H5.8125V34.875ZM13.5625 34.875H17.4375V19.375H13.5625V34.875ZM21.3125 34.875H25.1875V27.125H21.3125V34.875Z"
                                fill="white" />
                        </svg>
                    <a class="group flex w-full items-center  p-2 pl-4 text-white" href="/staff-seluruh-proyek">Proyek
                        saya</a>
                </li>

                
                


                

            </ul>
        </div>
    </div>
    


    <?php echo $__env->yieldContent('konten'); ?>
    <div class="flex mt-96"></div>



    <!-- Javascript Tailwind -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\sim-pro\resources\views/layouts/layout_staff.blade.php ENDPATH**/ ?>