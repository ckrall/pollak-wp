$(document).ready(function() {
	// Draw the datatable on the main search page

	/*
	$(document).ready(function(){
	   var table = $('#example').DataTable({
	      dom: '<"alphabet-container"A><"table-container"lfrtip>',
	      alphabetSearch: {
	         column: 0
	      },
	      responsive: true
	   });
	});
	*/

	oTable = $('table.dataTable').DataTable({
		/*
		'ajax': '/medlabscatalog/model/catalog.cfc?showtemplate=0&method=getDisplay', // Gets JSON for display
        'columns': [
            { 'data': 'labtestid' },
            { 'data': 'testname',
            	'fnCreatedCell': function(nTd, sData, oData, iRow, iCol) {
            		$(nTd).html('<a href="/medlabscatalog/details.cfm?testid='+oData.labtestid+'">'+oData.testname+'</a>')
            	}
            },
            { 'data': 'testreportname' },
            { 'data': 'testsynonyms' }
        ],
		*/
		/*
		'columnDefs': [ // Hides Report Title and Synonyms columns, but they are still searchable
			{
				'targets': [2,3],
				'visible': false,
				'searchable': true
			}
		],
		*/
		'order': [[ 1, "asc" ]], // Default order set to test name column
		'lengthMenu': [ [10, 20, 50, -1], [10, 20, 50, 'All'] ],

		// Toolbar Settings
		// Alfrtip
		//
		// A = ? alphabet search widget
		// l = "show x results" dropdown widget
		// f = filter/search inut field widget
		// r = ?
		// t = table structure
		// i = ? "showing x to y of z items" widget
		// p = pagination widget
		//
		//'dom': '<"row"<"col-lg-12 col-sm-12 mb-4"<"col-sm-12"f>><"col-lg-12 col-sm-12"<"#atoz.col-sm-12 mb-5">>t<"col-lg-12 col-sm-12"<"row mt-4"<"col-lg-6 col-sm-12 mb-4 text-lg-right text-sm-left"l><"col-lg-6 col-sm-12 mb-4 text-lg-right text-sm-left"p>>>>',
		// End Toolbar Settings

		'dom': '<"row"<"col-lg-12 mb-5"f><"#atoz.col-lg-12 mb-5">t<"col-lg-6 col-sm-12 mt-5"l><"col-lg-6 col-sm-12 mt-5"p>>',

		'bDeferRender': true,
		'createdRow': function( row, data, dataIndex ) {
		    $(row).attr('data-id',data.labtestid); // When a row is created, add the labtestid as row ID
		 },
		 'language': {
			 // 'search': 'Filter Results: ',
			 'search': '',
			 'searchPlaceholder': 'Filter by Keyword, Test Name or ID',
			 'lengthMenu': 'Showing _MENU_ Results'
		 },
		 'mark': {
		 	className: 'highlight',
		 	element: 'span'
		 }
	});

	$('.dataTables_filter input[placeholder]').each(function () {
        $(this).attr('size', $(this).attr('placeholder').length-7);
    });

	// Alpha Search
	var _alphabetSearch = '';

	$.fn.dataTable.ext.search.push( function ( settings, searchData ) {
	    if ( ! _alphabetSearch ) {
	        return true;
	    }

	    if ( searchData[1].charAt(0) === _alphabetSearch ) {
	        return true;
	    }

	    if ( _alphabetSearch == '0-9' && !isNaN(searchData[1].charAt(0))) {
	    	return true;
	    }

	    return false;
	} );

	// Alpha Search

	    var alphabet = $('<div class="alphabet"/>');
	    //alphabet.prepend('A-Z&nbsp;Search:&nbsp;');
	    alphabet.prepend('');

	    $('<span class="clear active"/>')
	        .data( 'letter', '' )
	        .html( 'All' )
	        .appendTo( alphabet );

	    for ( var i=0 ; i<26 ; i++ ) {
	        var letter = String.fromCharCode( 65 + i );

	        $('<span/>')
	            .data( 'letter', letter )
	            .html( letter )
	            .appendTo( alphabet );
	    }

	    $('<span/>')
	    	.data( 'letter', '0-9')
	    	.html( '0-9' )
	    	.appendTo( alphabet );

	    $('div#atoz').html(alphabet);

	    alphabet.on( 'click', 'span', function () {
	        alphabet.find( '.active' ).removeClass( 'active' );
	        $(this).addClass( 'active' );

	        _alphabetSearch = $(this).data('letter');
	        oTable.draw();
	    });
});
