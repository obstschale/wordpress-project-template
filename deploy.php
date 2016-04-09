<?php

require_once 'recipe/common.php';

set( 'repository', 'git@gitlab.com:user/repo.git' );
set( 'keep_releases', 3 );

set( 'shared_files', [ 'production-config.php' ] );
set( 'shared_dirs', [ 'public/wp-content/uploads', 'public/wp-content/languages' ] );
set( 'writable_dirs', [ 'public/wp-content/uploads', 'public/wp-content/languages' ] );

serverList( '../servers.yml' );

/**
 * Create symlink to last release.
 * Adjusted Task for my WP repo structure
 */
task( 'deploy:symlink', function () {
	run( "cd {{deploy_path}} && ln -sfn {{release_path}}/public current" ); // Atomic override symlink.
	run( "cd {{deploy_path}} && rm release" ); // Remove release link.
} )->desc( 'Creating symlink to release' );

/**
 * Rollback to previous release.
 * Adjusted Task for my WP repo structure
 */
task( 'rollback', function () {
	$releases = env( 'releases_list' );

	if ( isset( $releases[1] ) ) {
		$releaseDir = "{{deploy_path}}/releases/{$releases[1]}/public";

		// Symlink to old release.
		run( "cd {{deploy_path}} && ln -nfs $releaseDir current" );

		// Remove release
		run( "rm -rf {{deploy_path}}/releases/{$releases[0]}" );

		if ( isVerbose() ) {
			writeln( "Rollback to `{$releases[1]}` release was successful." );
		}
	} else {
		writeln( "<comment>No more releases you can revert to.</comment>" );
	}
} )->desc( 'Rollback to previous release' );

task( 'deploy', [
	'deploy:prepare',
	'deploy:release',
	'deploy:update_code',
	'deploy:vendors',
	'deploy:shared',
	'deploy:symlink',
	'cleanup'
] )->desc( 'Deploying Your Project' );

after( 'deploy', 'success' );
