SSH Terminal

Connect to a remote SSH server. Provides a full SSH terminal in the IDE.

1. Use the Tools | Start SSH Session... menu and connect to the Vagrant box.
   Change directory to /var/www and list files. Note it is a shared folder which is the current project in PhpStorm.
2. You can connect to a SFTP deployment server. Use the Tools | Start SSH Session... menu and select "vm" server.
3. You can also specify connection details such as host, port, username, password or SSH keypair manually using
   "Edit credentials" option.
   For example, you can use the following values:
   ip: 192.168.56.102
   port: 22
   user name: vagrant
   key: <project_dir>/.idea/private_key
   passphrase: empty
   After providing connection details, the server will be visible whenever Tools | Start SSH Session... is invoked.

