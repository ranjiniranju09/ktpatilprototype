{{-- resources/views/components/confluence.blade.php --}}

<style>
  .confluence-section {
    background-color: #fff5f5;
    padding: 60px 80px;
    font-family: 'Inter', sans-serif;
  }

  .content-wrapper {
    display: flex;
    justify-content: space-between;
    gap: 50px;
    align-items: flex-start;
    flex-wrap: wrap; /* Allow wrapping on smaller screens */
  }

  .left, .right {
    flex: 1;
    min-width: 280px;
  }

  .left h2 {
    font-size: 2.5rem;
    font-weight: 400;
    color: #000;
  }

  .left strong {
    font-weight: 700;
    display: inline-block;
    margin-top: 10px;
  }

  .right {
    font-size: 1rem;
    color: #7d7d93;
    line-height: 1.8;
  }

  .get-in-touch-link {
    display: inline-block;
    margin-top: 30px;
    font-weight: 700;
    color: #c60000;
    text-decoration: none;
    font-size: 1.1rem;
  }

  .get-in-touch-link i {
    margin-left: 5px;
    transition: margin-left 0.3s ease;
  }

  .get-in-touch-link:hover i {
    margin-left: 10px;
  }

  /* Tablet view adjustments */
  @media (max-width: 991px) {
    .confluence-section {
      padding: 40px 30px;
    }

    .left h2 {
      font-size: 2rem;
    }
  }

  /* Mobile view adjustments */
  @media (max-width: 576px) {
    .content-wrapper {
      flex-direction: column;
      gap: 30px;
    }

    .confluence-section {
      padding: 30px 20px;
    }

    .left h2 {
      font-size: 1.7rem;
    }

    .get-in-touch-link {
      font-size: 1rem;
    }
  }
</style>

<div class="confluence-section">
  <div class="content-wrapper">
    <div class="left">
      <h2>
        A Confluence of Education, <strong>Healthcare &amp; Sports</strong>
      </h2>
    </div>
    <div class="right">
      <p>
        Nestled in the heart of Navi Mumbai with state-of-the-art infrastructure, DY Patil University, since its inception in 1983 has been heralding several niche practices focused on developing a conducive environment for its students focused on their holistic development and a research-driven culture for its faculties to aid them in their pursuit of achieving academic excellence.
      </p>
      <p>
        With more than 55,000 Alumni across the globe with careers spanning various leadership and strategic roles across diverse industries and functional areas, their success is a testament to DY Patil University’s 40-year strong legacy.
      </p>
      <a href="#" class="get-in-touch-link">
        Get in touch <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</div>
