@extends('layouts.app')

@section('content')

<style>
    .governing-body {
        padding: 120px 20px;
        background: linear-gradient(to bottom right, #e0f7fa, #ffe0e0);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-title {
        text-align: center;
        font-size: 40px;
        font-weight: 900;
        color: #b71c1c;
        margin-bottom: 40px;
        /* position: relative; */
    }

    .section-title::after {
        content: '';
        display: block;
        width: 90px;
        height: 5px;
        background-color: #0D8ABC;
        margin: 15px auto 0;
        border-radius: 3px;
    }

    .tab-container {
        display: flex;
        max-width: 1200px;
        margin: auto;
        gap: 30px;
        flex-wrap: wrap;
    }

    .nav.flex-column {
        min-width: 260px;
        background: #ffffff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        height: fit-content;
    }

    .nav-pills .nav-link {
        border-radius: 10px;
        color: #b71c1c;
        font-weight: 600;
        padding: 12px 18px;
        margin-bottom: 10px;
        transition: all 0.3s ease-in-out;
        border-left: 4px solid transparent;
    }

    .nav-pills .nav-link:hover {
        background-color: #f1f1f1;
        border-left: 4px solid #0D8ABC;
    }

    .nav-pills .nav-link.active {
        background-color: #ffffff;
        border-left: 4px solid #0D8ABC;
        color: #0D8ABC;
        font-weight: 700;
    }

    .tab-content {
        flex: 1;
        min-width: 280px;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .table_heading {
        color: #880e4f;
        font-weight: 700;
        font-size: 24px;
        text-align: center;
        margin-bottom: 25px;
    }

    .table {
        margin-top: 10px;
        border-radius: 12px;
        overflow: hidden;
    }

    .table th {
        background-color: #ffe082 !important;
        color: #3e2723;
        font-weight: 700;
    }

    .table td {
        vertical-align: middle;
    }
      .marquee-container {
        background: #b71c1c;
        color: white;
        padding: 8px 0;
        overflow: hidden;
        font-weight: bold;
    }
    .marquee-text {
        display: inline-block;
        white-space: nowrap;
        animation: scroll-left 20s linear infinite;
    }
    @keyframes scroll-left {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .marquee-text a {
        color: yellow;
        text-decoration: none; /* Removes underline */
        margin: 0 20px;
    }
</style>



<div class="governing-body">
    <h1 class="section-title">🎓 Admission Details</h1>
<div class="marquee-container">
    <div class="marquee-text"> 
        <a href="{{ asset('images/files/Merit_list_of_NonCap_for_Diploma_First_Year.pdf') }}" target="_blank">🏆📄Merit NoNCAP Diploma 1st Year</a> |
        <a href="{{ asset('images/files/Merit_list_of_NonCap_for_Diploma_Second_Year.pdf') }}" target="_blank">🏆📄Merit NoNCAP Diploma 2st Year</a> |
        {{--<a href="{{ asset('files/merit_cap_round3.pdf') }}" target="_blank">Merit CAP Round 3</a>--}}
    </div>
</div>
    <div class="tab-container">
        <!-- Left: Tabs -->
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-how-tab" data-bs-toggle="pill" data-bs-target="#v-pills-how" type="button" role="tab">📝 How to Apply</button>
            <button class="nav-link" id="v-pills-eligibility-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eligibility" type="button" role="tab">🎯 Eligibility Criteria</button>
            <button class="nav-link" id="v-pills-fee-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fee" type="button" role="tab">💰 Fee Structure</button>
            <button class="nav-link" id="v-pills-documents-tab" data-bs-toggle="pill" data-bs-target="#v-pills-documents" type="button" role="tab">📄 Required Documents</button>
        </div>

        <!-- Right: Tab Content -->
        <div class="tab-content" id="v-pills-tabContent">

            <!-- How to Apply -->
            <div class="tab-pane fade show active" id="v-pills-how" role="tabpanel">
                <h2 class="table_heading">Application Process</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Step No.</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $steps = [
                                'Visit the official college website and go to the Admission section.',
                                'Create an account with your valid email ID and phone number.',
                                'Fill out the application form with personal and academic details.',
                                'Upload required documents (10th & 12th marksheets, photo, ID proof, etc).',
                                'Pay the application fee online through the payment gateway.',
                                'Download the confirmation and keep a printout for future reference.',
                            ];
                        @endphp

                        @foreach ($steps as $index => $step)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $step }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Eligibility -->
            <div class="tab-pane fade" id="v-pills-eligibility" role="tabpanel">
                <h2 class="table_heading">Eligibility Criteria</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Program</th>
                            <th>Eligibility</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B.Tech</td>
                            <td>Passed 10+2 with Physics, Chemistry & Mathematics; Minimum 50% marks; Valid JEE/CET score.</td>
                        </tr>
                        <tr>
                            <td>M.Tech</td>
                            <td>B.E./B.Tech in relevant discipline with minimum 55%; Valid GATE score.</td>
                        </tr>
                        <tr>
                            <td>MBA</td>
                            <td>Graduation in any discipline with minimum 50% marks; Valid entrance test score (e.g., CAT/MAT).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Fee Structure -->
            <div class="tab-pane fade" id="v-pills-fee" role="tabpanel">
                <h2 class="table_heading">Fee Structure</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Program</th>
                            <th>Annual Tuition Fee</th>
                            <th>Development fees</th>
                            <th>Total (Per Year)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B.E</td>
                            <td>₹45,558</td>
                            <td>₹4,442</td>
                            <td>₹48,000</td>
                        </tr>
                        <tr>
                            <td>M.E</td>
                            <td>₹90,909</td>
                            <td>₹9,091</td>
                            <td>₹1,00,000</td>
                        </tr>
                        <tr>
                            <td>Diploma</td>
                            <td>₹40,500</td>
                            <td>₹4,500</td>
                            <td>₹45,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Required Documents -->
            <div class="tab-pane fade" id="v-pills-documents" role="tabpanel">
                <h2 class="table_heading">Required Documents</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Document</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $documents = [
                                '10th Marksheet' => 'For age and qualification proof.',
                                '12th Marksheet' => 'For eligibility verification.',
                                'Transfer Certificate' => 'From the last attended institution.',
                                'Caste Certificate' => 'If applicable.',
                                'Domicile Certificate' => 'For state quota admissions.',
                                'Passport Size Photograph' => 'Recent photograph for application form.',
                            ];
                        @endphp

                        @foreach ($documents as $doc => $desc)
                            <tr>
                                <td>{{ $doc }}</td>
                                <td>{{ $desc }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            


        </div>
    </div>
</div>

@endsection
