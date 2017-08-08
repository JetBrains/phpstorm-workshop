# SSH Terminal

Allows to connect to a remote SSH server. Provides a fully-featured SSH terminal in the IDE.

1. Use the _Tools | Start SSH Session..._ menu command and connect to the Vagrant box.
   Change directory to `/var/www` and list files. Note it is a shared folder which is the current project in PhpStorm.
2. You can connect to a SFTP deployment server. Use the _Tools | Start SSH Session..._ menu command and select the `vm` server.
3. You can specify the connection details, such as host, port, username, password or SSH keypair, manually using
   the _Edit credentials_ option.
   For example, you can use the following values:
   ```
   ip: 192.168.56.102
   port: 22
   user name: vagrant
   key: <project_dir>/.idea/private_key
   passphrase: empty
   ```
   After you provide the connection details, the server will be visible whenever the _Tools | Start SSH Session..._ command is invoked.