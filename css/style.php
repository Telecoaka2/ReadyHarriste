<?php
    header('content-type: text/css');
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    $lStyle = GJson::Instance()->getData("data/json/style.json");
?>
/* ============================================== */
/* Global */ 
/* ============================================== */

* {
    color: white;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*:focus { 
    border: none;
    outline: none;
}

html {
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

body {
    background-color: #051039;
    font-family: arial;
    font-size: 16px;
    text-align: center;
}

button {
    background-color: transparent;
    border: none;
    padding: 5px 10px 5px 5px;
    font-size: 16px;
    color: white;
    cursor: pointer;
}

input {
    background-color: transparent;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-size: 16px;
    color: white;
    width: 100%;
}

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus {
    -webkit-text-fill-color: white ;
    transition: background-color 5000s ease-in-out 0s;
}

select {
    background-color: transparent;
    border: none;
    font-size: 16px;
    color: white;
    cursor: pointer;
}

textarea {
    background-color: transparent;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-family: arial;
    font-size: 16px;
    color: white;
    width: 100%;
    resize: none;
}

textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
    transition: background-color 5000s ease-in-out 0s;
}

xmp {
    padding: 10px 10px 10px 50px;
	font-size: 16px;
}

a {
    text-decoration: none;
}

b {
    color: cyan;
}

hr {
    background-color: #051039; 
    border: none;
	height: 3px; 
    width: 100%; 
    margin: auto;
    margin-top: 20px;
    text-align: center;
}

hr:after {
    content: "\f164";
    font-family: FontAwesome;
	font-size: 20px;
    background-color: #051039;
    color: white; 
    display: inline-block;
    position: relative;
    top: -20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
}

span {
    word-break: break-all;
}

/* ============================================== */
/* Prettify */ 
/* ============================================== */

.linenums li {
    list-style-type: decimal;
}

/* ============================================== */
/* Animation */
/* ============================================== */

.AnimateShow {
    animation-name: AnimateShow;
    animation-duration: 0.4s
    -webkit-animation-name: AnimateShow;
    -webkit-animation-duration: 0.4s;
    -moz-animation-name: AnimateShow;
    -moz-animation-duration: 0.4s;
    -o-animation-name: AnimateShow;
    -o-animation-duration: 0.4s;
}

@keyframes AnimateShow {
    from {top:-400px; opacity:0;}
    to {top:0; opacity:1}
}

@-webkit-keyframes AnimateShow {
    from {top:-400px; opacity:0;} 
    to {top:0; opacity:1;}
}

@-moz-keyframes AnimateShow {
    from {top:-400px; opacity:0;} 
    to {top:0; opacity:1;}
}

@-o-keyframes AnimateShow {
    from {top:-400px; opacity:0;} 
    to {top:0; opacity:1;}
}

.AnimateHide {
    animation-name: AnimateHide;
    animation-duration: 0.4s
    -webkit-animation-name: AnimateHide;
    -webkit-animation-duration: 0.4s;
    -moz-animation-name: AnimateHide;
    -moz-animation-duration: 0.4s;
    -o-animation-name: AnimateHide;
    -o-animation-duration: 0.4s;
}

@keyframes AnimateHide {
    from {top:0; opacity:1}
    to {top:-400px; opacity:0}
}

@-webkit-keyframes AnimateHide {
    from {top:0; opacity:1}
    to {top:-400px; opacity:0}
}

@-moz-keyframes AnimateHide {
    from {top:0; opacity:1}
    to {top:-400px; opacity:0}
}

@-o-keyframes AnimateHide {
    from {top:0; opacity:1}
    to {top:-400px; opacity:0}
}

/* ============================================== */
/* Common */
/* ============================================== */

.Bold {
    font-weight: bold;
}

.Center {
    text-align: center;
}

.Italic {
    font-style: italic;
}

.Left {
    text-align: left;
}

.LineThrough {
	text-decoration: line-through;
}

.Right {
    text-align: right;
}

.Underline {
    text-decoration: underline;
}

/* ============================================== */
/* Custom */
/* ============================================== */

.Background {
    min-height: 300px;
    background-color: #333333;
    background-image: url("<?php echo $lStyle["background"]["top"]["img"]; ?>");
    background-position: center;
    position: absolute;
}

.Background.Top {
    background-image: url("<?php echo $lStyle["background"]["top_left"]["img"]; ?>"),
    url("<?php echo $lStyle["background"]["top_right"]["img"]; ?>"),
    url("<?php echo $lStyle["background"]["top_center"]["img"]; ?>"), 
    url("<?php echo $lStyle["background"]["top_back"]["img"]; ?>");
    background-position: top left, top right, center top, left top;
    background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;    
    background-size: auto, auto, auto 85%, 100% 100%;    
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    border: 10px solid transparent;
    border-image: url("<?php echo $lStyle["border"]["top"]["img"]; ?>") 30 round;
    -webkit-border-image: url("<?php echo $lStyle["border"]["top"]["img"]; ?>") 30 round; 
    -moz-border-image: url("<?php echo $lStyle["border"]["top"]["img"]; ?>") 30 round; 
    -o-border-image: url("<?php echo $lStyle["border"]["top"]["img"]; ?>") 30 round;
}

.Background.Middle {
    top: 300px;
    bottom: 300px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("<?php echo $lStyle["background"]["middle_back"]["img"]; ?>");
    background-position: center center;
    background-repeat: repeat;    
    background-size: auto;    
}

.Background.Bottom {
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: -1;
    background-image: url("<?php echo $lStyle["background"]["bottom_back"]["img"]; ?>");
    background-position: left top;
    background-repeat: no-repeat;    
    background-size: 100% 100%;    
    border: 10px solid transparent;
    border-image: url("<?php echo $lStyle["border"]["bottom"]["img"]; ?>") 30 round;
    -webkit-border-image: url("<?php echo $lStyle["border"]["bottom"]["img"]; ?>") 30 round; 
    -moz-border-image: url("<?php echo $lStyle["border"]["bottom"]["img"]; ?>") 30 round; 
    -o-border-image: url("<?php echo $lStyle["border"]["bottom"]["img"]; ?>") 30 round;
}

.Bars {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 25px;
    font-family: Akronim;
    color: white;
    padding: 0 10px 0 10px;
    display: none;
    vertical-align: middle;
    position: absolute;
    top: 0;
    right: 0;
    cursor: pointer;
}

.Block {
    background-color: #051039;
    display: inline-block;
    vertical-align: top;
    padding: 0 40px;
    height: 80px;
    font-size: 14px;
    border-radius: 40px;
    margin: 5px;
}

.Body {
    padding: 5px;
}

.Body2 {
    position: relative;
    min-height: 50px;
    background-color: #803300;
    font-size: 20px;
    color: white;
    padding: 10px;
    font-family: Archivo Narrow;
    text-align: left;
}

.Body2.Orange {
    background-color: #803300;
}

.Body2.Green {
    background-color: #006666;
}

.Body2.Purple {
    background-color: #2d2d86;
}

.Body2.Blue {
    background-color: #051039;
}

.Body2.Light {
    background-color: #373f60;
}

.Body2.Pdd {
    padding: 0px;
}

.Body3 {
    padding: 10px;
    text-align: left;
}

.Body4 {
    padding: 10px;
}

.Body5 {
    text-align: left;
}

.Body6 {
    padding: 10px 0px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Body7 {
    border-bottom: 5px solid #051039;
}

.Body8 {
    background-color: #051039;
    border-bottom: 5px solid #051039;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Body9 {
    border-bottom: 5px solid #051039;
    position: relative;
}

.Body10 {
    border-bottom: 5px solid #051039;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Body11 {
    min-height: 400px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
    padding: 10px 0px;
}

.Body12 {
    border: 1px solid rgba(255, 255, 255, 0.3);
    max-height: 400px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Body13 {
    font-size: 0px;
}

.Body14 {
    background-color: #051039;
    padding: 10px;
    overflow: auto;
}

.Body15 {
    background-color: #051039;
    padding: 10px;
}

.Body16 {
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.Body17 {
    max-height: 400px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Body18 {
    font-size: 0px;
    padding: 5px;
}

.Body19 {
    position: relative;
}

.Body20 {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    max-height: 400px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Body21 {
    position: relative;
    padding: 0px 0px 40px 0px;
}

.Body22 {
    position: relative;
    padding: 0px 0px 10px 0px;
}

.BodyPage {
    position: relative;
    max-width: 1000px;
    margin: auto;
    padding-top: 250px;
    padding-bottom: 250px;
}

.BoxHide {
    display: none;
}

.BoxSelect {
    position: absolute;
    background-color: #051039;
    border: 1px solid #5f6681;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 99;
    max-height: 400px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: thin;
}

.BoxSelect div {
    color: #ffffff;
    padding: 5px 5px;
    border: 1px solid transparent;
    border-color: transparent transparent rgba(255, 255, 255, 0.2); transparent;
    cursor: pointer;
}

.BoxSelect div:hover {
    background-color: rgba(255, 255, 255, 0.4);
}

.BoxSelectAs {
    background-color: rgba(255, 255, 255, 0.4);
}

.BoxView {
    background-color: #051039;
    color: #ffffff;
    padding: 2px 5px;
    border: 1px solid transparent;
    border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
    cursor: pointer;
}

.BoxView:after {
    position: absolute;
    content: "";
    top: 14px;
    right: 5px;
    width: 0;
    height: 0;
    border: 6px solid transparent;
    border-color: #fff transparent transparent transparent;
}

.BoxView.BoxActive:after {
    border-color: transparent transparent #fff transparent;
    top: 7px;
}

.Button {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}

.Button:hover {
    background-color: rgba(255, 255, 255, 0.4);
    color: white;
}

.Button:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Button2 {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 5px 10px;
}

.Button2:hover {
    text-decoration: underline;
}

.Button2.Active {
    background-color: #051039;
}

.Button3 {
    background-color: rgba(255, 255, 255, 0.2);
    width: 30px;
    line-height: 30px;
    border-radius: 15px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
}

.Button3:hover {
    background-color: rgba(255, 255, 255, 0.4);
}

.Button3:active {
    background-color: rgba(255, 255, 255, 0.2);
}

.Button3.Close {
    position: absolute;
    top: 5px;
    right: 5px;
}

.Button4 {
    display: inline-block;
    vertical-align: middle;
    background-color: rgba(255, 255, 255, 0.2);
    padding: 0px 10px;
    line-height: 30px; 
    font-size: 16px;
    cursor: pointer;
    margin: 5px;
}

.Button4:hover {
    background-color: rgba(255, 255, 255, 0.4);
}

.Button4:active {
    background-color: rgba(255, 255, 255, 0.2);
}

.Button5 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px;
    font-size: 16px;
}

.Button5:hover {
    background-color: rgba(255, 255, 255, 0.4);
    color: white;
}

.Button5:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Button6 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px;
}

.Button6:hover {
    background-color: rgba(255, 255, 255, 0.3);
    color: white;
}

.Button6:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Button7 {
    display: inline-block;
    vertical-align: middle;
}

.Button7:hover {
    background-color: rgba(255,255,255,0.4);
    color: white;
}

.Button7:active {
    background-color: rgba(255,255,255,0.2);
    color: white;
}

.Button8 {
    display: inline-block;
}

.Button8:hover {
    text-decoration: underline;
    vertical-align: top;
}

.Button8.Active {
    background-color: #051039;
}

.Caption {
    background-color: #051039;
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 40px;
    margin-top: -20px; 
    opacity: 0.8;
}

.Code {
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
    max-height: 400px;
}

.Code2 {
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Col {
    display: inline-block;
    vertical-align: middle;
    font-size: 14px;
    padding: 5px;
}

.Col2 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px 0px;
}

.Col3 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px 0px;
    cursor: pointer;
    color: cyan;
}

.Col3:hover {
    text-decoration: underline;
}

.Col4 {
    display: inline-block;
    padding: 0px 5px 5px 5px;
    font-family: Aclonica;
    font-size: 16px;
}

.Col5 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px 0px;
    cursor: pointer;
}

.Col6 {
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, 0.2);
    margin: 4px 0px;
    position: relative;
}

.ComboBox {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    border: 1px solid rgba(255, 255, 255, 0.2);
    min-width: 180px;
    font-family: Arial;
    font-size: 16px;
    text-align: left;
}

.ComboBox select {
    display: none;
}

.Content {
    background-color: rgba(255, 255, 255, 0.2);
}

.Content2 {
    max-width: 800px;
    margin: auto;
}

.Content3 {
    float: left;
    text-align: center;
}

.Content4 {
    position: relative;
    padding-left: 10px;
}

.Content5 {
    background-color: #333333;
}

.Content6 {
    display: table-cell;
    vertical-align: middle;
}

.Content7 {
    background-color: rgba(255, 255, 255, 0.2);
    max-width: 700px;
    margin: auto;
    padding: 10px;
}

.Content8 {
    background-color: rgba(255, 255, 255, 0.2);
    max-width: 500px;
    margin: auto;
}

.Content9 {
    height: 400px;
}

.Content10 {
    background-color: #051039;
    margin: auto;
    max-width: 500px;
    position: relative;
}

.Content11 {
    font-size: 0px;
    padding: 0px 5px 5px 5px;
}

.Content12 {
    height: 100vh;
}

.Data {
    background-color: rgba(0,0,0,0.2);
    border: 1px solid rgba(0,0,0,0.2);
    min-height: 300px;   
    padding: 5px 10px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Data2 {
    background-color: transparent;
    min-height: 300px;   
    padding: 5px 10px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Error {
    color: #f67b20;
}

.Error2 {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    color: #f67b20;
    padding: 10px;
    text-align: left;
}

.Field {
    display: inline-block;
    padding: 5px;
    font-size: 14px;
}

.Field2 {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}

.Field2.Error {
    border: 1px solid #f67b20;
}

.Field3 {
    border: 1px solid rgba(255, 255, 255, 0.2);
    height: 30px;   
    margin-left: 150px;
}

.Field4 {
    display: inline-block;
    vertical-align: middle;
    color: #89a830;
}

.Field5 {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: middle;
    min-width: 100px;
    height: 30px;
    padding: 5px 10px;
}

.Field6 {
    margin-left: 150px;
    padding: 5px 10px;
}

.Field7 {
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.2);
}

.Field8 {
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: middle;
    min-width: 300px;
    height: 30px;
}

.Field9 {
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, 0.2);
    height: 300px;
    overflow: auto;
}

.Field10 {
    background-color: rgba(255, 255, 255, 0.2);
    margin-top: 5px;
}

.Field11 {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: middle;
    min-width: 100px;
    height: 30px;
    padding: 5px 10px;
    color: gray;
}

.Form {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: top;
    font-size: 0px;
}

.Formula {
    overflow: auto;
}

.Formula2 {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: top;
    padding: 5px;
    margin: 5px 0px;
}

.Formula3 {
    text-align: left;
}

.Formula4 {
    display: inline-block;
    vertical-align: top;
}

.Footer {
    background-color: rgba(255, 255, 255, 0.0);
    position: absolute;
    bottom: 35px;
    left: 0px;
    right: 0px;
}

.HtmlPage {
    position: relative;
}

.Icon {
    font-size: 16px;
}

.Icon2 {
    color: cyan;
}

.Icon3 {
    background-color: rgba(255, 255, 255, 0.2);
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
}

.Icon3:hover {
    background-color: rgba(255, 255, 255, 0.4);
    color: white;
}

.Icon3:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Icon4 {
    background-color: rgba(255, 255, 255, 0.2);
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
}

.Icon5 {
    padding: 10px 0px;
}

.Icon6 {
    font-size: 30px;
}

.Icon7 {
    font-size: 20px;
    padding: 3px 0px 0 10px;
    float: left;
}

.Icon8 {
    color: #89a830;
}

.Icon9 {
    color: #f67b20;
}

.Icon10 {
    padding-right: 10px;
    color: cyan;
}

.Icon11 {
    background-color: rgba(255, 255, 255, 0.2);
    width: 100px;
    height: 100px;
    line-height: 100px;
    font-size: 50px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}

.Icon11:hover {
    background-color: rgba(255, 255, 255, 0.4);
    color: white;
}

.Icon11:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Icon12 {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    top: 5px;
    left: 155px;
    color: white;
    width: 28px;
    height: 28px;
    line-height: 28px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}

.Icon12:hover {
    background-color: rgba(255, 255, 255, 0.4);
    color: white;
}

.Icon12:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Icon13 {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    top: 5px;
    left: 190px;
    color: white;
    width: 28px;
    height: 28px;
    line-height: 28px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}

.Icon13:hover {
    background-color: rgba(255, 255, 255, 0.4);
    color: white;
}

.Icon13:active {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.Img {
    background-image: url("/data/img/defaults/events.jpg");
    min-height: 500px;
    position: relative;
    opacity: 0.65;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
}

.Img2 {
    float: left;
    border-radius: 20px;
}

.Img3 {
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Img4 {
    background-image: url("/data/img/defaults/error.jpg");
    min-height: 500px;
    position: relative;
    opacity: 0.65;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
}

.Img5 {
    float: left;
    margin: 0 10px 0 -40px;
    height: 80px;
    line-height: 80px;
    width: 80px;
    border-radius: 50%;
}

.Img6 {
    position: absolute;
    top: 0px;
    right: 0px;
    width: 80px;
    height: 80px;
    line-height: 80px;
    border-radius: 50%;
}

.Img7 {
    background-color: rgba(255,255,255,0.2);
    position: absolute;
    top: 0px;
    right: 0px;
    width: 60px;
    height: 60px;
    line-height: 60px;
    border-radius: 50%;
    font-size: 30px;
    text-align: center;
}

.Input {
    margin-left: 30px;
}

.Input2 {
    border: 1px solid rgba(255, 255, 255, 0.2);
    height: 100%;   
    width: 100%;
    padding: 5px 10px;
}

.Item {
    display: inline-block;
    vertical-align: middle;
}

.Item2 {
    padding: 10px 0px;
}

.Item3 {
    margin: 5px 0 5px 20px;
}

.Item4 {
    padding-left: 20px;
}

.Label {
    background-color: #7f859a; /* L3 */
    display: inline-block;
    vertical-align: top;
    padding: 5px;
    font-size: 14px;
}

.Label2 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px 0px;
}

.Label3 {
    background-color: rgba(255, 255, 255, 0.2);
    min-width: 150px; 
    line-height: 30px;   
    padding: 0px 10px;
    position: absolute;
    top: 0px;
    left: 0px;
}

.Label4 {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: middle;
    min-width: 150px;
    height: 30px;
    padding: 5px 10px;
}

.Label5 {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.2);
    min-width: 150px;
    left: 0px;
    top: 0px;
    bottom: 0px;
    padding: 5px 10px;
}

.Label6 {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 5px 10px;
}

.Link {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 18px;
    font-family: Aclonica;
    padding: 0 10px 0 10px;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
}

.Link:hover {
    border-bottom: 5px solid #89a830;
}

.Link.Active {
    border-bottom: 5px solid #f67b20;
}

.Link2 {
    background-color: rgba(255, 255, 255, 0.2);
    width: 40px;
    height: 40px;
    border-radius: 20px;
    line-height: 40px;
    font-size: 20px;
}

.Link2 {
    cursor: pointer;
}

.Link2:hover {
    opacity: 0.8;
}

.Link2:active {
    opacity: 1.0;
}

.Link2.Facebook {
    background-color: #3b5998;
}

.Link2.Twitter {
    background-color: #0e76a8;
}

.Link3 {
    color: #89a830;
}

.Link4 {
    color: cyan;
}

.Link4:hover {
    text-decoration: underline;
}

.Link5 {
    display: inline-block;
    vertical-align: middle;
}

.Link6 {
    background-color: #ffcc00;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid #373f60;
}

.Link6:hover {
    border: 2px solid #ffcc00;
}

.Link6:active {
    border: 2px solid #373f60;
}

.Link7 {
    word-break: break-all;
}

.Link7:hover {
    text-decoration: underline;
}

.Link8 {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    padding: 5px;
}

.Link9 {
    background-color: #5f6681; /* L2 */
    display: inline-block;
    vertical-align: middle;
    font-family: Aclonica;
    font-size: 18px;
    color: #f67b20;
    padding: 10px;
}

.Link10 {
    background-color: #2d1c35;
    border: 1px solid gray;
    display: inline-block;
    text-align: left;
    overflow:hidden;
    padding: 10px;
    min-width: 350px;
    font-size: 16px;
}

.List {
    padding-right: 10px;
}

.List2 {
    padding-left: 20px;
    padding-right: 10px;
}

.List3 {
    padding-left: 30px;
}

.List4 {
    display: inline-block;
    vertical-align: middle;
}
 
.MainBody {

}

.MainBody2  {
    background-color: rgba(255, 255, 255, 0.2);
    margin: auto;
    padding: 10px;
    text-align: left;
    max-width: 1000px;
}

.MainBlock {
    padding: 10px;
}

.MainBlock2 {
    padding: 0px 10px;
}

.MainPage {
    background-color: #051039;
    border: 10px solid transparent;
    border-image: url("<?php echo $lStyle["border"]["middle"]["img"]; ?>") 30 round;
    -webkit-border-image: url("<?php echo $lStyle["border"]["middle"]["img"]; ?>") 30 round; 
    -moz-border-image: url("<?php echo $lStyle["border"]["middle"]["img"]; ?>") 30 round; 
    -o-border-image: url("<?php echo $lStyle["border"]["middle"]["img"]; ?>") 30 round;
    padding-bottom: 0px;
}

.Menu {
    background-color: rgba(255, 255, 255, 0.2);
    text-align: left;
    font-size: 0px;
    line-height: 40px;
    position: relative;
    padding-right: 10px;
}

.Modal {
    display: none;
    position: fixed;
    z-index: 2;
    padding: 10px;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100vh;
    background-color: rgba(255, 255, 255, 0.4);
    /*background-image: url("<?php echo $lStyle["modal"]["img"]; ?>");*/
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
    text-align: left;
}

.Network {
    background-color: rgba(255, 255, 255, 0.2);
    width: 40px;
    line-height: 40px;
    font-size: 20px;
    border-radius: 20px;
    text-align: center;
    margin: 5px 5px 0 5px;
}

.Parallax {
    position: relative;
    text-align: center;
}

.Parallax.Scroll .Img {
    background-attachment: scroll;
}

.Result {
    background-color: #051039;
    padding: 10px;
}

.Row {
    padding: 5px;
}

.Row2:not(:last-child) {
    margin-bottom: 20px;
}

.Row3 {
    padding: 10px 0px;
}

.Row4 {
    padding: 10px;
}

.Row5 {
    font-size: 0px;
    padding: 5px;
}

.Row6 {
    background-color: rgba(255, 255, 255, 0.2);
    height: 50px;
    text-align: center;
    display: table;
    table-layout: fixed;
    width: 100%;
}

.Row7 {
    height: 100px;
    text-align: center;
    display: table;
    table-layout: fixed;
    width: 100%;
}

.Row8 {
    padding-bottom: 10px;
}

.Row9 {
    padding: 5px 0px;
}

.Row10 {
    text-align: left;
    font-size: 0px;
}

.Row11 {
    margin-bottom: 10px;
}

.Row12 {
    margin: 5px 0px;
    position: relative;
}

.Row13 {
    text-align: right;
    font-size: 0px;
    padding-top: 10px;
}

.Row14 {
    background-color: rgba(255, 255, 255, 0.2);
    margin: auto;
    max-width: 500px;
    padding: 5px 10px;
    font-family: Archivo Narrow;
    color: white;
    display: none;
}

.Row15 {
    background-color: #051039;
    border-bottom: 5px solid #051039;
    padding: 10px 0px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
    text-align: left;
}

.Row16 {
    border-bottom: 5px solid #051039;
    text-align: center;
    font-size: 0px;
}

.Row17 {
    display: inline-block;
    vertical-align: middle;
    padding: 5px 0px;
    position: absolute;
    top: 0px;
    left: 0px;
}

.Row18 {
    padding: 5px 0px;
    margin-left: 30px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Row19 {
    background-color: #051039;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    padding: 5px 10px;
}

.Row20 {
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    padding: 5px 10px;
}

.Row20.Active {
    background-color: #051039;
}

.Row21 {
    padding: 10px 0px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Row22 {
    font-size: 0px;
}

.Row23 {
    background-color: rgba(255, 255, 255, 0.2);
    text-align: left;
    padding: 0px 10px;
}

.Row24 {
    max-height: 400px;
    text-align: left;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Row25{
    padding: 10px;
    text-align: left;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Row26 {
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 0px 5px;
}

.Row27 {
    overflow: auto;
}

.Row28 {
    padding: 20px 0px;
}

.Row29 {
    background-color: rgba(255, 255, 255, 0.2);
    position: relative;
}

.Row29:not(:last-child) {
    margin-bottom: 5px;
}

.Row30 {
    background-color: rgba(255, 255, 255, 0.2);
    margin: 5px 0px;
    position: relative;
}

.Row31 {
    background-color: #051039; 
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
    padding: 5px 10px;
}

.Row32 {
    padding: 5px 0px;
    max-width: 450px;
    text-align: right;
}

.Row33 {
    padding: 5px 0px;
    position: relative;
}


.Shift1 {
    padding-left: 10px;
}

.Show {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    padding: 10px;
    margin-top: 10px;
    max-height: 400px;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-width: auto;
}

.Succes {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    color: #89a830;
    padding: 10px;
    text-align: left;
}

.Text {
    background-color: #111;
    color: #fff;
    padding: 18px 10px;
    font-size: 25px;
    display: inline-block;
    font-family: Anton;
    letter-spacing: 5px;
    margin-top: -20px; 
}

.Text2 {
    font-family: Allan;
    font-size: 14px;
}

.Text3 {
    margin-left: 50px;
}

.Text4 {
    color: #051039;
} 

.Text5 {
    color: #051039;
    font-weight: bold;
} 

.Text6 {
    position: absolute;
    top: 35px;
    left: -33px;
    color: #051039;
    font-weight: bold;
}

.Text7 {
    font-size: 20px;
    font-family: Aclonica;
    padding: 10px;
}

.Text8 {
    padding: 5px;
    font-family: Arial;
    font-size: 14px;
    color: #555555;
    text-align: center;
}

.Text9 {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
}

.Text9:hover {
    text-decoration: underline;
}

.Text10 {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    padding: 5px 0px;
    color: cyan;
}

.Text10:hover {
    text-decoration: underline;
}

.Text11 {
    text-align: left;
    padding-top: 3px;
    width: 170px;
}

.TextArea {
    padding: 10px;
    height: 400px;
}

.Title {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    font-size: 25px;
    font-family: Akronim;
    color: cyan;
    padding: 0 20px 0 10px;
    display: inline-block;
    vertical-align: middle;
}

.Title2{
    background-color: #5f6681; /* L2 */
    color: #f67b20;
    padding: 20px 10px;
}

.Title3 {
    background-color: rgba(255, 255, 255, 0.2);
    display: inline-block;
    vertical-align: middle;
    font-family: Aclonica;
    color: #f67b20;
    padding: 10px;
}

.Title4 {
    border-bottom: 5px solid #051039;
    color: #f67b20;
    padding-bottom: 5px;
}

.Title5 {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 10px 35px 10px 10px;
    font-family: Anton;
    font-size: 25px;
}

.Title6 {
    padding-bottom: 5px;
    color: cyan;
}

.Title7 {
    font-weight: normal;
}

.Title8 {
    color: dodgerblue;
}

.Title9  {
    color: lime;
}

.Title10  {
    color: #f67b20;
    margin-top: 20px;
    margin-bottom: 10px;
}

/* ============================================== */
/* Responsive Web Design */ 
/* ============================================== */

.RwdC01 {width: 4.16%;}
.RwdC02 {width: 8.33%;}
.RwdC03 {width: 12.5%;}
.RwdC04 {width: 16.66%;}
.RwdC05 {width: 20.83%;}
.RwdC06 {width: 25%;}
.RwdC07 {width: 29.16%;}
.RwdC08 {width: 33.33%;}
.RwdC09 {width: 37.5%;}
.RwdC10 {width: 41.66%;}
.RwdC11 {width: 45.83%;}
.RwdC12 {width: 50%;}
.RwdC13 {width: 54.16%;}
.RwdC14 {width: 58.33%;}
.RwdC15 {width: 62.5%;}
.RwdC16 {width: 66.66%;}
.RwdC17 {width: 70.83%;}
.RwdC18 {width: 75%;}
.RwdC19 {width: 79.16%;}
.RwdC20 {width: 83.33%;}
.RwdC21 {width: 87.5%;}
.RwdC22 {width: 91.66%;}
.RwdC23 {width: 95.83%;}
.RwdC24 {width: 100%;}

[class*="RwdC"] {
    display: inline-block;
    vertical-align: top;
    font-size: 16px;
    padding: 5px;
}

/* ============================================== */
/* Mobile */ 
/* ============================================== */

@media (max-width:1024px) {

}
/* ---------------------------------------------- */
@media (max-width:960px) {
    .Bars {
        display: inline-block;
    }
    
    .Item:not(:first-child) {
        display: none;
    }
    
    .RWD .Item {
        display: block;
    }
}
/* ---------------------------------------------- */
@media (max-width:750px) {
    .RWD2[class*="RwdC"] {
        width: 33.33%;
    } 
}
/* ---------------------------------------------- */
@media (max-width:640px) {  

}
/* ---------------------------------------------- */
@media (max-width:550px) {
    .RWD2[class*="RwdC"] {
        width: 50%;
    } 
}/* ---------------------------------------------- */
@media (max-width:520px) {
    .Field5 {
        background-color: transparent;
        border: 1px solid rgba(255, 255, 255, 0.2);
        display: block;
    }
    .Label4 {
        display: block;
    }
}
/* ---------------------------------------------- */
@media (max-width:420px) {

}
/* ---------------------------------------------- */
@media (max-width:350px) {
    .RWD2[class*="RwdC"] {
        width: 100%;
    } 
}
/* ---------------------------------------------- */
@media (max-width:320px) {

}

/* ============================================== */
/* Mobile */ 
/* ============================================== */

@media (max-width:<?php echo $lStyle["background"]["top2"]["width"]; ?>) {  
    .Background.Top {
        background-position: top left, top right, center top, left top;
        background-size: auto, auto, 100% 88%, 100% 100%;    
    }
}

/* ============================================== */
