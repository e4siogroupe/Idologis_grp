$(function() {
	$('#opacity').on('click', function(){
		$('#opacity').hide();
	});

	// Chargement des Locations
	var tri = null;

    $(document).on('change', '.content select', function(){
    	var id = $(this).val();

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
	    	url: host + "ajax/selectLocations.php",
	    	data: {
	    		tri: (tri)
	    	},
	    	complete: function(request) {
	    		$('.content table tbody').html('');

	    		var data = JSON.parse(request.responseText);
                if(data.length === 0) {
                   $('.content table').hide();
                   $('.content select').hide();

                   $('.content table').after('<div class="error">Aucune location pour le moment.</div>');
                }
                else {
                    $('.content table').show();
                    $('.content select').show();
                    $('.content .error').remove();

                    var idRow = 1;
                    $.each(data, function(index, value){
                        $('.content table tbody').append('<tr>' +
                                                                '<td>' + value.ref + '</td>' +
                                                                '<td>' + value.type + '</td>' +
                                                                '<td>' + value.secteur + '</td>' +
                                                                '<td>' + value.surface + ' m²</td>' +
                                                                '<td>' + value.loyer + ' € / mois</td>' +
                                                                '<td><button data-id="' + idRow + '" data-ref="' + value.ref + '">Détails</button></td>' +
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

                // Afficher via URL
                hash = window.location.href.split('#')[1];
                if(hash) {
                    if(!isNaN(hash)) {
                     $('.content table tbody').find('button[data-ref="'+hash+'"]').click();
                    }
                }
	    	}
	    });
    }

    // Détails
    $(document).on('click', '.content table tbody button', function(){
    	var idRow = $(this).data('id');
    	var detailsRow = details[idRow];

    	$('#opacity .opacity-content .opacity-content-popup').html( '<div class="opacity-content-popup-close"></div><h3>Détails</h3>' + 
                                                                    '<img src="'+host+'img/' + detailsRow.img + '.png" alt="Image d\'illustration" />' + 
                                                                    '<div class="infos">' + 
                                                                        '<b>Ref:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(0).html() + '<br />' +
        																'<b>Type:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(1).html() + '<br />' +
        																'<b>Secteur:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(2).html() + '<br />' +
        																'<b>Surface:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(3).html() + '<br />' +
        																'<b>Loyer:</b>' + $('.content table tbody tr').eq(idRow-1).find('td').eq(4).html() + '<br />' +
        																'<b>Terrain:</b>' + detailsRow.terrain + '<br />' +
        																'<b>Classe:</b>' + detailsRow.classe + '<br />' +
        																'<b>Plus:</b>' + detailsRow.plus +
        															'</div>');

    	$('#opacity').css('display', 'table');
    	$('#opacity .opacity-content-popup').css('margin-top', $(window).height()).show();
        $('#opacity .opacity-content-popup').animate({"margin-top": 0}, 100);
    });
});