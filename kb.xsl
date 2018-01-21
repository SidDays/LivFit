<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family: Arial; font-size:13pt; background: linear-gradient(to right, rgba(227,224,227,1) 0%, rgba(249,249,252,1) 51%, rgba(230,230,230,1) 100%); background-color: #EEEEEE">

<xsl:for-each select="workouts/muscle">
	<div style="padding: 4px">
        <div style="background-color: rgb(232, 6, 24); color: white; padding: 0px 12px;">
            <h1 style="text-transform: uppercase; text-shadow: 2px 2px 0 black; padding: 4px;"><xsl:value-of select="@name" /></h1>
        </div>
            <ul>
            <xsl:for-each select="type">
                <li>
                <h2 style="color: #190080; text-shadow: 2px 2px 0 white;"><xsl:value-of select="@name" /></h2>
                <p><xsl:value-of select="@desc" /></p>
                <xsl:for-each select="exercise">
                    <div style="background-color: rgba(255,255,255,0.5); border-radius: 10px; padding: 0px 3px;">
                        <h3 style="color: #0e162a"><xsl:value-of select="@name" /></h3>
                        <ul>
                            <li>Difficulty: <xsl:value-of select="difficulty"/></li>
                            <li>Starting reps: <xsl:value-of select="repbase"/></li>
                            <li>Increase with: <xsl:value-of select="incfactor"/></li>
                        </ul>
                    </div>
                    
                </xsl:for-each>   
                </li>
            </xsl:for-each>   
            </ul>
	</div>

</xsl:for-each>
</body>
</html>