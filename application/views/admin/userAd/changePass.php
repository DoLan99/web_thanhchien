<script language="javascript" src="<?php echo base_url() ?>upload/script/ckeditor/ckeditor.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo base_url() ?>upload/script/ckfinder/ckfinder.js" type="text/javascript"></script>
<div class="row">
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
							<input type="text" name="title" id="first-name" value="<?php echo $product->title ?>" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Mô tả ngắn <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea name="description" class="resizable_textarea form-control" placeholder="Mô tả ngắn">
								<?php echo $product->description ?>
							</textarea>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" name="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>