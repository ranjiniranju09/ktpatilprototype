{{-- resources/views/components/statistics.blade.php --}}

<section style="padding: 100px 20px 40px; background-color: #fff;">
  <style>
    .stats-container {
      max-width: 1100px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }

    .stats-container h2 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .stats-container p.description {
      color: #666;
      margin-bottom: 40px;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
    }

    @media (min-width: 640px) {
      .stats-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .stats-card {
      background-color: #f9f5f2;
      border-radius: 10px;
      padding: 24px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .stats-card .info {
      flex-grow: 1;
    }

    .stats-number {
      font-size: 2rem;
      font-weight: bold;
      color: #000;
      margin-bottom: 4px;
    }

    .plus {
      font-weight: 300;
    }

    .stats-label {
      font-size: 0.9rem;
      color: #999;
      text-transform: uppercase;
    }

    .stats-icon {
      font-size: 1.5rem;
      color: #a12a2a;
    }

    .col-vertical {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
  </style>

  <div class="stats-container">
    <h2>Statistics</h2>
    <p class="description">
      With over 90 programs in Engineering, Health and Allied sciences, Business Management,
      Sports, Biotechnology and Bioinformatics, and Hospitality & Tourism Studies, DYPU is
      recognised as one of the finest institutions in the field of education, healthcare,
      and sports.
    </p>

    <div class="stats-grid">
      <div class="stats-card">
        <div class="info">
          <p class="stats-number">18 <span class="plus">+</span></p>
          <p class="stats-label">Interdisciplinary Institutes</p>
        </div>
        <div class="stats-icon"><i class="fas fa-graduation-cap"></i></div>
      </div>

      <div class="col-vertical">
        <div class="stats-card">
          <div class="info">
            <p class="stats-number">50,000 <span class="plus">+</span></p>
            <p class="stats-label">Alumni</p>
          </div>
          <div class="stats-icon"><i class="fas fa-user-friends"></i></div>
        </div>

        <div class="stats-card">
          <div class="info">
            <p class="stats-number">1264 <span class="plus">+</span></p>
            <p class="stats-label">Erudite Faculty</p>
          </div>
          <div class="stats-icon"><i class="fas fa-chalkboard-teacher"></i></div>
        </div>
      </div>

      <div class="stats-card">
        <div class="info">
          <p class="stats-number">90 <span class="plus">+</span></p>
          <p class="stats-label">Programs in Diverse Fields</p>
        </div>
        <div class="stats-icon"><i class="fas fa-university"></i></div>
      </div>
    </div>
  </div>
</section>
