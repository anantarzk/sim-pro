@extends('layouts.layout_administrator')
@section('title_page', 'REGISTRASI')



<div class="container mx-auto justify-between">
    <div class="my-20 mx-11 flex">
        {{-- Card 1 --}}

        <div
            class="mr-6 flex w-3/4 rounded-lg border border-gray-200 bg-white p-2 shadow-md dark:border-gray-700 dark:bg-gray-800">

            <div class="mr-6 w-2/3 p-6 bg-white">

                {{-- Form --}}
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-white">
                    Edit Engineering Design</h5>

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
                                placeholder=" " required="" value="{{ $users->first_name }}" readonly>
                            <label for="first_name"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                *Nama Panggilan</label>
                            <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500 dark:text-gray-400">
                                Tidak disarankan untuk Edit karna berkaitan dengan PIC Project
                            </p>
                        </div>

                    </div>

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="nik" type="number" name="nik"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="" value="{{ $users->nik }}">
                        <label for="nik"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            *Nomor Induk Karyawan</label>
                    </div>

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="email" type="email" name="email"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="" value="{{ $users->email }}">
                        <label for="email"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            *Email</label>
                    </div>

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="password" type="password" name="password"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="">
                        <label for="password"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            *Password</label>
                            <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500 dark:text-gray-400 font-semibold">
                               Setiap kali edit. Wajib mengulangi/isi Password
                            </p>
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
                                @if ($users->role_id == 1)
                                    <option disabled selected="" value="1">Manager</option>
                                @endif
                                @if ($users->role_id == 2)
                                    <option disabled selected="" value="2">Supervisor & Manager</option>
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
                                    @elseif ($lvl->id == 1)
                                        <option disabled value="{{ $lvl->id }}">{{ $lvl->name }}= Manager
                                            sementara
                                            disamakan dengan Supervisor</option>
                                    @endif
                                @endforeach

                            </select>
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
                                <option value="Manager Design">Manager Design</option>
                                <option value="Asst. Manager">Asst. Manager</option>
                                <option value="Spv. Mechanical">Spv. Mechanical</option>
                                <option value="Spv. Electrical">Spv. Electrical</option>
                                <option value="Sr. Mechanical">Sr. Mechanical</option>
                                <option value="Sr. Electrical">Sr. Electrical</option>
                                <option value="Sr. MIT">Sr. MIT</option>
                                <option value="MIT Engineer">MIT</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Adminitrasi">Adminitrasi</option>
                            </select>
                        </div>

                        <div class="group relative z-0 mb-6 w-full">
                            <label for="section"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                                Section
                            </label>
                            <select id="section" name="section"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400">
                                <option disabled selected="" value="{{ $users->section }}">{{ $users->section }}
                                </option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Manufacturing IT">Manufacturing IT</option>
                            </select>
                            <p id="helper-text-explanation" class="mt-0 text-xs text-gray-500 dark:text-gray-400">
                                For PIC Project.
                            </p>
                        </div>
                    </div>

                    <div class="group relative z-0 mb-6 w-full">
                        <input id="created_by" type="text" name="created_by" readonly
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-orange-500 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-orange-400"
                            placeholder=" " required="" value="{{ Auth::user()->name }}">
                        <label for="created_by"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-orange-500 dark:text-gray-400 peer-focus:dark:text-orange-400">
                            Created By</label>
                    </div>

                    {{-- input ke table log activity --}}
                    <input type="text" hidden name="aktivitas"
                        value="{{ Auth::user()->first_name }} - Telah Edit Akun NIK = ">
                    <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">



                    <button type="submit"
                        class="w-full rounded-lg bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700">
                        EDIT ACCOUNT
                    </button>

                </form>

                {{-- EnD Form --}}
            </div>
            <div class="w-1/3 mt-24 ">
                {{-- Image --}}
                <img src="{{ asset('image/icon/administrator/register.png') }}" alt="tidak ada gambar">
                <span>Satu akun untuk seluruh fitur pada Engineering Design.</span>


                {{-- EnD Form --}}
            </div>

        </div>

        {{-- Card 2 --}}

        <div class="w-1/4 rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">

            <div class="p-1" style="height:440px">

                {{-- Tabel Akun --}}

                <div class="overflow-x-auto relative sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption
                            class="p-2 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            List Akun
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Semua Akun Engineering
                                Design</p>
                        </caption>
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-center">
                            <tr>
                                <th scope="col" class="p-2">
                                    No
                                </th>
                                <th scope="col" class="p-2">
                                    NIK
                                </th>

                                <th scope="col" class="p-2 text-left">
                                    Nama
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users1 as $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:-translate-y-1 hover:scale-102 hover:bg-gray-200 duration-200 text-center">

                                    <th scope="row"
                                        class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="p-2">{{ $item->nik }}</td>
                                    <td class="p-2 text-left">{{ $item->first_name }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>
                <br>
                {{ $users1 }}

            </div>


        </div>

    </div>
</div>
