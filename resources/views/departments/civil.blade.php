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
     .breadcrumb{
      display: flex;
      list-style: none;
      padding: 20px 15px;
      margin-bottom: 2rem;
      overflow: hidden;
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
  padding-left: 24px; /* reduced from 36px */
  margin-bottom: 14px;
  color: #343a40;
  font-weight: 500;
  font-size: 1rem;
  transition: color 0.2s ease;
}

ul.list-icon li::before {
  /* content: "✔"; */
  align-items: center;
  color: #254896;
  font-weight: 700;
  position: absolute;
  left: 4px;  /* moved icon closer */
  top: 2px;
  font-size: 1.1rem;
  line-height: 1;
}
  .card-img-top {
      transition: transform 0.3s ease;
      border-radius: 10px;
    }
    
 
  .img-fluid {
    transition: transform 0.3s ease;
}
.img-fluid:hover {
    transform: scale(1.05);
}

    ul.list-icon li:hover {
      color: #254896;
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
    
    
    <!-- Cover Section -->
    <div class="cover">
        <h1>Civil Engineering</h1>
        <p>
            The Civil Engineering Department focuses on developing infrastructure and imparting technical, ethical, and professional knowledge to students—preparing them for global engineering challenges with a solid foundation in design, construction, and maintenance.
        </p>
    </div>
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('department') }}">Departments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Civil Engineering</li>
            </ol>
        </nav>
    <!-- Tab Navigation -->
    <nav>
        <ul class="nav nav-tabs justify-content-center" id="deptTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="hod-tab" data-toggle="tab" href="#hod" role="tab">Message from HOD</a></li>
            <li class="nav-item"><a class="nav-link " id="faculty-tab" data-toggle="tab" href="#faculty" role="tab">Faculty</a></li>
            <li class="nav-item"><a class="nav-link " id="vision-tab" data-toggle="tab" href="#vision" role="tab">Vision</a></li>
            <li class="nav-item"><a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab">Mission</a></li>
            <li class="nav-item"><a class="nav-link" id="outcomes-tab" data-toggle="tab" href="#outcomes" role="tab">Course Outcomes</a></li>
            <li class="nav-item"><a class="nav-link" id="labs-tab" data-toggle="tab" href="#labs" role="tab">Laboratory Facilities</a></li>
            <li class="nav-item"><a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab">Gallery</a></li>

        </ul>
    </nav>

    <!-- Tab Content -->
    <main class="tab-content" id="deptTabContent" style="max-width: 960px; margin: 1rem auto 3rem;">

    <!-- Message from HOD -->
      <section class="tab-pane fade show active" id="hod" role="tabpanel">
        <h2>Message from HOD</h2>
        <p>
            The Department envisions facilitating the student community with high standards and value-oriented traditional teaching, coupled with modern techniques. Our goal is to nurture every student to become a true asset to the Nation and a noble human being on a global scale, equipped with technological versatility.
        </p>
        <p>
            Our focus lies in fostering analytical and experimental skills among students, enabling them to apply their knowledge across various fields of Civil Engineering using both National and International codes.
        </p>
        <p>
            Furthermore, we provide students with opportunities to enhance their communication and presentation skills, along with proficiency in software applications such as AutoCAD, etc. Through industrial training and visits to live construction sites, students gain practical knowledge and a deeper understanding of the field’s constraints.
        </p>
        <p>
            It is our moral and social responsibility to impart state-of-the-art technological information to our Civil engineering students, considering the ever-evolving nature of construction methods, materials, and skills.
        </p>
        <p>
            With a dedicated team of highly qualified and experienced faculty members, we strive to offer an enjoyable and effective learning experience to all our students, ensuring they are well prepared to meet the demands of the modern construction industry.
        </p>
        <p class="text-end fw-bold mt-4">
            Mr. Parth Ramesh Joshi<br>
            HOD, Civil Engineering
        </p>
    </section>

        <!-- Vision -->
        <section class="tab-pane fade " id="vision" role="tabpanel">
            <h2>Vision</h2>
            <ul class="list-icon">
                <li>To impart knowledge and excellence in Civil Engineering with a global perspective.</li>
                <li>To groom professionals with ethical values to meet the current and future challenges for nation building.</li>
            </ul>
        </section>

        <!-- Mission -->
        <section class="tab-pane fade" id="mission" role="tabpanel">
            <h2>Mission</h2>
            <ul class="list-icon">
                <li>To promote quality education, research & consultancy for industrial and societal needs.</li>
                <li>To inculcate professionalism and moral values in budding Civil Engineers through sustainable practices.</li>
                <li>To inspire the new generation of Civil Engineers with innovation and lifelong learning for national development.</li>
            </ul>
        </section>

        <!-- Course Outcomes -->
        <section class="tab-pane fade" id="outcomes" role="tabpanel">
            <h2>Course Outcomes</h2>
            <ul class="list-icon">
                <li><strong>Engineering Fundamentals:</strong> Apply principles of mathematics and science to civil engineering problems.</li>
                <li><strong>Problem Analysis:</strong> Identify and solve complex civil engineering issues using research and data analysis.</li>
                <li><strong>Design and Development:</strong> Implement engineering solutions with considerations for safety and sustainability.</li>
                <li><strong>Materials Science:</strong> Understand and apply properties of construction materials like concrete and steel.</li>
                <li><strong>Structural Analysis:</strong> Design and analyze structures for safety under varied load conditions.</li>
            </ul>
        </section>

        <!-- Laboratory Facilities -->
        <section class="tab-pane fade" id="labs" role="tabpanel">
            <h2>Laboratory Facilities</h2>
            <ul class="list-icon">
                <li>Survey Lab</li>
                <li>Strength of Materials Lab</li>
                <li>Soil Mechanics Lab</li>
                <li>Concrete and Highway Engineering Lab</li>
                <li>Environmental Engineering Lab</li>
                <li>Structural Engineering Lab</li>
                <li>Hydraulics Lab</li>
                <li>Transportation Lab</li>
                <li>Civil CAD Lab (AutoCAD, STAAD.Pro)</li>
                <li>Structural Analysis Lab</li>
                <li>Drawing Hall</li>
                <li>Software Access: SAP2000, ETABS, MS Project</li>
                <li>Industry Partnerships and Project Support</li>
            </ul>
        </section>

        <!-- Faculty -->
        <section class="tab-pane fade text-center " id="faculty" role="tabpanel">
          <h2>Faculty Directory</h2>

          <!-- Faculty Table -->
          <div class="table-responsive mt-4">
              <table class="table table-bordered table-striped table-hover w-75 mx-auto">
                  <thead class="table-primary">
                      <tr>
                          <th scope="col">Sr. No</th>
                          <th scope="col">Name</th>
                          <th scope="col">Designation</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Dr. Balaji S. Pasare</td>
                          <td>HOD</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Mrs. Preethi S. Deshmukh</td>
                          <td>Assistant Professor</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Mr. Rohit R. Panke</td>
                          <td>Assistant Professor</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>Mr. Parth R. Joshi</td>
                          <td>Assistant Professor</td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>Mrs. Aishwarya S. Khelbude</td>
                          <td>Assistant Professor</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </section>
        <!-- Gallery -->
        <section class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
            <h2>Department Gallery</h2>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-md-4">
                    <div class="card shadow-sm border-0">
                        <img src="https://via.placeholder.com/600x400?text=Image" class="card-img-top rounded" alt="Gallery Image">
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<script>
    // Bootstrap 5 does not need jQuery for tabs; use the Tab class directly
    const triggerTabList = document.querySelectorAll('#deptTab a')
    triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)
        triggerEl.addEventListener('click', event => {
            event.preventDefault()
            tabTrigger.show()
        })
    })
</script>
@endsection
