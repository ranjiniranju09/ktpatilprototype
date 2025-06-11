@extends('layouts.app')

@section('content')

<style>
    .leaders-section {
        padding: 100px 20px;
        background-color: #f5f9ff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .leaders-title {
        text-align: center;
        font-size: 36px;
        font-weight: 800;
        color: rgb(169, 27, 27);
        margin-bottom: 60px;
    }

    .leader-card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        margin-bottom: 40px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .leader-img {
        flex: 1 1 250px;
        max-width: 300px;
        height: auto;
        object-fit: cover;
        border-right: 1px solid #eee;
    }

    .leader-content {
        flex: 2 1 500px;
        padding: 30px;
    }

    .leader-name {
        font-size: 24px;
        font-weight: 700;
        color: rgb(169, 26, 26);
    }

    .leader-title {
        font-size: 18px;
        font-weight: 600;
        color: #555;
        margin-bottom: 20px;
    }

    .leader-message {
        font-size: 16px;
        line-height: 1.8;
        color: #333;
    }

    @media (max-width: 768px) {
        .leader-card {
            flex-direction: column;
        }

        .leader-img {
            border-right: none;
            border-bottom: 1px solid #eee;
            width: 100%;
        }

        .leader-content {
            padding: 20px;
        }
    }
</style>

<div class="leaders-section">
    <h2 class="leaders-title">Messages from Our Leaders</h2>

    <!-- President -->
    <div class="leader-card">
        <img src="{{ asset('images/president.jpg') }}" alt="President Photo" class="leader-img">
        <div class="leader-content">
            <div class="leader-name">Mr. Sudhir Keshavrao Patil</div>
            <div class="leader-title">President</div>
            <div class="leader-message">
                <p>As the President of our esteemed Engineering college, I am thrilled to extend my warmest greetings to all students, faculty, and staff. Here at the institute, we are dedicated to shaping the next generation of innovators and leaders in engineering.</p>
                <p>Our mission is to provide a dynamic learning environment that fosters creativity, critical thinking, and collaboration. We believe that engineering is not just about technical skills; it’s about solving real-world problems and making a meaningful impact on society.</p>
                <p>As you explore our programs and resources, I encourage you to take full advantage of the opportunities available. Engage with your peers, seek guidance from our experienced faculty, and immerse yourself in hands-on projects that will prepare you for the challenges ahead.</p>
                <p>Together, let’s push the boundaries of knowledge and innovation. I am excited to see the incredible contributions you will make to our community and the world beyond.</p>
            </div>
        </div>
    </div>

    <!-- CEO -->
    <div class="leader-card">
        <img src="{{ asset('images/ceo.jpg') }}" alt="CEO Photo" class="leader-img">
        <div class="leader-content">
            <div class="leader-name">Mr. Aditya Sudhir Patil</div>
            <div class="leader-title">Chief Executive Officer</div>
            <div class="leader-message">
                <p>Welcome to K.T.Patil College of Engineering, Dharashiv.</p>
                <p>As the Chief Executive Officer of the institute, I am delighted to connect with you. Our institution is dedicated to providing a nurturing environment where students can thrive academically and personally.</p>
                <p>At K.T.Patil College of Engineering, we emphasize the importance of innovation, teamwork, and ethical responsibility in engineering. Our dedicated faculty and staff are committed to supporting your educational journey, ensuring you have access to the resources and opportunities needed to succeed.</p>
                <p>I encourage all students to actively participate in campus activities, collaborate with peers, and seek guidance whenever needed. Together, we can create a vibrant community that fosters growth, creativity, and excellence.</p>
                <p>I look forward to witnessing your achievements and contributions in the days to come.</p>
            </div>
        </div>
    </div>

    <!-- Principal -->
    <div class="leader-card">
        <img src="{{ asset('images/principal.jpg') }}" alt="Principal Photo" class="leader-img">
        <div class="leader-content">
            <div class="leader-name">Prof. Dr. Balaji Shivaji Pasare</div>
            <div class="leader-title">Principal</div>
            <div class="leader-message">
                <p>Dear Students,</p>
                <p>I Welcome you in K.T. Patil college of engineering & Technology, A center of excellence learning in Dharashiv. I have great pleasure in knowing your interest in joining our institute.</p>
                <p>You are entering into the Area of Engineering & Technology with full opportunities throughout the world. New Technologies & New skills are emerging continuously. Horizons of engineering professional activities are getting much expanded.</p>
                <p>The Institute offers Undergraduate (Degree), Diploma (Polytechnic) and in Five engineering disciplines. The disciplines are Civil Engineering, Electrical & Electronics Engineering, Mechanical Engineering, Electrical & Electronics Engineering, Computer Science Engineering. And Postgraduate Engineering programme in Civil Engineering.</p>
                <p>The aim of this institute is to produce outstanding Engineers who will prove their professional competence in their respective discipline. At the same time the Institute lays special Emphasis on Human Values Ethics, apart from Academic Excellence.</p>
                <p>All the disciplines are equipped with the Laboratories. The library has Enriched with all types of text/reference books in all the discipline.</p>
                <p>To conclude, I would like to reiterate that, we from K.T. Patil College of Engineering & Technology, are committed to produce knowledgeable, professional experts but active contributors to the society, cultured individual with high personal, professional and ethical standards.</p>
            </div>
        </div>
    </div>
</div>

@endsection
