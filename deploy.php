<?php

namespace Deployer;

require 'recipe/typo3.php';

// Project name
set('application', 'ffpi-webseite');

// Project repository
set('repository', 'git@github.com:freifunk-pinneberg/website.git');
set('branch', 'feature/typo3-13');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);
set('keep_releases', 5);

// Shared files/dirs between deploys
add('shared_files', ['config/system/additional.php']);
#add('shared_dirs', ['var', 'fileadmin']);

// Writable dirs by web server
add('writable_dirs', ['var', 'fileadmin', 'web/typo3temp', 'web/uploads', 'web/typo3conf']);


// Hosts

host('pinneberg.freifunk.net')
    ->set('forward_agent', true)
    ->set('deploy_path', '/var/www/vhosts/pinneberg.freifunk.net_v5');

// Tasks

// Custom Symlink Task
desc('Create symlinks');
task('create_symlinks', function () {
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/download.pinneberg.freifunk.net/ download');
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/forum.pinneberg.freifunk.net/ forum');
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/piwik.pinneberg.freifunk.net/ piwik');
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/stats.pinneberg.freifunk.net/ stats');
});
before('deploy:shared', 'create_symlinks');

//task('build', function () {
//    run('cd {{release_path}} && build');
//});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

