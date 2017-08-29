<div id="header">
  <div id="headshot">
    <a href="/~mcorrell/"><img title="Michael Correll" src="images/Correll.png" height="100px" /></a>
  </div>

  <div id="headerText">
    <div>Michael Correll</div>
    <div>Research Associate</div>
    <div>University of Washington</div>
    <div>Interactive Data Lab</div>
  </div>
  <div id="logo">
    <a href="http://idl.cs.washington.edu"><img title="UW IDL" src="images/logo.png" height="100px" /></a>
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
