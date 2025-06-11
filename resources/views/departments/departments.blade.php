@extends('layouts.app')

@section('content')

<style>
.containerall {
    margin-bottom: 100px;
}
.course-heading {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 2rem;
    padding-top: 50px;
}

.cover {
    background: linear-gradient(
        rgba(114, 12, 12, 0.85),
        rgba(144, 5, 5, 0.85)
    ), url("https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940") no-repeat center center/cover;
    color: #e0e7ff;
    height: 480px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 15px;
   
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
    width: 100%;  /* Full width */
    max-width: 600px; /* Max width to keep cards neat */
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 30px;
    height: auto; /* Let height adjust based on content */
}

.card-footer {
    margin-top: auto; /* Pushes the footer to the bottom of the card */
    padding-top: 1rem; /* Adds some space above the footer */
    border-top: 1px solid #e0e0e0; /* Adds a top border for separation */
}

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

.course-card button, 
.apply-link {
    background-color: #9f1c33;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    display: inline-block;
    text-decoration: none;
    text-align: center;
    width: 40%;
}
.course-card:hover{
    background-color: bisque;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    /* z-index: -2; */
}

.course-card button:hover,
.apply-link:hover {
    
    background-color: #7a1528;
    text-decoration: none;
    color: white;
}

.department-icon {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #721c1c;
}

.breadcrumb {
    display: flex;
    list-style: none;
    padding: 20px 15px;
    margin-bottom: 2rem;
    overflow: hidden;
}

.breadcrumb-item {
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
        margin-bottom: 0.5rem; /* Add bottom margin for spacing */
    }

    .department-icon {
        font-size: 2.5rem;
    }
}

/* Hero Section Responsiveness */
@media (max-width: 1024px) {
    .course-card {
        width: 45%;
    }
    .department-icon {
        font-size: 2.5rem;
    }
}

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

    .department-icon {
        font-size: 2.5rem;
    }
}
</style>

<div class="containerall">

    <div class="cover">
        <h1>Departments</h1>
        <p class="text-center">Discover the diverse fields of study and research opportunities available at our institution.</p>
    </div>

    <div class="course-heading">
         <h2 >Our Academic Departments</h2>
    </div>
    <div class="course">
        <div class="course-card">
            <div class="department-icon" aria-hidden="true">💻</div>
            <h3>Computer Science Engineering</h3>
            <p>Focused on computing technologies, software development, and AI innovations.</p>
            <div class="card-footer">
                <a href="{{ url('/Computer_Science') }}" class="apply-link" role="button" aria-label="View details for Computer Science Engineering">View Details</a>
            </div>
        </div>

        <div class="course-card">
            <div class="department-icon" aria-hidden="true">⚡</div>
            <h3>Electrical and Electronics Engineering</h3>
            <p>Explores power systems, electronics, and modern automation techniques.</p>
            <div class="card-footer">
                <a href="{{ url('/Electrical_Electronics_Engineering') }}" class="apply-link" role="button" aria-label="View details for Electrical and Electronics Engineering">View Details</a>
            </div>
        </div>

        <div class="course-card">
            <div class="department-icon" aria-hidden="true">🏗️</div>
            <h3>Civil Engineering</h3>
            <p>Deals with infrastructure, construction, and environmental engineering.</p>
            <div class="card-footer">
                <a href="{{ url('/Civil_Engineering') }}" class="apply-link" role="button" aria-label="View details for Civil Engineering">View Details</a>
            </div>
        </div>

        <div class="course-card">
            <div class="department-icon" aria-hidden="true">⚙️</div>
            <h3>Mechanical Engineering</h3>
            <p>Focuses on machinery, manufacturing, and thermodynamics.</p>
            <div class="card-footer">
                <a href="{{ url('/departments/mech') }}" class="apply-link" role="button" aria-label="View details for Mechanical Engineering">View Details</a>
            </div>
        </div>

        <div class="course-card">
            <div class="department-icon" aria-hidden="true">📡</div>
            <h3>Electronics and Communication Engineering</h3>
            <p>Covers communication systems, VLSI design, and embedded systems.</p>
            <div class="card-footer">
                <a href="{{ url('/departments/ece') }}" class="apply-link" role="button" aria-label="View details for Electronics and Communication Engineering">View Details</a>
            </div>
        </div>

        <div class="course-card">
            <div class="department-icon" aria-hidden="true">🔬</div>
            <h3>Applied Science</h3>
            <p>Bridge theoretical science with practical applications in physics, chemistry, mathematics, and technology.</p>
            <div class="card-footer">
                <a href="{{ url('/departments/it') }}" class="apply-link" role="button" aria-label="View details for Applied Science">View Details</a>
            </div>
        </div>
    </div>
</div>

@endsection
