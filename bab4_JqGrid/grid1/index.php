<!DOCTYPE html>
<html>
<head>
	<title>Demo jqGrid</title>
		<link rel="stylesheet" type="text/css" href="../../css/jquery-ui-1.8.13.custom.css">
		<link rel="stylesheet" type="text/css" href="../../css/ui.jqgrid.css">
		<link rel="stylesheet" type="text/css" href="../../themes/ui-lightness/ui.all.css">
		<script type="text/javascript" src="../../js/jquery-1.4.js"></script>
		<script type="text/javascript" src="../../js/jquery-1.5.2.min.js"></script>
		<script type="text/javascript" src="../../js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="../../js/i18n/grid.locale-en.js"></script>
		<script type="text/javascript" src="../../js/jquery.jqGrid.src.js"></script>
		<script type="text/javascript" src="../../js/jquery.table.addrow.js"></script>
		<script type="text/javascript" src="../../js/engineSearch.js"></script>
		</head>
<body>

</body>
</html>


<table style="text-align: center;" id="datagrid"></table>
<nav id="navGrid"></nav>

<script languange="javascript">
	jQuery("#datagrid").jqGrid({
		url:'listgrid.php',
		datatype: "json",
		colNames: ['Nama', 'Alamat', 'Telp'],
		colModel: [{name:'nama', index:'nama', width:100, editable: true, editoptions: {size:15}},
					{name:'alamat', index:'alamat', width:150,align:"right", editable:true, edittype:"textarea",
						editoptions:{rows:"2",cols:"30"}},
					{name:'telp', index:'telp', width:60, align:"right", editable:true, editoptions:{size:10}},
		],
		rowNum:10,
		width:600,
		pager: '#navGrid',
		sortname: 'id_plg',
		rownumbers: true,
		caption:"Pelanggan",
		editurl: 'edit_pelanggan.php',
	});

	jQuery("#datagrid").jqGrid('navGrid', '#navGrid',
								{edit:true, del:true, add:true, view:true, search:false},
								{closeAfterEdit:true, width:500},
								{closeAfterAdd:true}, {}, {},{width:500}
		);
</script>