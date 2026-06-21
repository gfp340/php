<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);	#隱藏錯誤訊息，如果有寫錯不會顯示在畫面上
    session_start();	#啟用Session
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
	#檢查登入，如果未登入會顯示ECHO內容，3秒後跳回2.login
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除> 
		#當按下新增會將資料送到15.user，而密碼pwd可以讓輸入字符顯示***
            </form>
        ";
    }
?>
    </body>
</html> 
