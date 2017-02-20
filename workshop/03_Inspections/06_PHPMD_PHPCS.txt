Configure PHP Mess Detector or PHP Code Sniffer

Plug in PHP Mess Detector or PHP Code Sniffer as inspection engines.

Ctrl+Alt+S (Windows/Linux)
Command+, (Mac OS X)

1. Open the project settings | php | interpreter and disable "Visible only for this project" checkbox for  PHPCS and
 PHPMD interpreter

PHPCS configuration:
3. Open the project settings | php | code sniffer, select in Configuration "Interpreter: PHPCS"
4. Click "..." and make sure that path for PHPCS is "phpcs". Validate installation.
5. Apply settings and open project settings | inspections. Enable PHP Code Sniffer and set he code standard to validate against.
6. Run PHP Code Sniffer inspections on the current project.

PHPMD configuration:
3. Open the project settings | php | code sniffer, select in Configuration "Interpreter: PHPMD"
4. Click "..." and make sure that path for PHPMD is "phpmd". Validate installation.
5. Apply settings and open project settings | inspections. Enable PHP Mess Detector and set options to validate against.
6. Run PHP Mess Detector inspections on the current project.
