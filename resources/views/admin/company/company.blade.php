@extends('admin.templates.default')
@section('title','Warranty Company Information')
@section('main-container')
<form class='form' name='' id='' method='POST' action=''>
<fieldset>
<legend>Company Information</legend>
<div class='row'>
    <div class='col'>
        <label class='form-label' for='company_name'>Company Name</label>
        <input class='form-control' type='text' id='company_name' name='company_name'
        value='<?php if(isset($company_name)){echo $company_name;}else{echo "";}?>' />
    </div>
</div>
<div class='row'>
    <div class='col'>
        <label class='form-label' for='company_url'>Company URL</label>
        <input class='form-control'  type='text' id='company_url' name='company_url'
        value='<?php if(isset($company_url)){echo $company_url;}else{echo "";}?>' />
    </div>
</div>
<div class='row'>
    <div class='col'>
        <label class='form-label' for='company_address1'>Address</label>
        <input class='form-control'  type='text' id='company_address1' name='company_address1'
        value='<?php if(isset($company_address1)){echo $company_address1;}else{echo "";}?>' />
    </div>
    <div class='col'>
        <label class='form-label' for='company_address2'>Address</label>
        <input class='form-control'  type='text' id='company_address2' name='company_address2'
        value='<?php if(isset($company_address2)){echo $company_address2;}else{echo "";}?>' />
    </div>
</div>
<div class='row'>
    <div class='col'>
        <label class='form-label' for='company_city'>City</label>
        <input class='form-control'  type='text' id='company_city' name='company_city'
        value='<?php if(isset($company_city)){echo $company_city;}else{echo "";}?>' />
    </div>
    <div class='col'>
        <label class='form-label' for='company_state'>State</label>
        <input class='form-control'  type='text' id='company_state' name='company_state'
        value='<?php if(isset($company_state)){echo $company_state;}else{echo "";}?>' />
    </div>
    <div class='col'>
        <label class='form-label' for='company_zip'>Zip</label>
        <input class='form-control'  type='text' id='company_zip' name='company_zip'
        value='<?php if(isset($company_zip)){echo $company_zip;}else{echo "";}?>' />
    </div>
</div>
<div class='row'>
    <div class='col'>
        <label class='form-label' for='company_phone'>Main Phone #</label>
        <input class='form-control'  type='text' id='company_phone' name='company_phone'
        value='<?php if(isset($company_phone)){echo $company_phone;}else{echo "";}?>' />
    </div>
    <div class='col'>
        <label class='form-label' for='company_email'>Main Email Address</label>
        <input class='form-control'  type='text' id='company_email' name='company_email'
        value='<?php if(isset($company_email)){echo $company_email;}else{echo "";}?>' />
    </div>
</div>
</fieldset>
<fieldset>
<legend>Warranty Types</legend>
<div class='row'>
<div class='col'>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="home" value="warranty-home">
        <label class="form-check-label" for="home">Home</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="auto" value="warranty-auto">
        <label class="form-check-label" for="auto">Auto</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="electronics" value="warranty-electronics">
        <label class="form-check-label" for="electronics">Electronics</label>
    </div>
</div>
</div>
<div class='row'>
<div class='col'>
<button class='btn btn-primary'>Update</button>
</div>
</div>
</fieldset>
</form>
<div class='row' style='padding-top:10px;'>
    <div class='col'>
        <table class='table'>
        <caption>Plans as of:</caption>
            <thead class='table-dark'>
                <tr><th>Plan Name</th><th>Plan Type</th><th>Covers</th><th>Cost</th><th>Actions</th></tr>
            </thead>
        </table>
    </div>
</div>
<form class='form' name='' id='' method='POST' action=''>
<fieldset>
    <legend>Add Plan</legend>
    <div class='row'>
        <div class='col'>
        <select class='form-control' name='' id=''>
            <option value=''>SELECT PLAN TYPE</option>
            <option value='auto'>Auto</option>
            <option value='electronics'>Electronics</option>
            <option value='home'>Home</option>
        </select>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <label class='form-label' for=''>Plan Name</label>
            <input type='text' name='' id='' class='form-control'
            value='<?php if(isset($plan_)){echo $plan_;}else{echo "";}?>' />
        </div>
        <div class='col'>
            <label class='form-label' for=''>Plan Cost</label>
            <input type='text' name='' id='' class='form-control'
            value='<?php if(isset($plan_)){echo $plan_;}else{echo "";}?>' />
        </div>
        <div class='col'>
            <label class='form-label' for=''>Plan Length</label>
            <select class='form-control' name='plane_length' id='plan_length'>
            <option value='monthly'>Monthly</option>
            <option value='Quarterly'>Quartely</option>
            
            </select>
            
        </div>
    </div>
    <div class='row' style='padding-top:10px;'>
        <div class='col'>
            <textarea col=20 row='40' class='form-control' name='' id=''>
            <?php if(isset($plan_covers)){echo $plan_covers;}?>
            </textarea>
        </div>
    </div>
    
    <div class='row' style='padding-top:10px;'>
    <div class='col'>
        <button class='btn btn-primary'>Add</button>
    </div>
    </div>
</fieldset>
</form>


<form class='form' name='' id='' method='POST' action=''>
<fieldset>
<legend>Affiliate Contact</legend>
<div class='row'>
    <div class='col'>
    <label class='form-label' for='affiliate_name'>Affiliate Name</label>
    <input type='text' id='affiliate_name' name='affiliate_name' class='form-control'
    value='<?php if(isset($affiliate_name)){echo $affiliate_name;}else{echo "";}?>'
    />
    </div>
    <div class='col'>
    <label class='form-label' for='affiliate_phone'>Affiliate Phone</label>
    <input type='text' id='affiliate_phone' name='affiliate_phone' class='form-control' 
    value='<?php if(isset($affiliate_phone)){echo $affiliate_phone;}else{echo "";}?>'
    />
    </div>
    <div class='col'>
    <label class='form-label' for='affiliate_email'>Affiliate E-Mail</label>
    <input type='text' id='affiliate_email' name='affiliate_email' class='form-control' 
    value='<?php if(isset($affiliate_email)){echo $affiliate_email;}else{echo "";}?>'
    />
    </div>
</div>
<div class='row' style='padding-top:10px;'>
<div class='col'>
<button class='btn btn-primary'>Update</button>
</div>
</div>
</fieldset>
</form>
@endsection