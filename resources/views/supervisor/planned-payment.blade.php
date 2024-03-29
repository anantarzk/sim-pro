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
                        <div class="p-4 bg-white border shadow-md rounded-t-lg">
                            <div class="space-x-4 mb-2 grid grid-cols-1">
                                <p
                                    class="text-3xl border-b-orange-500 py-1 font-medium rounded text-orange-500 flex items-center justify-center">
                                    Planned Target Payment
                                </p>
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
                            <div class="flex justify-between items-center my-2">
                                <div class="flex">
                                    <p class="text-lg">Target payment untuk tahun ini: &nbsp; </p>
                                    <p class="text-xl font-bold underline">Rp{{ number_format($sum_planned, 0, ',', '.') }}
                                    </p>
                                </div>


                                @if (
                                    $pl->planned_1 ||
                                        $pl->planned_2 ||
                                        $pl->planned_3 ||
                                        $pl->planned_4 ||
                                        $pl->planned_5 ||
                                        $pl->planned_6 ||
                                        $pl->planned_7 ||
                                        $pl->planned_8 ||
                                        $pl->planned_9 ||
                                        $pl->planned_10 ||
                                        $pl->planned_11 ||
                                        $pl->planned_12 != '')
                                    <!-- Modal toggle -->
                                    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                        class="block text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:underline">
                                        Reset Target Payment
                                    </button>
                                @else
                                @endif

                                <!-- Main modal -->
                                <div id="default-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-fit max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center border-b rounded-t justify-center py-3 px-5">
                                                <p class="text-xl text-gray-900">
                                                    Saat tombol reset ditekan, perubahan tidak dapat dibatalkan
                                                </p>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center justify-center rounded-b space-x-3">
                                                @php
                                                    $num = range(1, 12);
                                                @endphp
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    @foreach ($num as $nums)
                                                        <input type="text" hidden name="planned_{{ $nums }}"
                                                            value="">
                                                    @endforeach
                                                    <button
                                                        class="bg-red-600 hover:bg-red-700  px-5 py-2.5  text-white hover:underline rounded-lg mt-4">
                                                        Reset target payment
                                                    </button>
                                                </form>
                                                <button
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900"
                                                    onclick="simulateEscape()">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-2">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="flex">
                                    <div class="text-xl font-mono font-bold mx-auto">
                                        Planned Target Payment Form
                                    </div>
                                </div>
                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p>January</p>
                                            <input type="text" name="as_planned_1" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_1) ? number_format($pl->planned_1, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>February</p>
                                            <input type="text" name="as_planned_2" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_2) ? number_format($pl->planned_2, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>March</p>
                                            <input type="text" name="as_planned_3" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_3) ? number_format($pl->planned_3, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>April</p>
                                            <input type="text" name="as_planned_4" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_4) ? number_format($pl->planned_4, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>May</p>
                                            <input type="text" name="as_planned_5" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_5) ? number_format($pl->planned_5, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>June</p>
                                            <input type="text" name="as_planned_6" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_6) ? number_format($pl->planned_6, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex my-5">
                                    <div class="flex justify-between space-x-5 mx-auto">
                                        <div class="text-xl text-center font-medium">
                                            <p>July</p>
                                            <input type="text" name="as_planned_7" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_7) ? number_format($pl->planned_7, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>August</p>
                                            <input type="text" name="as_planned_8" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_8) ? number_format($pl->planned_8, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>September</p>
                                            <input type="text" name="as_planned_9" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_9) ? number_format($pl->planned_9, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>October</p>
                                            <input type="text" name="as_planned_10" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_10) ? number_format($pl->planned_10, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>November</p>
                                            <input type="text" name="as_planned_11" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_11) ? number_format($pl->planned_11, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                        <div class="text-xl text-center font-medium">
                                            <p>December</p>
                                            <input type="text" name="as_planned_12" id="floating_company"
                                                oninput="validity.valid||(value=''); formatAngka(this);"
                                                value="{{ isset($pl->planned_12) ? number_format($pl->planned_12, 0, ',', '.') : '' }}"
                                                class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange-500 peer">
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <button type="submit"
                            class="text-white bg-orange-500 hover:bg-orange-600 py-1 text-lg font-semibold w-full text-center rounded-b-lg">
                            Submit
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

<script>
    function simulateEscape() {
        // Create a new KeyboardEvent for the "Escape" key
        const escapeEvent = new KeyboardEvent('keydown', {
            key: 'Escape',
            code: 'Escape',
            keyCode: 27,
            which: 27,
        });
        document.dispatchEvent(escapeEvent);
    }

    function formatAngka(input) {
        // Menghilangkan karakter selain angka
        let angka = input.value.replace(/[^\d]/g, '');

        // Menambahkan tanda titik setiap ribuan
        angka = angka.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Update nilai input
        input.value = angka;
    }
</script>
