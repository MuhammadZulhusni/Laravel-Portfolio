<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<!-- Called layouts main page untuk guna dkt page sini(child page) -->
@extends('layouts.main')
@section('title', 'Home')

<!-- Called yield container from layouts -->
@section('container') 
    <div class="welcome-text">
        <center>
            Welcome <br> To <br> My Portfolio
        </center>
    </div>
    
    <div class="spacer"></div>
    
    <div class="profile-container revealUp">
        <img src="/img/myPhoto.jpeg" class="profile-picture">
        <h1 class="heading">Muhammad Zulhusni Bin Rosdan</h1>
        <p class="description">Currently collaborating with Assra Digital Sdn Bhd</p>
    </div>

    </br>
    <div class="skills-section ">
        <h1 class="section-title revealUp">Technical Skills</h1>
        <img src="/img/skill.gif" alt="Technical Skills" class="img-fluid revealUp" style="width: 50%;">

        <br><br>

        <h3 class="subsection-title revealUp">Programming Languages</h3>
        <br>
        <div class="skill">
            <img src="/img/python.png" alt="Python" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">Python - Intermediate</p>
        </div>
        <div class="skill">
            <img src="/img/php.png" alt="PHP" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">PHP - Intermediate</p>
        </div>
        <div class="skill">
            <img src="/img/js.png" alt="JavaScript" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">JavaScript - Intermediate</p>
        </div>

        <div class="spacer"></div>

        <h3 class="subsection-title revealUp">Web Development Frameworks</h3>
        <br>
        <div class="skill">
            <img src="/img/laravel.png" alt="laravel" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">Laravel - Beginner</p>
        </div>
        <div class="skill">
            <img src="/img/dj.png" alt="django" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">Django - Intermediate</p>
        </div>

        <div class="spacer"></div>

        <h3 class="subsection-title revealUp">Frontend Technologies</h3>
        <br>
        <div class="skill">
            <img src="/img/html.png" alt="html" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">HTML - Expert</p>
        </div>
        <div class="skill">
            <img src="/img/css.png" alt="css" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">CSS - Expert</p>
        </div>
        <div class="skill">
            <img src="/img/bootstrap.png" alt="bootstrap" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">Bootstrap - Intermediate</p>
        </div>
        <div class="skill">
            <img src="/img/React.png" alt="react" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">React - Beginner</p>
        </div>

        <div class="spacer"></div>

        <h3 class="subsection-title revealUp">Version Control System</h3>
        <br><br>
        <div class="skill">
            <img src="/img/git.png" alt="git" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">Git - Intermediate</p>
        </div>

        <div class="spacer"></div>

        <h3 class="subsection-title revealUp">Database</h3>
        <br><br>
        <div class="skill">
            <img src="/img/sql.png" alt="mysql" class="skill-image revealUp" id="HoverImage">
            <p class="revealUp">MySQL - Intermediate</p>
        </div>
        <div class="spacer"></div>
    </div>

    <br><br>

    <footer class="text-center mt-5 revealUp">
        <p>&copy; 2024 Zulhusni. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
@endsection

