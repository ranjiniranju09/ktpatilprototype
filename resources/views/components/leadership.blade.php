<style>
  * {
    box-sizing: border-box;
  }

  .containerleadership {
    max-width: 1120px;
    margin: 0 auto;
    padding: 60px 16px;
  }

  .header-gridleadership {
    text-align: center;
    margin-bottom: 60px;
  }

  .h2leadership {
    font-weight: 500;
    font-size: 1.5rem;
    color: #6b7280;
    margin-bottom: 8px;
  }

  .h1leadership {
    font-weight: 800;
    font-size: 2.5rem;
    color: #111827;
    margin-bottom: 24px;
  }

  .quote-sectionleadership {
    max-width: 800px;
    margin: 0 auto;
    font-size: 1rem;
    line-height: 1.7;
    color: #4b5563;
    font-style: italic;
  }

  .images-rowleadership {
    display: grid;
    grid-template-columns: 1fr;
    gap: 32px;
    margin-top: 60px;
  }

  @media (min-width: 640px) {
    /* 3 columns instead of 2 */
    .images-rowleadership {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  .image-wrapperleadership {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    background-color: #f9fafb;
    transition: transform 0.3s ease;
    text-decoration: none !important;
    color: inherit;
    display: block;
  }

  .image-wrapperleadership img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    display: block;
  }

  .founder-img {
    object-position: top center;
  }

  .text-contentleadership {
    text-align: center;
    padding: 16px 8px;
  }

  .name-textleadership {
    font-size: 1.25rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 6px;
    font-family: 'Segoe UI', sans-serif;
  }

  .designation-textleadership {
    font-size: 1rem;
    color: #4b5563;
    font-weight: 500;
  }
</style>

<section class="events-news">
  <div class="containerleadership">
    <div class="header-gridleadership">
      <h2 class="h2leadership">KT Patil College OF Engineering</h2>
      <h1 class="h1leadership">Leadership</h1>
      <div class="quote-sectionleadership">
        <p>“Education is the most powerful weapon which you can use to change the world.” – Nelson Mandela.</p>
        <p>The leadership at DY Patil University are firm believers in polishing the worldview of their learners into open-minded, aware, and responsible perspectives.</p>
      </div>
    </div>

    <div class="images-rowleadership">
      <a href="{{ route('leadership') }}" class="image-wrapperleadership">
        <img class="founder-img" src="{{ asset('images/president.jpg') }}" alt="Dr. Vijay D. Patil - Founder Chancellor" />
        <div class="text-contentleadership">
          <div class="name-textleadership">Dr. Vijay D. Patil</div>
          <div class="designation-textleadership">Founder Chancellor</div>
        </div>
      </a>

      <a href="{{ route('leadership') }}" class="image-wrapperleadership">
        <img src="{{ asset('images/ceo.jpg') }}" alt="Dr. Sanjay D. Patil - Chancellor and President" />
        <div class="text-contentleadership">
          <div class="name-textleadership">Mr. Aditya Sudhir Patil </div>
          <div class="designation-textleadership">CEO</div>
        </div>
      </a>

      <a href="{{ route('leadership') }}" class="image-wrapperleadership">
        <img src="{{ asset('images/principal.jpg') }}" alt="Prof. Dr. Balaji Shivaji Pasare - Principal" />
        <div class="text-contentleadership">
          <div class="name-textleadership">Prof. Dr. Balaji Shivaji Pasare</div>
          <div class="designation-textleadership">Principal</div>
        </div>
      </a>
    </div>
  </div>
</section>
