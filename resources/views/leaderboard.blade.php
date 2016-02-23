<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
<style>
h1 {
  font-family: 'Bangers', cursive;
}

.r1, .r2 {
  font-size: 20px;  
}

.countdown {
  width: 50px;
  margin: 0 auto;
  font-family: 'Raleway', sans-serif;
  font-size: 45px;
}

a, p {
  font-family: 'Raleway', sans-serif;
  text-decoration: underline;
  font-size: 40px;
}

.team-one, .team-two {
  margin-top: -20px;
  float: left;
  width: 49%;
  text-align: center;
  font-size: 33px;
}

.score {
  font-family: 'Raleway', sans-serif;
  font-size: 50px;
}

.red {
  color: #fb4f4f;
}

.blue {
  color: #6cc0e5;
}

.yellow {
  color: #fbc93d;
}

.myButton {
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
}
.myButton:hover {
	background-color:#24a747;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
</head>
<body>
<div class="countdown yellow">30</div>
<div class="team-one">
  <h1 class="red">Team One</h1>
  <h2 class="score s1">0</h2>
  <a href="#" class="myButton c1">Correct (3 pts)</a>
  <a href="#" class="myButton b1">Bonus (1 pt)</a>
  <p class="r1">Reset</p>
</div>
<div class="team-two">
  <h1 class="blue">Team Two</h1>
  <h2 class="score s2">0</h2>
  <a href="#" class="myButton c2">Correct (3 pts)</a>
  <a href="#" class="myButton b2">Bonus (1 pt)</a>
  <p class="r2">Reset</p>
</div>
<script>
$(document).ready(function() {
  $('.r1').click(function() {
    $('.s1').text(0);
  });
  
  $('.c1').click(function() {
    $('.s1').text(parseInt($('.s1').text(), 10) + 3);
  });
  
  $('.b1').click(function() {
    $('.s1').text(parseInt($('.s1').text(), 10) + 1);
  });
  
  $('.r2').click(function() {
    $('.s2').text(0);
  });
  
  $('.c2').click(function() {
    $('.s2').text(parseInt($('.s2').text(), 10) + 3);
  });
  
  $('.b2').click(function() {
    $('.s2').text(parseInt($('.s2').text(), 10) + 1);
  });
  
  $('.countdown').click(function() {
    var counter = 30;
    $('.countdown').text(counter);
    var interval = setInterval(function() {
      counter--;
      $('.countdown').text(counter);
    // Display 'counter' wherever you want to display it.
      if (counter == 0) {
        // Display a login box
        clearInterval(interval);
      }
    }, 1000);
  });
  
});
</script>
</body>
</html>
