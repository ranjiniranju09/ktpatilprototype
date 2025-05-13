<!-- Bootstrap 5 CDN (include in your <head> or before </body>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<section class="events-news py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Latest Events & News</h2>

    <!-- Main Tabs: Events | News -->
    <ul class="nav nav-tabs justify-content-center mb-4" id="mainTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab">Events</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab">News</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="mainTabsContent">

      <!-- Events Tab -->
      <div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="events-tab">
        <div class="event-item">
          <h3>Azure Deep Dive: 12 Days to Cloud Mastery</h3>
          <p>Organized by the Clydex Club under the School of Skills Development at DYPIU, Akurdi.</p>
          <span>21 Nov 2024</span>
        </div>

        <div class="event-item">
          <h3>Workshop on Artificial Intelligence and Machine Learning</h3>
          <p>Hosted by the Department of Computer Science, this workshop introduces students to real-world AI/ML applications.</p>
          <span>5 Dec 2024</span>
        </div>

        <div class="event-item">
          <h3>Campus Recruitment Drive – Infosys & TCS</h3>
          <p>Final-year students are invited to participate in the joint recruitment drive scheduled on campus.</p>
          <span>15 Dec 2024</span>
        </div>
      </div>

      <!-- News Tab -->
      <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
        <div class="event-item">
          <h3>Notice: Semester Exams Date Sheet Released</h3>
          <p>The tentative schedule for the upcoming semester examinations is now available on the student portal.</p>
          <span>30 Nov 2024</span>
        </div>

        <div class="event-item">
          <h3>Holiday Announcement</h3>
          <p>The university will remain closed on 25th December 2024 on account of Christmas.</p>
          <span>10 Dec 2024</span>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .event-item {
    background: #ffffff;
    border-left: 5px solid #007bff;
    padding: 20px 25px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  .event-item h3 {
    font-size: 1.3rem;
    color: #007bff;
    margin-bottom: 10px;
  }

  .event-item p {
    color: #495057;
    font-size: 1rem;
  }

  .event-item span {
    font-size: 0.9rem;
    color: #6c757d;
    display: block;
    text-align: right;
    font-style: italic;
  }

  .nav-tabs .nav-link {
    color: #333;
    font-weight: 500;
    transition: background-color 0.3s;
  }

  .nav-tabs .nav-link:hover,
  .nav-tabs .nav-link.active {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
  }
</style>
