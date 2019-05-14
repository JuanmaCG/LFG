// $(document).ready(function() {
// 	var table = $('#usuarios').dataTable({
// 		bProcessing: true,
// 		sAjaxSource: 'data.php',
// 		bPaginate: true,
// 		sPaginationType: 'full_numbers',
// 		iDisplayLength: 5,
// 		aoColumns: [ { mData: 'username' }, { mData: 'nombre' }, { mData: 'apellidos' } ]
// 	});
// });

$(document).ready(function() {
	$('#usuarios').dataTable({
		bProcessing: true,
		sAjaxSource: '../php/data.php',
		aoColumns: [ { mData: 'username' }, { mData: 'name' }, { mData: 'lastName' } , { mData: 'mmr' }]
	});
});
