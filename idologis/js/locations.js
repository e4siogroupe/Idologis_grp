$(function() {
	$('#opacity').on('click', function(){
		$('#opacity').hide();
	});

	// Chargement des Locations
	var tri = null;

    $('.selectpicker option').on('click', function(){
    	var id = $(this).attr('value');
    	if(id === "1") { // Croissant
    		tri = "ASC";
    	}
    	else if(id === "2") { // Decroissants
    		tri = "DESC";
    	}

    	loadLocations();
    });

    loadLocations();

    var details;
    function loadLocations() {
    	$('.content table tbody').html('<tr><td></td><td></td><td>Chargement...</td><td></td><td></td><td></td></tr>');
    	details = [];

    	$.ajax({
	    	method: "POST",
	    	url: host + "control/selectLocations.php",
	    	data: {
	    		tri: (tri)
	    	},
	    	complete: function(request) {
	    		$('.content table tbody').html('');

	    		var data = JSON.parse(request.responseText);
	    		var idRow = 1;
	    		$.each(data, function(index, value){
	    			$('.content table tbody').append('<tr>' +
	    													'<td>' + value.ref + '</td>' +
	    													'<td>' + value.type + '</td>' +
	    													'<td>' + value.secteur + '</td>' +
	    													'<td>' + value.surface + '</td>' +
	    													'<td>' + value.loyer + '</td>' +
	    													'<td><button data-id="'+idRow+'">Détails</button></td>' +
	    												'</tr>');

	    			details[idRow] = {
	    				"terrain": value.terrain,
	    				"classe": value.classe,
	    				"plus": value.plus,
	    				"img" : value.img
	    			}

	    			idRow++;
	    		});
	    	}
	    });
    }

    // Détails
    $(document).on('click', '.content table tbody button', function(){
    	var idRow = $(this).data('id');
    	var detailsRow = details[idRow];

    	$('#opacity .opacity-content .opacity-content-popup').html( '<b>Ref:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(0).html() + '<br />' +
    																'<b>Type:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(1).html() + '<br />' +
    																'<b>Secteur:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(2).html() + '<br />' +
    																'<b>Surface:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(3).html() + '<br />' +
    																'<b>Loyer:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(4).html() + '<br />' +
    																'<b>Terrain:</b>' + detailsRow.terrain + '<br />' +
    																'<b>Classe:</b>' + detailsRow.classe + '<br />' +
    																'<b>Plus:</b>' + detailsRow.plus + '<br /><br />' +
    																if(detailsRow.img != null){
    																'<img width="600" height="400" src="img/' + detailsRow.img + '.png"></img>');
    																}

    	$('#opacity').css('display', 'table');
    	$('#opacity .opacity-content').show();
    });
});