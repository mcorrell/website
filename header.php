<div id="header">
  <div id="headshot">
    <a href="/"><img title="Michael Correll" src="images/Correll.png" height="100px" /></a>
  </div>

  <div id="headerText">
    <div>Michael Correll</div>
    <div>Senior Research Staff</div>
    <div>Tableau Research</div>
  </div>
  <div id="logo">
    <a href="https://research.tableau.com/"><img title="Tableau" src="images/tlogo.png" height="100px" /></a>
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
