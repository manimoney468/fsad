<%@page import="java.sql.*"%>
<%
try
{
String uname=request.getParameter("t");
String password=request.getParameter("p");

Connection con=null;
Statement stmt=null;
ResultSet rs=null;
Class.forName("oracle.jdbc.driver.OracleDriver");
con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","manager");
stmt=con.createStatement();
rs=stmt.executeQuery("select * from user1");
//out.println(uname);
//out.println(pwd);
while(rs.next())
{
String uname1=rs.getString("uname");
String pwd1=rs.getString("password");
if((uname1).equals(uname))
{
if(pwd1.equals(password)){
session.setAttribute("uname",uname);
response.sendRedirect("welcome.jsp");
}
}
}
response.sendRedirect("failure.jsp");
}
catch(Exception e)
{
out.println("exception"+e);
}
%>
