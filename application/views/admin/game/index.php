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
			<p class="alert alert-warning">Upload từng thứ một thôi nhé. :))</p>
			<div class="x_content">

				<br>
				<form id="demo-form2" method="post" data-parsley-validate="" class="form-horizontal form-label-left" enctype="multipart/form-data">
					<input type="text" name="id" value="<?php echo $game->id ?>" hidden>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Tên Game <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" name="name" id="first-name" value="<?php echo $game->name ?>" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Icon (130x130)<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<img style="width: 100px; height: 100px; margin-right: 10px; margin-bottom: 10px; resize: cover" src="<?php echo public_url('file/') . $game->icon ?>" alt="">
							<input type="file" name="icon" id="first-name" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Link Android (file or link)
						</label>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="text" value="<?php echo $game->linkAndroid ?>" name="txtLinkAndroid" placeholder="Link tải" id="first-name" class="form-control col-md-7 col-xs-12">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="file" name="linkAndroid" id="first-name" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Link IOS (file or link)
						</label>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="text" 
							name="txtLinkIos" 
							value="<?php echo $game->linkIos ?>" 
							placeholder="Link tải" 
							id="first-name" 
							class="form-control col-md-7 col-xs-12"
						>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="file" name="linkIos" id="first-name" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
							Link tải khác (file or link)
						</label>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="text" name="txtLinkOrther" value="<?php echo $game->linkOrther ?>" placeholder="Link tải" id="first-name" class="form-control col-md-7 col-xs-12">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="file" name="linkOrther" id="first-name" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
							<!-- <a href="<?php echo admin_url('product') ?>" class="btn btn-primary" type="button">Cancel</a> -->
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" name="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>