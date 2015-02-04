Netvacation frontend exercise no. 1 - "froggy and the raving rodents"

### Summary ###
Your JS application ("app") for use in a small private library allows users quickly find out whether specific books are for sale.
To do so it puts out a list of authors. The user can click each of them to get a list of books written by him/her.
For each book the user can query a server for live pricing and availability. 


### Desired Application Flow ###
- The app fills the author's table with the data from PHP's $authors variable (i.e. without additional requests to the server)
- Users can click on any of the author in the table. Then:
  - The CSS class "disabled" should be added to "#books".
  - A GET request should be made to "library.php?author=ID" with ID being the id of the author (e.g. 0 for Joane K. Rowling)
  - That script will return a json encoded list of books written by that particular author. Example:
    {
      "status": "ok",
      "response": [
        {
          "title": "Harry Potter - Episode One"
          "author": "Joane K. Rowling",
          "year": 1997,
          "pages": 250
        },{
          "title": "Harry Potter Part Two - The Empire Strikes Back"
          "author": "Joane K. Rowling",
          "year": 1998,
          "pages": 300
        }
      ]
    }
  - Your app must then empty and fill the second table on the page with entries for each of these books
  - The CSS class "disabled" should be removed from "#books".
  - In the last column a button should be added (search example1 in the code) that allows the user to click on it to retrieve price and availability for that book.
  - If the user clicks on that button ("Check Pricing"):
    - The table row should look like example2 in the code
    - A POST request should be made to "availability.php". The body of that request must be a json-encoded object like that:
      {
         "author": "Joane K. Rowling",
         "title": "Harry Potter - Episode One"
      }
    - The server will then return price and availability for that book as json encoded object:
      {
        "status": "ok",
        "response": {
          "price": 123
          "availability": "IN_STOCK"
        }
      }
      availability can contain two values: "IN_STOCK" and "OUT".
    - That price and availability should be shown inside the book's table row (search "example2" and "example3" in the code) 
    
### BEWARE ###
The availability.php is malfunctioning because it is under attack by raving rodents.
- Sometimes it returns an HTML error page instead of the desired json. Your app must then display the row like "example5"
- It sometimes takes up to 2s to respond.

### What to do ###
- Add the required PHP and javascript code to this file (designated area inside <head>)
- Put the required application into app.js
- Do not alter anything else
- Provide proper documentation for all classes, methods and functions.
- Surf the web or any other resources
- Do not copy code

### Goals ###
- Easily understandable code
- Make sure other developers can quickly understand your code to add changes
