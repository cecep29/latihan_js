<?php 
	
	include("../koneksi.php");
	include("../../js/JSON.php");

	$json = new Services_JSON();
	

	@$examp = $_GET["q"];
	@$page = $_GET['page'];
	@$sidx = $_GET['sidx'];
	@$limit = $_GET['rows'];
	@$sord = $_GET['sord'];
	
	  if (!$sidx) $sidx = 1;
      if (!$sord) $sord = 'asc';       
      if (!$page) $page = 1;
      if (!$limit) $limit = 10;
  
	$result = mysqli_query($link, "SELECT COUNT(*) AS count FROM pelanggan");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = $row['count'];


	if($count > 0){
		$total_pages = ceil($count/$limit);
	}else {
		$total_pages = 0;
	}

	if($page > $total_pages) $page=$total_pages;

	if($limit < 0) $limit = 0;

		$start = $limit*$page - $limit;

	if($start < 0) $start = 0;


	$sql = "SELECT * FROM pelanggan ORDER BY $sidx $sord LIMIT $start , $limit";

	$result = mysqli_query($link, $sql) or die('Error'.mysqli_error($link));
	
	$responce = new stdClass();

	$responce->page = $page;
	$responce->total= $total_pages;
	$responce->records = $count;
	
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$responce->rows[$i]['id'] = $row['id_plg'];
		$responce->rows[$i]['cell'] = array($row['nama'],$row['alamat'],$row['tlp']);
		$i++;
	}

	echo $json->encode($responce);
	


?>