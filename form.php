<html>
<style>
body{
	padding-top: 50px;
	text-align: center;
	background-color: #bdc3c7;
}
#bg{
	width: 400px;
	margin:10px auto;	
	padding: 30px;	
	background: #B993D6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8CA6DB, #B993D6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	box-shadow: 0 0 25px #58585a;
	
}
h2{
	font-family: arial;
	font-size: 42px;
	font-color:#FFFFFF;
}
button{
	 margin-top:0px;
  font-size:13px;
  color:rgb(100,100,100);
  border:none;
  outline:none;
  height:40px;
  text-transform:uppercase;
  background:#3498db;
  width:100%;
  color:#fff;
  cursor:pointer

}
.button{
	 margin-top:0px;
  font-size:13px;
  color:rgb(100,100,100);
  border:none;
  outline:none;
  height:40px;
  text-transform:uppercase;
  background: #27ae60;
  width:100%;
  color:#fff;
  cursor:pointer
}
#content .table table tr td input{
	display:inline-block;
	border-radius: 3px 3px;
	padding:10px;
	width:330px;
	margin: 10px 0px;
 	padding-left: 10px;
  	height: 40px;

    outline: none !important;
    border:1px solid #bdc3c7;
    box-shadow: 0 0 2px #bdc3c7;
}
.footer{
	padding-top: 10px;
}
#title{
	color: white;
}
.sub
{
	font-family: corbel;
	color: white;
	padding-bottom: 20px;
}
#atau {
	font-family: corbel;
	color: white;
}
.footer{
	font-family: corbel;
	color: white
}

</style>
<body>
	<div id="bg">

	<div id="title">
		<center><h2>Instagram</h2>
	</div>

	<div id="content">

	<div class="sub">
			Buat akun untuk melihat foto dan<br>
			video dari teman Anda
	</div>

		<button>
			Masuk dengan Facebook
		</button>

	<div id="atau">	<br>Atau<br><br>
	</div>

		<form action="hasil.php" method="post">

	<div class="table">
		<table border=0 align="center">
		<tr>
			<td>
			<input type="text" name="nama" placeholder="Nama Lengkap">
			</td>
		</tr>
		<tr>
			<td>
			<input type="text" name="user" placeholder="Nama Pengguna">
			</td>
		</tr>
		<tr>
			<td>
			<input type="Email" name="email" placeholder="Email">
			</td>
		<tr>
		<tr>
			<td>
			<input type="text" name="notelepon" placeholder="No Telepon">
			</td>
		</tr>
		<tr>
			<td>
			<input type="password" name="password" class="password" placeholder="Password">
			</td>
		</tr>				
			</table>
	</div>
		
			<br>
			<input type="submit"  value="Daftar" class="button">
			</center>
	

	<div class="footer">
			Dengan Mendaftar, Anda Menyeujui Ketentuan & Kebijakan Privasi Kami <br><br><br>
			Punya Akun? <a href="#">Masuk</a>
				</div>
		</div>
</form>
	</div>
		</body>
		</html>