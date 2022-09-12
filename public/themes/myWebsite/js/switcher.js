// Swicher
var theme_asset=document.getElementById('theme_asset').content;
var SiteRoot=document.getElementById('SiteRoot').content;
var csrf_token=document.getElementById('csrf-token').content;
function toggleSwitcher() {
    var i = document.getElementById('style-switcher');
    if (i.style.left === "-189px") {
        i.style.left = "0px";
    } else {
        i.style.left = "-189px";
	}
}

function setColor(theme) {
    document.getElementById('color-opt').href = theme_asset+'/css/colors/' + theme + '.css';
    toggleSwitcher(false);
    setCookieColor(theme)
}

function setTheme(theme) {
    document.getElementById('theme-opt').href = theme_asset+'/css/' + theme + '.min.css';
    toggleSwitcher(false);
    setCookieTheme(theme)
}

function setCookieColor(theme) {
    var CSRF_TOKEN = csrf_token;
    var url = SiteRoot+'front/setCookieColor';
    var data = {_token: CSRF_TOKEN, theme: theme};
    $.post(url, data, function (msg) {

    });
}

function setCookieTheme(theme) {
    var CSRF_TOKEN = csrf_token;
    var url = SiteRoot+'front/setCookieTheme';
    var data = {_token: CSRF_TOKEN, theme: theme};
    $.post(url, data, function (msg) {
        $('#topnav .logo img').attr('src',msg.logo)
    });
}