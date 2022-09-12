<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head><title>EpiData Software - http://www.epidata.dk</title>
  <META Name="Author" CONTENT="JM.Lauritsen;P.Arias (Translator)">
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

<a href="#top"></a><h2 class="top" class="top" style="background-image: url('grafik/r38.png'); background-repeat: repeat-x;"><img src="grafik/epidata.png" alt="+" height="25px">EpiData Software - Examples</h2>
   <div id="header">
      <ul>
        <li><A href="/sp/index.htm" title="P&aacute;gina principal de EpiData">Inicio</a></li>
       <li><a href="/sp/about.htm#about" title="¿Qu&eacute; es la asociaci&oacute;n EpiData">Acerca de</a></li>      
       <li><a href="/sp/support.htm" title="¿C&oacute;mo obtener ayuda">&nbsp;Ayuda</a></li>  
       <li><a href="download_sp.php" title="Consiga una copia del programa">Descargar</a></li> 
       <li><a href="documentation_sp.php" title="Documentaci&oacute;n y Notas">Documentaci&oacute;n</a></li> 
       <li><a href="examples_sp.php" title="Ejemplos para bajarse">Ejemplos</a></li>
       <li><a href="/sp/links.htm" title="Cursos, Sitios Web Externos,etc.">Enlaces</a></li>
       <li><a href="/sp/credit.htm" title="¿Qui&eacute;n ha hecho el trabajo?">Cr&eacute;ditos</a></li>       
      <li><a href="/sp/sitemap.htm">Contenidos</a></li>     
      <li><A HREF="/sp/donations.htm" title="Transferencia Via Banco a Banco">Donaciones</a></li> 
   </ul>
 	</div>


<div class="maincol">
<!-- content of main window -->

<p>

<table CELLPADDING="2" CELLSPACING="0" BORDER="1" FRAME="BELOW" RULES="ROWS" >
<!-- Actual contents of this page -->

<TR><TD colspan="2">
<h4 style="background-image: url('grafik/r.png');   background-repeat: repeat-x;">
Ejemplos que pueden servir de inspiraci&oacute;n a los usuarios de EpiData</h4></td></tr>

<tr><td colspan="2">
<p>El orden de los archivos se hace seg&uacute;n categor&iacute;as. 
<small>El n&uacute;mero de descargas desde <b> 16 de Junio de 2004</b> se muestra entre [&nbsp;&nbsp;]. 
Las publicaciones de los ejemplos se pueden encontrar <a href="links.htm#pub">aqu&iacute;</a>
</p>
</Td></tr>

<TR>
  <TD ><B>Ejemplo B&aacute;sico - Primero</B><br>  
  Los archivos del "ejemplo primero (first)" (QES/REC/CHK) usados como ejemplos en EpiTour y documento de Generalidades.
  </td><td>
  <?php  fsize("first.htm","Ver") ?></td><td>
  <?php  fsize("first.zip","Descargas") ?>
</TR>

<TR>
  <TD ><br><B>Ejemplo relacional - Vivienda, Persona, Visita</B><br>
  Ejemplo de organizaci&oacute;n de datos en tres niveles: Vivienda-Personas-Visitas, basado en el archivo de ejemplo de Epi Info. 
  </td><td>
  <?php  fsize("houseexp.pdf","Ver") ?></td><td>
  <?php  fsize("house.zip","Descargar") ?>
</TR>

<TR>
  <TD  colspan="3"><table><tr><td width="75%">
<p><B>Ejemplo relacional - Infecciones hospitalarias - 3 ejemplos</B> <br>
La informaci&oacute;n de los pacientes va en un archivo y la de las infecciones en otros. Cinco archivos relacionados y el c&oacute;digo para los campos en
en dos archivos independientes con "comment legal" sobre ficheros rec.
El sistema puede usarse para declarar al Dutch National Nosocomial Infection Surveillance System <A HREF="http://www.PREZIES.nl">Prezies</a>
<small>Una descripci&oacute;n de como grabar los datos en el <A HREF="http://www.epidata.dk/php/downloadc.php?file=powi.pdf"> Surgical Site Infection system (POWI)</a>  
<br>Todos los ficheros est&aacute;n en Holandes, pero es f&aacute;cil entender los principios y la l&oacute;gica de programaci&oacute;n</small>
<br>Proporcionado por Louk Meertens, Netherlands. </p>
  </td><td>  <?php  fsize("powi.exe","Powi") ?></td><td>
  <?php  fsize("hartop.exe","Hartop") ?><br>
  <?php  fsize("modulsepsis.exe","Sepsis") ?>
 </tr></table></td>
