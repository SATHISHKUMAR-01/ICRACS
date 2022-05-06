@extends('layouts.frontend')

@section('content')

@section('css')
<style>
    #aboutconference {
        animation-duration: 4s;
        animation-name: fadein;
    }
    @keyframes fadein {
        from {
            opacity :0.1;
        }

        to {
          opacity: 1;
        }
    }

    .top1 {
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

<div>
    <div class="container p-3 mt-5">

        <h1 class="text-center pt-5">CALL FOR PAPERS</h1>

        <div class="ps-2 pt-3 text-align-justify">
            <h2>About the conference</h2>
            <p class="text-secondary  fw-normal lh-lg pt-3" style="text-align: justify;
  text-justify: inter-word;" id="aboutconference">The intent of organizing the international conference is to
                provide tremendous opportunities to academics, researchers, and
                practicing engineers to share the scientific knowledge, industrial
                experiences, and research outcomes. The theme of conference is
                Recent Advances in Computer Science which covers the latest
                research and techniques applied in Engineering, Science and
                Technology. This also provides an opportunity to develop network
                and collaborations with International and National Universities and
                Industries. The beneficiaries of the conference are faculties and
                research scholars from academia and developers, contractors, and
                engineers from industry. This would definitely be a platform for
                knowledge sharing and getting acquainted with latest developments in
                the emerging technologies in</p>
        </div>

        <ul class="text-secondary fs-5 fw-bold lis" style="list-style: none;">
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Artificial Intelligence </li>
            <li > <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Machine Learning & Deep Learning </li>
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Big Data Analytics, Data Science </li>
            <li> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Human Computer Interaction </li>
            <li class="top1">  <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Augmented & Virtual Reality </li>
            <li> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Virtualization </li>
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Blockchain </li>
            <li> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Image Processing </li>
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Green Computing </li>
            <li> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Intelligent Computing </li>
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Robotics </li>
            <li> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Cyber Security </li>
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Nano Computing </li>
            <li> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Mobile Communication, 5G Technology </li>
            <li class="top1"> <i class="fa-solid fa-check fs-4 pe-1 lh-base"></i> Internet of Things </li>
        </ul>

    </div>
</div>






@endsection