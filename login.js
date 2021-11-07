
function showLogin() {
    var log = document.getElementById('loginclick');
    var sig = document.getElementById('signinclick');
    sig.className = 'signin-container';
    log.className = 'login-container-on';
}
function closeLogin() {
    var intro = document.getElementById('loginclick');
    intro.className = 'login-container';
}
function showSignin() {
    var log = document.getElementById('loginclick');
    var sig = document.getElementById('signinclick');
    log.className = 'login-container';
    sig.className = 'signin-container-on';
}
function closeSignin() {
    var sign = document.getElementById('signinclick');
    sign.className = 'signin-container';
}
