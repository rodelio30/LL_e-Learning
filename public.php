<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/clsu-logo.png">
  <title>Language and Literature </title>
  <link rel="stylesheet" href="css/public_style.css">
</head>
<body>
  <header>
    <a href="#" class="logo">Language and Literature</a>
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Articles</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Faculty</a></li>
    </ul>
  </header>
  <section class="banner"></section>
  <script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>
</body>
</html>