<div class="col-md-12 t-diadiem-wrapper">
	<?php $this->load->view($diaDiem_info); ?>
	<div class="col-md-3 t-diadiem-menu">
		<ul class="nav">
			<?php if(strtolower($this->uri->rsegment(2)) == 'cacdanhgia'): ?> 
				<li class="active">
					<a href=<?php echo base_url('diaDiem/cacDanhGia/'.$diaDiem_data['MaDiaDiem']); ?>>Đánh giá<span class="glyphicon glyphicon-menu-right pull-right" style="color: #f59f08;"></span></a>
				</li>
			<?php else: ?>
				<li>
					<a href=<?php echo base_url('diaDiem/cacDanhGia/'.$diaDiem_data['MaDiaDiem']); ?>>Đánh giá</a>
				</li>
			<?php endif; ?>

			<?php if(strtolower($this->uri->rsegment(2)) == 'hinhanh'): ?> 
				<li class="active">
					<a href=<?php echo base_url('diaDiem/hinhAnh/'.$diaDiem_data['MaDiaDiem']); ?>>Hình ảnh<span class="glyphicon glyphicon-menu-right pull-right" style="color: #f59f08;"></span></a>
				</li>
			<?php else: ?>
				<li>
					<a href=<?php echo base_url('diaDiem/hinhAnh/'.$diaDiem_data['MaDiaDiem']); ?>>Hình ảnh</a>
				</li>
			<?php endif; ?>
			
			<?php if(strtolower($this->uri->rsegment(2)) == 'thucdon'): ?> 
				<li class="active">
					<a href=<?php echo base_url('diaDiem/thucDon/'.$diaDiem_data['MaDiaDiem']); ?>>Thực đơn<span class="glyphicon glyphicon-menu-right pull-right" style="color: #f59f08;"></span></a>
				</li>
			<?php else: ?>
				<li>
					<a href=<?php echo base_url('diaDiem/thucDon/'.$diaDiem_data['MaDiaDiem']); ?>>Thực đơn</a>
				</li>
			<?php endif; ?>

			<?php if(strtolower($this->uri->rsegment(2)) == 'info'): ?> 
				<li class="active">
					<a href=<?php echo base_url('diaDiem/info/'.$diaDiem_data['MaDiaDiem']); ?>>Thông tin chi tiết<span class="glyphicon glyphicon-menu-right pull-right" style="color: #f59f08;"></span></a>
				</li>
			<?php else: ?>
				<li>
					<a href=<?php echo base_url('diaDiem/info/'.$diaDiem_data['MaDiaDiem']); ?>>Thông tin chi tiết</a>
				</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="col-md-9 t-diadiem-content">
		<?php $this->load->view($main_diaDiem_content); ?>
	</div>
</div>