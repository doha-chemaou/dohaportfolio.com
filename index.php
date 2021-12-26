<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="icons/pink-xopixel-folder_99392.ico">

</head>
<body>
    <nav class = "navbar">
        <ul class = " link-group">
            <!--<li class="link active"> <a href="#"> home </a> </li>-->
            <li class="link active"> <a href="#"> home </a> </li>
            <li class="link"> <a href="#"> projects </a> </li>
            <li class="link"> <a href="#"> about </a> </li>
            <li class="link"> <a href="#"> contact </a> </li>
        </ul>
    </nav>

    <!--
        home section 
    -->
    <section class= "home-section active"> 
        <h1 class = "home-heading">hello, i am <br> doha </h1>
        <img src="img/image.jpg" class= "home-img" alt="">
    </section>

    <!--
        project section 
    -->

    <section class= "project-section">
        <h1 class="project-heading"> some of my projects</h1>
        <div class="project-container">
            <div class="project-card">
                <img src="img/portfolio pink.jpg" class ="project-img" alt="">
                <div class="project-content">
                    <h1 class="project-title"> portfolio </h1>
                    <p class="project-info"> 
                        it's the project that you can see throught out this website that has been labored with HTML, CSS and JavaScript . 
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio doloribus praesentium possimus sed aliquam vero laudantium nemo, magni ipsam beatae ea aut error unde nisi, officia numquam rerum laborum similique!  -->
                    </p>
                    <div class="project-btn-grp">
                    <button  onclick="window.open('https://github.com/doha-chemaou/dohaportfolio.com' + location.search)"  class="project-btn github">github repo</button>
                    <button class="project-btn live">see live</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section  -->
<section class="about-section">
    <div class = "about">
        <div class="about-img-container">
            <img src="img/image.jpg" class="about-img" alt="">
            <a href="doha_CV__English_.pdf" download="pdf" target="_blank">
            <button class="download-cv-btn"> download cv</button>
            </a>
        </div>
        <p class = "about-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eius exercitationem accusamus omnis, dignissimos tenetur odit magnam neque quibusdam soluta. Doloremque reprehenderit similique rerum in odit nisi, amet itaque numquam architecto magnam debitis eius, distinctio alias labore? Ipsam explicabo cumque illum nam in neque, corrupti autem voluptatibus inventore alias optio similique sequi numquam. Itaque debitis id sapiente corrupti magni amet totam accusantium repudiandae placeat perferendis saepe impedit excepturi, autem deserunt voluptatibus aperiam natus veritatis culpa explicabo repellendus, esse nostrum eveniet voluptate? Eius error illo doloribus labore sed eum excepturi distinctio odio, animi modi voluptate? Assumenda quae qui esse vero hic voluptas ab, accusamus ullam corrupti non nemo voluptatibus. Necessitatibus totam modi dolor? Enim quas reiciendis asperiores debitis illo, officiis eveniet aut vitae. Nostrum commodi fuga, ad iure autem distinctio velit omnis aperiam ea assumenda? Perspiciatis dolores deleniti labore minima dicta placeat illo doloremque corporis ut possimus distinctio, explicabo aliquam? Consectetur.</p>
    </div>

<!-- skills -->

