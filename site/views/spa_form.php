<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>



<!-- Nav tabs -->
<div class="card-deck">
    <h3 class="card-deck-title" data-hover="120" id=""><?php _e('Login to spa system' , 'radshid_lan'); ?></h3>

    <div id="spa_container">
        <div class="col-lg-6 col-md-6 col-sm-12 text-center spa_container_img">
<!--            <figure class="spa_logo">-->
<!--                <img src="--><?php //echo RAD_ASSETS. '/images/spa_form/Winter.png'  ?><!--" alt="سامانه ردسابی رادشید">-->
<!--            </figure>-->
            <h3 class="spa_container_title mb-4">سامانه همکاری در فروش</h3>
            <p class="spa_container_text">
                در سیستم کسب درآمد رادشید هر شخص می تواند با یک عضویت ساده و ایجاد یک پنل شخصی به ازای هر فروش محصول، پورسانت دریافت نماید. این روش که افیلیت مارکتینگ نام دارد، از مهم ترین شیوه های کسب درآمد اینترنتی است که همه می توانند به راحتی فقط از طریق شبکه های اجتماعی مانند کانال تلگرام ، اینستاگرام و یا سایت، روشی بدون دردسر برای کسب درآمد آنلاین خود ایجاد نمایند .
                در این روش فروش، همکاران محترم رادشید به کمک لینک اختصاصی که برای محصولات در پنل شخصی خود ایجاد می نمایند مشتریان را به سایت رادشید هدایت و پس از هر خرید مشتری مقدار پورسانت مد نظر برای همکاران محاسبه می گردد که در پنل شخصی  قابل مشاهده میباشد .
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-center spa_container_frm">
            <ul class="nav nav-tabs">
                <li class="nav-tab active"><a data-toggle="tab" href="#login_tab"><?php _e('Login' , 'radshid_lan'); ?></a></li>
                <li class="nav-tab"><a data-toggle="tab" href="#register_tab"><?php _e('Register' , 'radshid_lan'); ?> </a></li>
            </ul>
            <div class="tab-content container-fluid">
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

<!--                        <div class="form-check">-->
<!--                            <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                            <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                        </div>-->
                        <button type="button" class="btn btn-success btn-block" id="login_frm_submit_btn">
					        <?php _e('Login' , 'radshid_lan'); ?>
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
                                <input type="text" class="form-control " id="register_mobile_input" name="txtMobile" maxlength="11"
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
                                <input type="text" class="form-control " id="register_admin_phone_input" name="txtAdminPhone" maxlength="11"
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
                            <div class="col-12 mb-3 required">
                                <label for="register_sim_phone_input"><?php _e('Sim Phone' , 'radshid_lan'); ?></label>
                                <input type="text" class="form-control" id="register_sim_phone_input" name="txtSimPhone" maxlength="11"
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
                    <input type="hidden" value="<?php _e('Please correct Inputs parameters' , 'radshid_lan'); ?>" id="register_frm_inputs_err_notify">
                    <input type="hidden" value="<?php _e('You Have Registered Before' , 'radshid_lan'); ?>" id="register_frm_already_registered">
                    <input type="hidden" value="<?php _e('Registered Has Done Successfully' , 'radshid_lan'); ?>" id="register_frm_success">
                    <input type="hidden" value="<?php _e('You LoggedIn Successfully' , 'radshid_lan'); ?>" id="login_frm_success">
                    <input type="hidden" value="<?php _e('Username Or Password Are Incorrect' , 'radshid_lan'); ?>" id="login_frm_error">
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Nav tabs -->






