{{-- Hapus HOV --}}
@php
$num = range(1, 5);
@endphp
{{-- 1 --}}
@foreach ($num as $index => $number)
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_i_periksa_m_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_i_periksa_m_{{ $number }}" value="">
<input type="text" hidden name="cl_i_periksa_m_{{ $number }}" value="">
@endif
{{-- 2 --}}
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_qas_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_qas_{{ $number }}" value="">
<input type="text" hidden name="cl_qas_{{ $number }}" value="">
@endif
{{-- 3 --}}
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_i_pakai_m_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_i_pakai_m_{{ $number }}" value="">
<input type="text" hidden name="cl_i_pakai_m_{{ $number }}" value="">
@endif
{{-- 4 --}}
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_training_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_training_{{ $number }}" value="">
<input type="text" hidden name="cl_training_{{ $number }}" value="">
@endif
{{-- 5 --}}
<div id="dropdown5{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_l_trouble_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_l_trouble_{{ $number }}" value="">
<input type="text" hidden name="cl_l_trouble_{{ $number }}" value="">
@endif
{{-- 6 --}}
<div id="dropdown6{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_camb_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_camb_{{ $number }}" value="">
<input type="text" hidden name="cl_camb_{{ $number }}" value="">
@endif
{{-- 7 --}}
<div id="dropdown7{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_im_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_im_{{ $number }}" value="">
<input type="text" hidden name="cl_im_{{ $number }}" value="">
@endif
{{-- 8 --}}
<div id="dropdown8{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_chor_cl_{{ $number }}" value="">
<input type="text" hidden name="date_cl_chor_{{ $number }}" value="">
<input type="text" hidden name="cl_chor_{{ $number }}" value="">
@endif
{{-- dropdown hapus HOV --}}

{{-- Hapus Installation --}}
@php
$num = range(1, 4);
@endphp
{{-- 1 --}}
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_ipo_in_{{ $number }}" value="">
<input type="text" hidden name="date_in_ipo_{{ $number }}" value="">
<input type="text" hidden name="in_ipo_{{ $number }}" value="">
@endif
{{-- 2 --}}
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_ecr_in_{{ $number }}" value="">
<input type="text" hidden name="date_in_ecr_{{ $number }}" value="">
<input type="text" hidden name="in_ecr_{{ $number }}" value="">
@endif
{{-- 3 --}}
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_sc_in_{{ $number }}" value="">
<input type="text" hidden name="date_in_sc_{{ $number }}" value="">
<input type="text" hidden name="in_sc_{{ $number }}" value="">
@endif
{{--  4 --}}
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_sccs_in_{{ $number }}" value="">
<input type="text" hidden name="date_in_sccs_{{ $number }}" value="">
<input type="text" hidden name="in_sccs_{{ $number }}" value="">
@endif
{{-- 5 --}}
<div id="dropdown5{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_ir_in_{{ $number }}" value="">
<input type="text" hidden name="date_in_ir_{{ $number }}" value="">
<input type="text" hidden name="in_ir_{{ $number }}" value="">
@endif
{{-- dropdown hapus IN --}}


{{-- fungsional hapus MN --}}
@php
$num = range(1, 10);
@endphp
@foreach ($num as $index => $number)
<div id="dropdown{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_atribut_mn_{{ $number }}" value="">
<input type="text" hidden name="date_mn_atribut_{{ $number }}" value="">
<input type="text" hidden name="mn_atribut_{{ $number }}" value="">
@endif
<p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
<div class="grid grid-cols-1 space-x-2 mt-2">
<button type="submit"
class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
Ya, saya yakin
</button></div></div></form>


