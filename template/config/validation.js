function validateForm() {
   let x = document.forms["myform"]["crimeype"].value;
   // let y = document.forms["myform"]["crimeplace"].value;
   // let z = document.forms["myform"]["crimecriminal"].value;
   if (typeof x === "number") {
     alert("Name must be filled out");
     return false;
   }
   
   // if (y == "") {
   //     alert("Incident Type must be filled out");
   //     return false;
   //   }
   //   if (z == "") {
   //     alert("Phone must be filled out");
   //     return false;
   //   }
 }

