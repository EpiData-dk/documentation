<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head><title>EpiData Software - http://www.epidata.dk</title>
  <META Name="Author" CONTENT="JM.Lauritsen; P. Arias (Translator)">
  <META NAME="Revisit-after" CONTENT="8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="css/epidata.css" rel="stylesheet" type="text/css" media="screen">

  <meta name="description" content="EpiData Web page">
  <meta name="distribution" content="global">
  <meta name="resource-type" content="document">
   <meta name="robots" content="all">
 
<link rel="SHORTCUT ICON" href="http://www.epidata.dk/favicon.ico">

<script type="text/javascript">if (window.self != window.top) window.top.location = window.self.location; </script>

<SCRIPT type="text/javascript" SRC="css/epidata_sp.js"> </SCRIPT>

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

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('grafik/r38.png'); background-repeat: repeat-x;"><img src="grafik/epidata.png" alt="+" height="25px">EpiData Software - Descargas</h2>
 <div id="header">
      <ul>
        <li><A href="/sp/index.htm" title="P&aacute;gina principal de EpiData">Inicio</a></li>
       <li><a href="/sp/about.htm#about" title="¿Qu&eacute; es la asociaci&oacute;n EpiData">Acerca de</a></li>      
       <li><a href="/sp/support.htm" title="¿C&oacute;mo obtener ayuda">&nbsp;Ayuda</a></li>  
       <li><a href="download_sp.php" title="Consiga una copia del programa">Descargar</a></li> 
       <li><a href="documentation_sp.php" title="Documentaci&oacute;n y Notas">Documentaci&oacute;n</a></li> 
       <li><a href="examples_sp.php" title="Ejemplos para bajarse">Ejemplos</a></li>
       <li><a href="/sp/links.htm title="Cursos, Sitios Web Externos,etc.">Enlaces</a></li>
       <li><a href="/sp/credit.htm" title="¿Qui&eacute;n ha hecho el trabajo?">Cr&eacute;ditos</a></li>       
      <li><a href="/sp/sitemap.htm">Contenidos</a></li>     
      <li><A HREF="/sp/donations.htm" title="Transferencia Via Banco a Banco">Donaciones</a></li> 
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
&nbsp;<a href="#encrypt">Encrypt</a>   
&nbsp;<a href="#util">Utilidades & Flyers</a>
&nbsp;Descargas <a href="php/showcountn.php">Total acumulado</a>
&nbsp;<a href="/testing_sp.php">Versiones de Prueba</a></p>

</Td></Tr><tr>
<td colspan=5>
<p class="small">La fecha indica cuando se coloc&oacute; el archivo. Contador de descargas [] desde Junio de 2004.</p> </Td></tr>

<TR>
<tr><TD VALIGN=top colspan="5">
<a name="ed"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
EpiData Analysis</a></h5><p> Versi&oacute;n actual: <b>
 <?php $versionfile = file("version//epidatastat.version");
  $version = $versionfile[0];
  $release = $versionfile[1];
  $build = $versionfile[2];
  echo " $version Fecha. $release (Build &nbsp;$build";
 ?>)</b>&nbsp; 
<p>Este es el programa de an&aacute;lisis. V1.0 liberada en Sept. 2005.<br>
Decarge bien un &uacute;nico archivo setup (exe), o zip o TODO en peque&ntilde;as partes. 
El archivo Setup incluye el programa, la introducci&oacute;n y la documentaci&oacute;n fundamental. </p>
</td></tr>
<tr><td colspan="1" Valign="top"><p><b>Versi&oacute;n en Ingl&eacute;s </b></p></td>
<td colspan="3">
  <?php  fsize2("epidataanalysis_introduction_en.pdf","EN: Introducci&oacute;n (pdf)") ?> <br>
  <?php  fsize2("flowsheet_analysis_en.pdf","EN: Flujo de trabajo (pdf)") ?><br><br>

<?php  fsize2("setupepidatastat.exe","EN: Archivo &uacute;nico: setup exe") ?><br>
  <?php  fsize2("setupepidatastat.zip","EN: Archivo &uacute;nico: zip ") ?>

</td> 
<td colspan="1" Valign="top">Archivos&nbsp;en&nbsp;partes&nbsp;(bajar&nbsp;todos)<br>
  <?php  fsize2("setupepidatastatp.exe","(Parte 1)") ?><br>
  <?php  fsize2("setupepidatastatp-1.bin","(Parte 2)") ?><br>
  <?php  fsize2("setupepidatastatp-2.bin","(Parte 3)") ?><br>
  <?php  fsize2("setupepidatastatp-3.bin","(Parte 4)") ?><br>
  <?php  fsize2("setupepidatastatp-4.bin","(Parte 5)") ?>
