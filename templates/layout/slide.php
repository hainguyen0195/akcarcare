<?php if(count($slider)) { ?>
    <section class="amazingslider-wrapper" id="amazingslider-wrapper-1" >
        <div class="amazingslider" id="amazingslider-1" >
            <ul class="amazingslider-slides" >
                <?php foreach($slider as $k=>$v){?>
                    <?php if($v['taptin']!=''){ ?>
                        <li>
                            <video preload="none" src="<?=UPLOAD_FILE_L.@$v['taptin']?>" ></video>
                        </li>
                    <?php }else{ ?>
                        <?php if($v['link_video']!=''){ ?>
                            <li>
                                <video preload="none" src="https://www.youtube.com/embed/<?=$func->getYoutube($v['link_video'])?>?v=<?=$func->getYoutube($v['link_video'])?>" ></video>
                            </li>
                        <?php }else{ ?>
                            <li>
                                <a target="_blank" href="<?= $v['link'] ?>" title="<?=$v['ten'.$lang]?>"> 
                                    <img  onerror="this.src='<?=THUMBS?>/1366x700x1/assets/images/noimage.png';" src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="" />
                                </a>
                            </li>
                        <?php } ?>   
                    <?php } ?>   
                <?php } ?>   
            </ul>
        </div>
    </section>
    <?php } ?>