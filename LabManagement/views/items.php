<?php 
	include 'header.php';
?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
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
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaction 
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
							Barang Yang Dikembalikan
						</a>
					</li>
				</ul>
			</li>
			<?php if($_SESSION['admin_type'] == 1){ ?>
			<li class="active">
				<a href="#">
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
			<li>
				<a href="room">
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
					Penyimpanan
				</a>
			</li>
			<li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xlink:href="#stroked-line-graph"/>
					</svg>
					Grafis
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


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Item</li>
			</ol>
			<div class="breadcrumb">
				<button class="btn btn-primary col-sm-offset-10 add_equipment">
					<svg class="glyph stroked plus sign">
						<use xlink:href="#stroked-plus-sign"/>
					</svg> &nbsp;
					Tambahkan Barang
				</button>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered table_equipment ">
							<thead>
								<tr>
									<th>Gambar</th>
									<th>Model</th>
									<th>Kategori</th>
									<th>Merek</th>
									<th>Deskripsi</th>
									<th>Jumlah</th>
									<th>Jumlah tersisa</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
						</table>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div>
	</div>


<div class="right-sidebar equipment-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<h4 class="alert bg-success">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Tambahkan Barang
			</h4>
			<form class="frm_addequipment" enctype="multipart/form-data">
				<input type="hidden" name="key" value="add_equipment" />
				<div class="form-group">
					<label>ID Perangkat</label>
					<input type="text" name="e_number" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Model</label>
					<input type="text" name="e_model" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select name="e_category" class="form-control" required>
						<option selected disabled>Silakan pilih kategori</option>
						<option>Mouse</option>
						<option>Keyboard</option>
						<option>Monitor</option>
						<option>Proyektor</option>
						<option>Remote</option>
						<option>Layar DLP</option>
						<option>Aircon</option>
						<option>TV</option>
						<option>AVR</option>
						<option>Extension</option>
						<option>UPS</option>
						<option>Router</option>
						<option>Meja</option>
						<option>Kursi</option>
						<option>Switch Hub</option>
					</select> 
				</div>
				<div class="form-group">
					<label>Merek</label>
					<input type="text" name="e_brand" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea name="e_description" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label>Jumlah</label>
					<input type="number" name="e_stock" class="form-control" min="1" required>
				</div>
				<div class="form-group hide">
					<label>Ruang Yang Ditentukan</label>
					<select name="e_assigned" class="form-control" required>
					</select>
				</div>
				<div class="form-group">
					<label>Tipe</label>
					<select type="text" name="e_type" class="form-control" required>
						<option disabled selected>Silakan pilih tipe</option>
						<option>Dapat dikonsumsi</option>
						<option>Tidak dapat dikonsumsi</option>
					</select>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="e_status" class="form-control" required>
						<option disabled selected>Silakan pilih status</option>
						<option value="1">Baru</option>
						<option value="2">Lama</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>MR</label>
					<input type="text" name="e_mr" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label>Harga</label>
					<input type="text" name="e_price" class="form-control" required>
				</div>
				
				 <div class="form-group">
						<label >Foto</label>
						
						  <input type="file" name="e_photo" for="inputPassword3" class="form-control" required />
						
					  </div>
				
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-danger btn-block cancel-equipment" type="button">
								<i class="fa fa-remove"></i>
								BATALKAN
							</button>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-primary btn-block" type="submit">
								TAMBAH
								<i class="fa fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
			</form>
		</div>
	</div>
</div>


<div class="right-sidebar equipment-view">
	<div class="sidebar-form equipment-form">
		
	</div>
</div>



<?php include 'footer.php'; ?>
