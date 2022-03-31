<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Black Goose Bistro - Submitted</title>
  <!--CSS-->
  <style>
      body {
        background-color:#faf2e4;
        margin: 0 10%;
        font-family:sans-serif;
      }
      h1 {
        text-align:center;
        font-family:serif;
        font-weight: normal;
        text-transform: uppercase;
        border-bottom: 1px solid #57b1dc;
        margin-top:30px;
      }
      h2 {
        color: #d1633c;
        font-size: 1em;
      }
      #nav {
        list-style-type:none;
      }
      .navlink {
        text-decoration:none;
      }
      .navlink:hover {
        text-decoration:underline;
      }
      footer {border-top: 1px solid #57b1dc;
        text-align:center;
        padding-top:1em;
      }
      footer img {
        width: 40px;
        height:40px;
        margin-left:.5em;
        margin-right: .5em;
      }
  </style>
</head>
<body>
  <h1>Black Goose Bistro Order Form Submission</h1>
  <ul id="nav">
  <li><a href="index.html" class="navlink">Home</a></li>
  <li><a href="menu.html" class="navlink">Menu</a></li>
  <li><a href="bgnews.html" class="navlink">News</a></li>
  <li><a href="gallery.html" class="navlink">Gallery</a></li>
  <li><a href="contact.html" class="navlink">Contact</a></li>
  <li><a href="pizza.html" class="navlink"><strong>Order From Us!</strong></a></li>
  <li><a href="jenskitchen/jenindex.html" class="navlink">Jen's Kitchen</a></li>
  </ul>
  <p>Your order is in the oven <?php echo $_POST["customerFirstName"]; $_POST["customerLastName"];?>!</p>
  <p>We'll call you at <?php echo $_POST["customerNumber"];?> when it's ready!</p>
  <footer><small>All content copyright &copy; 2017, Black Goose Bistro and Jennifer Robbins</small>
  <p>
  <img src="icons/facebook.svg" alt="facebook">
  <img src="icons/instagram.svg" alt="instagram">
  <img src="icons/twitter.svg" alt="twitter">
</p>
  </footer>
</body>
</html>
