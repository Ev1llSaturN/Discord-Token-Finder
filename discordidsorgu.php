<script src="https://kit.fontawesome.com/230f58bc87.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap&subset=latin" rel="stylesheet" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<meta charset="utf-8">
<?php

$page_title = "Token Sorgu";

error_reporting(0);

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<style>
    body{
        background-color: #101018;
        background-image: url(/anime-anime-girls-red-street-street-japan-neon-1977595-wallhere.com.jpg);
        font-family: Poppins !important;
    }

    .form-control:focus{
        border-color: red !important;
        transition: 0.5s !important;
        border-radius: 5em !important;
        box-shadow: 0px 0px 12px 2px red !important;
        color: #fff !important;
    }
    .form-control{
        border-color: #2F2D44 !important;
        border-width: 2px !important;
        border-radius: 5em !important;
        background-color: #000000 !important;
        transition: 0.5s;
        color: #6C757D !important;
        font-size: 19px !important;
        font-weight: 500 !important;
        font-family: Poppins !important;
        box-sizing: border-box;
        border-style: solid;
    }
    *:focus {
    outline: none;
    } 
    .btn-outline-primary{
        color: white;
        transition: 0.5s;
        border-radius: 5em;
        border-style: solid !important;
        border-width: 2px;
        background-color: #000000 !important;
        border-color: #b0b0b0 !important;
        box-shadow: none;
        font-size: 18px;
        font-weight: bold;
        text-shadow: white 0px 0px 9px;
    }
    .btn-outline-primary:hover{
        transition: 0.4s;
        box-shadow: 0px 0px 12px 4px red !important;
        background-color: red !important;
        border-color: red !important;
        border-radius: 5em;
        border-width: 2px;
        cursor: pointer;
        text-shadow: red 0px 0px 9px;
    }
    .btn-outline-primary:after{
        transition: 0.5s;
        box-shadow: 0px 0px 12px 4px #3effb1 !important;
        background-color: #3effb1 !important;
        border-color: #3effb1 !important;
        border-radius: 5em;
        border-width: 2px;
    }
    /**pkkalı pekka */
    .btn-outline-warning{
        color: white;
        transition: 0.5s;
        border-radius: 5em;
        border-style: solid !important;
        border-width: 2px;
        background-color: #000000 !important;
        border-color: #b0b0b0 !important;
        box-shadow: none;
        font-size: 18px;
        font-weight: bold;
        text-shadow: white 0px 0px 9px;
    }
    .btn-outline-warning:hover{
        transition: 0.4s;
        box-shadow: 0px 0px 12px 4px orange !important;
        background-color: orange !important;
        border-color: orange !important;
        border-radius: 5em;
        border-width: 2px;
        cursor: pointer;
        text-shadow: orange 0px 0px 9px;
    }
    .btn-outline-warning:after{
        transition: 0.5s;
        box-shadow: 0px 0px 12px 4px #3effb1 !important;
        background-color: #3effb1 !important;
        border-color: #3effb1 !important;
        border-radius: 5em;
        border-width: 2px;
    }
</style>
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"><b></b></h4>
                    <p class="mb-1">
                        <br>
                    <p style="text-align: center; color: red; font-weight: 800; font-size: 35px; text-shadow: red 0px 0px 9px;">
                    <i>TYPE OR PASTE THE DISCORD ID OF THE PERSON WHOSE TOKEN WILL BE GET</i></br>
                    </p>
					<p>
					</p>
                    </p>
<div class="container" id="main_container">
                        <center class="nw">
	<input class="form-control" id="text" placeholder="DISCORD ID" type="number" maxlength="19" required style="font-family: Poppins !important; font-size: 23px !important; font-weight: 600 !important; height: 55px;"><br>
    <br>
	 <button onclick="encodeString()" id="sorgula" name="yolla" class="btn btn-outline-primary btn-border" style="font-family: Poppins !important; Width: 180px; height: 45px; outline: none; margin-left: 5px; font-weight: 800; font-family: Poppins; font-size: 18px !important; text-shadow: white 0px 0px 9px;"><span>GET TOKEN <span id="sorgulanumber"></span></span></button>
	 <script>
	         function encodeString() {
            $.Toast.showToast({
                "title": "Sorgulanıyor...",
                "icon": "loading",
                "duration": 60000
            })};
			</script>
	</center>


