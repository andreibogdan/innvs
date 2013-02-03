# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
  # All Vagrant configuration is done here. The most common configuration
  # options are documented and commented below. For a complete reference,
  # please see the online documentation at vagrantup.com.

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "precise64"

  # The url from where the 'config.vm.box' box will be fetched if it
  # doesn't already exist on the user's system.
  # config.vm.box_url = "http://domain.com/path/to/above.box"

  # Boot with a GUI so you can see the screen. (Default is headless)
  config.vm.boot_mode = :gui

  # Assign this VM to a host-only network IP, allowing you to access it
  # via the IP. Host-only networks can talk to the host machine as well as
  # any other machines on the same network, but cannot be accessed (through this
  # network interface) by any external networks.
	config.vm.network :hostonly, "192.168.56.10"
	config.vm.customize [
        "modifyvm", :id, 
        "--name", "innerwheelvaslui.local", 
        "--memory", "1024", 
        "--cpus", "2",
        "--vram", "12"
        ]

  # Forward a port from the guest to the host, which allows for outside
  # computers to access the VM, whereas host only networking does not.
  # config.vm.forward_port 80, 8080

  # Share an additional folder to the guest VM. The first argument is
  # an identifier, the second is the path on the guest to mount the
  # folder, and the third is the path on the host to the actual folder.
  # config.vm.share_folder "v-data", "/vagrant_data", "../data"

  # Enable provisioning with chef solo, specifying a cookbooks path, roles
  # path, and data_bags path (all relative to this Vagrantfile), and adding 
  # some recipes and/or roles.
  #
  # config.vm.provision :chef_solo do |chef|
  #   chef.cookbooks_path = "../my-recipes/cookbooks"
  #   chef.roles_path = "../my-recipes/roles"
  #   chef.data_bags_path = "../my-recipes/data_bags"
  #   chef.add_recipe "mysql"
  #   chef.add_role "web"
  #
  #   # You may also specify custom JSON attributes:
  #   chef.json = { :mysql_password => "foo" }
  # end

  # Enable provisioning with chef server, specifying the chef server URL,
  # and the path to the validation key (relative to this Vagrantfile).
  #
  # The Opscode Platform uses HTTPS. Substitute your organization for
  # ORGNAME in the URL and validation key.
  #
	config.vbguest.auto_update = false

	config.vm.provision :shell do |shell|
        shell.inline = "sed -i -e 's/us.archive/ro.archive/g' /etc/apt/sources.list"
        shell.inline = "apt-get update || echo \"[$0] Failed to update apt sources. Ignored.\""
     end

    config.vm.provision :chef_solo do |chef|
    	chef.json = {
        	:mysql => {
            	:server_root_password => "a",
			    :server_repl_password => "a",
    			:server_debian_password => "a"
        	},
        	:php => {
        	    :install_method => "source"
        	}
    	}
        # This path will be expanded relative to the project directory
        chef.cookbooks_path = "cookbooks"

        chef.add_recipe("build-essential")
        chef.add_recipe("openssl")
        chef.add_recipe("xml")
        chef.add_recipe("samba")

        chef.add_recipe("apache2")
        chef.add_recipe("apache2::mod_rewrite")
        chef.add_recipe("apache2::mod_deflate")
        chef.add_recipe("apache2::mod_headers")
        chef.add_recipe("apache2::mod_php5")
        chef.add_recipe("apache2::mod_mime")

        chef.add_recipe("memcached")

        chef.add_recipe("mysql")
        chef.add_recipe("mysql::server")

        chef.add_recipe("php")
        chef.add_recipe("php::module_curl")
        chef.add_recipe("php::module_mysql")
        chef.add_recipe("php::module_memcache")
        chef.add_recipe("php::module_apc")
        chef.add_recipe("php::module_gd")

    end
end
