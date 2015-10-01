<?php 

$content_videos = new Content();

echo Content::setOpenTag("div","container"); 

	echo $content_videos->setopenTag("div","col-lg-12 col-md-12 col-sm-12 col-xs-12 section_videos");

	$query = $link->query("SELECT * FROM Videos ORDER BY id DESC");

	while ($row = $query->fetch_object()) {
	echo $content_videos->setOpenTag("div","col-lg-6 col-md-6 col-sm-12 col-xs-12");
		echo $content_videos->setContent("$row->title","h4");
		echo $content_videos->setFrame("$row->href","col-lg-12 col-md-12 col-sm-12 col-xs-12",0,1);
	echo $content_videos->setCloseTag("div");
	}

	echo $content_videos->setCloseTag("div");

echo Content::setCloseTag("div"); ?>