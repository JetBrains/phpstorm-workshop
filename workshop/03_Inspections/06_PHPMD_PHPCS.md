# Configure PHP Mess Detector or PHP Code Sniffer

> ### Open Settings Pane
> * Ctrl+Alt+S (Windows/Linux)
> * Command+, (macOS)
>

Plug in PHP Mess Detector or PHP Code Sniffer as inspection engines.

1. Open the Settings Pane and then _Languages and Frameworks | PHP_, click the _[...]_ next to the 
    interpreter list, and disable the "Visible only for this project" checkbox for _PHPCS_ and _PHPMD_ interpreter


### PHPCS configuration:
2. Open the Settings Pane then _Languages and Frameworks | PHP | Code Sniffer_. 
3. Click _[...]_ next to _Configuration_. 
4. Click _+_ and select "PHPCS".
5. Enter `phpcs` as the path for PHPCS. Validate installation.
6. Apply settings and open the Settings Pane then _Editor | Inspections_. Enable PHP Code Sniffer and set the code standard 
   to PSR-2.
7. Run PHP Code Sniffer Inspections on the current project.

### PHPMD configuration:
8. Open the Settings Pane then _Languages and Frameworks | PHP | Mess Detector_. 
9. Click _[...]_ next to _Configuration_.
10. Click _+_ and select "PHPCS". 
11. Enter `phpmd` as the path for PHPMD. Validate installation.
12.  Apply settings and open the Settings Pane then _Editor | Inspections_. Enable PHP Mess Detector and enable all the 
    rules to validate against.
13. Run PHP Mess Detector inspections on the current project.
