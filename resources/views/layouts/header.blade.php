<style>
    
    #navlink1 , #navlink2 , #navlink3 , #navlink4 , #navlink5 , #navlink6 , #navlink7{
        transition: transform .2s;
     
    }

    #navlink1:hover,
    #navlink2:hover,
    #navlink3:hover,
    #navlink4:hover,
    #navlink5:hover,
    #navlink6:hover,
    #navlink7:hover{
        transform: scale(1.2);
        
    }
</style>


<header>





    <nav class="navbar navbar-expand-md bg-primary navbar-dark p-3 fixed-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav nav-pills ">
                <li class="nav-item" id="navlink1">
                    <a class="nav-link text-white" href="{{route('home')}}"><i class="fa-solid fa-house fs-4 p-1"></i>HOME</a>
                </li>
                <li class="nav-item" id="navlink2">
                    <a class="nav-link text-white" href="{{route('aboutus')}}"><i class="fa-solid fa-user-graduate fs-4 p-1"></i>ABOUT US</a>
                </li>
                <li class="nav-item" id="navlink3">
                    <a class="nav-link text-white" href="{{route('callforpapers')}}"><i class="fa-solid fa-circle-info fs-4 p-1"></i>CALL FOR PAPERS</a>
                </li>
                <li class="nav-item" id="navlink4">
                    <a class="nav-link text-white" href="{{route('registration')}}"><i class="fa-solid fa-check fs-4 p-1"></i>REGISTRATION</a>
                </li>
                <li class="nav-item" id="navlink5">
                    <a class="nav-link text-white" href="{{route('submission')}}"><i class="fa-solid fa-sheet-plastic fs-4 p-1"></i>PAPER SUBMISSION</a>
                </li>
                <li class="nav-item" id="navlink6">
                    <a class="nav-link text-white" href="{{route('contactus')}}"><i class="fa-solid fa-envelope fs-4 p-1"></i>CONTACT US</a>
                </li>
                <li class="nav-item" id="navlink7">
                    <a class="nav-link text-white" href="{{route('committee')}}"><i class="fa-solid fa-people-group fs-4 p-1"></i>COMMITTEE</a>
                </li>
            </ul>
        </div>
    </nav>
</header>