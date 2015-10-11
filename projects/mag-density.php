<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Magnetisation density in PrBCO (Markvardsen's Academic Web)</title>
<script src="scripts/utilities.js" type="text/javascript"></script>
<meta http-equiv=Content-Type content="text/html; charset=UTF-8" />
<link href="css/projects.css" rel="stylesheet" />
<link rel="prefetch" href="images/three-particle-large.png" />
<link href="../index.html" rel="home" title="Home" />
<? 
switch($_GET['bug']){ 
case 1:   $image='mag-density1b.jpg';  $alttext='CL=1';  break; 
case 2:   $image='mag-density2b.jpg';  $alttext='CL=0.1';  break; 
case 3:   $image='mag-density3b.jpg';  $alttext='CL=0.05';  break; 
case 4:   $image='mag-density4b.jpg';  $alttext='CL=0.01';  break; 
case 5:   $image='mag-density5b.jpg';  $alttext='CL=0.005';  break; 
case 6:   $image='mag-density6b.jpg';  $alttext='CL=0.0025';  break; 
case 7:   $image='mag-density7b.jpg';  $alttext='CL=0.001';  break; 
case 8:   $image='mag-density8b.jpg';  $alttext='CL=0.00075';  break; 
case 9:   $image='mag-density9b.jpg';  $alttext='CL=0.00075';  break; 
default:  $image='mag-density6b.jpg';    $alttext='CL=0.0025';           
} 

$path='images/'; 
$size=getimagesize($path.$image); 
$margin=300-$size[1]; 
$margin=$margin/2; 

$showimage='<img src="'.$path.$image.'" '.$size[3].' alt="'.$alttext.'">'; 

?> 

<link rel="stylesheet" href="css/bug-style.css" type="text/css" media="all"> 

<style type="text/css" media="all">#bigimage img{margin-top:<? echo $margin;?>px;}</style> 

</head>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-16154432-3");
pageTracker._trackPageview();
} catch(err) {}</script>
<body text=black bgColor=white>
<h1>Magnetisation density in PrBCO </h1>
<p class="name">
<a href="../index.html">Anders J. Markvardsen</a>, <em class="last_modified">last modified 12th 
December 2009.</em>
</p>
<p><span class="intro_headers">Aim</span>: Was to provide new experimental data that might help to clarify why  PrBa<span class="subscript">2</span>Cu<span class="subscript">3</span>O<span class="subscript">6+x</span> (abbreviated PrBCO) does not superconduct; the broader motivation was to try to further the understandanding of high-temperature superconductors.</p>
<p>This web page is structured as follows:</p>
<ul>
  <li>Introduction</li>
  <li>The experiment</li>
<li>The observed magnetic structure factors </li>
  <li>History of this document</li>
<li>References </li>
</ul>
<h2>Introduction</h2>
<p>The first high-temperature superconductor was discovered in 1986. CuO<span class="subscript">2</span> sheets are a feature found in the crystal structure of the majority of high-temperature superconductors including LnBa<span class="subscript">2</span>Cu<span class="subscript">3</span>O<span class="subscript">7</span>, abbriviated LnBCO, as shown in Fig 1. </p>
<div class="figure">
<img src="images/mag-density-LnBCO.png" alt="LnBCO" width="299" height="188">
    <br class="clearleft" />
      <span class="figurecaption"><b>Figure 1</b>: 
	  The crystal structure of LnBa<span class="subscript">2</span>Cu<span class="subscript">3</span>O<span class="subscript">7</span>, where Ln may be the element Y or a rare
	  earth element. </span>
</div>
<p>Many of the theoretical models that have been proposed for explaining the mechanisms behind high-temperature superconductors focus on these CuO<span class="subscript">2</span> sheets. The aim of this work was to shed light on which theoretical model fits best with additional experimental data. In particular, the compound PrBCO was studied at the neutron source at Institut Laue Langevin (ILL), Grenoble, France. </p>
<p>PrBCO is isostructural to YBCO, perhaps the most well studied high-temperature superconductor, and both have the structure shown in Fig. 1 (one with Ln=Pr and the other with Ln=Y). In contrast with YBCO, the PrBCO compound does not superconduct and the prevailing explanation  is that the presence of Pr ions between the CuO<span class="subscript">2</span> sheets prohibits superconductivity in these layers. </p>
<H2>The experiment</H2>
<p> A single crystal of PrBCO was grown by Th. Wolf. Growing inorganic single crystals of a size suitable for neutron diffraction experiments is rarely trivial. Th. Wolf managed to grow a crystal with mass 23mg. This crystal was then studied using  the polarised neutron diffraction (PND) technique at ILL. </p>
<h3>Motivation for PND experiment</h3>
<p>The suppression of superconductivity in PrBCO is thought to be caused by the 4f electrons of Praseodymium (Pr) interacting with states in the superconducting CuO<span class="subscript">2</span> sheets. If this is true, this should be detectable experimentally by measuring the shape of the electron density in the regions between the Pr ions and the CuO<span class="subscript">2</span> planes. The most common way of measuring an electron density is using X-ray diffraction. However, Pr contains many more electrons in addition to its 4f electrons and X-rays do not differentiate between these. X-ray diffraction from Pr  would therefore be dominated by scattering from the large number of non 4f electrons. </p>
<p>Pr in PrBCO is paramagnetic above the Neil temperature, which is about 15K. Hence the magnetic moments of Pr can be aligned by applying a magnetic field over the sample. We used the D3/D9 instruments at ILL to measure the magnetic structure factors of PrBCO. </p>
<h2>The observed magnetic structure factors </h2>
<p>The data in table 5.5 in [1] represents magnetic structure factors, these are Fourier components of the magnetisation density of PrBCO.  The more Fourier components that are measured the higher the resolution of the  magnetisation density map constructed from such data. The data in table 5.5  can be expected to reveal features in the density map  of about  0.75-1.25 &Aring; (1&Aring; = 10<span class="superscript">-10</span> m). Although, this is small, it may 
not be small enough to give a definite answer to whether the Pr 4f electrons are the 
cause of suppression of superconductivity in PrBCO. An effort was therefore 
put into trying to 'enhance' the data to 'higher' resolution using the maximum entropy method (MaxEnt). A 
modified version of a software program provided by Buck/Macaulay [3] was developed  
to work with polarised neutron diffraction data. Indeed, using the MaxEnt method the magnetisation
density maps appear significantly clearer. Isosurfaces at different contour levels (CL) of PrBCO are shown in Fig. 2. An 'isosurface' displays all points with equal density; in Fig. 2 all points with density equal to +/- CL are displayed in dark grey colours and light grey colours respectively.</p>

