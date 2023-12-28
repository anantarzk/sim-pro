@extends('layouts.layout_supervisor')
@section('title_page', 'Delete FORM')


<div
    class="mt-20 p-6 max-w-2xl mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <p class="text-2xl font-bold tracking-tight text-gray-900 text-center">Anda yakin untuk menghapus form ini?
    </p>
    <br>

    <br>
    <div class="p-1 bg-white ">
        <table class="w-full text-lg">
            <tbody>
                <tr>
                    <td class="font-bold text-gray-700 w-36">
                        Nama Form
                    </td>
                    <td>
                        :
                    </td>
                    <td class="">
                        {{ $standar_forms->name_form }}
                    </td>
                </tr>

                <tr>
                    <td class="font-bold text-gray-700">
                        Diupload oleh
                    </td>
                    <td>
                        :
                    </td>
                    <td class="">
                        {{ $standar_forms->uploaded_by }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>

    <div class="flex justify-end space-x-2">
        <form action="/supervisor-delete-detail-data-form/{{ $standar_forms->id }} " method="post">
            @csrf
            @method('delete')


            <button>

            </button>
            {{-- input ke table log activity --}}
            <input type="text" hidden name="aktivitas"
                value="{{ Auth::user()->first_name }} - Menghapus Standar Formulir  =  {{ $standar_forms->name_form }}">
            <input type="text" hidden name="waktu" value="{{ date('d-m-Y H:i') }}">


            <button type="submit"
                class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-red-900">Hapus
                Form</button>

        </form>


        <br>
        <a href="/supervisor-standar-form">
            <button type="button"
                class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center">
                Batal
            </button>
        </a>
    </div>

</div>
