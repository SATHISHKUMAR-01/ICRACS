@extends('layouts.frontend')


@section('css')
<style>
    #speaker1,
    #speaker2 {
        transition: transform .2s;
    }

    #speaker1:hover,
    #speaker2:hover {
        transform: scale(1.1);
    }

    #title {
        position: relative;
        font-family: sans-serif;
        text-transform: uppercase;
        font-size: 2em;
        letter-spacing: 4px;
        overflow: hidden;
        background: linear-gradient(90deg, #000, #fff, #198);
        background-repeat: no-repeat;
        background-size: 80%;
        animation: animate 3s linear infinite;
        -webkit-background-clip: text;
        -webkit-text-fill-color: rgba(255, 255, 255, 0);

    }

    @keyframes animate {
        0% {
            background-position: -500%;
        }

        100% {
            background-position: 500%;
        }
    }

    #dept {
        animation-duration: 4s;
        animation-name: slidein;
    }

    @keyframes slidein {
        from {
            margin-left: 100%;
            width: 300%;
        }

        to {
            margin-left: 0%;
            width: 100%;
        }
    }
</style>
@endsection


@section('content')
<div class="mt-5">

    <div class="bg-warning text-center text-dark fw-bolder p-3">
        <h1 class="fs-1 pt-5 p-1 fw-bold" id="dept">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h1>
        <h3 class="fs-5"> Organizes</h3>
        <h3 class="fs-5">International Conference on</h3>
        <h1 class="fs-1 p-1 fw-bold " id="title">RECENT ADVANCES IN COMPUTER SCIENCE <br> <b> ICRACS-2022</b></h1>
        <h3 class="fs-5 p-1"> 25th May, 2022</h3>
    </div>

    <div class="bg-light p-2 mt-2 mb-2">
        <h1 class="text-center text-secondary fw-bold fs-1 p-2">Key Note Speakers</h1>
        <div class="row">

            <div class="col">
                <div class="card m-auto shadow border h-100" style="width: 18rem; " id="speaker1">
                    <img src="{{asset('images/Dr. Edward.jpg')}}" class="card-img-top border shadow" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">Dr. Edward Danso Ansong</h5>
                        <p class="card-text">
                            University of Ghana and CEO, <br>
                            Fredan Computers, <br>
                            Accra, Ghana
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card m-auto shadow border h-100" style="width: 18rem;" id="speaker2">
                    <img src="{{asset('images/Dr Chitrakala.jpg')}}" class="card-img-top border shadow" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">Dr. S. Chitrakala</h5>
                        <p class="card-text">Professor, <br>
                            College of Engineering (CEG), <br>
                            Anna University, Chennai.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>








</div>
@endsection