<?php
    $dsl = $db->query("select code,name_$lang,slug,attributes,photo,price,status from #_post where shows=1 and type='lop-moi' and highlight=1 order by number,id desc limit 8");
?>

<div class="boxC clearfix">
    <h2 class="text-center py-3">LỚP DẠY KÈM MỚI HÔM NAY</h2>

    <table class="table table-striped table-bordered">
        <thead class="bcolor text-white">
            <tr align="center">
                <th scope="col">Mã số</th>
                <th scope="col">Môn học - Lớp</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Học Phí</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Đăng ký lớp</th>
                <th scope="col">Yêu cầu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dsl as $value): $arr = json_decode($value['attributes'],true) ?>
                <tr align="center">
                    <td><?=$value['code']?></td>
                    <td><a href="lop-moi/<?=$value['slug']?>" title="<?=$value["name_$lang"]?>"><?=$value["name_$lang"]?></a></td>
                    <td><?=$arr['date']?></td>
                    <td><?=$arr['address']?></td>
                    <td><?=$value['price']==0 ? 'Liên hệ' : number_format ($value['price'],0,',','.').' VNĐ' ?></td>
                    <td><?=$value['status']==1 ? '<span class="text-success">Đã giao</span>' : '<span class="text-danger">Chưa giao</span>' ?></td>
                    <td>
                        <a href="lien-he/" title="Đăng ký">Đăng ký</a>
                    </td>
                    <td><?=$arr['request']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>