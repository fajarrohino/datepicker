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
            <input placeholder="End Date" type="text" id="end_date" class="form-control datepicker" name="tgl_akhir">
            <div class="input-group-addon">
               <span class="glyphicon glyphicon-th"></span>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($user as $item): ?>
    <tr>
      <th scope="row"><?= $item['id']; ?></th>
      <td><?= $item['name']; ?></td>
      <td><?= $item['gender']; ?></td>
      <td><?= $item['date']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
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

