$(document).ready(function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
	});
	var idF = $('#idFutsal').val();
	var idL = $('#idLapangan').val();
	var vHarga ;
	var vIdPrice ;
	var totalMain=0; 
	console.log('ini tes idL'+idL);

	//when program load first
	$('.w3-container').empty();
		var idL = $('#idLapangan').val();
		var yes = $('#testt1').val();
		//console.log('ini tes idL'+idL);
		//console.log('ini tes yes'+yes);
		//console.log('ini tes idf'+idF);
		$.ajax({
			type: 'GET',
			url: '/projectsport_dev/detailPage/'+idF+'/'+idL+'/list',
			dataType: 'json',
			success: function (data) {
				console.log("Sukses");
				//console.log(data);
			    for(x=0;x<data.length;x++){

				$('#button').empty().append(data[x]['jam']);
				var buttonTrue = '<button class="button-book-detail" id="btn'+data[x]['jam']+'" value="'+data[x]['jam']+'" onclick=getJam("'+data[x]['jam']+'","btn'+data[x]['jam']+'","first_jam"),"last_jam"> '+data[x]['jam']+':00 WIB </button>';
				var buttonFalse = '<button class="button-book-detail" id="'+data[x]['jam']+'"  disabled style="color:red;">'+data[x]['jam']+':00 WIB</button>';
				//console.log(data[x]['status']);
				//console.log(button);
					if (data[x]['status']=='BOOKED'){
						$('.w3-container').append(buttonFalse);
					}
					else {
						$('.w3-container').append(buttonTrue);
					}
				
				}
			},
		    error: function( _response ){
	            console.log("Error");
	        }
		});


	$('li a').click(function(e){
		e.preventDefault();
		$('.w3-container').empty();
		$('#waktu').val('');
		$('#first_jam').val('');
		$('#last_jam').val('');
		$('#last_jam').val('');
		$('#Harga_per_jam').val('');
		var idL = $('#idLapangan').val();
		var yes = $('#testt1').val();
		//console.log('ini tes idL'+idL);
		//console.log('ini tes yes'+yes);
		//console.log('ini tes idf'+idF);
		$.ajax({
			type: 'GET',
			url: '/projectsport_dev/detailPage/'+idF+'/'+idL+'/list',
			dataType: 'json',
			success: function (data) {
				console.log("Sukses");
				//console.log(data);
			    for(x=0;x<data.length;x++){

				$('#button').empty().append(data[x]['jam']);
				var buttonTrue = '<button class="button-book-detail" id="btn'+data[x]['jam']+'" value="'+data[x]['jam']+'" onclick=getJam("'+data[x]['jam']+'","btn'+data[x]['jam']+'","first_jam"),"last_jam"> '+data[x]['jam']+':00 WIB </button>';
				var buttonFalse = '<button class="button-book-detail" id="'+data[x]['jam']+'"  disabled style="color:red;">'+data[x]['jam']+':00 WIB</button>';
				//console.log(data[x]['status']);
				//console.log(button);
					if (data[x]['status']=='BOOKED'){
						$('.w3-container').append(buttonFalse);
					}
					else {
						$('.w3-container').append(buttonTrue);
					}
				
				}
			},
		    error: function( _response ){
	            console.log("Error");
	        }
		});
	});
	
	$('.btn-warning').click(function(e){
		e.preventDefault();
		var idL = $('#idLapangan').val();
		console.log('IDL ='+idL);
		$.ajax({
			type: 'GET',
			url: '/projectsport_dev/detailPage/cekharga/'+idL+'',
			dataType: 'json',
			success: function (data) {
				console.log("Sukses");
				console.log(data);
				vHarga = data[0]['price'];
				vIdPrice = data[0]['id_price'];
				vTotalMain = $('#Total_main').val();
				vTotalBayar = vTotalMain * vHarga;
				//console.log('testHarga'+vHarga);
				//console.log('vIdPrice'+vIdPrice);
				console.log('vTotalBayar'+vTotalBayar);
				$('#Harga_per_jam').val(vHarga);
				$('#idPrice').val(vIdPrice);
				$('#Tot_bayar').val(vTotalBayar);
			},
		    error: function( _response ){
	            console.log("Error");
	        }
		});
	});
 });

