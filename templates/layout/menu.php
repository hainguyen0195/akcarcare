<div class="menu ">
   <ul  id="main-nav">
    <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><?=trangchu?></a></li>

    <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>

    <li>
        <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="<?= sanpham ?>"><?= sanpham ?></a>
        <?php if(count($splistmenu)) { ?>
            <ul>
                <?php for($i=0;$i<count($splistmenu); $i++) {  ?>
                    <li>
                        <a class="transition" title="<?=$splistmenu[$i]['ten'.$lang]?>" href="<?=$splistmenu[$i][$sluglang]?>"><?=$splistmenu[$i]['ten'.$lang]?></a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </li>

    <li>
        <a class="transition <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="<?=dichvu?>"><?=dichvu?></a>
    </li>
    <li>
        <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a>
        <?php if(count($ttlistmenu)) { ?>
            <ul>
                <?php for($i=0;$i<count($ttlistmenu); $i++) {  ?>
                    <li>
                        <a class="transition" title="<?=$ttlistmenu[$i]['ten'.$lang]?>" href="<?=$ttlistmenu[$i][$sluglang]?>"><?=$ttlistmenu[$i]['ten'.$lang]?></a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </li>

    <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>

</ul>
</div>