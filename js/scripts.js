jQuery(document).ready(function($){

    // inits
    new WOW().init();
    $('a[href="#login_tab"]').click();

    // Constants
    const login_frm_submit_btn_txt = $('#login_frm_submit_btn_txt').val();
    const register_frm_submit_btn_txt = $('#register_frm_submit_btn_txt').val();
    const register_frm_err_notify = $('#register_frm_err_notify').val();



    /* -------------------------------------------------------------------------------------------------- */
    /* Login Form */
    let loginPassInput = $('#login_pass_input');
    $('#password_input_container').find('i').hover(function() {
        loginPassInput.attr('type' , 'text');
        $(this).removeClass('fa-eye').addClass('fa-eye-slash');
    }, function() {
        loginPassInput.attr('type' , 'password');
        $(this).removeClass('fa-eye-slash').addClass('fa-eye');
    });

    let loginSubmitBtn = $('#login_frm_submit_btn');
    loginSubmitBtn.on('click' , function (e) {
        e.preventDefault();
        let login_frm = $('#login_frm');
        let username = login_frm.find('input#login_username_input').val();
        let password = login_frm.find('input#login_pass_input').val();

        username === '' ? login_frm.find('input#login_username_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#login_username_input').siblings('.invalid-feedback').css('display', 'none');
        password === '' ? login_frm.find('input#login_pass_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#login_pass_input').siblings('.invalid-feedback').css('display', 'none');

        if (username !== '' && password !== '' ) {
            loginSubmitBtn.html('<i class="fa fa-circle-o-notch fa-spin align-middle mx-1"></i>');

            $.ajax({
                url: '/url',
                type: 'POST',
                data: { 'username':username ,'pass':password },
                dataType: 'JSON',
                success: function (data , xhr) {
                    if (xhr === 'success'){
                        //resetSignUpForm();
                    } else {
                        //
                    }
                }, error:function (err) {
                    console.log(err);
                }, complete:function () {
                    loginSubmitBtn.html(login_frm_submit_btn_txt);
                },timeout:10000
            });
        }
    });
    /* Login Form */

    /* Register Form */
    let registerSubmitBtn = $('#register_frm_submit_btn');
    registerSubmitBtn.on('click' , function (e) {
        e.preventDefault();
        let register_frm = $('#register_frm');
        let name = register_frm.find('input#register_name_input').val();
        let family = register_frm.find('input#register_family_input').val();
        let username = register_frm.find('input#register_username_input').val();
        let pass = register_frm.find('input#register_password_input').val();
        let pass_confirm = register_frm.find('input#register_password_confirm_input').val();
        let mobile = register_frm.find('input#register_mobile_input').val();
        let email = register_frm.find('input#register_email_input').val();
        let gps_serial = register_frm.find('input#register_gps_serial_input').val();
        let reg_code = register_frm.find('input#register_reg_code_input').val();
        let car_name = register_frm.find('input#register_car_name_input').val();
        let admin_phone = register_frm.find('input#register_admin_phone_input').val();
        let sim_phone = register_frm.find('input#register_sim_phone_input').val();

        // Regex validation
        let passReg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
        let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        let phoneReg = /^([+]\d{2})?\d{10}$/;
        let gpsReg = /^([+]\d{2})?\d{15}$/;
        let is_pass_valid = passReg.test( pass );
        let is_email_valid = emailReg.test( email );
        let is_mobile_valid = phoneReg.test( mobile );
        let is_gps_serial_valid = gpsReg.test( gps_serial );
        let is_admin_phone_valid = phoneReg.test( admin_phone );
        let is_sim_phone_valid = phoneReg.test( sim_phone );


        // Show invalid feedback
        InputValidation(name , register_frm , 'register_name_input' , 'empty');
        InputValidation(family , register_frm , 'register_family_input', 'empty');
        InputValidation(username , register_frm , 'register_username_input', 'empty');
        InputValidation(is_pass_valid , register_frm , 'register_password_input', 'valid');

        // if (!is_pass_valid){
        //     register_frm.find('input#register_password_input').siblings('.invalid-feedback').css('display', 'block');
        //     register_frm.find('input#register_password_input').css('borderColor', 'orangered');
        // } else {
        //     register_frm.find('input#register_password_input').siblings('.invalid-feedback').css('display', 'none');
        //     register_frm.find('input#register_password_input').css('borderColor', '#e1e1e1');
        // }
        if (pass !== pass_confirm){
            register_frm.find('#match_pass').css('display', 'block');
            register_frm.find('input#register_password_confirm_input').css('borderColor', 'orangered');
        } else {
            register_frm.find('#match_pass').css('display', 'none');
            register_frm.find('input#register_password_confirm_input').css('borderColor', '#e1e1e1');
        }
        if (!is_mobile_valid){
            register_frm.find('input#register_mobile_input').siblings('.invalid-feedback').css('display', 'block');
            register_frm.find('input#register_mobile_input').css('borderColor', 'orangered');
        } else {
            register_frm.find('input#register_mobile_input').siblings('.invalid-feedback').css('display', 'none');
            register_frm.find('input#register_mobile_input').css('borderColor', '#e1e1e1');
        }
        if (!is_mobile_valid){
            register_frm.find('input#register_mobile_input').siblings('.invalid-feedback').css('display', 'block');
            register_frm.find('input#register_mobile_input').css('borderColor', 'orangered');
        } else {
            register_frm.find('input#register_mobile_input').siblings('.invalid-feedback').css('display', 'none');
            register_frm.find('input#register_mobile_input').css('borderColor', '#e1e1e1');
        }

        // name === '' ? register_frm.find('input#register_name_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_name_input').siblings('.invalid-feedback').css('display', 'none');
        //family === '' ? register_frm.find('input#register_family_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_family_input').siblings('.invalid-feedback').css('display', 'none');
        //username === '' ? register_frm.find('input#register_username_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_username_input').siblings('.invalid-feedback').css('display', 'none');
        //!is_pass_valid ? register_frm.find('input#register_password_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_password_input').siblings('.invalid-feedback').css('display', 'none');
        //pass !== pass_confirm ? register_frm.find('#match_pass').css('display', 'block') : register_frm.find('#match_pass').css('display', 'none');
        //!is_mobile_valid ? register_frm.find('input#register_mobile_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_mobile_input').siblings('.invalid-feedback').css('display', 'none');
        !is_email_valid ? register_frm.find('input#register_email_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_email_input').siblings('.invalid-feedback').css('display', 'none');
        !is_gps_serial_valid ? register_frm.find('input#register_gps_serial_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_gps_serial_input').siblings('.invalid-feedback').css('display', 'none');
        reg_code === '' ? register_frm.find('input#register_reg_code_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_reg_code_input').siblings('.invalid-feedback').css('display', 'none');
        car_name === '' ? register_frm.find('input#register_car_name_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_car_name_input').siblings('.invalid-feedback').css('display', 'none');
        !is_admin_phone_valid ? register_frm.find('input#register_admin_phone_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_admin_phone_input').siblings('.invalid-feedback').css('display', 'none');
        !is_sim_phone_valid ? register_frm.find('input#register_sim_phone_input').siblings('.invalid-feedback').css('display', 'block') : register_frm.find('input#register_sim_phone_input').siblings('.invalid-feedback').css('display', 'none');

        //return;

        if (name !=='' && family !=='' && username !=='' && is_pass_valid && pass===pass_confirm && is_mobile_valid && is_email_valid && is_gps_serial_valid
        && reg_code !=='' && car_name !=='' && is_admin_phone_valid && is_sim_phone_valid) {
            registerSubmitBtn.html('<i class="fa fa-circle-o-notch fa-spin align-middle mx-1"></i>');

            $.ajax({
                url: '/url',
                type: 'POST',
                data: { 'name':name ,'family':family },
                dataType: 'JSON',
                success: function (data , xhr) {
                    if (xhr === 'success'){
                        //resetSignUpForm();
                    } else {
                        //
                    }
                }, error:function (err) {
                    console.log(err);
                }, complete:function () {
                    registerSubmitBtn.html(register_frm_submit_btn_txt);
                },timeout:10000
            });
        }else {
            alert(register_frm_err_notify);
        }
    });
    /* Register Form */





    /* Owl Carousel */
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        rtl: true,
        margin: 80,
        loop: true,
        nav: true,
        //navText: ['بعدی', 'قبلی'],
        navElement: 'div',
        items: 6,
        slideBy: 'page',
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        center: true,
        mouseDrag: true,
        touchDrag: true,
        autoWidth: true,
        startPosition: 1,
        lazyLoad: true,
        responsive: {
            300: {
                items: 1,
                margin: 100
            },
            400: {
                items: 2,
                margin: 75
            },
            500: {
                items: 4,
                margin: 50
            },
            800: {
                items: 6
            },
            1200: {
                items: 6
            }

        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY<0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
    /* Owl Carousel */

});

function InputValidation(value , form , input_id , type='empty'){
    if (type === 'empty'){
        if (value === ''){
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'block');
            form.find('input#' + input_id).css('borderColor', 'orangered');
        } else {
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'none');
            form.find('input#' + input_id).css('borderColor', '#e1e1e1');
        }
    } else {
        if (!value){
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'block');
            form.find('input#' + input_id).css('borderColor', 'orangered');
        } else {
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'none');
            form.find('input#' + input_id).css('borderColor', '#e1e1e1');
        }
    }

}



