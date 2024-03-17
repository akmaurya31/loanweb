$(document).ready(function () {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    table = $('#table').DataTable({
        processing: true, // Enable processing indicator.
        serverSide: true, // Enable server-side processing mode.
        order: [], // Initial no order.
        ordering: false, // Disable ordering by default.
    
        // Load data for the table's content from an Ajax source
        ajax: {
            url: controllerListUrl,
            type: "POST",
            data: {
                _token: csrfToken // Pass CSRF token in the request data
            }
        },
    
        // Set column definition initialisation properties.
        columnDefs: [
            {
                targets: [-1, -2, -3], // Last three columns
                orderable: false // Set not orderable
            }
        ]
    });
    

    //datepicker
   /* $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    });*/

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});



 //common ajax update status data to database
 function statusUpdate(id, status) {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
         url: statusUrl,
         type: "POST",
         dataType : "json",
         data: {
            id:id,
            status:status,
            "_token": csrfToken
        },
         success: function (data)
         {
             reload_table();
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
             alert('Error updating status data');
         }
     });
 }




  //common delete   
    function deleteData(id)
    {
        if (confirm('Are you sure delete this data?'))
        {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: deleteUrl,
                type: "POST",
                dataType: "JSON",
                data:{
                    id:id,
                    "_token": csrfToken
                },
                success: function (data){
                   reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error deleting data');
                }
            });
        }
    }

//reload table function
function reload_table()
{
    table.ajax.reload(null, false); //reload datatable ajax 
}