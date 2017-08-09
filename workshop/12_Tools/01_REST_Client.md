# REST Client

The built-in REST client allows testing web API's, i.e. create requests and inspect responses.

1. Use the _Tools | Test RESTful Web Service_ menu to open the _REST Client_ tool window.
2. Create a request which fetches your user information from GitHub:
    * Specify the HTTP method to be `GET`
    * Set the host to `https://api.github.com`
    * Set the path to `/user`.
    
    In the headers section, add an `Accept: application/json` header.
   Note that you can specify a request body, text and file upload, as well.
3. Run the request. GitHub responds with the notion that authentication is required.
4. Use the _Generate an Authorization header_ action from the toolbar and  enter your GitHub credentials. The IDE will inject the authentication header into the request.
5. Run the request and see that the user information is retrieved from GitHub successfully.
6. Switch to the _Response Headers_ tab and check the remaining rate limit.
7. Requests can be replayed using the toolbar.
8. Requests can be imported and exported using the toolbar. Import the `samplerequest.xml`, add an authorization header and see your GitHub repositories are listed.