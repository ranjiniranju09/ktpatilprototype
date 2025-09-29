@extends('layouts.app')

@section('content')

<style>
.gallery {
    padding: 100px 15px;
    background-color: #f9f9f9;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
}

.gallery h2 {
    margin-bottom: 30px;
    font-size: 2.5rem;
    font-weight: 700;
    color: rgb(148, 32, 32);
}

.filter-buttons {
    margin-bottom: 40px;
}

.filter-buttons button {
    background-color: rgb(148, 32, 32);
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 0 10px 10px 0;
    font-size: 1rem;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.filter-buttons button:hover,
.filter-buttons button.active {
    background-color: rgb(101, 20, 20);
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.gallery-grid .gallery-item {
    display: none;
}

.gallery-grid .gallery-item.show {
    display: block;
}

.gallery-grid .gallery-box {
    background-color: white;
    padding: 10px;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.gallery-grid img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 12px;
    transition: transform 0.3s ease-in-out;
}

.gallery-grid img:hover {
    transform: scale(1.05);
}

.gallery-caption {
    margin-top: 10px;
    font-weight: 500;
    font-size: 1rem;
    color: #333;
}
</style>

<div class="gallery">
    <h2>Photo Gallery</h2>

    <div class="filter-buttons">
        <button class="active" onclick="filterGallery('all')">All</button>
        <button onclick="filterGallery('college')">College</button>
        <button onclick="filterGallery('events')">Events</button>
        <button onclick="filterGallery('labs')">Labs</button>
    </div>

    <div class="gallery-grid">
        <!-- College -->
        <div class="gallery-item college show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/class_room.jpeg') }}" alt="Class Room">
                <p class="gallery-caption">Class Room</p>
            </div>
        </div>
        <div class="gallery-item college show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/college (2).jpg') }}" alt="College Building">
                <p class="gallery-caption">College Building</p>
            </div>
        </div>
        <div class="gallery-item college show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/students_1.jpeg') }}" alt="students_1">
                <p class="gallery-caption">Students</p>
            </div>
        </div>
        <div class="gallery-item college show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/students.jpeg') }}" alt="students_3">
                <p class="gallery-caption">Students</p>
            </div>
        </div>
        <div class="gallery-item college show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/library.jpeg') }}" alt="library">
                <p class="gallery-caption">Library</p>
            </div>
        </div>

        <!-- Events -->
        <div class="gallery-item events show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/blood_donation_event.jpg') }}" alt="Blood Donation">
                <p class="gallery-caption">Blood Donation Event</p>
            </div>
        </div>
        <div class="gallery-item events show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/gathering1.jpg') }}" alt="Gathering">
                <p class="gallery-caption">Student Gathering</p>
            </div>
        </div>
        <div class="gallery-item events show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/sports_day.jpg') }}" alt="Sports Day">
                <p class="gallery-caption">Sports Day</p>
            </div>
        </div>
        <div class="gallery-item events show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/Industrial_visit.jpg') }}" alt="Industrial Visit">
                <p class="gallery-caption">Industrial Visit</p>
            </div>
        </div>
        <div class="gallery-item events show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/teaching&nonteaching.jpg') }}" alt="Faculty">
                <p class="gallery-caption">Teaching & Non-teaching Staff</p>
            </div>
        </div>
        <div class="gallery-item events show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/yoga.jpeg') }}" alt="yoga">
                <p class="gallery-caption">Yoga Day</p>
            </div>
        </div>

        <!-- Labs -->
        <div class="gallery-item labs show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/library.jpg') }}" alt="Library">
                <p class="gallery-caption">Library</p>
            </div>
        </div>
        <div class="gallery-item labs show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/digital_signal_lab.jpg') }}" alt="Digital Signal Lab">
                <p class="gallery-caption">Digital Signal Lab</p>
            </div>
        </div>
        <div class="gallery-item labs show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/transformor&DC_lab.jpg') }}" alt="Transformer Lab">
                <p class="gallery-caption">Transformer & DC Lab</p>
            </div>
        </div>
        <div class="gallery-item labs show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/transformor&DC_lab1.jpg') }}" alt="Transformer Lab 2">
                <p class="gallery-caption">Transformer & DC Lab - 2</p>
            </div>
        </div>
        <div class="gallery-item labs show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/welding_machine_lab.jpg') }}" alt="Welding Lab">
                <p class="gallery-caption">Welding Machine Lab</p>
            </div>
        </div>
        <div class="gallery-item labs show">
            <div class="gallery-box">
                <img src="{{ asset('images/gallery/lab_1.jpeg') }}" alt="Lab">
                <p class="gallery-caption">Lab</p>
            </div>
        </div>
    </div>
</div>

<script>
function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    const buttons = document.querySelectorAll('.filter-buttons button');

    buttons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
            item.classList.add('show');
        } else {
            item.classList.remove('show');
        }
    });
}
</script>

@endsection
