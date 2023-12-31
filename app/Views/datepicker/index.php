<?= $this->extend('template/header'); ?>
<?= $this->section('content'); ?>

<div class="content-date">
   <div>
      <h1>DatePicker</h1>
   </div>
   <form id="form-date" method="POST">
      <div class="date">
         <div class="form-group">
            <div class="input-group date">
               <input placeholder="Start Date" type="text" id="start_date" class="form-control datepicker" name="start-date">
               <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="input-group date">
               <input placeholder="End Date" type="text" id="end_date" class="form-control datepicker" name="end-date">
               <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
               </div>
            </div>
         </div>
         <input class="btn btn-primary" type="button" id="filterBtn" value="filter">
      </div>
   </form>
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

         $('#filterBtn').click(function(){
            filterDate();
         });

         function filterDate(){
            let startDate = $('#start_date').val();
            let endDate = $('#end_date').val();

            console.log('start date : ',startDate);
            console.log('end date : ',endDate);

            $.ajax({
               url: '<?= base_url('filterDate'); ?>',
               method: 'POST',
               dataType: 'html',
               data: {
                  start_date: startDate,
                  end_date: endDate
               },
               success: function(data){
                  $('.table').html(data);
               },
               error: function(){
                  console.log('error');
               },
            })
         }

      });

   </script>

<?= $this->endSection(); ?>

