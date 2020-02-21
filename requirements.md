### DESCRIPTION
You have been tasked with creating an API module that will connect to another API.
The purpose of the module is to list the movies of this API in a personalized way.
The first release of the API will be very limited in scope, but will serve as the foundation for
future releases.
**You will only do the backend application**

### FUNCTIONAL REQUIREMENTS

It's expected that user will be able to:

- Endpoint to get a list of upcoming movies.
- The same endpoint should return the list of the next 20 movies as page param is given.
- Endpoint to get a list of top rated movies.
- The same endpoint should return the list of the next 20 movies as page param is given.
- Endpoint to get a specific single movie.
- The same endpoint should return all movie related videos with a single request.
- Endpoint to get a list of genres.
- The same endpoint should return a single genre by id.

### TECHNICAL REQUIREMENTS

You should see this project as an opportunity to create an app following modern development
best practices, but also feel free to use your own app architecture preferences (coding
standards, code organization, third-party libraries, etc).

A TMDb API key is already available so you don't need to request your own:
`1f54bd990f1cdfb230adb312546d765d`

The API documentation and examples of use can be found here:

https://developers.themoviedb.org/3

- You can use any combination of backend technology
- You should create your own backend API layer, which will be responsible to send
requests to the TMDb API
- Feel free to use any package/dependency managers if you see fit
- Need to use a public version control system

### Evaluation Criteria

Endpoint validation will be done using CURL for each one.
Key aspects that will be validated:

- Clean Code;
- Version Control;
- Chosen Architecture;
- Features running correctly;
