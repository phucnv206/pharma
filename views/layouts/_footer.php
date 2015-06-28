<?php
use app\components\WatermarkWidget;
?>
<footer>
    <img src="/img/footer-line.jpg" alt="" class="img-responsive center-block">
    <div class="container">
        <div class="policies">
            <div class="title text-bold">Chính sách bán hàng công ty</div>
            <img src="/img/policies.png" alt="" class="img-responsive">
        </div>
        <nav class="row">
            <div class="col-sm-3 cat">
                <p class="text-bold">Danh mục sản phẩm</p>
                <p><a href="#">Giảm cân</a></p>
                <p><a href="#">Làm đẹp</a></p>
                <p><a href="#">Sinh lý nam</a></p>
                <p><a href="#">Sp1</a></p>
                <p><a href="#">Sp2</a></p>
                <p><a href="#">Trị nám</a></p>
            </div>
            <div class="col-sm-4 blog">
                <p class="text-bold title">Blog</p>
                <ul class="ul-clear">
                    <li><span class="glyphicon glyphicon-play"></span> <a href="#">5 tuyệt chiêu trắng da toàn thân</a></li>
                    <li><span class="glyphicon glyphicon-play"></span> <a href="#">MAR Trẻ táo bón, chậm lớn vì thừa canxi</a></li>
                    <li><span class="glyphicon glyphicon-play"></span> <a href="#">MAR 6 tác dụng đẹp bất ngờ của khoai lang</a></li>
                    <li><span class="glyphicon glyphicon-play"></span> <a href="#">5 tuyệt chiêu trắng da toàn thân</a></li>
                </ul>
            </div>
            <div class="col-sm-5 subscribe">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="title text-bold">Đăng ký nhận tin</div>
                        <div class="tip">Thông tin được giữ tuyệt đối và có thể hủy bất cứ lúc nào<br>Đăng ký để nhận nhiều ưu đãi hơn</div>
                        <div class="form-group has-feedback">
                            <input class="form-control">
                            <a href="#" class="form-control-feedback"><img src="/img/subscribe-icon.png" alt=""></a>
                        </div>
                        <a href="#"><img src="/img/social-icon.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <?= WatermarkWidget::widget() ?>
</footer>