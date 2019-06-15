<!DOCTYPE html>
<html lang="en">

<body>
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top " name="sticky navigator">
        <a class="navbar-brand text-center" href="#"><img alt="Show me what you got!" id="face" src=IMG/Brands/face.jpg>
            Show Me What You Got!</a>
        <button class="navbar-toggler" data-target="#collapsibleNavbar" data-toggle="collapse" type="button">
            <div class="navbar-toggler-icon"></div>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#details" onclick="navigateout=false;">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ageJumper" onclick="navigateout=false;">Event Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mapJumper" onclick="navigateout=false;">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#arrival" onclick="navigateout=false;">Arrival Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#socialMedia" onclick="navigateout=false;">Social Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#RSVPreg" onclick="navigateout=false;">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" onclick="navigateout=false;">Contact Us!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carouselCont" onclick="navigateout=false;">MEMES!!!!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#top" onclick="navigateout=false;">Top</a>
                </li>

            </ul>
        </div>
    </nav>
<!-- actually body -->
<div class="container" name="body">
    <div class="row">
        <!-- left side of the body -->
        <div class="col-sm-6" id="leftCol" name="left side">
            <!-- event details, agenda -->
            <div class="container" id="details" name="about">
                <br>
                <p id="name">MemeCon!</p>
                <p class="enlarge">Disappointment Island, New Zealand <br> July 19,2019</p>
                <p class="enlarge" o>MemeCon is the biggest gathering of geeks in the world! even more than a Hi-Tech
                    meet&greet
                    events!</p>
                <h3 id="ageJumper">Event Agenda:</h3>
                <p class="enlarge">What can you expect? Well, obviously:</p>
                <?php
                $agenda = array("1"=>"<li class=\"list-group-item-secondary\">Memes making and sharing</li>",
                    "2" =>"<li class=\"list-group-item-primary\">Overly-Attached-Girlfriend and Bad-Luck-Brian marriage ceremony!</li>",
                    "3"=>"<li class=\"list-group-item-secondary text-left\">Scumbag Steve cheats on scumbag Stacy while Stacy cheats on him as well!!</li>",
                    "4"=>"<li class=\"list-group-item-success text-left\">And a lot more!</li>");
                foreach ($agenda as $x=>$y){
                    echo  $agenda[$x];
                }
                ?>
                <br>
                <p>So don't worry about getting bored, ain't
                    nobody got time for that anyway!</p>
                <br>
            </div>
            <br>
            <!-- map -->
            <div class="container" id="mapJumper" name="map">
                <h3>Event Location</h3>
                <p2 id="p2">As you know, this year the MemeCon will take place at Disappointment Island, NZ.
                    <br>Here is the location on Google Maps!:
                </p2>
                <div class="map-responsive">
                    <iframe allowfullscreen
                            frameborder="0"
                            height="450" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20257.079512319775!2d165.95526427313268!3d-50.606030087800946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9b37960d3cdddd7%3A0xbd1bca4ab10f2187!2sDisappointment+Island!5e0!3m2!1sen!2sil!4v1554986395085!5m2!1sen!2sil" width="600"></iframe>
                </div>
            </div>
            <br>
            <!-- arrival table -->
            <div class="container" id="arrival" name="arrival table">
                <br>
                <h4 class="text-center">We also arranged shuttles for you!</h4>
                <div class="container" id="shuTab">
                    <table class="table table-bordered table-dark table-bordered  " id="artab">
                        <thead class="thead-light text-center">
                        <tr>
                            <th>Shuttle</th>
                            <th>Address</th>
                            <th>Departures</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php $times = array(   ["shuttle" => "Titanic" , "address" => "Southampton" , "departure" => "10:04"],
                                                ["shuttle" => "MH370" , "address" => "Kuala Lumpur" , "departure" => "08:03"],
                                                ["shuttle" => "Bereshit" , "address" => "Cape Canaveral" , "departure" => "22:02"]
                            );
                        foreach ($times as $x => $y){
                        echo '<tr><td>' . $times[$x]['shuttle'] . '</td>';
                        echo '<td>' . $times[$x]['address'] . '</td>';
                        echo '<td>' . $times[$x]['departure'] . '</td></tr>';
                    };
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <!-- carousel -->
            <div class="container" id="carouselCont" name="carousel">
                <h3>MEMES!</h3>
                <h4>Here some memes you can use to excuse what you did instead of going to class:</h4>
                <div class="carousel slide " data-ride="carousel" id="carousel">
                    <div class="mySlides">
                        <img alt="im dark" class="img-fluid rounded-sm" src="IMG/Memes/bat.jpg">
                    </div>
                    <div class="mySlides">
                        <img alt="cant" class="img-fluid rounded-sm" src="IMG/Memes/choice.png">
                    </div>
                    <div class="mySlides">
                        <img alt="oops" class="img-fluid rounded-sm" src="IMG/Memes/oops.png">
                    </div>
                    <div class="mySlides">
                        <img alt="pika" class="img-fluid rounded-sm" src="IMG/Memes/pika.png">
                    </div>
                    <div class="mySlides">
                        <img alt="brain" class="img-fluid rounded-sm" src="IMG/Memes/brain.png">
                    </div>
                    <div class="mySlides">
                        <img alt="vroom vroom" class="img-fluid rounded-sm" src="IMG/Memes/car.png">
                    </div>
                    <div class="mySlides">
                        <img alt="addict" class="img-fluid rounded-sm" src="IMG/Memes/win.png">
                    </div>
                    <div class="mySlides">
                        <img alt="no head" class="img-fluid rounded-sm" src="IMG/Memes/stark.png">
                    </div>
                    <div class="mySlides">
                        <img alt="butterfly" class="img-fluid rounded-sm" src="IMG/Memes/butter.png">
                    </div>
                    <div class="mySlides">
                        <img alt="kermit" class="img-fluid rounded-sm" src="IMG/Memes/kermit.png">
                    </div>

                    <a class="prev" id="prev" onclick="moveSlides(-1)">&#10096;</a>
                    <a class="next" id="next" onclick="moveSlides(1)">&#10097;</a>

                </div>
                <br>

                <div id="indicator">
                    <span class="dot" onclick="thisSlide(1)"></span>
                    <span class="dot" onclick="thisSlide(2)"></span>
                    <span class="dot" onclick="thisSlide(3)"></span>
                    <span class="dot" onclick="thisSlide(4)"></span>
                    <span class="dot" onclick="thisSlide(5)"></span>
                    <span class="dot" onclick="thisSlide(6)"></span>
                    <span class="dot" onclick="thisSlide(7)"></span>
                    <span class="dot" onclick="thisSlide(8)"></span>
                    <span class="dot" onclick="thisSlide(9)"></span>
                    <span class="dot" onclick="thisSlide(10)"></span>
                </div>

            </div>
            <br>
            <!-- form -->

        </div>
        <!-- right side of the body -->
        <div class="col-sm-6" name="right side">
            <br>
            <!-- social media navigator -->
            <div class="container small" id="socialMedia" name="social media">
                <h3 class="text-center">Social media</h3>
                <nav class="navbar navbar-expand-sm navbar-dark border-dark overflow-auto  " id="socNav">

                    <a class="navbar-brand face" href="#"><img alt="Social media" class="rounded-circle"
                                                               id="logos"
                                                               src=IMG/Brands/logos.png></a>
                    <button class="navbar-toggler" data-target="#so" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="so">
                        <ul class="navbar-nav">
                            <li class="list-group-item socialList">Facebook<a href="https://www.facebook.com/"> <img
                                            class="img-fluid brands" src="IMG/Brands/facebook.png"></a></li>
                            <li class="list-group-item socialList">Instagram<a href="https://www.instagram.com/"> <img
                                            class="img-fluid brands" src="IMG/Brands/inst.png"></a></li>
                            <li class="list-group-item socialList">Twiter<a href="https://www.twitter.com/"> <img
                                            class="img-fluid brands" src="IMG/Brands/twiiter.png"></a></li>
                            <li class="list-group-item socialList">Reddit<a href="https://www.reddit.com/"> <img
                                            class="img-fluid brands" src="IMG/Brands/reddit.png"></a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</div>
</body>
</html>