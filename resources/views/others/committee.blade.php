@extends('layouts.app')

@section('content')

<style>
    .committee-section {
        padding: 100px 20px;
        background: linear-gradient(to bottom right, #e0f7fa, #ffe0e0);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-title {
        text-align: center;
        font-size: 40px;
        font-weight: 800;
        color: #880e4f;
        margin-bottom: 40px;
    }

    .nav-tabs .nav-link {
        color: #880e4f;
        font-weight: 600;
        border: none;
        border-bottom: 3px solid transparent;
        margin: 0 10px;
        transition: 0.3s ease;
    }

    .nav-tabs .nav-link:hover {
        color: #0D8ABC;
    }

    .nav-tabs .nav-link.active {
        border-bottom: 3px solid #0D8ABC;
        color: #0D8ABC;
        background-color: transparent;
        font-weight: 700;
    }

    .tab-content {
        margin-top: 30px;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    h4 {
        color: #b71c1c;
        margin-bottom: 20px;
    }

    ul li {
        line-height: 1.8;
    }
</style>

<div class="committee-section">
    <h1 class="section-title">📘 College Policies & Committees</h1>

    <ul class="nav nav-tabs justify-content-center" id="policyTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="anti-ragging-tab" data-bs-toggle="tab" data-bs-target="#anti-ragging" type="button" role="tab">🚫 Anti-Ragging</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="grievance-tab" data-bs-toggle="tab" data-bs-target="#grievance" type="button" role="tab">📢 Grievance Redressal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="harassment-tab" data-bs-toggle="tab" data-bs-target="#harassment" type="button" role="tab">👩‍⚖️ Sexual Harassment</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="committee-tab" data-bs-toggle="tab" data-bs-target="#committee" type="button" role="tab">👥 Committee Members</button>
        </li>

    </ul>

    <div class="tab-content" id="policyTabsContent">

        <!-- Anti Ragging -->
        <div class="tab-pane fade show active" id="anti-ragging" role="tabpanel">
            <h4>🚫 Anti-Ragging Policy & Committee Members</h4>
                <p>
                    Ragging is strictly prohibited inside and outside the campus. The Anti-Ragging Committee constituted for this purpose by the constituent institutes is empowered to take immediate action against any incident and fresher.
                    Students seeking admission shall have to furnish an undertaking in this regard. The student will be required to submit a pro forma signed by himself/herself and parent/guardian declaring awareness of the College’s policy on ragging and the consequences.
                </p>
                <p>
                    <strong>Anti-Ragging Committee:</strong> The committee is headed by the Head of the Institute. Other members include HODs, representatives of senior and first-year students, and their parents. The committee oversees all anti-ragging measures in the Institute as per UGC regulations.
                </p>
                <p>
                    <strong>As per orders of the HONORABLE SUPREME COURT and UGC Regulations, 2009:</strong> Ragging in any form is totally banned. Offenders are subject to the following punishments:
                </p>
                <ul>
                    <li>FIR with Police</li>
                    <li>Suspension/expulsion from hostel</li>
                    <li>Suspension from attending classes</li>
                    <li>Debarring from campus placements</li>
                    <li>Debarring from examinations</li>
                    <li>Rustication for one to four semesters</li>
                    <li>Entry in Character Certificate about punishment</li>
                    <li>Cancellation of admission</li>
                </ul>
            
        </div>

        <!-- Grievance Redressal -->
        <div class="tab-pane fade" id="grievance" role="tabpanel">
            <h4>📢 Grievance Redressal Mechanism</h4>
                <p>
                    The Grievance Cell of K.T. Patil College of Engineering addresses genuine concerns and complaints of students. Suggestion boxes are placed in various campus areas for students to submit issues or suggestions anonymously.
                </p>
                <p>
                    Students may also directly approach committee members or any faculty member they feel comfortable with.
                    The cell aims to develop a responsive and accountable attitude among all stakeholders and maintain a peaceful educational environment.
                </p>
        </div>

        <!-- Sexual Harassment -->
        <div class="tab-pane fade" id="harassment" role="tabpanel">
            <h4>👩‍⚖️ Sexual Harassment Policy & Committee</h4>
            <p>
                    The College has established a Women Grievance Redressal and Safety Cell to support women faculty, staff, and girl students. The cell raises awareness on women's issues, organizes talks and seminars, and ensures the campus is a safe and inclusive space.
                </p>
                <p>
                    <strong>Purpose:</strong> To empower women by fostering understanding of their rights, sharing experiences, and building confidence. Activities include life skills, entrepreneurial training, and social welfare programs.
                </p>
                <p><strong>Objectives:</strong></p>
                <ul>
                    <li>To promote a culture of respect and equality for women</li>
                    <li>To conduct programs that empower women financially, mentally, and emotionally</li>
                    <li>To encourage responsible student behavior and a healthy academic environment</li>
                    <li>To involve NSS students in working with underprivileged women for technology-driven upgrades</li>
                    <li>To create awareness on issues affecting youth, especially girls</li>
                </ul>
           
        </div>
        <!-- Committee Members -->
        <div class="tab-pane fade" id="committee" role="tabpanel">
            <h4 class="mb-4">👥 Committee Members</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-warning">
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Designation</th>
                            <th>Mobile No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Mr. Aditya S. Patil</td>
                            <td>Chair Person</td>
                            <td>CEO ASPM</td>
                            <td>8806168888</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Dr. Balaji S. Pasare</td>
                            <td>Member</td>
                            <td>Principal</td>
                            <td>9422779894</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Mr. Shafi S.I. Jamadar</td>
                            <td>Member</td>
                            <td>HOD</td>
                            <td>9421360249</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Mrs. Shweta K. Gaikwad</td>
                            <td>Member</td>
                            <td>HOD</td>
                            <td>7588937426</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Dr. Sagar A. Deshmukh</td>
                            <td>Member</td>
                            <td>HOD</td>
                            <td>8806508888</td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>Mrs. Aishwarya S. Khelbude</td>
                            <td>Member</td>
                            <td>Lecturer</td>
                            <td>7972252286</td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>Student Representative</td>
                            <td>Member</td>
                            <td>---------------</td>
                            <td>---------------</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
