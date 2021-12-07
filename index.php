<?php
    include('./layout/header.php');
?>
    <!-- profile section start -->
    <section class="profile" id="profile">
        <div class="container">
            <h2 class="title">My Profile</h2>
            <div class="profile-content">
                <div class="column left">
                    <img src="image/profile.jpg" alt="Profile Picture">
                </div>
                <div class="column right">
                    <p>
                        <ul class="profile info">
                            <li><span>Name:</span> Naurah Hamizah Binti Mohd Ghazali</li>
                            <li><span>Phone Number: </span>011-10548974</li>
                            <li><span>Address: </span>Dungun, Terengganu</li>
                            <li><span>Email: </span>hamizahnaurah@gmail.com</li>
                        </ul>
                    </p>

                    <!-- <iframe src='audio/audio.mp3' type='audio/mp3' allow='autoplay' id='audio' style='display:none'></iframe>
                    <audio autoplay>
                        <source src='audio/audio.mp3' type='audio/mp3'>
                    </audio> -->
                    <audio controls autoplay>
                        <source src="audio/audio.ogg" type="audio/ogg">
                        <source src="audio/audio.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </section>
    <!-- profile section end -->

    <!-- academic section start -->
    <section class="academic" id="academic">
        <div class="container">
            <h2 class="title">Academic Info</h2>
            <div class="academic-content">
                <div class="card">
                    <div class="box">
                        <div class="text"><i class="fas fa-graduation-cap"></i> Undergraduate</div>
                        <p>UiTM Terengganu Campus Kuala Terengganu</p>
                        <p>2021 - Present</p>
                    </div>
                </div>
                    
                <div class="card">
                    <div class="box">
                        <div class="text"><i class="fas fa-user-graduate"></i> Diploma</div>
                        <p>UiTM Terengganu Campus Kuala Terengganu</p>
                        <p>2018 - 2020</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="text"><i class="fas fa-school"></i> High School</div>
                        <p>SMK(A) Kuala Abang, Dungun, Terengganu</p>
                        <p>2013 - 2017</p>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- academic section end -->

    <!-- experience section start -->
    <section class="experience" id="experience">
        <div class="container">
            <h2 class="title">Working Experience</h2>
            <div class="experience-content">
                <div class="card">
                    <div class="box">
                        <div class="text">Emcee of Officers Event</div>
                        <p>at Kuala Terengganu Giat Mara </p>
                        <p>3th May 2019</p>
                    </div>
                </div>
 
                <div class="card">
                    <div class="box">
                        <div class="text">Diploma Internship</div>
                        <p>at Softbravo Dot Net</p>
                        <p>August 2020 - September 2020</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="text">MyVac Volunteer</div>
                        <p>at UiTM Dungun Vaccination Center </p>
                        <p>August 2021 - October 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experience section end -->
<?php
    include('./layout/footer.php');
?>