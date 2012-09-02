set :application, "SolidR"
set :domain,      "ssh.cluster003.ovh.net"
set :deploy_to,   "/homez.307/amndrc/www/__brickstorm/SolidR"
set :app_path,    "app"

set :repository,  "git://github.com/labranchearmee/SolidR.git"
set :scm_verbose, true
set :scm,         :git
set :scm_passphrase, "brickstorm012"
set :deploy_via,    :copy
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :php_bin, "php.ORIG.5.3.10"

set :use_sudo, false
set :user, "amndrc"
set :password, '052009'

set :shared_children, [app_path + "/logs", web_path + "/uploads", app_path + "/cache", "vendor"]

set :update_vendors, false
#set :vendors_mode, "install"

#set :dump_assetic_assets, true

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Symfony2 migrations will run

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
ssh_options[:forward_agent] = true
default_run_options[:pty] = true
logger.level = Logger::MAX_LEVEL