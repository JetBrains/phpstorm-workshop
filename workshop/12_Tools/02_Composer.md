# Composer

PhpStorm integrates with the Composer dependency manager, which lets you declare project's dependencies and manage them from the IDE, create new projects with Composer, and perform additional tasks. For details on getting started with Composer, refer to [PhpStorm Help](https://www.jetbrains.com/help/phpstorm/using-the-composer-dependency-manager.html).

1. Initialize Composer in the project.
    1. In the _Project_ tool window, right-click `composer.json` and select _Composer | Init Composer_ from the context menu. 
    2. In the dialog that opens, select _Remote Interpreter_. Then, in the CLI interpreter field, choose `composer:latest`. This will use a preconfigured Docker Composer image, and no further configuration will be required.
    3. Alternatively, you can choose to download `composer.phar` to a folder on disk, and set up Composer execution manually under _Settings/Preferences | PHP | Composer_.
     
2. Let's add a project dependency. Right-click `composer.json` and select _Composer | Manage dependencies_ from the context menu.
3. Add a dependency on `phpoffice/phpexcel`. Install the `dev-master` version.
4. Notice the `vendor` folder, which has been added to the project. In this folder, Composer has generated the `autoload.php` file. The `composer.json` file has also been updated to reflect the changes in project's dependencies. 
5. (optional) Remember unit testing? The `autoload.php` file can be used to load PHPUnit if it is installed through Composer.
   Try installing PHPUnit through Composer and run PHP unit tests using this approach.