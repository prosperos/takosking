<?php
/**
 * Template Name: About us
 */
get_header();
?>
    <style>
        html {
            height: 100%;
        }
        body {
            background: #E2E4E7;
            padding: 0;
            text-align: center;
            font-family: 'open sans';
            position: relative;
            margin: 0;
            height: 100%;
            -webkit-font-smoothing: antialiased;
        }

        .wrapper {
            height: 100% !important;
            height: 100%;
            margin: 0 auto;
            overflow: hidden;
        }

        a {
            text-decoration: none;
        }


        h1, h2 {
            width: 100%;
            float: left;
        }
        h1 {
            margin-top: 100px;
            color: #000;
            margin-bottom: 5px;
            font-size: 70px;
            letter-spacing: -4px;
            font-weight: 100;
        }
        h1 span {
            font-size: 26px;
            margin: 0 5px;
            text-transform: capitalize;
            background: rgba(0,0,0,0.85);
            display: inline-block;
            color: #6D461D;
            border-radius: 5px 5px;
            -webkit-border-radius: 5px 5px;
            -moz-border-radius: 5px 5px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.75);
            padding: 3px 10px;
        }
        h2 {
            color: #6D461D;
            font-weight: 100;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .pointer {
            color: #9b59b6;
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            margin-top: 15px;
        }
        code {
            margin: 20px 1%;
            float: left;
            width: 48%;
            height: 105px;
            background: rgba(0,0,0,0.1);
            border: rgba(0,0,0,0.05) 5px solid;
            border-radius: 5px;
            padding:5px;
            color: white;
            text-align: center;
            font-size: 15px;
            margin-top: 25px;
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        code.html {
            color: #7EC9E6;
        }
        code.js {
            color: #FFAD00;
        }

        .main {
            float: left;
            width: 100%;
            margin: 0 auto;
        }

        .main h1 {
            padding:150px 50px;
            float: left;
            width: 100%;
            font-size: 45px;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-weight: 100;
            color: white;
            margin: 0;
        }

        .main h1.demo1 {
            background: #1ABC9C;
        }

        .reload.bell {
            font-size: 12px;
            padding: 20px;
            width: 45px;
            text-align: center;
            height: 47px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
        }

        .reload.bell #notification {
            font-size: 25px;
            line-height: 140%;
        }

        .reload, .btn{
            display: inline-block;
            border: 4px solid #A2261E;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            background: #CC3126;
            display: inline-block;
            line-height: 100%;
            padding: 0.7em;
            text-decoration: none;
            color: #fff;
            width: 100px;
            line-height: 140%;
            font-size: 17px;
            font-family: open sans;
            font-weight: bold;
        }
        .reload:hover{
            background: #444;
        }
        .btn {
            width: 200px;
            color: rgb(255, 255, 255);
            border: 4px solid rgb(0, 0, 0);
            background: rgba(3, 3, 3, 0.75);
        }
        .clear {
            width: auto;
        }
        .btn:hover, .btn:hover {
            background: #444;
        }
        .btns {
            width: 410px;
            margin: 50px auto;
        }
        .credit {
            text-align: center;
            color: rgba(0,0,0,0.5);
            padding: 10px;
            width: 410px;
            clear: both;
        }
        .credit a {
            color: rgba(0,0,0,0.85);
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .back {
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            display: block;
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            background: rgba(255, 255, 255, 0.25);
            font-weight: bold;
            font-size: 13px;
            color: #000;
            -webkit-transition: all 500ms ease-in-out;
            -moz-transition: all 500ms ease-in-out;
            -o-transition: all 500ms ease-in-out;
            transition: all 500ms ease-in-out;
        }
        .back:hover {
            color: black;
            background: rgba(255, 255, 255, 0.5);
        }

        header {
            position: relative;
            z-index: 10;
        }
        .main section .page_container {
            position: relative;
            top: 25%;
            margin: 0 auto 0;
            max-width: 950px;
            z-index: 3;
        }
        .main section  {
            overflow: hidden;
        }

        .main section > img {
            position: absolute;
            max-width: 100%;
            z-index: 1;
        }

        .main section.page1 {
            background:rgb(230, 217, 200);
        }
        .main section.page1 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 15px;
            font-size: 70px;
            color: black;
        }
        .main section.page1 h2 {
            color: rgba(0,0,0,0.85);
            text-align: center;
            width: 435px;
            line-height: 160%;
        }
        .main section .page_container .btns {
            clear: both;
            float: left;
            text-align: center;
            width: 435px;
        }
        .main section .page_container .btns a{
            text-align: center;
        }
        .main section.page2 {
            background: #555557 url(back-phone.png) no-repeat center -150px ;
        }
        .main section.page2 > img {
            position: absolute;
            top: -300px;
            left: 50%;
            margin-left: -1095px;
        }
        .main section.page2 .page_container {
            margin-top: 240px;
            overflow: hidden;
        }
        .main section.page2 h1 {
            text-align: center;
            padding: 0;
            margin-bottom: 15px;
            font-size: 50px;
            letter-spacing: -1px;
            color: white;
        }
        .main section.page2 h2 {
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 160%;
            font-weight: 100;
        }
        .viewing-page-2 .back{
            background: rgba(0, 0, 0, 0.25);
            color: #FFF;
        }
        .main section.page3 {
            background:url(tilted-phone.png) no-repeat 156px -150px ;
        }
        .main section.page3 .page_container {
            overflow: hidden;
            width: 500px;
            right: -285px;
        }
        .main section.page3 h1 {
            text-align: left;
            padding: 0;
            margin-bottom: 0;
            font-size: 70px;
            letter-spacing: -1px;
            color: black;
        }
        .main section.page3 h2 {
            color: rgba(0,0,0,0.85);
            text-align: left;
            line-height: 160%;
            font-weight: 100;
            font-size: 21px;
        }

        body.disabled-onepage-scroll .onepage-wrapper  section {
            min-height: 100%;
            height: auto;
        }

        body.disabled-onepage-scroll .main section .page_container, body.disabled-onepage-scroll .main section.page3 .page_container  {
            padding: 20px;
            margin-top: 150px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body.disabled-onepage-scroll  section .page_container h1{
            text-align: center;
            font-size: 50px;
        }
        body.disabled-onepage-scroll section .page_container h2, body.disabled-onepage-scroll section .page_container .credit, body.disabled-onepage-scroll section .page_container .btns{
            text-align: center;
            width: 100%;
        }

        body.disabled-onepage-scroll .main section.page1 > img {
            position: absolute;
            width: 80%;
            left: 10%;
        }

        body.disabled-onepage-scroll .main section > img {
            position: relative;
            max-width: 80%;
            bottom: 0;
        }
        body.disabled-onepage-scroll code {
            width: 95%;
            margin: 0 auto 25px;
            float: none;
            overflow: hidden;
        }

        body.disabled-onepage-scroll .main section.page3 .page_container {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            right: 0;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".main").onepage_scroll({
                sectionContainer: "section",
                responsiveFallback: 600,
                loop: true
            });
        });

    </script>
    <div class="wrapper">
        <div class="main">

            <section class="page1">
                <div class="page_container">
                    <h1>One Page Scroll</h1>
                    <h2>Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin</h2>
                    <p class="credit">Created by <a href="http://www.thepetedesign.com">Pete R.</a>, Founder of <a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></p>
                    <div class="btns">
                        <a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>
                    </div>
                </div>
                <img src="phones.png" alt="phones">
            </section>

            <section class="page2">
                <div class="page_container">
                    <h1>Ready-to-use plugin</h1>
                    <h2>All you need is an HTML markup, call the script and BAM!</h2>
                    <code class="html">
                        &lt;div class="main"&gt;<br>
                        &lt;section&gt;...&lt;/section&gt;<br>
                        &lt;section&gt;...&lt;/section&gt;<br>
                        ...<br>
                        &lt;/div&gt;
                    </code>

                    <code class="js">
                        $(".main").onepage_scroll();
                    </code>
                </div>
            </section>

            <section class="page3">
                <div class="page_container">
                    <h1>Pretty Neat Eh?</h1>
                    <h2>You can customise the animation timing, the selector or even the animation easing using CSS3. I can't wait to see what you guys will come up with. Don't forget to grab them for free on Github'</h2>
                    <div class="btns">
                        <a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>
                    </div>
                </div>
            </section>
        </div>
        <a class="back" href="http://www.thepetedesign.com/#design">Back to The Pete Design</a>
        <a href="https://github.com/peachananr/onepage-scroll"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
    </div>
<?php
get_footer();
