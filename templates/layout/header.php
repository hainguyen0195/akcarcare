<header>
	<div class="wrap-top call_showin">
		<div class="container">
			<div class='wrap-top-row flex_row'>
				<div class="logo ">
					<a class="logo-header" href=""><img onerror="this.src='<?= THUMBS ?>/150x125x2/assets/images/noimage.png';" src="<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
				</div>
				<div class="wrap-top-right">
					<div class="header_menu">
						<div class="icon_menu"><i class="fas fa-bars"></i></div>
						<?php include TEMPLATE.LAYOUT."menu.php"; ?>
					</div>
					<div class="header_search">
						<div class="icon_search"><i class="far fa-search"></i></div>
						<div class="search">
				            <input type="text" id="keyword" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword');" value="<?=(isset($tukhoa) && $tukhoa != '') ? $tukhoa : ''?>"/>
				            <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>