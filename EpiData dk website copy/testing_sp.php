<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head><title>EpiData Software - http://www.epidata.dk</title>
  <META Name="Author" CONTENT="JM.Lauritsen;P.Arias(Translator)">
  <META NAME="Revisit-after" CONTENT="8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../css/epidata.css" rel="stylesheet" type="text/css" media="screen">

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

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('../grafik/r38.png'); background-repeat: repeat-x;"><img src="../grafik/epidata.png" alt="+" height="25px">EpiData Software - Versiones de prueba</h2>
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
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Versiones de prueba de programas en desarrollo. </h4> 

<p>Los programas de esta p&aacute;gina est&aacute;n <b>en fase de desarrollo</b>. 
<font color="RED"> Tome sus precauciones y asegurese de que hacen lo que dicen que hacen. 
Trabaje siempre con copias de su datos, no con los originales.</font> Realice sus propias comprobaciones antes de confiar
en las versiones que consiga en esta p&aacute;gina para su tabajo habitual.
</p>
<hr><p> 
La versi&oacute;n m&aacute;s actual puede ser conseguida de <a href="download.php">aqu&iacute;</a>. 
Informaci&oacute;n de versiones: <a href="analysisversioninfo.htm">EpiData Analysis</a>
&nbsp;&nbsp;&nbsp; <a href="entryversioninfo.htm">EpiData Entry & EpiC</a></p>


</p>
<hr>
<p>Los archivos de prueba se suministran o como un archivo ZIP o como archivo instalable(exe). </p>

<p>
Notifique cualquier error o problema a la <a href="http://lists.umanitoba.ca/pipermail/epidata-list">lista de EpiData</a>
</p>

<h5 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
EpiData Analysis</h5>

<!--
<p><b>No test version at this time</b></p>
-->

<table><tbody><tr><td><b>
Versi&oacute;n para probar: 
  1.1
 Rel. 4
 (Build &nbsp;67
)</b><br><br>Cambios: <a href="http://www.epidata.dk/analysisversioninfo.htm#test">Ver informaci&oacute;n de versiones</a><br>Notifique errores a <a href="http://lists.umanitoba.ca/mailman/listinfo/epidata-list">Lista de EpiData</a>
<br><ul>Por favor, pruebe estas cosas: <li>Nueva instalaci&oacute;n con configuraci&oacute;n de par&aacute;metros simultanea</li><li>Sistema de Ayuda detallado (por ejmplo, escriba "read" y pulse F1), </li><li>&oacute;rden experimental con textos exactos: sktab (a&uacute;n muy en pruebas)
</li></ul></td>
<td width="10%">&nbsp;</td>
<td><a href="http://www.epidata.dk/php/downloadc.php?file=setupepidatastattest.exe">(Archivo Setup)<br></a><font class="small">15.Mar 2006 (2 Mb)<b>&nbsp;[343]</b></font>  <br><br><small>Descargas hasta esta versi&oacute;n: 338
</small></td> 
</tr></tbody></table>


<h5 style="background-image: url(grafik/r.png); background-repeat: repeat-x;">
EpiData Entry</h5>

<!-- <p><b>No test version at this time</b></p> -->

<table><tbody><tr>
<td colspan="2">  
   Versi&oacute;n: 3.1
 (Build &nbsp;12 Marzo 2006  (La instalaci&oacute;n dice 12 de Enero)
)<br><br><ul>Error solucionado<li>El programa se quedaba colgado en situaciones muy concretas: <br>"autosearch list", relate, a&ntilde;adir un registro hijo a un archivo vacio
</li></ul></td><td width="10%">&nbsp;</td><td>  <a href="http://www.epidata.dk/php/downloadc.php?file=setupepidataentrytest.exe">Archivo Setup</a><br><font class="small">12.Mar 2006<br>(0.9 Mb)<b>&nbsp;[16]</b></font>  <br><small>Descargas hasta esta versi&oacute;n: 0
</small></td> 
</tr>
</tbody></table>



<h5 style="background-image: url(grafik/r.png); background-repeat: repeat-x;">
EpiC - EpiData Batch Processor</h5>

<p><b>No hay ninguna versi&oacute;n en pruebas en este momento</b></p>

<!--
<TABLE>
<TR>
  <TD ><br><B>EpiC version 3.1beta</B><br>
  Accepts checkcommands in EpiData 3.1  
<br>Please test it before you rely on it working correctly for actual work. 
</td>
<td >
  <A HREF="php/downloadc.php?file=epictest.zip">v3.1 Beta</A><br><FONT class="small">20.Oct 2004<br>(0.3 Mb)<b>&nbsp;[373]</b></FONT></td> 
</TR>
</TABLE>
-->


<script type="text/javascript">foot()</script><div id="foot"><hr><p class="center">All materials copyright by EpiData Association 2000-2006 unless otherwise stated. <a href="http://www.epidata.dk/about.htm#disclaim">Disclaimer and GNU license</a><br>Revised Thu, 16 Mar 2006 16:45:05 GMT</p></div>

</div><!-- end column text -->
</div><!-- end sizer -->
</div><!-- id="expander" -->
<script language="JavaScript">
<!--
var SymRealOnLoad;
var SymRealOnUnload;

function SymOnUnload()
{
  window.open = SymWinOpen;
  if(SymRealOnUnload != null)
     SymRealOnUnload();
}

function SymOnLoad()
{
  if(SymRealOnLoad != null)
     SymRealOnLoad();
  window.open = SymRealWinOpen;
  SymRealOnUnload = window.onunload;
  window.onunload = SymOnUnload;
}

SymRealOnLoad = window.onload;
window.onload = SymOnLoad;

//-->
</script>

</body></html>
