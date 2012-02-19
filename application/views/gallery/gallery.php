<p><a href="<?=base_url()?>index.php/gallery/openUploadForm/-1" class="thickbox">Tambah gambar</a></p>

  <? foreach($galleryList as $g)  { ?>
<div style="float:left">
  <img src="<?=base_url()?>upload_img/gallery/<?=$g->filename?>" alt="<?=$g->title?>" /><br/>
  <?=$g->title?>
  </div>
  <? } ?>
