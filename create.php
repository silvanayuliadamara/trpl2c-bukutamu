
    <h1>Input Buku Tamu</h1>
   

    <form action="proses.php" method="POST"> <!--tidak ditulis default action halaman nya sendiri, kalau method defaultnya get => di gabungkan ke url--> 
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name ="nama" required>
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name ="email" required>
        </div>
        <div class="mb-3">
        <label for="komentar" class="form-label">Komentar</label>
        <textarea class="form-control" name = "komentar" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" name ="submit" class="btn btn-primary" value="Submit" > 
         <a href="index.php?p=bukutamu" class= "btn btn-secondary">List buku tamu</a>

        </div>
    </form>
   