<?php
    $html_dssp_new='';
    foreach ($dssp_new as $sp) {
        extract($sp);
        if($bestseller==1){
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dssp_new.='<div class="box25 mr15">
                            '.$best.'
                            <img src="layout/images/'.$img.'" alt="">
                            <span class="price">'.$price.' đ</span>
                            <button>Đặt hàng</button>
                        </div>';
    }
    $html_dssp_best='';
    foreach ($dssp_best as $sp) {
        extract($sp);
        $html_dssp_best.='<div class="box25 mr15">
                            <div class="best"></div>
                            <img src="layout/images/'.$img.'" alt="">
                            <span class="price">'.$price.' đ</span>
                            <button>Đặt hàng</button>
                        </div>';
    }
    $html_dssp_view='';
    foreach ($dssp_view as $sp) {
        extract($sp);
        if($bestseller==1){
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dssp_view.='<div class="box25 mr15">
                            '.$best.'
                            <img src="layout/images/'.$img.'" alt="">
                            <span class="price">'.$price.' đ</span>
                            <button>Đặt hàng</button>
                        </div>';
    }
?>
<div class="containerfull">
        <img src="layout/images/banner.webp" alt="">
    </div>

    <section class="containerfull">
        <div class="container">
            <h1>SẢN PHẨM HOT</h1><br>
            <div class="containerfull">
                <div class="box50 mr15">
                    <img src="layout/images/banner2.webp" alt="">
                </div>
                <?=$html_dssp_best?>
                <!-- <div class="box25 mr15">
                    <div class="best"></div>
                    <img src="layout/images/sp1.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <div class="best"></div>
                    <img src="layout/images/sp2.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div> -->
            </div>
            
            <div class="containerfull mr30">
                <h1>SẢN PHẨM MỚI</h1><br>
                <?=$html_dssp_new;?>
                <!-- <div class="box25 mr15">
                    <img src="layout/images/sp1.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp2.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp3.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp4.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div> -->
            </div>
            
            <div class="containerfull mr30">
                <h1>SẢN PHẨM NHIỀU NGƯỜI XEM</h1><br>
                <?=$html_dssp_view?>
                <!-- <div class="box25 mr15">
                    <img src="layout/images/sp1.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp2.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp3.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp4.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div> -->
            </div>

        </div>
    </section>


    <section class="containerfull bg1 padd50">
        <div class="container">
            <h1>DANH MỤC SẢN PHẨM HOT</h1>
            <div class="row">
                <h2>Cà phê</h2>
            </div>
            <div class="row">
                <div class="box25 mr15">
                    <img src="layout/images/sp1.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp2.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp3.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp4.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
            </div>
            <div class="row">
                <h2>Trà</h2>
            </div>
            <div class="row">
                <div class="box25 mr15">
                    <img src="layout/images/sp1.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp2.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp3.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="layout/images/sp4.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
            </div>

        </div>
    </section>