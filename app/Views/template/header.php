<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>datepicker</title>

   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <!-- plugin datepicker -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css')?>">

   <!-- jquery -->
   <script src="<?= base_url('assets/js/jQuery.js')?>"></script>


   <style>
      body {
         margin: 20px;
      }
     .content-date {
        /* background-color: aqua; */
        padding: 20px;
        display: flex;
        gap: 20px;
        justify-content: space-between;
        
     }
     .date {
        display: flex;
        align-items: center;
        gap: 10px;
        
     }
   </style>
</head>
<body>

   <?= $this->renderSection('content'); ?>

   <!-- bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

   <!-- plugin datepicker -->
   <script type="text/javascript" src="<?= base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>

   </body>
</html>
