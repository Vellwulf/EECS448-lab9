<html>
<style>
	p.answer {
		text-indent: 35px;
	}
</style>
<body>
<?php 
	$userAnswers = array($_POST["q1Ans"], $_POST["q2Ans"], $_POST["q3Ans"], $_POST["q4Ans"]);
	$ansKey = array("digging holes in my backyard", "Do you like the show?", "Byron", "It's just not");
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
</body>
</html>