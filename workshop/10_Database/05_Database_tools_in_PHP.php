<?php
/**
 * Database tools in PHP
 */

// 1. Create a new variable $query which holds the "SELECT * FROM person" query.
//    Make sure to manually type the query and note the autocompletion support (use Ctrl+Space right after FROM).

$query = "";

// 2. Make the query a bit more complicated. Remember the JOIN smart completion? Use Ctrl+Shift+Space after the ON.

$query = "SELECT person.name, city.name as city, country.name as nationality
            FROM person
              INNER JOIN city ON person.city_id = city.city_id
              INNER JOIN country ON ";

// 3. Alt+Enter on the above query and Run it in the Console.
