Vagrant.configure("2") do |config|
    config.vm.box = "gbarbieru/xenial"
    #config.vm.box_url = ""

    #config.vbguest.auto_update = true

    config.vm.hostname = "cc";
    config.vm.network :private_network, ip: "192.168.30.82"
    config.vm.network :forwarded_port, guest: 80, host:8000, auto_correct: true
    config.vm.network :forwarded_port, guest: 3306, host:3306, auto_correct: true
    config.vm.network :forwarded_port, guest: 1338, host:1338, auto_correct: true

    config.vm.synced_folder "./web", "/var/www", create: true, id: "vagrant-root", :group=>'www-data', :mount_options=>['dmode=775,fmode=775']

    #config.vm.provision "ansible" do |ansible|
    #  ansible.playbook = "provisioners/playbook.yml"
    #  ansible.inventory_path = "provisioners/ansible_hosts"
    #  ansible.limit = "all"
    #end

    config.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", 2048]
    end

end
