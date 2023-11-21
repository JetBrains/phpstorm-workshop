# Configure PHP Mess Detector or PHP Code Sniffer

> ### Open Settings Pane
> * Ctrl+Alt+S (Windows/Linux)
> * Command+, (macOS)
>


### PHPCS configuration:
1. Open the Settings Pane then _PHP | Quality Tools | PHP_CodeSniffer_. 
2. Click _[...]_ next to _Configuration_. 
3. Click _+_ and select "PHPCS".
4. Enter `phpcs` as the path for PHPCS. Validate installation.
5. Apply settings and click on the tumbler next to _Configuration_ to enable PHP Code Sniffer and set the coding standard 
   to PSR2.
6. Run PHP Code Sniffer Inspections on the current project. Use Command+Option+Shift+I (macOS) or
   Ctrl+Alt+Shift+I (Windows/Linux) shortcut and type 'PHP_CodeSniffer validation'.

### PHPMD configuration:
7. Open the Settings Pane then _PHP | Quality Tools | Mess Detector_. 
8. Click _[...]_ next to _Configuration_.
9. Click _+_ and select "PHPMD". 
10. Enter `phpmd` as the path for PHPMD. Validate installation.
11. Apply settings and click on the tumbler next to _Configuration_ to enable PHP Mess Detector and enable all the 
    options to validate against.
12. Run PHP Mess Detector inspections on the current project. Use Command+Option+Shift+I (macOS) or
    Ctrl+Alt+Shift+I (Windows/Linux) shortcut and type 'PHP Mess Detector validation'.
