<!DOCTYPE html>
<html lang="en">
<head>
				<title>Pranav's edu Tec - Feedbacks</title>
				<link rel="stylesheet" href="form.css">
				<link rel="stylesheet" href="style.css">
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
				<!-- Heading -->
				<div id="heading">
								<h1>Feedback & Suggestion<br>Forms!</h1>
      				<p>Select the product, and pen your feedbacks!</p>      <hr>
      </div>

				<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Weatheral</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">CurrX</button>
  <button style="display:none;" class="tablinks" onclick="openCity(event, 'Tokyo')"></button>
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
 <h1>Weatheral!</h1>
        
        
        <form id="form1" method="post" action="formone.php">
        				<input required name="name" class="inpute" type="text" placeholder="Name..." id="name1">
        				
        				<input required name="email" placeholder="Your Email or Contact No. ..." type="text" class="inpute" id="mail_no1">
        				<label id="elabel" style="color:red; display:none;"> Invalid Email or Contact no.</label><label id="enlabel" style="color:red; display:none;">Enter Email or Contact no.</label>
        				<textarea required class="inpute" name="feedback" id="feed1" placeholder="Suggestions..."></textarea>
        				<input name="submit" type="submit" id="submit1">
        </form>
        
</div>

<div id="Paris" class="tabcontent">
  <h1>CurrX</h1>
        
        <form id="form2" method="post" action="">
        				<input type="name2" placeholder="Name..." id="name2">
        				
        				<input placeholder="Your Email or Contact No. ..." type="text" id="mail_no2">
        				<label id="elabel2" style="color:red; display:none;"> Invalid Email or Contact no.</label><label id="enlabel2" style="color:red; display:none;">Please Check Email or Contact no.</label>
        				<textarea placeholder="Suggestions" name="feedback2"></textarea>
        				<input type="submit" id="submit2">
        </form>
        
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

    <script src="script.js"></script>
    <script src="form.js"></script>

</body>
</html>
