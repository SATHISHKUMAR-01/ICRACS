@extends('layouts.frontend')

@section('content')

<div>
    <div class="container p-3">

        <h1 class="text-center pt-5">ABOUT US</h1>

        <div class="ps-2 pt-3">
            <h2>About the Institution</h2>
            <p class="text-secondary text- fw-normal lh-lg pt-3" style="text-align: justify;
  text-justify: inter-word;">Saveetha Engineering College (SEC) was established in 2001, by the Founder Chairman Dr. N. M. Veeraiyan, a committed and dedicated Medical Professional. SEC
                has a total strength of 4349 students in 13 UG courses, 8 PG Courses including MBA, Doctoral programs (PhD) in five Departments. National Board of Accreditation NBA
                has Accredited 5 UG courses. Ranked 96 by NIRF- National Institute Ranking Framework for the academic year 2017-18 among all IITs, Central, State and Private
                Institutions in India. Awarded 'A' GRADE with a high score of 3.19 on a scale of 4 by the National Assessment and Accreditation Council (NAAC) for 5 Years. SEC awarded
                AUTONOMOUS status by the UGC from the academic year 2019-2020. SEC is recognized as a Scientific and Industrial Research Organization (SIRO) by the Department
                of Scientific and Industrial Research (DSIR), Government of India. Five Research Centres recognized by Anna University MoU's with Reputed Academic Institutions in
                India and Abroad.</p>
        </div>

        <div class="ps-2 pt-3">
            <h2>About the Department</h2>
            <p class="text-secondary fw-normal lh-lg pt-3" style="text-align: justify;
  text-justify: inter-word;">The Department of Computer Science and Engineering was established in the year 2001 with an intake of 60 students. It was increased to 120 students in the year
                2005-2006. In 2017-18 it is increased to 180. The Department offers B.E Computer Science and Engineering, M.E Computer Science and Engineering programs. The
                department has a team of sincere, dedicated, competent and experienced faculty with commitment to serve the college in achieving its goals. All have completed their
                master's degrees, and one third of them are Doctorates and most of them are pursuing their Ph.D. The department has conducted many workshops, seminars, FDPs, value
                added courses, conferences, etc. at regular intervals with nationally and internationally renowned resource persons. The department is equipped with state-of-the-art
                laboratories and encourages the faculty to orient their teaching towards ICT based Innovative teaching methodologies.</p>
        </div>

        <div class="p-2">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/medical.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/dental.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/law.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/mgmt.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/nursing.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/Phsio.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/SaveethaEngg.jpg')}}" class="d-block w-50 m-auto border shadow-lg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/BARCH.png')}}" class="d-block w-50 m-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/ahs.png')}}" class="d-block w-50 m-auto" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev text-secondary btn-secondary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next text-secondary btn-secondary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>






@endsection