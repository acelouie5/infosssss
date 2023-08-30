    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="../js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- Include jQuery and DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include DataTables library scripts -->
    <script src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="../js/script.js"></script>
    
<script src="../includes_interview/interview_js/saveinfo.js"></script>
<script src = "../includes_interview/interview_js/update_status.js"></script>
<script src = "../includes_verifier/verifier_js/verifier_stats.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet"></link>
<script>
    $("#cprovince").chosen();
    $("#cregion").chosen();
    $("#ccity").chosen();
</script>


    
</script>
<script>

    const triggerTabList = document.querySelectorAll('#myTab button')
        triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', event => {
            event.preventDefault()
            tabTrigger.show()
        })
        })

       document.getElementById('familyForm').addEventListener('submit', function (event) {
            event.preventDefault();

                // Get the form data
                const formData = new FormData(this);
                const data = {};
                formData.forEach((value, key) => {
                    data[key] = value;
                });

            // Create a new row for the table
            const tableBody = document.getElementById('familyTable').getElementsByTagName('tbody')[0];
            const newRow = tableBody.insertRow();
            const keys = Object.keys(data);

            // Fill the row with form data
            for (let i = 0; i < keys.length; i++) {
                const cell = newRow.insertCell(i);
                cell.textContent = data[keys[i]];
            }

            // Add the "ACTIONS" cell with edit and delete buttons
            const actionsCell = newRow.insertCell(keys.length);
            const editButton = document.createElement('button');
            editButton.type = 'button';
            editButton.className = 'btn btn-success';
            editButton.innerHTML = '<i class="fas fa-edit"></i>';

            // Add event listener for editing the row
            editButton.addEventListener('click', () => {
                openEditModal(data); // Call the function to open the edit modal with the data
            });

            // Append the edit button to the "ACTIONS" cell
            actionsCell.appendChild(editButton);


            const deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.className = 'btn btn-danger';
            deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
            // Add event listener for deleting the row (you need to implement the delete functionality separately)
            deleteButton.addEventListener('click', () => {
                // Implement the delete logic here, for example, remove the row from the table.
            });

            actionsCell.appendChild(editButton);
            actionsCell.appendChild(deleteButton);

            
        // Clear the form inputs after submission
                this.reset();
        });

        function toggleAccordion(section) {
            const checkbox = document.getElementById(section + 'Checkbox');
            const accordionButton = document.querySelector(`[data-bs-target="#flush-collapse${section.charAt(0).toUpperCase() + section.slice(1)}"]`);
            const accordionCollapse = document.getElementById(`flush-collapse${section.charAt(0).toUpperCase() + section.slice(1)}`);

            if (checkbox.checked) {
                accordionButton.removeAttribute('disabled');
                accordionCollapse.classList.add('show');
            } else {
                accordionButton.setAttribute('disabled', true);
                accordionCollapse.classList.remove('show');
            }
        }
 
     function toggleAccordion() 
        {
            const medicalCheckbox = document.getElementById("medicalAssistanceCheckbox");
            const financialCheckbox = document.getElementById("financialAssistanceCheckbox");
            const burialCheckbox = document.getElementById("burialAssistanceCheckbox");
            const referraltoaicsCheckbox = document.getElementById("referraltoaicsCheckbox");
            const accordionItems = document.querySelectorAll(".accordion-item");

            accordionItems.forEach(item => {
                const collapse = item.querySelector(".accordion-collapse");
                const accordionHeader = item.querySelector(".accordion-header");
                const btn = accordionHeader.querySelector("button");

                if (
                (medicalCheckbox.checked && btn.innerText.includes("MEDICAL ASSISTANCE")) ||
                (financialCheckbox.checked && btn.innerText.includes("FINANCIAL ASSISTANCE")) ||
                (burialCheckbox.checked && btn.innerText.includes("BURIAL/DEATH ASSISTANCE")) ||
                (referraltoaicsCheckbox && btn.innerText.includes("REFERRAL TO AICS"))
                ) {
                collapse.classList.add("show");
                } else {
                collapse.classList.remove("show");
                }
            });
        }
        // Function to show the VALID ID form when the "ADD VALID ID" button is clicked
        let checkboxesAdded = false;

        function toggleCheckboxes() {
        const checkboxContainer = document.getElementById("checkboxContainer");

        // If checkboxes are added, remove them and set the flag
        if (checkboxesAdded) {
            checkboxContainer.innerHTML = "";
            checkboxesAdded = false;
        } else {
            // Create and append the checkboxes
            const checkboxes = ['PWD', 'SENIOR CITIZEN', 'SOLO PARENT'];
            checkboxes.forEach(label => {
                const checkbox = document.createElement("div");
                checkbox.className = "form-check";
                checkbox.innerHTML = `
                    <input class="form-check-input" type="checkbox" name="${label}" id="${label.toLowerCase()}Cb" onchange="disableOtherCheckboxes('${label.toLowerCase()}Cb')">
                    <label class="form-check-label" for="${label.toLowerCase()}Cb">${label}</label>
                `;
                checkboxContainer.appendChild(checkbox);
            });
            checkboxesAdded = true;
        }
    }
    function toggleAccordion(checkboxId) {
        const accordionId = checkboxId.replace("cb", "");
        const accordion = document.getElementById(`accordion${accordionId}`);
        
        if (document.getElementById(checkboxId).checked) {
            accordion.style.display = "block";
        } else {
            accordion.style.display = "none";
        }
    }

    function disableOtherCheckboxes(clickedCheckboxId) {
        const checkboxes = document.querySelectorAll("input[type='checkbox']");
        checkboxes.forEach(checkbox => {
            if (checkbox.id !== clickedCheckboxId) {
                checkbox.disabled = document.getElementById(clickedCheckboxId).checked;
            }
        });
    }
