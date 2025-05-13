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
    <!-- Cover Section -->
    <div class="cover">
        <h1>Electronics and Telecommunication Engineering (ECE)</h1>
        <p>
         Focuses on designing, developing, and maintaining electronic systems for communication purposes, encompassing various aspects like analog and digital communication, signal processing, and network technologies. 
        It&#39;s a broad field that utilizes electronic devices and circuits to create systems that transmit and receive information, including everything from basic radios to complex satellite communication systems. 
        </p>
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
                <a class="nav-link" id="outcomes-tab" data-toggle="tab" href="#outcomes" role="tab" aria-controls="outcomes" aria-selected="false">Course Outcomes</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="labs-tab" data-toggle="tab" href="#labs" role="tab" aria-controls="labs" aria-selected="false">Laboratory Facilities</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="false">Faculty</a>
            </li>
        </ul>
    </nav>

    <!-- Tab Content -->
    <main class="tab-content" id="deptTabContent" style="max-width: 960px; margin: 1rem auto 3rem;">
        <!-- Vision -->
        <section class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
            <h2>Vision</h2>
            <ul class="list-icon">
                <li>Global Recognition: To be recognized internationally as a leading department in known for its quality education, research, and innovation. </li>                
                <li>Excellence in Education: To provide a high-quality education that prepares students for industry and academia.</li>
            </ul>
        </section>
        <!-- Mission -->
        <section class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
            <h2>Mission</h2>
            <ul class="list-icon">
                <li>Quality Education: To provide a rigorous and relevant curriculum that equips students with the necessary technical skills and knowledge.</li>
                <li>Research and Development: To foster a culture of research and development in emerging areas of ECE. </li>
                <li>Industry-Institute Linkages: To promote collaboration between the department and industry to enhance academic and research activities.</li>
                <li>Innovation and Creativity: To encourage students to develop innovative ideas and lateral thinking. </li>
            </ul>
        </section>
        <!-- Course Outcomes -->
        <section class="tab-pane fade" id="outcomes" role="tabpanel" aria-labelledby="outcomes-tab">
            <h2>Course Outcomes</h2>
            <ul class="list-icon">
                <li><strong>CO1:</strong> Electronic Devices :Students should understand the principles and operation of various electronic devices like diodes, transistors, and FETs.</li>
                <li><strong>CO2:</strong> Circuits: Students should be able to analyze and understand basic electric and magnetic circuits.</li>
                <li><strong>CO3:</strong> Power Electronics: Students should be able to identify and understand the working principles of power electronic devices. </li>
            </ul>
        </section>
        <!-- Laboratory Facilities -->
        <section class="tab-pane fade" id="labs" role="tabpanel" aria-labelledby="labs-tab">
            <h2>Laboratory Facilities</h2>
            <ul class="list-icon">
                <li>Digital Electronics Lab: For understanding and experimenting with digital logic circuits. </li>
                <li>Analog Circuits Lab: For studying and implementing analog circuits and devices. </li>
                <li>Communication Lab: For exploring different communication technologies and systems.</li>
                <li>Microprocessor/Microcontroller Lab: For learning about and programming microprocessors and microcontrollers. </li>
                <li>Digital Signal Processing Lab: For studying and implementing digital signal processing techniques. </li>
                <li>Embedded Systems Lab: For designing and developing embedded systems. </li>
                <li>VLSI Lab: For learning about and designing Very Large Scale Integration circuits. </li>
                <li>Other Specialized Labs: Depending on the department, there may be labs for areas like microwave engineering, optical communication, and antenna design. </li>
              <li>Classrooms:ECE departments often have smart classrooms equipped with technology like LCD projectors, smart boards, and Wi-Fi access. </li>
            <li>Libraries:Departments usually have a library with a collection of textbooks, reference books, and other resources relevant to the field. </li>
            <li>Other Facilities:Some departments may also offer acc ess to specialized research equipment, research spaces, and collaboration facilities. </li>
            </ul>
        </section>
        <!-- Faculty -->
        <section class="tab-pane fade text-center" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
            <h2>Faculty Directory</h2>
            <img
                src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=200"
                alt="Prof. Gaikwad Shweta Kundlik"
                    class="rounded-circle mb-3"
                    style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #254896;"
                />    
            <h5>Mr.Bhojane Pankaj Arun</h5>
            <p class="font-italic mb-1">HOD, E&TC ENGG.</p>
            <p>K.T. Patil College Of Engineering &amp; Technology, Dharashiv</p>
        </section>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