{{-- hapus PAY --}}
@php
$num = range(1, 50);
@endphp
{{-- 1 --}}
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_parts_pay_{{ $number }}" value="">
<input type="text" hidden name="date_pay_parts_{{ $number }}" value="">
<input type="text" hidden name="mny_parts_pay_{{ $number }}" value="">
<input type="text" hidden name="pay_parts_{{ $number }}" value="">
@endif
{{-- 2 --}}
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_jasa_pay_{{ $number }}" value="">
<input type="text" hidden name="date_pay_jasa_{{ $number }}" value="">
<input type="text" hidden name="mny_jasa_pay_{{ $number }}" value="">
<input type="text" hidden name="pay_jasa_{{ $number }}" value="">
@endif
{{-- 3 --}}
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_mnftr_pay_{{ $number }}" value="">
<input type="text" hidden name="date_pay_mnftr_{{ $number }}" value="">
<input type="text" hidden name="mny_mnftr_pay_{{ $number }}" value="">
<input type="text" hidden name="pay_mnftr_{{ $number }}" value="">
@endif
{{--  4 --}}
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_da_pay_{{ $number }}" value="">
<input type="text" hidden name="date_pay_da_{{ $number }}" value="">
<input type="text" hidden name="da_pay_{{ $number }}" value="">
@endif

{{-- hapus PO --}}
@php
$num = range(1, 50);
@endphp
{{-- 1 --}}
@foreach ($num as $index => $number)
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_parts_po_{{ $number }}" value="">
<input type="text" hidden name="date_po_parts_{{ $number }}" value="">
<input type="text" hidden name="mny_parts_po_{{ $number }}" value="">
<input type="text" hidden name="po_parts_{{ $number }}" value="">
@endif
{{-- 2 --}}
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_jasa_po_{{ $number }}" value="">
<input type="text" hidden name="date_po_jasa_{{ $number }}" value="">
<input type="text" hidden name="mny_jasa_po_{{ $number }}" value="">
<input type="text" hidden name="po_jasa_{{ $number }}" value="">
@endif
{{-- 3 --}}
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_mnftr_po_{{ $number }}" value="">
<input type="text" hidden name="date_po_mnftr_{{ $number }}" value="">
<input type="text" hidden name="mny_mnftr_po_{{ $number }}" value="">
<input type="text" hidden name="po_mnftr_{{ $number }}" value="">
@endif
{{--  4 --}}
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_capo_po_{{ $number }}" value="">
<input type="text" hidden name="date_po_capo_{{ $number }}" value="">
<input type="text" hidden name="po_capo_{{ $number }}" value="">
@endif




{{-- Hapus PA --}}
@php
$num = range(1, 50);
@endphp
{{-- 1 --}}
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_parts_pa_{{ $number }}" value="">
<input type="text" hidden name="date_pa_parts_{{ $number }}" value="">
<input type="text" hidden name="mny_parts_pa_{{ $number }}" value="">
<input type="text" hidden name="pa_parts_{{ $number }}" value="">
@endif
{{-- 2 --}}
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_jasa_pa_{{ $number }}" value="">
<input type="text" hidden name="date_pa_jasa_{{ $number }}" value="">
<input type="text" hidden name="mny_jasa_pa_{{ $number }}" value="">
<input type="text" hidden name="pa_jasa_{{ $number }}" value="">
@endif
{{-- 3 --}}
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_mnftr_pa_{{ $number }}" value="">
<input type="text" hidden name="date_pa_mnftr_{{ $number }}" value="">
<input type="text" hidden name="mny_mnftr_pa_{{ $number }}" value="">
<input type="text" hidden name="pa_mnftr_{{ $number }}" value="">
@endif
{{--  4 --}}
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_epq_pa_{{ $number }}" value="">
<input type="text" hidden name="date_pa_epq_{{ $number }}" value="">
<input type="text" hidden name="pa_epq_{{ $number }}" value="">
@endif


