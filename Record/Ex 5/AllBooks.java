

import java.io.*;
import java.sql.*;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class AllBooks
 */
@WebServlet("/AllBooks")
public class AllBooks extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public AllBooks() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	//	response.getWriter().append("Served at: ").append(request.getContextPath());
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			String URL="jdbc:mysql://localhost:3307/Library";
			Connection conn = DriverManager.getConnection(URL,"root","");
			PreparedStatement ps = conn.prepareStatement("select * from books;");
			ResultSet rs = ps.executeQuery();
			while(rs.next()) {
				out.println("Book ID: "+ rs.getString(1));
				out.println("Book Name: "+ rs.getString(2));
				out.println("Author; "+ rs.getString(3));
				out.println("Publisher: "+ rs.getString(4));
				out.println("Edition: "+ rs.getString(5));
				out.println("Price: "+ rs.getString(6));
				out.println("Category: "+ rs.getString(7));
			}
		}catch(Exception e) {
			out.println(e);
		}
		
	}
}
