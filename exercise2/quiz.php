<html>
<style>
	p.answer {
		text-indent: 35px;
	}
</style>
<body>
<?php 
	$userAnswers = array($_POST["q1Ans"], $_POST["q2Ans"]);
?>

	Question 1: Armadillos keep ___<br>
	<p class="answer">Your answer: <?php echo $userAnswers[0]; ?></p>
	<p class="answer">Correct answer: digging holes in my backyard</p><br>
	
	Question 2: How are you feeling?<br>
	<p class="answer">Your answer: <?php echo $userAnswers[1]; ?></p>
	<p class="answer">Correct answer: Do you like the show?</p>
</body>
</html>