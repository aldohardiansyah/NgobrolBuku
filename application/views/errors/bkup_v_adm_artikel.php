<div class="container">
   <div class="main">
    <div class="main-inner">
      <div class="row">
        <div class="span12">
          <div class="widget">
          	<div class="widget-header">
          		<i class="icon-file"></i> <h3>Daftar Artikel</h3>

          	</div>
          	<div class="widget-content">
            <div class="table-responsive">
               <div class="controls pull-right">
          	      <div class="btn-group">
          	         <input type="text" class="form-control" autocomplete="off" id="search" name="search" placeholder="Pencarian artikel...">
          	       </div>
          		 </div>

               <div class="controls pull-left">
                 <div class="wadidaw btn-group">
                    <a class="btn btn-large btn-primary" href="">Tambah Artikel</a>
                 </div>
          			</div>

                <div class="controls pull-right">
          				 <div class="btn-group">
          					  <a class="btn btn-default" id="lbl-filter-artikel">Filter Artikel</a>
          						<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          						<ul class="dropdown-menu" id="btn-filter-artikel">
          							 <li><a href="#">kategori...</a></li>
          						</ul>
          					</div>
          				</div>
          				<table id="tbl-artikel" class="table table-striped table-bordered">
          				<tbody>
                    <tr>
                      <td><input type="checkbox" name="post_id[]" value="1"></td>
                      <td><a class="link-edit" href="">3 Tips Powerfull Untuk Facebook Marketing!</a> <strong></strong></td>
                      <td><i class="glyphicon glyphicon-comment"></i> <span class="value">0</span></td>
                      <td><i class="glyphicon glyphicon-eye-open"></i> <span class="value">0</span></td>
                      <td><i class="glyphicon glyphicon-time"></i> <span class="value">1 hari yang lalu</span></td>
                      <td class="td-actions">
                         <a href="" class="link-edit btn btn-small btn-info"><i class=""></i> Edit</a>
                         <a href="" class="btn btn-invert btn-small btn-info"><i class="" id="hapus_1"></i> Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="post_id[]" value="1"></td>
                      <td><a class="link-edit" href="">3 Tips Powerfull Untuk Facebook Marketing!</a> <strong></strong></td>
                      <td><i class="glyphicon glyphicon-comment"></i> <span class="value">0</span></td>
                      <td><i class="glyphicon glyphicon-eye-open"></i> <span class="value">0</span></td>
                      <td><i class="glyphicon glyphicon-time"></i> <span class="value">1 hari yang lalu</span></td>
                      <td class="td-actions">
                         <a href="" class="link-edit btn btn-small btn-info"><i class=""></i> Edit</a>
                         <a href="" class="btn btn-invert btn-small btn-info"><i class="" id="hapus_1"></i> Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="post_id[]" value="1"></td>
                      <td><a class="link-edit" href="">3 Tips Powerfull Untuk Facebook Marketing!</a> <strong></strong></td>
                      <td><i class="glyphicon glyphicon-comment"></i> <span class="value">0</span></td>
                      <td><i class="glyphicon glyphicon-eye-open"></i> <span class="value">0</span></td>
                      <td><i class="glyphicon glyphicon-time"></i> <span class="value">1 hari yang lalu</span></td>
                      <td class="td-actions">
                         <a href="" class="link-edit btn btn-small btn-info"><i class=""></i> Edit</a>
                         <a href="" class="btn btn-invert btn-small btn-info"><i class="" id="hapus_1"></i> Hapus</a>
                      </td>
                    </tr>
          				</tbody>
          				</table>
                  </div>
          		 </div>
          	</div>
          </div>
        </div>
      </div>
    </div>

            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          	  <div class="modal-header">
          	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          	    <h3 id="myModalLabel"><i class="icon-plus"></i> Tambah Artikel</h3>
          	  </div>

          	  <div class="modal-body">
          	    <form role="form" id="form-artikel" action="tambah">
          	      <div class="form-group">
          	          <input class="input-block-level" type="text" id="post_title" name="post_title" placeholder="Tuliskan Judul Artikel Disini" >
          	          <textarea class="form-control input-block-level" placeholer="Message" name="post_content" rows="20" id="post_content"></textarea>
          	      </div>
          	      <input type="hidden" name="mass_action_type" id="mass_action_type" />
          	      <input type="hidden" name="post_id" id="post_id" />
          	    </form>
          	  </div>

          	  <div class="modal-footer">
          	    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
          	    <button class="btn btn-primary" id="submit-artikel">Tambah!</button>
          	  </div>
          	</div>
