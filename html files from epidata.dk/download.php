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

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('grafik/r38.png'); background-repeat: repeat-x;"><img src="grafik/epidata.png" alt="+" height="25px">EpiData Software - Download</h2>
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
<TR>
<Td colspan="5"><p><a href="#ee">EpiData Entry</a> 
&nbsp;<a href="#ed">EpiData Analysis</a>
&nbsp;<a href="#epic">EpiC</a>   
&nbsp;<a href="#epic">Encrypt</a>   
&nbsp;<a href="#util">Utilities & Flyers</a>
&nbsp;All downloads <a href="php/showcountn.php">Count</a>
&nbsp;<a href="testing.php" title="Test new versions">Test Versions</a></li>
</Td></Tr><tr>
<td colspan=5>
<p class="small">This page contains latest stable release for general use. Files are uploaded on the date indicated. Download counting [] since June 2004.</p> </Td></tr>

<TR>
<tr><TD VALIGN=top colspan="5">
<a name="ed"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">EpiData Analysis</a></h5>
<p>Download either one complete setup file as exe, zip or ALL the smaller parts. 
Setup file includes program, introduction and core documentation. First (V1.0) released Sept. 2005. First v2.0 Nov. 5th 2007.
A build is a minor revision, see <a href="analysisversioninfo.htm">list of changes</a></p>

</td></tr>

<TR>
<Td><p><b>English v2.0</b></p>
</Td><td colspan=1><small>See <a href="analysisversioninfo.htm">list of changes in v2.0</a>
 <?php $versionfile = file("version//epidatastat2.version");
  $version = $versionfile[0];
  $release = $versionfile[1];
  $build = $versionfile[2];
  echo "<br><small>Version $version Rel. $release (Build &nbsp;$build )</small>";
 ?>
  <td align="center"><small><a href="commands.htm">Command reference</a></small>
</TD><!--<td align="center"><?php fsize("epidataanalysis_introduction_en.pdf","7 page Intro") ?> -->
</TD><td  align="right"><?php fsize("setupepidatastat2.exe","Setup <small>(Exe)</small>") ?>
</TD><td align="center"><?php fsize("setupepidatastat2.zip","Setup <small>(ZIP)</small>") ?>
</Td>
</Tr>


<TR>
<Td colspan=4><p>Version 1: 
 <?php $versionfile = file("version//epidatastat.version");
  $version = $versionfile[0];
  $release = $versionfile[1];
  $build = $versionfile[2];
  echo " $version Rel. $release (Build &nbsp;$build";
 ?>)</b></tr><tr><td><p><b>English V1.1</b></p>
</Td><td align="center"><?php fsize("flowsheet_analysis_en.pdf","Flowchart") ?>
</TD><td align="center"><?php fsize("epidataanalysis_introduction_en.pdf","7 page Intro") ?>

</TD><td align="center"><?php fsize("setupepidatastat.exe","Complete Setup (Exe)") ?>
</TD><td align="center"><?php fsize("setupepidatastat.zip","Complete Setup (ZIP)") ?>
</Td>
</Tr>

<Tr><td colspan="1"><p class="small">English V1.0<br>In Smaller Parts <br>(Get all)</p>
</td><td colspan="4" align="right"><p>
  <?php  fsize2("setupepidatastatp.exe","(Part 1)") ?>&nbsp;-&nbsp;
  <?php  fsize2("setupepidatastatp-1.bin","(Part 2)") ?><br>
  <?php  fsize2("setupepidatastatp-2.bin","(Part 3)") ?>&nbsp;-&nbsp;
  <?php  fsize2("setupepidatastatp-3.bin","(Part 4)") ?></p>
</td>
</TR>


<TR>
<Td><p><b>Versión Español V1.1 </b></p><p class="small">Install and startup files translated)</p>
</Td><td align="center"><?php fsize("flowsheet_analysis_es.pdf","Flujo de trabajo (pdf)") ?>
</TD><td align="center"><?php fsize("epidataanalysis_introduction_es.pdf","Introducción breve (pdf)") ?>
</TD><td align="center"><?php fsize("setupepidatastat_es.exe","Complete Setup (Exe)") ?>
</TD><td align="center"><?php fsize("setupepidatastat_es.zip","Complete Setup (ZIP)") ?>
</Td>
</Tr>
</p></td></TR>

<TR>
<Td colspan = 4><p><b>French notes</b></p><p class="small">Link</p></td>
<td align="center">
<a href="http://www.reseau-naissance.com/joomla/index.php?option=com_content&task=section&id=11&Itemid=78">Course Materials in French</a>
</Td>
</Tr>




<tr><TD VALIGN=top colspan="5">

<a name="ee"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
EpiData Entry</a></h5><p>
Entry is suited for entry and documentation of data. 
Download the "setup" file in the language of your choice. Setup file includes program and core documentation. 
A translation consists of documentation and texts for menu's etc.
The actual program file is the same for all languages. Acknowledge translators.</p>
<p>
<br><br>Current version: <b>
<?php $versionfile = file("version//epidataentry.version");
  $version = $versionfile[0];
  $build = $versionfile[1];
  echo "$version </b> Build: (<b>&nbsp;$build</b>)";
 ?>
