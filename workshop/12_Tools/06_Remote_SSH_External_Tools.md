Remote SSH external tools

Invoke remote commands over SSH without having to manually log in to the remote server.
For example, we may want to run a shell script which flushes the current cache, or a script which sets up a new virtual machine.

1. Open _Settings | Tools | Remote SSH External Tools_ and add a new tool:
   * _Name_: `Hello World External Tool`.
   * Select the _Show console when a message is printed to standard output stream_ check box.
   * _Program_: `echo`.
   * _Parameters_: `Hello World`.
   * _Connections settings_: `Current Vagrant`.
2. Run the tool by selecting the _Tools | External Tools | Hello World_ menu command.
   Note that we can select the server to run the tool on.
3. Assign a keyboard shortcut to the tool. Alt+Shift+H would be a good one.
   Go to _Settings | Keymap_ and search for Hello World.
   Use the context menu to assign it a keyboard shortcut.