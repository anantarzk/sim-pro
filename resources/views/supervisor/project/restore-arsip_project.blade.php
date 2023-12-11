@extends('layouts.layout_supervisor')
@section('title_page', 'Hapus Proyek')

<div class="container my-20 mx-auto">

    <a href="/seluruh-proyek-supervisor-manager" class="mx-6 text-2xl  font-medium font-mono hover:underline text-blue-500 hover:text-blue-600">< Kembali</a>

    <div class="mx-6 mt-4 px-8 pt-5 pb-3 bg-white shadow-md rounded">

        <p class="font-bold text-gray-800 text-3xl mb-3">Konfirmasi Pulihkan Proyek </p>


        <form action="" method="post">
            @csrf
            @method('PUT')


            <p class="font-light text-gray-800 text-xl mb-2">
                Identitas proyek
            </p>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 group">
                    <input type="text" name="project_name" id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " required value="{{ $project->project_name }}" readonly />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        *Project Name
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="io_number" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " required readonly value="{{ $project->io_number }}">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        *IO Number
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="number" name="budget_amount" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " value="{{ $project->budget_amount }}" readonly>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        *Budget (Rp)
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="section" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->section }}">{{ $project->section }}</option>
                    </select>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="cost_dept" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->cost_dept }}">{{ $project->cost_dept }}</option>
                    </select>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="status_project" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->status_project }}">{{ $project->status_project }}
                        </option>
                    </select>
                </div>

            </div>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="ob_year" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->ob_year }}">{{ $project->ob_year }}</option>

                    </select>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="date" name="date_start" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " value="{{ $project->date_start }}" readonly>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date Start
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="date" name="date_end" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " value="{{ $project->date_end }}" readonly>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date End
                    </label>
                </div>

            </div>

            <p class="font-light text-gray-800 text-xl">
                Person in Charge (PIC)
            </p>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 w-full group">
                    <select id="underline_select" name="pic_1_me"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->pic_1_me }}">{{ $project->pic_1_me }}</option>

                    </select>
                </div>
                <div class="relative z-0 w-full group">
                    <select id="underline_select" name="pic_2_el"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->pic_2_el }}">{{ $project->pic_2_el }}</option>
                    </select>
                </div>

                <div class="relative z-0 w-full group">
                    <select id="underline_select" name="pic_3_mit"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected disabled value="{{ $project->pic_3_mit }}">{{ $project->pic_3_mit }}
                        </option>
                    </select>
                </div>
            </div>

            <input type="text" name="archive_at" value="" hidden>

            {{-- input ke table log activity --}}
            <input type="text" hidden name="aktivitas"
                value="{{ Auth::user()->first_name }} - Restore Project pada OB Year => ">
            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

            <p class="mt-4 my-1 text-md">Apakah anda yakin untuk memulihkan proyek di atas?</p>

            <button type="submit"
                class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-bold rounded text-xl w-full py-2 text-center">
                Pulihkan proyek
            </button>
        </form>


    </div>
</div>
