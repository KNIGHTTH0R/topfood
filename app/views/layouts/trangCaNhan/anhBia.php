<!--Ảnh bìa và mô tả-->
<div class="t-divanhbia">
    <a href="<?php echo base_url('trangCaNhan/danhGia/'.$nguoiDung_data['TenDangNhap']); ?>">
        <img src="<?php echo $nguoiDung_data['AnhDaiDien'] ? base_url('assets/images/db/'.$nguoiDung_data['AnhDaiDien']) : base_url('assets/images/app/user.jpg'); ?>" class="t-infoavatar pull-left">
    </a>
    <div class="t-info pull-left">
        <div class="t-header-info"><?php echo $nguoiDung_data['TenNguoiDung']; ?></div>
        <div class="t-body-infor"><b>@<?php echo $nguoiDung_data['TenDangNhap']; ?></b></div>
        <div class="t-body-infor"><?php echo $nguoiDung_data['GioiThieuBanThan']; ?></div>
    </div>
    <div style="position: absolute; bottom: 10px; right: 10px; overflow: auto;">
        <div class="btn-group pull-right">
            <a href="<?php echo base_url('trangCaNhan/danhGia/'.$nguoiDung_data['TenDangNhap'] ); ?>" class="btn t-btn-default t-btn-default-transparent" title="Xem các đánh giá"><span class="glyphicon glyphicon-menu-hamburger"></span> Đánh giá</a>
            <a href="<?php echo base_url('trangCaNhan/diaDiem/'.$nguoiDung_data['TenDangNhap'] ); ?>" class="btn t-btn-default t-btn-default-transparent" title="Xem các địa điểm của tôi"><span class="glyphicon glyphicon-map-marker"></span> Địa điểm của tôi</a>
            <a href="<?php echo base_url('trangCaNhan/info/'.$nguoiDung_data['TenDangNhap'] ); ?>" class="btn t-btn-default t-btn-default-transparent" title="Xem thông tin"><span class="glyphicon glyphicon-th-list"></span> Thông tin</a>
        </div>
    </div>
</div>
<!--Ảnh bìa và mô tả-->
