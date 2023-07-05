<div id="header">
  <div id="headshot">
    <a href="/"><img title="Michael Correll" src="images/Correll.png" height="100" alt="Picture of Michael Correll"/></a>
  </div>

  <div id="headerText">
    <div>Michael Correll</div>
    <div>Research Associate Professor</div>
    <div>Roux Institute, Northeastern University</div>
  </div>
  <div id="logo">
    <a href="https://roux.northeastern.edu/"><img title="Northeastern" src="images/nlogo.jpeg" alt="Northeastern University Logo"/></a>
  </div>
</div>

<?php
 $url = $_SERVER['REQUEST_URI'];
 $page = basename($url,".php");
?>

<div id="menu">
      <a href="./index.php"><div class="<?php if($page=='index'||$page=='~mcorrell'){ echo 'active';} ?>">Home</div></a>
      <a href="./publications.php"><div class="<?php if($page=='publications'){ echo 'active';} ?>">Publications</div></a>
      <a href="./research.php"><div class="<?php if($page=='research'){ echo 'active';} ?>">Research</div></a>
      <a href="./teaching.php"><div class="<?php if($page=='teaching'){ echo 'active';} ?>">Teaching</div></a>
      <a href="./cv.php"><div class="<?php if($page=='cv'){ echo 'active';} ?>">CV</div></a>
</div>
