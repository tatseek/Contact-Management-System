<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/contacts">
        <html>
            <body>
                <h2>Phonebook Contacts</h2>
                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                    </tr>
                    <xsl:for-each select="contact">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="phone"/></td>
                            <td><xsl:value-of select="email"/></td>
                            <td><xsl:value-of select="address"/></td>
                            <td><xsl:value-of select="dob"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

