<?php
 $a = $_POST['name'];
 $b = $_POST['title'];
 $c = $_POST['isi'];
 $d = "Lynch";
 echo "
    <header><br>
      <h1 class=title>W E L C O M E</h1>
      <h3 class=desc>$a</h3>
      <nav id=navigation>
        <ul>
          <li><a href=index.php?page=home>HOME</a></li>
        </ul>
      </nav>
    </header>
    <div>
    <center>
      <h1>$b</h1>
    </center>
      <p>$c</p>
    </div>
  </body>
  <footer><br><br><br>
    © Copyright $d 2022
  </footer>
  <style>
  footer {
  text-align: center;
  color: rgba(255,30,30,0.487);
}
  </style>";
?>
<style>
header h1.title,
header h3.desc {
  text-align: center;
}
body {
  width: 80%;
  margin: auto;
  height: 100vh;
  background-color: white;
 /* background-image: url(); */
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
}
a:link {
  color: blue;
}
a:hover {
  color: green;
}
a:visited {
  color: white;
}
a:active {
  color: red;
}
#navigation {
}
p {
  font-size: 110%;
}
#content {
  float: center;
}
ul {
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
  list-style-type: none;
  font-family: Sans-Serif;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #fff;
}
</style>