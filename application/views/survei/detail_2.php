<script src="<?= base_url()?>assets/js/signature.js" type="text/javascript"></script>
<style>

 #note{position:absolute;left:50px;top:35px;padding:0px;margin:0px;cursor:default;}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-search"></i> <?= $title ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
             List Survei
           </div>
           <div class="card-body">
            <a href="<?= site_url('survei');?>" class="btn btn-primary btn-sm"> Kembali</a>
            <br>
            <br>



          </div>
          
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            Sumber Informasi
          </div>
          <div class="card-body">
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
            Tambah Data
          </button>
          <br>
          <br>
          <table class="table table-striped">
            <tr>
              <th>No</th>
              <th>Sumber Informasi</th>
              <th>Tanda Tangan</th>
              <th>Action</th>
            </tr>
            <tr>

            </tr>
          </table>



        </div>

      </div>
    </div>

  </div>
</section>
</div>


<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="<?= site_url('pengajuan/proses') ?>">
        <div class="container">


          <div class="row">
           <div class="col-sm-12">

            <div class="row">
              <div class="col-md-6">

                <form method="post" action="process.php" enctype="multipart/form-data">
                 <div id="signature-pad">
                  <div style="border:solid 1px teal; width:360px;height:120px;padding:3px;position:relative;">
                    <div id="note" onmouseover="my_function();">The signature should be inside box</div>
                    <canvas id="the_canvas" width="350px" height="100px"></canvas>
                  </div>
                  <div style="margin:10px;">
                    <input type="hidden" id="signature" name="signature">
                    <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span> Clear</button>
                    <button type="submit" id="save_btn" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span> Save as PNG</button>
                  </div>
                </div>
                <form>


                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  var wrapper = document.getElementById("signature-pad");
  var clearButton = wrapper.querySelector("[data-action=clear]");
  var savePNGButton = wrapper.querySelector("[data-action=save-png]");
  var canvas = wrapper.querySelector("canvas");
  var el_note = document.getElementById("note");
  var signaturePad;
  signaturePad = new SignaturePad(canvas);
  clearButton.addEventListener("click", function (event) {
   document.getElementById("note").innerHTML="The signature should be inside box";
   signaturePad.clear();
 });
  savePNGButton.addEventListener("click", function (event){
   if (signaturePad.isEmpty()){
     alert("Please provide signature first.");
     event.preventDefault();
   }else{
     var canvas  = document.getElementById("the_canvas");
     var dataUrl = canvas.toDataURL();
     document.getElementById("signature").value = dataUrl;
   }
 });
  function my_function(){
   document.getElementById("note").innerHTML="";
 }
</script>

