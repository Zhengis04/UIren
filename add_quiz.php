<?php $con = mysqli_connect('localhost','root','','technopoints'); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple Online Quiz">
    <meta name="author" content="Val Okafor">   
    <title>Simple Quiz</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body role="document">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" class="toactive">
          <ul class="nav navbar-nav" class="list-inline">
            <li class="cli"><a href="html.php">Тест</a></li>
            <li class="cli active"><a href="add_quiz.php">Добавить вопрос</a></li>
            <li class="cli"><a href="result.php">Результат</a></li>
            <li class="cli"><a href="index.html">Главное</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


<style>
</style>
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Добавить вопрос</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="question">Вопрос</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
            </div>
            <div class="form-group">
                <label for="correct_answer">Правильный ответ</label>
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here" Required>
            </div>
            <div class="form-group">
                <label for="wrong_answer1">Неправильные вопросы</label>
                <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Неправильный ответ 1" Required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer2">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Неправильный ответ 2" Required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer3">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Неправильный ответ 3" Required>
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Добавить вопрос</button>

        </form>
    </div>
     </div>
	 <?php if(isset($_POST['submit'])){
$fetchqry = "SELECT * FROM `quiz`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
@$id = $num + 1;
@$que = $_POST['question'];
@$ans = $_POST['correct_answer'];
@$wans1 = $_POST['wrong_answer1'];
@$wans2 = $_POST['wrong_answer2'];
@$wans3 = $_POST['wrong_answer3']; 
$qry = "INSERT INTO `quiz`(`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES ($id,'$que','$ans','$wans1','$wans2','$wans3','$ans')";
$done = mysqli_query($con,$qry);
if($done==TRUE){
	echo "Question and Answers Sumbmitted Succesfully";
}
	 }
?>
<div class="row">
    <div class="col-md-offset-2 col-md-8">
<h2>Добавить таймер</h2>
<form action="" method="post">
<div class="col-sm-3">
                <label for="minute" >Минуты</label>
                <input type="digit" class="form-control input-group-lg reg_name" name="min" placeholder="Мин" Required>
			</div>
<div class="col-sm-3">
                <label for="second" >Секунды</label>
                <input type="digit" class="form-control input-group-lg reg_name" name="sec" placeholder="Сек" Required>
            </div><br>
			<button type="submit" class="btn btn-primary btn-large" value="submit" name="timesubmit">+Добавить таймер</button>
<form>
</div></div>
<?php
if(isset($_POST['timesubmit'])){
@$min = $_POST['min'];
@$sec = $_POST['sec'];
$timer = $min.':'.$sec;
$fetchqry3 = "UPDATE `quiz` SET `timer`='$timer' WHERE`id`=1";
$result3 = mysqli_query($con,$fetchqry3);
if($result3==TRUE){
	echo "The timer currently set to $timer";
}
}
?>