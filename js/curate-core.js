/**
 * Unregister Image block styles.
 */
wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/image', [ 'rounded' ] );

    wp.blocks.registerBlockStyle( 
		'core/image', {
			name: 'black-border',
			label: 'Black Border',
		}
	);

} );

//console.log('curate-core loaded')