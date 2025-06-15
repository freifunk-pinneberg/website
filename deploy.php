<?php

namespace Deployer;

require 'recipe/typo3.php';

// Project name
set('application', 'ffpi-webseite');

// Project repository
set('repository', 'git@github.com:freifunk-pinneberg/website.git');
set('git_recursive', false);
set('branch', 'master');

// TYPO3 Path
set('typo3_webroot', 'web');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', ['web/typo3conf/AdditionalConfiguration.php']);
add('shared_dirs', ['var', 'fileadmin']);

// Writable dirs by web server
add('writable_dirs', ['var']);


// Hosts

host('pinneberg.freifunk.net')
    ->forwardAgent(true)
    ->set('deploy_path', '/var/www/vhosts/pinneberg.freifunk.net_v4');

// Tasks

// Custom Symlink Task
desc('Create symlinks');
task('create_symlinks', function () {
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/download.pinneberg.freifunk.net/ download');
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/forum.pinneberg.freifunk.net/ forum');
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/piwik.pinneberg.freifunk.net/ piwik');
    run('cd {{release_path}}/web && ln -s /var/www/vhosts/stats.pinneberg.freifunk.net/ stats');
});
before('deploy:unlock', 'create_symlinks');

//task('build', function () {
//    run('cd {{release_path}} && build');
//});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

