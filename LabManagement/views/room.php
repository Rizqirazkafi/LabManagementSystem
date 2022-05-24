<?php 
include 'header.php';
?>

<div id="sidebar-collapse" class="col-sm-2 col-md-2 col-lg-2 sidebar">
	<form role="search">
		<div class="form-group">
			<!-- <input type="text" class="form-control" placeholder="Search"> -->
		</div>
	</form>
	<ul class="nav menu">
		<li class="">
			<a href="dashboard">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Dasbor
			</a>
		</li>
		<li class="parent ">
			<a href="#sub-item-1" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaksi 
				</a>
			<ul class="children collapse" id="sub-item-1">
				<li>
					<a class="" href="reservation">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye"/>
						</svg>
						Reservasi
					</a>
				</li>
				<li>
					<a class="" href="new">
						<svg class="glyph stroked plus sign">
							<use xlink:href="#stroked-plus-sign"/>
						</svg>
						Baru
					</a>
				</li>
				<li>
					<a class="" href="borrow">
						<svg class="glyph stroked download">
							<use xlink:href="#stroked-download"/>
						</svg>
						Barang Yang Dipinjam
					</a>
				</li>
				<li>
					<a class="" href="return">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"/>
						</svg>
						Barang Yang
					</a>
				</li>
			</ul>
		</li>
		<?php if($_SESSION['admin_type'] == 1){ ?>
		<li>
			<a href="items">
				<svg class="glyph stroked desktop">
					<use xlink:href="#stroked-desktop"/>
				</svg>
				Barang
			</a>
		</li>
		<li>
			<a href="members">
				<svg class="glyph stroked male user ">
					<use xlink:href="#stroked-male-user"/>
				</svg>
				Peminjam
			</a>
		</li>
		<li class="active">
			<a href="#">
				<svg class="glyph stroked app-window">
					<use xlink:href="#stroked-app-window"></use>
				</svg>
				Ruang
			</a>
		</li>
		<li>
			<a href="inventory">
				<svg class="glyph stroked clipboard with paper">
					<use xlink:href="#stroked-clipboard-with-paper"/>
				</svg>
				Inventaris
			</a>
		</li>
		<li>
			<a href="report">
				<svg class="glyph stroked line-graph">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph"/>
				</svg>
				Grafik
			</a>
		</li>
		<li>
			<a href="user">
				<svg class="glyph stroked female user">
					<use xlink:href="#stroked-female-user"/>
				</svg>
				Pengguna
			</a>
		</li>
		<?php 
			}
			($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
		 ?>
	</ul>
</div><!--/.sidebar-->

<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2 main">	
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Ruang</li>
		</ol>
		<div class="breadcrumb">
			<button class="btn btn-primary col-sm-offset-10 add_room">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Tambah Ruang
			</button>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover table_room">
						<thead>
							<tr>
								<th>Nama Ruang</th>
								<th>Aksi</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->

	</div><!-- row -->
</div>

<div class="right-sidebar room-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<form class="frm_addroom">
				<h4 class="alert bg-success"><i class="fa fa-plus"></i> Tambah Ruang</h4>
				<div class="form-group">
					<label>Nomer Ruang</label>
					<input type="number" name="room_name" min="0" class="form-control" autofocus autocomplete="off" required>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-danger btn-block cancel_room" type="button">
								<i class="fa fa-remove"></i>
								Batal
							</button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-primary btn-block" type="submit">
								Simpan
								<i class="fa fa-check"></i>
							</button>
						</div>
					</div>
				</div>
			</form>
			<!-- <form>
				<hr>
				<div class="form-group">
					<h4 class="alert bg-success">Upload csv file here</h4>
				</div>
				<div class="form-group">
					<a href="">Download csv format here.</a>
				</div>
				<div class="form-group">
					<input type="file" name="csv_room" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Upload File</button>
				</div>
			</form> -->
			<div class="div_editroom"></div>
		</div>
	</div>
</div>

<div class="right-sidebar editroom-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<form class="frm_editroom">
				<h4 class="alert bg-success"><i class="fa fa-edit"></i> Edit Ruang</h4>
				<div class="form-group">
					<label>Nama Ruang/label>
					<input type="text" name="edit_rm_name" class="form-control" autofocus required autocomplete="off" >
					<input type="hidden" name="edit_rm_id">
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<button class="btn btn-danger btn-block cancel_editroom" type="button">
							<i class="fa fa-remove"></i>
							BATAL
						</button>
					</div>
					<div class="col-md-6">
						<button class="btn btn-primary btn-block" type="submit">
							UPDATE
							<i class="fa fa-check"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>