<div class="skill-section">
    <h1 class="heading"> skills </h1>
    <div class="skills-container">
        <div class="skill-card">
            <img src="img/html.png" class="skill-img" alt="">
            <div class= "skill-level"> 
                <p id="level"> 80%</p> 
                <div id='one' class='loading-one'>
                    <div class='outer-shadow-one'>
                    </div>
                      <div class='hold-one left-one'>
                        <div class='fill-one'></div>
                      </div>
                      <div class='hold-one right-one'>
                        <div class='fill-one'></div>
                      </div>
                    
                  </div>
                <!-- <div id="one" class="one"></div> -->
            </div>
            <h1 class="skill-name">HTML</h1>
            <!-- <p class="skill-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione.</p> -->
        </div>
        <div class="skill-card">
            <img src="img/css.png" class="skill-img" alt="">
            <div class= "skill-level"> 
                <p id="level2"> 60% </p> 
                <div id="two" class="loading-two">
                    <div class='outer-shadow-two'>
                    </div>
                      <div class='hold-two left-two'>
                        <div class='fill-two'></div>
                      </div>
                      <div class='hold-two right-two'>
                        <div class='fill-two'></div>
                      </div>
                </div>
            </div>
            <h1 class="skill-name">CSS</h1>
            <!-- <p class="skill-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione.</p> -->
        </div>
        <div class="skill-card">
            <img src="img/js.png" class="skill-img" alt="">
            <div class= "skill-level"> 
                <p id="level3">60% </p>
                <div id="three" class="loading-three">
                    <div class='outer-shadow-three'>
                    </div>
                      <div class='hold-three left-three'>
                        <div class='fill-three'></div>
                      </div>
                      <div class='hold-three right-three'>
                        <div class='fill-three'></div>
                      </div>
                </div>
            </div>
            <h1 class="skill-name">JS</h1>
            <!-- <p class="skill-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione.</p> -->
        </div>
        <div class="skill-card">
            <img src="img/java.png" class="skill-img" alt="">
            <div class= "skill-level"> 
                <p id="level4">70% </p> 
                <div id="four" class="loading-four">
                    <div class='outer-shadow-four'>
                    </div>
                      <div class='hold-four left-four'>
                        <div class='fill-four'></div>
                      </div>
                      <div class='hold-four right-four'>
                        <div class='fill-four'></div>
                      </div>
                </div>
            </div>
            <h1 class="skill-name">Java</h1>
            <!-- <p class="skill-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione.</p> -->
        </div>
        <div class="skill-card">
            <img src="img/python.png" class="skill-img" alt="">
            <div class= "skill-level"> 
                <p id="level5">70% </p> 
                <div id="five" class="loading-five">
                    <div class='outer-shadow-five'>
                    </div>
                      <div class='hold-five left-five'>
                        <div class='fill-five'></div>
                      </div>
                      <div class='hold-five right-five'>
                        <div class='fill-five'></div>
                      </div>
                </div>

            </div>
            <h1 class="skill-name">Python</h1>
            <!-- <p class="skill-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione.</p> -->
        </div>
        <div class="skill-card">
            <img src="img/angular.png" class="skill-img" alt="">
            <div class= "skill-level"> 
                <p id="level6">60% </p> 
                <div id="six" class="loading-six">
                    <div class='outer-shadow-six'>
                    </div>
                      <div class='hold-six left-six'>
                        <div class='fill-six'></div>
                      </div>
                      <div class='hold-six right-six'>
                        <div class='fill-six'></div>
                      </div>
                </div>

            </div>
            <h1 class="skill-name">Angular</h1>
            <!-- <p class="skill-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione.</p> -->
        </div>
    </div>
</div>

<!-- timeline -->
<div class="timeline">
    <h1 class="heading"> education and experience </h1>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"> 2020-2022</h1>
            <p class="card-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat necessitatibus nam hic dolores numquam, quos odio deserunt consequatur. Eveniet, ullam possimus rerum veritatis quis quia praesentium accusantium debitis repellendus at?</p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h1 class="card-title"> 2021-2021</h1>
            <p class="card-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat necessitatibus nam hic dolores numquam, quos odio deserunt consequatur. Eveniet, ullam possimus rerum veritatis quis quia praesentium accusantium debitis repellendus at?</p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h1 class="card-title"> 2016-2020 </h1>
            <p class="card-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat necessitatibus nam hic dolores numquam, quos odio deserunt consequatur. Eveniet, ullam possimus rerum veritatis quis quia praesentium accusantium debitis repellendus at?</p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h1 class="card-title"> 2018-2018</h1>
            <p class="card-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat necessitatibus nam hic dolores numquam, quos odio deserunt consequatur. Eveniet, ullam possimus rerum veritatis quis quia praesentium accusantium debitis repellendus at?</p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h1 class="card-title"> 2015-2016</h1>
            <p class="card-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat necessitatibus nam hic dolores numquam, quos odio deserunt consequatur. Eveniet, ullam possimus rerum veritatis quis quia praesentium accusantium debitis repellendus at?</p>

        </div>
    </div>
</div>

</section>

<!-- contact section  -->
<section class="contact-section">
    <form class="contact-form" method="post" action="">
        <input type="text" name="name" id="name" autocomplete="off" placeholder="name">
        <input type="text" name="email" id="email" autocomplete="off" placeholder="email">
        <textarea name="msg" id="msg" placeholder = "message" autocomplete = "off"></textarea>
        <button type="submit" name="submit" class="form-submit-btn">contact</button>
    </form>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46221.33399461054!2d3.8391499216241742!3d43.61001085529046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier!5e0!3m2!1sfr!2sfr!4v1640414238566!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<!-- map -->


<script src ="script.js"></script>
    
</body>
</html>