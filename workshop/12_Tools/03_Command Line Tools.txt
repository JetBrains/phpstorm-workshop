Command Line Tools

Invoke command line tools shipped with frameworks and libraries. Composer, Zend Framework, Symfony,
Symfony Console-based, Drush or roll your own. Autocompletion support. Not meant to be a full console/terminal!

Ctrl+Shift+X (Windows/Linux)
Shift+Command+X (Mac OS X)

1. We can use Command Line Tools for working with Composer (and other tools)!
   Command Line Tools can be added globally (for all projects) or per project. We'll add Composer for the current project.
   From the project settings | Command Line Tool Support, add a new tool.
   Add Composer as a tool. Note that Zend Framework, Symfony, Symfony Console-based, Drush are also supported.
   In the next step, specify the path to composer.phar.
2. After clicking OK, the tool is added with an alias "c". This means we can now invoke Composer as "c".
   Open the Command Line Tools using the keyboard shortcut. Type: c
   Note the autocomplete support. Select the require command and specify "psr/log:1.0.*@dev" as the package.
     c require "psr/log:1.0.*@dev"

   This will install the "psr/log" package at the root of our project.
3. Let's add a Custom Tool. From the project settings | Command Line Tool Support, add a new tool.
   Select Custom Tool as the tool type. Specify the path to helloworld.sh or helloworld.bat in the current folder,
   depending on your system. Set the tool alias to "hw" (without the quotes).
4. Invoke the newly create "hw" tool from the Command Line Tools console: hw to Maarten
5. To add autocomplete to the custom tool, go to project settings | Command Line Tool Support
   and click the Open Definition in Editor button from the right toolbar. This will open an XML file in which we can add
   autocompletion information. Replace the file contents with:


<?xml version="1.0" encoding="UTF-8"?>
<framework xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="schemas/frameworkDescriptionVersion1.1.3.xsd" name="Custom_hw" invoke="C:\Users\Maarten\Desktop\Workshop\11_Tools\helloworld.bat" alias="hw" enabled="true" version="2">
  <help><![CDATA[Hello World]]></help>
    <command>
        <name>to</name>
        <help>Say hello to someone.</help>
        <params>name</params>
    </command>
</framework>


6. Invoke the newly create "hw" tool from the Command Line Tools console. Note autocompletion information is available now.
