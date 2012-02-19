<p><a href="<?=base_url()?>index.php/gallery/openUploadForm/-1" class="thickbox">Tambah gambar</a></p>

  <? foreach($galleryList as $g)  { ?>
<div style="float:left;border:dotted;margin-right:10px">
  <a href="<?=base_url()?>index.php/gallery/pop/<?=$g->idgallery?>?width=500&height=500" class="thickbox"><img src="<?=base_url()?>upload_img/gallery/<?=$g->filename?>" alt="<?=$g->title?>" width="150" height="150" border="0" /></a><br/>
  <p align="center"><strong><?=$g->title?></strong></p>
</div>
  <? } ?>
