[![official JetBrains project](http://jb.gg/badges/official.svg)](https://confluence.jetbrains.com/display/ALL/JetBrains+on+GitHub)[![Latest Stable Version](https://poser.pugx.org/jetbrains/phpstorm-workshop/v/stable.png)](https://packagist.org/packages/jetbrains/phpstorm-workshop) [![Total Downloads](https://poser.pugx.org/jetbrains/phpstorm-workshop/downloads.png)](https://packagist.org/packages/jetbrains/phpstorm-workshop) [![Latest Unstable Version](https://poser.pugx.org/jetbrains/phpstorm-workshop/v/unstable.png)](https://packagist.org/packages/jetbrains/phpstorm-workshop) [![License](https://poser.pugx.org/jetbrains/phpstorm-workshop/license.png)](https://packagist.org/packages/jetbrains/phpstorm-workshop)

# PhpStorm Workshop

In these materials, you'll learn about many of the features and productivity tools available in [PhpStorm](http://www.jetbrains.com/phpstorm) IDE. Examples are navigation, editing, inspections, live templates, refactoring, tools like Composer and the REST client and many more things. It's virtually impossible to cover every option and feature in PhpStorm, but we're providing a number of practical exercises on how we can do our daily work as a PHP developer.

We'll also cover a vast amount of keyboard shortcuts to make working with PhpStorm more efficient. Other IntelliJ IDEA based IDE's use the same keyboard shortcuts, so if you know how to work with PhpStorm, you'll know how to work with WebStorm, RubyMine, PyCharm, IntelliJ IDEA and more. A [cheat sheet is available online](http://bit.ly/1Ni0XJ0) and is also included in the workshop download.

This workshop is self-paced, meaning you can work your way through exercises on your own, whenever and wherever you want. Exercises come as a PhpStorm project in which every file is a new exercise that may contain code and tips to get things done.

## Prerequisites

* Docker for Mac, Docker for Windows or Docker (Linux) 1.13+
* PhpStorm 2016.3+

## Getting the Project
There are several ways to get started with the PhpStorm workshop materials:

* Create a new PhpStorm Workshop Project in PhpStorm

* Create a new project using Composer. Note that you can also create a new project in PhpStorm and use the Composer project type and search for "jetbrains/phpstorm-workshop"

    ``php composer.phar create-project jetbrains/phpstorm-workshop -s dev``

* Clone the project using GitHub

    ``git clone https://github.com/JetBrains/phpstorm-workshop.git``
    
    ``git checkout docker``

* Download the ZIP

    ``wget https://github.com/JetBrains/phpstorm-workshop/archive/master.zip``
    
## Getting Started
Most exercises not related to Editor require having Docker containers running. 

Before you start you need to:
1. Open Settings|Build, Execution, Deployment|Docker and enter the following API URL:

    * Windows:  `tcp://localhost:2375`
    * Linux, macOS: `unix:///var/run/docker.sock`


2. Update `XDEBUG_CONFIG` variable in `docker-compose.yml` with your IP address. That is necessary for Web Debugging.
 
    To get the right IP address that is available from Docker please use one of the following command:
    
    * Windows:  execute `ipconfig` and copy ip from `DockerNAT` interface from `IPv4 Address` field
    * macOS: execute `ifconfig en0` and copy IP from `inet` field
    * Linux: execute `ifconfig docker0` and copy ip from `inet addr` field

3. Uncomment an appropriate line for `sftp` service in the same `docker-compose.yml`. That is necessary for Deployment to work correctly.
4. Start all required Docker containers executing `docker-compose up` inside Terminal.

There are some things to know about the project:

* The project can be opened as-is in PhpStorm. We've included configurations for PHP Remote Interpreter, Database, Deployment Server, PHP Web Debug, PHPUnit and Behat.
* All numbered folders contain exercises that you can work on. Simply open the numbered files one by one and follow the comments in the file. Most exercises are self-contained, others build on previous exercises.
* Some of the exercises are in Markdown format, you can read these files easier (like this one) by toggling the View to *Show Preview Only* in the top right hand corner.
* The PhpStorm Reference Card.pdf is the PhpStorm keymap. The latest version can always be found on the [PhpStorm website](http://bit.ly/1Ni0XJ0).

## Open Source and Contribution
The workshop is Open Source, licensed under the Apache 2 license. If you would like to contribute to the workshop materials, please feel free to fork the repo and send us a pull request. Or if you have a comment, question, or suggestion for improvements, please [raise an issue](https://github.com/JetBrains/phpstorm-workshop/issues).