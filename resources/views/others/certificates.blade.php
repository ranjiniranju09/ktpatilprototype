@extends('layouts.app')

@section('content')
<style>
    h2 {
        padding-top: 100px; /* Space for sticky navbar */
    }

   .pdf-container {
    position: relative;
    width: 100%;
    height: 100vh; /* Full screen height */
    overflow: hidden;
    z-index:-1; /* Keep it behind the navbar */
    margin: 0; /* Avoid pushing down */
}

/* .pdf-container iframe {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    z-index: 0;
} */



    @media (max-width: 768px) {
        h2 {
            padding-top: 120px;
        }
    }
</style>


<div class="container py-5">
    <h2 class="mb-4 text-center">📜 Accreditation Certificates</h2>

    <h5 class="text-center mb-3">Combined Accreditation Certificates (AICTE, NBA, NAAC)</h5>
    <p class="text-center text-muted mb-4">
        This document includes accreditation and approval certificates from various statutory bodies including AICTE, NBA, and NAAC.
    </p>

    <div class="text-center mt-4">
        <a href="{{ asset('images/AICTE EOA 24 25.pdf') }}" target="_blank" class="btn btn-primary">
            View Full PDF in New Tab
        </a>
    </div>


    </div>
</div>
@endsection
