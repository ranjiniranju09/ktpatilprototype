
@extends('layouts.app')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

.hero {
    /* position: relative; */
    height: 100vh;
    /* overflow: hidden; */
    font-family: 'Montserrat', sans-serif;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    /* background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)); */
    z-index: -2;
}

.hero-image img {
    position: relative;
    z-index: -2;
    width: 100%;
    height: 100vh;
    object-fit: cover;
    display: block;
     animation: zoomIn 15s ease-in-out infinite alternate;
 } 

.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    z-index: -1;
    padding: 30px 40px;
    border-radius: 12px;
    animation: fadeInUp 1.2s ease-in-out;
}

.hero-text .welcome {
    font-size: 3.5rem;
    font-weight: 400;
    letter-spacing: 2px;
}

.hero-text .college {
    font-size: 4rem;
    font-weight: 700;
    margin-top: 10px;
    color:rgb(255, 255, 255);
    letter-spacing: 1.5px;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
}

.hero-text .cta-btn {
    margin-top: 25px;
    padding: 12px 28px;
    background-color:rgb(153, 31, 31);
    color: #fff;
    font-weight: bold;
    font-size: 1.1rem;
    border: none;
    border-radius: 30px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    z-index: -1;
}

.hero-text .cta-btn:hover {
    background-color: #fff;
    color:rgb(153, 39, 39);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translate(-50%, -60%);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}

@keyframes zoomIn {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.05);
    }
}

@media (max-width: 768px) {
    .hero-text {
        padding: 20px;
    }

    .hero-text .welcome,
    .hero-text .college {
        font-size: 2rem;
    }

    .hero-text .cta-btn {
        padding: 10px 20px;
        font-size: 1rem;
    }
}
</style>




<div class="content">
    
    <!-- Image below the navbar -->
    <div class="hero">
        <div class="hero-text">
            <div class="welcome">Welcome</div>
            <div class="college">KT Patil College of Engineering</div>
            <!-- <a href="#confluence" class="cta-btn">Explore </a> -->
        </div>
        <section class="hero-image">
            <img src="{{ asset('images/kycolg.jpg') }}" alt="Hero Image" >
        </section>
    </div>

    {{-- Video Section --}}
    {{--<div class="video-container">
        <video autoplay loop muted oncontextmenu="return false;">
            <source src="{{ asset('videos/university-drone-final.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
        </video>
    </div>--}}
        
    {{-- Confluence Section --}}
    <div id="confluence">
        @include('components.confluence')
    </div>
    {{-- Other Sections --}}
    {{--@include('components.statistics')--}}
    @include('components.leadership')
    @include('components.programs')
    {{--@include('components.international-collaborations')--}}
    {{--@include('components.events-news')--}}
    @include('components.contact-form')
</div>

@endsection
