<!doctype html>
<html lang="en">
    <?php
        include_once 'data.php';
        include_once 'functions.php';
        function displaycard($birthday){
            $age = calcage($birthday);
            $fullage = agespec($birthday);
            echo '<div class="card" style="width: 18rem,display: flex;">';
                echo '<div class="card-body">';
                echo '<h9 class="card-title">Age</h9>';
                echo '<p class="card-text">'.$age.' years old <br>Time since birth '.$fullage.'</p>';
            echo '</div>';
        }
    ?>

    <head>
        <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <title>ASE 230 - class of Spring/Fall/Summer 2022</title>
    </head>
    <body>
        <div class="container text-center">
        <h1><?= "This is ASE 230 - class of Fall 2022"; ?></h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3>Our Creative Team</h3>
                        <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                    <div class="line"></div>
                    </div>
            </div>
        </div>
        <div class="row">
        <!-- Single Advisor-->
            <?php
                for($num=0;$num,$num<count($students);$num++){
                    if ($students[$num]['year']=='freshman'):
                        $var='*';
                    endif;
                    if ($students[$num]['year']=='sophomore'):
                        $var='**';
                    endif;
                    if ($students[$num]['year']=='junior'):
                        $var='***';
                    endif;
                    if ($students[$num]['year']=='senior'):
                        $var='****';
                    endif;
            ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb"><a href="details.php?index=<?= $num?>"><img src="<?php echo $students[$num]['picturename'] ?>" width="315" height="315" alt=""></a>
                        <!-- Social Info-->
                        <div class="social-info"><p><?php echo $var ?></p>
                            <a href="detail.html"><i class="fa fa-facebook"></i></a><a href="detail.html"><i class="fa fa-twitter"></i></a><a href="detail.html"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="single_advisor_details_info">
                        <?php
                            echo '<h6>'.$students[$num]['name'].'</h6>';
                            echo '<p class="designation">'.$students[$num]['designation'].'</p>';
                            displaycard($students[$num]['birthday']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>