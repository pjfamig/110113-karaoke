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
<textarea id="textarea" rows=10 cols=80></textarea>
 <button id="button" onclick="toggleStartStop()"></button>

 <script type="text/javascript">
   var recognizing;
   var recognition = new SpeechRecognition();
   recognition.continuous = true;
   reset();
   recognition.onend = reset;

   recognition.onresult = function (event) {
     for (var i = resultIndex; i < event.results.length; ++i) {
       if (event.results.final) {
         textarea.value += event.results[i][0].transcript;
       }
     }
   }

   function reset() {
     recognizing = false;
     button.innerHTML = "Click to Speak";
   }

   function toggleStartStop() {
     if (recognizing) {
       recognition.stop();
       reset();
     } else {
       recognition.start();
       recognizing = true;
       button.innerHTML = "Click to Stop";
     }
   }
 </script>

<h1>Option 3</h1>
<script type="text/javascript">
   var recognition = new SpeechRecognition();
   recognition.onresult = function(event) {
     if (event.results.length > 0) {
       q.value = event.results[0][0].transcript;
       q.form.submit();
     }
   }
 </script>

 <form action="http://www.example.com/search">
   <input type="search" id="q" name="q" size=60>
   <input type="button" value="Click to Speak" onclick="recognition.start()">
 </form>


</body>

</html>