. A build is a minor revision, see <a href="entryversioninfo.htm">list of changes</a><p>
</td></tr>

<TR>
<Td>English 
</Td><td align="center"><?php fsize("epidata_flow.pdf","Flowchart") ?>
</TD><td align="center"><?php fsize("epdintro.pdf","4 page Intro") ?>
</TD><td align="center"><?php fsize("setup_epidata.exe","Complete Setup") ?>
</TD><td align="center"><?php fsize("epidata_pdf.pdf","Extended help (pdf)") ?>
</Td>
</Tr>


<TR>
<Td>English 
</Td><td colspan="3">Get this if you only need latest build and have documentation and language files. Unzip and replace previous epidata.exe.
</TD><td align="center"><?php fsize("epidata.zip","Zip - exe only") ?>
</Td>
</Tr>

<?php text1("Chinese (simplified)","HE Wu (menu & introduction)& Tao Li-na<br>Lv Jun (Extended help)") ?>
<td align="center">
<?php fsize("epdintro_cn.pdf","CN intro") ?><br>
<a href="../grafik/china.gif">View by Lu Zhijian</a>
</TD><td align="center"><?php fsize("setup_epidata_cn.exe","CN setup") ?>
</TD><td align="center"><?php fsize("epdhelp_cn.pdf","Extended help (pdf)") ?>
<br><?php fsize("epdhelp_cn.zip","Extended help (zip)") ?>
</TD>
</TR>

<?php text1("Danish","Michael Bruus & Jens Lauritsen") ?>
<td align="center"><?php fsize("epdintro_dk.pdf","DK intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_dk.exe","Dk setup") ?>
<!-- </TD><td align="center"><A HREF="indexdk.htm">Web Site</a> -->
</TD>
</TR>

<?php text1("Deutsch","Wolfram an der Heiden") ?>
<td align="center"><?php fsize("readme_de.rtf","DE rtf") ?>
</TD><td align="center"><?php fsize("setup_epidata_de.exe","DE setup") ?>
</td><td align="center">Installation is in German, Menu's not translated yet 
</TD>
</TR>

<?php text1("Espa&ntilde;ol","Pedro Arias y Juan Carlos F. Merino") ?>
<td align="center"><?php fsize("epdintro_sp.pdf","SP intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_sp.exe","SP setup") ?>
</TD><td align="center"><A HREF="http://www.cica.es/epiinfo">Web Site</a>
</TD>
</TR>


<?php text1("Francais","EpiConcept & Epiter Group") ?>
<td align="center"><?php fsize("epdintro_fr.pdf","FR intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_fr.exe","FR setup") ?>
<br><?php fsize("epdhelp_fr.pdf","Extended help") ?>
</TD><td align="center"><A HREF="http://www.epiconcept.fr"><font size=-1>EpiConcept</a>
<br><a href="http://www.epiter.org/"><font size=-1>Epiter</a> 
<br><a href="http://www.reseau-naissance.com/joomla/index.php?option=com_content&task=section&id=11&Itemid=78">Course Materials in French</a>
</TD></TR>


<?php text1("Italiano","Pasquale Falasca, Letizia Zannoni & Ezio Casari") ?>
<td align="center"><?php fsize("epdintro_it.pdf","IT intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_it.exe","IT setup") ?>
</TD><td align="center"><A HREF="http://www.epiinfo.it"><font size=-1>Web Site</a>
</TD></TR>

<?php text1("Nederlands","Louk Meertens") ?>
<td align="center"><?php fsize("epdintro_nl.pdf","NL intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_nl.exe","NL setup") ?>
<td align="center">&nbsp; 
</TD></TR>

<?php text1("Norsk","Vegard Høgli") ?>
<td align="center"><?php fsize("epdintro_no.pdf","NO intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_no.exe","NO setup") ?>
</TD><td align="center"><A HREF="http://www.gruk.no/epi-info">Web Site</a>
</TD>
</TR>



<?php text1("Polish","Piotr Ko³odziejczyk") ?>
<td align="center"><?php fsize("epdintro_pl.pdf","PL intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_pl.exe","PL setup") ?>
</TD><td align="center"><A HREF="http://www.epidata.prv.pl">Web Site</a>
</TD>
</TR>


<?php text1("Português","JPA Haddad & P Marques-Vidal & Marco Moura") ?>
<td align="center"><?php fsize("epdintro_pt.pdf","PT/PTB intro") ?>
<br><a href="http://www.pesquisaclinica.ipec.fiocruz.br/modules.php?name=Downloads&op=getit&lid=24">
<small>Portugueze Introduction note (Emmanuel P. et al) Rio De Janeiro, Brazil.</small>
</TD><td align="center"><?php fsize("setup_epidata_pt.exe","PT Setup") ?>
</TD><td align="center"><?php fsize("setup_epidata_brazil.exe","Braz Setup") ?>
</Td></tr>

