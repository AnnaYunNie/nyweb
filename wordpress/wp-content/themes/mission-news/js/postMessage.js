( function( $ ) {

    var panel = $('html', window.parent.document);
    var body = $('body');
    var siteTitle = $('#site-title');
    var tagline = $( '.tagline' );

    // Site title
    wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
            // if there is a logo, don't replace it
            if( siteTitle.find('img').length == 0 ) {
                siteTitle.children('a').text( to );
            }
        } );
    } );

    // Tagline
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( to ) {
            var tagline = $('.tagline');
            if( tagline.length == 0 ) {
                $('#title-container').append('<p class="tagline"></p>');
            }
            tagline.text( to );
        } );
    } );
} )( jQuery );