<?php require('../../functions.php'); ?>

<?php include('../../fragments/header.php'); ?>
<style>
    body {
        background: #f2f2f2;
    }
</style>

<section style="margin:10px; max-width:100%">
    <div class="card card-1" style="color:black; padding:20px; width:700px; margin:0 auto; max-width:100%">
        <div class="container" style="width:700px; margin:0 auto; max-width:100%;">
            <div style="display: flex; align-items: center; ">
                <div style="width:100px; border-radius:50%; overflow:hidden">
                    <img id='profileImage' style="width:100%">
                </div>
                <div style="padding-left:10px">
                    <div>
                        <span><b>Full Name:</b></span>
                        <span id='profileFullname'></span>
                    </div>
                    <div>
                        <span><b>Work Email:</b></span>
                        <span id='profileEmail'></span>
                    </div>
                    <div>
                        <span><b>Gender:</b></span>
                        <span id='profileGender'></span>
                    </div>
                    <div style="background-color: green; color:#fff; padding:5px;">Work Application Approved <i class="fa fa-check"></i></div>
                </div>
            </div>
        </div>
        <br>
    </div>

</section>
<section style="margin:10px; max-width:100%">
    <div class="card card-1" id='introHelp' style="background-color:#e1b12c;color:#ecf0f1; padding:10px; width:700px; margin:0 auto; max-width:100%">
    Complete the information required below, to enable us provide funding for the necessary working equipment.
        <br>
    </div>
</section>
<form id="financeForm" enctype="multipart/form-data">
    <input type="hidden" name='employee_puin' id='id_employee_puin'>
    <section style="margin:10px; max-width:100%">
        <div class="card card-1" style="color:black; padding:20px; width:700px; margin:0 auto; max-width:100%">
            <div class="container" id="form_container" style="width:700px; margin:0 auto; max-width:100%;">
                <div style="text-align: center;">
                    <i class="fa fa-spinner fa-spin" style="font-size:35px; color:grey"></i><br>
                    <span>Loading...</span>
                </div>
            </div>
            <br>
            <div id="errorLog" style="color:red; font-weight:700"></div>
            <button class="card card-1" id="submitBtn" style="cursor:pointer;  margin-top:20px; padding:10px; background:#44bd32; color:#fff">
                Complete Financial Payment Info <i class="fa fa-upload"></i></button>

        </div>

    </section>
</form>

<section style="margin:10px; max-width:100%; display:none" id='id_success_dialog'>
    <div class="card card-1" style="color:black; padding:20px; width:700px; margin:0 auto; max-width:100%">
        <div class="container" id="form_container" style="width:700px; margin:0 auto; max-width:100%;">
            <div style="width:100px; margin:0 auto;">
                <img src="<?php echo url_from_absolute_uri('/assets/img/check-2.png'); ?>" style="width:100%">
            </div>
            <p style="text-align: center;">Information submitted successfully.<br>You will receive a phone call/text message feedback from us.</p>
        </div>
        <br>
    </div>
</section>


<script>
    if (localStorage.getItem('employee_puin')) {

        userProfileData = JSON.parse(localStorage.getItem('userProfileData'))
        console.log(userProfileData)
        document.getElementById('profileImage').src = '<?php echo CONFIG['media_base'] ?>' + userProfileData.userprofile.passport_image
        document.getElementById('profileFullname').innerHTML = userProfileData.fullname
        document.getElementById('profileEmail').innerHTML = userProfileData.email
        document.getElementById('profileGender').innerHTML = userProfileData.userprofile.gender

        employee_puin = localStorage.getItem('employee_puin')
        document.getElementById('id_employee_puin').value = employee_puin
        ajax = new XMLHttpRequest()
        ajax.open("GET", "<?php echo build_api_uri('/get-finance-form/'); ?>?puin="+localStorage.getItem('employee_puin'), true);
        ajax.setRequestHeader('Authorization', 'Token a3ea11faca1e5a1fa76cffa864289036d06ea359')
        ajax.onreadystatechange = function(evt) {
            if (evt.target.status === 200 && evt.target.readyState === 4) {
                response = JSON.parse(evt.target.response)
                if(response.data === null){
                    document.getElementById('id_success_dialog').style.display = 'block'
                    document.getElementById('financeForm').remove()
                    document.getElementById('introHelp').remove()
                }else{
                    document.getElementById('form_container').innerHTML = response.data
                }
            }
        }
        ajax.send()

        document.getElementById('financeForm').addEventListener('submit', function(evt) {
            evt.preventDefault()
            submitBtn = document.getElementById('submitBtn')
            submitBtn.style.background = '#f2f2f2'
            submitBtn.style.color = 'black'
            submitBtn.innerHTML = 'Complete Financial Payment Info <i class="fa fa-spin fa-spinner"></i>'
            formdata = new FormData(document.getElementById('financeForm'))
            ajax = new XMLHttpRequest()
            ajax.open("POST", "<?php echo build_api_uri('/save-finance-data/'); ?>", true);
            ajax.setRequestHeader('Authorization', 'Token a3ea11faca1e5a1fa76cffa864289036d06ea359')
            ajax.onreadystatechange = function(evt) {
                if (evt.target.status === 200 && evt.target.readyState === 4) {
                    response = JSON.parse(evt.target.response)
                    if (response.status === 'success') {
                        document.getElementById('id_success_dialog').style.display = 'block'
                        document.getElementById('financeForm').remove()
                    } else {
                        document.getElementById('errorLog').innerHTML = response.message
                        submitBtn = document.getElementById('submitBtn')
                        submitBtn.style.background = '#44bd32'
                        submitBtn.style.color = '#fff'
                        submitBtn.innerHTML = 'Complete Financial Payment Info <i class="fa fa-upload"></i>'
                    }
                }
            }
            ajax.send(formdata)

        })
    }
</script>

<?php include('../../fragments/footer.php'); ?>