<?php text1("Romanian","not complete yet") ?>
<td align="left" colspan="3"><?php fsize("setup_epidata_ro.exe","RO Setup") ?>
</Td></tr>

<?php text1("Russian","Sergey Eremin & Sam Brown") ?>
<td align="center"><?php fsize("readme_ru.rtf","RU readme") ?>
</TD><td align="center"><?php fsize("setup_epidata_ru.exe","RU setup") ?>
</td><td align="center">&nbsp;
</TD>
</TR>


<?php text1("Serbian","Marko Kovacevic") ?>
<td align="center"><?php fsize("flowsheet_serb.pdf","Flowchart") ?>
</TD><td align="center"><?php fsize("epdintro_serb.pdf","SERB Intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_serb.exe","SERB Setup") ?><br>
<?php fsize("epdlang_serb2.zip","Documentation") ?>
</Td></tr>

<?php text1("Slovenian","Marko Kovacevic") ?>
<td align="center"><?php fsize("epdintro_slo.pdf","SLO intro") ?>
</TD><td align="center"><?php fsize("setup_epidata_slo.exe","SLO setup") ?>
</td><td align="center">&nbsp;
</TD>
</TR>


<?php text1("English","Raw menu file") ?>
<td align="center"><?php fsize("english.lang.txt","Txt file") ?>
</td><td align="center">&nbsp;
</td><td align="center">&nbsp;
</TR>

<?php text1("Arabic test","S. Mahmud") ?>
<td align="center"><a href="../grafik/arabic.gif">View </a>
</td><td align="center">&nbsp;
</td><td align="center">&nbsp;
</TD>
</TR>


<TR><TD COLSPAN="5" ALIGN="Left"><Br>Other languages possible, contact <img src="grafik/emll.png" alt="email"></TD></TR>

<TR>
  <TD colspan="4">
<a name="epic"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
EpiC</h5>
<p>EpiData Command Processor - see <A HREF="/downloads/epic.pdf">explanation</A><br>
  EpiC works with command line options only. Will import, export, pack, revise, count records,do 
consistency checks, zip, unzip, encrypt and decrypt 
<a href="http://csrc.nist.gov/CryptoToolkit/aes/rijndael/">(Rijndael/AES</a> strong encryption) when run from command prompt, cmd or bat files.   
</td>
<td><?php  fsize("epic.zip","Download") ?>
</td></TR>

<TR>
  <TD colspan="4">
<h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
Encrypt/Decrypt</h5>
<p>Tool implementing Encryption and Decryption as part of the "send to" right click mouse menu in file explorer.
Works only with single files. Same as in EpiC and tools menu of EpiData Entry. <a href="http://csrc.nist.gov/CryptoToolkit/aes/rijndael/">(Rijndael/AES strong encryption)</a></p>
<p>After installation check that coder.exe and decoder.exe are found in your "..\documents and settings\x\send to" folder (x: username)</p>
</td>
<td><?php  fsize("setupepidataencrypt.exe","Download") ?>
</td></TR>

<TR><TD colspan="4">
<a name="util"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
Utilities</h5>
</td></tr>


<TR><TD colspan="4"><B>EpiData logo files</B><br>
  Various logo files for promotion of Epidata.<br><br></TD>
<td>  <?php  fsize("epidata_logo.zip","Download") ?>
</td></TR>

<TR><TD colspan="2"><p><B>EpiData Flyers</B><br>
  Promotional material presenting EpiData. <br>
<small>SPC material in collaboration with Gruk, Norway</small></p></TD>
   <td><?php  fsize("epidataflyer_general.pdf","General") ?></TD>
   <td><?php  fsize("epidata_flyer_spc.pdf","SPC statistics") ?></td>
    <td><?php  fsize("epidata_poster_spc.pdf","SPC poster statistics") ?></td>
</TR>

<TR><TD colspan="4"><p><B>EpiGram Diagram software<br></B></p>
<p>Show flowcharts or other diagrams. 
</p></td>
 <TD align="right" >
<a href="http://www.brixtonhealth.com/epigram.html">Web Site</A><br>
<a href="http://www.gruk.no/article/static/606">examples(Norwegian site)</a>.
</TD></TR>

<TR>
  <TD colspan="4"><p><b>OpenEpi Initiative</B></p>
<p>
Calculators like Epi Info v6 Statcalc and EpiTable - can be run via internet directly (Web Site) or downloaded to your computer </p>
</td>
 <TD align="right" >
<A HREF="http://www.openepi.com">Web Site</A><br>
<A HREF="http://www.openepi.com/Downloads/Downloads.htm">Download</A>
</TD></TR>

<TR><TD colspan="4"><p>Unzip Program</p>
<p>Small UnZip program for extracting/unpacking ZIP-files.
MinUnzip.exe kindly provided by <A HREF="http://www.ghisler.com">C.Ghisler</A></p>
</td>
<td>  <?php  fsize("minunzip.exe","Download") ?>
</td></TR>


<tr><td colspan="5">
<a href="#top"><img src="grafik//link_up.gif" alt="Up" border="0"></a>
</td></tr>
</table>
</p>

<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>
