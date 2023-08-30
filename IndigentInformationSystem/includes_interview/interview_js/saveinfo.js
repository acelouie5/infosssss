

function saveinfo() {
   const assistanceData = {
      ln: $('#sln').val(),
      fn: $('#sfn').val(),
      mn: $('#smn').val(),
      sn: $('#ssn').val(),
      age: $('#sage').val(),
      cs: $('#scs').val(),
      sex: $('#ssex').val(),
      cno: $('#scon').val(),
      pn: $('#spn').val(),
      address: $('#saddress').val(),
      brgy: $('#sbrgy').val(),
      dis: $('#sdis').val(),
      city: $('#scity').val(),
      sid: $('#sid').val()
   };

   // Client info
   const clientData = {
      cln: $('#cln').val(),
      cfn: $('#cfn').val(),
      cmn: $('#cmn').val(),
      csn: $('#csn').val(),
      cage: $('#cage').val(),
      ccs: $('#ccs').val(),
      csex: $('#csex').val(),
      ccn: $('#ccn').val(),
      cpn: $('#cpn').val(),
      caddress: $('#caddress').val(),
      cbrgy: $('#cbrgy').val(),
      cdis: $('#cdis').val(),
      ccity: $('#ccity').val(),
      cid: $('#cid').val(),
      cea: $('#cea').val(),
      occu: $('#occu').val(),
      dincome: $('#dincome').val(),
      cregion: $('#cregion').val(),
      cprovince: $('#cprovince').val(),
      caddCity: $('#caddCity').val()
   };

   const assistanceneededData = {
      asID : $('#asID').val() ,
      reqdate: $('#reqdate').val() ,
      man: $('#medicalAssistanceNeeded').val() ,
      fan: $('#financialAssistanceNeeded').val() ,
      ban: $('#burialAssistanceNeeded').val(), 
      ran: $('#referraltoaicsAssistanceNeeded').val(), 

//medical
      medexam: $('#medicalexamCb').val() ,
      medCb: $('#medicineCb').val() ,
      labCb: $('#laboratoryCb').val(), 
      other: $('#othersCb').val(), 
      
//financial assistance

medassistCb: $('#medassistCb').val() ,
burialassistCb: $('#burialassistCb').val() ,
financialCb: $('#financialCb').val(), 
referraltoaicsCb: $('#referraltoaicsCb').val(), 
otherfinancialassistCb: $('#otherfinancialassistCb').val(), 


//burial

barangayindigencyCb: $('#barangayindigencyCb').val() ,
seniorcitizenidCb: $('#seniorcitizenidCb').val() ,
deathcertificateCb: $('#deathcertificateCb').val(), 
funeralcontractCb: $('#funeralcontractCb').val() 



   };


   
// First AJAX request
$.post('../includes_interview/addAssistance.php', {
    assistanceData: assistanceData
}, function (data, status) {
    if (data.includes("success")) {
        // Second AJAX request
        $.post('../includes_interview/addclient_info.php', {
            clientData: clientData
        }, function (data, status) {
            if (data.includes("success")) {
                // Third AJAX request
                $.post('../includes_interview/add_assistanceneeded.php', {
                    assistanceneededData: assistanceneededData
                }, function (data, status) {
                    if (data.includes("success")) {
                        // All steps are successful, redirect
                        window.location = "../interviewer/interviewer_dashboard.php";
                    } else {
                        console.log(data);
                    }
                });
            } else {
                console.log(data);
            }
        });
    } else {
        console.log(data);
    }
});

}




 
// Get assistance type checkboxes
// const medicalAssistance = document.getElementById("medicalAssistanceNeeded").checked;
// const financialAssistance = document.getElementById("financialAssistanceNeeded").checked;
// const burialAssistance = document.getElementById("burialAssistanceNeeded").checked;

// // Get medical assistance form data
// const medicalExam = document.getElementById("medicalexamCb").checked;
// const medicine = document.getElementById("medicineCb").checked;

// const labCb= document.getElementById("laboratoryCb").checked;
// const other= document.getElementById("othersCb").checked;


// medassistCb = document.getElementById("othersCb").checked; $('#medassistCb').val() ,
// burialassistCb = $('#burialassistCb').val() ,
// financialCb = $('#financialCb').val(), 
// referraltoaicsCb = $('#referraltoaicsCb').val(), 
// otherfinancialassistCb = $('#otherfinancialassistCb').val();
// // ... other medical assistance checkboxes ...

// // Construct an object to store the collected data
// const formData = {};

// if (medicalAssistance) {
//     formData.assistanceType = "Medical Assistance";
//     formData.medicalAssistance = {
//         medicalExam: medicalExam,
//         medicine: medicine,
//         labCb:labCb,
//         other:other
//         // ... other medical assistance data ...
//     };
// }

// if (financialAssistance) {
//     formData.assistanceType = "Financial Assistance";
//     // Add relevant financial assistance data here...
// }

// if (burialAssistance) {
//     formData.assistanceType = "Burial Assistance";
//     // Add relevant burial assistance data here...
// }

// // Perform further actions here, such as sending the formData to a server or processing it locally.
// // Example: sendFormDataToServer(formData);

// console.log(formData); // Display the collected data in the browser console for testing purposes
// }



