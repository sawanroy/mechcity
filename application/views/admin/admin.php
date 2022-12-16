<!doctype html>
<head>
<style>

body {
background-image: url(c.jpg); margin: 20px;
}
form {
display: table;
padding: 10px;
border: thin dotted #7e7e7e; background-color: white;
}
form textarea { width: 500px;
height: 200px; }
div.tableRow { display: table-row;
}
div.tableRow p { display: table-cell; vertical-align: top; padding: 30px;
}
div.tableRow p:first-child { text-align: right;
}
p.heading { font-weight: bold;
}
marquee{
    font-size:200%;
    color: antiquewhite;

}
h2{
    color:  lawngreen;
    font-size: 100%;
}
div{
    font-size: 200%;
    color: firebrick;
}
select{
    font-size: 80%;
}
</style>
<meta charset='utf-8'>
<title>Admin Registration </title>
</head>
<body>
      <marquee behavior="alternate" direction="up" width="100%"><marquee directio <marquee behavior="alternate" direction="up" width="100%"n="right">Feedback System </marquee></marquee>

<form action="" method="post">
<div class="tableRow">
<h2>LOGIN</h2>

ADMIN:<br> <input type="text" name="ADMIN" value=""> <br>
Password:<br> <input type="password" name="pwd"><br>
    <input type="hidden" name="pwd" value="<%= rs.getString() %>">
<input type= "submit" value="LOGIN">
</div>
</form>
</body>
</html>