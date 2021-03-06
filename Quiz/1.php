
<?php
include("auth.php");
?>

<div class="form">

<p>Welcome <?php echo $_SESSION['username']; ?> to your Yoga Quiz!</p>

</div>
<?php 


$Questions = array(
    1 => array(
        'Question' => '1<img src="YogaCard1.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Sirsasana',
            'B' => 'Ardha Chandrasna',
            'C' => 'Vrksasana',
			'D' => 'Astangasana'
        ),
        'CorrectAnswer' => 'B'
    ),
    2 => array(
        'Question' => '2<img src="YogaCard2.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Yoganidrasana',
            'B' => 'Adho Mukha Vrksasana',
            'C' => 'Parsva Sirsasana',
			'D' => 'Sirsasana'
        ),
        'CorrectAnswer' => 'C'
    ),
	3 => array(
        'Question' => '3<img src="YogaCard3.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Utthita Pada Sirsasana',
            'B' => 'Adho Mukha Vrksasana',
            'C' => 'Sun Salutation',
			'D' => 'Navasana'
        ),
        'CorrectAnswer' => 'A'
    ),
	4 => array(
        'Question' => '4<img src="YogaCard4.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Ustrasana',
            'B' => 'Cat Flow',
            'C' => 'Parsva Sirsasana',
			'D' => 'Sirsasana'
        ),
        'CorrectAnswer' => 'D'
    ),
	5 => array(
        'Question' => '5<img src="YogaCard5.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Yoganidrasana',
            'B' => 'Bakasana',
            'C' => 'Parsva Bakasana',
			'D' => 'Balasana'
        ),
        'CorrectAnswer' => 'A'
    ),
	6 => array(
        'Question' => '6<img src="YogaCard6.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Ardha Matsyasana',
            'B' => 'Adho Mukha Kapotasana',
            'C' => 'Eka Pada Parsva Bakasana',
			'D' => 'Sirsasana'
        ),
        'CorrectAnswer' => 'B'
    ),
	7 => array(
        'Question' => '7<img src="YogaCard7.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Yoganidrasana',
            'B' => 'Adho Mukha Vrksasana',
            'C' => 'Parsva Sirsasana',
			'D' => 'Halasana'
        ),
        'CorrectAnswer' => 'B'
    ),
	8 => array(
        'Question' => '8<img src="YogaCard8.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Salamba Sarvangasana',
            'B' => 'Supta Konasana',
            'C' => 'Pincha Mayurasana',
			'D' => 'Bhuja Brischikasana'
        ),
        'CorrectAnswer' => 'D'
    ),
	9 => array(
        'Question' => '9<img src="YogaCard9.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Upavistha Konasana',
            'B' => 'Adho Mukha Vrksasana',
            'C' => 'Ardha Padmasana',
			'D' => 'Adho Muka Kapotasana'
        ),
        'CorrectAnswer' => 'C'
    ),
	10 => array(
        'Question' => '10<img src="YogaCard10.png" width="500" height="377">',
        'Answers' => array(
            'A' => 'Navasana',
            'B' => 'Tadasana',
            'C' => 'Virasana',
			'D' => 'Sirsasana'
        ),
        'CorrectAnswer' => 'A'
    )
	
);

?>
    <form action="2.php" method="post" id="quiz">
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