</TR>

<TR>
  <TD><p><B>Ejemplo relacional - Un sistema multinivel:  Ciudad, Familia, Persona - Encuesta nutricional regional en Burkina Faso</B><br>
Un completo ejemplo con diversos niveles de respuesta. Incluye codificaci&oacute;n mediante &oacute;rdenes "comment legal". 
<font size=-1>Si prueba el sistema, asegurese de <I>COMPLETAR TODOS LOS ARCHIVOS RELACIONALES</i>, de lo contrario el sistema
no funcionar&aacute; correctamente.</font>
<br>Proporcionado por: Yves Martin-Prevel, Epid&eacute;miologiste (Institut de Recherche pour le D&eacute;veloppement) Burkina Faso.
<br>Si desea consultar las publicaciones en las que se us&oacute; este sistema, pulse <a href="links.htm#pub">aqu&iacute;</a></p>
  </TD><td>
  <?php  fsize("yves.htm","Ver") ?></td><td>
  <?php  fsize("yves.zip","Descargar") ?>
</TR>


<TR>
  <TD ><br><B>Ejemplo relacional - Bloqueo del campo relacional</B> <br>
  Una plantilla de ejemplo donde el campo relacional queda bloqueado una vez que se ha introducido un dato. 
  Proporcionado por: Louk Meertens, Netherlands. 
  </TD><td>
  <?php  fsize("lockexample.zip","Descargar") ?>
  </TR>


<TR>
  <TD ><br><B>Comment Legal - combinado con valores libres</B><br>
   Un ejemplo de como usar una lista de valores legales, por ejemplo Denmark, France, Cameroun y adem&aacute;s permitir
la entrada de un valor no incluido en la lista:  Schwitzerland.</TD><td>
  <?php  fsize("legalplusfree.zip","Descargar") ?>
</TR>

<TR>
  <TD ><br><B>Comment legal usando un archivo rec - Nombres de p&aacute;jaros y garrapatas</B><br>
 En este ejemplo se usa la orden "type comment" para mostrar nombres de p&aacute;jaros y garrapatas. Incluye tres archivos
uno de ellos es el principal (ticks.rec), otro es una lista de nombres cient&iacute;ficos de mas de 100 aves (aves.letter.rec) y
otro tiene unos pocos nombres de garrapatas (tick.letter.rec). 
<br>Proporcionado por Jose Arturo (Saludos desde Mexico).</TD><td>
  <?php  fsize("ticks.zip","Descargar") ?>
</TR>

<TR>
  <TD ><br><B>Comment legal con archivo rec - Lista de bacterias</B><br>
   Un ejemplo de como conseguir un texto de un "comment legal" en un campo de texto mediante el uso de un c&oacute;digo num&eacute;rico
  de una lista que est&aacute; en un archivo REC independiente. Funciona tambi&eacute;n al reves, localiza el c&oacute;digo buscando una cadena
  de texto (nombres de bacterias).
<br>Proporcionado por David Raveh, Israel.</TD><td>
  <?php  fsize("bacteria.zip","Download") ?>
</TR>


<TR>
  <TD ><br><B>C&aacute;lculos - porcentajes</B><br>
  Calcula un porcentaje con decimales tras grabar dos n&uacute;meros enteros.</TD><td>
  <?php  fsize("percent.zip","Descargar") ?>
</TR>

<TR>
  <TD ><br><B>Edad - en el momento actual </B><Br>
  Calcula la edad en el momento de grabaci&oacute;n de la feha de nacimiento</TD><td>
  <?php  fsize("dob.zip","Descargar") ?>
</TR>

<TR>
  <TD ><br><B>Calcular - N&uacute;mero de semana</B><Br>
  Calcula el n&uacute;mero de semana bas&aacute;ndose en una fecha (funciona para los a&ntilde;os 1999-2004)</TD><td>
  <?php  fsize("week.zip","Descargar") ?>
</TR>

<TR>
  <TD ><br><B>C&aacute;lculos - L&iacute;mites de confianza</B><br>
  Calcula los l&iacute;mites de confianza de una proporci&oacute;n. Vea tambi&eacute;n la <a href="http://www.openepi.com">versi&oacute;n javascript</a>
