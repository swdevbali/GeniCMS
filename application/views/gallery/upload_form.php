<form action="gallery/doUpload" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0">
    <tr>
      <td valign="top">File Gambar </td>
      <td valign="top"><label>
        <input name="userfile" type="file" id="userfile" />
        <input name="idgambar" type="hidden" id="idgambar" />
      </label></td>
    </tr>
    <tr>
      <td valign="top">Kategori</td>
      <td valign="top"><?=form_dropdown('cboGalleryCat',$galleryCatList,$galleryCat)?></td>
    </tr>
    <tr>
      <td valign="top">Judul</td>
      <td valign="top"><label>
        <input name="title" type="text" id="title" size="43" />
      </label></td>
    </tr>
    <tr>
      <td valign="top">Keterangan</td>
      <td valign="top"><label>
        <textarea name="description" cols="40" rows="5" id="description"></textarea>
      </label></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top"><label>
        <input type="submit" name="Submit" value="Simpan" />
      </label></td>
    </tr>
  </table>
</form>
