<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107365337-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107365337-2');
</script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b5e7cd5df040c3e9e0c121a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php
$d->reset();
$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
$d->query($sql_banner);
$row_banner = $d->fetch_array();

$d->reset();
$sql_product_danhmuc = "select ten$lang as ten,tenkhongdau,id from #_product_danhmuc where hienthi=1 order by stt,id desc";
$d->query($sql_product_danhmuc);
$product_danhmuc = $d->result_array();

$d->reset();
$sql_hotro = "select ten$lang as ten,skype from #_yahoo where hienthi=1 order by stt,id desc";
$d->query($sql_hotro);
$hotro = $d->result_array();

$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='mangxahoi' order by stt,id desc";
$d->query($sql_slider);
$mangxahoi=$d->result_array();

?>

<header class="cd-header">
		<a href="" class="cd-logo"><img src="https://sexshop18.vn/upload/hinhanh/logo_sexshop18-1663.jpg" alt="Logo"></a>
		<a href="#0" class="cd-3d-nav-trigger"><span></span></a>
	</header> <!-- .cd-header -->
	
	<nav class="cd-3d-nav-container">
        
		<ul class="cd-3d-nav">
        <li class="cd-selected">
            <a href="">Home</a>
        </li>
        <?php foreach ($product_danhmuc as $key => $value) {?>
            <li>
				<a href="san-pham/<?= $value['tenkhongdau'] ?>-<?= $value['id'] ?>"><?php echo $value['ten']; ?></a>
			</li>
        <?php } ?>
		</ul> <!-- .cd-3d-nav -->
	</nav> <!-- .cd-3d-nav-container -->
<!-- <a href="" class="logo"><img src="<?= _upload_hinhanh_l . $row_banner['photo'] ?>" /></a> -->
<!-- <div class="search">
    <select name="tim_danhmuc">
        <option value="0"><?= _chondanhmuc ?></option>
        <?php for ($i = 0, $count_product_danhmuc = count($product_danhmuc); $i < $count_product_danhmuc; $i++) { ?>
        <option value="<?= $product_danhmuc[$i]['id'] ?>"><?= $product_danhmuc[$i]['ten'] ?></option>
        <?php } ?>
    </select>
    <input type="text" name="keyword" id="keyword" onKeyPress="doEnter(event, 'keyword');" value="<?= _nhaptukhoatimkiem ?>..." onclick="if (this.value == '<?= _nhaptukhoatimkiem ?>...') {
                this.value = ''
            }" onblur="if (this.value == '') {
                        this.value = '<?= _nhaptukhoatimkiem ?>...'
                    }">
    <div class="tim" onclick="onSearch(event, 'keyword');">
        <p>Tìm kiếm</p>
    </div>
    <div class="timnhieu">
        <p>Từ khóa tìm nhiều: <ul>
            <?php for ($i = 0, $count_hotro = count($hotro); $i < $count_hotro; $i++) { ?>
                <li><a target="_black" href="<?= $hotro[$i]['skype'] ?>"><?= $hotro[$i]['ten'] ?></a></li>
            <?php } ?>
        </ul></p>
    </div>
</div><!---END #search-->   
<!--hotline-->
<!-- <div class="toigiohang">
    <a href="gio-hang.html" class="cart_mt"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Giỏ hàng: <?php if(count($_SESSION['cart'])>0)echo count($_SESSION['cart']);else echo '0';?>  SP</span></a> 
</div>
<div class="hotlineh">
    Hotline:</br>   
    <span><?=$company['dienthoai']?></span>
</div>
<!--Hotline-->
<!-- <div class="mangxahoi">
	<ul>
	<?php  for($i=0,$count_mxh=count($mangxahoi);$i<$count_mxh;$i++){ ?>
		<li>
        <!-- href="<?=$mangxahoi[$i]['link']?> -->
			<!-- <a target="_black" href="#"><img src="<?=_upload_hinhanh_l.$mangxahoi[$i]['photo'] ?>" title="<?=$mangxahoi[$i]['ten']?>" width="100%"/></a>
		</li>
	<?php }?>
	</ul>
</div> -->
