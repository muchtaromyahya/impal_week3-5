<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Library Tel-u</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
h1{
    text-align: center;
    font-size: 50px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;  
    margin-top: 2%; 
}
.active-cyan-4 input[type=text]:focus:not([readonly]) {
border: 1px solid #4dd0e1;
box-shadow: 0 0 0 1px #4dd0e1;
}
form{
    position: center;
}
.container1{
    margin:10%; 
}
.container2{
    margin-left: 15%;
    margin-right: 15%;
}
.form-control{
    margin-bottom: 5%;
}
.btn{
    text-align: center;
    margin-left: 45%
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-top: 26%;
  margin-left: 25%
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
th{
    border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
button{
    margin-right: 1%;
    text-align: right;
}
</style>
<body>
    <div class="container">
        <h1>Data Peminjaman Buku</h1>
        <h1>Open Library Telkom University</h1>
        <div class="container1">
            <table>
                    <tr>
                      <th colspan="2">DATA PEMINJAM</th>
                    </tr>
                    <tr>
                      <td><b>NIM</b></td>
                      <td><?= ($this->session->userdata('nim')) ?></td>
                    </tr>
                    <tr>
                      <td><b>Nama</b></td>
                      <td><?= ($this->session->userdata('nama'))?></td>
                    </tr>
                    <tr>
                      <td><b>Kode Inventaris Buku</b></td>
                      <td><?= ($this->session->userdata('kode_inventaris_buku')) ?></td>
                    </tr>
                    <tr>
                      <td><b>Tanggal Peminjaman</b></td>
                      <td><?= ($this->session->userdata('tgl_pinjam')) ?></td>
                    </tr>
                    <tr>
                      <td><b>Tanggal jatuh tempo</b></td>
                      <td><?= ($this->session->userdata('tgl_tempo')) ?></td>
                    </tr>
                    <tr>
                      <td><b>Tanggal kembali</b></td>
                      <td><?= ($this->session->userdata('tgl_kembali')) ?></td>
                    </tr>
                    <tr>
                      <td><b>Keterlambatan</b></td>
                      <td><?= ($this->session->userdata('keterlambatan'))?>.  hari</td>
                    </tr>
                    <tr>
                      <td><b>Jumlah denda</b></td>
                      <td><?= ($this->session->userdata('denda')) ?></td>
                    </tr>
                    <tr>
                      
                    </tr>
                  </table>
            </div>
        </div>
        
      </div>
</body>
</html>