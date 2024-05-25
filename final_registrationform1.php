<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet" href="externalcss.css">
    </head>
    <body>
        <form action="connection.php" method="POST" id="stdregform" onsubmit="return validate()" onreset="resetform()">
            <h1>STUDENT REGISTRATION FORM</h1>
            <label for="studentname">Student Name:</label>
           
            <input type="text" value="" name="studentname" id="studentname" placeholder="Enter the student name">
            <span id="isstudentnamevalid"></span>
            <br>
            <label for="password">Password:</label>
            
            <input type="password" value="" name="password" id="password" placeholder="Enter password">
            <span id="ispasswordvalid"></span>
            <br>
            <label for="cpassword">Confirm password:</label>
            
            <input type="password" value="" name="cpassword" id="cpassword" placeholder="Re-enter password">
            <span id="iscpasswordvalid"></span>
            <br>
            <label for="gender">Gender:</label>
            <div id="gender1">
            <input type="radio" value="male" name="gender" id="male">
            MALE
            <input type="radio" value="female" name="gender" id="female">
            FEMALE</div>
            <span id="isgendervalid"></span>
            <br>
            <label for="branch">Branch of study:</label>
            
           <select id="branch" name="branch">
            <option value="">--select--</option>
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="eee">EEE</option>
            <option value="civil">CIVIL</option>
            <option value="mechanical">MECHANICAL</option>
          
           </select>
            <span id="isbranchvalid"></span>
            <br>
            <label for="email">Email ID:</label>
            
            <input type="text" value="" name="email" id="email" placeholder="Enter student email id">
            <span id="isemailvalid"></span>
            <br>
            <label for="phone">Contact No:</label>
            
            <input type="text" value="" name="phone" id="phone" placeholder="Enter student phone nummber">
            <span id="isphonevalid"></span>
            <br>
           <br>

           <div class="button-container">
            <input type="submit" value="SUBMIT">
        
            <input type="reset" value="RESET"></div>
        </form>
        <script>
            function validate()
            {
                var isstudentnamevalid=true;
                var ispasswordvalid=true;
                var iscpasswordvalid=true;
                var isgendervalid=true;
                var isbranchvalid=true;
                var isemailvalid=true;
                var isphonevalid=true;

                if(document.getElementById("studentname").value=="")
                {
                    isstudentnamevalid=false;
                    document.getElementById("isstudentnamevalid").innerHTML="&#x2716; <br>please enter student name";
                    document.getElementById("isstudentnamevalid").style.color="red";
                }
                else
                {
                    document.getElementById("isstudentnamevalid").innerHTML="&#x2714; <br>valid";
                    document.getElementById("isstudentnamevalid").style.color="green";
                }

                if(document.getElementById("password").value=="")
                {
                    ispasswordvalid=false;
                    document.getElementById("ispasswordvalid").innerHTML="&#x2716; <br>please enter a valid password";
                    document.getElementById("ispasswordvalid").style.color="red";
                }
                else
                {
                    document.getElementById("ispasswordvalid").innerHTML="&#x2714; <br>valid";
                    document.getElementById("ispasswordvalid").style.color="green";
                }

                
                if(document.getElementById("password").value!=document.getElementById("cpassword").value  || document.getElementById("cpassword").value=="")
                {
                    ispasswordvalid=false;
                    document.getElementById("iscpasswordvalid").innerHTML="&#x2716; <br>please re enter ur password correctly";
                    document.getElementById("iscpasswordvalid").style.color="red";
                }
                else
                {
                    document.getElementById("iscpasswordvalid").innerHTML="&#x2714;<br>valid";
                    document.getElementById("iscpasswordvalid").style.color="green";
                }

                if(document.getElementById("male").checked != true && document.getElementById("female").checked != true)
                {
                    isgendervalid=false;
                    document.getElementById("isgendervalid").innerHTML="&#x2716; <br>please select your gender ";
                    document.getElementById("isgendervalid").style.color="red";
                }
                else
                {
                    document.getElementById("isgendervalid").innerHTML="&#x2714; <br>valid";
                    document.getElementById("isgendervalid").style.color="green";
                }

                if(document.getElementById("branch").value=="")
                {
                    ispasswordvalid=false;
                    document.getElementById("isbranchvalid").innerHTML="&#x2716; <br>please select your branch of study";
                    document.getElementById("isbranchvalid").style.color="red";
                }
                else
                {
                    document.getElementById("isbranchvalid").innerHTML="&#x2714; <br>valid";
                    document.getElementById("isbranchvalid").style.color="green";
                }

                if(document.getElementById("email").value=="")
                {
                    isemailvalid=false;
                    document.getElementById("isemailvalid").innerHTML="&#x2716; <br>please enter email address";
                    document.getElementById("isemailvalid").style.color="red";
                }
                else if( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value)==false)
                {
                    isemailvalid=false;
                    document.getElementById("isemailvalid").innerHTML="&#x2716; <br>please enter correct email address";
                    document.getElementById("isemailvalid").style.color="red";
                }
                else
                {
                    document.getElementById("isemailvalid").innerHTML="&#x2714; <br>valid";
                    document.getElementById("isemailvalid").style.color="green";
                }

                if(document.getElementById("phone").value=="")
                {
                    isphonevalid=false;
                    document.getElementById("isphonevalid").innerHTML="&#x2716; <br>please enter phone number";
                    document.getElementById("isphonevalid").style.color="red";
                }
                else if(/^[6-9]\d{9}$/.test(document.getElementById("phone").value)==false)
                {
                    isphonevalid=false;
                    document.getElementById("isphonevalid").innerHTML="&#x2716; <br>please enter correct phone number";
                    document.getElementById("isphonevalid").style.color="red";
                }
                else
                {
                    document.getElementById("isphonevalid").innerHTML="&#x2714; <br>valid";
                    document.getElementById("isphonevalid").style.color="green";
                }




                if(isphonevalid==false || isstudentnamevalid == false || ispasswordvalid ==false || iscpasswordvalid==false || isgendervalid==false || isbranchvalid==false || isemailvalid==false)
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }

            function resetform()
            {
                document.getElementById("isstudentnamevalid").innerHTML=" ";
                document.getElementById("ispasswordvalid").innerHTML=" ";
                document.getElementById("iscpasswordvalid").innerHTML=" ";
                document.getElementById("isgendervalid").innerHTML=" ";
                document.getElementById("isbranchvalid").innerHTML=" ";
                document.getElementById("isemailvalid").innerHTML=" ";
                document.getElementById("isphonevalid").innerHTML=" ";
            }
        </script>
        </body>
</html>