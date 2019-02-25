# Composer

PhpStorm integrates with the Composer dependency manager, which lets you declare project's dependencies and manage them from the IDE, create new projects with Composer, and perform additional tasks.

> _As of March 2019, you would need a local PHP interpreter installed to use Composer. Composer over remote PHP interpreter [isn't supported](https://youtrack.jetbrains.com/issue/WI-23544) yet. Refer to [PhpStorm Help](https://www.jetbrains.com/help/phpstorm/using-the-composer-dependency-manager.html) for details on getting started with Composer._

1. Initialize Composer in the project. In the _Project_ tool window, right-click `composer.json` and select _Composer | Init Composer_ from the context menu.
   Let the IDE download `Composer.phar` to a folder on disk. 
     
2. Let's add a project dependency. Right-click `composer.json` and select _Composer | Manage dependencies_ from the context menu.
3. Add a dependency on `phpoffice/phpexcel`. Install the `dev-master` version.
4. Notice the `vendor` folder, which has been added to the project. In this folder, Composer has generated the `autoload.php` file. The `composer.json` file has been also updated to reflect the changes in project's dependencies. 
5. (optional) Remember unit testing? The `autoload.php` file can be used to load PHPUnit if it is installed through Composer.
   Try installing PHPUnit through Composer and run PHP unit tests using this approach.