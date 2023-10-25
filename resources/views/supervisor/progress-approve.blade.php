@extends('layouts.layout_supervisor')
@section('title_page', 'Progress Approval')



<div class="mt-20 flex mx-10">
    <div class="mx-auto w-full">
        <div class="flex justify-between my-2">


            <div class="bg-red-600 px-4 py-2 w-fit rounded-md text-white flex items-center space-x-3">
                <p class="text-4xl font-medium">
                    {{ $totalprojectaprroval }}
                </p>
                <p class="font-normal text-lg">
                    Ajuan menunggu approval
                </p>
            </div>
            {{-- Tombol Pencarian --}}
                <div class="w-2.5/ mt-3">

                    <form class="" action="" method="get">
                        <div class="flex">
                            <input type="search" id="keyword" name="keyword"
                                class="p-2 py-3 text-sm text-gray-900 bg-gray-50 border rounded-l border-gray-300  focus:ring-orange-500 focus:border-orange-500"
                                style="width: 350px;" placeholder="Type your search here" required>
                            <button type="submit"
                                class="text-white right-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-r-lg text-sm px-3 py-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </form>

                </div>
                {{-- Akhir Tombol Pencarian --}}
        </div>
        <div class="rounded-lg overflow-hidden">
            <table class="w-full">
                <thead class="text-md text-white uppercase bg-green-600 text-center  border border-gray-500">
                    <th class="p-2 w-[5%]">No.</th>
                    <th class="w-[25%]">Nama Proyek</th>
                    <th class="w-[10%]">Fase</th>
                    <th class="w-[15%]">Diajukan Oleh</th>
                    <th class="w-[15%]">Tanggal Ajuan</th>
                </thead>

                <tbody>
                    @foreach ($project as $object)
                        <tr class="hover:-translate-y-1 hover:scale-102 hover:bg-gray-100 duration-200 border">

                            {{-- Loop i++ --}}
                            <td class="p-2 font-medium text-center text-white bg-teal-600 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>
                            <td class="p-2 text-left">
                                @if ($object->id == $object->koneksikefr->id_fr_1 &&
                                    $object->id == $object->koneksikear->id_ar_2 &&
                                    $object->id == $object->koneksikepr01->id_pr_01_3 &&
                                    $object->id == $object->koneksikepa02->id_pa_02_3 &&
                                    $object->id == $object->koneksikepo03->id_po_03_3 &&
                                    $object->id == $object->koneksikepay04->id_pay_04_3 &&
                                    $object->id == $object->koneksikemn->id_mn_4 &&
                                    $object->id == $object->koneksikein->id_in_5 &&
                                    $object->id == $object->koneksikecl->id_cl_6)
                                    <a
                                        href="/redirect-proyek/{{ $object->id }}/{{ $object->koneksikefr->id_fr_1 }}/{{ $object->koneksikear->id_ar_2 }}/{{ $object->koneksikepr01->id_pr_01_3 }}/{{ $object->koneksikepa02->id_pa_02_3 }}/{{ $object->koneksikepo03->id_po_03_3 }}/{{ $object->koneksikepay04->id_pay_04_3 }}/{{ $object->koneksikemn->id_mn_4 }}/{{ $object->koneksikein->id_in_5 }}/{{ $object->koneksikecl->id_cl_6 }}">
                                        <p
                                            class="mb-1 text-base font-normal tracking-normal text-gray-900 hover:underline">
                                            {{ $object->project_name }}
                                        </p>
                                    </a>
                                @endif
                            </td>
                            <td class="p-2 text-center">
                                {{ $object->progress }}
                            </td>
                            <td class="p-2">
                                <div
                                    class="py-1 px-2 text-sm font-medium mx-auto text-white bg-orange-500 rounded w-fit">
                                    {{ $object->last_update_name }}
                                </div>
                            </td>
                            <td class="p-2 text-center">
                                {{ $object->last_update_date }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $project }}
        </div>
    </div>


</div>
