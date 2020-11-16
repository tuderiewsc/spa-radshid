jQuery(document).ready(function($){

    // inits
    new WOW().init();
    $('a[href="#login_tab"]').click();

    // Constants
    const login_frm_submit_btn_txt = $('#login_frm_submit_btn_txt').val();



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

        if (username === ''){
            login_frm.find('input#login_username_input').siblings('.invalid-feedback').css('display', 'block');
        } else {
            login_frm.find('input#login_username_input').siblings('.invalid-feedback').css('display', 'none');
        }
        if (password === ''){
            login_frm.find('input#login_pass_input').siblings('.invalid-feedback').css('display', 'block');
        } else {
            login_frm.find('input#login_pass_input').siblings('.invalid-feedback').css('display', 'none');
        }


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

    })
});


//const login_frm_submit_btn_txt = document.getElementById("login_frm_submit_btn_txt").value;
