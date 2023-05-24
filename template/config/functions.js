$(document).ready(function () {
    $('#example').DataTable();
});

function validateForm() {
    let x = document.forms["myForm"]["btncrime"].value;
    if (x == "") {
      alert("Crime Place must be filled out");
      return false;
    }
  };