<br>Proporcionado por Kevin Sullivan, Univ. Emory. USA</TD><td>
  <?php  fsize("prop.pdf","Ver") ?></td><td>
  <?php  fsize("prop.zip","Descargar") ?>
</TR>

<TR>
<TD><B>Funciones definidas de usuarios en EpiData</b>
<br>Explica como definir funciones de usuario para c&oacute;digo check. Programado por S.Mahmud. Dos ejemplos:<font size="-1">
<ul><li>Algoritmo Gumm (By L.Hvidberg, J.Mortensen & A Skytthe. Institute of Public Health, Epidemiology
University of Southern Denmark, Denmark)</a>
<li>Funciones ampliadas Soundex y Metaphone (By S.Mahmud. Univ. of Mcguill, Montreaul, Canada)
</ul></font>
</td><td>
  <?php  fsize("udf_epidata.pdf","Descripci&oacute;n general") ?></td><td>
  <?php  fsize("udf_epidata.zip","Codigo fuente & ejemplos") ?>
</TR>

<TR>
  <TD ><br><B>C&aacute;lculos y validaci&oacute;n - comprobaci&oacute;n del n&uacute;mero cpr (Dinamarca)</B><br>
  (Danish: Fil til modulus 11 kontrol). Este programa comprueba si un n&uacute;mero es un N&uacute;mero de Identificaci&oacute;n Personal V&aacute;lido en Dinamarca. 
  Bas&aacute;ndose en una combinaci&oacute;n de la fecha de nacimiento y un ID &uacute;nico, el resultado debe ser igual a 0. En caso contrario
el n&uacute;mero es incorrecto. Puede usarse para crear una clave de identificaci&oacute;n &uacute;nica. 
	<br>Proporcionado por Henrik Bøggild, Denmark - comentarios en ingl&eacute;s.
	<br>Se ha solucionado un problema con las etiquetas (5 de Nov. de 2002)</TD><td>
  <?php  fsize("cpr.pdf","Ver") ?></td><td>
  <?php  fsize("cpr.zip","Descargar") ?>
</TR>

<TR><TD><br><B>Explicaci&oacute;n - Orden MOD</B><br>
  Explicaci&oacute;n detallada del uso de la orden MOD</TD><td>
  <?php  fsize("mod.html","Ver") ?>
</TR>

<TR><TD COLSPAN="3" ALIGN="RIGHT"><hr>¿qu&eacute; son los <A HREF="#zip">archivos ZIP?</A></TD></TR>

</TABLE>

<h4 style="background-image: url('../grafik/r.png');   background-repeat: repeat-x;">
Envio de ejemplos adicionales </h4>

<p>Si desea a&ntilde;adir alg&uacute;n ejemplo, envie una copia de los archivos REC/CHK y QES a info@epidata.dk <br>
Los archivos REC no necesitan tener tener. Solo con ver los archivos REC/CHK incluso sin datos puede ser de mucha ayuda.
<br>Como medida antispam, solo proporcionamos en esta p&aacute;gina el nombre y el pais de la persona que creo el ejemplo. El
resto de sus datos de contacto van inluidos en el archivo ZIP del ejemplo.

<h4 style="background-image: url('../grafik/r.png');   background-repeat: repeat-x;">
¿C&oacute;mo trabajar con los ejemplos de EpiData?</h4>
<OL>
<LI>Descargue el <A HREF="#zip">archivo ZIP</A> que contiene el ejemplo en una carpeta temporal (por ejemplo c:\windows\temp).
<LI>Descomprima los archivos del <A HREF="#zip">archivo ZIP</A> usando un programa de compresi&oacute;n/descompresi&oacute;n.
<LI>Inicie EpIData y abra el archivo de ejemplo
</OL>

<p><A NAME="zip"><B>Archivos ZIP </b></a>
Un archivo ZIP es un archivo que contiene uno o m&aacute;s archivos sencillos. Los archivos Zip ocupan menos y son por tanto m&aacute;s 
r&aacute;pidos de enviar por Internet. El tama&ntilde;o total de los archivos incluidos est&aacute; comprimido. Debe extraer los archivos incluidos
usando un programa especial, por ejmplo <b>una herramienta del men&uacute; de EpiData Entry </b> 
</p>

<SCRIPT type="text/javascript">foot()</script>

</div><!- end column text -->
</div><!- end sizer -->
</div><!- id="expander" -->

</body></html>
