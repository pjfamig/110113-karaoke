<?php


?>


<!DOCTYPE html>
<html>
<head><title>Karaoke</title>
	
<style>
#speech {
	font-size: 25px;
	width: 25px;
	height: 25px;
	cursor:pointer;
	border: none;
	position: absolute;
	margin-left: 5px;
	outline: none;
	background: transparent;
}

#result {
	height: 150px;
	width: 150px;
}
</style>
	
	</head>


<body>
	
	
<h1>Option 1</h1>	
	
<textarea id="result"></textarea>
<input x-webkit-speech id="speech"/>


<script>
var speech = document.getElementById('speech');
speech.onfocus = speech.blur;
speech.onwebkitspeechchange = function(e) {
    console.log(e); // SpeechInputEvent
    document.getElementById('result').value = speech.value;  
};
</script>


<h1>Option 2</h1>
<br><br><br><br>

<h1>Option 3</h1>


 <form action="http://www.example.com/search">
   <input type="search" id="q" name="q" size=60>
   <input type="button" value="Click to Speak" onclick="recognition.start()">
 </form>


</body>

</html>