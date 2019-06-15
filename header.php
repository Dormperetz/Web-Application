<!DOCTYPE html>
<html lang="en">

<body>
<header name="quote">
    <div class="jumbotron-fluid text-center" id="top">
        <blockquote class="blockquote">
            "There is a special place in hell for people who don't like memes"
            <br>
            <p id="dor">-Dor Peretz</p>
        </blockquote>
        <?php
        echo "Today is: " . date("d.m.y");
        ?>
        <div class="container" id="timer" name="timer">
            <?php
            $d1=strtotime("July 19");
            $d2=ceil(($d1-time())/60/60/24);
            echo "There are " . $d2 ." days until MemeCon!(July 19)";
            ?>
        </div>
    </div>

</header>
</body>
</html>