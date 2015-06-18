Composer

Work with Composer dependency manager in the IDE. Initialize Composer. Search and install Composer dependencies.
Create new project using Composer project type. Command Line Tools.

1. Initialize Composer in the current directory. From the Project Tool Window,
   use the context menu | Composer | Init Composer action.
   Let the IDE download Composer.phar to a folder on disk.
2. A composer.json file will be generated. The Composer context menu also comes with a new option: Add dependency...
3. Add a dependency on phpoffice/phpexcel. Install the dev-master version.
4. Note the vendor folder has been added to the project, in which Composer generated an autoload.php.
5. (optional) Remember unit testing? The autoload.php file can be used to load PHPUnit if it is installed through Composer.
   Try installing PHPUnit through Composer and run PHP unit tests using this approach.
