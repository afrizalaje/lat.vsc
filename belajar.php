<html> 
   <head> 
    <title>Contoh Request POST</title>
    <link rel="stylesheet" href="style.css"> 
   </head> 
   <body> 
     <h1>Input dua bilangan</h1> 
    <form method="post" action="index.php">
    <fieldset>    
    <legend>Isi dengan benar !</legend>
    <label for="nama">Nama Lengkap : <input type="text" name="namaLengkap" id="nama"/></label><br /> 
    <label for="lahir">Tempat Lahir : <input type="text" name="tempatLahir" id="lahir"/></label><br />
    <label for="tanggal">Tanggal Lahir : <input type= "date" name="tanggalLahir" id="tanggal"/><br/>
    <label for="alamat">Alamat Rumah : <textarea rows="4" cols="50" name="alamatRumah" id="alamat"/></textarea> </br/>
    <label for="jk">Jenis Kelamin : <input type="radio" name="jk" id="jk">Pria
    <input type="radio" name="jk" id="jk">Wanita<br/>
    <label for="asal">Asal Sekolah : <input type="text" name="sekolah" id="asal"/><br/>
    <label for="nilai">Nilai UAN : <input type=text" name="nilai" id="nilai"/><br/>
    <input type="submit" name="submit" value="Submit" />    
    </fieldset> 
     
    </form> 
 
   </body> 
</html>