</td>
</TR>

<tr><td colspan="1" Valign="top">
<p>Versi&oacute;n Espa&ntilde;ol</b></p>
</td><td colspan="3">
  <?php  fsize2("epidataanalysis_introduction_es.pdf","ES: Introducci&oacute;n breve (pdf)") ?> <br>
  <?php  fsize2("flowsheet_analysis_es.pdf","ES: Flujo de trabajo (pdf)") ?><br><br>
   <?php  fsize2("setupepidatastat_es.exe","ES: Archivo &uacute;nico: setup exe") ?><br>
   <?php  fsize2("setupepidatastat_es.zip","ES: Archivo &uacute;nico: Zip") ?>
</td> 
<td valign="bottom">
<p>(NOTA: Solo est&aacute;n traducidos la Instalaci&oacute;n y archivos de introducci&oacute;n)</p>
</td></TR>

<tr><TD VALIGN=top colspan="5">

<a name="ee"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
EpiData Entry</a></h5><p>
Entry es adecuado para grabar y documentar datos. 
Descargue el archivo de instalaci&oacute;n en el idioma que desee. Incluye el programa y la documentaci&oacute;n esencial. 
Una traducci&oacute;n incluye la documentaci&oacute;n y los textos de los men&uacute;s, etc.
La versi&oacute;n actual es la misma para todos los idiomas. Traducciones conocidas.</p>
<p>
<br><br>Versi&oacute;n actual: <b>
<?php $versionfile = file("version//epidataentry.version");
  $version = $versionfile[0];
  $build = $versionfile[1];
  echo "$version </b> Build: (<b>&nbsp;$build</b>)";
 ?>
. Una "build" es una revisi&oacute;n menor, vea la <a href="/entryversion.htm">lista de modificaciones</a><p>
</td></tr>
<TR>
<Td>Ingl&eacute;s 
</Td><td align="center"><?php fsize("epidata_flow.pdf","Flujo de trabajo") ?>
</TD><td align="center"><?php fsize("epdintro.pdf","Introducci&oacute;n") ?>
</TD><td align="center"><?php fsize("setup_epidata.exe","Archivo Setup.exe") ?>
</TD><td align="center"><?php fsize("epidata_pdf.pdf","Ayudas extensas(pdf)") ?>
</Td>
</Tr>


<TR>
<Td>Ingl&eacute;s 
</Td><td colspan="3">Baje esto si solo necesita la &uacute;ltima versi&oacute;n y ya tiene la documentaci&oacute;n y archivos de idiomas. 
Descomprimalo y reemplace el archivo epidata.exe viejo.
</TD><td align="center"><?php fsize("epidata.zip","Zip - solo ejecutable") ?>
</Td>
</Tr>

<?php text1("Chino (simplificado)","HE Wu (men&uacute; & introducci&oacute;n)& Tao Li-na<br>Lv Jun (Ayuda detallada)") ?>
<td align="center">
<?php fsize("epdintro_cn.pdf","Intro en Chino") ?><br>
<a href="grafik/china.gif">Vista por Lu Zhijian</a>
</TD><td align="center"><?php fsize("setup_epidata_cn.exe","Instalaci&oacute;n (Chino)") ?>
</TD><td align="center"><?php fsize("epdhelp_cn.pdf","Ayuda detallada (pdf)") ?>
<br><?php fsize("epdhelp_cn.zip","Ayuda detallada(zip)") ?>
</TD>
</TR>

<?php text1("Dan&eacute;s","Michael Bruus & Jens Lauritsen") ?>
<td align="center"><?php fsize("epdintro_dk.pdf","Intro (Dan&eacute;s)") ?>
</TD><td align="center"><?php fsize("setup_epidata_dk.exe","Instalaci&oacute;n (Dan&eacute;s)") ?>
<!-- </TD><td align="center"><A HREF="indexdk.htm">Sitio Web</a> -->
</TD>
</TR>

<?php text1("Alem&aacute;n","Wolfram an der Heiden") ?>
<td align="center"><?php fsize("readme_de.rtf","Leeme (alem&aacute;n)") ?>
</TD><td align="center"><?php fsize("setup_epidata_de.exe","Instalaci&oacute;n (alem&aacute;n)") ?>
</td><td align="center">La instalaci&oacute;n es en alem&aacute;n, el men&uacute; no est&aacute; traducido a&uacute;n 
</TD>
</TR>

<?php text1("Espa&ntilde;ol (de Espa&ntilde;a)","Pedro Arias y Juan Carlos F. Merino") ?>
<td align="center"><?php fsize("epdintro_sp.pdf","Intro en espa&ntilde;ol") ?>
</TD><td align="center"><?php fsize("setup_epidata_sp.exe","Instalaci&oacute;n (Espa&ntilde;ol)") ?>
</TD><td align="center"><A HREF="http://www.cica.es/epiinfo">Sitio Web</a>
</TD>
</TR>


