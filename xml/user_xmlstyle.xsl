<!--  Edited with XML Spy v4.2  -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/library">
        <html>
            <body>
                <h2>User List</h2>
                <table border="1">
                    <tr bgcolor="yellow">
                        <th align="left">User Id</th>
                        <th align="left">First Name</th>
                        <th align="left">Last Name</th>
                        <th align="left">User Name</th>
                        <th align="left">Email</th>
                        <th align="left">Address</th>
                        <th align="left">Phone</th>
                    </tr>
                    <xsl:for-each select="cosmeticshop/user">
                        <tr>
                            <td>
                                <xsl:value-of select="userID"/>
                            </td>
                            <td>
                                <xsl:value-of select="fname"/>
                            </td>
                            <td>
                                <xsl:value-of select="lname"/>
                            </td>
                            <td>
                                <xsl:value-of select="uname"/>
                            </td>
                            <td>
                                <xsl:value-of select="email"/>
                            </td>
                            <td>
                                <xsl:value-of select="address"/>
                            </td>
                            <td>
                                <xsl:value-of select="phone"/>
                            </td>
                            
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>