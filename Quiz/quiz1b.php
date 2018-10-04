<?php 

require('db.php');
include("auth.php");

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

$result=0;
if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
	//		$wrong++;
            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        } else {
			$result++;
            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        }
        echo '<br /><hr>';
    }echo $_SESSION['username'].'Your Result is '.$result.'/10';
	
	
	
					//select query
					$sql1 = "SELECT result,quiztaken FROM users";
					//Execute the query
					$records = mysqli_query($con,$sql1);
					while($row = mysqli_fetch_array($records))
					{
						$k = $row['result']+$result;
						$a = $row['quiztaken']+1;
						$sql = "UPDATE users SET Result ='$k',Quiztaken ='$a' WHERE username = '$_SESSION[username]'";
						if(mysqli_query($con,$sql))
						{
						}
						
					}
	
} else {
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
<?php 
}
?>
<div class="form">
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
<body style="background-color:powderblue;">
</body>