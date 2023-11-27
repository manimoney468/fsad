<%@ include file="exp71.jsp"%>
<%@page import="java.sql.*"%>
<%
try
{
PreparedStatement ps=con.prepareStatement("create table book(bookname varchar(20),author varchar(20),price varchar(12),noofbooks varchar(50))");
ps.executeQuery();
out.println("<script>alert('table created.....');</script>");
}
catch(Exception e)
{
out.println("<script>alert('Table already existed......');</script>");
}
%>
