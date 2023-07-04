function checkUsernamelogin() {
    const usernameLoginInput = document.getElementById('login-TK');
    const usernameLoginError = document.getElementById('usernameError-login');
    if (usernameLoginInput.value === '') {
        usernameLoginError.innerText = 'Tên đăng nhập không được để trống.';
    } else {
        usernameLoginError.innerText = '';
    }
}

function checkPasswordlogin() {
    const passwordInput = document.getElementById('login-MK');
    const passwordError = document.getElementById('passwordError-login');
    if (passwordInput.value === '') {
        passwordError.innerText = 'Mật khẩu không được để trống.';
    } else {
        passwordError.innerText = '';
    }
}

function checkUsernamesignup() {
    const usernameSignupInput = document.getElementById('signup-TK');
    const usernameSignupError = document.getElementById('usernameError-signup');
    if (usernameSignupInput.value === '') {
        usernameSignupError.innerText = 'Tên đăng nhập không được để trống.';
    } else {
        usernameSignupError.innerText = '';
    }
}

function checkEmailsignup() {
    const emailSignupInput = document.getElementById('signup-Email');
    const emailSignupError = document.getElementById('emailError-signup');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailSignupInput.value === '') {
        emailSignupError.innerText = 'Email không được để trống.';
    } else if (!emailPattern.test(emailSignupInput.value)) {
        emailSignupError.innerText = 'Email không hợp lệ.';
    } else {
        emailSignupError.innerText = '';
    }
}

function checkPasswordsignup() {
    const passwordSignupInput = document.getElementById('signup-password');
    const passwordSignupError = document.getElementById('passwordError-signup');
    if (passwordSignupInput.value === '') {
        passwordSignupError.innerText = 'Mật khẩu không được để trống.';
    } else {
        passwordSignupError.innerText = '';
    }
}

function checkPasswordretypesignup() {
    const passwordRetypeSignupInput = document.getElementById('signup-passwordretype');
    const passwordRetypeSignupError = document.getElementById('passwordretypeError-signup');
    if (passwordRetypeSignupInput.value === '') {
        passwordRetypeSignupError.innerText = 'Mật khẩu không được để trống.';
    } else {
        passwordRetypeSignupError.innerText = '';
    }
}




