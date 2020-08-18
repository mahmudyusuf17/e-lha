
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td>'+i+'</td><td><input type="text" id="nip" name="nip" class="form-control form-control-sm" required></td><td><input type="text" id="nama" name="nama" class="form-control form-control-sm" required></td><td><input type="text" id="unit" name="unit" class="form-control form-control-sm" required></td><td><input type="text" id="jabatan" name="jabatan" class="form-control form-control-sm" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove btn-sm">x</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
});