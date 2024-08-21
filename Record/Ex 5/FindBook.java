
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
			Class.forName(getServletInfo());
			String URL="";
			Connection conn = DriverManager.getConnection(URL,"root","");
			PreparedStatement ps = conn.prepareStatement("select * from books where book_name=?");
			String b_name = request.getParameter("bname");
			ps.setString(0, b_name);
			ResultSet rs = ps.executeQuery();
			if(rs.next()) {
				out.println("Book Name: "+ rs.getString(0));
				out.println("Author; "+ rs.getString(1));
				out.println("Publisher: "+ rs.getString(2));
				out.println("Edition: "+ rs.getString(3));
				out.println("Price: "+ rs.getString(4));
				out.println("Category: "+ rs.getString(5));
			}
		}catch(Exception e) {
			out.println(e);
		}
	}
}