<?php text1("Franc&eacute;s","EpiConcept & Epiter Group") ?>
<td align="center"><?php fsize("epdintro_fr.pdf","Intro en franc&eacute;s") ?>
</TD><td align="center"><?php fsize("setup_epidata_fr.exe","Instalaci&oacute;n(Franc&eacute;s)") ?>
<br><?php fsize("epdhelp_fr.pdf","Ayuda detallada") ?>
</TD><td align="center"><A HREF="http://www.epiconcept.fr"><font size=-1>EpiConcept</a>
<br><a href="http://www.epiter.org/"><font size=-1>Epiter</a> 
</TD></TR>


<?php text1("Italiano","Pasquale Falasca, Letizia Zannoni & Ezio Casari") ?>
<td align="center"><?php fsize("epdintro_it.pdf","Intro en Italiano") ?>
</TD><td align="center"><?php fsize("setup_epidata_it.exe","Instalaci&oacute;n (italiano)") ?>
</TD><td align="center"><A HREF="http://www.epiinfo.it"><font size=-1>Sitio Web</a>
</TD></TR>

<?php text1("Holand&eacute;s","Louk Meertens") ?>
<td align="center"><?php fsize("epdintro_nl.pdf","Intro en Holand&eacute;s") ?>
</TD><td align="center"><?php fsize("setup_epidata_nl.exe","Instalaci&oacute;n(Holand&eacute;s)") ?>
<td align="center">&nbsp; 
</TD></TR>

<?php text1("Noruego","Vegard Høgli") ?>
<td align="center"><?php fsize("epdintro_no.pdf","Intro en Noruego") ?>
</TD><td align="center"><?php fsize("setup_epidata_no.exe","Instalaci&oacute;n(Noruego)") ?>
</TD><td align="center"><A HREF="http://www.gruk.no/epi-info">Sitio Web</a>
</TD>
</TR>



<?php text1("Polaco","Piotr Ko³odziejczyk") ?>
<td align="center"><?php fsize("epdintro_pl.pdf","Intro en Polaco") ?>
</TD><td align="center"><?php fsize("setup_epidata_pl.exe","Instalaci&oacute;n (Polaco)") ?>
</TD><td align="center"><A HREF="http://www.epidata.prv.pl">Sitio Web</a>
</TD>
</TR>


<?php text1("Portugu&eacute;s","JPA Haddad & P Marques-Vidal & Marco Moura") ?>
<td align="center"><?php fsize("epdintro_pt.pdf","Introducc&iacute;on(portugu&eacute;s)") ?>
</TD><td align="center"><?php fsize("setup_epidata_pt.exe","Instalaci&oacute;n (Portugal)") ?>
</TD><td align="center"><?php fsize("setup_epidata_brazil.exe","Instalaci&oacute;n(Brasil)") ?>
</Td></tr>

<?php text1("Rumano","no finalizada") ?>
<td align="left" colspan="3"><?php fsize("setup_epidata_ro.exe","Instalaci&oacute;n (Rumano)") ?>
</Td></tr>

<?php text1("Ruso","Sergey Eremin & Sam Brown") ?>
<td align="center"><?php fsize("readme_ru.rtf","Leeme (en Ruso)") ?>
</TD><td align="center"><?php fsize("setup_epidata_ru.exe","Instalaci&oacute;n (Ruso)") ?>
</td><td align="center">&nbsp;
</TD>
</TR>


<?php text1("Serbio","Marko Kovacevic") ?>
<td align="center"><?php fsize("flowsheet_serb.pdf","Flujo de trabajo") ?>
</TD><td align="center"><?php fsize("epdintro_serb.pdf","Intro en Serbio") ?>
</TD><td align="center"><?php fsize("setup_epidata_serb.exe","Instalaci&oacute;n (Serbio)") ?><br>
<?php fsize("epdlang_serb2.zip","Documentacion") ?>
</Td></tr>

<?php text1("Esloveno","Marko Kovacevic") ?>
<td align="center"><?php fsize("epdintro_slo.pdf","Intro en Esloveno") ?>
</TD><td align="center"><?php fsize("setup_epidata_slo.exe","Instalaci&oacute;n (Esloveno)") ?>
</td><td align="center">&nbsp;
</TD>
</TR>


<?php text1("Ingl&eacute;s","Archivo del men&uacute; (textos)") ?>
<td align="center"><?php fsize("english.lang.txt","Archivo TXT") ?>
</td><td align="center">&nbsp;
</td><td align="center">&nbsp;
</TR>

