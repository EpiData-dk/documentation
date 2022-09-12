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

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('grafik/r38.png'); background-repeat: repeat-x;"><img src="grafik/epidata.png" alt="+" height="25px">EpiData Software - Documentation</h2>
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

<tr>
<TD colspan="3">
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Manuals and Core Documentation</h4>
<p><a href="#tech">Technical Documentation</a>
&nbsp;&nbsp; <a href="#notes">Other Notes</a>
&nbsp;Show download <a href="php/showcountn.php">Count</a>
</p>
</TD>
</tr>

<tr>
<td colspan=2><p class="small">Files are uploaded on the date indicated. Download counting [] since June 2004.</p></Td></tr>

<TR><TD colspan="3">
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
EpiData Extended Manuals and Introduction or Field Notes</h4></td></tr>

<TR><TD><p><B>Examples for download and inspiration</B><br><br>
</p></TD><td>
  <a href="examples.php" title="Examples for download">Examples</a>
</TR>

<TR><TD><p><B>Extended EpiData help file</B><br>
  Extended EpiData help file for printing or browsing
</p></TD><td>
  <?php  fsize("epidata_pdf.pdf","Download") ?>
</TR>

<TR><TD><p><B>EpiTour</B><br>
The EpiTour guide is an introduction to EpiData (20 pages)</p>
</TD><td>
  <?php  fsize("epitour.pdf","Download") ?>
</TR>

<TR>
  <TD><p> <b>Data Management for Surveys and Trials </b><br> - A Practical Primer using EpiData 
  by Steve Bennett, Mark Myatt, Damien Jolley, and Andrzej Radalowicz.  <font size = "-1">Brixton Health, UK.
Objective: <i>"you should understand and know how to carry out the data management aspects of a research study with EpiData.
... the case study we use throughout this book is a medical one, but the principles of data management, and the details of data management activities are the same whatever the field of study"</i></font>
</p>
    </TD><td>
  <?php  fsize("dmepidata.pdf","Text (pdf)") ?>    </TD><td>
  <?php  fsize("dmrecfiles.zip","Data files") ?>
</TR>

<TR>
  <TD ><p><B>EpiData Introduktions note</B> (In danish)
  <br>Opbygning af skemaer og efterfølgende indtastning ved hjælp af EpiData. Af JM. Lauritsen</p>
</TD><td>
  <?php  fsize("epdintrodknote.pdf","Download") ?>
</TR>

<TR><TD><p>
<B>Short Introduction and flow charts</B><br>
These are included with installation files in most languages.</p>
</td>
   <td><a href="download.php"><Font size=-1>See download page</font></a></td>
</TR>


<TR><TD><p><B>EpiData Flyers</B><br>
  Promotional material presenting EpiData. 
SPC material in collaboration with Gruk, Norway</p></TD>
   <td><?php  fsize("epidata_flyer_spc.pdf","SPC statistics") ?></td>
   <td><?php  fsize("epidata_poster_spc.pdf","SPC poster statistics") ?></td>
</TR>


<TR>
<TD colspan=3><a name="tech"></a>
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Technical documentation</h4>
</td></TR>


<TR><TD>
<p><B>Validation of precision, parsing and estimation in EpiData Analysis</b>
<br>Lauritsen JM. Reports after running the testsuite.  The test suite will be released later
following clarification of data issues from persons submitting test data to the EpiData Association.
</td><td>
  <?php  fsize("epidata_analysis_validation_report.pdf","Report b126") ?> </TD><td>
  <?php  fsize("validate.htm","Latest Report") ?> </TD>
</TR>

<TR>
  <TD><p> <b>How to create User defined commands in EpiData Analysis</b><br> Examples and principle 
  by J. Hockin and J.Lauritsen
</p>
    </TD><td>
  <?php  fsize("cmd_command_epidata_analysis.pdf","Text (pdf)") ?>    </TD><td>
</TR>

<TR><TD>
<p><B>Output Design in EpiData Analysis</b>
<br>Lauritsen JM. Output design definition in EpiData Analysis. Contributor J. Hockin.
</td><td>
  <?php  fsize("epidata_analysis_output_definition.pdf","Download") ?>
</TR>

