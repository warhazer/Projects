<?php
include("auth.php");
?>

<div class="form">

<p>Welcome <?php echo $_SESSION['username']; ?> to your Yoga Quiz!</p>

</div>
<?php 


$Questions = array(
    1 => array(
        'Question' => '11<img src="YogaCard1.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Warrior 1',
            'B' => 'Warrior 1 (Var)',
            'C' => 'Warrior 3',
			'D' => 'Hero Pose'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array(
        'Question' => '12<img src="YogaCard2.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Seated Angle Pose',
            'B' => 'Intense Side Stretch Pose',
            'C' => 'Scorpion',
			'D' => 'Triangle Pose'
        ),
        'CorrectAnswer' => 'B'
    ),
	3 => array(
        'Question' => '13<img src="YogaCard3.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Reclining Hero Pose',
            'B' => 'Lying Down Westward Pose',
            'C' => 'Seated Angle Pose',
			'D' => 'Reclining Angle Pose'
        ),
        'CorrectAnswer' => 'D'
    ),
	4 => array(
        'Question' => '14<img src="YogaCard4.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Step Back & Step Forward',
            'B' => 'Supported Pigeon Pose',
            'C' => 'Downward Facing Staff',
			'D' => 'The Plough Pose'
        ),
        'CorrectAnswer' => 'A'
    ),
	5 => array(
        'Question' => '15<img src="YogaCard5.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Child Pose',
            'B' => 'Cobra',
            'C' => 'Downward Facing Staff',
			'D' => 'Locust Pose'
        ),
        'CorrectAnswer' => 'C'
    ),
	6 => array(
        'Question' => '16<img src="YogaCard6.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Side Headstand',
            'B' => 'Supported Shoulderstand',
            'C' => 'Downward Facing Tree',
			'D' => 'Headstand'
        ),
        'CorrectAnswer' => 'B'
    ),
	7 => array(
        'Question' => '17<img src="YogaCard7.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Lying Down Westward Pose',
            'B' => 'Eight Limb Pose',
            'C' => 'Downward Facing Pigeon Pose',
			'D' => 'Corpse Pose'
        ),
        'CorrectAnswer' => 'A'
    ),
	8 => array(
        'Question' => '18<img src="YogaCard8.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Chair Pose',
            'B' => 'Backbend',
            'C' => 'Warrior 2',
			'D' => 'Mountain'
        ),
        'CorrectAnswer' => 'D'
    ),
	9 => array(
        'Question' => '19<img src="YogaCard9.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Corpse Pose',
            'B' => 'Large Pit',
            'C' => 'Revolved Cobra Pose',
			'D' => 'Half Fish Pose'
        ),
        'CorrectAnswer' => 'B'
    ),
	10 => array(
        'Question' => '20<img src="YogaCard10.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Half Fish Pose',
            'B' => 'Pigeon Pose',
            'C' => 'Reclining Hero Pose',
			'D' => 'Locust Pose'
        ),
        'CorrectAnswer' => 'C'
    )
	
);

?>
    <form action="quiz1b.php" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
    <li>
        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>
    </li>
    <?php } ?>
    <input type="submit" value="Submit Quiz" />
    </form>

<body style="background-color:powderblue;">
</body>