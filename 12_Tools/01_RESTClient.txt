REST Client

The built-in REST client allows testing web API's. Build requests, inspect responses.

1. Use the Tools | Test RESTful Web Service menu to open the REST Client tool window.
2. Create a request which fetches your user information from GitHub.
   Specify the HTTP method to be GET, the host will be https://api.github.com, the path /user.
   In the headers section, add an Accept: application/json header.
   Note that you can specify a request body, text, file upload as well.
3. Run the request. GitHub responds with the fact that authentication is required.
4. Use the Generate an Authorization header action from the toolbar.
   Enter your GitHub credentials. The IDE will inject the authentication header into the request.
5. Run the request and see that we now get back user information from GitHub.
6. Open the Response Headers tab and check the remaining rate limit.
7. Requests can be replayed from the toolbar.
8. Requests can be imported and exported from the toolbar. Import the samplerequest.xml,
   add an authorization header and see your GitHub repositories are listed.
