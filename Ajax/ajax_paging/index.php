<?php
    /**
     * Application Main Page That Will Serve All Requests
     *
     * @package PRO CODE CIP Framework
     * @author  Hiếu Nguyễn <dinhhieu@cipmedia.vn>
     * @version 1.0.0
     * @license http://cipmedia.vn
     */
    defined( 'ROOT' ) ?:  define( 'ROOT', dirname(dirname(__DIR__)));
    defined( 'AJAX' ) ?:  define( 'AJAX', "AJAX" );
    require_once ROOT . '/Library/autoload.php';

    $id_list = $_POST["idl"];
    $id_cat = $_POST["idc"];

    if(isset($id_list)){
        $where ="where shows=1 and highlight=1 and type='product' and id_list ='".$id_list."' ";
    }

    if(isset($id_cat) && ($id_cat!='null') && ($id_cat!='')){
        $where .="  and id_cat ='".$id_cat."' ";
    }
  
    $page_num = 8;
    if(isset($_POST["page"])){
        $paging = new \Library\PagingAjax();
        $paging->class_pagination = "ajax_pagination";
        $paging->class_active = "active";
        $paging->class_inactive = "inactive";
        $paging->class_go_button = "go_button";
        $paging->class_text_total = "total";
        $paging->class_txt_goto = "txt_go_button";
        $paging->per_page = $page_num;
        $paging->page = $_POST["page"];
        $paging->text_sql = "select id,name_$lang,slug,price,oldprice,photo from #_product $where order by number,id desc";
        $result_pag_data = $paging->GetResult();
        $message = "";
        $paging->data = "" . $message . "";
    }

?>


<div class="boxProd clearfix">
    <div class="row">
        <?php if($paging->num_row==0): echo '<div class="alert alert-danger w-100" role="alert">'._updating.'</div>';else:
            foreach ($result_pag_data as $value): ?>
                <div class="col-lg-3 col-md-4 col-6 p-0 clearfix">
                    <div class="items">
                        <div class="img">
                            <?= $value['price']>0 && $value['oldprice']>0 ? '<span class="sale">'.$func->giamgia($value["oldprice"],$value["price"]).'</span>' : '' ?>
                            <a class="boxCart" href="javascript:;" data-id="<?=$value['id']?>" title="Đặt hàng">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                            <a class="imghv d-block" href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>">
                                <img src="<?=_upload_product_l.'270x210x2/'.$value['photo']?>" alt="<?=$value['name_'.$lang]?>"/>
                            </a>
                        </div>
                        <div class="details">
                            <h3><a href="san-pham/<?=$value['slug']?>" title="<?=$value['name_'.$lang]?>"><?=$value['name_'.$lang]?></a></h3>
                            <p class="price"><?=$func->giamoicu($value['price'],$value['oldprice'])?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        <?php endif?>

        <div class="col-12 clearfix">
            <?php if($paging->num_row > $page_num){echo $paging->Load();}?>
        </div>
    </div>
</div>


