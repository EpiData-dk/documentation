<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head><title>EpiData Software - http://www.epidata.dk</title>
  <META Name="Author" CONTENT="JM.Lauritsen;P. Arias (Translator)">
  <META NAME="Revisit-after" CONTENT="8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../css/epidata.css" rel="stylesheet" type="text/css" media="screen">

  <meta name="description" content="EpiData Web page">
  <meta name="distribution" content="global">
  <meta name="resource-type" content="document">
   <meta name="robots" content="all">
 
<link rel="SHORTCUT ICON" href="http://www.epidata.dk/favicon.ico">

<script type="text/javascript">if (window.self != window.top) window.top.location = window.self.location; </script>

<SCRIPT type="text/javascript" SRC="../css/epidata_sp.js"> </SCRIPT>

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

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('../grafik/r38.png'); background-repeat: repeat-x;"><img src="../grafik/epidata.png" alt="+" height="25px">EpiData Software - Documentaci&oacute;n</h2>
 <div id="header">
      <ul>
        <li><A href="/sp/index.htm" title="P&aacute;gina principal de EpiData">Inicio</a></li>
       <li><a href="/sp/about.htm#about" title="¿Qu&eacute; es la asociaci&oacute;n EpiData">Acerca de</a></li>      
       <li><a href="/sp/support.htm" title="¿C&oacute;mo obtener ayuda">&nbsp;Ayuda</a></li>  
       <li><a href="/download_sp.php" title="Consiga una copia del programa">Descargar</a></li> 
       <li><a href="/documentation_sp.php" title="Documentaci&oacute;n y Notas">Documentaci&oacute;n</a></li> 
       <li><a href="/examples_sp.php" title="Ejemplos para bajarse">Ejemplos</a></li>
       <li><a href="/sp/links.htm title="Cursos, Sitios Web Externos,etc.">Enlaces</a></li>
       <li><a href="/sp/credit.htm" title="¿Qui&eacute;n ha hecho el trabajo?">Cr&eacute;ditos</a></li>       
      <li><a href="/sp/sitemap.htm">Contenidos)</a></li>     
      <li><A HREF="/sp/donations.htm" title="Transferencia Via Banco a Banco">Donaciones</a></li> 
   </ul>
 	</div>

<div class="maincol">
<!-- content of main window -->
<p>

<table CELLPADDING="2" CELLSPACING="0" BORDER="1" FRAME="BELOW" RULES="ROWS" >

<tr>
<TD colspan="3">
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Manuales y Documentaci&oacute;n b&aacute;sica</h4>
<p><a href="#tech">Documentaci&oacute;n T&eacute;cnica</a>
&nbsp;&nbsp; <a href="#notes">Otras Notas</a>
&nbsp;Ver n&uacute;mero de<a href="php/showcountn.php">Descargas</a>
</p>
</TD>
</tr>

<tr>
<td colspan=2><p class="small">Los archivos se subieron en la fecha inidicada. []N&uacute;mero de descargas desde Junio 2004.</p></Td></tr>

<TR><TD colspan="3">
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Manuales de EpiData y Documentos de Introducci&oacute;n y Notas de trabajo</h4></td></tr>


<TR><TD><p><B>Archivos de ayuda EpiData</B><br>
  Archivos de Ayuda detallada para imprimir o ver en pantalla
</p></TD><td>
  <?php  fsize("epidata_pdf.pdf","Descargar") ?>
</TR>

<TR><TD><p><B>EpiTour</B><br>
La Guia de Introducci&oacute;n a EpiData (20 p&aacute;ginas)</p>
</TD><td>
  <?php  fsize("epitour.pdf","Descargar") ?>
</TR>

<TR>
  <TD><p> <b>Data Management for Surveys and Trials (documento en Ingl&eacute;s) </b><br> - Una Introducci&oacute;n pr&aacute;ctica al uso de EpiData 
  escrita por Steve Bennett, Mark Myatt, Damien Jolley y Andrzej Radalowicz.  <font size = "-1">Brixton Health, UK.
Objetivo: <i>"usted deber&iacute;a entender y saber como llevar a cabo la gesti&oacute;n de datos de una investigaci&oacute;n con EpiData.
... durante el libro se realiza un caso pr&aacute;ctico de tipo cl&iacute;nico-epidemiol&oacute;gico, pero los principios de gesti&oacute;n de datos y
los detalles a los que hay que prestar atenci&oacute;n son los mismos independientemenete del tipo de estudio"</i></font>
</p>
    </TD><td>
  <?php  fsize("dmepidata.pdf","Texto (pdf)") ?>    </TD><td>
  <?php  fsize("dmrecfiles.zip","Archivos de datos") ?>
</TR>

<TR>
  <TD ><p><B>EpiData Introduktions note</B> (En Dan&eacute;s)
  <br>Opbygning af skemaer og efterfølgende indtastning ved hjælp af EpiData. Af JM. Lauritsen</p>
</TD><td>
  <?php  fsize("epdintrodknote.pdf","Descargar") ?>
</TR>

<TR><TD><p>
<B>Documento de Introducci&oacute;n y Diagramas de flujo</B><br>
Estos documentos van incluidos en la instalaci&oacute;n del programa en la mayor&iacute;a de los idiomas (est&aacute; en la espa&ntilde;ola).</p>
</td>
   <td><a href="download.php"><Font size=-1>Ver p&aacute;gina de descargas</font></a></td>
</TR>


<TR><TD><p><B>Folletos EpiData</B><br>
  Material promocional para presentar EpiData. 
