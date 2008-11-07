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

<!- page starts here -->

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('grafik/r38.png'); background-repeat: repeat-x;"><img src="grafik/epidata.png" alt="+" height="25px">EpiData Software - Examples</h2>
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

<table CELLPADDING="2" CELLSPACING="0" BORDER="1" FRAME="BELOW" RULES="ROWS" >
<!-- Actual contents of this page -->

<TR><TD colspan="2">
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Instructive examples for inspiration to EpiData users</h4></td></tr>

<tr><td colspan="2">
<p>Order of files according to categories. 
<small>Download counts since <b>June 16th 2004</b> in [&nbsp;&nbsp;]. 
Publications from the examples are shown <a href="links.htm#pub">here</a>
</p>
</Td></tr>

<TR>
  <TD ><B>Basic Example - first</B><br>  
  The "first example" files (QES/REC/CHK) used as example in EpiTour and Short overview documents.
  </td><td>
  <?php  fsize("first.htm","View") ?></td><td>
  <?php  fsize("first.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Relate example - Clinical Study with four forms</B><br>
  Working example of the structure for a Clinical study with a start, then by relating on id
  entering data into basic person information, sideeffects, status information and pre-study level.
  </td><td>
  <?php  fsize("clinexample.txt","Instruction") ?></td><td>
  <?php  fsize("epidata_clin_study_example.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Relate example - Household, Person, Visit</B><br>
  Working example of Household - Person - Visits based on Epi Info example file. 
  </td><td>
  <?php  fsize("houseexp.pdf","View") ?></td><td>
  <?php  fsize("house.zip","Download") ?>
</TR>

<TR>
  <TD  colspan="3"><table><tr><td width="75%">
<p><B>Relate example - hospital infections - 3 examples</B> <br>
Patients in one file and infection related information in other files. Five related files and codes for fields in two separate files used with comment legal recfile.
The systems can be used for routine reporting to the Dutch National Nosocomial Infection Surveillance System <A HREF="http://www.PREZIES.nl">Prezies</a>
<small>Description of how to enter data for <A HREF="http://www.epidata.dk/php/downloadc.php?file=powi.pdf">the Surgical Site Infection system (POWI)</a>  
<br>All files are in dutch, but principle and structure is clear without understanding the text</small>
<br>Provided by Louk Meertens, Netherlands. </p>
  </td><td>  <?php  fsize("powi.exe","Powi") ?></td><td>
  <?php  fsize("hartop.exe","Hartop") ?><br>
  <?php  fsize("modulsepsis.exe","Sepsis") ?>
 </tr></table></td>
</TR>

<TR>
  <TD><p><B>Relate example - Multilevel, Village, Family, Person - Nutritional survey of region in Burkina Faso</B><br>
Comprehensive example with several hierarchical levels of respondents. Also includes codes via comment legal command. 
<font size=-1>When testing this system make sure you <I>FILL OUT ALL RELATE FIELDS</i>, Otherwise relate system does not function.</font>
<br>Provided by: Yves Martin-Prevel, Epidémiologiste (Institut de Recherche pour le Développement) Burkina Faso.
<br>Publications from the study <a href="links.htm#pub">here</a></p>
  </TD><td>
  <?php  fsize("yves.htm","View") ?></td><td>
  <?php  fsize("yves.zip","Download") ?>
</TR>


<TR>
  <TD ><br><B>Relate example - locking relate field</B> <br>
  A template example where the field used for the relate is locked once a value has been entered. 
  Provided by Louk Meertens, Netherlands. 
  </TD><td>
  <?php  fsize("lockexample.zip","Download") ?>
  </TR>

<TR>
  <TD ><br><B>Multiple Response - entry</B> <br>
  An example of how to build a data entry file when you have 6 (7) possible responses and 
you wish to be able to enter any of them in an efficient way. 
  Provided by Charity Jenkins, Australia. 
  </TD><td>
  <?php  fsize("mresponse.pdf","View") ?></td><td>
  <?php  fsize("multipleresponse.zip","Download") ?>
  </TR>

<TR>
  <TD ><br><B>Read variables in file B during entry in file A</B><br>
  The example shows how to copy information from a "lookup" file B into a file A during entry.
  Three examples copying one, two and three variables by different principles are applied.
  </TD><td>
  <?php  fsize("copydataab.zip","Download") ?>
</TR>


<TR>
  <TD ><br><B>Comment Legal - combine with free values</B><br>
   An example of how to combine legal values, e.g. Denmark, France, Cameroun and then be allowed to enter
  Schwitzerland in the same field.</TD><td>
  <?php  fsize("legalplusfree.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Comment legal recfile - Birds and tick names</B><br>
  An example of using the type comment for a Birds and tick names example. It  includes three files one is the main file (ticks.rec), a file with
scientific names of more of 100 bird species (aves.letter.rec) and another
with scientific names of a few tick species (tick.letter.rec). Main file is: Ticks.rec 
<br>Provided by Jose Arturo (Saludos desde Mexico).</TD><td>
  <?php  fsize("ticks.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Comment legal recfile - Bacteria list</B><br>
   An example of getting a text from "comment legal" into a string field by looking up the
  numerical code in a different REC file. And to get the numerical code into a numerical
  field based on lookup of text (bacteria name).
<br>Provided by by David Raveh, Israel.</TD><td>
  <?php  fsize("bacteria.zip","Download") ?>
</TR>


<TR>
  <TD ><br><B>Calculation - percent</B><br>
  Percent calculation with decimal points after entry of two integers.</TD><td>
  <?php  fsize("percent.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Age - Today </B><Br>
  Calculate age in years today based on entry of date of birth</TD><td>
  <?php  fsize("dob.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Age at day of visit</B><Br>
  Calculate age in years, months and days based on entry of date of birth and date of a visit</TD><td>
  <?php  fsize("datediff.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Calculation - Week number</B><Br>
  Calculate week based on entry of a date (works for years 1999-2004)</TD><td>
  <?php  fsize("week.zip","Download") ?>
</TR>

<TR>
  <TD ><br><B>Calculator - confidence limits</B><br>
  Calculate confidence limits for a proportion with EpiData. See also <a href="http://www.openepi.com">javascript version</a>
<br>Provided by Kevin Sullivan, Univ. Emory. USA</TD><td>
  <?php  fsize("prop.pdf","View") ?></td><td>
  <?php  fsize("prop.zip","Download") ?>
</TR>

<TR>
<TD><B>User Defined Functions in EpiData</b>
<br>Define "user defined functions" in chk files. Programmed by S.Mahmud. Two examples:<font size="-1">
<ul><li>Gumm algoritm (By L.Hvidberg, J.Mortensen & A Skytthe. Institute of Public Health, Epidemiology
University of Southern Denmark, Denmark)</a>
<li>Extended Soundex and Metaphone function (By S.Mahmud. Univ. of Mcguill, Montreaul, Canada)
</ul></font>
</td><td>
  <?php  fsize("udf_epidata.pdf","General Description") ?></td><td>
  <?php  fsize("udf_epidata.zip","Source Code & examples") ?>
</TR>

<TR>
  <TD ><br><B>Calculation and validation - cpr number check (in Danish)</B><br>
  (Danish: Fil til modulus 11 kontrol). Modulus 11 test of the danish personal registration number. 
  Based on cross-sum of date of birth and a unique ID key a test must egual 0. Otherwise the key is wrong.
  Can be used to make a key file for unique ID's and cpr number. 
	<br>Provided by Henrik Bøggild, Denmark - explanation provided in english.
	<br>Value label error fixed (nov. 5th 2002)</TD><td>
  <?php  fsize("cpr.pdf","View") ?></td><td>
  <?php  fsize("cpr.zip","Download") ?>
</TR>

<TR><TD><br><B>Explanation - MOD command</B><br>
  Extended explanation on using the MOD command</TD><td>
  <?php  fsize("mod.html","View") ?>
</TR>

<TR><TD COLSPAN="3" ALIGN="RIGHT"><hr>What is a <A HREF="#zip">ZIP-file?</A></TD></TR>

</TABLE>

<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Submit more examples </h4>

<p>To add examples here send a copy of REC/CHK and QES files to info@epidata.dk <br>
REC files can be without records. Just seeing the REC/CHK files without data from others can be very instructive.
<br>Address and e-mail of provider contained in the zip files, only names and country here (antispam e-mail measure).

<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
How to work with Example files in EpiData ?</h4>
<OL>
<LI>Download the <A HREF="#zip">ZIP-file</A> containing the example to a temporary directory/folder (e.g. c:\windows\temp).
<LI>Extract the files in the <A HREF="#zip">ZIP-file</A> using an unzip/extractor program.
<LI>Start EpIData and open the example file
</OL>

<p><A NAME="zip"><B>ZIP files</b></a>
A ZIP-file is an archive containing one or more single files. Zip files take up less space and are
therefore faster to send via internet. They are compressed in size.
You must extract the single files in a ZIP-file archive using an extract-program,
e.g. <b> tools menu in EpiData </b> 
</p>

<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>
