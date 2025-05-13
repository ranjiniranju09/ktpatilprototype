@extends('layouts.app')

@section('content')

<style>
    .sectionhead {
        text-align: center;
        font-size: 40px;
        font-weight: 900;
        background: linear-gradient(90deg, #1e3c72, #2a5298);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 50px;
        padding-top: 160px;
    }

    .nav-tabs {
        border-bottom: 0;
        justify-content: center;
        position: hidden;
    }

    .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
        color: #2e3c51;
        background-color: #f2f2f2;
        margin: 0 8px;
        padding: 12px 24px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .nav-tabs .nav-link:hover {
        background-color: #dceeff;
        color: #0d6efd;
    }

    .nav-tabs .nav-link.active {
        background: linear-gradient(to right, #0d6efd, #3f86ed);
        color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .tab-pane {
        padding: 40px;
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        margin-bottom: 80px;
        transition: all 0.3s ease;
    }

    .table th {
        background: #e3f2fd;
        color: #0d47a1;
        font-size: 16px;
    }

    .table td {
        vertical-align: middle;
        font-size: 15px;
    }

    .feedback-card {
        background: linear-gradient(145deg, #ffffff, #f6f6f6);
        padding: 25px;
        margin-bottom: 25px;
        border-left: 6px solid #0d6efd;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
    }

    .feedback-card h5 {
        font-weight: 700;
        color: #0d47a1;
        margin-bottom: 12px;
    }

    .feedback-card p {
        color: #444;
        line-height: 1.6;
    }
    .cover-image-section {
        position: fixed;
        height: 400px;
        /* overflow: hidden; */
        top: 85px;
        z-index: 1;
        margin-bottom: 110px;
    }

    .cover-image-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(60%);
    }

    .cover-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 2;
        color: #fff;
    }

    @media (max-width: 767px) {
        .cover-image-section {
            height: 250px;
        }

        .cover-overlay h1 {
            font-size: 1.8rem;
        }
    }


    @media (max-width: 767px) {
        .tab-pane {
            padding: 25px;
        }
        .nav-tabs .nav-link {
            font-size: 14px;
            padding: 10px 16px;
        }
    }
</style>
<!-- Cover Image Section -->
<!-- <div class="cover-image-section position-relative text-center text-white">
    <img src="{{ asset('images/placement1.jpeg') }}" alt="Placements Cover" class="img-fluid w-100">
    <div class="cover-overlay position-absolute top-50 start-50 translate-middle">
        <h1 class="display-4 fw-bold">Placements & Alumni</h1>
    </div>
</div> -->

<div class="container">
    <h2 class="sectionhead">Placement & Alumni</h2>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs mb-4" id="placementTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="placement-tab" data-bs-toggle="tab" data-bs-target="#placement" type="button" role="tab">
                🎓 Placement Statistics
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="alumni-tab" data-bs-toggle="tab" data-bs-target="#alumni" type="button" role="tab">
                👨‍🎓 Alumni Feedback
            </button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="placementTabsContent">

        <!-- Placement Tab -->
        <div class="tab-pane fade show active" id="placement" role="tabpanel">
            <h4 class="mb-4 text-primary fw-bold">📊 Placement Summary</h4>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Total Students</th>
                        <th>Placed Students</th>
                        <th>Placement %</th>
                        <th>Top Recruiters</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023</td>
                        <td>120</td>
                        <td>96</td>
                        <td>80%</td>
                        <td>TCS, Infosys, Capgemini</td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>110</td>
                        <td>85</td>
                        <td>77.3%</td>
                        <td>Wipro, Cognizant, Tech Mahindra</td>
                    </tr>
                    <tr>
                        <td>2021</td>
                        <td>105</td>
                        <td>80</td>
                        <td>76.2%</td>
                        <td>Accenture, L&T, HCL</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Alumni Feedback Tab -->
        <div class="tab-pane fade" id="alumni" role="tabpanel">
            <h4 class="mb-4 text-primary fw-bold">💬 Alumni Speak</h4>

            <div class="feedback-card">
                <h5>🌟 Rahul Patil (B.Tech - 2020)</h5>
                <p>“The college provided a strong foundation in both technical skills and personal development. The placement cell was supportive and ensured I was industry-ready.”</p>
            </div>

            <div class="feedback-card">
                <h5>🌟 Sneha Deshmukh (MBA - 2021)</h5>
                <p>“Great infrastructure, experienced faculty, and real-world exposure through seminars and workshops really helped me in my career path.”</p>
            </div>

            <div class="feedback-card">
                <h5>🌟 Ajay Kulkarni (M.Tech - 2019)</h5>
                <p>“Alumni support and mentoring system is very effective. I always felt connected to the college even after graduation.”</p>
            </div>
        </div>

    </div>
</div>

@endsection
