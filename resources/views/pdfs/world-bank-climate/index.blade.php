<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
    <title>{{ $visitor->name }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <br/>
    <style id="fonts1" type="text/css" >
        @font-face {
            font-family: 'FranklinGothic-Book_16';
            src: url("fonts/FranklinGothic-Book_16.woff") format("woff");
        }

        @font-face {
            font-family: 'FranklinGothic-MediumItalic_1e';
            src: url("fonts/FranklinGothic-MediumItalic_1e.woff") format("woff");
        }

        @font-face {
            font-family: 'Korolev-Medium_1c';
            src: url("fonts/Korolev-Medium_1c.woff") format("woff");
        }
    </style>
    <style type="text/css">
        *,*::before,*::after {
            margin: 0;
            padding: 0;
        }
        p {margin: 0; padding: 0;}
        .ft10{font-size:34px;font-family:Times;color:#63c13d;}
        .ft11{font-size:78px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#ffffff;}
        .ft12{font-size:60px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#ffffff; text-align: center}
        .ft13{font-size:40px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#ffffff; white-space: pre-wrap}
        .ft14{font-size:25px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:#63c13d; white-space: pre-wrap}
        .ft18{font-size:34px;font-family:Arial, Helvetica, sans-serif;color:#231f20;}
    </style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
    <div style="position:relative;width:793px;height:1103px;">
        <img width="793" height="1103" src="{{ public_path('assets/world-bank-climate/img/target001.png') }}" alt="background image"/>
        <p style="position:absolute;top:126px;left:276px;white-space:nowrap" class="ft11">KENYA</p>
        <p style="position:absolute;top:790px;left:170px; text-align:center" class="ft12">{{ $visitor->name }}</p>
        <p style="position:absolute;top:870px;left:200px;" class="ft13"><i>{{ $visitor->Company }}</i></p>
        <p style="position:absolute;top:970px;left:200px;" class="ft14">{{ $visitor->Role }}</p>
        <p style="position:absolute;top:510px;left:268px;white-space:nowrap" class="ft18">
            <img class="qrcodeImg" src="data:image/png;base64,{!! DNS2D::getBarcodePNG((string) $visitor->id, 'QRCODE', 12.4, 12.4) !!}" />
        </p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
    *,*::before,*::after {
        margin: 0;
        padding: 0;
    }
	p {margin: 0; padding: 0;}	.ft20{font-size:34px;font-family:Korolev-Medium_1c;color:#63c13d;}
	.ft21{font-size:78px;font-family:Korolev-Medium_1c;color:#ffffff;}
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
    <div id="page2-div" style="position:relative;width:793px;height:1121px;">
        <img width="793" height="1121" src="{{ public_path('assets/world-bank-climate/img/target002.png') }}" alt="background image"/>
        <p style="position:absolute;top:448px;left:165px;white-space:nowrap" class="ft20"><b>&#160; &#160;&#160;</b></p>
        <p style="position:absolute;top:499px;left:182px;white-space:nowrap" class="ft20"><b>&#160;&#160;</b></p>
        <p style="position:absolute;top:126px;left:273px;white-space:nowrap" class="ft21">KENYA</p>
    </div>
</body>
</html>
