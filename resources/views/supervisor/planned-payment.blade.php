@extends('layouts.layout_supervisor')
@section('title_page', 'Form Planned Payment')

@section('konten')
    <div class="mx-10 my 20">
        @if ($pyCount == 0)
            <div class="flex flex-col items-center justify-center mt-44">
                <p>Klik Tombol dibawah untuk mulai mengelola Target Payment proyek</p>
                <br>
                <form action="" method="post">
                    @csrf
                    <input type="text" name="marking" value="Planned-1" hidden>
                    <button type="submit"
                        class="text-orange-500 hover:text-white border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-orange-300 dark:text-orange-300 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-800">Mulai
                        Kelola</button>
                </form>
            </div>
        @else
            {{-- batas sudah buat  --}}
            <div class="flex">
                <div class="mx-auto my-auto">
                    <div class="w-full">
                        <div class="p-4 bg-white border shadow-md rounded-lg">
                            <div class="flex space-x-4 w-full  mb-2">
                                <p class="text-2xl text-white w-full rounded bg-orange-500 text-center">
                                    Planned Target
                                    Payment ({{ $pl->year }})
                                </p>
                                <div class="w-full">
                                    <p>Tampilkan target tahun:</p>
                                    <div class="flex">
                                        <select id="underline_select" name="as_year"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                            <option disabled selected="" value="">Year Planned</option>
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
                                </div>
                            </div>
                            <hr>
                            <div class="flex justify-between">
                                <table class="mx-auto w-full">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">January</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_1, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">February</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_2, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">March</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_3, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">April</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_4, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">May</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_5, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">June</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_6, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="mx-auto w-full">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">July</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_7, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">August</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_8, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">September</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_9, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">October</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_10, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">November</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_11, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">December</p>
                                            </td>
                                            <td>
                                                &nbsp; : Rp{{ number_format($pl->planned_12, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <p class="font-semibold text-md">&nbsp;
                                                </p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="flex mt-2 items-center">
                                <p class="text-md font-medium">Total: </p>
                                <p class="text-lg">&nbsp; &nbsp; Rp{{ number_format($sum_planned, 0, ',', '.') }}</p>
                            </div>
                            <hr class="my-2">

                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="flex">
                                    <div class="text-3xl font-semibold mx-auto">
                                        Planned Target Payment Form
                                    </div>
                                </div>
                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">January</p>
                                            <input type="number" name="as_planned_1" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_1, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">February</p>
                                            <input type="number" name="as_planned_2" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_2, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">March</p>
                                            <input type="number" name="as_planned_3" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_3, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">April</p>
                                            <input type="number" name="as_planned_4" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_4, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">May</p>
                                            <input type="number" name="as_planned_5" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_5, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">June</p>
                                            <input type="number" name="as_planned_6" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_6, 0, ',', '.' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">July</p>
                                            <input type="number" name="as_planned_7" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_7, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">August</p>
                                            <input type="number" name="as_planned_8" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_8, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">September</p>
                                            <input type="number" name="as_planned_9" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_9, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">October</p>
                                            <input type="number" name="as_planned_10" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_10, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">November</p>
                                            <input type="number" name="as_planned_11" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_11, 0, ',', '.' }}">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-mono">December</p>
                                            <input type="number" name="as_planned_12" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp {{ $pl->planned_12, 0, ',', '.' }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white bg-orange-500 hover:bg-orange-600 py-1 text-lg font-semibold w-full text-center rounded-lg">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
