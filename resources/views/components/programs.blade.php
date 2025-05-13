{{-- resources/views/components/programs.blade.php --}}

<section class="programs">
  <style>
    .programs {
      font-family: 'Inter', sans-serif;
      background-color: white;
      color: #1a202c;
      margin: 0;
      padding: 0;
    }

    .containerprograms {
      max-width: 1120px;
      margin: auto;
      padding: 3rem 1rem;
    }

    @media (min-width: 640px) {
      .containerprograms {
        padding: 3rem 1.5rem;
      }
    }

    @media (min-width: 1024px) {
      .containerprograms {
        padding: 3rem 2rem;
      }
    }

    .grid-2-md {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3rem;
      margin-bottom: 3rem;
    }

    @media (min-width: 768px) {
      .grid-2-md {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    .grid-3-lg {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }

    @media (min-width: 640px) {
      .grid-3-lg {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .grid-3-lg {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .h2programs {
      font-size: 1.5rem;
      font-weight: 600;
      line-height: 1.25;
      margin: 0;
    }

    .font-extrabold {
      font-weight: 800;
    }

    .h3programs {
      font-size: 1.25rem;
      font-weight: 400;
      margin-bottom: 0.75rem;
      margin-top: 0;
    }

    .descriptionprograms {
      font-size: 0.75rem;
      color: #a0aec0;
      line-height: 1.5;
      max-width: 40rem;
      margin: 0;
    }

    .cardprograms h4 {
      margin-top: 0.75rem;
      font-weight: 600;
      font-size: 0.875rem;
      margin-bottom: 0.25rem;
    }

    .cardprograms p {
      margin-top: 0.25rem;
      font-size: 0.75rem;
      color: #a0aec0;
      line-height: 1.5;
      margin-bottom: 0;
    }

    .cardprograms a {
      display: block;
      overflow: hidden;
      border-radius: 0.375rem;
      text-decoration: none;
    }

    .cardprograms img {
      width: 100%;
      height: auto;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
      display: block;
      
    }

    .cardprograms a:hover img {
      transform: scale(1.1);
    }
  </style>

  <div class="containerprograms">
    <div class="grid-2-md">
      <div>
        <h2 class="h2programs">
          Academia &amp;<br/>
          <span class="font-extrabold">Programmes</span>
        </h2>
      </div>
      <div>
        <h3 class="h3programs">Stay ahead of the Curve</h3>
        <p class="descriptionprograms">
          The academic programmes at K.T.Patil College of Engineering and Technology have been attuned to the latest advancements interfacing with technology and academia along with incorporating academic resources from top global universities thereby creating a nimble academic curriculum for a comprehensive student learning experience.
        </p>
      </div>
    </div>

    <div class="grid-3-lg">
      <div class="cardprograms">
        <a href="{{ route('ugprogram')}}" aria-label="Undergraduate Programs (UG)">
          <img src="https://storage.googleapis.com/a1aa/image/b1abaca6-9c1e-408f-65f6-eadc9cfd9e21.jpg" alt="Man in black suit with glasses working on a laptop in a classroom setting with other students in background" width="600" height="350" />
        </a>
        <h4>Undergraduate Programs (UG)</h4>
        <p>
          For students looking to gain knowledge with a Bachelor's education, K.T.Patil College of Engineering and Technology has a whole list of undergraduate programs.
        </p>
      </div>

      <div class="cardprograms">
        <a href="{{ route('pgprogram')}}" aria-label="Postgraduate Programs (PG)">
          <img src="https://storage.googleapis.com/a1aa/image/5de47fe5-04d1-4f74-ad2d-643c5f6aba0a.jpg" alt="Three students studying together with a laptop in a modern library or study area" width="600" height="350" />
        </a>
        <h4>Postgraduate Programs (PG)</h4>
        <p>
          Perseverance is the key to developing expertise. Hone your knowledge in specific fields with K.T.Patil College of Engineering and Technology's postgraduate programs.
        </p>
      </div>

      <div class="cardprograms">
        <a href="{{ route('diploma')}}" aria-label="Diploma in Engineering (Polytechnic)">
          <img src="https://storage.googleapis.com/a1aa/image/48c9a3be-4437-416b-d95e-d7f9e79a2937.jpg" alt="Group of students working together in a technical laboratory" width="600" height="350" />
        </a>
        <h4>Diploma in Engineering (Polytechnic)</h4>
        <p>
          For students aiming to pursue a career in engineering with hands-on technical expertise, K.T.Patil College of Engineering and Technology offers a range of Polytechnic courses.
        </p>
      </div>
    </div>
  </div>
</section>
