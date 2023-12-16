$(".datepicker").change(function () {
         filterDate();
         });

         function filterDate(){
            let startDate = $("#start_date").val();
            let endDate = $("#end_date").val();

            console.log("start date:", startDate);
            console.log("end date:", endDate);

            $.ajax({
               url: baseUrl + "filter-data",
               method: "POST",
               data: {
                  'start-date': startDate,
                  'end-date': endDate
               },
               dataType: 'html',
               success: function(response){
                   $("#user-table-body").html(response);
               },
               error: function (xhr, status, error) {
               console.error('AJAX Error: ' + status, error);
            }
            })
         }


         <?php foreach ($user as $item): ?>
         <tr>
            <th scope="row"><?= $item['id']; ?></th>
            <td><?= $item['name']; ?></td>
            <td><?= $item['gender']; ?></td>
            <td><?= $item['date']; ?></td>
         </tr>
         <?php endforeach; ?>