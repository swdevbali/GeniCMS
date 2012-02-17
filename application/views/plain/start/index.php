<head>
<link type="text/css" href="<?=base_url()?>res/css/thickbox.css" rel="stylesheet"/>
<script src="<?=base_url()?>res/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url()?>res/js/thickbox.js" type="text/javascript"></script>

<script type="text/javascript">
	function changeTheme()
	{
		var theme = document.getElementById('cboTheme').value;
		document.location="<?=base_url()?>index.php/start/changeTheme/"+theme;
	}
</script>
<title><?=$layout->title?></title>
</head>
<body>
<div style="background:#009900">
Change theme : <?=form_dropdown('cboTheme',$cboTheme,$layout->theme, 'id="cboTheme" onChange="changeTheme();"')?>
</div>
<div align="center"><img src="<?=base_url()?>upload_img/<?=$layout->header?>" /></div>
<div align="center">
<? foreach($top_nav as $nav):?>
                
				<? if($nav->type=='Page'){ ?>
				<a href="<?=base_url()?>index.php/start/page/<?=$nav->linkto?>" <? if(strtolower($this->session->userdata('active_page'))==strtolower($nav->title)) { ?> class="current" <? } ?>><?=$nav->title;?></a>
				<? }else if($nav->type=='Url'){ ?>
				<a target="_blank" href="<?=$nav->linkto?>" <? if(strtolower($this->session->userdata('active_page'))==strtolower($nav->title)) { ?> class="current" <? } ?>><?=$nav->title;?></a>				
				<? }else if($nav->type=='Custom'){ ?>
				<a href="<?=base_url()?>index.php/<?=$nav->linkto?>" <? if(strtolower($this->session->userdata('active_page'))==strtolower($nav->title)) { ?> class="current" <? } ?>><?=$nav->title;?></a>				
				
				<? } ?>
				&nbsp;
			<? endforeach;?>
</div>
<hr/>
<?=$content?>
</body>