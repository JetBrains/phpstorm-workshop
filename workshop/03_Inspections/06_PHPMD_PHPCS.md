# Configure PHP Mess Detector or PHP Code Sniffer

> ### Open Settings Pane
> * Ctrl+Alt+S (Windows/Linux)
> * Command+, (Mac OS X)
>

Plug in PHP Mess Detector or PHP Code Sniffer as inspection engines.

1. Open the Settings Pane and then _Languages and Frameworks | PHP_, click the _[...]_ next to the 
    interpreter list, and disable the "Visible only for this project" check box for _Remote PHP 7_ interpreter
2. Click "Create" application level copy of this deployment server and then click "OK"

> If you're using the Vagrant workshop, you'll need to make sure Vagrant is running, to do this go to the _Tools_ menu
> and then select _Vagrant | Up_. If prompted, click on the _Vagrantfile_ and the Vagrant machine will come up.


### PHPCS configuration:
3. Open the Settings Pane then _Languages and Frameworks | PHP | Code Sniffer_. Select "By default project interpreter".
4. Click _[...]_ and then add a new configuration by clicking the _+_. Select the _Remote PHP 7 Interpreter_, then 
   make sure that the path for PHPCS is `/home/vagrant/.composer/vendor/bin/phpcs`. Validate installation.
5. Apply the changes and open the Settings Pane then _Editor | Inspections_. Enable PHP Code Sniffer and set the code standard to _PSR-2_.
6. Run PHP Code Sniffer Inspections on the current project.

### PHPMD configuration:
7. Open the Settings Pane then _Languages and Frameworks | PHP | Mess Detector_. Select "By default project interpreter".
8. Click _[...]_ and then add a new configuration by clicking the _+_. Select the _Remote PHP 7 Interpreter, then 
      make sure that the path for PHPMD is `/home/vagrant/.composer/vendor/bin/phpmd`. Validate installation.
9.  Apply the changes and open the Settings Pane then _Editor | Inspections_. Enable PHP Mess Detector and enable all the 
    rules to validate against.
10. Run PHP Mess Detector inspections on the current project.