<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
        }

        .content {
            line-height: 1.5;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .double-hr {
        display: flex;
        align-items: center;
        width: 100%;
        }
        
        .line {
        flex-grow: 1;
        height: 1px;
        background-color: #151212;
        }

        .signature {
        padding-top: 20px;
        float:right;
        margin-right:20px;
        }

        .signature-p{
            margin-bottom: 5px;
        text-align: left;
        }
    </style>

    
</head>

<body>
    <div class="container">
        <div class="header" style="display:flex; align-items:center;">
            <div style="margin-right:60px">
                <img src="../../assets/images/jasaraharja.png" alt="Logo jasaraharja" style="width:150px">
            </div>
            <div style="margin-left: 65px">
                <h1 style="margin:auto 0; text-transform: uppercase; font-size:25px;">PT.JASA RAHARJA</h1>
                <p style="margin:auto 0;"><span style="text-transform: uppercase;">CABANG PERWAKILAN KISARAN</span></p>
                
            </div>
            
        </div>
        <div class="double-hr">
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="content">
            
            
                <h3 style="margin:10px 0 0 0; padding:0;">Daftar Aktiva Tetap Perwakilan Kisaran</h3>
                <h4 style="margin:0; padding:0;">Lokasi Aktiva: <?= $lokasi->nama_lokasi?></h4>            
            
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Merk</th>
                        <th>Asal</th>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                        <th>Nomor Aktiva</th>
                        <th>Lokasi Aktiva</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $no=1; foreach ($activa as $key ) { ?>
                    <tr>
                        <?php
							$data_barang = $this->db->get_where('tbl_barang',['id_barang' => $key->id_barang]);
							$deteail_barang = $data_barang->row();

						?>
                        <td><?= $no; ?></td>
                        <td><?= $deteail_barang->jenis_barang; ?></td>
                        <td><?= $deteail_barang->merk; ?></td>
                        <td><?= $key->asal; ?></td>
                        <td><?= $key->tahun; ?></td>
                        <td><?= $key->jumlah; ?></td>
                        <td><?= $key->nomor_aktiva; ?></td>
                        <td><?= $lokasi->nama_lokasi ?></td>
                        <td><?= $key->ket; ?></td>
                    </tr>
				    <?php $no++; } ?>

                    
                </tbody>
            </table>
                <h4 style="margin:0; padding:0;"><span id="currentDate"></span></h4>

        </div>

    
</div>

<div style="display: flex; justify-content: space-between; align-items: first baseline;">

    <div class="signature">
        <p class="signature-p" style="margin-bottom: 70px">Kepala Perwakilan</p>
        <p class="signature-p"><?= $kepala ?></p>
    </div>

    <div class="signature" style="width: 300px; text-align: center;">
        <p style="padding: 0; margin:0; text-align: center;"><strong>Lokasi       : </strong></p>
        <p style="padding: 0; margin:0; text-align: center;"><span><?= $lokasi->nama_lokasi ?></span></p>
        <img width="100" src="../../qrcode/<?= $lokasi->qrcode ?>" alt="QrCode: <?= $lokasi->qrcode ?>">
        <p style="padding: 0; margin:0; text-align: center;"><strong>Link Maps    : </strong></p>
        <p style="padding: 0; margin:0; text-align: center;"><?= $lokasi->link_maps ?></p>
        
    </div>

    <div class="signature" style="margin-top: 20px;">
        <p class="signature-p" style="margin-bottom: 70px">Staf Administrasi</p>
        <p class="signature-p"><?= $staf ?></p>
    </div>

</div>        
        
</body>



<script>
    // Mengisi tanggal hari ini
    var currentDate = new Date();
    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById("currentDate").textContent = currentDate.toLocaleDateString('id-ID', options);

    window.print()

    // window.onload = function() {
    // setTimeout(function() {
    // window.print();
    // }, 1500); // 500 milidetik (5 detik)
    // };

</script>

</html>