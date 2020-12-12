<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Tổng bài viết (<strong><?php echo count($products); ?></strong>)</h2>
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
			<form action="" method="post" accept-charset="utf-8">
				<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
					<thead>
						<tr>
							<th>
								<input type="checkbox" id="check-all" class="flat">
							</th>
							<th>Ảnh</th>
							<th>Tiêu đề</th>
							<th>Danh mục</th>
							<th>View</th>
							<th>Thứ tự</th>
							<th>Trạng thái</th>
							<th>Ngày đăng</th>
							<th>
								Thao tác 
								<input style="margin-left: 10px" class="btn btn-danger btn-xs" type="submit" name="dellCheck" value="Delete Check"/>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product): ?>
							<tr>
								<td>
									<input type="checkbox" name="checkbox[]" value="<?php echo $product->id ?>" id="check-all" class="flat">
								</td>
								<td>
									<img src="<?php echo public_url() ?>images/product/<?php echo $product->image ?>" width="50" alt=""/>
								</td>
								<td><?php echo $product->title; ?></td>
								<td><?php echo $product->title_category; ?></td>
								<td><?php echo $product->view ?></td>
								<td><?php echo $product->order_ ?></td>
								<td><?php echo $product->status == 0 ? 'DEACTIVE' : 'ACTIVE' ?></td>
								<td><?php echo $product->create_at; ?></td>
								<th> 
									<a href="<?php echo admin_url('product/edit/') . $product->id ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
									<a onclick="confirm_del('<?php echo admin_url('product/del/') . $product->id ?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
								</td>
							</th>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</form>
	</div>
</div>
</div>