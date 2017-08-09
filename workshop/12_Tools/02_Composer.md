# Composer

Work with Composer dependency manager in the IDE. Initialize Composer. Search and install Composer dependencies.
Create new project using Composer project type. Use the Command Line Tools.

1. Initialize Composer in the current directory. In the _Project_ tool window,
   use the context menu to choose the _Composer | Init Composer_ action.
   Let the IDE download `Composer.phar` to a folder on disk.
2. A `composer.json` file is generated and the _Add dependency_ option appears in the the Composer context menu.
3. Add a dependency on `phpoffice/phpexcel`. Install the `dev-master` version.
4. Note the `vendor` folder has been added to the project, in which Composer generated the `autoload.php` file.
5. (optional) Remember unit testing? The `autoload.php` file can be used to load PHPUnit if it is installed through Composer.
   Try installing PHPUnit through Composer and run PHP unit tests using this approach.