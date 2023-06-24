    const  form = document.getElementById("form");
    var crimeRegisterDate = document.getElementById("crimeRegisterDate");
    var crimeType =  document.getElementById("crimeType");
    var crimePlace = document.getElementById("crimePlace");
    var crimeVictam = document.getElementById("crimeVictam");
    var crimeCriminal = document.getElementById("crimeCriminal");
    var crimeOfficer = document.getElementById("crimeOfficer");
    var crimeWitness = document.getElementById ("crimeWitness");
    var crimeEvidence = doucment.getElementById("crimeEvidence");
    var crimeItems = document.getElementById("crimeItems");
    var crimeStatus = doucment.getElementById("crimeStatus");
    var crimeNote = document.getElementById("crimeNote");

// form.addEventListener('submit', e => {
//     e.preventDefault();
//     validateInput();
// });
 
// const setError = (element, message) => {
//     const formControl = element.parentElement;
//     const errorDisplay = formControl.querySelector('.Error');

//     errorDisplay.innerText = message ;
//     formControl.classlist.add('error');
//     formControl.classlist.remove('success');
// }
// const setSuccess = (element, message) => {
//     const formControl = element.parentElement;
//     const errorDisplay = formControl.querySelector('.Error');

//     errorDisplay.innerText = '' ;
//     formControl.classlist.add('success');
//     formControl.classlist.remove('error');
//}

function validateInput(){
    const  crime = document.form['myForm']['crimevictam'].value;
    alert(crime);
    //const crRegisterDate = crimeRegisterDate.value.trim();
    //var crimeType =  document.getElementById("crimeType").value;
    // const crType = crimeType.value.trim();
    // const crPlace = crimePlace.value.trim();
    // const crVictam = crimeVictam.value.trim();
    // const crCriminal = crimeCriminal.value.trim();
    // const crOfficer = crimeOfficer.value.trim();
    // const crWitness = crimeWitness.value.trim();
    // const crEvidence =  crimeEvidence.value.trim();
    // const crItems = crimeItems.value.trim();
    // const crStatus =  crimeStatus.value.trim();
    // const crNote = crimeNote.value.trim();

    if (typeof(crime) !== "string"){
       alert ('This canot be used');
    } else {
       
    }


};

// function validateForm() {
//     let x = document.forms["myForm"]["crimetype"].value;
//     if (x == "") {
//       alert("Name must be filled out");
//       return false;
//     }
//   }


function validate(){
   
    var crRegisterDate = document.getElementById("crimeRegisterDate").value;
    var crType =  document.getElementById("crimeType").value;
    var crPlace = document.getElementById("crimePlace").value;
    var crVictam = document.getElementById("crimeVictam").value;
    var crCriminal = document.getElementById("crimeCriminal").value;
    var crOfficer = document.getElementById("crimeOfficer").value;
    var crWitness = document.getElementById ("crimeWitness").value;
    var crEvidence = doucment.getElementById("crimeEvidence").value;
    var crItems = document.getElementById("crimeItems").value;
    var crStatus = doucment.getElementById("crimeStatus").value;
    var crNote = document.getElementById("crimeNote").value;

    if ( crRegisterDate == " " && crType == " " && crPlace == " " && crVictam ==" " && crCriminal == ""
    && crOfficer == " " && crWitness == " " && crEvidence == " " && crItems == " " && crStatus == " "
     && crNote == " " )
     { 
        alert("All fields must be filled");

     }  else if ( crRegisterDate === typeof(Date) && crType ===  typeof(String)){
        console.log('Your data is saved ');
     } else {
        console.log('Something else is wrong');
     }
    
}