<?php text1("&aacute;rabe (pruebas)","S. Mahmud") ?>
<td align="center"><a href="grafik/arabic.gif">View </a>
</td><td align="center">&nbsp;
</td><td align="center">&nbsp;
</TD>
</TR>


<TR><TD COLSPAN="5" ALIGN="Left"><Br>Otros idiomas, por favor contacte con <img src="grafik/emll.png" alt="email"></TD></TR>

<TR>
  <TD colspan="4">
<a name="epic"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
EpiC</h5>
<p>EpiData Procesador de &oacute;rdenes - vea una <A HREF="/downloads/epic.pdf">introducci&oacute;n</A><br>
  EpiC funciona &uacute;nicamente desde la l&iacute;nea de comandos. EpiC importa, exporta, empaqueta, revisa, cuenta registros,hace control 
de consistencia, comprime(zip) y descomprime(unzip), encripta y desencripta
<a href="http://csrc.nist.gov/CryptoToolkit/aes/rijndael/"> (Rijndael/AES</a> encriptaci&oacute;n fuerte) cuando se usa desde la l&iacute;nea
de comandos o desde un archivo de procesamiento por lotes.   
</td>
<td><?php  fsize("epic.zip","Decargar") ?>
</td></TR>

<TR>
  <TD colspan="4">
<a name="encrypt"><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
Encrypt/Decrypt</h5>
<p>Herramienta para la encriptaci&oacute;n/desencriptaci&oacute;n de archivos. Se incopora al men&uacute; contextual del explorador de Windows como parte de
la opci&oacute;n "enviar a". Funciona solo con archivos individuales. Realiza las mismas funciones que EpiC y las herramientas de EpiData Entry. <a href="http://csrc.nist.gov/CryptoToolkit/aes/rijndael/">(Rijndael/AES encriptaci&oacute;n fuerte)</a></p>
<p>Despu&eacute;s de descargarlo e instalarlo, aseg&uacute;rese de que los archivos coder.exe y decoder.exe se encuentran en la carpeta "..\documents and settings\x\sendto"(x: su nombre de usuario en su equipo)</p>
</td>
<td><?php  fsize("setupepidataencrypt.exe","Descargar") ?>
</td></TR>

<TR><TD colspan="4">
<a name="util"></a><h5 style="background-image: url('grafik/r.png');background-repeat: repeat-x;">
Utilidades</h5>
</td></tr>


<TR><TD colspan="4"><B>Logos de EpiData </B><br>
  Varios archivos con logos de EpiData para su promoci&oacute;n.<br><br></TD>
<td>  <?php  fsize("epidata_logo.zip","Descargar") ?>
</td></TR>

<TR><TD colspan="2"><p><B>Res&uacute;menes EpiData</B><br>
  Material promotional presentando EpiData. 
materail SPC en colaboraci&oacute;n con Gruk, Norway</p></TD>
   <td><?php  fsize("epidata_flyer_spc.pdf","Estad&iacute;sticas SPC") ?></TD>
   <td><?php  fsize("epidata_poster_spc.pdf","Poster estad&iacute;sticas SPC") ?></td>
</TR>

<TR><TD colspan="4"><p><B>EpiGram: Programa para diagramas<br></B></p>
<p>Permite dise&ntilde;ar Diagramas de flujo y otros diagramas. 
</p></td>
 <TD align="right" >
<a href="http://www.brixtonhealth.com/epigram.html">Sito Web</A><br>
<a href="http://www.gruk.no/article/static/606">ejemplos(Sitio Web Noruego)</a>.
</TD></TR>

<TR>
  <TD colspan="4"><p><b>Editor de textos</B></p>
<p>
  Editor de textos avanzado. Contiene macros por ejemplo para cambios repetidos. 
  ATenci&oacute;n: El autor (Alan Phillips, Lancaster University) <b>NO</b> porporciona 
  ayudas sobre este programa. Su desarrollo se detuvo en 1999, pero a&uacute;n es un buen editor. 
(Todas las p&aacute;ginas de Epidata.dk en ingl&eacute;s est&aacute;n escritas con este editor)
  </TD>
<td>  <?php  fsize("pfesetup.exe","Descargar") ?>
</td></TR>


<TR><TD colspan="4"><p><B>Programa Unzip</B></p>
<p>Peque&ntilde;o programa que permite extraer/sempaquetar archivos ZIP.
MinUnzip.exe ha sido cedido por <A HREF="http://www.ghisler.com">C.Ghisler</A></p>
</td>
<td>  <?php  fsize("minunzip.exe","Descargar") ?>
</td></TR>


<tr><td colspan="5">
<a href="#top"><img src="grafik//link_up.gif" alt="Subir" border="0"></a>
</td></tr>
</table>
</p>

<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>
