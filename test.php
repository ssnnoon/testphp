<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ��괵��</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #00CCCC;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 400px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 80%;
    background-color: #f1f1f1;
    height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h3>Run for ��굵�� �ѹ���</h3>
</header>
<section>
  <nav>
    <ul>
      <li><a href="#">��Ѥ� Run</a></li>
      <li><a href="#">��Ǩ�ͺ BIB</a></li>
      <li><a href="#">��Ἱ��� ��鹷ҧ���</a></li>
    </ul>
  </nav>
<article>
<h1>�ѹ�� Run For ��괵��</h1>
<p>
<?php
$name="siriwan";
print $name;
echo "CPSU";

?>
<p>
</article>
</section>

<footer>
  <p>Footer</p>
</footer>
</body>
</html>