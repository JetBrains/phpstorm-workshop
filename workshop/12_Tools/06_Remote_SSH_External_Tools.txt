Remote SSH external tools

Invoke remote commands over SSH without having to manually log in to the remote server.
For example, we may want to run a shell script which flushes the current cache, or a script which sets up a new virtual machine.
1. Open IDE Settings | Remote SSH External Tools and add a new tool.
   Name: Hello World External Tool
   Check "Show console when standard output changes"
   Program: echo
   Parameters: Hello World
   Connections settings: Current Vagrant
2. Run the tool from the Tools | Hello World menu.
   Note that we can select the server to run the tool on.
3. Assign a keyboard shortcut to the tool. Alt+Shift+H would be a good one.
   Go to IDE Settings | Keymap, search for Hello World.
   Use the context menu to assign a keyboard shortcut.
