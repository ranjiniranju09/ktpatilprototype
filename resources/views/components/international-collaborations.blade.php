<style>
  /* International Collaborations */
  .international-collaborations {
    background-color: #f8f8f8;
    padding: 60px 0;
    text-align: center;
    font-family: 'Segoe UI', sans-serif;
  }

  .international-collaborations h2 {
    color: #c8102e;
    margin-bottom: 20px;
  }

  .international-collaborations p {
    max-width: 800px;
    margin: 0 auto 40px;
    color: #555;
    font-size: 1.1rem;
  }

  /* Logo slider wrapper */
  .logo-slider {
    overflow: hidden;
    position: relative;
  }

  .logo-track {
    display: flex;
    width: calc(250px * 10); /* Adjust 10 based on number of logos */
    animation: scrollLogos 30s linear infinite;
  }

  .logo-slide {
    width: 250px;
    flex-shrink: 0;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .logo-slide img {
    max-height: 60px;
    width: auto;
    object-fit: contain;
    filter: grayscale(100%);
    transition: filter 0.3s;
  }

  .logo-slide img:hover {
    filter: grayscale(0%);
  }

  @keyframes scrollLogos {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  @media (max-width: 768px) {
    .logo-slide {
      width: 180px;
    }
  }
</style>

<section class="international-collaborations">
  <div class="container">
    <h2>International Collaborations</h2>
    <p>Our work is anchored in international collaborations, extending across more than 10 countries. We have established 40 MoUs and welcomed over 50 distinguished faculty members.</p>

    <div class="logo-slider">
      <div class="logo-track">
        <!-- Repeat logos for seamless scrolling -->
        <div class="logo-slide"><img src="images/logo1.png" alt="Company 1"></div>
        <div class="logo-slide"><img src="images/logo2.png" alt="Company 2"></div>
        <div class="logo-slide"><img src="images/logo3.png" alt="Company 3"></div>
        <div class="logo-slide"><img src="images/logo4.png" alt="Company 4"></div>
        <div class="logo-slide"><img src="images/logo5.png" alt="Company 5"></div>
        <!-- Duplicated for continuous loop -->
        <div class="logo-slide"><img src="images/logo1.png" alt="Company 1"></div>
        <div class="logo-slide"><img src="images/logo2.png" alt="Company 2"></div>
        <div class="logo-slide"><img src="images/logo3.png" alt="Company 3"></div>
        <div class="logo-slide"><img src="images/logo4.png" alt="Company 4"></div>
        <div class="logo-slide"><img src="images/logo5.png" alt="Company 5"></div>
      </div>
    </div>
  </div>
</section>