{{-- hapus PR --}}
@php
$num = range(1, 50);
@endphp
{{-- 1 --}}
@foreach ($num as $index => $number)
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_parts_pr_{{ $number }}" value="">
<input type="text" hidden name="date_pr_parts_{{ $number }}" value="">
<input type="text" hidden name="mny_parts_pr_{{ $number }}" value="">
<input type="text" hidden name="pr_parts_{{ $number }}" value="">
@endif
{{-- 2 --}}
@foreach ($num as $index => $number)
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_jasa_pr_{{ $number }}" value="">
<input type="text" hidden name="date_pr_jasa_{{ $number }}" value="">
<input type="text" hidden name="mny_jasa_pr_{{ $number }}" value="">
<input type="text" hidden name="pr_jasa_{{ $number }}" value="">
@endif
{{-- 3 --}}
@foreach ($num as $index => $number)
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_mnftr_pr_{{ $number }}" value="">
<input type="text" hidden name="date_pr_mnftr_{{ $number }}" value="">
<input type="text" hidden name="mny_mnftr_pr_{{ $number }}" value="">
<input type="text" hidden name="pr_mnftr_{{ $number }}" value="">
@endif
{{--  4 --}}
@foreach ($num as $index => $number)
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_by_rfq_pr_{{ $number }}" value="">
<input type="text" hidden name="date_pr_rfq_{{ $number }}" value="">
<input type="text" hidden name="pr_rfq_{{ $number }}" value="">
@endif

{{-- Hapus AR --}}
@php
$num = range(1, 5);
@endphp
{{-- 1 --}}
@foreach ($num as $index => $number)
<div id="dropdown1{{ $number }}">
@if ($number)
<input type="text" hidden name="up_draw_me_by_{{ $number }}" value="">
<input type="text" hidden name="date_draw_me_{{ $number }}" value="">
<input type="text" hidden name="draw_me_{{ $number }}" value="">
@endif
{{-- 2 --}}
@foreach ($num as $index => $number)
<div id="dropdown2{{ $number }}">
@if ($number)
<input type="text" hidden name="up_draw_el_by_{{ $number }}" value="">
<input type="text" hidden name="date_draw_el_{{ $number }}" value="">
<input type="text" hidden name="draw_el_{{ $number }}" value="">
@endif
{{-- 3 --}}
@foreach ($num as $index => $number)
<div id="dropdown3{{ $number }}">
@if ($number)
<input type="text" hidden name="up_approval_lay_by_{{ $number }}" value="">
<input type="text" hidden name="date_approval_lay_{{ $number }}" value="">
<input type="text" hidden name="approval_lay_{{ $number }}" value="">
@endif
{{--  4 --}}
@foreach ($num as $index => $number)
<div id="dropdown4{{ $number }}">
@if ($number)
<input type="text" hidden name="up_approval_draw_by_{{ $number }}" value="">
<input type="text" hidden name="date_approval_draw_{{ $number }}" value="">
<input type="text" hidden name="approval_draw_{{ $number }}" value="">
@endif
{{-- 5 --}}
@foreach ($num as $index => $number)
<div id="dropdown5{{ $number }}">
@if ($number)
<input type="text" hidden name="up_dsgn_sheet_by_{{ $number }}" value="">
<input type="text" hidden name="date_dsgn_sheet_{{ $number }}" value="">
<input type="text" hidden name="dsgn_sheet_{{ $number }}" value="">
@endif
{{-- 6 --}}
@foreach ($num as $index => $number)
<div id="dropdown6{{ $number }}">
@if ($number)
<input type="text" hidden name="up_dr_meet_by_{{ $number }}" value="">
<input type="text" hidden name="date_dr_meet_{{ $number }}" value="">
<input type="text" hidden name="dr_meet_{{ $number }}" value="">
@endif
{{-- 7 --}}
@foreach ($num as $index => $number)
<div id="dropdown7{{ $number }}">
@if ($number)
<input type="text" hidden name="up_est_budget_by_{{ $number }}" value="">
<input type="text" hidden name="date_est_budget_{{ $number }}" value="">
<input type="text" hidden name="est_budget_{{ $number }}" value="">
@endif


{{-- Hapus FR --}}
@php
$num = range(1, 5);
@endphp
@foreach ($num as $index => $number)
<form action="" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div id="dropdown{{ $number }}" class="z-10 hidden bg-gray-800 rounded-lg w-110% p-4 shadow-md">
@if ($number)
<input type="text" hidden name="up_by_{{ $number }}" value="">
<input type="text" hidden name="date_atribut_{{ $number }}" value="">
<input type="text" hidden name="atribut_{{ $number }}" value="">
@endif
<p class="text-white">Apakah anda yakin untuk menghapus dokumen ini?</p>
<div class="grid grid-cols-1 space-x-2 mt-2">
<button type="submit"
class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md font-bold">
Ya, saya yakin
</button>
</div>
</div>
</form>
@endforeach



