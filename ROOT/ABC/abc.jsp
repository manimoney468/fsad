<%@page import="java.sql.*" %>
<%
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
out.println("<h1>");
out.println("loaded the driver");
Connection c=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","cse");
out.println("connect set");
}
catch(Exception e)
{
out.println(e.toString());
}
%>