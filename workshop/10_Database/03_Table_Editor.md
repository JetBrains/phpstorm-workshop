# Table Editor

Edit records in a table: insert, update, delete, ...

> F4 (Windows/Linux/macOS)

1. Select the _person_ table in the _Database_ tool window and launch the _Table Editor_.
2. All records in the table are shown. Double-clicking a cell allows editing.
3. When the _Submit changes immediately_ option is disabled, no changes will be committed to the database automatically.
   Disable this option and make some changes or add a row.
   Commit or rollback using the buttons.
4. Rows can be filtered. Click the _Filter_ toolbar button and create the following filter: `city_id > 2`.
   Note the autocompletion support.
   Click the _View Query_ button to see the query that has been generated.
5. Select a value in the `city_id` column and press Ctrl+Q (F1) to see how the value is referenced in other tables.
5. Rows can be exported. Export the rows as `INSERT` statements by using the toolbar buttons.