//     function toggleValidIdCheckboxes(clickedCheckboxId, group) {
//     const checkboxes = document.querySelectorAll(`.${group} .form-check-input`);
//     checkboxes.forEach(checkbox => {
//         if (checkbox.id !== clickedCheckboxId) {
//             checkbox.disabled = document.getElementById(clickedCheckboxId).checked;
//         }
//     });
// } 

    $(document).ready(function() {
        $('#togglePWD').on('change', function() {
            if ($(this).is(':checked')) {
                $('#pwdpanel').slideDown();
                $('#seniorpanel').slideUp();
                $('#solopanel').slideUp();
                $('#toggleSeniorCitizen').prop('checked',false);
                $('#toggleSoloParent').prop('checked',false);
            } else {
                $('#pwdpanel').slideUp();
            }
        });
        $('#toggleSeniorCitizen').on('change', function() {
            if ($(this).is(':checked')) {
                $('#seniorpanel').slideDown();
                $('#solopanel').slideUp();
                $('#pwdpanel').slideUp();
                $('#togglePWD').prop('checked',false);
                $('#toggleSoloParent').prop('checked',false);
            } else {
                $('#seniorpanel').slideUp();
            }
        });
        $('#toggleSoloParent').on('change', function() {
            if ($(this).is(':checked')) {
                $('#solopanel').slideDown();
                $('#pwdpanel').slideUp();
                $('#seniorpanel').slideUp();
                $('#togglePWD').prop('checked',false);
                $('#toggleSeniorCitizen').prop('checked',false);
            } else {
                $('#solopanel').slideUp();

            }
        });
    });


    function toggleAccordion(checkboxId, accordionId) {
    const checkbox = document.getElementById(checkboxId);
    const accordion = document.getElementById(accordionId);
    
    if (checkbox.checked) {
        accordion.classList.add('show'); // Show the accordion
        accordion.querySelector('.accordion-button').disabled = false;
    } else {
        accordion.classList.remove('show'); // Hide the accordion
        accordion.querySelector('.accordion-button').disabled = true;
    }
}
function toggleAssistanceNeededCheckboxes(clickedCheckboxId, group) {
    const checkboxes = document.querySelectorAll(`.${group} .form-check-input`);
    checkboxes.forEach(checkbox => {
        if (checkbox.id !== clickedCheckboxId) {
            checkbox.disabled = document.getElementById(clickedCheckboxId).checked;
        }
    });
}


    

   // Function to show the "Add Medicine" button when the checkbox is checked
   function toggleAddMedicineButton() {
        const medicineCheckbox = document.getElementById("medicineCb");
        const addMedicineButton = document.getElementById("addMedicineButton");

        addMedicineButton.style.display = medicineCheckbox.checked ? "block" : "none";
    }

    // Function to handle form submission and add data to the table
    function addMedicineToTable() {
        const medicineForm = document.getElementById("medicineForm");

        // Get the form data
        const medicineName = medicineForm.elements["medicinelist"].value;
        const quantity = medicineForm.elements["qty"].value;
        const daysToTake = medicineForm.elements["days"].value;

        // Get the table body to append the new row
        const tableBody = document.querySelector("#medicineTable tbody");

        // Create a new row and populate it with the form data
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${medicineName}</td>
            <td>${quantity}</td>
            <td>${daysToTake}</td>
        `;

        // Append the new row to the table
        tableBody.appendChild(newRow);

        // Clear the form fields
        medicineForm.reset();

    }

    // Add an event listener to the form's submit button
    const submitButton = document.querySelector("#medicineForm button[type='submit']");
    submitButton.addEventListener("click", addMedicineToTable);

        // Function to toggle the visibility of the "othersInput" text field
        function toggleOthersInput() {
            const othersCheckbox = document.getElementById("othersCb");
            const othersInput = document.getElementById("othersInput");

            othersInput.style.display = othersCheckbox.checked ? "block" : "none";
        }

         // Function to toggle the visibility of the additional checkboxes
         function toggleAdditionalCheckboxes() {
            const medAssistCheckbox = document.getElementById("medassistCb");
            const additionalCheckboxesContainer = document.getElementById("additionalCheckboxesContainer");

            // Show or hide additional checkboxes based on medAssistCheckbox state
            additionalCheckboxesContainer.style.display = medAssistCheckbox.checked ? "block" : "none";
        }
        
        function toggleOtherMedicalAssistanceCheckboxes(clickedCheckboxId) {
        const checkboxes = document.querySelectorAll('#flush-collapseOne .form-check-input');
            checkboxes.forEach(checkbox => {
            if (checkbox.id !== clickedCheckboxId) {
                checkbox.disabled = document.getElementById(clickedCheckboxId).checked;
            }
            });
        }
        function toggleOtherFinancialAssistanceCheckboxes(clickedCheckboxId) {
        const checkboxes = document.querySelectorAll('#flush-collapseTwo .form-check-input');
            checkboxes.forEach(checkbox => {
            if (checkbox.id !== clickedCheckboxId) {
                checkbox.disabled = document.getElementById(clickedCheckboxId).checked;
            }
            });
        }
        function toggleOtherFinancialAssistanceInput() {
            const checkbox = document.getElementById('otherfinancialassistCb');
            const otherInput = document.getElementById('otherFinancialInput');

            if (checkbox.checked) {
                otherInput.style.display = 'block'; // Display the input field
            } else {
                otherInput.style.display = 'none'; // Hide the input field
            }
        }

    </script>




