<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="Assets/images/headerlogo2.png" width="120"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
    <li class="dash" id="menu1"><a class=" active" title="" href="index.html"><span>Trang chủ</span></a></li>
    <li class="categories_li <?php if($type=='gia-su') echo ' activemenu' ?>" id="menu_mb"><a href="" title="" class="exp"><span>Người dạy</span><strong></strong></a>
        <ul class="sub">
            <li <?php if($type=='gia-su') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_list&type=gia-su">Danh mục cấp 1</a></li>
            <li<?php if($type=='gia-su') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_cat&type=gia-su">Danh mục cấp 2</a></li>
            <li <?php if($type=='gia-su') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=gia-su">Quản lý người dạy</a></li>
        </ul>
    </li>
    <li class="categories_li <?php if($type=='lop-moi') echo ' activemenu' ?>" id="menu_lm"><a href="" title="" class="exp"><span>Lớp mới</span><strong></strong></a>
        <ul class="sub">
            <li <?php if($type=='lop-moi') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_list&type=lop-moi">Danh mục cấp 1</a></li>
            <li<?php if($type=='lop-moi') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_cat&type=lop-moi">Danh mục cấp 2</a></li>
            <li <?php if($type=='lop-moi') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=lop-moi">Quản lý lớp mới</a></li>
        </ul>
    </li>
    <li class="categories_li <?php if($type=='phu-huynh') echo ' activemenu' ?>" id="menu_ph"><a href="" title="" class="exp"><span>Phụ huynh</span><strong></strong></a>
        <ul class="sub">
            <li <?php if($type=='phu-huynh') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_list&type=phu-huynh">Danh mục cấp 1</a></li>
            <li<?php if($type=='phu-huynh') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_cat&type=phu-huynh">Danh mục cấp 2</a></li>
            <li <?php if($type=='phu-huynh') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=phu-huynh">Quản lý phụ huynh</a></li>
        </ul>
    </li>
    <li class="categories_li <?php if($type=='tuyen-dung') echo ' activemenu' ?>" id="menu_td"><a href="" title="" class="exp"><span>Cộng tác viên</span><strong></strong></a>
        <ul class="sub">
            <li <?php if($type=='tuyen-dung') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_list&type=tuyen-dung">Danh mục cấp 1</a></li>
            <li<?php if($type=='tuyen-dung') echo ' class="this"' ?>><a href="index.html?com=cate&act=man_cat&type=tuyen-dung">Danh mục cấp 2</a></li>
            <li <?php if($type=='tuyen-dung') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=tuyen-dung">Quản lý tuyển dụng</a></li>
        </ul>
    </li>
    <li class="categories_li<?php if($com=='post' && $type!='album') echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
        <ul class="sub">
            <li<?php if($type=='day-kem' && $fact=='') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=day-kem">Chia sẻ</a></li>
            <li<?php if($type=='tintuc' && $fact=='') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=tintuc">Tin tức</a></li>
            <li<?php if($type=='khachhang' && $fact=='') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=khachhang">Cảm nhân học sinh</a></li>
        </ul>
    </li>

    <li class="categories_li <?php if($com=='info') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
      <ul class="sub">
        <li <?php if($type=='gioithieu') echo ' class="this"' ?>><a href="index.html?com=info&act=capnhat&type=gioithieu">Giới thiệu</a></li>
        <li <?php if($type=='banggia') echo ' class="this"' ?>><a href="index.html?com=info&act=capnhat&type=banggia">Thông tin tham khảo</a></li>
        <li <?php if($type=='registered') echo ' class="this"' ?>><a href="index.html?com=info&act=capnhat&type=registered">Thông tin đăng ký</a></li>
      </ul>
    </li>

  <li class="album_li<?php if($type=='album') echo ' activemenu' ?>" id="menu_abs"><a href="#" title="" class="exp"><span>Album</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($type=='album') echo ' class="this"' ?>><a href="index.html?com=post&act=man&type=album" title="">Thư viện ảnh</a></li>
      </ul>
  </li>
  <li class="gallery_li<?php if($com=='photo') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Slider</span><strong></strong></a>
      <ul class="sub">
          <li<?php if($type=='slider') echo ' class="this"' ?>><a href="index.html?com=photo&act=man&type=slider" title="">Hình ảnh slider</a></li>
          <li<?php if($type=='doitac') echo ' class="this"' ?>><a href="index.html?com=photo&act=man&type=doitac" title="">Đối tác</a></li>
      </ul>
  </li>
  <li class="marketing_li<?php if($com=='yahoo' || $com=='link') echo ' activemenu' ?>" id="menu6"><a href="#" title="" class="exp"><span>Liên kết</span><strong></strong></a>
      <ul class="sub">
          <li <?php if($type=='mangxh') echo ' class="this"' ?>><a href="index.html?com=link&act=man&type=mangxh" title="">Mạng xã hội</a></li>
          <li <?php if($type=='support') echo ' class="this"' ?>><a href="index.html?com=link&act=man&type=support" title="">Support online</a></li>
      </ul>
  </li>
  <li class="video_li<?php if($com=='video') echo ' activemenu' ?>" id="menu_v"><a href="#" title="" class="exp"><span>Video</span><strong></strong></a>
      <ul class="sub">
          <li<?php if($com=='video') echo ' class="this"' ?>><a href="index.html?com=video&act=man&type=video" title="">Video clips</a></li>
      </ul>
  </li>
    <li class="album_li<?php if($com=='bannerqc' | $com=='background' ) echo ' activemenu' ?>" id="menu_alb"><a href="#" title="" class="exp"><span>Cấu hình hình ảnh</span><strong></strong></a>
        <ul class="sub">
            <li<?php if($type=='logo') echo ' class="this"' ?>><a href="index.html?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
            <li<?php if($type=='banner') echo ' class="this"' ?>><a href="index.html?com=bannerqc&act=capnhat&type=banner" title="">Banner</a></li>
            <li<?php if($type=='bannerqc') echo ' class="this"' ?>><a href="index.html?com=bannerqc&act=capnhat&type=bannerqc" title="">Banner qc</a></li>
            <li<?php if($type=='favicon') echo ' class="this"' ?>><a href="index.html?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>    
            <li<?php if($type=='bgheader') echo ' class="this"' ?>><a href="index.html?com=background&act=capnhat&type=bgheader" title="">Background header</a></li>
        </ul>
    </li>
    <li class="template_li<?php if($com=='setting' || $com=='newsletter' || $com=='bannerqc' || $type=='lienhe' || $type=='footer') echo ' activemenu'?>" id="menu_st"><a href="#" title="" class="exp"><span>Thông tin Trung Admin	</span><strong></strong></a>
        <ul class="sub">
            <!-- <li<?php if($com=='newsletter') echo ' class="this"' ?>><a href="index.html?com=newsletter&act=man" title="">Đăng ký nhận tin</a></li>-->
            <li<?php if($type=='lienhe') echo ' class="this"' ?>><a href="index.html?com=info&act=capnhat&type=lienhe" title="">Liên hệ</a></li>
            <li<?php if($type=='footer') echo ' class="this"' ?>><a href="index.html?com=info&act=capnhat&type=footer" title="">Footer</a></li>
            <li<?php if($com=='setting') echo ' class="this"' ?>><a href="index.html?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
        </ul>
    </li>
</ul>