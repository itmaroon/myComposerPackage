<?php
namespace Itmar\MyComposerPackage;

if ( defined( 'WP_CLI' ) && WP_CLI ) {
    class MyCommandClass extends \WP_CLI_Command {
		public function __invoke( $args, $assoc_args ) {
			list( $category ) = $args;
			\WP_CLI::line("Command args: {$category}");
		}
	}
}
