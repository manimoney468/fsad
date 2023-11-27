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
String sql = "UPDATE asection SET age = 20 WHERE sno = 2";
stmt.executeUpdate(sql);
out.println("updated records");
}
catch(Exception e)
{
out.println(e.toString());
}
%>