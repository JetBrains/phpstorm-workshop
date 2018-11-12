# Database Console

SQL console with autocompletion, inspections, error highlighting, autocompletion on joins, ...

> * Ctrl+Shift+F10 (Windows/Linux)
> * Shift+Command+F10 (macOS)

1. Open the database console for jetbrains database and copy in the contents of the workshop_database.sql file into it.
2. We can execute SQL statements by selecting one or multiple. Select all statements in the console and execute
   the statement using the button in the toolbar or pressing Ctrl+Enter (Command+Enter).
3. Open a new console and try typing the following query. Note the autocompletion on typing `person`.

    `SELECT person.name FROM person`

4. Execute the query and see the query results.
5. Type the following query:

    `SELECT person.name FROM people`

6. Notice that just like with code, inspections tell us the _people_ table does not exist.
7. Type the following query:

    ```
    SELECT person.name, city.name as city, country.name as nationality
    FROM person
      INNER JOIN city ON person.city_id = city.city_id
      INNER JOIN country ON
    ```

8. Now use smart autocompletion (Ctrl+Shift+Space) and note that the IDE proposes to complete the `JOIN` statement.
    Complete the query:

    ```
    SELECT person.name, city.name as city, country.name as nationality
    FROM person
      INNER JOIN city ON person.city_id = city.city_id
      INNER JOIN country ON country.country_id = person.nationality_country_id
    WHERE country.name = ?
    ```

9. Execute the statement. The IDE prompts for the parameter which is noted in the query as `?` (can also be `:country` or similar).
    In the dialog, enter `'Belgium'` as the value (including quotes).
10. Explore the options in the results tool window.
