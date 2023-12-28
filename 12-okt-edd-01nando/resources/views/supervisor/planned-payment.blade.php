@extends('layouts.layout_supervisor')
@section('title_page', 'Form Planned Payment')

@section('konten')
    <div class="mx-10 my 20">
        @if ($pyCount == 0)
            <div class="flex flex-col items-center justify-center mt-44">
                <p>Klik Tombol dibawah untuk mulai mengelola standar formulir pada 6 Step Project</p>

                <br>
                <form action="" method="post">
                    @csrf
                    <input type="text" name="marking" value="Planned-1" hidden>
                    {{-- input ke table log activity --}}
                    <input type="text" hidden name="aktivitas"
                        value="{{ Auth::user()->first_name }} - Mulai mengelola Planned Payment OB">
                    <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

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
                            <p class="text-2xl  mb-2 text-white p-3 w-fit rounded bg-orange-500" >
                                Planned Target
                                Payment({{ $pl->year }})</p>

                            <hr>
                            <div class="flex justify-between">
                                <table class="mx-auto w-full">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <p class="font-light text-lg ">January({{ $pl->date_planned_1 }})</p>

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
                                                <p class="font-light text-lg ">February({{ $pl->date_planned_2 }})</p>
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
                                                <p class="font-light text-lg ">March({{ $pl->date_planned_3 }})</p>
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
                                                <p class="font-light text-lg ">April({{ $pl->date_planned_4 }})</p>
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
                                                <p class="font-light text-lg ">May({{ $pl->date_planned_5 }})</p>
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
                                                <p class="font-light text-lg ">June({{ $pl->date_planned_6 }})</p>
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
                                                <p class="font-light text-lg ">July({{ $pl->date_planned_7 }})</p>
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
                                                <p class="font-light text-lg ">August({{ $pl->date_planned_8 }})</p>
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
                                                <p class="font-light text-lg ">September({{ $pl->date_planned_9 }})</p>
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
                                                <p class="font-light text-lg ">October({{ $pl->date_planned_10 }})</p>
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
                                                <p class="font-light text-lg ">November({{ $pl->date_planned_11 }})</p>
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
                                                <p class="font-light text-lg ">December({{ $pl->date_planned_12 }})</p>
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
                                            <p class="font-light">January</p>
                                            <input type="number" name="as_planned_1" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">February</p>
                                            <input type="number" name="as_planned_2" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">March</p>
                                            <input type="number" name="as_planned_3" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">April</p>
                                            <input type="number" name="as_planned_4" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">May</p>
                                            <input type="number" name="as_planned_5" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">June</p>
                                            <input type="number" name="as_planned_6" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">July</p>
                                            <input type="number" name="as_planned_7" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">August</p>
                                            <input type="number" name="as_planned_8" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">September</p>
                                            <input type="number" name="as_planned_9" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">October</p>
                                            <input type="number" name="as_planned_10" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">November</p>
                                            <input type="number" name="as_planned_11" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">December</p>
                                            <input type="number" name="as_planned_12" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer"
                                                placeholder="Rp">
                                        </div>
                                    </div>
                                </div>

                                {{-- date --}}
                                <div class="flex flex-col place-items-center">
                                    <div class="text-3xl font-semibold mx-auto">
                                        Planned Date Target Payment Form
                                    </div>
                                    <div class="w-[50%] ">
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
                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">January</p>
                                            <input type="date" name="as_date_planned_1" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">February</p>
                                            <input type="date" name="as_date_planned_2" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">March</p>
                                            <input type="date" name="as_date_planned_3" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">April</p>
                                            <input type="date" name="as_date_planned_4" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">May</p>
                                            <input type="date" name="as_date_planned_5" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">June</p>
                                            <input type="date" name="as_date_planned_6" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">July</p>
                                            <input type="date" name="as_date_planned_7" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">August</p>
                                            <input type="date" name="as_date_planned_8" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">September</p>
                                            <input type="date" name="as_date_planned_9" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">October</p>
                                            <input type="date" name="as_date_planned_10" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">November</p>
                                            <input type="date" name="as_date_planned_11" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p class="font-light">December</p>
                                            <input type="date" name="as_date_planned_12" id="floating_company"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                    </div>
                                </div>

                                {{-- input ke table log activity --}}
                                <input type="text" hidden name="aktivitas"
                                    value="{{ Auth::user()->first_name }} - Memperbarui Planned Payment OB">
                                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

                                <button type="submit"
                                    class="text-white bg-orange-500 hover:bg-orange-600 py-1 text-lg font-semibold w-full text-center rounded-lg">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
