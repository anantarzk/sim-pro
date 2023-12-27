@extends('layouts.layout_administrator')
@section('title_page', 'Hapus Akun')

<div class="container mx-auto">
    <div class="my-20 mx-11">
        {{-- tombol back --}}
        <div class="mb-5">
            <a href="/dashboard-administrator" class="hover:underline text-blue-600 hover:text-blue-800 text-lg"><- Kembali ke beranda</a>
        </div>

        <div class="w-3/4 mx-auto rounded-lg border border-gray-300 bg-white px-6 py-4 shadow-md">
            <h5 class="text-3xl font-bold tracking-tight text-black dark:text-white">
                Hapus Akun</h5>
                <p class="text-base font-normal text-gray-500 mb-6">
                    Halaman konfirmasi untuk menghapus akun.</p>
            <!-- Formulir -->
            <form action="" method="post">
                @csrf
                @method('delete')

                <div class="grid grid-cols-2 gap-6">

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="name" type="text" name="name" readonly
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="" value="{{ $users->name }}">
                        <label for="name"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Nama Lengkap</label>
                    </div>

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="first_name" type="text" name="first_name"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="" value="{{ $users->first_name }}" readonly>
                        <label for="first_name"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Nama Panggilan</label>
                    </div>

                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="group relative z-0 mb-6 w-full">
                        <input id="nik" type="number" name="nik" readonly
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="" value="{{ $users->nik }}">
                        <label for="nik"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Nomor Induk Karyawan</label>
                    </div>
                    <div class="group relative z-0 mb-6 w-full">
                        <label for="jabatan"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Jabatan/Posisi
                        </label>
                        <select id="jabatan" name="jabatan"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                            required>
                            <option disabled selected="" value="{{ $users->jabatan }}">{{ $users->jabatan }}
                            </option>

                        </select>
                    </div>
                    <div class="group relative z-0 mb-6 w-full">
                        <label for="section"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Divisi
                        </label>
                        <select id="section" name="section"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400 ">
                            <option disabled selected="" value="{{ $users->section }}">{{ $users->section }}
                            </option>

                        </select>
                        <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500 dark:text-gray-400">
                            For PIC Project.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <div class="group relative z-0 mb-6 w-full">
                        <label for="role_id"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Hak Akses
                        </label>
                        <select id="role_id" name="role_id"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                            required>
                            @if ($users->role_id == 2)
                                <option disabled selected="" value="2">Manajerial</option>
                            @endif
                            @if ($users->role_id == 3)
                                <option disabled selected="" value="3">Staff</option>
                            @endif
                            @if ($users->role_id == 4)
                                <option disabled selected="" value="4">Administrator</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="group relative z-0 mb-6 w-full">
                    <input id="created_by" type="text" name="created_by" readonly
                        class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                        placeholder=" " required="" value="{{ Auth::user()->name }}">
                    <label for="created_by"
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                        Dibuat oleh</label>
                </div>

                {{-- input ke table log activity --}}
                <input type="text" hidden name="aktivitas"
                    value="{{ Auth::user()->first_name }} - Telah Hapus Akun NIK = ">
                <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">

                <button type="submit"
                    class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                    Hapus akun
                </button>
            </form>
        </div>



    </div>
