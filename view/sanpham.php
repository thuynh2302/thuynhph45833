<?php
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=sanpham&iddm='.$id;
        $html_dm.='<a href="'.$link.'">'.$name.'</a>';
    }
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        if($bestseller==1){
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dssp.='<div class="box25 mr15 mb">
                    '.$best.'
                    <img src="layout/images/'.$img.'" alt="">
                    <span class="price">'.$price.' đ</span>
                    <button>Đặt hàng</button>
                </div>';
    }
?>
<div class="containerfull">
        <div class="bgbanner">SẢN PHẨM</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DANH MỤC</h1><br><br>
                <?=$html_dm;?>
                <!-- <a href="#">Cà phê</a>
                <a href="#">Trái cây</a>
                <a href="#">Trà</a>
                <a href="#">Bánh</a> -->
            </div>
            <div class="boxright">
                <h1>SẢN PHẨM</h1><br>
                <div class="containerfull mr30">
                    <?=$html_dssp;?>
                    <!-- <div class="box25 mr15 mb">
                        <div class="best"></div>
                        <img src="layout/images/sp1.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp2.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp3.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp4.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp5.jpg" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp6.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp7.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp8.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div> -->
                </div>
            </div>


        </div>
    </section>