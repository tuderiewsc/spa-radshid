jQuery(document).ready(function($){

    // inits
    $('a[href="#login_tab"]').click();
    new WOW().init();

    // Constants
    const login_frm_submit_btn_txt = $('#login_frm_submit_btn_txt').val();
    const register_frm_submit_btn_txt = $('#register_frm_submit_btn_txt').val();
    const register_frm_err_notify = $('#register_frm_err_notify').val();



    /* -------------------------------------------------------------------------------------------------- */

    //$('#topBannerLoading').css('display' , 'none').find('i').removeClass('fa-spin');
    $('.loader').css('display' , 'none').remove();

    /* Top Banner */
    // let wh = window.screen.height;
    // let banner_height = 100% - 88;
    // $('.top_banner').css('height' , banner_height + 'px');

    setTimeout(function () {
        $('.top_banner_Title').css('visibility' , 'visibile').addClass('wow');
        $('.top_banner_Slogan').css('visibility' , 'visibile').addClass('wow');
    }, 1000);
    /* Top Banner */


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

    // $('#spa_login_btn').click(function () {
    //     event.preventDefault();
    //     var user_name = $('#exampleInputEmail1').val();
    //     var pass = $('#exampleInputPassword1').val();
    //     //var nonce = $('#planet_nonce').val();
    //     var data = {
    //         action: '/spa.radshid.com',
    //         security: SpaAjax.security,
    //         //act: 'login',
    //         username: 'demo',
    //         pass: '11112'
    //     };
    //     //window.location.href= 'http://spa.radshid.com/?act=' + data.act + '&username=demo&pass=111132';
    //     $.ajax({
    //         url: SpaAjax.ajaxurl,
    //         //url: '/spa.radshid.ir',
    //         type: 'GET',
    //         xhrFields: {
    //             withCredentials: true
    //         },
    //         async: true,
    //         crossDomain: true,
    //         data: data,
    //         dataType: 'JSON',
    //         success: function (res , textStatus , xhr) {
    //             //var res= $.parseJSON( res );
    //             console.log('res ' + res);
    //             console.log('textStatus: ' + textStatus);
    //             console.log('xhr: ' + xhr);
    //         }
    //         , error: function (err) {
    //             console.log(err);
    //         }
    //         , complete: function () {
    //         }
    //     })
    // })
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
        let driver_name = register_frm.find('input#register_driver_name_input').val();
        let admin_phone = register_frm.find('input#register_admin_phone_input').val();
        let sim_phone = register_frm.find('input#register_sim_phone_input').val();

        // Regex validation
        let passReg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
        let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        let phoneReg = /^([+]\d{2})?\d{10}$/;
        let gpsReg = /^([+]\d{2})?\d{15}$/;
        let is_pass_valid = passReg.test( pass );
        let is_mobile_valid = phoneReg.test( mobile );
        let is_gps_serial_valid = gpsReg.test( gps_serial );
        let is_admin_phone_valid = phoneReg.test( admin_phone );

        let is_sim_phone_valid =false;
        let is_email_valid =false;
        sim_phone !== '' ? is_sim_phone_valid = phoneReg.test( sim_phone ) : is_sim_phone_valid = true;
        email !== '' ? is_email_valid = emailReg.test( email ) : is_email_valid = true;

        // Show invalid feedback
        InputValidation(name , register_frm , 'register_name_input' , 'empty');
        InputValidation(family , register_frm , 'register_family_input', 'empty');
        InputValidation(username , register_frm , 'register_username_input', 'empty');
        InputValidation(is_pass_valid , register_frm , 'register_password_input', 'valid');
        InputValidation(is_mobile_valid , register_frm , 'register_mobile_input', 'valid');
        InputValidation(is_email_valid , register_frm , 'register_email_input', 'valid');
        InputValidation(is_gps_serial_valid , register_frm , 'register_gps_serial_input', 'valid');
        InputValidation(reg_code , register_frm , 'register_reg_code_input', 'empty');
        InputValidation(car_name , register_frm , 'register_car_name_input', 'empty');
        InputValidation(driver_name , register_frm , 'register_driver_name_input', 'empty');
        InputValidation(is_admin_phone_valid , register_frm , 'register_admin_phone_input', 'valid');
        InputValidation(is_sim_phone_valid , register_frm , 'register_sim_phone_input', 'valid');

        if (pass !== pass_confirm){
            register_frm.find('#match_pass').css('display', 'block');
            register_frm.find('input#register_password_confirm_input').siblings('.valid_input').css('display', 'none');
            register_frm.find('input#register_password_confirm_input').css('borderColor', 'orangered');
        } else {
            register_frm.find('#match_pass').css('display', 'none');
            register_frm.find('input#register_password_confirm_input').siblings('.valid_input').css('display', 'block');
            register_frm.find('input#register_password_confirm_input').css('borderColor', '#e1e1e1');
        }

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



/* Password Recovery Form */
$('select#password_recovery_method').on('change' , function () {
    let selected_val = $(this).val();
    if (selected_val === '2'){
        $('#password_recovery_sms_method').css('display' , 'block');
        $('#password_recovery_email_method').css('display' , 'none');
    } else {
        $('#password_recovery_sms_method').css('display' , 'none');
        $('#password_recovery_email_method').css('display' , 'block');
    }
});

let password_recovery_frm_submit_btn = $('#password_recovery_frm_submit_btn');
password_recovery_frm_submit_btn.on('click' , function (e) {
    e.preventDefault();
    let password_recovery_frm = $('#password_recovery_frm');
    let username = password_recovery_frm.find('input#password_recovery_username_input').val();
    let email = password_recovery_frm.find('input#password_recovery_email_input').val();
    let phone = password_recovery_frm.find('input#password_recovery_phone_input').val();

    let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    let phoneReg = /^([+]\d{2})?\d{10}$/;
    let is_email_valid = emailReg.test( email );
    let is_phone_valid = phoneReg.test( phone );

        // Show invalid feedback
        InputValidation(username , password_recovery_frm , 'password_recovery_username_input' , 'empty');
        InputValidation(is_email_valid , password_recovery_frm , 'password_recovery_email_input' , 'valid');
        InputValidation(is_phone_valid , password_recovery_frm , 'password_recovery_phone_input' , 'valid');

        username === '' ? password_recovery_frm.find('input#password_recovery_username_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#password_recovery_username_input').siblings('.invalid-feedback').css('display', 'none');
        !is_email_valid ? password_recovery_frm.find('input#password_recovery_email_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#password_recovery_email_input').siblings('.invalid-feedback').css('display', 'none');
        !is_phone_valid ? password_recovery_frm.find('input#password_recovery_phone_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#password_recovery_phone_input').siblings('.invalid-feedback').css('display', 'none');


        let selected_method = $('select#password_recovery_method').val();

        return;

        if (selected_method === '1'){
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
        } else {
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
        }
    });
/* Password Recovery Form */



/* Owl Carousel */
let agency_carousel = $('.agency_carousel');
agency_carousel.owlCarousel({
    rtl: true,
    margin: 80,
    loop: true,
    nav: false,
        //navText: ['بعدی', 'قبلی'],
        navElement: 'div',
        items: 1,
        slideBy: 'page',
        dots: true,
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
agency_carousel.on('mousewheel', '.owl-stage', function (e) {
    e.preventDefault();
    if (e.deltaY<0) {
        agency_carousel.trigger('next.owl');
    } else {
        agency_carousel.trigger('prev.owl');
    }
});
/* Owl Carousel */


/* Random Posts */

/* Random Posts */



    // $('.card-deck-title').hover(function() {
    //     $(this).find('#card-deck-title-text').slideLeft('fast');
    //     $(this).find('#card-deck-title-text').slideRight('fast').html('مشاهده ادامه');
    //
    //         // setTimeout(function() {
    //         //     $('.card-deck-title').find('#card-deck-title-text').slideDown('fast').html('مشاهده ادامه');
    //         // }, 1000);
    //
    // }, function() {
    //     $(this).find('#card-deck-title-text').slideUp('fast');
    //     $(this).find('#card-deck-title-text').slideDown('fast').html('مشتریان ما');
    //
    //     // $(this).find('#card-deck-title-text').slideUp('fast', function() {
    //     //     setTimeout(function() {
    //     //         $('.card-deck-title').find('#card-deck-title-text').slideDown('fast').html('مشتریان ما');
    //     //     }, 1000);
    //     // });
    // });


});


function InputValidation(value , form , input_id , type='empty'){
    if (type === 'empty'){
        if (value === ''){
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'block');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'none');
            form.find('input#' + input_id).css('borderColor', 'orangered');
        } else {
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'none');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'block');
            form.find('input#' + input_id).css('borderColor', '#e1e1e1');
        }
    } else {
        if (!value){
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'block');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'none');
            form.find('input#' + input_id).css('borderColor', 'orangered');
        } else {
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'none');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'block');
            form.find('input#' + input_id).css('borderColor', '#e1e1e1');
        }
    }

}