<div id="bigimage"><? echo $showimage; ?></div> 

<div id="thumbs"> 
<? 
echo '<a href="mag-density.php?bug=1&amp;style=0#bigimage" id="bug01"><img src="images/mag-density1s.jpg" width="66" height="137" alt="CL=1"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=2&amp;style=0#bigimage" id="bug02"><img src="images/mag-density2s.jpg" width="66" height="137" alt="CL=0.1"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=3&amp;style=0#bigimage" id="bug03"><img src="images/mag-density3s.jpg" width="66" height="137" alt="CL=0.05"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=4&amp;style=0#bigimage" id="bug04"><img src="images/mag-density4s.jpg" width="66" height="137" alt="CL=0.01"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=5&amp;style=0#bigimage" id="bug05"><img src="images/mag-density5s.jpg" width="66" height="137" alt="CL=0.005"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=6&amp;style=0#bigimage" id="bug06"><img src="images/mag-density6s.jpg" width="66" height="137" alt="CL=0.0025"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=7&amp;style=0#bigimage" id="bug07"><img src="images/mag-density7s.jpg" width="66" height="137" alt="CL=0.001"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=8&amp;style=0#bigimage" id="bug08"><img src="images/mag-density8s.jpg" width="66" height="137" alt="CL=0.00075"></a>'; echo "\n"; 
echo '<a href="mag-density.php?bug=9&amp;style=0#bigimage" id="bug09"><img src="images/mag-density9s.jpg" width="66" height="137" alt="CL=0.00075"></a>'; echo "\n"; 
?> 
</div>
<p>
<br class="clearleft" />
      <span class="figurecaption"><b>Figure 2</b>: 
	  Shows isosurfaces of PrBCO at different contour levels (CL). </span>
</p>
<p> Comparing the isosurfaces in Fig 2 with the crystal structure in Fig. 1  the strongest feature (at highest CL)  is a circular density located at the Pr site, i.e. originating from the 4f Pr electrons. Further, the following concluding points were reached:</p>
<ul>
  <li>Compared to a crystal field calculation (see [1,2]), which aims to provide a picture of the 4f Pr magnetisation density  when the 4f electrons are not interacting with their surroundings,. This study shows that this model could describe features of the Pr density values  (as shown in Fig. 2) ranging from the highest value to 1/100 of the highest value. </li>
<li>The second strongest feature observed in the density is at the Ba sites. Since Ba<span class="superscript">2+</span> is non-magnetic, this signal is attributed to the presence of a small amount of Pr on these sites. This Pr/Ba mixing may contribute to the suppression of superconductivity in PrBCO.</li>
</ul>
<p>For more details see Ref. [1,2]. </p>
<h2>History of this document </h2>
<ul>
<li>The first version of this document was completed 8/11-04.</li>
<li>Had not read through this page since it was first created. Improved wording of parts
of this page  but not its content. 12th December 2009.</li>
</ul>
<h2>References</h2>
<ol class="references">
  <li> Chapter 5 in A. J. Markvardsen, <em class="reference">Polarised neutron diffraction measurements of PrBa<span class="subscript">2</span>Cu<span class="subscript">3</span>O<span class="subscript">6+x</span> and the Bayesian statistical analysis of such data</em>, PhD thesis, Oxford University (2000) [<a href="download/thesis_chap5_with_refs.pdf">pdf</a>] </li>
  <li>A. J. Markvardsen, A. T. Boothroyd, B. Buck, G. J. McIntyre and Th. Wolf, J. Magn. Magn. Mater. 177-181, 502 (1998)</li>
  <li>B. Buck and V. A. Macaulay, in Maximum entropy and Bayesian mehtods, edited by R. Smith, G. J. Erickson and P. O. Neudorfer (Kluwer, Dordrecht, 1992), p. 241 </li>
</ol>
<p>&nbsp;</p>
<div id="bottomtext"> 
The PHP code used to generate Fig. 2 was initially copied from <a href="http://www.porjes.com/bruciebugs/bugs.php">'Brucies Bug Collection</a>'. <br/>
Thanks for making this code available for download.
</div>
</body>
</html>




