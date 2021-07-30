<!DOCTYPE html>
 <html>
 <head>
   <title>Cara Membuat Alert, Confirm dan Prompt Dengan JavaScript</title>
 </head>
 <body>
   <p>Cara Membuat Alert, Confirm dan Prompt Dengan JavaScript</p>
    <button onclick="konfirmasi()">Tombol Hapus</button>
    <p id="pesan"></p>
 
    <script>
      function konfirmasi(){
         var tanya = confirm("Apakah Anda Akan Menghapus Data Ini ?");
 
         if(tanya === true) {
            pesan = "Ya";
         }else{
            pesan = "Tidak";
         }
 
         document.getElementById("pesan").innerHTML = pesan;
      }
    </script>
 </body>
 </html>