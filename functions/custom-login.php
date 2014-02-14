<?php


function customLogin() {
echo '<style type="text/css">

html, body{
    width:100%
    height:100%;
    margin:0;
    padding:0;
    overflow:hidden;
}

.login, body.login {
    background: url('.get_bloginfo('stylesheet_directory') . '/images/login-bg.jpg) no-repeat center center fixed #222 !important;
    -webkit-background-size: cover !important;
    -moz-background-size: cover !important;
    -o-background-size: cover !important;
    background-size: cover !important;
}

#login {
    width: 700px;
}

#lostpasswordform{
    height:60px;
}

#loginform{
    height:60px
}

#loginform,#lostpasswordform,#registerform {
    /*background: #f4f4f4;*/
    background: rgba(255, 255, 255, 0.6);
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #333;
    -webkit-box-shadow: 0px 2px 1px 0px #000;
    box-shadow: 2px 2px 22px 0px #000;
}

.login label{
    color:#555;
}

#login form p.forgetmenot{
    position:absolute;
    margin-top:70px
}

#login form p{
    float:left;
    margin-right:20px;
    width:200px
}


#login form p.submit {
    margin-top: 19px;
    float:left;
    width:180px;
}

.login form .input {
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background: #e4e4e4;
    border: 1px solid #fff;
    -webkit-box-shadow: inset 0px 1px 1px 0px #999999;
    box-shadow: inset 0px 1px 1px 0px #999999;
        
}

.login .button-primary {
    float: none;
    width: 180px;
    padding: 10px 0;
    border: 1px solid #298cba;
    background: #0688c0;
    background: -webkit-gradient(linear, left top, left bottom, from(#1daae6), to(#0688c0));
    background: -webkit-linear-gradient(top, #1daae6, #0688c0);
    background: -moz-linear-gradient(top, #1daae6, #0688c0);
    background: -ms-linear-gradient(top, #1daae6, #0688c0);
    background: -o-linear-gradient(top, #1daae6, #0688c0);
    background-image: -ms-linear-gradient(top, #1daae6 0%, #0688c0 100%);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    color: #ffffff;
	text-transform:uppercase;
    margin-right:0
}

.login .message {
    border: 1px solid #003309;
    background: #309903;
    background: -webkit-gradient(linear, left top, left bottom, from(#27c703), to(#309903));
    background: -webkit-linear-gradient(top, #27c703, #309903);
    background: -moz-linear-gradient(top, #27c703, #309903);
    background: -ms-linear-gradient(top, #27c703, #309903);
    background: -o-linear-gradient(top, #27c703, #309903);
    background-image: -ms-linear-gradient(top, #27c703 0%, #309903 100%);
    padding: 10.5px 21px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
    -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    text-shadow: #1C6B00 0 1px 0;
    color: #ffffff;
    font-size: 14px;
    border: 1px solid #666;
}

#login_error {
    border: 1px solid #600302 !important;
    background: #d80906;
    background: -webkit-gradient(linear, left top, left bottom, from(#f32a26), to(#d80906));
    background: -webkit-linear-gradient(top, #f32a26, #d80906);
    background: -moz-linear-gradient(top, #f32a26, #d80906);
    background: -ms-linear-gradient(top, #f32a26, #d80906);
    background: -o-linear-gradient(top, #f32a26, #d80906);
    background-image: -ms-linear-gradient(top, #f32a26 0%, #d80906 100%);
    padding: 10.5px 21px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
    -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
    color: #ffffff;
    font-size: 14px;
}

#login_error a {
    color: #fcff04;
}

.login h1 a {
    background-image: url('.get_bloginfo('stylesheet_directory') . '/images/login-logo.png) !important;
	width:700px
}

.login #nav {
	font-size:14px;
	text-transform:uppercase;
	font-weight:bold;
	text-align:center;

}

.login #backtoblog{
	text-align:center;
	
}

.login #nav a, .login #backtoblog a {
    color: #ffffff !important;
}

.login #nav a:hover, .login #backtoblog a:hover {
    color: #ffffff !important;
}

.login #nav, .login #backtoblog {
    text-shadow: 0 1px 0 #666666 !important;
}



</style>
';
}

add_action( 'login_head', 'customLogin' );

?>