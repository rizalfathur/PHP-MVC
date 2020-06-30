<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6"> <?php Flasher::flash(); ?></div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Add new car
      </button>
    </div>
  </div>
    
  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/cars/cari" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Find car" name="keyword"  id="keyword" autocomplete="off">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" id="tombolCari">Find</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
    <div class="row">
        <div class="col-lg-6">
            <h3>Find Your Cars</h3> 
            <ul class="list-group">
                <?php foreach( $data['crs'] as $crs) : ?>
                    <li class="list-group-item"><?= $crs['name'];?>
                      <a href="<?= BASEURL; ?>/cars/hapus/<?= $crs['id'];?> " class="badge badge-danger float-right ml-1" onclick="return confirm('Are you sure want to delete this item?');"> Delete </a>
                      <!--<a href="<?= BASEURL; ?>/cars/ubah/<?= $crs['id'];?> " class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $crs['id']; ?>"> Edit </a>-->
                      <a href="<?= BASEURL; ?>/cars/detail/<?= $crs['id'];?> " class="badge badge-primary float-right ml-1"> See more</a>
                    </li>
                <?php endforeach; ?>
            </ul>

              
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Add new Car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
    <form action="<?= BASEURL;?>/cars/tambah" method="post">
            <div class="form-group">
            <label for="name">Car Name</label>
            <input type="text" class="form-control" id="name" name="name">
            </div>
        
        <div class="form-group">
            <label for="power">Power</label>
            <input type="text" class="form-control" id="power" name="power">
        </div>
        
        <div class="form-group">
            <label for="torque">Torque</label>
            <input type="text" class="form-control" id="torque" name="torque">
        </div>
        
        <div class="form-group">
            <label for="topspeed">Top Speed</label>
            <input type="text" class="form-control" id="topspeed" name="topspeed">
        </div>
        
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add </button>
    </form>
      </div>
    </div>
  </div>
</div>