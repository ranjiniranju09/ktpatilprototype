<style>
    /* Leadership */
.containerleadership {
  max-width: 1120px;
  margin: 0 auto;
  padding: 40px 16px;
}
.header-gridleadership {
  display: grid;
  grid-template-columns: 1fr;
  gap: 40px;
}
.events-news {
  padding-top: 100px; /* or even 120px if your navbar is bigger */
}

@media (min-width: 768px) {
  .header-gridleadership {
    grid-template-columns: repeat(3, 1fr);
  }
}

.h2leadership {
  font-weight: 400;
  font-size: 1.25rem;
  margin-bottom: 8px;
}
.h1leadership {
  font-weight: 800;
  font-size: 1.875rem;
  margin-bottom: 40px;
}
.quote-sectionleadership {
  color: #9ca3af; /* gray-400 */
  font-size: 0.875rem;
  line-height: 1.5;
  
}
.quote-sectionleadership p {
  margin-top: 0;
  /* margin-left: 40px; */
  margin-bottom: 24px;
  font-style: italic;
}
.images-rowleadership {
  margin-top: 40px;
  display: grid;
  grid-template-columns: 1fr;
  gap: 24px;
}
@media (min-width: 640px) {
  .images-rowleadership {
    grid-template-columns: repeat(3, 1fr);
  }
}
.image-wrapperleadership {
  /* position: relative; Important to place text over image */
  overflow: hidden;
  height: 350px;
  z-index: auto; /* or 0 (do NOT give high z-index here) */
}
.image-wrapperleadership img {
  width: 100%;
  height: 100%; /* Make image exactly fit */
  object-fit: cover;
  display: block;
}

.name-textleadership {
  position: absolute;
  bottom: 60px; /* Adjust as needed */
  left: 16px;
  color: black;
  font-weight: 700;
  font-size: 1.5rem;
  text-shadow: 0 0 4px rgba(255, 255, 255, 0.8);
  font-family: Arial, sans-serif;
  margin: 0;
  text-decoration: none; /* Make it a hyperlink */
}

.name-textleadership:hover {
  text-decoration: none; /* Optional: underline on hover */
}
.designation-linkleadership {
  position: absolute;
  bottom: 16px;
  left: 16px;
  background-color: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(6px);
  border-radius: 6px;
  padding: 4px 12px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-weight: 600;
  font-size: 0.875rem;
  color: black;
  text-decoration: none;
  transition: background-color 0.3s ease;
}
.designation-linkleadership:hover {
  background-color: rgba(255, 255, 255, 1);
}
</style>

<section class="events-news" style="padding-top: 100px;">
  <div class="containerleadership">
    <div class="header-gridleadership">
      <div>
        <h2 class="h2leadership">DY Patil University</h2>
        <h1 class="h1leadership">Leadership</h1>
      </div>
      <div class="quote-sectionleadership">
        <p>“Education is the most powerful weapon which you can use to change the world.” – Nelson Mandela.</p>
        <p>
          The leadership at DY Patil University are firm believers in polishing the worldview of their learners into open-minded, aware, and responsible perspectives.
        </p>
      </div>
      <div></div>
    </div>
    <div class="images-rowleadership">
      <div class="image-wrapperleadership">
        <img
          src="{{ asset('images/president.jpg') }}"
          alt="Portrait of an Indian man with white shirt and brown background, smiling gently"
          width="600"
          height="700"
        />
        <!-- <a href="#" class="name-textleadership">Dr. Vijay D. Patil</a>
        <a href="#" class="designation-linkleadership">Founder Chancellor <span aria-hidden="true">→</span></a> -->
      </div>
      <div class="image-wrapperleadership">
        <img
          src="{{ asset('images/ceo.jpg') }}"
          alt="Portrait of an Indian man wearing glasses and formal suit with blurred background, looking confident"
          width="600"
          height="700"
        />
        <!-- <a href="#" class="name-textleadership">Dr. Sanjay D. Patil</a>
        <a href="#" class="designation-linkleadership">Chancellor and President <span aria-hidden="true">→</span></a> -->
      </div>
    </div>
    <!-- Add more events/news as needed -->
  </div>
</section>