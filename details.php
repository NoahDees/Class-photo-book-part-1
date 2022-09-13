<!doctype html>
<html lang="en">
    <?php
        $ind = $_GET['index'];
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
	    <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ASE 230 - class of Spring/Fall/Summer 2022</title>
    </head>
	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<title> This is ASE 230 -<?=$students[$ind]['name']?></title>
		<div class="container text-center mb-5">
			<h1>This is ASE 230 - <?=$students[$ind]['name']?></h1>
		</div>
		<div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                   <div class="mb-2">
                        <a href="details.php?index=<?= $num?>"><img src="<?php echo $students[$ind]['picturename']?>" width="315" height="315" alt=""></a>
                   </div>
                   <div class="mb-2 d-flex">
                       <h4 class="font-weight-normal"><?=$students[$ind]['name']?></h4>
                       <div class="social d-flex ml-auto">
                           <p class="pr-2 font-weight-normal">Follow on:</p>
                           <a href="#" class="text-muted mr-1">
                               <i class="fab fa-facebook-f"></i>
                           </a>
                           <a href="#" class="text-muted mr-1">
                               <i class="fab fa-twitter"></i>
                           </a>
                           <a href="#" class="text-muted mr-1">
                               <i class="fab fa-instagram"></i>
                           </a>
                           <a href="#" class="text-muted">
                               <i class="fab fa-linkedin"></i>
                           </a>
                       </div>
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Dream Profession:</span>
                            <label class="media-body"><?=$students[$ind]['profession']?></label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Dream Company:</span>
                            <label class="media-body"><?=$students[$ind]['company']?></label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Email:</span>
                            <label class="media-body"><?=$students[$ind]['email']?>></label>
                        </li>
                    </ul>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 pl-xl-3">
                   <h5 class="font-weight-normal">Short Intro</h5>
                   <p><?=$students[$ind]['intro']?></p>
                   <div class="my-2 bg-light p-2">
                     <p class="font-italic mb-0"><?=$students[$ind]['snippet']?></p>
                   </div>
                   <div class="mb-2 mt-2 pt-1">
                     <h5 class="font-weight-normal">Top Skills</h5>
                   </div>
                   <div class="py-1">
                         <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width:<?=$students[$ind]['skillpercent'][0]?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar-title"><?=$students[$ind]['skills'][0]?></div>
                                    <span class="progress-bar-number"><?=$students[$ind]['skillpercent'][0]?></span>
                              </div>
                         </div>
                   </div>
                   <div class="py-1">
                        <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width:<?=$students[$ind]['skillpercent'][1]?>%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                   <div class="progress-bar-title"><?=$students[$ind]['skills'][1]?></div>
                                   <span class="progress-bar-number"><?=$students[$ind]['skillpercent'][1]?></span>
                              </div>
                        </div>
                   </div>
                   <div class="py-1">
                       <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width:<?=$students[$ind]['skillpercent'][2]?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                  <div class="progress-bar-title"><?=$students[$ind]['skills'][2]?></div>
                                  <span class="progress-bar-number"><?=$students[$ind]['skillpercent'][2]?></span>
                              </div>
                       </div>
                   </div>
                   <h5 class="font-weight-normal">Fun Fact</h5>
                   <p><?=$students[$ind]['funfact']?></p>
                   <a href="index.php">Go back to homepage</a>
              </div>
            </div>
        </div>
    </body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>