
$(document).ready(function () {
  var table = $('#example').DataTable({

  buttons:['Copy', 'pdf', 'csv', 'exel', 'print'] 

});

table.buttons().container().appendTo('#example_wrapper.col-md:eq(0)')

});
// function validateForm() {
//     let x = document.forms["myForm"]["btncrime"].value;
//     if (x == "") {
//       alert("Crime Place must be filled out");
//       return false;
//     }
//   };

