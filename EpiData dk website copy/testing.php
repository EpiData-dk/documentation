<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head><title>EpiData Software - http://www.epidata.dk</title>
  <META Name="Author" CONTENT="JM.Lauritsen">
  <META NAME="Revisit-after" CONTENT="8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="css/epidata.css" rel="stylesheet" type="text/css" media="screen">

  <meta name="description" content="EpiData Web page">
  <meta name="distribution" content="global">
  <meta name="resource-type" content="document">
   <meta name="robots" content="all">
 
<link rel="SHORTCUT ICON" href="http://www.epidata.dk/favicon.ico">

<script type="text/javascript">if (window.self != window.top) window.top.location = window.self.location; </script>

<SCRIPT type="text/javascript" SRC="css/epidata.js"> </SCRIPT>

<!-- Here we use a conditional comment to give IE/5/6/Win the javascript hack that helps them do max-width --><!--[if IE]>
  <style type="text/css">
    #sizer {
    width:expression(document.body.clientWidth > 900 ? "300px" : "50%" );
    }
    #news {
    margin-left: 10px;
    }
  </style>
<![endif]-->



<?php include("/home/epidatadk/php/downloadc.php"); ?>
<?php include("/home/epidatadk/php/fsizeutil.php"); ?>

</head>

<body class="epidata">

<div id="sizer">
<div id="expander">

<!- page starts here ->

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('grafik/r38.png'); background-repeat: repeat-x;"><img src="grafik/epidata.png" alt="+" height="25px">EpiData Software - Test New Versions</h2>
   <div id="header">
      <ul>
       <li><A href="index.htm" title="Main EpiData page">Home</a></li>
       <li><a href="about.htm#about" title="What is the EpiData Association">About</a></li>      
       <li><a href="support.htm" title="Documentation, examples, manuals & help">Get&nbsp;Help</a></li>       
       <li><a href="download.php" title="Get copies of software">Download</a></li> 
       <li><a href="documentation.php" title="Documentation and Notes">Documentation</a></li> 
       <li><a href="examples.php" title="Examples for download">Examples</a></li>
       <li><a href="links.htm" title="Courses, External web sites etc.">Links</a></li>
       <li><a href="credit.htm" title="Who did the work ?">Credit</a></li>       
       <li><a href="sitemap.htm">Site Map</a></li>
    </ul>
 </div>

<div class="maincol">
<!-- content of main window -->

<p>
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Test versions of programs in development. </h4> 

<p>Files from this page are <b>in a developmentental phase</b>. 
<font color="RED"> Take precautions and make sure the programs do what they claim to do. 
Work on copies of real data.</font> Make your own tests before you rely on versions from this page for actual work.
</p>
<hr><p> 
The latest public release is placed <a href="download.php">here</a>. 
Version information: <a href="analysisversioninfo.htm">EpiData Analysis</a>
&nbsp;&nbsp;&nbsp; <a href="entryversioninfo.htm">EpiData Entry & EpiC</a></p>


</p>
<hr>
<p>Test files provided as archive files in zip format or install setup files (exe). 
<br>Report errors, bugs and discussions to  
the <a href="http://lists.umanitoba.ca/pipermail/epidata-list">the EpiData-list</a>
</p>

<table><tr><td>
<b>Development is documented </b>based on the open-source system <a href="http://www.mantisbt.org/">Mantis</a>.
</td>
<td width="10%">&nbsp;</td>
<td><a href="Http://www.epidata.dk/php/mantis">The EpiData Development<br>Documentation system</a>. 
</td> 
</tr></table>

<h5 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
EpiData Analysis</h5>

<!-- <p><b>No test version at this time</b></p> -->


<table><tr><td>
Test of new interface (menu's) and reported bugs <br>since relese of v2.0
<small>See <a href="commands.htm">All Commands</a>&nbsp;&nbsp;&nbsp;<a href="analysisversioninfo.htm#test">Changes</a></small> 
</td>
<td width="5%">&nbsp;</td>
<td><?php  fsize2("epidata_analysis_option_set_definition.pdf","<small>Clarification of options</small><br>") ?>
</td> 
<td width="5%">&nbsp;</td>
<td valign="center">
 <?php $versionfile = file("version//epidatastattest.version");
  $version = $versionfile[0];
  $filename=$versionfile[1];
  echo "</td><td><small>$version</small><br>"; ?>
  <?php  fsize2("$filename","(Download&nbsp;Setup)<br>") ?>
</td>
</tr></table>

 <!-- add the current status of the development. Actual text in raw file to minimise workload on upload -->

 <?php $versionfile = file("version//epidatastattest.version");
  $c1 = $versionfile[2];
  $c2 = $versionfile[3];
  $c3 = $versionfile[4];
  $c4 = $versionfile[5];
  echo "<hr><table align=center><tr>";
  echo "<td valign=TOP><center><u>Please test</u></center><ul>$c2</ul></td>";
  echo "<td valign=TOP><center><u>Known issues and comments</u></center><ul>$c3</ul></td>";
  echo "<td valign=TOP><center><u>Recently solved</u></center><ul>$c4</ul></td>";
  echo "</tr></table><hr><table align=center><tr><td><small>$c1</small></td></tr></table>";
 ?>

 <h5 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
EpiData Entry</h5>

 <p><b>No test version at this time</b></p> 
<!--
<table><tr>
<td colspan="2">  
  <?php $versionfile = file("version/epidataentrytest.version");  $version = $versionfile[0];   $build = $versionfile[1];    $c1 = $versionfile[2];$c2 = $versionfile[3] ;
    echo "Version for testing: <b>$version (Build &nbsp;$build)</b>"; 
    echo "<br><br>$c1"; ?>
	echo " 
</td><td width="10%">&nbsp;</td><td>  <?php  fsize("setupepidataentrytest.exe","Download Setup") ?>
  <?php $versionfile = file("version/epidataentrytest.version"); $c2 = $versionfile[3] ;
    echo "<br><small>$c2</small>"; ?>
</td> 
</TR>
</table>

-->

<h5 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
EpiC - EpiData Batch Processor</h5>

<!--<p><b>No test version at this time</b></p>-->


<TABLE>
<TR>
  <TD ><br><B>EpiC version 3.1.2</B><br>
  <ul><li>Validate, Append and Merge added   
<li>Please test it before you rely on it working correctly for actual work. 
<li>Included in zip file is documentation for options
<li>Error located in v3.1.1 in Stata v8 export. Fixed in v3.1.2
</ul>
</td>
<td >
  <?php  fsize("epictest.zip","v3.1.2") ?>
</td> 
</TR>
</TABLE>


<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>



