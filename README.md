This is a base to get Change Champ up and running. It will create a virtual machine running
Ubuntu 16.04.

This was orginally built for me (Damien B) to test different technologies. I have decided on
Laravel Spark for the user and subscription management and a separate
CRUD tool https://github.com/achillesp/laravel-crud-forms.

These two are installed via Composer.

### System Core Requirements

For the virtual machine, you will need to install onto your host machine:
 - VirtualBox
 - Vagrant
 - Ansible (version 2.3+)

Add line to /etc/hosts by typing
`echo '192.168.33.82' | sudo tee -a /etc/hosts`

Add record to ~/.ssh/config
~~~
Host cc.api
User vagrant
Hostname cc.api
IdentityFile /var/www/cc.api/.vagrant/machines/default/virtualbox/private_key
ServerAliveInterval 100
~~~

Note: Identity file path above will be different on your host machine.

Type `vagrant up` to build and start virtual machine.

Test instance by ssh-ing into Vagrant machine and type: `ssh cc.api`

Provision Vagrant machine: `dev/provision.sh local_dev`

The application should now be running. Point your browser to http://cc.api
