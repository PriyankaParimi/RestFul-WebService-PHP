# RestFulWebServicePHP

Implemented a simple RESTful web service using PHP.

Your web service should provide information about books.

http://localhost/books should give list of books (book titles only) that are stored in your database.

http:// localhost/books/id should give book details (title, year, price, category, authors) for given book id.

The database have the following schema:

Book (Book_id, title, year, price, category)
Book_Authors (Book_id, Author_id)
Authors (Author_id, Author_Name)

books.xml file is used to populate your database. Results retreived are in JSON format.
