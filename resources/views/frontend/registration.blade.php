@extends('layouts.frontend')

@section('css')
<style>
    #regbutton{
        transition: transform .2s;
    }

    #regbutton:hover{
        transform: scale(1.1);
    }
</style>
@endsection

@section('content')


<div>
    <div class="container p-3 mt-5">

        <h1 class="text-center pt-5">REGISTRATION & PAYMENT</h1>

        <table class="justify-content-center d-flex p-4">
            <tr class="p-3 fs-3 border shadow">
                <td class="p-2">CATEGORY</td>
                <td class="p-2">:</td>
                <td class="p-2">AMOUNT TO BE PAID</td>
            </tr>
            <tr class="p-3 fs-3 text-secondary border shadow">
                <td class="p-2">Student (UG/PG/Research Scholar)</td>
                <td class="p-2">:</td>
                <td class="p-2">RS. 1000</td>
            </tr>
            <tr class="p-3 fs-3 text-secondary border shadow">
                <td class="p-2">Academics</td>
                <td class="p-2">:</td>
                <td class="p-2">RS. 2000</td>
            </tr>
            <tr class="p-3  fs-3 text-secondary border shadow">
                <td class="p-2">Industry Delegates</td>
                <td class="p-2">:</td>
                <td class="p-2">RS. 3000</td>
            </tr>
        </table>

        <div class="d-flex justify-content-center mt-3">
            <a href="https://forms.gle/inzu4REJoWFTnjUF6" class="btn btn-lg btn-outline-primary " id="regbutton"> REGISTER <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>

        <div class="pt-3">
            <h5 class="fs-4 text-secondary fw-normal">REGISTRATION DETAILS :</h5>
            <ul class="text-secondary fw-bold ps-2 fs-5">
                <li>It is mandatory for at least one author to register for each paper and present the paper for inclusion in the conference proceedings.</li>
                <li>Registration fee is non-refundable.</li>
                <li>All the submitted papers are to be plagiarism checked.</li>
                <li>Registration is required for each accepted paper separately.</li>
            </ul>
        </div>

        <div class="pt-3">
            <h5 class="fs-4 text-secondary fw-normal">PAYMENT DETAILS :</h5>
            <ul class="text-secondary fw-bold ps-2 fs-5">
                --- Details to be added ---
            </ul>
        </div>



    </div>
</div>






@endsection