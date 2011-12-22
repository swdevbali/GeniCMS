<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$layout->title?></title>
<meta name="keywords" content="free website templates, pro teal, web design, 2-column" />
<meta name="description" content="Pro Teal - free website template (2-column layout) from templatemo.com" />
<link href="<?=base_url()?>templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="<?=base_url()?>" target="_parent">
                <img src="<?=base_url()?>images/templatemo_logo.png" alt="Site Title" width="200" height="50" />
                <span>Penangkaran Ikan Koi Terbaik </span>
            </a></h1>
      	</div>
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Enter a keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
        
        <div class="cleaner"></div>
	</div> <!-- end of header -->
    
    
    <div id="templatemo_menu">
            <ul>
			<? foreach($top_nav as $nav):?>
                <li><a href="<?=base_url()?>index.php/start/page/<?=$nav->linkto?>" <? if(strtolower($this->session->userdata('active_page'))==strtolower($nav->title)) { ?> class="current" <? } ?>><?=$nav->title;?></a></li>
			<? endforeach;?>
            </ul>    	
    	</div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">
        
            <div id="templatemo_slider">
            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                        
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/1" target="_parent">
                                    <img src="<?=base_url()?>images/slider/templatemo_slide02.jpg" alt="Website Template 01" />
                                </a>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/2" target="_parent">
                               	<img src="<?=base_url()?>images/slider/templatemo_slide01.jpg" alt="Website Template 02" />
                                </a>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/3" target="_parent">
                               	<img src="<?=base_url()?>images/slider/templatemo_slide03.jpg" alt="Website Template 03" />
                                </a>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/4" target="_parent">
                               	<img src="<?=base_url()?>images/slider/templatemo_slide04.jpg" alt="Website Template 04" />
                                </a>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="<?=base_url()?>js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="<?=base_url()?>js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '600px',
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
        
            
            <h2><?=$page->title?></h2>
            <p><?=$page->content?></p> 
            
        </div> <!-- end of templatemo_content -->
        
        <div id="templatemo_sidebar">
            
            <div class="section_rss_twitter">
        
                <div class="rss_twitter twitter">
                <a href="http://www.templatemo.com/page/1" target="_parent">Ikuti kami <span>di Twitter</span></a>
                </div>
                
                <div class="margin_bottom_20"></div>
                
                <div class="rss_twitter rss">
                <a href="http://www.templatemo.com/page/2" target="_parent">Ikuti kami di Facebook <span></span></a>
                </div>
            
            </div>
            
            <div id="sidebar_featured_project">
                
                <h3>Mengenal Ikan Koi </h3>
                <div class="left"><img src="<?=base_url()?>images/maker.png" alt="image 3" /></div>
                <div class="right">
                    <a href="#">Ikan Koi ABC </a>
                    <p>Ikan ini enak dipanggang </p>
                </div>
                
                 <div class="cleaner"></div>
                
            </div>
            
            <div id="news_section">
                
                <h3>Promosi</h3>
                        
                <div class="news_box">
                    <a href="#">Beli 2 bayar 1 </a>
                    <p>Maecenas tellus erat, dictum vel semper a, dapibus ac elit. Nunc rutrum pretium porta.</p>
                </div>
                
                <div class="news_box">
                    <a href="#">Ajak 3 teman gratis 1 </a>
                    <p>In fringilla, lorem in semper consectetur,  sapien est tempor ipsum, a convallis nisl neque in augue. </p>
                </div>
                <div class="button"><a href="news.html">View All</a></div>
                
				<div class="cleaner"></div>  
                   
            </div>
        
            <div class="cleaner"></div>
        </div>
    
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->
    
    <div id="templatemo_footer">

        <ul class="footer_menu">
			<? foreach($top_nav as $nav):?>
<li><a href="<?=base_url()?>index.php/start/page/<?=$nav->linkto?>" <? if(strtolower($this->session->userdata('active_page'))	==strtolower($nav->title)) { ?> class="current" <? } ?>><?=$nav->title;?></a></li>
			<? endforeach;?>
            <!--<li class="last_menu"><a href="contact.html">Contact Us</a>--></li>
        </ul>
    
        Hak Cipta © 2011 <a href="#">SwdevBali</a>
    
    </div> <!-- end of footer -->

</div> <!-- end of wrapper -->

</body>
</html>