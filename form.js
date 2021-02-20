document.querySelector('#submit1').disabled = true;

	document.querySelector('#mail_no1').onchange = function() {
        var email = document.getElementById('mail_no1');
        var mailFormat = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)(\.)([a-z]{2,8})(.[a-z]{2,8})?|[7-9][0-9]{9}$/;
        if (email.value == "") {
        document.getElementById('mail_no1').style.border="1px solid red";
											document.getElementById('enlabel').style.display="block";
            
        }
        else if (!mailFormat.test(email.value)) {
            document.getElementById('mail_no1').style.border="1px solid red";
											document.getElementById('elabel').style.display="block";
											
            
        }
        else {
        document.getElementById('mail_no1').style.border="1px solid green";
										document.getElementById('elabel').style.display="none";
           
           document.querySelector('#submit1').disabled = false;
        }
}



/* Second Form */

document.querySelector('#submit2').disabled = true;

	document.querySelector('#mail_no2').onchange = function() {
        var email = document.getElementById('mail_no2');
        var mailFormat = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)(\.)([a-z]{2,8})(.[a-z]{2,8})?|[7-9][0-9]{9}$/;
        if (email.value == "") {
        document.getElementById('mail_no2').style.border="1px solid red";
											document.getElementById('enlabel2').style.display="block";
            
        }
        else if (!mailFormat.test(email.value)) {
            document.getElementById('mail_no2').style.border="1px solid red";
											document.getElementById('elabel2').style.display="block";
											
            
        }
        else {
        document.getElementById('mail_no2').style.border="2px solid green";
										document.getElementById('elabel2').style.display="none";
           
           document.querySelector('#submit2').disabled = false;
        }
}