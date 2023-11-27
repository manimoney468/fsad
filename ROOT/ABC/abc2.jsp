<%@page import="java.sql.*" %>
<%
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
out.println("<h1>");
out.println("loaded the driver");
Connection c=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","cse");
out.println("connect set");
Statement stmt=c.createStatement();
String sql="INSERT INTO bsection VALUES(1,'vreddy',20)";
stmt.executeUpdate(sql);
out.println("insert records");
}
catch(Exception e)
{
out.println(e.toString());
}
%>