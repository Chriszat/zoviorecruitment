<?php require('../functions.php'); ?>
<?php include('../fragments/header.php');?>


<section id="connect">
            <div class="container">
                <div class="inner-container">
                    <div class="center-vertical">
                    <h2 class="h1" style="font-size:24px">Employee PUIN (Profile Unique Identification Number)</h2><br>
                    <p class="little-p">
                        Kindly provied your employee profile unique identification number assigned to you.
                    </p>
                    <div class="search-tab" style="width:100%!important">
					<label id="location-combobox-label" for="location2">
                        <span class="visuallyHidden">Employee ID</span></label>					
					<span class="fa fa-map-marker" aria-hidden="true"></span>
					<div class="combobox-wrapper">
						<div role="combobox" aria-expanded="false" aria-owns="location-listbox" aria-haspopup="listbox" id="location-combobox"  title="Employee ID">
							<input title="Employee ID" type="text" name="location" id="employeeId" class="micrositeLocationField ui-autocomplete-input" aria-autocomplete="list" aria-controls="location-listbox" aria-labelledby="location-combobox-label"  placeholder="Employee ID" autocomplete="off">
						</div>
                       <div id="errorLog"></div>
					</div>
			</div>
                    <p><button class="btn" id="submitEmployeeId" style="cursor:pointer">CHECK PROFILE</button></p>
                </div>
                </div>
            </div>
        </section>

<script>
profileBtn = document.getElementById("submitEmployeeId")
profileBtn.addEventListener('click', function(evt){
    employeeId = document.getElementById('employeeId').value
    ajax = new XMLHttpRequest()
    ajax.open("POST", "<?php echo build_api_uri('/get-employee-profile/'); ?>", true);
    ajax.setRequestHeader('Authorization', 'Token a3ea11faca1e5a1fa76cffa864289036d06ea359')
    formdata = new FormData()
    formdata.append('employee_puin', employeeId)
    ajax.onreadystatechange = function(evt){
        console.log(evt)
        if(evt.target.status === 200 && evt.target.readyState === 4){
            response = JSON.parse(evt.target.response)
            if(response.data===null){
                document.getElementById('errorLog').innerHTML = `<p style="color:#e74c3c; font-weight:700">
                <i class="fa fa-close"></i> Invalid Employee Profile ID </p>`
            }else{
                document.getElementById('errorLog').innerHTML = ''
                localStorage.setItem('userProfileData', JSON.stringify(response))
                localStorage.setItem('employee_puin', employeeId)
                window.location = "<?php echo url_from_absolute_uri('/employees/finance/'); ?>"
            }
        }
    }
    ajax.send(formdata)
})
</script>

<?php include('../fragments/footer.php'); ?>