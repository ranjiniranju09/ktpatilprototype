@extends('layouts.app')

@section('content')

<style>

    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap'); */

    /* Reset Margins and Padding */
    * {
        
    box-sizing: border-box;
    }

    /* Full viewport cover page */
    .container_vision {
        padding-top: 600px;
        padding-bottom: 600px;
        height: 100%;
        font-family: 'Poppins', sans-serif;
    }
    .container_vision {
        background: 
        linear-gradient(rgba(20, 20, 35, 0.7), rgba(20, 20, 35, 0.7)),
        url('https://images.pexels.com/photos/356043/pexels-photo-356043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed;
        background-size: cover;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }

    .cover-container {
        padding-top: 150px;
        max-width: 900px;
        padding: 30px 40px;
        background: rgba(0, 0, 0, 0.45);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.7);
    }

    h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 40px;
        letter-spacing: 5px;
    }

    .section {
        margin-bottom: 40px;
    }

    .icon {
        font-size: 60px;
        color: #ffd700;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    p {
        font-size: 1.25rem;
        line-height: 1.6;
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
        color: #f0e68c;
    }

    @media (max-width: 600px) {
        h1 {
        font-size: 2.4rem;
        letter-spacing: 3px;
        }
        h2 {
        font-size: 1.6rem;
        }
        p {
        font-size: 1rem;
        padding: 0 10px;
        }
        .cover-container {
        padding: 20px 20px;
        }
    }
</style>

<!-- Vision & Mission Section -->
<div class="container_vision">
    <div class="cover-container" role="main" aria-label="Vision and Mission Cover Page">
        <h1>Vision &amp; Mission</h1>
        <section class="section" aria-labelledby="vision-title">
        <div class="icon" aria-hidden="true"><i class="fas fa-binoculars"></i></div>
        <h2 id="vision-title">Our Vision</h2>
        <p>Emerge as a Center of Excellence in Engineering education and Research with the commitment to foster Innovation, Values, Ethics, and Skills in engineers who will contribute towards Sustainable development.</p>
        </section>
        <section class="section" aria-labelledby="mission-title">
        <div class="icon" aria-hidden="true"><i class="fas fa-bullseye"></i></div>
        <h2 id="mission-title">Our Mission</h2>
        <p># Provide a strong foundation in engineering fundamentals through quality pedagogies.</p>
        <p># Encourage innovation through research, design projects, and entrepreneurial endeavors that address real-world challenges.</p>
        <p># Empower students to develop leadership, communication, and teamwork skills with a sense of ethics and social responsibility.</p>
        </section>
  </div>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
