<!doctype html>
<head>
    
    <style>
body {
background-image: url(img3.jpg); margin: 3px;
}
form {
display: table;
padding: 3px;
border: thin #124191; background-color: darkgrey;
}
form textarea { width: 700px;
height: 400px; font-size: 80%;font-style: oblique;font-weight: bold;}
div.tableRow { display: table-row;
}
div.tableRow p { display: table-cell; vertical-align: top; padding: 3px;
}
div.tableRow p:first-child { text-align: right;
}
p.heading { font-weight: bold;
}
marquee{
color: burlywood;
font-size: 200%;
}
h2{
 color:  darkslategrey;
 font-size: 100%;
}
div{
    font-size: 200%;
   position: relative;

}
select{
    font-size: 80%;
    content: normal;
        }
        input{
            width: 30%;
            height: 100%;
            font-size: 60%;font-weight: bold;
}
</style>
<meta charset='utf-8'>
<title>User's Registration </title>
</head>
<body>
 <marquee behavior="alternate" direction="up" width="100%" ><marquee direction="right">Feedback System </marquee></marquee>
<form action="" method="post">
<p>
<div class="tableRow">
<h2> UPLOAD YOUR FEEDBACK::-</h2>
SEMESTER: <select name="semester">
  <option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
<option value ="6">6 </option>
<option value="7">7 </option>
<option value="8">8 </option>



</select>
SUBJECT FEEDBACK:<select name="Subject">
    <option value="MPI"> COMPILER DESIGN </option>
<option value="SEPM"> DISTRIBUTED SYSTEM </option>
<option value="CN"> CLOUD COMPUTING </option>
<option value ="ACA"> INFORMATION STORAGE AND MANAGEMENT </option>
<option value="PPL"> NETWORK AND WEB SECURITY </option>
<option value="APTI">APTITUDE</option>
<option value="COMM">COMMUNICATION SKILL </option>
<option value="other">OTHER</option>
</select><br>
</div>
<div>
SUBJECT RATING:<select name="Rating">
<option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
</select><br>

</div>
<div>
FACULTY NAME:<select name="Faculty name">
<option value="prof. hare ram shah">Prof. Om Singh Parihar </option>
<option value="prof. om singh parihar">Dr. Neeraj Shukla</option>
<option value="prof.L N pandey">Prof. Saurabh Sharma</option>
<option value ="prof. deepak singh rajpoot">Prof. Pankaj Jain</option>
<option value="prof. pankaj jain">Prof. Shailendra Singh Thakur</option>
<option value=""></option>
<option value=""> </option>
<option value=""></option>
</select><br>
</div>
<div>

PARAMETER:<br>
Teaching skill for understanding the subject:<select name="...">
    <option value="...">Basics/Fundamentals</option>
    <option value="...">With clarity</option>
    <option value="...">Subject Knowledge</option>
    <option value="...">Interaction</option>
</select><br>
<select name="Rating">
<option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
</select><br>

Class management discipline and obedience:<select name="...">
    <option value="...">Voice clarity</option>
    <option value="...">Pronunciation</option>
    <option value="...">Audibility</option>
    <option value="...">Communication skills</option>
</select><br><select name="Rating">
<option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
</select><br>

Clarification of doubts and help in design or in solving numerical:<select name="...">
    <option value="...">Within class period</option>
    <option value="...">Beyond class period</option>
</select><br><select name="Rating">
<option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
</select><br>
Guidance in design/development of setups in lab works and help in performing practical:<select name="Rating">
<option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
</select><br>
Regularity in taking class:<select name="Rating">
   
<option value="1"> 1 </option>
<option value="2">2 </option>
<option value="3">3 </option>
<option value ="4">4 </option>
<option value="5">5 </option>
</select><br>



</div>
<div>

    STUDENT NAME:<br> <a><input type="text" name="STUDENT_NAME"> <br></a>
COMMENTS:<br> <textarea name="COMMENTS" rows="100" col="150" font="largest"></textarea><br>
DEPARTMENT :<select name="Department">
    <option value="cs">CS </option>
<option value="ec">EC </option>
<option value="me">ME </option>
<option value ="ce">CE </option>
<option value="ex">EX </option>
<option value="ee">EE</option>
<option value="mca">MCA </option>
<option value="other">OTHER</option>
</select><br>

UPLOAD DATE: <br> <input type="date" name="myDateField"><br>
<input type= "submit" value="NEXT">
</div>
</form>
</body>
</html>
