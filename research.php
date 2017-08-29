<html>
<head>
<meta name="keywords" content="Michael Correll, visualization, madison, information visualization" />
<title>Michael Correll</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<body>
<?php
include('header.php');
?>

<div id="container">
<p>I am currently working on a number of research projects dealing with information visualization, with applications in fields like the digital humanities, virology, and psychology. Some example research topics include:</p>
<ul>
<li /><p><b>Visual Aggregation:</b> If we know what someone wants from our data, then we can give them that information directly. In this case a database query might be more suitable than a visualization tool. But the promise of visualization lies in situations where the designer may not know exactly what the viewer wants to know, but the viewer is instead free to explore the dataset to build up understanding by themselves. In order for such designs to work, we as designers need to know how good users are at using <i>visual information</i> to build up big picture <i>statistical information</i> from data.</p>
<p>Research from pyschology has shown that the visual system is capable of extracting a wide variety of statistical information (average values, variability, extrema) from visual stimuli in the world around us. This research project is an attempt to apply these findings to visualization, to show how we can design displays that rely on these abilities to let viewers build up "big pictures" by themselves.  
<p>Example paper: <a href="http://graphics.cs.wisc.edu/Papers/2014/ACG14/">Task-Driven Evaluation of Aggregation in Time Series Visualization</a></p>
<li /><p><b>Visualizing Statistical Uncertainty:</b> Data is usually drawn from the real world, and the real world is full of uncertainty. Techniques from statistics can be used to quantify and manage uncertainty in data to make predictions or conclusions about data, and yet there are known, systematic biases in how we think about probability, uncertainty, and risk. In many cases how we think about and compare risk and uncertainty has very little to do with mathematical expectation. </p>
<p>This work attempts to use the power of visualization to counteract these cognitivie biases and create encodings of uncertain information that rely on the power of statistics, but are still properly understood by a general audience with little or no training in statistics.</p>
<p>Example paper: <a href="http://graphics.cs.wisc.edu/Papers/2014/CG14/">Error Bars Considered Harmful: Exploring Alternate Encodings for Mean and Error</a></p>
<li /><p><b>Visualizing Variation in Genomics Data:</b> New technologies and techniques in genomics are generating large amounts of data, affording new scales of inquiry. Techniques for visualizing this data must allow the viewer to build up a big picture of the data, while also being aware of uncertainty in how these data are collected and aggregated. The <a href="http://graphics.cs.wisc.edu/WP/layercake/">LayerCake</a> tool is an attempt to deploy a simply tool for visualizing multiple viral populations at once, find interesting regions of the viral genome, and drill down to areas of interest for closer analysis</p>
<p>Example paper: <a href="http://graphics.cs.wisc.edu/Papers/2011/CGOG11/">Visualizing Virus Population Variability From Next Generation Sequencing Data</a></p>

<li /><p><b>Digital Humanities:</b> The humanities has benefitted from the new availability of data, but tools made for the visual analysis of data are often not very considerate of the different modes of proof, argumentation, and exploration that are the hallmarks of humanist research. By tailoring our tools to the specific rhetorics of our humanist collaborators, we can create visualizations which are data driven but still support human insight.</p>
<p>Example paper: <a href="http://graphics.cs.wisc.edu/Papers/2011/CWG11a/">Exploring Collections of Tagged Text for Literary Scholarship</a></p>
</ul>     

	</div>
<?php
include('footer.php');
?>

</body>
</html>
