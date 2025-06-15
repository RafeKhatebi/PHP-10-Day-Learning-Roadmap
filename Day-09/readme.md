# *State Management [Cookies & Sessions]*

### ------------------------------ Cookies --------------------------------

Cookies are small pieces of data
• Stored in the user’s web browser as text data
 • Sent by browser back to the server in every request

• They allow websites to “remember” users and their preferences
 • Track user sessions and identify returning users
 • Store lightweight data across multiple pages or visits

Ex. Shopping cart, recently viewed items,ads ...

Cookies are domain-specific — only the website that set the cookie
can access it
 • Accessible to both client-side (JavaScript) and server-side (e.g., PHP)
unless marked HttpOnly
 • Cookies are automatically sent to server from the client in
each request
• Accessible via $_COOKIE()

##### Best Practices and Pitfalls

 • The value of setcookie() is stored on the client's computer
 • Do not store sensitive information
 • Cookies are limited in size (~4KB total per domain)
 • Do not forget to use htmlspecialchars() on the received value of
cookie
 • Cookies will not become visible until the next loading of a page

##### Accessing Cookie

 • Cookies that are already set are automatically sent with every HTTP request
 • You can access them using $_COOKIE['cookie_name']
 • Always check with isset() to avoid errors
 • Values are available only if the cookie exists and hasn't expired
