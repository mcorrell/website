<!DOCTYPE html lang="en">
<head>
<meta name="keywords" content="Michael Correll, visualization, seattle, washingtion, madison, tableau, information visualization" />
<title>Michael Correll</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include('header.php');
?>

<div id="container">
	<p>The following is a list of my current publications. Click each title to visit an associated page with more information.
	</p>
	<?php
                //Personal stash of papers
                $papers = file_get_contents('./publications.txt');

                //University of Wisconsin Basilic Results
                $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://graphics.cs.wisc.edu/Papers/spartan.php?author=Correll');
		curl_setopt($ch, CURLOPT_HEADER,0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$data = curl_exec($ch);
		curl_close($ch);

                //Inject personal papers after beginning of Basilic list
                $results = strrpos($data,`<div class="results list">`)+26;
                $data = substr_replace($data, $papers, $results, 0);
                $data = preg_replace("/padding-top:(\d*)px(;?)/","",$data);
                echo $data;
	?>
	<p>
	My undergraduate St. Mary's project, "Can Machines Think: A Philosophical Guide" is available <a href="SMP/SMP.pdf">here</a>.
	</p>
</div>
<?php
include('footer.php');
?>

</body>
</html>
