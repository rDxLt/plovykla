Vagrant.configure("2") do |config|
    config.vm.box = "generic/ubuntu2110"
    config.vm.provider "virtualbox" do |v|
        v.memory = 14336
        v.cpus = 4
    end
    config.vm.synced_folder "./", "/var/www", group: "www-data", owner: "www-data", :mount_options => ['dmode=777','fmode=777']



    config.vm.network "forwarded_port", guest: 80, host: 8091, id: "nginx"


    # Execute the nginx setup scripts
    config.vm.provision "shell", path: "./vagrant/nginx/setup.sh"

    # Execute the php 8.1 setup scripts
    config.vm.provision "shell", path: "./vagrant/php/8.1/setup.sh"

    config.vm.provision "shell", path: "./vagrant/configure.sh"
end

