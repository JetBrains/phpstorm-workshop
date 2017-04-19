SSH Terminal

Connect to a remote SSH server. Provides a full SSH terminal in the IDE.
0. Make sure that you've executed "docker-compose up"
1. Use the Tools | Start SSH Session... menu and connect to the "vm" server box.
   Change directory to /home/jetbrains/upload and list files. Note it is a shared folder which is the current project in PhpStorm.
2. You can also specify connection details such as host, port, username, password or SSH keypair manually using
   "Edit credentials" option.
   For example, you can use the following values:
   ip: localhost
   port: 2022
   user name: jetbrains
   password: jetbrains
   After providing connection details, the server will be visible whenever Tools | Start SSH Session... is invoked.

