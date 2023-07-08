function validateForm() {
    let x = document.forms["myform"]["fullname"].value;
    let y = document.forms["myform"]["incidenttype"].value;
    let z = document.forms["myform"]["phone"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    if (y == "") {
        alert("Incident Type must be filled out");
        return false;
      }
      if (z == "") {
        alert("Phone must be filled out");
        return false;
      }
  }