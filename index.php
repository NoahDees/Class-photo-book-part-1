<!doctype html>
<html lang="en">
    <?php
        $students = [[
            'name'=>'Noah Dees',
            'designation'=>'PHP Designer',
            'company'=>'IBM',
            'email'=>'deesn1@nku.edu',
            'intro'=>'I am a senior at Northern Kentucky University in my final semester. I am ready to finish off my college career with some Server-Side Programming!',
            'snippet'=>'I may not always have good habits in terms of spending my time or money (which I am working on), but I do have the knowledge to get me out of trouble most of the time!',
            'profession'=>'Python Coder',
            'skills'=>['Finance','Information Technologies','Education'],
            'skillpercent'=>['70','85','90'],
            'year'=>'senior',
            'pagename'=>'details.php',
            'picturename'=>'picture.jpg',
            'funfact'=>'I graduated as the Salutatorian of my high school class and I love to fish.'],
            
            [
            'name'=>'Andrew Keller',
			'designation'=>'CIT Student',
			'snippet'=>'"Whether you believe you can or can\'t, you\'re right."',
			'profession'=>'Remote Developer',
			'company'=>'Intel',
			'intro'=>'"I am a CIT student with a focus on programming and data analytics. My working career has lead me to a wide variety of experiences. Problem solving is at the root of what I do and I am not afraid to ask questions or say I don\'t know."',
			'email'=>'"kellera11@mymail.nku.edu"',
			'skills'=>['Python','Java','Tableau'],
            'skillpercent'=>['85','70','55'],
            'year'=>'senior',
            'pagename'=>'0',
            'picturename'=>'AndrewKellerPhoto.jpg',
			'funfact'=>'"Secretariat was a champion thouroughbred most know for winning the Triple Crown in 1973. He set and still holds the record at all three Triple Crown races: The Kentucky Derby, The Preakness Stakes and The Belmont Stakes. Considered by most to be the greatest racehorses of all time, he is considered by some as one of the greatest athletes of all time. He became the 9th Triple Crown winner when he won the Belmont Stakes by 31 lengths, approximately 248 feet. There are 13 total Triple Crown winners: Sir Barton (1919), Gallant Fox (1930), Omaha (1935), War Admiral (1937), Whrilaway (1941), Count Fleet (1943), Assault (1946), Citation (1948), Secretariat (1973), Seattle Slew (1977), Affirmed (1978), American Pharoah (2015), Justify (2018)."'],
        
            [
            'name'=>'Phil Mickelson',
            'designation'=>'Golfer',
            'company'=>'Lefty Inc.',
            'email'=>'greatgolfer@yahoo.com',
            'intro'=>'I am a great golfer from San Diego.',
            'snippet'=>'I\'ve won Three Masters',
            'profession'=>'Coach',
            'skills'=>['Driving','Chipping','Putting'],
            'skillpercent'=>['100','100','100'],
            'year'=>'freshman',
            'pagename'=>'0',
            'picturename'=>'mickelson.jpg',
            'funfact'=>'I am a part of the ~5% of the PGA Tour that is left handed.']
        ];
                
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
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb"><a href="details.php?index=<?= $num?>"><img src="<?php echo $students[$num]['picturename'] ?>" width="315" height="315" alt=""></a>
                        <!-- Social Info-->
                        <div class="social-info"><p><?php echo $var ?></p>
                        <a href="detail.html"><i class="fa fa-facebook"></i></a><a href="detail.html"><i class="fa fa-twitter"></i></a><a href="detail.html"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="single_advisor_details_info">
                    <?php
                        echo '<h6>'.$students[$num]['name'].'</h6>';
                        echo '<p class="designation">'.$students[$num]['designation'].'</p>';
                        ?>
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