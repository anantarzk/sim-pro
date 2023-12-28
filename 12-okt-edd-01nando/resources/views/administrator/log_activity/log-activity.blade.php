@extends('layouts.layout_administrator')
@section('title_page', 'Log Activity')

<div class="my-20 mx-10">
    <div>
        <div class="flex">
            {{-- div diisi mx-auto --}}
            <div class="mx-auto w-full">
                <div class="flex justify-between">
                    <div>
                        <h1 class=" text-2xl font-extrabold tracking-tight leading-none text-gray-900  text-left">
                            LOG Aktivitas
                            <p class="text-base font-normal text-gray-500 ">
                                History Semua Aktivitas User Engineering Design BSIN-K.</p>
                        </h1>
                    </div>

                    {{-- Tombol Pencarian --}}
                    <div class="w-2.5/">

                        <form class="" action="" method="get">
                            <div class="flex">
                                <input type="search" id="keyword" name="keyword"
                                    class="p-2 py-3 text-sm text-gray-900 bg-gray-50 border rounded-l border-gray-300  focus:ring-orange-500 focus:border-orange-500"
                                    style="width: 350px;" placeholder="Type your search here" required>
                                <button type="submit"
                                    class="text-white right-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-r-lg text-sm px-3 py-2">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>

                    </div>

                    {{-- <form action="submit">
                        <div class="flex mt-2">
                            <div class="relative z-0 group mr-3" style="width:230px">
                                <input type="date" name="floating_email" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required="">
                                <label for="floating_email"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                                    Mulai</label>
                            </div>


                            <div class="relative z-0 group mr-3" style="width:230px">
                                <input type="date" name="floating_email" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="" required="">
                                <label for="floating_email"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Hingga Tanggal</label>
                            </div>
                            <button type="submit"
                                class="text-white right-2.5 bottom-2.5 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4">
                                <svg aria-hidden="true" class="w-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </form> --}}

                </div>

                <br>

                {{-- awal tabel log --}}

                {{-- trim --}}
                <div class="rounded-md">
                    {{-- Tabel --}}
                    <table class="w-full text-sm text-gray-500  border-x border-b">
                        <thead class="text-md text-gray-700 bg-gray-200 text-center table-fixed sticky top-0">
                            <th class="p-2">ID No</th>
                            <th class="text-left">Activity</th>
                            <th class="">Time</th>

                        </thead>

                        <tbody>
                            {{-- Ambil data dari controler --}}
                            @foreach ($log_activity as $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200">

                                    {{-- Loop i++ --}}
                                    <td class="p-2 font-medium text-gray-900 whitespace-nowrap text-center">
                                        {{ $item->id }}
                                    </td>

                                    {{-- Panggil data --}}
                                    <td class="p-2">
                                        {{ $item->aktivitas }}
                                    </td>


                                    <td class="p-2 text-center">
                                        {{ $item->waktu }}
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Akhir  Tabel --}}
                    {{ $log_activity }}
                </div>

                {{-- akhir tabel log --}}
            </div>

        </div>
    </div>
</div>
