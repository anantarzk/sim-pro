@extends('layouts.layout_administrator')
@section('title_page', 'Profile')



<div class="my-32 mx-56">
    <div class= "font-bold text-3xl text-gray-900 ml-5">Profil</div>
    <div class="mt-6 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4 rounded-lg">
        <div class="w-full ">
            <div class="bg-white rounded-lg shadow-xl border-2">
                {{-- card header --}}
                <div class="flex space-x-20 mx-12 my-5">
                    <div class="space-y-10">
                        <div class="py-2">
                            <div class="font-light text-lg">Nama Lengkap:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="py-2">
                            <div class="font-light text-lg">Nomor Induk Karyawan:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> {{ Auth::user()->nik }}</div>
                        </div>
                    </div>
                    <div class="space-y-10">
                        <div class="py-2">
                            <div class="font-light text-lg">Nama Panggilan:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> {{ Auth::user()->first_name }}
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="font-light text-lg">Posisi/Jabatan:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> {{ Auth::user()->jabatan }}</div>
                        </div>
                    </div>
                    <div>
                        <div class="py-2">
                            <div class="font-light text-lg">Divisi:</div>
                            <div class="text-gray-800 text-4xl font-mono font-bold"> {{ Auth::user()->section }}</div>
                        </div>
                    </div>
                </div>

                {{-- card footer --}}
                <div class="border-t-2  ">
                    <div class="mx-12 my-3 flex space-x-20">
                        <div class="py-2">
                            <div class="font-light text-lg">Dibuat oleh:</div>
                            <div class="text-gray-800 text-3xl font-mono font-medium"> {{ Auth::user()->created_by }}
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="font-light text-lg">Hak akses:</div>
                            {{-- @foreach ($role_id as $role) --}}
                            <div class="text-gray-800 text-3xl font-mono font-medium">
                                {{-- @if ($role == 1)
                                        Web admin
                                    @elseif ($role == 2)
                                        Manajerial
                                    @else
                                        Staf
                                    @endif --}}
                                {{ Auth::user()->role_id }}
                            </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>

                </div>
                {{-- akhir card --}}
            </div>
        </div>
    </div>
</div>

