<?php defined('ABSPATH') || exit; ?>



<!-- Nav tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#login_tab"><?php _e('Login' , 'radshid_lan'); ?></a></li>
	<li><a data-toggle="tab" href="#menu1">ثبت نام</a></li>
	<li><a data-toggle="tab" href="#menu2">بازیابی رمز عبور</a></li>
	<li><a data-toggle="tab" href="#menu3">رهگیری</a></li>
</ul>
<div class="tab-content container">
	<div id="login_tab" class="tab-pane fade in active">
		<form id="login_frm">
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="login_username_input"><?php _e('Username' , 'radshid_lan'); ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                        </div>
                        <input type="text" class="form-control signUpInput" id="login_username_input" name="username" required>
                        <div class="invalid-feedback">
                            <span><?php _e('Please enter your username' , 'radshid_lan'); ?></span>
                        </div>
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                </div>
            </div>

            <div class="form-row" id="password_input_container">
                <div class="col-12 mb-3 required">
                    <label for="login_pass_input"><?php _e('Password' , 'radshid_lan'); ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="login_pass_input" name="pass" required >
                        <i class="fa fa-eye align-middle mx-1" id="pass_reveal"></i>
                        <div class="invalid-feedback">
                            <span><?php _e('Please enter your password' , 'radshid_lan'); ?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="button" class="btn btn-success btn-block" id="login_frm_submit_btn">
                <?php _e('Login' , 'radshid_lan'); ?>
<!--                <i class="fa fa-circle-o-notch align-middle mx-1"></i>-->
            </button>
		</form>
        <input type="hidden" value="<?php _e('Login' , 'radshid_lan'); ?>" id="login_frm_submit_btn_txt">
    </div>
	<div id="menu1" class="tab-pane fade">
		<h3 style="color: red">Menu 1</h3>
		<p style="color: red">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
	<div id="menu2" class="tab-pane fade">
		<h3 style="color: red">Menu 2</h3>
		<p style="color: red">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	</div>
	<div id="menu3" class="tab-pane fade">
		<h3>Menu 3</h3>
		<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div>
<!-- Nav tabs -->





