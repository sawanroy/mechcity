<!doctype html>
<head>

    <style >
body {
background-image: url(img3.jpg); margin: 20px;
}
form {
display: table;  
padding: 5px;
border: double solid #7e7e7e; background-color: #DDDDDD;
}
form textarea { width: 700px;
height: 300px; }
textarea{
    width: 30%;
    height: 50%;font-size: 80%;font-style: oblique;font-weight: bold;
}
div.tableRow { display: table-row;
}
div.tableRow p { display: table-cell; vertical-align: top; padding: 3px;
}
div.tableRow p:first-child { text-align: right;
}
p.heading { font-weight: bold;
}
marquee{
    font-size:200%;
    color: gold;
    }
h2{
 color: navy;
 font-size: 100%;
}
div{
    font-size: 200%;
    color: darkred;
}
select{
    font-size: 80%;
    font-family: sans-serif;
} input{
            width: 30%;
            height: 100%;
            font-size: 60%;font-weight: bold;
}
</style>
<meta charset='utf-8'>
<title>User's Registration</title>
</head>
<body>
<h1>FEEDBACK SYSTEM</h1>
<form action="" method="post">
<p>
<div class="tableRow">
<h2> UPLOAD YOUR FEEDBACK::-</h2>
INFRASTRUCTURE FEEDBACK:<select name="Subject">
    <option value="LIBRARY">LIBRARY</option>
<option value="OFFICE">OFFICE</option>
<option value="CLASS ROOM">CLASS ROOM</option>
<option value ="LABS">LABS</option>
<option value="TPO">TPO</option>
<option value="WASHROOM">WASHROOM</option>
<option value="WATER COOLER">WATER COOLER</option>
<option value="other">OTHER</option>
</select><br>
REMARK:<select name="Remark">
<option value="good">GOOD</option>
<option value="POOR">POOR </option>
<option value="NOT AVAILABLE">NOT AVAILABLE</option>
</select><br>

STUDENT NAME:<br> <input type="text" name="STUDENT_NAME" value=""> <br>
COMMENTS:<br> <textarea name="COMMENTS" rows="10" col="48"></textarea><br>
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
UPLOAD DATE:<br> <input type="date" value=""><br>
<input type= "submit" value="SUBMIT">
</div>
</form>
</body>
</html>
