<html>
    <head>
        <title> from login </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class = "kotak_login'>
        <h3><b>sistem informasi penjualan barang </b> <br/> politeknik negeri subang </h3>
        <center><img src="C:\Users\PC LAB SI 32\Pictures\Camera Roll\agile.jpg width="200" height="200">
    </center>
</div>
<div class ="kotak_login2">
    <p class ="tulisan_login"> silahkan login </p>
    <form name ="form1" method ="post" action="proses_barang.php?action=login">
        <label>username</label>
        <input name="username" type="text" id="username" class="form_login" placeholder="username"/>
        <label>password</label>
        <input name="password" type="password" id="password" class="form_login" placeholder="password"/>
        <input type="submit" name="submit" class="tombol_login" value="login"/>&nbsp;
        <input type="reset" name="reset" class="tombol_reset" value="reset"/>
    </form>
</div>
    </body>
</html>