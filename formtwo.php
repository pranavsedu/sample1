<!DOCTYPE html>
<html lang="en">
<head>
				<title>Feedback Status</title>
</head>
<body>
				<h1>
<?php

    // Create connection
    $cn = new mysqli(
        "sql105.epizy.com",
        "epiz_27928751",
        "pbEGYVobmN",
        "epiz_27928751_Feedbacks");
				
				$name=$_POST['name2'];
				$mail_no=$_POST['mail_no2'];
				$feed=$_POST['feedback2'];

    // Check connection
    if ($cn->connect_error)
    {
        echo "Connection failed : " . $cn->connect_error;
    }

    $sql = "INSERT INTO Currx(`Name`, `Contact`, `Feedback`) VALUES ('$name' ,'$mail_no' ,'$feed')";

    if ($cn->query($sql) === TRUE)
    {
        echo "New record created successfully";
    }

    else
    {
        echo "Error: " . $sql . "\n" . $cn->error;
    }

    $cn->close();

?>
</h1>
</body>
</html>
