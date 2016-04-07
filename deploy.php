<?php

require_once 'recipe/common.php';

set('repository', 'git@gitlab.com:obstschale/myawesomehost.git');
set('keep_releases', 3);

serverList('servers.yml');

/**
 * Create symlink to last release.
 */
task('deploy:symlink', function () {
	run("cd {{deploy_path}} && ln -sfn {{release_path}}/public current"); // Atomic override symlink.
	run("cd {{deploy_path}} && rm release"); // Remove release link.
})->desc('Creating symlink to release');

task('deploy', [
	'deploy:prepare',
	'deploy:release',
	'deploy:update_code',
	'deploy:vendors',
	'deploy:symlink',
	'cleanup'
])->desc('Deploying Your Project');

after('deploy', 'success');
