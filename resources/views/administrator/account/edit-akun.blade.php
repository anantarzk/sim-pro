@extends('layouts.layout_administrator')
@section('title_page', 'Ubah akun')


<div class="container mx-auto justify-between">
    <div class="my-20 mx-11">
        {{-- tombol back --}}
        <div class="mb-5">
            <a href="/dashboard-administrator" class="hover:underline text-blue-600 hover:text-blue-800 text-lg"><-
                    Kembali ke beranda</a>
        </div>
        {{-- Card 1 --}}

        <div class="mr-6 flex rounded-lg border border-gray-200 bg-white p-2 shadow-md">

            <div class="px-6 pt-4 bg-white">

                {{-- Form --}}
                <h5 class="text-3xl font-semibold font-mono tracking-tight text-black dark:text-white">
                    Ubah akun</h5>
                    <p class="text-base font-normal text-gray-500 mb-2">
                        Halaman formulir ubah akun.</p>
                {{-- erorr notifikasi ketika inputan tidak sesuai --}}
                <br>
                @if ($errors->any())
                    <div
                        class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- notifikasi berhasil untuk form yang telah diinput --}}
                @if (Session::has('status'))
                    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ Session::get('message') }}
                    </div>
                @endif


                <!-- Formulir -->
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-6">

                        <div class="group relative z-0 mb-6 w-full">
                            <input id="name" type="text" name="name"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                placeholder=" " required="" value="{{ $users->name }}">
                            <label for="name"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Nama Lengkap</label>
                        </div>

                        <div class="group relative z-0 mb-6 w-full">
                            <input id="first_name" type="text" name="first_name"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                placeholder=" " required="" value="{{ $users->first_name }}">
                            <label for="first_name"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Nama Panggilan</label>
                            <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500 dark:text-gray-400">
                                Tidak disarankan untuk Ubah karna berkaitan dengan PIC Project
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="group relative z-0 mb-6 w-full">
                            <input id="nik" type="number" name="nik"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                placeholder=" " required="" value="{{ $users->nik }}">
                            <label for="nik"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Nomor Induk Karyawan</label>
                        </div>
                        <div class="group relative z-0 mb-6 w-full">
                            <label for="jabatan"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Posisi
                            </label>
                            <select id="jabatan" name="jabatan"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                                required>
                                <option disabled selected="" value="{{ $users->jabatan }}">{{ $users->jabatan }}
                                </option>
                                <option value="Manager Eng Design">  Manager Eng Design</option>
                                    <option value="Asst. Manager">Asst. Manager</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="Spv. Mechanical">Spv. Mechanical</option>
                                    <option value="Spv. Electrical">Spv. Electrical</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="Sr. Mechanical">Sr. Mechanical</option>
                                    <option value="Sr. Electrical">Sr. Electrical</option>
                                    <option value="Sr. MIT">Sr. MIT</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="MIT Engineer">MIT</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="" disabled class="text-xs">============</option>
                                    <option value="Web admin">Web admin</option>
                            </select>
                        </div>

                        <div class="group relative z-0 mb-6 w-full">
                            <label for="section"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                Divisi (Untuk assign PIC proyek)
                            </label>
                            <select id="section" name="section"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400">
                                <option disabled selected="" value="{{ $users->section }}">{{ $users->section }}
                                </option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Manufacturing IT">Manufacturing IT</option>
                            </select>
                            <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500">
                                Dapat dikosongkan
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="group relative z-0 mb-6 w-full">
                            <label for="role_id"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Hak Akses
                            </label>
                            <select id="role_id" name="role_id"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                                required>
                                {{--                                 @if ($users->role_id == 1)
                                    <option disabled selected="" value="1">Manager</option>
                                @endif --}}
                                @if ($users->role_id == 2)
                                    <option disabled selected="" value="2">Manajerial</option>
                                @endif
                                @if ($users->role_id == 3)
                                    <option disabled selected="" value="3">Staff</option>
                                @endif
                                @if ($users->role_id == 4)
                                    <option disabled selected="" value="4">Administrator</option>
                                @endif

                                {{-- Menampilkan level user --}}
                                @foreach ($roles as $lvl)
                                    @if ($lvl->id != 1)
                                        <option value="{{ $lvl->id }}">{{ $lvl->name }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>
                        <div class="group relative z-0 mb-6 w-full">
                            <input id="password" type="password" name="password"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                                placeholder=" " required="">
                            <label for="password"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Password</label>
                            <p id="helper-text-explanation"
                                class="mt-0 text-xs text-gray-500 dark:text-gray-400 font-bold">
                                Wajib mengisikan ulang password setiap melakukan perubahan akun.
                            </p>
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
                        value="{{ Auth::user()->first_name }} - Telah Edit Akun NIK = ">
                    <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">



                    <button type="submit"
                        class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                        Simpan perubahan
                    </button>

                </form>
            </div>
        </div>



    </div>
</div>
