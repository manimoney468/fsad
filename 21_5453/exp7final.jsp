<%@page import="java.sql.*"%>
<%
Connection con = null;
PreparedStatement ps = null;
ResultSet rs = null;

try {
    Class.forName("oracle.jdbc.driver.OracleDriver");
    con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe", "system", "cse");
    
    ps = con.prepareStatement("SELECT bookname, author, price, noofbooks FROM book");
    rs = ps.executeQuery();
    
 

    while (rs.next()) {
        String bookname = rs.getString("bookname");
        String author = rs.getString("author");
        String price = rs.getString("price");
        String noofbooks = rs.getString("noofbooks");
       
       out.println("<table border='1'>");
			out.println("<tr>");
			out.println("<td colspan='2'>Book Name: " + bookname + "</td>");
			out.println("</tr>");

			out.println("<tr>");
			out.println("<td>Author: " + author + "</td>");
			out.println("</tr>");

			out.println("<tr>");
			out.println("<td>Price: " + price + "</td>");
			out.println("</tr>");

			out.println("<tr>");
			out.println("<td>No. of Books: " + noofbooks + "</td>");
			out.println("</tr>");

			out.println("</table>");

    }
} catch (Exception e) {
    out.println("<h1>Error...</h1>");
} finally {
    try {
        if (rs != null) rs.close();
        if (ps != null) ps.close();
        if (con != null) con.close();
    } catch (SQLException e) {
        out.println("Error while closing the connection.");
    }
}
%>
