<!-- <script language="javascript" src="<?php echo admin_theme() ?>ckeditor/ckeditor.js" type="text/javascript"></script> -->
<script language="javascript" src="<?php echo base_url() ?>upload/script/ckeditor/ckeditor.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo base_url() ?>upload/script/ckfinder/ckfinder.js" type="text/javascript"></script>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<form id="demo-form2" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Tiêu đề <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" name="title" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Mô tả ngắn <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea name="description" class="resizable_textarea form-control" placeholder="Mô tả ngắn"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Chọn danh mục</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<select class="select2_group form-control" name="category_id">
								<?php foreach ($categories as $category): ?>
									<option value="<?php echo $category->id ?>">
										<?php echo $category->title ?>
									</option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">	Ảnh đại diện (101x60) <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="file" name="image" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Chi tiết 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea name="detail" id="editor" rows="10" cols="80">

							</textarea>
							<script>
								CKEDITOR.replace( 'editor' );
							</script>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Trạng thái</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<select class="select2_group form-control" name="status">
								<option value="1">ACTIVE</option>
								<option value="0">DEACTIVE</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Thứ tự <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="number" name="order_" value="0" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Tags <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" name="tags" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
							<a href="<?php echo admin_url('product') ?>" class="btn btn-primary" type="button">Cancel</a>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" name="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>