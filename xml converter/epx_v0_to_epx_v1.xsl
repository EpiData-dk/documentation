<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0"
 xmlns:epi="http://something">

  <!-- Build global variables requred througout the XML -->
 
 <!-- Map ValueLabels -->
  <xsl:variable name="OldVLNames" as="item()*">
   <xsl:for-each select="/EpiData/ValueLabelSets/ValueLabelSet">
    <xsl:value-of select="@id"/>
   </xsl:for-each>
  </xsl:variable>
 <xsl:variable name="NewVLNames" as="item()*">
   <xsl:for-each select="/EpiData/ValueLabelSets/ValueLabelSet">
    <xsl:value-of select="Name"/>
   </xsl:for-each>
 </xsl:variable>
 <xsl:function name="epi:GetNewVLName">
  <xsl:param name="InputName"/>
  <xsl:variable name="vPosition" select="index-of($OldVLNames, $InputName)"/>
  <xsl:value-of select="$NewVLNames[$vPosition]"/>
 </xsl:function>

 <!-- Map Field Names -->
 <xsl:variable name="OldFieldNames" as="item()*">
  <xsl:for-each select="/EpiData/DataFiles/*/Sections/*/Fields/Field">
   <xsl:value-of select="@id"/>
  </xsl:for-each>
 </xsl:variable>
 <xsl:variable name="NewFieldNames" as="item()*">
  <xsl:for-each select="/EpiData/DataFiles/*/Sections/*/Fields/Field">
   <xsl:value-of select="Name"/>
  </xsl:for-each>
 </xsl:variable>
 <xsl:function name="epi:GetNewFieldName">
  <xsl:param name="InputName"/>
  <xsl:variable name="vPosition" select="index-of($OldFieldNames, $InputName)"/>
  <xsl:value-of select="$NewFieldNames[$vPosition]"/>
 </xsl:function>

 <xsl:variable name="EpiLang">
  <xsl:value-of select="/EpiData/Study/Language"/>
 </xsl:variable>


 <!-- Templates -->
 <xsl:template match="/EpiData" xml:space="preserve">
  <EpiData xmlns="http://www.epidata.dk/XML/1.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.epidata.dk/XML/1.0 http://www.epidata.dk/XML/1.0/epx.xsd" version="1" xml:lang="en">
   <xsl:apply-templates select="Settings"/> 
   <xsl:apply-templates select="ProjectSettings"/> 
   <xsl:apply-templates select="Study"/> 
   <xsl:apply-templates select="ValueLabelSets"/> 
   <xsl:apply-templates select="DataFiles"/> 
  </EpiData> 
 </xsl:template>
 
 <xsl:template match="Settings">
  <Settings>
   <xsl:attribute name="dateSeparator">
    <xsl:value-of select="DateSeparator"/>
   </xsl:attribute>
   <xsl:attribute name="timeSeparator">
    <xsl:value-of select="TimeSeparator"/>
   </xsl:attribute>
   <xsl:attribute name="decimalSeparator">
    <xsl:value-of select="DecimalSeparator"/>
   </xsl:attribute>
  </Settings> 
 </xsl:template>
 
 <xsl:template match="ProjectSettings">
  <ProjectSettings>
   <xsl:attribute name="autoIncStart">
    <xsl:value-of select="AutoIncStart"/>
   </xsl:attribute>
   <xsl:attribute name="timedBackupInterval">
    <xsl:value-of select="TimedBackupInterval"/>
   </xsl:attribute>
   <xsl:attribute name="backupOnShutdown">
    <xsl:value-of select="BackupOnShutdown"/>
   </xsl:attribute>
   <xsl:attribute name="showFieldNames">
    <xsl:value-of select="ShowFieldNames"/>
   </xsl:attribute>
   <xsl:attribute name="showFieldBorders">
    <xsl:value-of select="ShowFieldBorders"/>
   </xsl:attribute>
  </ProjectSettings>
 </xsl:template>
 
 <xsl:template match="Study" xml:space="preserve">
  <StudyInfo>
   <Author><xsl:value-of select="Author"/></Author>
   <Created><xsl:value-of select="Created"/></Created>
   <Identifier><xsl:value-of select="Identifier"/></Identifier>
   <Modified><xsl:value-of select="Modified"/></Modified>
   <Version><xsl:value-of select="Version"/></Version>
   <Title>
    <Text><xsl:attribute name="xml:lang"><xsl:value-of select="xml:lang"/></xsl:attribute><xsl:value-of select="Title"/></Text>
   </Title>
  </StudyInfo>   
 </xsl:template>
 
 <xsl:template match="ValueLabelSets">
  <ValueLabelSets>
   <xsl:for-each select="ValueLabelSet">
    <ValueLabelSet>
     <xsl:attribute name="id"><xsl:value-of select="Name"/></xsl:attribute>
     <xsl:apply-templates select="Type"/>
     <Internal>
      <xsl:for-each select="Internal/ValueLabel">
       <xsl:copy-of select="."/>
      </xsl:for-each>
     </Internal>
    </ValueLabelSet>
   </xsl:for-each>
  </ValueLabelSets>   
 </xsl:template>
 
 <xsl:template match="DataFiles">
  <DataFiles>
   <xsl:for-each select="DataFile">
    <DataFile>
     <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
     <xsl:attribute name="created"><xsl:value-of select="Created"/></xsl:attribute>
     <xsl:attribute name="version"><xsl:value-of select="Version"/></xsl:attribute>
     <xsl:apply-templates select="Records"/>
     <xsl:apply-templates select="Sections"/>
    </DataFile>
   </xsl:for-each>
  </DataFiles>
 </xsl:template>

 <xsl:template match="Records">
  <Records>
   <xsl:text>&#xa;</xsl:text>
   <xsl:for-each select="Record">
    <Record>
     <xsl:attribute name="status"><xsl:text>rsNormal</xsl:text></xsl:attribute>
     <xsl:for-each select="@*">
      <xsl:if test="not(name() = 'st') and not(.='')"><xsl:value-of select="epi:GetNewFieldName(name())"/>=<xsl:value-of select="."/>,</xsl:if>
     </xsl:for-each>
    </Record>
    <xsl:text>&#xa;</xsl:text>
   </xsl:for-each>
  </Records>
 </xsl:template>
 
 <xsl:template match="Sections">
  <Sections>
   <xsl:for-each select="Section">
    <Section>
     <xsl:attribute name="id">
      <xsl:choose>
       <xsl:when test="@* = 'section_id_main'"><xsl:text>MAIN</xsl:text></xsl:when>
       <xsl:otherwise><xsl:value-of select="@id"/></xsl:otherwise>
      </xsl:choose>
     </xsl:attribute>
     <xsl:attribute name="top"><xsl:value-of select="Top"/></xsl:attribute>
     <xsl:attribute name="left"><xsl:value-of select="Left"/></xsl:attribute>
     <xsl:attribute name="width"><xsl:value-of select="Width"/></xsl:attribute>
     <xsl:attribute name="height"><xsl:value-of select="Height"/></xsl:attribute>
     <Caption>
      <Text>
       <xsl:attribute name="xml:lang"><xsl:value-of select="$EpiLang"/></xsl:attribute>
       <xsl:value-of select="Name"/>
      </Text>
     </Caption>
     <xsl:apply-templates select="Fields"/>
     <xsl:apply-templates select="Headings"/>     
    </Section><xsl:text>&#xa;</xsl:text>
   </xsl:for-each>
  </Sections>
 </xsl:template>
 
 <xsl:template match="Fields">
  <Fields>
   <xsl:for-each select="Field">
    <Field>
     <xsl:attribute name="id"><xsl:value-of select="epi:GetNewFieldName(@id)"/></xsl:attribute>
     <xsl:attribute name="top"><xsl:value-of select="Top"/></xsl:attribute>
     <xsl:attribute name="left"><xsl:value-of select="Left"/></xsl:attribute>
     <xsl:apply-templates select="Type"/>
     <xsl:attribute name="length"><xsl:value-of select="Length"/></xsl:attribute>
     <xsl:attribute name="decimals"><xsl:value-of select="Decimals"/></xsl:attribute>
     <xsl:attribute name="entryMode"><xsl:text>emDefault</xsl:text></xsl:attribute>
     <xsl:apply-templates select="ValueLabelId"/>
     <Question>
      <Text>
       <xsl:attribute name="xml:lang"><xsl:value-of select="$EpiLang"/></xsl:attribute>
       <xsl:value-of select="Question"/>
      </Text>
     </Question>
    </Field><xsl:text>&#xa;</xsl:text>     
   </xsl:for-each>
  </Fields>
 </xsl:template>
 
 <xsl:template match="ValueLabelId">
  <xsl:attribute name="valueLabelRef">
   <xsl:value-of select="epi:GetNewVLName(.)"/>
  </xsl:attribute>
 </xsl:template>
 
 <xsl:template match="Headings">
  <Headings>
   <xsl:for-each select="Heading">
    <Heading>
     <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
     <xsl:attribute name="top"><xsl:value-of select="Top"/></xsl:attribute>
     <xsl:attribute name="left"><xsl:value-of select="Left"/></xsl:attribute>
     <Caption>
      <Text>
       <xsl:attribute name="xml:lang"><xsl:value-of select="$EpiLang"/></xsl:attribute>
       <xsl:value-of select="Caption"/>
      </Text>
     </Caption>
    </Heading><xsl:text>&#xa;</xsl:text>
   </xsl:for-each>
  </Headings>
 </xsl:template>
 
 
 <xsl:template match="Type">
  <!--
   ftBoolean,
   
   // Numbers  (1, 2, 3)
   ftInteger, ftAutoInc, ftFloat,
   
   // Date (4, 5, 6)
   ftDMYDate, ftMDYDate, ftYMDDate,
   // (7, 8, 9)
   ftDMYAuto, ftMDYAuto, ftYMDAuto,
   
   // Time (10, 11)
   ftTime, ftTimeAuto,
   
   // Strings (12, 13)
   ftString, ftUpperString 
   -->
  <xsl:choose>
   <xsl:when test=". = 0"><xsl:attribute name="type">ftBoolean</xsl:attribute></xsl:when>
   <xsl:when test=". = 1"><xsl:attribute name="type">ftInteger</xsl:attribute></xsl:when>
   <xsl:when test=". = 2"><xsl:attribute name="type">ftAutoInc</xsl:attribute></xsl:when>
   <xsl:when test=". = 3"><xsl:attribute name="type">ftFloat</xsl:attribute></xsl:when>
   <xsl:when test=". = 4"><xsl:attribute name="type">ftDMYDate</xsl:attribute></xsl:when>
   <xsl:when test=". = 5"><xsl:attribute name="type">ftMDYDate</xsl:attribute></xsl:when>
   <xsl:when test=". = 6"><xsl:attribute name="type">ftYMDDate</xsl:attribute></xsl:when>
   <xsl:when test=". = 7"><xsl:attribute name="type">ftDMYAuto</xsl:attribute><xsl:attribute name="autoUpdateMode">umUpdated</xsl:attribute></xsl:when>
   <xsl:when test=". = 8"><xsl:attribute name="type">ftMDYAuto</xsl:attribute><xsl:attribute name="autoUpdateMode">umUpdated</xsl:attribute></xsl:when>
   <xsl:when test=". = 9"><xsl:attribute name="type">ftYMDAuto</xsl:attribute><xsl:attribute name="autoUpdateMode">umUpdated</xsl:attribute></xsl:when>
   <xsl:when test=". = 10"><xsl:attribute name="type">ftTime</xsl:attribute></xsl:when>
   <xsl:when test=". = 11"><xsl:attribute name="type">ftTimeAuto</xsl:attribute><xsl:attribute name="autoUpdateMode">umUpdated</xsl:attribute></xsl:when>
   <xsl:when test=". = 12"><xsl:attribute name="type">ftString</xsl:attribute></xsl:when>
   <xsl:when test=". = 13"><xsl:attribute name="type">ftUpperString</xsl:attribute></xsl:when>
  </xsl:choose>
 </xsl:template>
</xsl:stylesheet>