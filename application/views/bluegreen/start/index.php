<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$layout->title?></title>
<link href="<?=base_url()?>templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<link type="text/css" href="<?=base_url()?>res/css/thickbox.css" rel="stylesheet"/>
<link type="text/css" href="<?=base_url()?>res/css/global.css" rel="stylesheet"/>
<script src="<?=base_url()?>res/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url()?>res/js/thickbox.js" type="text/javascript"></script>
<script type="text/javascript">
	function changeTheme()
	{
		var theme = document.getElementById('cboTheme').value;
		document.location="<?=base_url()?>index.php/start/changeTheme/"+theme;
	}
</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 45px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    
    	<!--<div id="site_title">
            <h1><a href="<?=base_url()?>" target="_parent">
                <!--<img src="<?=base_url()?>images/templatemo_logo.png" alt="WS Koi Center" />-->
				<p align="center" class="style1">WS KOI CENTER </p>
                <div align="center"><span class="style2">Jl. Imogiri Timur KM 10, Ketonggo, Wonokromo</span>
				<br/>
				<div align="center"><marquee scrolldelay="120">Untuk kontak langsung, hubungi kami di 081 2222 1975. Layanan kami akan cepat, profesional dan tepat sesuai dengan keinginan Anda!</marquee></div>
                       <!-- </a></h1>
      	</div>-->
                        </div>
                <div class="cleaner"></div>
	</div>
		<div class="globalnav" id="nav1" align="center">
			<a id="fp1"></a>
			<a id="fp2"></a>
			<a <? if(strtolower($this->session->userdata('active_page'))==strtolower("layanan")) { ?> class="active" <? } ?> id="fp3" href="<?=base_url()?>index.php/layanan">Layanan perancangan, pembuatan dan perawatan taman dan kolam ikan</a>
			<a <? if(strtolower($this->session->userdata('active_page'))==strtolower("gallery")) { ?> class="active" <? } ?> id="fp4" href="<?=base_url()?>index.php/gallery">Galery</a>
			<a id="fp5"></a>
			<a id="fp7"></a>
  </div>
			
		
    <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">
        
<!--            <div id="templatemo_slider">
            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                        
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/1" target="_parent">
                                    <img src="<?=base_url()?>images/slider/templatemo_slide02.jpg" alt="Website Template 01" />
                                </a>
                            </div>
                            
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/2" target="_parent">
                               	<img src="<?=base_url()?>images/slider/templatemo_slide01.jpg" alt="Website Template 02" />
                                </a>
                            </div>
                            
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/3" target="_parent">
                               	<img src="<?=base_url()?>images/slider/templatemo_slide03.jpg" alt="Website Template 03" />
                                </a>
                            </div>
                            
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/4" target="_parent">
                               	<img src="<?=base_url()?>images/slider/templatemo_slide04.jpg" alt="Website Template 04" />
                                </a>
                            </div>
                      
                        </div>
                    </div>
                </div>
-->                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="<?=base_url()?>js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="<?=base_url()?>js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '800px',/*600px*/
                    height : '240px',
                    speed : 600,
                    easing : 'easeInOutQuart'
                    });
                    });
                </script>
                <script src="<?=base_url()?>js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="<?=base_url()?>js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
      </div> <!-- end of templatemo_slider -->  
        
            
            <h2><?=$title?></h2>
            <p><?=$content?></p> 
            
</div> <!-- end of templatemo_content -->
        
        
    
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->
    
<div id="templatemo_footer">
        Hak Cipta © 2012 <a href="http://www.wskoicentre.com">WS Koi Center</a>
    
    </div> <!-- end of footer -->

</div> <!-- end of wrapper -->

</body>
</html>