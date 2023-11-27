<%@page import="java.sql.*"%>
<%
Connection con=null;
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","cse");
out.println("<script>alert('Connection established...');</script>");
}
catch(Exception e)
{
out.println("<script>alert('Error...');</script>");
}
%>
