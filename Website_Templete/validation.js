function validateForm() {
    let magaca = document.forms["myform"]["fullname"].value;
    let dhacdada = document.forms["myform"]["incidenttype"].value;
    let phone = document.forms["myform"]["phone"].value;
    if (magaca == "") {
      alert("Name must be filled out");
      return false;
    }
    if (dhacdada == "") {
        alert("Incident Type must be filled out");
        return false;
      }
      if (phone == "") {
        alert("Phone must be filled out");
        return false;
      }
  }