<head>
<title><?=$layout->title?></title>
</head>
<body>
<div align="center"><img src="<?=base_url()?>upload_img/<?=$layout->header?>" /></div>
<div align="center">
<? foreach($top_nav as $nav):?>
	<a href="<?=base_url()?>index.php/start/page/<?=$nav->linkto?>">
	<?=$nav->title;?>
	</a>&nbsp;
<? endforeach;?>
</div>
<hr/>
<?=$page->content?>
</body>