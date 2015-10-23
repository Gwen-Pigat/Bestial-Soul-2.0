<?php 

echo $content->setOpenTag("div","container"); 

	echo $content->setopenTag("div","col-lg-12 col-md-12 col-sm-12 col-xs-12 section_videos");

	$query = $db->query("SELECT title,href FROM videos ORDER BY id DESC");

	while ($row = $query->fetch(PDO::FETCH_OBJ)) {
	echo $content->setOpenTag("div","col-lg-6 col-md-6 col-sm-12 col-xs-12");
		echo $content->setContent("$row->title","h4");
		echo $content->setFrame("$row->href","col-lg-12 col-md-12 col-sm-12 col-xs-12",0,1);
	echo $content->setCloseTag("div");
	}

	echo $content->setCloseTag("div");

echo $content->setCloseTag("div"); 

?>