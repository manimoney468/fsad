<%@page import="java.sql.*"%>
<%@ include file="exp71.jsp"%>
<%
try
{
String u=request.getParameter("t1");
String p=request.getParameter("p");
String m=request.getParameter("t2");
String b=request.getParameter("t3");
PreparedStatement ps=con.prepareStatement("insert into book values(?,?,?,?)");
ps.setString(1,u);
ps.setString(2,p);
ps.setString(3,m);
ps.setString(4,b);
ps.executeUpdate();
out.println("<script>alert('Registered Successfully...');</script>");
}
catch(Exception e)
{
out.println("<script>alert('Error...');</script>");
}
%>
