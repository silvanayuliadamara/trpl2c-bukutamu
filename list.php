  <h1>List Data Buku Tamu</h1>
  <a href="index.php?p=create" class= "btn btn-primary">Input buku tamu</a><br></br>

<table class="table table-bordered table-striped>">
    
  <thead class="table-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Komentar</th>
      <th scope="col">Timestamp</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php 
        require'koneksi.php';
        $tampil = $koneksi->query("SELECT * FROM tamu");
        $no = 1;
        while($data = mysqli_fetch_assoc($tampil)) {
            $time = $data['date_centered'];

             //$data=array();
       // while($row=$tampil->fetch_assoc()){
           // $data[]=$row;
        //}
       // $data =$tampil->fetch_all();
       // var_dump($data);
        //die;
        //foreach($tampil as $row) :
          //$time = $row['date_centered'];
    ?>
    <tr>
      <th scope="row"><?=$no++ ?></th>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['email']; ?></td>
      <td><?= $data['komentar']; ?></td>
      <td><?= date('d M Y H:i:s', strtotime($time)); ?></td>
      <td>
        <a href="index.php?key=<?=$data['id']?>&p=edit" class = "btn btn-warning btn-sm">Edit</a>
        <a  onclick="return confirm('Apakah Anda Yakin?')" href="proses.php?id=<?= $data['id']?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    
    <?php 
        }
    ?>
  </tbody>
</table>