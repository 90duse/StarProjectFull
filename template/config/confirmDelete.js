$(document).ready(function (){
  $('#btndelete').on('click', function(e){
    e.preventDefault();
    var ID = $(this).val();
    alert(ID);

    swal({
  title: "Are You Sure ",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
        $.ajax({
          type: "POST",
          url: "crimeDelete.php",
          data:
          {
            'id': ID,
            '#btndelete': true

          },
  
          success: function (response) 
          {
                if (response == 200) {
                  swal ("Success!", "Your Data is Deleted", "success");

                  
                } else if (response == 500){
                  swal ("Success!", "Your Data is Deleted", "success");
                }
           }

    });
  }
   
    });


   });

});


  

  
$(document).ready(function (){
  $('#btndelete').on('click', function(e){
    e.preventDefault();
    var ID = $(this).val();
    alert(ID);

    swal({
  title: "Are You Sure ",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
        $.ajax({
          type: "POST",
          url: "crimeDelete.php",
          data:
          {
            'id': ID,
            '#btndelete': true
          },
          success: function (response) 
          {
                if (response == 200) {
                  swal ("Success!", "Your Data is Deleted", "success");
                } else if (response == 500){
                  swal ("Success!", "Your Data is Deleted", "success");
                }
           };
    });
  }
    });
   });
}); 
  