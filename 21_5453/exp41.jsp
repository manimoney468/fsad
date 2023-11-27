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
String sql="CREATE TABLE asection "+ "(sno INTEGER not Null,"+" sname VARCHAR2(20)," +" AGE varchar2(20))";
stmt.executeUpdate(sql);
out.println("created taBLE IN GIVEN DATABASE");
}
catch(Exception e)
{
out.println(e.toString());
}
%>
