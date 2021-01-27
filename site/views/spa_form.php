<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>


<div class="row" id="spaForms">
    <div class="separator reverseOnMob my-5">
        <div class="separator_sub" id="separator_sub_right">
            <div class="spa_container_frm bounceIn wow" data-wow-duration="0.5s" data-wow-delay="0.5s" >
                <ul class="nav nav-tabs">
                    <li class="nav-tab active"><a data-toggle="tab" href="#login_tab"><?php _e('Login' , 'radshid_lan'); ?></a></li>
                    <li class="nav-tab"><a data-toggle="tab" href="#register_tab"><?php _e('Register' , 'radshid_lan'); ?> </a></li>
                </ul>
                <div class="tab-content container-fluid">
                    <div id="login_tab" class="tab-pane fade in active">
                        <form action="" id="login_frm">
                            <input type="hidden" name="rad_login_nonce" id="rad_login_nonce" value="<?php echo wp_create_nonce('rad-login-nonce'); ?>" >
                            <div class="form-row">
                                <div class="col-12 mb-3 required">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                        </div>
                                        <input type="text" class="form-control signUpInput" id="login_username_input" name="username"
                                               placeholder="<?php _e('Username' , 'radshid_lan'); ?>">
                                        <div class="invalid-feedback">
                                            <span><?php _e('Please enter your username' , 'radshid_lan'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row" id="password_input_container">
                                <div class="col-12 mb-3 required">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="login_pass_input" name="pass"
                                               placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                        <i class="fa fa-eye align-middle mx-1" id="pass_reveal"></i>
                                        <div class="invalid-feedback">
                                            <span><?php _e('Please enter your password' , 'radshid_lan'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--                        <div class="form-check">-->
                            <!--                            <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
                            <!--                            <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
                            <!--                        </div>-->
                            <button type="submit" class="btn btn-block" id="login_frm_submit_btn">
								<?php _e('Login' , 'radshid_lan'); ?>
                            </button>
                        </form>
                        <input type="hidden" value="<?php _e('Login' , 'radshid_lan'); ?>" id="login_frm_submit_btn_txt">
                    </div>

                    <div id="register_tab" class="tab-pane fade">
                        <form action="" id="register_frm">
                            <input type="hidden" name="rad_register_nonce" id="rad_register_nonce" value="<?php echo wp_create_nonce('rad-register-nonce'); ?>" >
                            <div class="form-row">
                                <div class="col-12 mb-3 required">
                                    <label for="register_name_input"><?php _e('Name' , 'radshid_lan'); ?></label>
                                    <input type="text" class="form-control " id="register_name_input" name="txtName">
                                    <i class="fa fa-check valid_input"></i>
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
                                    <div class="invalid-feedback">
                                        <span><?php _e('Please enter a valid password' , 'radshid_lan'); ?></span>
                                    </div>
                                    <small id="passwordHelp" class="form-text text-muted">
                                        جهت امنیت بیشتر لطفا از کلمات عبور ساده استفاده ننمایید،
                                        کلمه عبور باید حداقل 4 حرف و  شامل اعداد و حروف باشد و نمی تواند شامل کاراکترهای فارسی باشد
                                    </small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 mb-3 required">
                                    <label for="register_password_confirm_input"><?php _e('Password Confirm' , 'radshid_lan'); ?></label>
                                    <input type="password" class="form-control " id="register_password_confirm_input" name="txtRPass2">
                                    <i class="fa fa-check valid_input"></i>
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <input type="text" class="form-control " id="register_mobile_input" name="txtMobile" maxlength="11"
                                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                                    <i class="fa fa-check valid_input"></i>
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
                                    <div class="invalid-feedback">
                                        <span><?php _e('Please enter a valid register code' , 'radshid_lan'); ?></span>
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
                                    <i class="fa fa-warning invalid_input"></i>
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
                                    <i class="fa fa-warning invalid_input"></i>
                                    <div class="invalid-feedback">
                                        <span><?php _e('Please enter your driver name' , 'radshid_lan'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 mb-3 required">
                                    <label for="register_admin_phone_input"><?php _e('Admin Phone' , 'radshid_lan'); ?></label>
                                    <input type="text" class="form-control " id="register_admin_phone_input" name="txtAdminPhone" maxlength="11"
                                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                                    <i class="fa fa-check valid_input"></i>
                                    <i class="fa fa-warning invalid_input"></i>
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
                                <div class="col-12 mb-3 required">
                                    <label for="register_sim_phone_input"><?php _e('Sim Phone' , 'radshid_lan'); ?></label>
                                    <input type="text" class="form-control" id="register_sim_phone_input" name="txtSimPhone" maxlength="11"
                                           onkeyup="this.value = this.value.replace(/[^\d]+/g, '');">
                                    <i class="fa fa-check valid_input"></i>
                                    <i class="fa fa-warning invalid_input"></i>
                                    <div class="invalid-feedback">
                                        <span><?php _e('Please enter a valid sim phone' , 'radshid_lan'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-block" id="register_frm_submit_btn">
								<?php _e('Register' , 'radshid_lan'); ?>
                            </button>

                            <div class="alert alert-warning my-3 zoomIn" role="alert" id="regAlert">
								<?php _e('Please correct showed errors first' , 'radshid_lan'); ?>
                                <i class="fa fa-warning fa-2x"></i>
                            </div>
                        </form>
                        <input type="hidden" value="<?php _e('Register' , 'radshid_lan'); ?>" id="register_frm_submit_btn_txt">
                        <input type="hidden" value="<?php _e('Please correct showed errors first' , 'radshid_lan'); ?>" id="register_frm_err_notify">
                        <input type="hidden" value="<?php _e('Please correct Inputs parameters' , 'radshid_lan'); ?>" id="register_frm_inputs_err_notify">
                        <input type="hidden" value="<?php _e('You Have Registered Before' , 'radshid_lan'); ?>" id="register_frm_already_registered">
                        <input type="hidden" value="<?php _e('Registered Has Done Successfully' , 'radshid_lan'); ?>" id="register_frm_success">
                        <input type="hidden" value="<?php _e('You LoggedIn Successfully' , 'radshid_lan'); ?>" id="login_frm_success">
                        <input type="hidden" value="<?php _e('Username Or Password Are Incorrect' , 'radshid_lan'); ?>" id="login_frm_error">
                        <input type="hidden" value="<?php _e('Error In Authentication' , 'radshid_lan'); ?>" id="frm_error_authentication">
                    </div>
                </div>
            </div>
        </div>
        <div class="separator_sub">
            <div>
                <h3 class="separator_sub_title mb-4"><?php echo __('SPA System' , 'radshid_lan')?></h3>
                <div id="spa_separator_content">
                        <figure>
                            <img class="b-lazy" data-src="<?php echo RAD_ASSETS. '/images/spa_form/Login-Winter.png'  ?>" alt="سامانه مدیریت ناوگان">
                        </figure>
                        <p class="separator_sub_text">
                            سامانه مدیریت ناوگان رادشید یک سیستم یکپارچه مبتنی بر وب ، مطابق با ساختارهای بین المللی امنیت و اینترنت اشیا ، با برقراری ارتباط بین دستگاه های ردیاب  و مدیران ، به ارائه گزارشات مختلف و همچنین اعمال برخی دستورات مورد نیاز می پردازد.
                            این سامانه با توجه به نیاز مشتری و همچنین بر اساس پروتکل های بین المللی برنامه ریزی شده است و ابزارها و گزارشات مورد نیاز کاربر را به سریعترین روش ارائه می دهد.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>






