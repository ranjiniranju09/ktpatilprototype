@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .container-computer {
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
      color: #333;
      scroll-behavior: smooth;
    }

    a:hover {
      text-decoration: none;
    }

    /* Header cover section */
    .cover {
      background: linear-gradient(
          rgba(114, 12, 12, 0.85),
          rgba(144, 5, 5, 0.85)
        ),
        url("https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940")
          no-repeat center center/cover;
      color: #e0e7ff;
      height: 480px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 15px;
    }
    .cover h1 {
      font-weight: 700;
      font-size: 3rem;
      letter-spacing: 2px;
      margin-bottom: 1rem;
      text-shadow: 0 0 10px rgba(34, 40, 49, 0.8);
    }
    .cover p {
      font-size: 1.4rem;
      max-width: 720px;
      font-weight: 300;
      text-shadow: 0 0 6px rgba(34, 40, 49, 0.8);
    }

    /* Tabs navigation */
    .nav-tabs {
      border-bottom: 3px solid rgb(150, 37, 37);
      margin-top: 10px;
      max-width: 960px;
      margin-left: auto;
      margin-right: auto;
      background: white;
      border-radius: 8px 8px 0 0;
      box-shadow: 0 4px 10px rgba(10, 25, 48, 0.1);
    }
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
      color:rgb(150, 37, 37);
      font-weight: 700;
      background-color: #f0f5ff;
      border-color: #254896 #254896 #f0f5ff;
      border-radius: 8px 8px 0 0;
    }
    .nav-tabs .nav-link {
      color:rgb(134, 33, 33);
      font-weight: 600;
      padding: 0.7rem 1.3rem;
      border: 1px solid transparent;
      border-bottom: none;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .nav-tabs .nav-link:hover {
      color:rgb(150, 37, 37);
      background-color: #e9f0ff;
    }

    /* Section Containers */
    section {
      padding: 60px 20px 80px 20px;
      max-width: 960px;
      margin-left: auto;
      margin-right: auto;
      background: white;
      border-radius: 0 0 12px 12px;
      box-shadow: 0 12px 24px rgba(10, 25, 48, 0.08);
      margin-bottom: 40px;
    }

    section h2 {
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 1.2rem;
      color: #0a1930;
      text-align: center;
      position: relative;
    }
    section h2::after {
      content: "";
      display: block;
      width: 60px;
      height: 3px;
      background: #0a1930;
      margin: 0.5rem auto 0 auto;
      border-radius: 4px;
    }

    /* Lists with icons */
    ul.list-icon {
      list-style: none;
      padding-left: 0;
      margin-top: 1rem;
    }
    ul.list-icon li {
      position: relative;
      padding-left: 36px;
      margin-bottom: 14px;
      color: #343a40;
      font-weight: 500;
      font-size: 1rem;
      transition: color 0.2s ease;
    }
    ul.list-icon li:hover {
      color: #254896;
    }
    ul.list-icon li::before {
      content: "✔";
      color: #254896;
      font-weight: 700;
      position: absolute;
      left: 0;
      top: 2px;
      font-size: 1.1rem;
      line-height: 1;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .cover h1 {
        font-size: 2.1rem;
      }
      .cover p {
        font-size: 1rem;
      }
      section {
        padding: 40px 15px 60px 15px;
      }
      .nav-tabs .nav-link {
        font-size: 0.85rem;
        padding: 0.5rem 0.8rem;
      }
    }
</style>


<div class="container-computer">
    <!-- Breadcrumbs -->
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Departments</a></li>
            <li class="breadcrumb-item active" aria-current="page">B.Tech Computer Science</li>
        </ol>
    </nav> -->

    <!-- Accordion Layout -->
    <div class="cover">
        <h1>Computer Science Department</h1>
        <p>To emerge as a world-class technology department through education, innovation, and collaborative research</p>
    </div>

    <!-- Tab Navigation -->
    <nav>
        <ul class="nav nav-tabs justify-content-center" id="deptTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Vision</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Mission</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="false">Faculty</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="facilities-tab" data-toggle="tab" href="#facilities" role="tab" aria-controls="facilities" aria-selected="false">Facilities</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="po-tab" data-toggle="tab" href="#po" role="tab" aria-controls="po" aria-selected="false">Course Outcomes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pso-tab" data-toggle="tab" href="#pso" role="tab" aria-controls="pso" aria-selected="false">Program Outcomes</a>
        </li>
        </ul>
    </nav>

    <main class="tab-content" id="deptTabContent" style="max-width: 960px; margin: 1rem auto 3rem;">
        <section class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
        <h2>Vision</h2>
        <p>
            To build a strong learning environment in the field of Computer Science &amp;
            Engineering in technical education that responds to the challenges of the century.
        </p>
        </section>

        <section class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
        <h2>Mission</h2>
        <ul class="list-icon">
            <li>
            To produce computer Science diploma graduates who are trained in design,
            implementation, testing, and maintenance of computational systems through
            competitive curriculum in collaboration with industry and other organizations.
            </li>
            <li>
            Providing state-of-the-art facilities for enhancing skills in the field of computer science and engineering.
            </li>
            <li>
            To encourage ethical values and leadership abilities in the minds of students so as to work towards the growth of society.
            </li>
        </ul>
        </section>

        <section class="tab-pane fade text-center" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
        <h2>Faculty Directory</h2>
        <img
            src="https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=200"
            alt="Prof. Gaikwad Shweta Kundlik"
            class="rounded-circle mb-3"
            style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #254896;"
        />
        <h5>Prof. Gaikwad Shweta Kundlik</h5>
        <p class="font-italic mb-1">HOD ME (CSE)</p>
        <p>K.T. Patil College Of Engineering &amp; Technology, Dharashiv</p>
        </section>

        <section class="tab-pane fade" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
        <h2>Facilities</h2>
        <p>
            The department is well equipped with diversified laboratories comprising dedicated laboratories
            for the undergraduate students, for diploma students installed with a variety of software catering 
            to the curricular needs with cutting-edge hardware for working in areas of Machine Learning.
        </p>
        <ul class="list-icon">
            <li>Operating System and Network Programming Lab</li>
            <li>System Programming Lab</li>
            <li>Software Engineering Lab</li>
            <li>Windows Programming Lab</li>
            <li>Graphics and Multimedia Lab</li>
            <li>Java Technology Lab</li>
            <li>Web Technology Lab</li>
        </ul>
        </section>

        <section class="tab-pane fade" id="po" role="tabpanel" aria-labelledby="po-tab">
        <h2>Course Outcomes (POs)</h2>
        <ul class="list-icon">
            <li><strong>PO1:</strong> Engineering knowledge.</li>
            <li><strong>PO2:</strong> Problem analysis.</li>
            <li><strong>PO3:</strong> Design/development of solutions.</li>
            <li><strong>PO4:</strong> Conduct investigations of complex problems.</li>
            <li><strong>PO5:</strong> Modern tool usage.</li>
            <li><strong>PO6:</strong> Engineer and society.</li>
            <li><strong>PO7:</strong> Environment and sustainability.</li>
            <li><strong>PO8:</strong> Ethics.</li>
            <li><strong>PO9:</strong> Individual and teamwork.</li>
            <li><strong>PO10:</strong> Communication.</li>
            <li><strong>PO11:</strong> Project management and finance.</li>
            <li><strong>PO12:</strong> Life-long learning.</li>
        </ul>
        </section>

        <section class="tab-pane fade" id="pso" role="tabpanel" aria-labelledby="pso-tab">
        <h2>Program Specific Outcomes (PSOs)</h2>
        <ul class="list-icon">
            <li>
            <strong>PSO1:</strong> Investigate challenging problems across various domains with appropriate computational techniques.
            </li>
            <li>
            <strong>PSO2:</strong> Apply software engineering principles and practices for building high-quality innovative software systems.
            </li>
        </ul>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