@if ($koneksifr->atribut_1 != '')
{{-- lihat --}}
<a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_1) }}"
target="blank" class=" py-2 px-1 rounded  hover:bg-gray-200   ">
<svg width="22" height="17" viewBox="0 0 22 17" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C11.36 15 11.72 15 12.08 14.95C12.03 14.63 12 14.32 12 14C12 13.44 12.08 12.88 12.24 12.34C11.83 12.44 11.42 12.5 11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 7.79 15.97 8.09 15.92 8.38C16.58 8.13 17.29 8 18 8C19.17 8 20.31 8.34 21.29 9C21.56 8.5 21.8 8 22 7.5C20.27 3.11 16 0 11 0ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5ZM17 10.5V12.5H21V14.5H17V16.5L14 13.5L17 10.5Z"
fill="black" />
</svg>
</a>
&emsp;
@endif
{{-- download --}}
<a href="{{ asset('storage/supervisor/project/01_FR/' . $koneksifr->atribut_1) }}"
target="blank" download="" class="hover:underline">
{{ $koneksifr->atribut_1 }}</a>



@foreach ($standar_project as $spt)
@if ($spt->file_dr_m_sheet_form != '')
<div class="flex justify-end mr-1 mt-4">
<a href="{{ asset('storage/supervisor/standarproject/' . $spt->file_dr_m_sheet_form) }}"
download="">
<div class="w-fit items-center space-x-1 flex fill-blue-600 hover:fill-blue-800">
<svg width="15" height="" viewBox="0 0 52 52"
xmlns="http://www.w3.org/2000/svg">
<path
d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z" />

<path
d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z" />
</svg>
<p
class="text-right hover:underline font-semibold text-md text-blue-600 hover:text-blue-800 ">
Klik untuk mengunduh formulir kerja</p>
</div>
</a>
</div>
@endif
@endforeach


<form action="" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="text" name="check" value="donecheck" hidden>
<input type="text" name="progress" value="Arrangement" hidden>
<input type="text" name="status_ar" value="Complete" hidden>
<input type="date" hidden name="status_ar_date" value="{{ date('Y-m-d') }}">
<input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
<input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>

<div class="flex space-x-1 w-full">
<button type="submit"
class="rounded-lg items-center p-3 my-1 w-full hover:bg-green-800 bg-green-600 flex">
<div class="flex mx-auto space-x-2 items-center">
<svg width="20" height="auto" viewBox="0 0 80 80" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M36 57.6L17.2 38.8L22.8 33.2L36 46.4L69.6 12.8C62 5.2 51.6 0 40 0C18 0 0 18 0 40C0 62 18 80 40 80C62 80 80 62 80 40C80 32.4 78 25.6 74.4 19.6L36 57.6Z"
fill="white" />
</svg>
<p class="text-white font-medium">
Approve Progress
</p>
</div>
</button>
</div>
</form>

<form action="" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="text" name="check" value="donecheck" hidden>
<input type="text" name="progress" value="Waiting Approval Arrangement" hidden>
<input type="text" name="status_ar" value="Revisi Arrangement" hidden>
<input type="date" hidden name="status_ar_date" value="{{ date('Y-m-d') }}">
<input type="text" name="approval_by" value="{{ Auth::user()->first_name }}" hidden>
<input type="text" name="approval_date" value="{{ date('Y-m-d') }}" hidden>
<button type="submit"
class="rounded-lg items-center text-white p-3 my-1 w-full hover:bg-yellow-600 bg-yellow-400 flex space-x-2">
<div class="flex mx-auto space-x-2 items-center">
<svg width="20" height="auto" viewBox="0 0 80 80" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M40 0C17.92 0 0 17.92 0 40C0 62.08 17.92 80 40 80C62.08 80 80 62.08 80 40C80 17.92 62.08 0 40 0ZM44 60H36V52H44V60ZM44 44H36V20H44V44Z"
fill="white" />
</svg>
<p class="text-white font-medium">
Revisi Progress
</p>
</div>
</button>
</form>

