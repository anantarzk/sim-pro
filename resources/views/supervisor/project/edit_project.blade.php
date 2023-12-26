@extends('layouts.layout_supervisor')
@section('title_page', 'Edit Proyek')

<div class="container my-20 mx-auto">


    <a href="/seluruh-proyek-supervisor-manager" class="mx-6 text-2xl  font-medium font-mono hover:underline text-blue-500 hover:text-blue-600">< Kembali</a>

    <div class="mx-6 px-8 mt-4 pt-5 pb-3 bg-white shadow-md rounded">

        <p class="font-bold text-gray-800 text-3xl mb-3">Ubah Proyek</p>
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
                        placeholder=" " required value="{{ $project->project_name }}">
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        *Project Name
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="io_number" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " required value="{{ $project->io_number }}">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        *IO Number
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="budget_amount" id="floating_company" {{-- oninput="formatAngka(this)" --}}
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none  focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " value="{{ $project->budget_amount }}">
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
                        <option selected value="{{ $project->section }}">{{ $project->section }}</option>
                        <option value="Design">Design</option>
                        <option value="IE">IE</option>
                        <option value="Eng">Maintenance</option>
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
                        <option selected value="{{ $project->cost_dept }}">{{ $project->cost_dept }}</option>
                        <option disabled value="">-Cost Dept-</option>
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
                        <option selected value="{{ $project->status_project }}">{{ $project->status_project }}</option>
                        <option value="Approval">Approval</option>
                        <option value="Cancel">Cancel</option>
                        <option value="On Progress">On Progress</option>
                    </select>
                </div>

            </div>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="ob_year" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected value="{{ $project->ob_year }}">{{ $project->ob_year }}</option>
                        <option disabled="" value="">-OB Year-</option>
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
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        *OB Year
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="date" name="date_start" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " value="{{ $project->date_start }}">
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date Start
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="date" name="date_end" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                        placeholder=" " value="{{ $project->date_end}}" >
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Date End
                    </label>
                </div>
            </div>

            <p class="font-light text-gray-800 text-xl mb-3">
                Person in Charge (PIC)
            </p>

            <div class="grid grid-cols-3 gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="pic_1_me"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected value="{{ $project->pic_1_me }}">{{ $project->pic_1_me }}</option>
                        <option disabled value="">Pilih PIC : </option>
                        @foreach ($users as $pic2)
                            @if ($pic2->section == 'Mechanical')
                                <option value="{{ $pic2->first_name }}">
                                    {{ $pic2->first_name }}
                                </option>
                            @endif
                        @endforeach
                        <option value="">None</option>

                    </select>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Mechanical
                    </label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="pic_2_el"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected value="{{ $project->pic_2_el }}">{{ $project->pic_2_el }}</option>
                        <option disabled value="">Pilih PIC : </option>
                        @foreach ($users as $pic2)
                            @if ($pic2->section == 'Electrical')
                                <option value="{{ $pic2->first_name }}">
                                    {{ $pic2->first_name }}
                                </option>
                            @endif
                        @endforeach
                        <option value="">None</option>
                    </select>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Electrical
                    </label>
                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <select id="underline_select" name="pic_3_mit"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                        <option selected value="{{ $project->pic_3_mit }}">{{ $project->pic_3_mit }}</option>
                        <option disabled value="">Pilih PIC : </option>
                        @foreach ($users as $pic2)
                            @if ($pic2->section == 'Manufacturing IT')
                                <option value="{{ $pic2->first_name }}">
                                    {{ $pic2->first_name }}
                                </option>
                            @endif
                        @endforeach
                        <option value="">None</option>

                    </select>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Manufacturing IT
                    </label>
                </div>
            </div>

            {{-- input ke table log activity --}}
            <input type="text" hidden name="aktivitas"
                value="{{ Auth::user()->first_name }} - Mengedit Project pada OB Year => ">
            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">


            <button type="submit"
                class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-Bold rounded text-xl w-full py-3 text-center">
                Ubah proyek
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
