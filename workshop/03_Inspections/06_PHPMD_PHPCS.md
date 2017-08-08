# Configure PHP Mess Detector or PHP Code Sniffer

> ### Open Settings Pane
> * Ctrl+Alt+S (Windows/Linux)
> * Command+, (Mac OS X)
>

Plug in PHP Mess Detector or PHP Code Sniffer as inspection engines.

1. Open the Settings Pane and then _Languages and Frameworks | PHP_, click the _[...]_ next to the 
    interpreter list, and disable the "Visible only for this project" checkbox for _PHPCS_ and _PHPMD_ interpreter
2. Click "Create" application level copy of this deployment server and then click "OK"


### PHPCS configuration:
3. Open the Settings Pane then _Languages and Frameworks | PHP | Code Sniffer_. Select "Interpreter: PHPCS".
4. Click _[...]_ and and make sure that path for PHPCS is `phpcs`. Validate installation.
5. Apply settings and open the Settings Pane then _Editor | Inspections_. Enable PHP Code Sniffer and set the code standard 
   to PSR-2.
6. Run PHP Code Sniffer Inspections on the current project.

### PHPMD configuration:
7. Open the Settings Pane then _Languages and Frameworks | PHP | Mess Detector_. Select "Interpreter: PHPMD".
8. Click _[...]_ and make sure that path for PHPMD is `phpmd`. Validate installation.
9.  Apply settings and open the Settings Pane then _Editor | Inspections_. Enable PHP Mess Detector and enable all the 
    rules to validate against.
10. Run PHP Mess Detector inspections on the current project.
