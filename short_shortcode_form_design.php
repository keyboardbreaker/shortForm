<div id='form_overlay'>
	<div class='loading'>
		<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw spinner"></i>
		<div class='message'>Please Wait...</div>
	</div>
</div>
<div class="form_background">

<form method='post' name="ShortAcqForm" id="shortForm">
    <h2 class="form-title"><?php echo $form['title']; ?></h2>
    <div class="form-group">
        <input id="first_name" name="first_name" value="" type="text" class="form-control" placeholder="First Name" />
    </div>
    <div class="form-group">
        <input id="last_name" name="last_name" type="text" value="" class="form-control" placeholder="Last Name" />
    </div>
    <div class="form-group">
        <input id="email_address" name="email_address" type="text" value="" class="form-control" placeholder="Email Address" />
    </div>
    <div class="form-group">
        <input id="phone_1" name="phone_1" type="text" value="" class="form-control" placeholder="Telephone Number" />
    </div>
    <div class="form-group">
        <select id="loan_amount" name="loan_amount" class="form-control">
            <option value="">Loan Amount ?</option>
			<option value="25000">£25,000</option>
            <option value="30000">£30,000</option>
            <option value="35000">£35,000</option>
            <option value="40000">£40,000</option>
            <option value="45000">£45,000</option>
            <option value="50000">£50,000</option>
            <option value="55000">£55,000</option>
        </select>
    </div>
    <div class="form-group">
        <select id="loan_purpose" name="loan_purpose" class="form-control">
            <option value="">Type of Loan ?</option>
			<option value="PURCHASE">Purchase</option>
            <option value="CHAINBREAK">Chain Break</option>
            <option value="REFURBISHMENT">Refurbishment</option>
            <option value="AUCTION">Auction Purchase</option>
            <option value="REFINANCE">Refinance</option>
            <option value="DEVELOPMENTEXIT">Development Exit</option>
            <option value="OTHER">Other</option>
        </select>
    </div>
    <div class="form-group">
        <select id="residential_property" name="residential_property" class="form-control">
            <option value="">Will you live in the proposed property?</option>
            <option value="true">Yes</option>
            <option value="false">No</option>
        </select>
    </div>

    <input id="product_code" name="product_code" type="text" value="BRIDGEDEV" class="meta-form-data" hidden />
    <input id="product_type" name="product_type" type="text" value="COMMERCIALBRIDGE" class="meta-form-data" hidden />
	<div class="form-group">
        <input id="site_name" name="site_name" class="meta-form-data" type="text" value="<?php echo get_site_url(); ?>" hidden />
    </div>

    <div style="text-align: center">
        <button type="submit" name="btnsubmit" class="btn-submit text-center">Get Rates ►</button>
		<div>
        <p><small>Your data will be held securely and contact will only be made for the purpose of providing a quote. <a class="privacy" href="/privacy-policy/" alt="">Privacy Policy</a></small></p>
    	</div>
    </div>
	
    <input id="campaign" name="campaign" class="meta-form-data" type="text" value="" hidden />
    <input id="source_id" name="source_id" class="meta-form-data" type="text" value="" hidden />
    <input id="source" name="source" class="meta-form-data" type="text" value="" hidden />
    <input id="channel" name="channel" class="meta-form-data" type="text" value="" hidden />
    <input id="keyword" name="keyword" class="meta-form-data" type="text" value="" hidden />
    <input id="content" name="content" class="meta-form-data" type="text" value="" hidden />
</form>


<div id="thankyou_response">
<h3><?php echo esc_attr( get_option( 'short_form_confirm_msg' ) )?></h3>
</div>
</div>