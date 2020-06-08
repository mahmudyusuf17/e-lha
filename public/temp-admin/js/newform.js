// $(document).ready(function(){


// 	function tambahform(){
// 		var isi = '<div id="tambahform" style="display:none">';

// 		isi += '<div class="input"><input type="text" name="nama'+n+'" required placeholder="Nama Lengkap ke-'+n+'"></div><div class="input"><input type="text" name="alamat'+n+'" required placeholder="Alamat ke-'+n+'"></div><div class="input"><input type="email" name="email'+n+'" required placeholder="Email ke-'+n+'"></div><div class="input"><input type="text" name="no_hp'+n+'" required placeholder="Nomor Handphone ke-'+n+'"></div>';

// 		isi += '</div>';

// 		$('a.tambahform').before(isi);
// 		$('#tambahform'+total_member).slideDown('medium');

// 		total_member++;
// 	}

// 	function hapusMember(){
// 		total_member--;
// 		if(total_member<=1){
// 			total_member = 1;
// 		}
// 		$('#tambahform'+total_member).slideUp('medium', function(){
// 			$(this).remove();
// 		});
// 	}