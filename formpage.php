<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="formpage.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<h1>
<b>OUTPASS FORM</b></h1>
<style>
h1{color:  #64570c;
                  
    margin-top:0px;
     text-align:center;
     font-size:40px;
  background-color:#EAEAAC  ;
font-family:'Sofia';
}
</style>



<body>
<div class="bg">

 

<p><span class="error" >* required field.</span></p>
<form action="insert.php" style="border:1px solid #ccc" method="post">
  <div class="container">

    <span class="error">*</span>
   <label ><b>Rollno</b></label>
    <input type="text" placeholder="Enter Rollno" name="rollno" required>

     <span class="error">*</span>
    <label ><b>Student's phone no</b></label>
    <input type="text" placeholder="Enter Student's phone no" name="sphone" required>

     <span class="error">*</span>
    <label ><b>Parent's phone no</b></label>
    <input type="text" placeholder="Enter Parent's phone no " name="pphone" required>

    <span class="error">*</span>
 <label ><b>Departure date</b></label>
    <input type="text" placeholder="Enter Departure date" name="deptdate" required>
  
 <span class="error">*</span>
 <label ><b>Departure time</b></label>
    <input type="text" placeholder="Enter Departure time" name="depttime" required>

 <span class="error">*</span>
 <label ><b>Arrival date</b></label>
    <input type="text" placeholder="Enter Arrival date" name="arrivaldate" required>

   <span class="error">*</span>
 <label ><b>Arrival time</b></label>
    <input type="text" placeholder="Enter Arrival time" name="arrivaltime" required>

 <span class="error">*</span>
 <label ><b>Place</b></label>
    <input type="text" placeholder="Enter Place" name="place" required>
<br>
<br>
<br>

<div class="a2"><b><u>UNDERTAKING</u></b></p>
<input type="checkbox"> I Agree that the information rendered above is correct and i have informed my parents/guardian in this regard . I owe full resposibility for any kind of untoward incident which may occur during my stay outside the Hostel/Campus and Hostel authority shall not be responsible for this .In case any of the information rendered above is found incorrect at any stage ,I am liable to disciplinary action as per Institute rules. 
</div>
<br>

<div class="clearfix">
  <div class="cancelbtn">
      <a href="firstpage.html" style="color:white;" ><button >Cancel</a></button>
<br>
     <div class="nextbtn">
      <a href="#" style="color:white;" ><button>Next</a></button>
    </div>
	<input type="submit" value="insert">
</div>
</div>
  </div>
</form>

</body>





</html>


