

import java.io.*;
import java.sql.*;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/AllBooks")
public class AllBooks extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	//	response.getWriter().append("Served at: ").append(request.getContextPath());
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			String url = "jdbc:mysql://localhost:3307/Library";
			Connection conn = DriverManager.getConnection(url,"root","");
			PreparedStatement ps = conn.prepareStatement("select * from books;");
			ResultSet rs = ps.executeQuery();
			out.println("<table>");
			while(rs.next()) {
				out.println("<tr>");
                out.println("<td>Book ID:</td><td>" + rs.getString(1) + "</td>");
                out.println("<td>Book Name:</td><td>" + rs.getString(2) + "</td>");
                out.println("<td>Author:</td><td>" + rs.getString(3) + "</td>");
                out.println("<td>Publisher:</td><td>" + rs.getString(4) + "</td>");
                out.println("<td>Edition:</td><td>" + rs.getString(5) + "</td>");
                out.println("<td>Price:</td><td>" + rs.getString(6) + "</td>");
                out.println("<td>Category:</td><td>" + rs.getString(7) + "</td>");
                out.println("</tr>");
			}
			out.println("</table>");
		}catch(Exception e) {
			out.println(e);
		}
		
		
	}
}