<TR><TD>
<p><B>Options and set specifications in EpiData Analysis</b>
<br>Lauritsen JM. Specification of principle for command and programme control structures.
</td><td>
  <?php  fsize("epidata_analysis_option_set_definition.pdf","Download") ?>
</TR>

<TR><TD>
<p><B>Commands and Functions in EpiData Analysis</b>
<br>Lauritsen JM. Commands and Functions in EpiData Analysis. Contributor J. Hockin.
</td><td>
  <a href="/commands.htm">"View"</a>
</TR>


<TR><TD>
<p><B>Datafile Structure</b>
<br>Bruus M & Lauritsen JM. Detailed Technical description of datafile structure in EpiData. 
</td><td>
  <?php  fsize("epidata_datafile.pdf","Download") ?>
</TR>

<TR>
<TD><p><B>User Defined Functions in EpiData Entry</b>
<br>Define "user defined functions" in chk files. Programmed by S.Mahmud. Two examples:<font clss="small">
<ul><li class="c">Gumm algoritm (By L.Hvidberg, J.Mortensen & A Skytthe. Institute of Public Health, Epidemiology
University of Southern Denmark, Denmark) 
<li class="c">Extended Soundex and Metaphone function (By S.Mahmud. Univ. of Mcguill, Montreaul, Canada)
</ul>
</font>
</p>
</td><td>
  <?php  fsize("udf_epidata.pdf","General Description") ?>    </TD><td>
  <?php  fsize("udf_epidata.zip","Source Code & examples") ?>
</TR>

<TR>
<TD><p><B>Translation of files</b>
<br>Source files for translation of documents and instructions on translation. </p>
</td><td>
  <?php  fsize("translation_package.zip","EpiData Entry") ?>
</TR>

<TR>
<TD><p><B>Webservice Version</b><br>
Software can access via SOAP protocol version numbers. 
<font color=red> Warning: this is highly technical </font>Not relevant for end-users, but for systems developers.
This service is called by "Check Version" in help menu's of EpiData Analysis.</p>
</td><td>
  <a href="http://www.epidata.dk/ws/epdservices.php">View Documentation here</a>
</td></TR>



<TR>
<TD>
<ul><B>Standards Implemented</b><li>Data export to Stata, SPSS & SAS with labels and missing value definitions, DBF, CSV.</li>
<li>Data Import from DBF, CSV, Stata with labels and missing value definitions.</li>
<li>Analysis reads standard data formats (dbf/csv/rec format)</li>
<li>Analysis produces standard HTML output, which is <a href="http://www.w3c.org">W3C compatible</a></li>
</ul>
</td><td colspan="2">
  <a href="http://csrc.nist.gov/CryptoToolkit/aes/rijndael/">AES encryption (Rijndael)</a>
  <br><a href="http://www.w3c.org">W3C</a>
  <br><a href="http://www.stata.com">Stata</a>
</td></TR>


<TR><TD colspan=3><a name="notes"></a>
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Other notes</h4>
</td></tr>


<TR>
  <TD><p><p><B>Take good care of your Data</B>
  <br>
Considerations and suggestions for achieving good data quality. By Svend Juul
with contributions from JM Lauritsen and A Jørgensen. Aarhus University, Denmark,</p>
</TD><td>
  <?php  fsize("takecare.pdf","Download") ?>
</TR>


<tr>
<TD><p><p><B>Datadocumentation principles - case (in danish)</B>
 <br>In the form of a structured introduction to Stata 6 (www.stata.com) this note takes the reader through the proces of 
complete documentation of a dataset. By JM.Lauritsen, Odense Denmark. (in danish). (<a href="downloads/stintro.pdf">index only</a>)
Datasets can be converted with EpiData from stata to other formats.</p>
</TD><td>
  <?php  fsize("statanot.pdf","Download") ?>
  <?php  fsize("statanotfiles.zip","Datasets") ?>
</TR>


<tr>
<TD><p><p><B>Introduction to Stata</B>
  <br>
Structured introduction to Stata (www.stata.com) and other notes by Svend Juul
Aarhus University, Denmark. (in english). </p>
</TD>
  <td align=center><a href="http://www.folkesundhed.au.dk/uddannelse/software">Web site</a>
</td>
</TR>

</table>
</p>

<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>
