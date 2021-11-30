<html>
<style>
	p.answer {
		text-indent: 35px;
	}
</style>
<body>
<?php 
	$userAnswers = array($_POST["q1Ans"], $_POST["q2Ans"], $_POST["q3Ans"], $_POST["q4Ans"], $_POST["q5Ans"]);
	$ansKey = array("digging holes in my backyard", "Do you like the show?", "Byron", "It's just not", "I just want a picture of a got dang hot dog");
	
	function countTotalCorrect($inputs, $answers) {
		$n = 0;
		
		for ($i = 0; $i < 5; $i++) {
			if ($inputs[$i] == $answers[$i])
				$n++;
		}
		
		return $n;
	}
	
	$totalCorrect = countTotalCorrect($userAnswers, $ansKey);
?>

	Question 1: Armadillos keep ___<br>
	<p class="answer">Your answer: <?php echo $userAnswers[0]; ?></p>
	<p class="answer">Correct answer: <?php echo $ansKey[0]; ?></p><br>
	
	Question 2: How are you feeling?<br>
	<p class="answer">Your answer: <?php echo $userAnswers[1]; ?></p>
	<p class="answer">Correct answer: <?php echo $ansKey[1]; ?></p><br>
	
	Question 3: Who's the president?<br>
	<p class="answer">Your answer: <?php echo $userAnswers[2]; ?></p>
	<p class="answer">Correct answer: <?php echo $ansKey[2]; ?></p><br>
	
	Question 4: Why isn't it possible?<br>
	<p class="answer">Your answer: <?php echo $userAnswers[3]; ?></p>
	<p class="answer">Correct answer: <?php echo $ansKey[3]; ?></p><br>
	
	Question 5: Do I look like I know what a JPEG is?<br>
	<p class="answer">Your answer: <?php echo $userAnswers[4]; ?></p>
	<p class="answer">Correct answer: <?php echo $ansKey[4]; ?></p><br>
	
	You answered <?php echo $totalCorrect ?>/5 questions correctly!<br>
</body>
</html>