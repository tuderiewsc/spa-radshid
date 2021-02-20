/* Version 1.20 */
jQuery(document).ready(function($){

    // inits
    $('a[href="#login_tab"]').click();


    // const handler = (event) => {
    //     event.preventDefault();
    //     console.log(event);
    // };
    // let onTouchStart={handler};
    // document.addEventListener('touchstart', onTouchStart, {passive: true});



    // Constants
    const login_frm_submit_btn_txt = $('#login_frm_submit_btn_txt').val();
    const register_frm_submit_btn_txt = $('#register_frm_submit_btn_txt').val();
    const register_frm_inputs_err_notify = $('#register_frm_inputs_err_notify').val();
    const register_frm_already_registered = $('#register_frm_already_registered').val();
    const register_frm_success = $('#register_frm_success').val();
    const login_frm_error = $('#login_frm_error').val();
    const frm_error_authentication = $('#frm_error_authentication').val();
    /* -------------------------------------------------------------------------------------------------- */


    $('.icon_links').css('visibility' , 'visible');
    $('.linkItemTitle').css('visibility' , 'visible').addClass('animate__animated');
    $('.loader-container').css('display' , 'none').remove();


    /* Top Banner */
    setTimeout(function () {
        $('.top_banner_Title').fadeIn();
    }, 1000);
    setTimeout(function () {
        $('.top_banner_Slogan').addClass('typeWritter').css('color' , '#eee');
    }, 2000);
    /* Top Banner */


    /* Toasts */
    const BottomToast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });
    /* Toasts */


    /* Login Form */
    let loginPassInput = $('#login_pass_input');
    $('#password_input_container').find('i').hover(function() {
        loginPassInput.attr('type' , 'text');
        $(this).removeClass('fa-eye').addClass('fa-eye-slash');
    }, function() {
        loginPassInput.attr('type' , 'password');
        $(this).removeClass('fa-eye-slash').addClass('fa-eye');
    });

    const loginSubmitBtn = $('#login_frm_submit_btn');
    loginSubmitBtn.on('click' , function (e) {
        e.preventDefault();
        let login_frm = $('#login_frm');
        let username = login_frm.find('input#login_username_input').val();
        let password = login_frm.find('input#login_pass_input').val();

        username === '' ? login_frm.find('input#login_username_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#login_username_input').siblings('.invalid-feedback').css('display', 'none');
        password === '' ? login_frm.find('input#login_pass_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#login_pass_input').siblings('.invalid-feedback').css('display', 'none');

        if (username !== '' && password !== '' ) {

            let nonce = $('#rad_login_nonce').val();
            let data = {
                action: 'spaLogin',
                security : RadAjax.security,
                nonce: nonce,
                "username": username,
                "password": password,
                "act": 'login'
            };
            $.ajax({
                url: RadAjax.ajaxurl,
                type: 'POST',
                data: data,
                beforeSend: function () {
                    loginSubmitBtn.html('<i class="fa fa-circle-o-notch fa-spin align-middle mx-1"></i>').attr('disabled', true);
                },
                success: function (res) {
                    if (res.res === 'Authenticate Error') {
                        BottomToast.fire({
                            icon: 'error',
                            title: frm_error_authentication
                        });
                        return;
                    }
                    let resObj = JSON.parse(res.slice(0 , -1));
                    let token = JSON.parse(resObj).token;
                    if (token !== undefined){
                        swalWithBootstrapButtons.fire({
                            position: 'center',
                            icon: 'success',
                            title: '',
                            text: 'خوش آمدید ' + username + ' عزیز',
                            showConfirmButton: true,
                            confirmButtonText: 'ورود به سامانه',
                            showCloseButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById("login_frm").reset();
                                //window.open('http://spa.radshid.com/index.aspx?act=' + data.act + '&username='+username+'&pass='+password+'&rememberMe='+false, '_blank');
                                window.location.replace('http://spa.radshid.com/index.aspx?act=' + data.act + '&username='+username+'&pass='+password+'&rememberMe='+false);
                                return false;
                            } else {
                                swalWithBootstrapButtons.fire('ورود لغو شد!', '', 'info')
                            }
                        });
                    } else {
                        BottomToast.fire({
                            icon: 'error',
                            title: login_frm_error
                        });
                    }
                },
                error:function (jqXHR, textStatus, errorThrown) {
                    if(textStatus==="timeout") {
                        BottomToast.fire({
                            icon: 'error',
                            title: 'خطا در اتصال به سرور!'
                        });
                    }
                },complete:function () {
                    loginSubmitBtn.html(login_frm_submit_btn_txt).attr('disabled', false);
                },
                timeout:10000
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
        let imei = register_frm.find('input#register_gps_serial_input').val();
        let reg_code = register_frm.find('input#register_reg_code_input').val();
        let car_name = register_frm.find('input#register_car_name_input').val();
        let driver_name = register_frm.find('input#register_driver_name_input').val();
        let admin_phone = register_frm.find('input#register_admin_phone_input').val();
        let sim_phone = register_frm.find('input#register_sim_phone_input').val();

        // Regex validation
        let passReg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
        let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        let phoneReg = /^([+]\d{2})?\d{11}$/;
        let gpsReg = /^([+]\d{2})?\d{15}$/;
        let is_pass_valid = passReg.test( pass );
        let is_mobile_valid = phoneReg.test( mobile );
        let is_imei_valid = gpsReg.test( imei );
        let is_admin_phone_valid = phoneReg.test( admin_phone );
        let is_sim_phone_valid = phoneReg.test( sim_phone );

        let is_email_valid =false;
        email !== '' ? is_email_valid = emailReg.test( email ) : is_email_valid = true;

        // Show invalid feedback
        InputValidation(name , register_frm , 'register_name_input' , 'empty');
        InputValidation(family , register_frm , 'register_family_input', 'empty');
        InputValidation(username , register_frm , 'register_username_input', 'empty');
        InputValidation(is_pass_valid , register_frm , 'register_password_input', 'valid');
        InputValidation(is_mobile_valid , register_frm , 'register_mobile_input', 'valid');
        InputValidation(is_email_valid , register_frm , 'register_email_input', 'valid');
        InputValidation(is_imei_valid , register_frm , 'register_gps_serial_input', 'valid');
        InputValidation(reg_code , register_frm , 'register_reg_code_input', 'empty');
        InputValidation(car_name , register_frm , 'register_car_name_input', 'empty');
        InputValidation(is_admin_phone_valid , register_frm , 'register_admin_phone_input', 'valid');
        InputValidation(is_sim_phone_valid , register_frm , 'register_sim_phone_input', 'valid');

        register_frm.find('input#register_driver_name_input').siblings('.valid_input').css('display', 'block').siblings('.invalid_input').css('display', 'none');


        if (pass !== pass_confirm){
            register_frm.find('#match_pass').css('display', 'block');
            register_frm.find('input#register_password_confirm_input').siblings('.valid_input').css('display', 'none').siblings('.invalid_input').css('display', 'block');
        } else {
            register_frm.find('#match_pass').css('display', 'none');
            register_frm.find('input#register_password_confirm_input').siblings('.valid_input').css('display', 'block').siblings('.invalid_input').css('display', 'none');
        }

        if (name !=='' && family !=='' && username !=='' && is_pass_valid && pass===pass_confirm && is_mobile_valid && is_email_valid && is_imei_valid
            && reg_code !=='' && car_name !=='' && is_admin_phone_valid && is_sim_phone_valid) {


            let nonce = $('#rad_register_nonce').val();
            let data = {
                action: 'spaRegister',
                security : RadAjax.security,
                nonce: nonce,
                "Imei": imei,
                "RegisterCode": reg_code,
                "Title": car_name,
                "SimPhone": sim_phone,
                "DriverName": driver_name,
                "Mobile": mobile,
                "FirstName": name,
                "LastName": family,
                "Username": username,
                "Password": pass,
                "Email": email,
                "Domain": "radshid.com",
                "AdminPhone": admin_phone
            };
            $.ajax({
                url: RadAjax.ajaxurl,
                type: 'POST',
                data: data,
                beforeSend: function () {
                    registerSubmitBtn.html('<i class="fa fa-circle-o-notch fa-spin align-middle mx-1"></i>').attr('disabled', true);
                    $('#regAlert').fadeOut(500);
                },
                success: function (res , xhr) {
                    if (res.res === 'Authenticate Error') {
                        BottomToast.fire({
                            icon: 'error',
                            title: frm_error_authentication
                        });
                        return;
                    }
                    let resObj = JSON.parse(res.slice(0 , -1));
                    let status = JSON.parse(resObj).status;
                    let title = JSON.parse(resObj).title;
                    if (status !== 400 && title === 'DeviceIsInUse.'){
                        BottomToast.fire({
                            icon: 'info',
                            title: register_frm_already_registered
                        });
                    } else if(status === 400 && title === 'Bad Request'){
                        BottomToast.fire({
                            icon: 'error',
                            title: register_frm_inputs_err_notify
                        });
                        register_frm.find('input#register_gps_serial_input').siblings('.valid_input').css('display', 'none').siblings('.invalid-feedback').css('display', 'block').siblings('.invalid_input').css('display', 'block');
                        register_frm.find('input#register_reg_code_input').siblings('.valid_input').css('display', 'none').siblings('.invalid-feedback').css('display', 'block').siblings('.invalid_input').css('display', 'block');
                    } else if (status === 201 && title !== 'One or more validation errors occurred') {
                        swalWithBootstrapButtons.fire({
                            position: 'center',
                            icon: 'success',
                            title: '',
                            text: register_frm_success,
                            showCloseButton: true,
                            showConfirmButton: true,
                            confirmButtonText: 'بسیار خُب'
                        });
                        document.getElementById("register_frm").reset();
                    }else {
                        BottomToast.fire({
                            icon: 'error',
                            title: register_frm_inputs_err_notify
                        });
                    }
                },error:function (jqXHR, textStatus, errorThrown) {
                    if(textStatus==="timeout") {
                        BottomToast.fire({
                            icon: 'error',
                            title: 'خطا در اتصال به سرور!'
                        });
                    }
                }
                ,complete:function () {
                    registerSubmitBtn.html(register_frm_submit_btn_txt).attr('disabled', false);
                },
                timeout:10000
            });
        } else {
            setTimeout(function () {
                $('#regAlert').css('visibility','visible');
            },500)
        }
    });
    /* Register Form */


    /* Password Recovery Form */
    // $('select#password_recovery_method').on('change' , function () {
    //     let selected_val = $(this).val();
    //     if (selected_val === '2'){
    //         $('#password_recovery_sms_method').css('display' , 'block');
    //         $('#password_recovery_email_method').css('display' , 'none');
    //     } else {
    //         $('#password_recovery_sms_method').css('display' , 'none');
    //         $('#password_recovery_email_method').css('display' , 'block');
    //     }
    // });
    //
    // let password_recovery_frm_submit_btn = $('#password_recovery_frm_submit_btn');
    // password_recovery_frm_submit_btn.on('click' , function (e) {
    //     e.preventDefault();
    //     let password_recovery_frm = $('#password_recovery_frm');
    //     let username = password_recovery_frm.find('input#password_recovery_username_input').val();
    //     let email = password_recovery_frm.find('input#password_recovery_email_input').val();
    //     let phone = password_recovery_frm.find('input#password_recovery_phone_input').val();
    //
    //     let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    //     let phoneReg = /^([+]\d{2})?\d{10}$/;
    //     let is_email_valid = emailReg.test( email );
    //     let is_phone_valid = phoneReg.test( phone );
    //
    //     // Show invalid feedback
    //     InputValidation(username , password_recovery_frm , 'password_recovery_username_input' , 'empty');
    //     InputValidation(is_email_valid , password_recovery_frm , 'password_recovery_email_input' , 'valid');
    //     InputValidation(is_phone_valid , password_recovery_frm , 'password_recovery_phone_input' , 'valid');
    //
    //     username === '' ? password_recovery_frm.find('input#password_recovery_username_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#password_recovery_username_input').siblings('.invalid-feedback').css('display', 'none');
    //     !is_email_valid ? password_recovery_frm.find('input#password_recovery_email_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#password_recovery_email_input').siblings('.invalid-feedback').css('display', 'none');
    //     !is_phone_valid ? password_recovery_frm.find('input#password_recovery_phone_input').siblings('.invalid-feedback').css('display', 'block') : login_frm.find('input#password_recovery_phone_input').siblings('.invalid-feedback').css('display', 'none');
    //
    //
    //     let selected_method = $('select#password_recovery_method').val();
    //
    //     return;
    //
    //     if (selected_method === '1'){
    //         if (username !== '' && password !== '' ) {
    //             loginSubmitBtn.html('<i class="fa fa-circle-o-notch fa-spin align-middle mx-1"></i>');
    //
    //             $.ajax({
    //                 url: '/url',
    //                 type: 'POST',
    //                 data: { 'username':username ,'pass':password },
    //                 dataType: 'JSON',
    //                 success: function (data , xhr) {
    //                     if (xhr === 'success'){
    //                         //resetSignUpForm();
    //                     } else {
    //                         //
    //                     }
    //                 }, error:function (err) {
    //                     console.log(err);
    //                 }, complete:function () {
    //                     loginSubmitBtn.html(login_frm_submit_btn_txt);
    //                 },timeout:10000
    //             });
    //         }
    //     } else {
    //         if (username !== '' && password !== '' ) {
    //             loginSubmitBtn.html('<i class="fa fa-circle-o-notch fa-spin align-middle mx-1"></i>');
    //
    //             $.ajax({
    //                 url: '/url',
    //                 type: 'POST',
    //                 data: { 'username':username ,'pass':password },
    //                 dataType: 'JSON',
    //                 success: function (data , xhr) {
    //                     if (xhr === 'success'){
    //                         //resetSignUpForm();
    //                     } else {
    //                         //
    //                     }
    //                 }, error:function (err) {
    //                     console.log(err);
    //                 }, complete:function () {
    //                     loginSubmitBtn.html(login_frm_submit_btn_txt);
    //                 },timeout:10000
    //             });
    //         }
    //     }
    // });
    /* Password Recovery Form */


    /* Spa Form */
    const navTab = $('.nav-tab');
    navTab.click(function () {
        navTab.removeClass('active');
        $(this).addClass('active');
        $('html,body').animate({
            scrollTop: ($(".spa_container_frm").offset().top) - 150
        }, 100);
    });
    navTab.find('a').click(function (e) {
        e.preventDefault();
    });
    /* Spa Form */



    /* Owl Carousel */
    let agency_carousel = $('.agency_carousel');
    agency_carousel.owlCarousel({
        rtl: true,
        margin: 80,
        loop: true,
        nav: false,
        // navText: ['بعدی', 'قبلی'],
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


    /* Strip Length */
    const card_deck =  $('.card-deck');
    let elm1 = card_deck.find('.card-deck-title#products');
    let elm2 = card_deck.find('.card-deck-title#customers');
    let elm3 = card_deck.find('.card-deck-title#articles');
    let elm4 = card_deck.find('.card-deck-title#spa');
    stripLength(elm1);
    stripLength(elm2);
    stripLength(elm3);
    stripLength(elm4);
    /* Strip Length */

});


function stripLength(elm) {
    let len = elm.data('hover');
    switch(len) {
        case 275:
            elm.addClass('xlarge');
            break;
        case 110:
            elm.addClass('large');
            break;
        case 95:
            elm.addClass('middle');
            break;
        case 65:
            elm.addClass('small');
            break;
        default:
            elm.addClass('middle');
    }
}

function InputValidation(value , form , input_id , type='empty'){
    if (type === 'empty'){
        if (value === ''){
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'block');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'none').siblings('.invalid_input').css('display', 'block');
            form.find('input#' + input_id).css('borderColor', '#D50000');
        } else {
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'none');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'block').siblings('.invalid_input').css('display', 'none');
            form.find('input#' + input_id).css('borderColor', '#e1e1e1');
        }
    } else {
        if (!value){
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'block');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'none').siblings('.invalid_input').css('display', 'block');
            form.find('input#' + input_id).css('borderColor', '#D50000');
        } else {
            form.find('input#' + input_id).siblings('.invalid-feedback').css('display', 'none');
            form.find('input#' + input_id).siblings('.valid_input').css('display', 'block').siblings('.invalid_input').css('display', 'none');
            form.find('input#' + input_id).css('borderColor', '#e1e1e1');
        }
    }

}



