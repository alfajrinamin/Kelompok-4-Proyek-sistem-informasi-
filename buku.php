

<html>
<head>
	<title></title>
	<style type="text/css">
	table{
		width: 100%;
		border :solid 1px silver;
		border-collapse: collapse;
	}
	table th{
		background: deepskyblue;
		padding: 10px 20px;
		color: white;
		border: solid 1px silver;
	}
	table td{
		padding:8px;
		text-align:center;
		border:solid 1px silver;
	}
	#btn{
		display: inline-block;
		text-decoration: none;
		background: deepskyblue;
		color: white;
		border-radius: 5px;
		padding: 8px 10px;
	}
	#btn:hover{
		background: silver;
		color: blue;
	}
	#btn_link{
		margin-bottom: 10px;
		display: inline-block;
		text-decoration: none;
		background: deepskyblue;
		color: white;
		margin-left: 69%;
		border-radius: 5px;
		padding: 8px 10px;
	}
	#btn_link:hover{
		background: silver;
		color: blue;
	}
	#m{
		
		background: deepskyblue;
		padding: 10px 15px;
		}
		#m a{
			color: white;
			text-align: center;
			text-decoration: none;
			text-align: right;
			font-size: 20px;
			
		}
		#m h2{
			display: inline-block;
			color: white;
			margin-left: 5px;
			font-size: 20px;
			margin-right: 73%;
		}
		#m a:hover{
			background: white;
			color: black;
			border-radius: 30px;
			padding: 10px 15px;
			font-weight: bold;
		}
		#r{
			display: inline-block;
			margin-top: 20px;
			border-radius: 5px;
		}
		#r input{
			flex: 1;
			padding: 8px 10px;
			border-radius: 15px;
		}
		#r button{
			background-color: #4CAF50;
			color: white;
			padding: 8px 10px;
			cursor: pointer;
			border-radius: 15px;
		}
		img{
			margin-top: 8px;
			display: inline-block;
			width: 40px;
			height: 40px;


		}
	</style>
</head>
<body>

		

	<div id="m">
		<img src="icons.png">
		<h2>Datftar Buku</h2>
		<a href="?ke=beranda">LOGOUT</a>
	</div>
<div id="r">

    <form>
      <input type="search" placeholder="Cari Buku" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Cari</button>
     </form>

  </div>

	<a href="?ke=brgtambah" id="btn_link">Tambah Buku</a>
</div>
	<table>
		<tr>
			<th>No Buku</th>
			<th>Judul Buku</th>
			<th>Penerbit</th>
			<th>Tahun</th>
			<th>Aksi</th>

		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Update | Hapus</td>
		</tr>

	</table>
</body>
</html>

