@extends('layouts.app')

@section('content')

<style>

.containerug{
    margin-bottom: 100px;
}
.course-heading {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 2rem;
    padding-top: 150px;
    
}

.course {
    display: flex; 
    flex-wrap: wrap; /* Allow wrapping on smaller screens */
    justify-content: center; 
    gap: 2rem; 
    padding: 0 1rem; 
}

.course-card {
    display: flex; /* Use flexbox for layout */
    flex-direction: column; /* Stack children vertically */
    justify-content: space-between; /* Space out children */
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 18%;
    min-width: 250px; /* Ensures a minimum width */
    flex: 1 1 250px; /* Flex-grow/shrink and basis for responsiveness */
    max-width: 300px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* margin-bottom: 80px; */
    height: 350px; /* Set a fixed height for uniformity */
}

.card-footer {
    margin-top: auto; /* Pushes the footer to the bottom of the card */
    padding-top: 1rem; /* Adds some space above the footer */
    border-top: 1px solid #e0e0e0; /* Optional: adds a top border for separation */
}

/* .course-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    overflow: hidden;
} */

.course-card h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: #333;
}

.course-card p {
    font-size: 1rem;
    color: #666;
    margin-bottom: 1.5rem;
}

.course-card button {
    background-color: #97182c;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer; 
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.course-card button:hover {
    background-color: #97182c;
}


.apply-link {
    display: flex; /* Use flexbox for centering */
    justify-content: center; /* Center the content horizontally */
    align-items: center; /* Center the content vertically */
    width: 100%; /* Make the button take the full width of the card */
    background-color: #97182c;
    color: white;
    padding: 10px 0; /* Adjust padding for top and bottom */
    border-radius: 8px;
    text-decoration: none; /* Ensure no underline is applied */
    text-align: center;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.apply-link:hover {
    background-color:rgba(151, 24, 43, 0.49);
    color: white;
    text-decoration: none; /* Prevent underline on hover */
}


.breadcrumb {
    display: flex;
    flex-wrap: wrap; /* Allow items to wrap on smaller screens */
    list-style: none;
    padding: 150px;
    margin: 0 0 1rem;
    overflow: hidden;
}

.breadcrumb-item {
    position: relative;
    margin-right: 0.5rem; /* Space between items */
}

.breadcrumb-item:not(:last-child)::after {
    content: '>';
    margin-left: 0.5rem; /* Space before the separator */
    color: #6c757d; /* Color for the separator */
}

.breadcrumb-item a {
    text-decoration: none;
    color: #007bff; /* Bootstrap primary color */
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

.breadcrumb-item.active {
    color: #6c757d; /* Bootstrap secondary color */
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .breadcrumb {
        flex-direction: column; /* Stack items vertically on small screens */
    }

    .breadcrumb-item {
        margin-right: 0; /* Remove right margin */
        margin-bottom: 0.5rem; /*Add bottom margin for spacing*/
    }
}
/* Hero Section Responsiveness */
/* For tablets and below */
@media (max-width: 1024px) {
    .course-card {
        width: 45%;
    }
}

/* For mobile devices */
@media (max-width: 768px) {
    .course {
        gap: 1rem;
    }

    .course-card {
        width: 100%;
        max-width: 100%;
    }

    .course-heading {
        font-size: 1.5rem;
        padding-top: 100px;
    }

    .course-card h3 {
        font-size: 1.2rem;
    }

    .course-card p {
        font-size: 0.95rem;
    }

    .course-card button,
    .apply-link {
        font-size: 0.95rem;
        padding: 8px 16px;
    }
}
</style>

<!-- <nav aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Courses</a></li>
        <li class="breadcrumb-item active" aria-current="page">UG Course</li>
    </ol>
</nav> -->
<div class="containerug">
    <div id="ug"> <h1 class="course-heading">UG course</h1>
        <div class="course">
            <div class="course-card">
                <h3>Computer Science Engineering</h3>
                <p>Build a strong foundation in engineering concepts and practices with hands-on experience.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>
            <div class="course-card">
                <h3>Electrical and Electronics Engineering</h3>
                <p>Build a strong foundation in engineering concepts and practices with hands-on experience.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>           
            </div>
        
            <div class="course-card">
                <h3>Electronics and Telecommunication Engineering</h3>
                <p>Learn modern business strategies and leadership skills for a successful career in management.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>            
            </div>
        
            <div class="course-card">
                <h3>Civil Engineering</h3>
                <p>Explore creativity, innovation, and design thinking with our comprehensive design program.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>

            <div class="course-card">
                <h3>Mechanical Engineering</h3>
                <p>Explore creativity, innovation, and design thinking with our comprehensive design program.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div id="polytechnic"> <h1 class="course-heading">Diploma Programs (Polytechnic)</h1>
        <div class="course">
            <div class="course-card">
                <h3>Computer Science Engineering</h3>
                <p>Build a strong foundation in engineering concepts and practices with hands-on experience.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>
            <div class="course-card">
                <h3>Electrical and Electronics Engineering</h3>
                <p>Build a strong foundation in engineering concepts and practices with hands-on experience.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>
        
            <div class="course-card">
                <h3>Electronics and Telecommunication Engineering</h3>
                <p>Learn modern business strategies and leadership skills for a successful career in management.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>
        
            <div class="course-card">
                <h3>Civil Engineering</h3>
                <p>Explore creativity, innovation, and design thinking with our comprehensive design program.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>

            <div class="course-card">
                <h3>Mechanical Engineering</h3>
                <p>Explore creativity, innovation, and design thinking with our comprehensive design program.</p>
                <div class="card-footer">
                    <a href="#" class="apply-link">Apply</a>
                </div>
            </div>
        </div>
    </div>
    <div id="pg"> <h1 class="course-heading">Master of Engineering</h1>
        <div class="course">
            <div class="course-card">
                <h3>Civil Engineering (M.E. WRE - Water Resource Engineering)</h3>
                <p>Build a strong foundation in engineering concepts and practices with hands-on experience.</p>
                <a href="#" class="apply-link">Apply</a>
            </div>
        </div>
    </div> -->
</div>

@endsection