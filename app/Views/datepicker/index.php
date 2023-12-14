<?= $this->extend('template/header'); ?>
<?= $this->section('content'); ?>

<div class="content-date">
   <div>
      <h1>DatePicker</h1>
   </div>
   <div class="date">
      <div class="form-group">
         <div class="input-group date">
            <input placeholder="Start Date" type="text" id="start_date" class="form-control datepicker" name="tgl_awal">
            <div class="input-group-addon">
               <span class="glyphicon glyphicon-th"></span>
            </div>
         </div>
      </div>
      <div class="form-group">
         <div class="input-group date">
            <input placeholder="End Date" type="text" class="form-control datepicker" name="tgl_akhir">
            <div class="input-group-addon">
               <span class="glyphicon glyphicon-th"></span>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- <div class="container">
      <div class="row">
         <div class="col">
            <h1>DatePicker</h1>
         </div>
         <div class="col">
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <div class="input-group date">
                        <input placeholder="Start Date" type="text" id="start_date" class="form-control datepicker" name="tgl_awal">
                        <div class="input-group-addon">
                           <span class="glyphicon glyphicon-th"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="form-group">
                     <div class="input-group date">
                        <div class="input-group-addon">
                           <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <input placeholder="End Date" type="text" class="form-control datepicker" name="tgl_akhir">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->

   <script type="text/javascript">

      $(function(){
      $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
      });
      });

   </script>

<?= $this->endSection(); ?>

