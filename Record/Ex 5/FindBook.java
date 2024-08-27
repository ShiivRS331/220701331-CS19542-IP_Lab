
import java.sql.*;
import java.io.*;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/FindBook")
public class FindBook extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		//response.getWriter().append("Served at: ").append(request.getContextPath());
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			String URL="jdbc:mysql://localhost:3307/Library";
			Connection conn = DriverManager.getConnection(URL,"root","");
			PreparedStatement ps = conn.prepareStatement("select * from books where book_name=?");
			String b_name = request.getParameter("bname");
			ps.setString(1, b_name);
			ResultSet rs = ps.executeQuery();
			if(rs.next()) {
				out.println("Book ID: "+ rs.getString(1));
				out.println("Book Name: "+ rs.getString(2));
				out.println("Author; "+ rs.getString(3));
				out.println("Publisher: "+ rs.getString(4));
				out.println("Edition: "+ rs.getString(5));
				out.println("Price: "+ rs.getString(6));
				out.println("Category: "+ rs.getString(7));
			} else {
			    // Book not found
			    out.println("Book not found.");
			}
		}catch(Exception e) {
			out.println(e);
		}
	}
}
