<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://pixelsndigits.com/wp-content/themes/PD_yoga_LFZ/js/tiptip.js"></script>
<link href="../../Stylesheets/tipTip.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function MM_preloadImages() { //v3.0
		var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}

	function MM_swapImgRestore() { //v3.0
		var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}

	function MM_findObj(n, d) { //v4.01
		var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		if(!x && d.getElementById) x=d.getElementById(n); return x;
	}

	function MM_swapImage() { //v3.0
		var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
	
	jQuery(function(){
	    jQuery("span.qualified").tipTip();
	    jQuery("span.not_qualified").tipTip();
	});
	
	jQuery(window).load(function() {
		var windowWidth = jQuery(window).width();
		var roster_img_width = jQuery('div.row.swimmer .pic img').width();
		var roster_img_height = jQuery('div.row.swimmer .pic img').height();
		var magic_num = roster_img_height / roster_img_width;
		var backup_height = windowWidth * 0.4 * magic_num;
		if (windowWidth < 633) {
			roster_img_height = backup_height;
			
			jQuery('div.row.swimmer div').css('height', roster_img_height / 5);
			jQuery('div.row.swimmer .pic').css('height',roster_img_height);
		}
		else {
			jQuery('div.row.swimmer div').removeAttr("style");
		}
		if (roster_img_height > 0) {
			jQuery('div.row.swimmer').css('height',roster_img_height);
		}
		
		//menu size
		var menu_num = 175/900;
		var menu_width = jQuery('div.MenuDiv1').width();
		var menu_height = menu_width * menu_num;
		jQuery('div.MenuDiv1').css('height',menu_height);
		
		//div1 items width
		var div1_width = jQuery('#div1').width();
		var menu_item_width = div1_width / 5;
		jQuery('#div1 ul li a').css('width',menu_item_width * 0.9);
		
		//div1 items height
		var menudiv1_height = jQuery('.MenuDiv1').height();
		var menu_item_num = 60 / 188.406;
		if (windowWidth > 1183 || windowWidth < 633) {
			jQuery('#div1 ul li a').css('height',menudiv1_height * menu_item_num);
			jQuery('#div1 ul li ul').css('top',menudiv1_height * menu_item_num);
			jQuery('#MediaDiv1').css('top', menudiv1_height * menu_item_num);
		}
		else {
			jQuery('#div1 ul li a').css('height',menudiv1_height * menu_item_num * .9);
			jQuery('#div1 ul li ul').css('top',menudiv1_height * menu_item_num * .9);
			jQuery('#MediaDiv1').css('top', menudiv1_height * menu_item_num * .9);
		}
		
		
		//swimmer page info section div heights
		var swimmer_page_img_height = jQuery('img.swimmer_pic').height();
		var rest_of_divs_height = swimmer_page_img_height / 6;
		if (windowWidth < 480) {
			jQuery('div.swimmer_info_row div').css('height', rest_of_divs_height * .65);
			jQuery('div.swimmer_info_row div').css('padding-top', rest_of_divs_height * .35);
		}
		else {
			jQuery('div.swimmer_info_row div').css('height', rest_of_divs_height * .6);
			jQuery('div.swimmer_info_row div').css('padding-top', rest_of_divs_height * .4);
		}
	});
	jQuery(window).resize(function() {
		//roster image and div sizes
		var windowWidth = jQuery(window).width();
		var roster_img_width = jQuery('div.row.swimmer .pic img').width();
		var roster_img_height = jQuery('div.row.swimmer .pic img').height();
		if (windowWidth < 633) {
			jQuery('div.row.swimmer div').css('height', roster_img_height / 5);
			jQuery('div.row.swimmer .pic').css('height',roster_img_height);
		}
		else {
			jQuery('div.row.swimmer div').removeAttr("style");
		}
		if (roster_img_height != 0) {
			jQuery('div.row.swimmer').css('height',roster_img_height);
		}
		
		//menu size
		var menu_num = 175/900;
		var menu_width = jQuery('div.MenuDiv1').width();
		var menu_height = menu_width * menu_num;
		jQuery('div.MenuDiv1').css('height',menu_height);
		
		//div1 items width
		var div1_width = jQuery('#div1').width();
		var menu_item_width = div1_width / 5;
		jQuery('#div1 ul li a').css('width',menu_item_width * 0.9);
		
		//div1 items height
		var menudiv1_height = jQuery('.MenuDiv1').height();
		var menu_item_num = 60 / 188.406;
		if (windowWidth > 1183 || windowWidth < 633) {
			jQuery('#div1 ul li a').css('height',menudiv1_height * menu_item_num);
			jQuery('#div1 ul li ul').css('top',menudiv1_height * menu_item_num);
			jQuery('#MediaDiv1').css('top', menudiv1_height * menu_item_num);
		}
		else {
			jQuery('#div1 ul li a').css('height',menudiv1_height * menu_item_num * .9);
			jQuery('#div1 ul li ul').css('top',menudiv1_height * menu_item_num * .9);
			jQuery('#MediaDiv1').css('top', menudiv1_height * menu_item_num * .9);
		}
		
		
		//swimmer page info section div heights
		var swimmer_page_img_height = jQuery('img.swimmer_pic').height();
		var rest_of_divs_height = swimmer_page_img_height / 6;
		if (windowWidth < 480) {
			jQuery('div.swimmer_info_row div').css('height', rest_of_divs_height * .65);
			jQuery('div.swimmer_info_row div').css('padding-top', rest_of_divs_height * .35);
		}
		else {
			jQuery('div.swimmer_info_row div').css('height', rest_of_divs_height * .6);
			jQuery('div.swimmer_info_row div').css('padding-top', rest_of_divs_height * .4);
		}
	});
</script>