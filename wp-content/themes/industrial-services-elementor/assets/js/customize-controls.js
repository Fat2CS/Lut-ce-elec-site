( function( api ) {

	// Extends our custom "industrial-services-elementor" section.
	api.sectionConstructor['industrial-services-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );