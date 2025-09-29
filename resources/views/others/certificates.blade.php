@extends('layouts.app')

@section('content')
<style>
    h2 {
        padding-top: 100px;
    }

    .tab-container {
        display: flex;
        margin-top: 40px;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .tab-list {
        width: 30%;
        background-color: #f8f9fa;
        border-right: 1px solid #dee2e6;
    }

    .tab-list .nav-link {
        border: none;
        border-radius: 0;
        padding: 15px 20px;
        text-align: left;
        font-weight: 500;
        color: #333;
        transition: background-color 0.3s, color 0.3s;
    }

    .tab-list .nav-link:not(:last-child) {
        border-bottom: 1px solid #ccc; /* <-- divider line */
    }

    .tab-list .nav-link:hover {
        background-color: #e2e6ea;
        color: #000;
    }

    .tab-list .nav-link.active {
        background-color: #0d6efd;
        color: #fff;
    }

    .tab-content-area {
        width: 70%;
        padding: 30px;
        background-color: #fefefe;
    }

    .pdf-frame {
        width: 100%;
        height: 600px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    @media (max-width: 768px) {
        .tab-container {
            flex-direction: column;
        }

        .tab-list,
        .tab-content-area {
            width: 100%;
        }

        h2 {
            padding-top: 120px;
        }
    }
</style>


<div class="container py-5">
    <h2 class="text-center mb-4">📜 Accreditation & Approval Certificates</h2>
    <p class="text-center text-muted mb-4">
        Select a certificate from the list to view its document.
    </p>

    <div class="tab-container">
        <!-- Left Vertical Tabs -->
        <div class="tab-list nav flex-column nav-pills" id="v-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-tab-aicte" data-bs-toggle="pill" data-bs-target="#tab-aicte" type="button" role="tab">AICTE</button>
            <button class="nav-link" id="v-tab-fees" data-bs-toggle="pill" data-bs-target="#tab-fees" type="button" role="tab">Fees Regulating Authority</button>
            <button class="nav-link" id="v-tab-dte" data-bs-toggle="pill" data-bs-target="#tab-dte" type="button" role="tab">Directorate of Technical Education</button>
            <button class="nav-link" id="v-tab-maha-gov" data-bs-toggle="pill" data-bs-target="#tab-maha-gov" type="button" role="tab">Maharashtra Government</button>
            <button class="nav-link" id="v-tab-bamu" data-bs-toggle="pill" data-bs-target="#tab-bamu" type="button" role="tab">Dr. Babasaheb Ambedkar Marathwada University</button>
            <button class="nav-link" id="v-tab-msbte" data-bs-toggle="pill" data-bs-target="#tab-msbte" type="button" role="tab">Maharashtra State Board of Technical Education</button>
        </div>

        <!-- Right Tab Contents -->
        <div class="tab-content-area tab-content" id="v-tabContent">
            <div class="tab-pane fade show active" id="tab-aicte" role="tabpanel">
                <h5 class="mb-3">AICTE Approval Certificate</h5>
                <iframe class="pdf-frame" src="{{ asset('images/AICTE_EOA_24_25.pdf') }}"></iframe>
            </div>

            <div class="tab-pane fade" id="tab-fees" role="tabpanel">
                <h5 class="mb-3">Fees Regulating Authority Certificate</h5>
                <iframe class="pdf-frame" src="{{ asset('images/files/FRA_WEBSITE1.pdf') }}"></iframe>
            </div>

            <div class="tab-pane fade" id="tab-dte" role="tabpanel">
                <h5 class="mb-3">Directorate of Technical Education Certificate</h5>
                <iframe class="pdf-frame" src="{{ asset('images/files/DTE_PERMISSION_NEW_COURSES.pdf') }}"></iframe>
            </div>

            <div class="tab-pane fade" id="tab-maha-gov" role="tabpanel">
                <h5 class="mb-3">Maharashtra Government Approval Certificate</h5>
                <iframe class="pdf-frame" src="{{ asset('images/files/MH_govt_approval_certi.pdf') }}"></iframe>
            </div>

            {{--<div class="tab-pane fade" id="tab-bamu" role="tabpanel">
                <h5 class="mb-3">Dr. Babasaheb Ambedkar Marathwada University Certificate</h5>
                <iframe class="pdf-frame" src="{{ asset('images/BAMU_Certificate.pdf') }}"></iframe>
            </div> --}}

            <div class="tab-pane fade" id="tab-msbte" role="tabpanel">
                <h5 class="mb-3">Maharashtra State Board of Technical Education Certificate</h5>
                <iframe class="pdf-frame" src="{{ asset('images/files/MSBTE AFFILIATION CERTIFICATE 25 26 (2).pdf') }}"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
