<?php defined('ABSPATH') || exit; ?>



<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#login_tab"><?php _e('Login' , 'radshid_lan'); ?></a></li>
    <li><a data-toggle="tab" href="#register_tab"><?php _e('Register' , 'radshid_lan'); ?> </a></li>
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
                        <input type="text" class="form-control signUpInput" id="login_username_input" name="username">
                        <div class="invalid-feedback">
                            <span><?php _e('Please enter your username' , 'radshid_lan'); ?></span>
                        </div>
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
                        <input type="password" class="form-control" id="login_pass_input" name="pass" >
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
    <div id="register_tab" class="tab-pane fade">
        <form id="register_frm">
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_name_input"><?php _e('Name' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_name_input" name="txtName">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your name' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_family_input"><?php _e('Family' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_family_input" name="txtLastName">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your family' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_username_input"><?php _e('Username' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_username_input" name="txtRUsername">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your username' , 'radshid_lan'); ?></span>
                    </div>
                    <small id="usernameHelp" class="form-text text-muted">
                        نام کاربری کلمه ای است که بعد از ثبت نام شما میتوانید
                        با آن به سامانه ردیابی مراجعه نمائید،
                        شما مجاز به استفاده از کاراکترهای فارسی نیستید
                    </small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_password_input"><?php _e('Password' , 'radshid_lan'); ?></label>
                    <input type="password" class="form-control " id="register_password_input" name="txtRPass1">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter a valid password' , 'radshid_lan'); ?></span>
                    </div>
                    <small id="passwordHelp" class="form-text text-muted">
                        جهت امنیت بیشتر لطفا از کلمات عبور ساده استفاده ننمایید،
                        کلمه عبور باید حداقل شامل اعداد و حروف باشد و نمی تواند شامل کاراکترهای فارسی باشد
                    </small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_password_confirm_input"><?php _e('Password Confirm' , 'radshid_lan'); ?></label>
                    <input type="password" class="form-control " id="register_password_confirm_input" name="txtRPass2">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your password again' , 'radshid_lan'); ?></span>
                    </div>
                    <div class="invalid-feedback" id="match_pass">
                        <span><?php _e('Password and its confirm does not match' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_mobile_input"><?php _e('Mobile Number' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_mobile_input" name="txtMobile" maxlength="10"
                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your a valid mobile number' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label for="register_email_input"><?php _e('Email' , 'radshid_lan'); ?></label>
                    <input type="email" class="form-control " id="register_email_input" name="txtEmail" >
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter a valid email address' , 'radshid_lan'); ?></span>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        ایمیل جهت بازیابی کلمه عبور استفاده خواهد شد،
                        لطفا ایمیل را به صورت صحیح وارد کنید
                    </small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_gps_serial_input"><?php _e('Gps Serial' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_gps_serial_input" name="txtGpsSerial" maxlength="15"
                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter a valid gps serial' , 'radshid_lan'); ?></span>
                    </div>
                    <small id="gpsSerialHelp" class="form-text text-muted">
                        سریال دستگاه شماره 15 رقمی
                        درج شده بر روی کارت گارانتی دستگاه است
                    </small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_reg_code_input"><?php _e('Register Code' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_reg_code_input" name="txtRegisterCode"
                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your register code' , 'radshid_lan'); ?></span>
                    </div>
                    <small id="registerCodeHelp" class="form-text text-muted">
                        شناسه ثبت نام یک عدد چند رقمی است که میتوانید
                        بر روی کارت گارانتی دستگاه مشاهده نمائید
                    </small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_car_name_input"><?php _e('Car Name' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_car_name_input" name="txtCarName">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your car name' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label for="register_driver_name_input"><?php _e('Driver Name' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_driver_name_input" name="txtDriverName">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter your driver name' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3 required">
                    <label for="register_admin_phone_input"><?php _e('Admin Phone' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control " id="register_admin_phone_input" name="txtAdminPhone" maxlength="10"
                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter a valid admin phone' , 'radshid_lan'); ?></span>
                    </div>
                    <small id="adminPhoneHelp" class="form-text text-muted">
                        شماره سرپرست،شماره تلفن همراهی است که
                        مجوز استفاده از نرم افزار اندروید
                        و یا سامانه پیامکی برای دستگاه شما را خواهد داشت
                    </small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label for="register_sim_phone_input"><?php _e('Sim Phone' , 'radshid_lan'); ?></label>
                    <input type="text" class="form-control" id="register_sim_phone_input" name="txtSimPhone" maxlength="10"
                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                    <i class="fa fa-check valid_input"></i>
                    <div class="invalid-feedback">
                        <span><?php _e('Please enter a valid sim phone' , 'radshid_lan'); ?></span>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-info btn-block" id="register_frm_submit_btn">
				<?php _e('Register' , 'radshid_lan'); ?>
            </button>
        </form>
        <input type="hidden" value="<?php _e('Register' , 'radshid_lan'); ?>" id="register_frm_submit_btn_txt">
        <input type="hidden" value="<?php _e('Please correct showed errors first' , 'radshid_lan'); ?>" id="register_frm_err_notify">
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