Material SPC en colaboraci&oacute;n con Gruk, Norway</p></TD>
   <td><?php  fsize("epidata_flyer_spc.pdf","Estadisticas SPC (Ingl&eacute;s)") ?></td>
   <td><?php  fsize("epidata_poster_spc.pdf","Poster estad&iacute;sticas SPC (Ingl&eacute;s)") ?></td>
</TR>


<TR>
<TD colspan=3><a name="tech"></a>
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Documentaci&oacute;n T&eacute;cnica</h4>
</td></TR>


<TR><TD>
<p><B>Archivo de resultados de EpiData Analysis</b>
<br>Lauritsen JM. Dise&ntilde;o del archivo de resultados de EpiData Analysis. Con contribuciones de J. Hockin.
</td><td>
  <?php  fsize("epidata_analysis_output_definition.pdf","Descargar (Ingl&eacute;s)") ?>
</TR>

<TR><TD>
<p><B>&oacute;rdenes y funciones</b>
<br>Lauritsen JM. &oacute;rdenes y Funciones de EpiData Analysis. Con contribuciones de J. Hockin.
</td><td>
  <?php  fsize("commands.htm","Ver") ?>
</TR>

<TR><TD>
<p><B>Estructura de datos</b>
<br>Bruus M & Lauritsen JM. Descripci&oacute;n t&eacute;cnica de la estructura de los archivos de EpiData. 
</td><td>
  <?php  fsize("epidata_datafile.pdf","Descargar(ingl&eacute;s)") ?>
</TR>

<TR>
<TD><p><B>Funciones definidas por usuarios</b>
<br>"Funciones definidas por usuarios" en archivos chk. Programado por S.Mahmud. Dos ejemplos:<font clss="small">
<ul><li class="c">Algoritmo Gumm (By L.Hvidberg, J.Mortensen & A Skytthe. Institute of Public Health, Epidemiology
University of Southern Denmark, Denmark) 
<li class="c">Funciones extendidas: Soundex y Metaphone (By S.Mahmud. Univ. of Mcguill, Montreaul, Canada)
</ul>
</font>
</p>
</td><td>
  <?php  fsize("udf_epidata.pdf","Descripci&oacute;n general(ingl&eacute;s)") ?>    </TD><td>
  <?php  fsize("udf_epidata.zip","C&oacute;digo fuente & ejemplos(ingl&eacute;s)") ?>
</TR>

<TR>
<TD><p><B>Traducci&oacute;n de archivos</b>
<br>Archivos fuente para la traducci&oacute;n de documentos e instrucciones para la traducci&oacute;n. </p>
</td><td>
  <?php  fsize("translation_package.zip","EpiData Entry") ?>
</TR>

<TR>
<TD><p><B>Webservice Version</b><br>
El programa puede acceder via protocolo SOAP al n&uacute;mero de versi&oacute;n. 
<font color=red> Atenci&oacute;n: esto es altamente t&eacute;cnico </font>No tiene ninguna importancia para los usuarios normales, pero puede ser &uacute;til para desarrolladores.
Este servicio es llamado por la opci&oacute;n "Check Version" del men&uacute; Help de EpiData Analysis.</p>
</td><td>
  <a href="http://www.epidata.dk/ws/epdservices.php">Ver documentaci&oacute;n</a>
</td></TR>



<TR>
<TD>
<ul><B>Est&aacute;ndares implementados</b><li>Exporta datos a Stata, SPSS y SAS conservando la etiquetas y la definici&oacute;n de valores "missing"; a DBF y CSV exporta los datos crudos.</li>
<li>Importa datos de DBF, CSV y Stata (este con etiquetas y definici&oacute;n de valores "missing".</li>
<li>Analysis lee los formatos estandar de datos (dbf/csv/rec)</li>
<li>Analysis produce archivos de resultado en HTML estandar,<a href="http://www.w3c.org">compatible W3C</a></li>
</ul>
</td><td colspan="2">
  <a href="http://csrc.nist.gov/CryptoToolkit/aes/rijndael/">AES encriptaci&oacute;n (Rijndael)</a>
  <br><a href="http://www.w3c.org">W3C</a>
  <br><a href="http://www.stata.com">Stata</a>
</td></TR>


<TR><TD colspan=3><a name="notas"></a>
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Otras notas</h4>
</td></tr>


<TR>
  <TD><p><p><B>Take good care of your Data (documento en Ingl&eacute;s)</B>
  <br>
Consideraciones y  sugerencias para conseguir datos de buena calidad. Escrito por Svend Juul
con contribuciones de JM Lauritsen and A Jørgensen. Aarhus University, Denmark,</p>
</TD><td>
  <?php  fsize("takecare.pdf","Descargar") ?>
</TR>


<tr>
<TD><p><p><B>Datadocumentation principles - case (En Dan&eacute;s)</B>
 <br>En forma de una introducci&oacute;n a Stata 6 (www.stata.com) esta nota lleva a los lectores a trav&eacute;s del proceso para una 
completa documentaci&oacute;n de sus datos. Por JM.Lauritsen, Odense Denmark. (<a href="downloads/stintro.pdf">Indice</a>)
Los archivos de datos pueden ser convertidos con EpiData desde Stata a otros formatos.</p>
</TD><td>
  <?php  fsize("statanot.pdf","Descargar") ?>
  <?php  fsize("statanotfiles.zip","Archivos de datos") ?>
</TR>


<tr>
<TD><p><p><B>Introducci&oacute;n a Stata (Ingl&eacute;s)</B>
  <br>
Introducci&oacute;n estructurada a Stata (www.stata.com) y otras notas por Svend Juul
Aarhus University, Denmark. </p>
</TD>
  <td align=center><a href="http://www.folkesundhed.au.dk/uddannelse/software">Sitio Web</a>
</td>
</TR>

</table>
</p>

<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>
