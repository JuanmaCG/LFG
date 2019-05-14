<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>

    <title>Ranking</title>
</head>
<body>

    <table id="usuarios" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Username</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Perfil</th>
                <th>MMR</th>
            </tr>
        </thead>
    </table>
 <script>

    $(document).ready(function() {
	$('#usuarios').dataTable({
		bProcessing: true,
		sAjaxSource: '../php/data.php',
		aoColumns: [ { mData: 'username' }, { mData: 'name' }, { mData: 'lastName' }, { mData: 'perfil' }, { mData: 'mmr' } ]
	});
});
</script>

    <!--<script type="text/javascript" charset="utf8" src="../php/datatable.js"></script>-->

</body>
</html>