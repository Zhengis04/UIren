<?php $con = mysqli_connect('localhost','root','','technopoints'); session_start(); ?>

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
  <link rel="stylesheet" href="css/index.css">  
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
            <li class="cli"><a href="result.php">Главное</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<body onload="hidder();">
<center>
<div class="time" id="navbar">Время:<span id="timer"></span></div>
<button class="button" id="mybut" onclick="myFunction()">Начать</button>
</center>
<div id="myDIV" style="padding: 10px 30px;">
<p>Омбыдағы Кадет корпусында Шоқан Потанинмен дос болады. Потанин – қазақ халқының ауыз әдебиетін зерттеуші, ғалым Шоқан туралы естеліктерінде былай деп жазады: «...Мен Шоқанмен корпусқа оқуға келгенде таныстым. Ол орысша білмеді, мен қазақша білмедім. Бірақ Шоқан орыс тілін тез үйреніп алды. Екеуміз де кітап оқуды жақсы көрдік, әсіресе саяхатшылар туралы кітапқа қатты қызығатынбыз, сондықтан екеуміз жақсы дос болып кеттік. 
Мен қазақ даласы мен географиясы туралы білгенімді дәптерге жазып жүрдім. Шоқан сол жазуларды өз әңгімесімен толықтырады. Сөйтіп, біз қазақтардың бүркітпен аңға шығуын толық жаздық. 
Шоқан кейіннен оқуда орыс достарынан да озып кетті. Ақылды, дарынды балаға үлкендер де қызыға қарайтын. Демалыс күндері оны офицерлер мен Сібір шенеуніктері үйлеріне шақыратын. Ол қаладағы өнерлі, білімді адамдармен көп араласып тұрды. 
Шоқан өте көп оқитын, саяхатшы болуды армандайтын. Қаладағы кітапханадан кітап алу сол кезде тек Шоқанға ғана рұқсат етілді. Ол әкелген кітаптарды мен де оқитынмын. 
Біз Шоқаннан үлкен болсақ та, білім жағынан ол бізден әлдеқайда жоғары еді. Корпус оқушылары үшін Шоқан «Еуропаға ашылған терезе» секілді еді».</p>
<form action="result.php" method="post" id="form">  				
<table><?php   $fetchqry = "SELECT * FROM `quiz`";
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				
			   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  ?>
  <tr><td><h3><br><?php echo @$snr +=1;?>&nbsp;-&nbsp;<?php echo @$row['que'];?></h3></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;c )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;d )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr>
			    <?php  }
																	?> 
		<tr><td align="center"><button class="button3" name="click" >Финиш</button></td></tr>
	</table>
  <form>
</div>
<script>
function myFunction() {
	var x = document.getElementById("myDIV");
    var b = document.getElementById("mybut");
    var x = document.getElementById("myDIV");
	if (x.style.display === "none") { 
	b.style.visibility = 'hidden';
	x.style.display = "block";
	startTimer();
}
}
window.onload = function() {
  document.getElementById('myDIV').style.display = 'none';
};
</script>
<?php			$fetchtime = "SELECT `timer` FROM `quiz` WHERE id=1";
				$fetched = mysqli_query($con,$fetchtime);
				$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
				$settime = $time['timer'];		
						?>
 <script type="text/javascript">

document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
  //03 + ":" + 00 ;


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0){document.getElementById("form").submit();}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>

<script>
window.onscroll = function() {myFun()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop -50;

function myFun() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>

