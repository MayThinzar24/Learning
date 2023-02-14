<?php

/**
 * The template for displaying Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

get_header();
?>
<div class="form-field">
	<label class="form-label">Company Name</label>
	<input type="text" class="form-input">
</div>
<div class="form-field">
	<label class="form-label">Name<span class="required">(required)</span></label>
	<input type="text" class="form-input">
</div>
<div class="form-field">
	<label class="form-label">Email Address<span class="required">(required)</span></label>
	<input type="text" class="form-input">
</div>
<div class="form-field">
	<label class="form-label">Phone Number<span class="required">(required)</span></label>
	<input type="text" class="form-input">
</div>
<div class="form-field">
	<label class="form-label">How did you get to know us?</label>
	<input type="text" class="form-input">
</div>
<div class="form-field">
	<label class="form-label">Message<span class="required">(required)</span></label>
	<textarea cols="30" rows="10" class="form-input"></textarea>
</div>
<div class="info-box">
	<h3 class="box-ttl">Handling Of Personal Information</h3>
	<p class="box-txt">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrat the visual form of a document or a typeface without relying on meaning.</p>

	<h4 class="info-ttl">1. 1st-century BC text</h4>
	<p class="box-txt">Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication.</p>
	<h4 class="info-ttl">2. Letraset transfer sheets</h4>
	<p class="box-txt">Lorem ipsum is typically a corrupted version of De finibus bonorum et malorum, a 1st-century BC text by the Roman statesman and philosophe.</p>
</div>
<div class="chk-blk">
	<input type="checkbox"class="chk">
	<label class="chk-label">I agree to the rules for handling personal information<span class="required">(required)</span></label>
</div>
<input type="submit" value="Send an inquiry" class="form-btn">
<?php
get_footer();
