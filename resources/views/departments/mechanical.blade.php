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
    <!-- Cover Section -->
    <div class="cover">
        <h1>Mechanical Engineering</h1>
        <p>
            The Mechanical Engineering Department focuses on producing industry-ready graduates equipped with skills, ethics, and innovation—pioneering excellence in engineering through world-class education and research.
        </p>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('department') }}">Departments</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mechanical Engineering</li>
        </ol>
    </nav>

    <!-- Tab Navigation -->
    <nav>
        <ul class="nav nav-tabs justify-content-center" id="deptTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="hod-tab" data-bs-toggle="tab" href="#hod" role="tab">Message from HOD</a></li>
            <li class="nav-item"><a class="nav-link " id="faculty-tab" data-bs-toggle="tab" href="#faculty" role="tab">Faculty</a></li>
            <li class="nav-item"><a class="nav-link" id="vision-tab" data-bs-toggle="tab" href="#vision" role="tab">Vision</a></li>
            <li class="nav-item"><a class="nav-link" id="mission-tab" data-bs-toggle="tab" href="#mission" role="tab">Mission</a></li>
            <li class="nav-item"><a class="nav-link" id="labs-tab" data-bs-toggle="tab" href="#labs" role="tab">Laboratory Facilities</a></li>
        </ul>
    </nav>


    <!-- Tab Content -->
    <main class="tab-content" id="deptTabContent" style="max-width: 960px; margin: 1rem auto 3rem;">

        <!-- HOD Message -->
        <section class="tab-pane fade show active" id="hod" role="tabpanel">
            <h2>Message from HOD</h2>
            <p>
                Hearty welcome to the Mechanical Engineering Department. We have a proud history of producing world-class engineers. Our graduates are leading professionals in MNCs, Government, and academia worldwide. The department fosters a disciplined, research-focused environment with excellent placement records, aligned with the Washington Accord’s outcome-based education standards.
            </p>
            <p><strong>Dr. Sagar A. Deshmukh</strong><br>Head of Department, Mechanical Engineering</p>
        </section>

        <!-- Faculty -->
        <section class="tab-pane fade text-center " id="faculty" role="tabpanel">
            <h2 class="mt-5">Faculty Directory</h2>
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
                        <tr><td>1</td><td>Dr. Sagar A. Deshmukh</td><td>Head of Department</td></tr>
                        <tr><td>2</td><td>Mr. Shafi S.I. Jamadar</td><td>Assistant Professor & Academic Coordinator</td></tr>
                        <tr><td>3</td><td>Mr. Hidge S.P.</td><td>Assistant Professor</td></tr>
                        <tr><td>4</td><td>Mrs. Nitalikar S.A.</td><td>Assistant Professor</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Vision -->
        <section class="tab-pane fade" id="vision" role="tabpanel">
            <h2>Vision</h2>
            <ul class="list-icon">
                <li>To blossom into a center of excellence, providing globally relevant, high-quality interactive technical education.</li>
                <li>To produce dedicated and competent mechanical engineers for societal and technological advancement.</li>
            </ul>
        </section>

        <!-- Mission -->
        <section class="tab-pane fade" id="mission" role="tabpanel">
            <h2>Mission</h2>
            <ul class="list-icon">
                <li>Promote skilled and employable graduates to meet challenges in emerging fields of engineering.</li>
                <li>Prepare students for careers in entrepreneurship with leadership, ethics, and human values.</li>
                <li>Instill lifelong learning skills and provide engineering services for sustainable societal development.</li>
            </ul>
        </section>

        <!-- Labs -->
        <section class="tab-pane fade" id="labs" role="tabpanel">
            <h2>Laboratory Facilities</h2>
            <ul class="list-icon">
                <li>Basic Electrical & Mechanical Workshop</li>
                <li>Fluid Mechanics Laboratory</li>
                <li>Hydraulic Machinery Laboratory</li>
                <li>Machine Shop</li>
                <li>Heat & Mass Transfer Lab</li>
                <li>Thermal Engineering Lab</li>
                <li>Metrology & Measurements Lab</li>
                <li>CAD/CAM Lab</li>
                <li>Seminar Hall with LCD Projector</li>
            </ul>
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
