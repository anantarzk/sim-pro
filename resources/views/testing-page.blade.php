@for ($i = 1; $i <= 10; $i++)
   $mny_epq_pr_{{ $i }} +
@endfor
<br>

{{-- @for ($i = 2; $i <= 30; $i++)
    @php
        $fieldName = "pr_jasa_$i";
        $modalId = "modal$i";
        $dropdownId = "dropdown$i";
        $fileInputName = "as_pr_jasa_$i";
        $numberInputName = "as_mny_jasa_pr_$i";
    @endphp

    @if ($koneksipr->$fieldName != '')
        <div class="justify-center flex space-x-2">
            <button type="button"
                class="text-white bg-gray-500 hover:bg-gray-600 p-3 rounded-md cursor-pointer"
                data-modal-target="{{ $modalId }}" data-modal-show="{{ $modalId }}"
                data-modal-toggle="{{ $modalId }}">Ubah</button>
            <button data-dropdown-toggle="{{ $dropdownId }}" type="button"
                class="text-white bg-red-500 hover:bg-red-600 p-3 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" fill="white" viewBox="0 0 48 48">
                    <path d="M 24 4 C 20.491685 4 17.570396 6.6214322 17.080078 10 L 10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10 L 6.5 10 A 1.50015 1.50015 0 1 0 6.5 13 L 8.6386719 13 L 11.15625 39.029297 C 11.427329 41.835926 13.811782 44 16.630859 44 L 31.367188 44 C 34.186411 44 36.570826 41.836168 36.841797 39.029297 L 39.361328 13 L 41.5 13 A 1.50015 1.50015 0 1 0 41.5 10 L 38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10 L 30.919922 10 C 30.429604 6.6214322 27.508315 4 24 4 z M 24 7 C 25.879156 7 27.420767 8.2681608 27.861328 10 L 20.138672 10 C 20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13 L 36.347656 13 L 33.855469 38.740234 C 33.730439 40.035363 32.667963 41 31.367188 41 L 16.630859 41 C 15.331937 41 14.267499 40.033606 14.142578 38.740234 L 11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5 L 19 34.5 A 1.50015 1.50015 0 1 0 22 34.5 L 22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5 L 26 34.5 A 1.50015 1.50015 0 1 0 29 34.5 L 29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z">
                    </path>
                </svg>
            </button>
        </div>
    @else
        <input type="file" name="{{ $fileInputName }}" id="">
        <div class="">
            <input type="number" id="base-input"
                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                placeholder="Rp (input nilai PR)" min="0" max="999999999999" oninput="validity.valid||(value='');"
                name="{{ $numberInputName }}">
        </div>
    @endif

@endfor

<br> --}}