<script>
document.addEventListener('DOMContentLoaded', function(){
const obp = {
labels: ['Not Started', 'Cancelled', 'In Progress', 'Finished'],
datasets: [{data: ['{{ $not_started }}', '{{ $cancel }}', '{{ $in_progress }}',
'{{ $finished }}'],fill: true,backgroundColor: ['#314751',
'rgba(255, 99, 132, 1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'#09FA5E',],
borderWidth: 4}, ],};
const configobp = {type: "doughnut",data: obp,
options: {plugins: {legend: {position: 'bottom',align: 'center',}}},};
new Chart(document.getElementById("obproject"),configobp);
// FR Status
const dtFR = {labels: ['Approved', 'Waiting Approval',],
datasets: [{data: ['{{ $approved_fr }}', '{{ $on_progress_fr }}'],fill: true backgroundColor: [
'rgba(255, 99, 132, 1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',],
borderWidth: 4}, ],};
const configFR = {type: "doughnut",data: dtFR,options: {plugins: {legend: {
position: 'bottom',align: 'center',}}},};
new Chart(
document.getElementById("FR"),configFR);
// Budget control chart
//  payment per month
const dtbcontrol = {datasets: [{
label: "Planned Target Payment",type: "bar",backgroundColor: "#4A93F7",
data: ['{{ $planned->planned_1 }}', '{{ $planned->planned_2 }}',
'{{ $planned->planned_3 }}',
'{{ $planned->planned_4 }}', '{{ $planned->planned_5 }}',
'{{ $planned->planned_6 }}', '{{ $planned->planned_7 }}',
'{{ $planned->planned_8 }}', '{{ $planned->planned_9 }}',
'{{ $planned->planned_10 }}', '{{ $planned->planned_11 }}',
'{{ $planned->planned_12 }}'
],}, {label: "Actual Payment",type: "bar",backgroundColor: "#F0172D",backgroundColorHover: "#3e95cd",
data: ['{{ $jan_mny_pay }}', '{{ $feb_mny_pay }}', '{{ $mar_mny_pay }}',
'{{ $apr_mny_pay }}', '{{ $mei_mny_pay }}', '{{ $jun_mny_pay }}',
'{{ $jul_mny_pay }}', '{{ $agu_mny_pay }}', '{{ $sep_mny_pay }}',
'{{ $okt_mny_pay }}', '{{ $nov_mny_pay }}', '{{ $des_mny_pay }}']}],
labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],}
const configbcontrol = {data: dtbcontrol,options: {plugins: {legend: {
display: true},tooltip: {callbacks: {label: (uang) => {const Operasi = uang.raw;
const Display = Operasi.toLocaleString("id-ID");return `Rp${Display}`}}},}},};
new Chart(document.getElementById("bcontrol"),configbcontrol);
// Financial info semua proyek
const dtfinance = {labels: ['PR', 'PA', 'PO', 'Payment'],
datasets: [{type: 'line',label: 'Target (Based on Target Payments)',
// data ini sama dengan sum planned payments
data: ['{{ $sum_planned }}', '{{ $sum_planned }}', '{{ $sum_planned }}',
'{{ $sum_planned }}'],
fill: false,borderColor: 'purple'}, {
data: ['{{ $mny_pr }}', '{{ $mny_pa }}', '{{ $mny_po }}','{{ $mny_pay }}',],
fill: true,label: 'Actual PR PA PO Payment',
backgroundColor: ['orange','skyblue','#1BF286','#2F97DE',],
borderWidth: 2}, ],};
const configfinance = {type: "bar",data: dtfinance,options: {plugins: {legend: {
display: true,labels: {color: "",},},
tooltip: {callbacks: {label: (uang) => {const Operasi = uang.raw;
const Display = Operasi.toLocaleString("id-ID")
const today = new Date().toLocaleString().slice(0, 10)
return `Total ${today} Rp${Display}`}}},}},};
new Chart(
document.getElementById("finance"),
configfinance);},true);
</script>
