<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<form <?php echo get_block_wrapper_attributes( ['class' => 'roamApplicationForm'] ); ?> id="applicationForm" action="<?php echo get_home_url( 0, '/wp-content/plugins/roammemberapplicationform/build', 'https' ) ?>/apply.php" method="post">
	<h2>
		<?php esc_html_e( 'Become a member', 
		'roammemberapplicationform' ); ?>
	</h2>
	<fieldset form="applicationForm">
		<div class="formInput">
			<label for="surname"><?php esc_html_e( 'Surname', 'roammemberapplicationform' ) ?></label>
			<input name="surname" id="surname" type="text" maxlength="64" pattern="[.a-zA-Z\s\u002D\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u00FF\u0100-\u017F]+" required />
		</div>

		<div class="formInput">
			<label for="forename"><?php esc_html_e( 'Forename', 'roammemberapplicationform' ) ?></label>
			<input name="forename" id="forename" type="text" maxlength="64" pattern="[.a-zA-Z\s\u002D\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u00FF\u0100-\u017F]+" required />
		</div>

		<div class="formInput">
			<label for="birthdate"><?php esc_html_e( 'Date of birth', 'roammemberapplicationform' ) ?></label>
			<input name="birthdate" id="birthdate" type="date" required />
		</div>

		<div class="formInput">
			<label for="street"><?php esc_html_e( 'Street', 'roammemberapplicationform' ) ?></label>
			<input name="street" id="street" type="text" maxlength="128" pattern="[.\w\s\u002D\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u00FF\u0100-\u017F]+" required />
		</div>

		<div class="formInput">
			<label for="number"><?php esc_html_e( 'Number', 'roammemberapplicationform' ) ?></label>
			<input name="number" id="number" type="text" maxlength="8" pattern="[a-zA-Z0-9\s]+" required />
		</div>

		<div class="formInput">
			<label for="postalcode"><?php esc_html_e( 'Postal code', 'roammemberapplicationform' ) ?></label>
			<input name="postalcode" id="postalcode" type="text" maxlength="8" pattern="[A-Z0-9\u002D]+" required />
		</div>

		<div class="formInput">
			<label for="city"><?php esc_html_e( 'City', 'roammemberapplicationform' ) ?></label>
			<input name="city" id="city" type="text" maxlength="64" pattern="[a-zA-Z\u002D\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u00FF\u0100-\u017F]+" required />
		</div>

		<div class="formInput">
			<label for="phone"><?php esc_html_e( 'Phone (optional)', 'roammemberapplicationform' ) ?></label>
			<input name="phone" id="phone" type="text" maxlength="24" pattern="[\u002B\u002D0-9\s]+" />
		</div>

		<div class="formInput">
			<label for="email"><?php esc_html_e( 'Email', 'roammemberapplicationform' ) ?></label>
			<input name="email" id="email" type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required />
		</div>

		<div class="formInput">
			<label for="begin"><?php esc_html_e( 'Begin of membership', 'roammemberapplicationform' ) ?></label>
			<input name="begin" id="begin" type="date" required />
		</div>
	</fieldset>
	<fieldset form="applicationForm">
		<div class="formInput">
			<label for="iban"><?php esc_html_e( 'IBAN', 'roammemberapplicationform' ) ?></label>
			<input name="iban" id="iban" type="text" maxlength="34" pattern="[A-Z0-9]+" required />
		</div>

		<div class="formInput">
			<label for="swift"><?php esc_html_e( 'SWIFT/BIC', 'roammemberapplicationform' ) ?></label>
			<input name="swift" id="swift" type="text" maxlength="11" pattern="[A-Z0-9]+" required />
		</div>

		<div class="formInput formConfirmation">
			<input name="mandate" id="mandate" type="checkbox" required />
			<label for="mandate"><?php esc_html_e( 'I hereby confirm...', 'roammemberapplicationform' ) ?></label>
		</div>
	</fieldset>
	<input type="submit" formenctype="application/x-www-form-urlencoded" value="<?php esc_html_e( 'Submit', 'roammemberapplicationform' ) ?>" />
</form>
