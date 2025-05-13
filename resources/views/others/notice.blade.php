@extends('layouts.app')

@section('content')

<style>
    .container {
        padding: 120px 15px;
        background-color: #f7f9fb;
        font-family: 'Montserrat', sans-serif;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #942020;
        margin-bottom: 40px;
        text-align: center;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #555;
        font-weight: 500;
        font-size: 1.1rem;
    }

    .nav-tabs .nav-link.active {
        background-color: #942020;
        color: white;
        border-radius: 20px;
    }

    .tab-content {
        margin-top: 40px;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 20px;
    }

    .notice-card {
        background: white;
        border-left: 5px solid #942020;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        transition: all 0.3s ease;
    }

    .notice-card:hover {
        transform: translateY(-5px);
    }

    .notice-card h5 {
        color: #333;
        font-weight: 600;
    }

    .notice-card p {
        margin-top: 8px;
        font-size: 0.95rem;
        color: #555;
    }

    .notice-card .badge {
        background-color: #f2f2f2;
        color: #942020;
        font-size: 0.8rem;
        padding: 6px 10px;
        border-radius: 20px;
        margin-bottom: 10px;
        display: inline-block;
    }

    .news-card {
        border-left: 5px solid #0d6efd;
    }
    .notice-card img {
        transition: transform 0.3s ease;
    }
    .notice-card:hover img {
        transform: scale(1.02);
    }


    .btn-sm {
        margin-top: 10px;
        margin-right: 8px;
    }

    .btn-outline-primary {
        border-color: #942020;
        color: #942020;
    }

    .btn-outline-primary:hover {
        background-color: #942020;
        color: white;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: white;
    }
</style>

<div class="container">
    <h1 class="section-title">📢 Notices & 📰 News</h1>

    <ul class="nav nav-tabs justify-content-center" id="noticeNewsTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="notices-tab" data-bs-toggle="tab" data-bs-target="#notices" type="button" role="tab">📢 Notices</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab">📰 News</button>
        </li>
    </ul>

    <div class="tab-content" id="noticeNewsTabsContent">

        <!-- Notices Tab -->
        <div class="tab-pane fade show active" id="notices" role="tabpanel">
            @php
                $notices = [
                    [
                        'title' => 'Semester Exam Schedule Released',
                        'date' => '2025-05-10',
                        'description' => 'The end-semester exams begin June 1st, 2025. Check the timetable and prepare.',
                        'link' => '#',
                        'file' => '/downloads/exam-schedule.pdf',
                        'image' => '/images/notices/exam-schedule.jpg',
                    ],
                    [
                        'title' => 'Holiday Notice',
                        'date' => '2025-05-08',
                        'description' => 'The college is closed on May 15th for a public holiday.',
                        'link' => '#',
                        'file' => '/downloads/holiday-notice.pdf',
                        'image' => '/images/notices/holiday.jpg',
                    ],
                    [
                        'title' => 'Library Timing Extended',
                        'date' => '2025-05-06',
                        'description' => 'Library will now remain open till 9 PM during exam week.',
                        'link' => '#',
                        'file' => '/downloads/library-timing.pdf',
                        'image' => '/images/notices/library.jpg',
                    ],
                ];

            @endphp

            <div class="card-grid">
                @foreach($notices as $notice)
                    <div class="notice-card">
                        <img src="{{ $notice['image'] }}" alt="Notice Image" class="img-fluid rounded mb-3" style="max-height: 180px; object-fit: cover; width: 100%;">
                        <span class="badge">{{ \Carbon\Carbon::parse($notice['date'])->format('d M Y') }}</span>
                        <h5>{{ $notice['title'] }}</h5>
                        <p>{{ $notice['description'] }}</p>
                        <a href="{{ $notice['link'] }}" class="btn btn-outline-primary btn-sm" target="_blank">Read More</a>
                        <a href="{{ $notice['file'] }}" class="btn btn-outline-secondary btn-sm" download>Download</a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- News Tab -->
        <div class="tab-pane fade" id="news" role="tabpanel">
            @php
                 $news = [
                    [
                        'headline' => 'Inauguration of New Computer Lab',
                        'date' => '2025-05-09',
                        'content' => 'A new lab with 50 systems was inaugurated by the Dean.',
                        'link' => '#',
                        'file' => '/downloads/lab-inauguration.pdf',
                        'image' => '/images/news/computer-lab.jpg',
                    ],
                    [
                        'headline' => 'Placement Drive Results Announced',
                        'date' => '2025-05-07',
                        'content' => 'The selected candidates list is posted on the website.',
                        'link' => '#',
                        'file' => '/downloads/placement-results.pdf',
                        'image' => '/images/news/placement.jpg',
                    ],
                    [
                        'headline' => 'AI Workshop Scheduled',
                        'date' => '2025-05-05',
                        'content' => 'An AI and ML workshop is scheduled for May 20th. All CS students must attend.',
                        'link' => '#',
                        'file' => '/downloads/ai-workshop.pdf',
                        'image' => '/images/news/ai-workshop.jpg',
                    ],
                ];
            @endphp

            <div class="card-grid">
                @foreach($news as $item)
                    <div class="notice-card news-card">
                        <img src="{{ $item['image'] }}" alt="News Image" class="img-fluid rounded mb-3" style="max-height: 180px; object-fit: cover; width: 100%;">

                        <span class="badge">{{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}</span>
                        <h5>{{ $item['headline'] }}</h5>
                        <p>{{ $item['content'] }}</p>
                        <a href="{{ $item['link'] }}" class="btn btn-outline-primary btn-sm" target="_blank">Read More</a>
                        <a href="{{ $item['file'] }}" class="btn btn-outline-secondary btn-sm" download>Download</a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection
