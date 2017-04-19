Create New Table

Create a new table in the database. Specify column options, default values, primary key, ...

Alt+Insert (Windows/Linux)
Command+N (Mac OS X)

1. Create a new table "attendee". Use the dialog to generate a table which looks like this:

CREATE TABLE workshop.attendee
(
  course_name VARCHAR(255) NOT NULL,
  person_id int NOT NULL,
  comments MEDIUMTEXT,
  PRIMARY KEY ( course_name, person_id )
);

2. In the Database tool window, find the attendee.person_id column and create a foreign key to person.person_id.
   Enter "person" as the table name. The IDE will determine person__id is the column that should be used for the foreign key.
3. Update the workshop_database.sql file with the current tables that are available in the database.
   This can be done by selecting the workshop database and using the Copy DDL action (Ctrl+Shift+C / Command+Shift+C).
