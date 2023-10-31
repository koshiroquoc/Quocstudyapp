<?php
	/**
	 * Application Main Page That Will Serve All Requests
	 *
	 * @package PRO CODE CIP Framework
	 * @author  Hiếu Nguyễn <dinhhieu@cipmedia.vn>
	 * @version 1.0.0
	 * @license http://cipmedia.vn
	 */
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";	
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$act = explode('_',$act);
	//print_r(count($act));
	if(count($act)>1){
		$act = $act[1];
	} else {
		$act = $act[0];
	}
	$config_open = array();
	@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
	@define ( _download_type , 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|xlsx|jpg|png|gif|JPG|PNG|GIF|txt' );
	switch($type){
		//-------------product------------------
		case 'product':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_open = array('name','seo');
					@define ( _width_thumb , 370 );
					@define ( _height_thumb , 500 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_open = array('name','seo');
					@define ( _width_thumb , 250 );
					@define ( _height_thumb , 250 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "sản phẩm";
					$config_open = array('name','content','description','image','images','seo','view','highlight','list','cat','price');
					@define ( _width_thumb , 285 );
					@define ( _height_thumb , 290 );
					@define ( _style_thumb , 1 );
					$ratio_ = 2;
					break;
				}
			break;

		case 'gia-su':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_open = array('name','seo','content','highlight');
					@define ( _width_thumb , 190 );
					@define ( _height_thumb , 150 );
					@define ( _style_thumb , 1 );
					$ratio_ = 2;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_open = array('name','seo');
					break;
				default:
					$title_main = "gia sư";
					$config_open = array('name','content','description','image','seo','view','highlight','code','list','cat','giasu');
					@define ( _width_thumb , 190 );
					@define ( _height_thumb , 150 );
					@define ( _style_thumb , 1 );
					$ratio_ = 2;
					break;
				}
			break;

		case 'lop-moi':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_open = array('name','seo','content');
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_open = array('name','seo');
					break;
				default:
					$title_main = "lớp mới";
					$config_open = array('name','content','description','seo','highlight','code','lopmoi','price','list','cat',);
					@define ( _width_thumb , 190 );
					@define ( _height_thumb , 150 );
					@define ( _style_thumb , 1 );
					$ratio_ = 2;
					break;
				}
			break;

		case 'phu-huynh':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_open = array('name','seo','content');
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_open = array('name','seo');
					break;
				default:
					$title_main = "phụ huynh";
					$config_open = array('name','content','description','image','seo','view','list','cat',);
					@define ( _width_thumb , 190 );
					@define ( _height_thumb , 150 );
					@define ( _style_thumb , 1 );
					$ratio_ = 2;
					break;
				}
			break;

			case 'tuyen-dung':
				switch($act){
					case 'list':
					$title_main = "Danh mục cấp 1";
					$config_open = array('name','seo');
					break;
					case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_open = array('name','seo');
					break;
					default:
					$title_main = "tuyển dụng";
					$config_open = array('name','content','description','image','seo','view','list','cat',);
					@define ( _width_thumb , 380 );
					@define ( _height_thumb , 200 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				}
			break;

		case 'tintuc':
			switch($act){
				case 'list':
					$title_main = "Danh mục tin tức";
					$config_open = array('name','seo');
					@define ( _width_thumb , 24 );
					@define ( _height_thumb , 24 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Tin tức";
					$config_open = array('name','content','description','image','seo','view','highlight');
					@define ( _width_thumb , 380 );
					@define ( _height_thumb , 200 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				}
			break;

		case 'day-kem':
			$title_main = "dạy kèm";
			$config_open = array('name','content','description','image','seo','view');
			@define ( _width_thumb , 380 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;

		case 'visaochon':
			$title_main = "Vì sao chọn";
			$config_open = array('name','description','seo','icon');
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 200 );
			@define ( _width_thumb_i , 81 );
			@define ( _height_thumb_i , 81 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;

		case 'khachhang':
			$title_main = "Khách hàng";
			$config_open = array('name','image','description','highlight');
			@define ( _width_thumb , 160 );
			@define ( _height_thumb , 160 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;

		case 'download':
			$title_main = "Download File";
			$config_images = "true";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 250 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;

		case 'album':
			$title_main = "Album";
			$config_open = array('image','images','name','highlight');
			@define ( _width_thumb , 800 );
			@define ( _height_thumb , 600 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		//-------------info------------------
    	case 'gioithieu':
			$title_main = 'giới thiệu';
			$config_open = array('name','description','content','seo','image');
			@define ( _width_thumb , 420 );
			@define ( _height_thumb , 300 );
			$ratio_ = 1;
			break;
		case 'banggia':
			$title_main = 'bảng giá';
			$config_open = array('content','image','seo');
			@define ( _width_thumb , 800 );
			@define ( _height_thumb , 400 );
			$ratio_ = 1;
			break;
		case 'registered':
			$title_main = 'Thông tin đăng ký';
			$config_open = array('content','seo');
			break;
		case 'trangchu':
			$title_main = 'trangchu';
			$config_open = array('thongtin','image');
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 180 );
			$ratio_ = 1;
			break;
		case 'footer':
			$title_main = 'Thông tin footer';
			$config_open = array('content');
			break;
		case 'lienhe':
			$title_main = 'Thông tin Liên hệ';
			$config_open = array('content');
			break;
		case 'httt':
			$title_main = 'Hình thức thanh toán';
			$config_open = array('name','description');
			break;
		case 'tinhtrangdh':
			$title_main = 'Tình trạng đơn hàng';
			$config_open = array('name');
			break;
		case 'khoangia':
			$title_main = 'Khoản giá';
			$config_open = array('name');
			break;
		case 'tags':
			$title_main = "tags";
			$config_open = array('name','seo','highlight');
			break;
		case 'size':
			$title_main = "size";
			$config_open = array('name');
			break;
		case 'mausac':
			$title_main = "màu sắc";
			$config_open = array('name');
			break;
		case 'bank':
			$title_main = "ngân hàng";
			$config_open = array('image');
			@define ( _width_thumb , 150);
			@define ( _height_thumb , 100);
			@define ( _style_thumb , 1);
			$ratio_ = 1;
			break;
		case 'logo':
			$title_main = 'Logo';
			$config_open = array();
			@define ( _width_thumb , 156);
			@define ( _height_thumb , 156);
			@define ( _style_thumb , 1);
			$ratio_ = 1;
			break;
		case 'banner':
			$title_main = 'Banner';
			$config_open = array();
			@define ( _width_thumb , 500 );
			@define ( _height_thumb , 156 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'bannerqc':
			$title_main = 'Banner qc';
			$config_open = array('link');
			@define ( _width_thumb , 270 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'bocongthuong':
			$title_main = 'Bộ công thương';
			$config_open = array('link');
			@define ( _width_thumb , 161 );
			@define ( _height_thumb , 60 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'popup':
			$title_main = 'Popup';
			$config_open = array('link','shows');
			@define ( _width_thumb , 700 );
			@define ( _height_thumb , 400 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'favicon':
			$title_main = 'Favicon';
			$config_open = array();
			@define ( _width_thumb , 64 );
			@define ( _height_thumb , 64 );
			@define ( _style_thumb , 2 );
			$ratio_ = 1;
			break;
		case 'bgweb':
			$title_main = 'background web';
			$config_open = array('color');
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 576 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'bgheader':
			$title_main = 'BG header';
			$config_open = array('image');
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 156 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'bgfooter':
			$title_main = 'BG Footer';
			$config_open = array('image');
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 357 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'video':
			$title_main = "video";
			$config_open = array('image','highlight');
			@define ( _width_thumb , 380 );
			@define ( _height_thumb , 250 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		//-------------photo------------------
		case 'slider':
			$title_main = "Hình ảnh slider";
			$config_open = array('link');
			@define ( _width_thumb , 910 );
			@define ( _height_thumb , 340 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'doitac':
		    $title_main = "đối tác";
		    $config_open = array('link');
			@define ( _width_thumb , 150 );
			@define ( _height_thumb , 80 );
			@define ( _style_thumb , 2 );
			$ratio_ = 1;
			break;
		case 'support':
		    $title_main = "hỗ trợ trực tuyến";
		    $config_open = array('name','thongtin');
			break;
		case 'mangxh':
			$title_main = "Mạng xã hội";
			$config_open = array('link','name','image');
			@define ( _width_thumb , 36 );
			@define ( _height_thumb , 34 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		default: 
			break;
		}