</div>

                            <center>

                            <div class="card-body">

<div class="result-container" id="result_view">
    <h3 id="result_header"></h3>
    <span class="form-controlz" id="result_box" style="color: red !important; text-shadow: red 0px 0px 11px; font-weight: bold; font-size: 25px;"></span>
    <img id="result_image">
    <br>
    <button class="btn btn-outline-warning btn-border" style="width: 180px; height: 45px; margin-top: 20px; outline: none; margin-left: 5px; font-weight: 800; font-family: Poppins; font-size: 18px !important;" onclick="copyToClipboard()" id="copy_btn">COPY TOKEN</button>
</div>

</center>

        <script>
    const resultView = document.getElementById('result_view');
    const resultHeader = document.getElementById('result_header');
    const resultBox = document.getElementById('result_box');
    const resultImage = document.getElementById('result_image');
    const copyBtn = document.getElementById('copy_btn');

    function encodeImage() {
        hideAll();
        let file = document.getElementById('file');
        let reader = new FileReader();
        if (file.files[0]) {
            if (file.files[0].size <= 1024 * 1024) {
                reader.readAsDataURL(file.files[0]);
                reader.onload = function () {
                    displayString();
                    resultHeader.innerHTML = 'Encoded image:';
                    resultBox.innerHTML = reader.result.toString();
                };
            } else alert('File size too big');
        }
    }

    function decodeImage() {
        hideAll();
        let image = document.getElementById('image').value;
        displayImage();
        resultHeader.innerHTML = 'Decoded image:';
        resultImage.src = image;
    }

    function encodeString() {
        hideAll();
        let text = document.getElementById('text');
        displayString();

        resultBox.innerHTML = btoa(text.value);
    }

    function decodeString() {
        hideAll();
        let text = document.getElementById('e_text');
        displayString();
        resultHeader.innerHTML = 'Decoded string:';
        resultBox.innerHTML = atob(text.value);
    }

    function hashString() {
        hideAll();
        let text = document.getElementById('text2');
        displayString();
        resultHeader.innerHTML = 'SHA1 hashed string:';
        resultBox.innerHTML = sha1(text.value);
    }

    function displayString() {
        resultView.style.display = 'block';
        resultHeader.style.display = 'block';
        resultBox.style.display = 'block';
        copyBtn.style.display = 'block';
        resultView.scrollIntoView({behavior: "smooth", block: "end"});
    }

    function displayImage() {
        resultView.style.display = 'block';
        resultHeader.style.display = 'block';
        resultImage.style.display = 'block';
        resultView.scrollIntoView({behavior: "smooth", block: "end"});
    }

    function hideAll() {
        resultHeader.style.removeProperty('display');
        resultBox.style.removeProperty('display');
        resultImage.style.removeProperty('display');
        resultView.style.removeProperty('display');
        copyBtn.style.removeProperty('display');
    }

    function copyToClipboard() {
        let tempInput = document.createElement('textarea');
        tempInput.value = resultBox.innerHTML;
        document.body.appendChild(tempInput);
        tempInput.select();
        tempInput.setSelectionRange(0, 99999999); /*For mobile devices*/
        document.execCommand("copy");
        tempInput.remove();
        alert("Token copied successfully!");

    }

    function sha1(str) {
        //  discuss at: https://locutus.io/php/sha1/
        // original by: Webtoolkit.info (https://www.webtoolkit.info/)
        // improved by: Michael White (https://getsprink.com)
        // improved by: Kevin van Zonneveld (https://kvz.io)
        //    input by: Brett Zamir (https://brett-zamir.me)
        //      note 1: Keep in mind that in accordance with PHP, the whole string is buffered and then
        //      note 1: hashed. If available, we'd recommend using Node's native crypto modules directly
        //      note 1: in a steaming fashion for faster and more efficient hashing
        //   example 1: sha1('Kevin van Zonneveld')
        //   returns 1: '54916d2e62f65b3afa6e192e6a601cdbe5cb5897'

        var hash
        try {
            var crypto = require('crypto')
            var sha1sum = crypto.createHash('sha1')
            sha1sum.update(str)
            hash = sha1sum.digest('hex')
        } catch (e) {
            hash = undefined
        }

        if (hash !== undefined) {
            return hash
        }

        var _rotLeft = function (n, s) {
            var t4 = (n << s) | (n >>> (32 - s))
            return t4
        }

        var _cvtHex = function (val) {
            var str = ''
            var i
            var v

            for (i = 7; i >= 0; i--) {
                v = (val >>> (i * 4)) & 0x0f
                str += v.toString(16)
            }
            return str
        }

        var blockstart
        var i, j
        var W = new Array(80)
        var H0 = 0x67452301
        var H1 = 0xEFCDAB89
        var H2 = 0x98BADCFE
        var H3 = 0x10325476
        var H4 = 0xC3D2E1F0
        var A, B, C, D, E
        var temp

        // utf8_encode
        str = unescape(encodeURIComponent(str))
        var strLen = str.length

        var wordArray = []
        for (i = 0; i < strLen - 3; i += 4) {
            j = str.charCodeAt(i) << 24 |
                str.charCodeAt(i + 1) << 16 |
                str.charCodeAt(i + 2) << 8 |
                str.charCodeAt(i + 3)
            wordArray.push(j)
        }

        switch (strLen % 4) {
            case 0:
                i = 0x080000000
                break
            case 1:
                i = str.charCodeAt(strLen - 1) << 24 | 0x0800000
                break
            case 2:
                i = str.charCodeAt(strLen - 2) << 24 | str.charCodeAt(strLen - 1) << 16 | 0x08000
                break
            case 3:
                i = str.charCodeAt(strLen - 3) << 24 |
                    str.charCodeAt(strLen - 2) << 16 |
                    str.charCodeAt(strLen - 1) <<
                    8 | 0x80
                break
        }

        wordArray.push(i)

        while ((wordArray.length % 16) !== 14) {
            wordArray.push(0)
        }

        wordArray.push(strLen >>> 29)
        wordArray.push((strLen << 3) & 0x0ffffffff)

        for (blockstart = 0; blockstart < wordArray.length; blockstart += 16) {
            for (i = 0; i < 16; i++) {
                W[i] = wordArray[blockstart + i]
            }
            for (i = 16; i <= 79; i++) {
                W[i] = _rotLeft(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1)
            }

            A = H0
            B = H1
            C = H2
            D = H3
            E = H4

            for (i = 0; i <= 19; i++) {
                temp = (_rotLeft(A, 5) + ((B & C) | (~B & D)) + E + W[i] + 0x5A827999) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            for (i = 20; i <= 39; i++) {
                temp = (_rotLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            for (i = 40; i <= 59; i++) {
                temp = (_rotLeft(A, 5) + ((B & C) | (B & D) | (C & D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            for (i = 60; i <= 79; i++) {
                temp = (_rotLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            H0 = (H0 + A) & 0x0ffffffff
            H1 = (H1 + B) & 0x0ffffffff
            H2 = (H2 + C) & 0x0ffffffff
            H3 = (H3 + D) & 0x0ffffffff
            H4 = (H4 + E) & 0x0ffffffff
        }

        temp = _cvtHex(H0) + _cvtHex(H1) + _cvtHex(H2) + _cvtHex(H3) + _cvtHex(H4)
        return temp.toLowerCase()
    }
</script>



    </div>
    <!--BİTİŞ-->