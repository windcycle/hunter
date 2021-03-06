<style>
@media print {
    body {
        width: 21cm;
        height: 29.7cm;
        /* font-size: x-small; */
        /* margin: 10mm 10mm 10mm 10mm;  */
        /* change the margins as you want them to be. */
    }

    /* footer {
        page-break-after: always.
    } */
}

table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14;
}

tr.header {
    border-bottom: 1pt solid black;
    padding: 10px;
}

table.kop {
    font-size: 13;
}

td {
    padding: 3px;
}

.cLeft {
    width: 93px;
}

.cRight {
    width: 170px;
}

.cCenter {
    width: 76px;
}

.column {
    float: left;
    border-style: solid;
    border-width: 2px;
    width: 10cm;
    margin-right: 7px;
    margin-bottom: 10px;
    /* padding: 3px; */
}
</style>

<body>
    <div class="row">
        <?php 
            $last = count($data);
            foreach ($data as $k => $v): 
                // echo $tick = ($k < 10) ? "0$k" : $k;
        ?>
        <div class="column">
            <table>
                <tr class="header">
                    <td colspan="3">
                        <table class="kop">
                            <tr>
                                <td><img src="../../../upload/logo2.png" alt="" height="40px"></td>
                                <td align="center"><strong>KARTU PESERTA UJIAN <br>
                                        UJIAN SEKOLAH BERBASIS KOMPUTER <br>
                                        TAHUN PELAJARAN 2021/2022</strong></td>
                                <td><img src="../../../upload/logo.png" alt="" height="40px"></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td rowspan="5" align="center" class='cLeft'><img src="../../../upload/logo3.png" alt=""
                            height="60px"></td>
                    <td>Nama</td>
                    <td><?=ucwords(strtolower(substrwords($v['name'], 25)));?></td>
                </tr>

                <tr>
                    <td class='cCenter'>NISN</td>
                    <td class='cRight'><?=$v['nisn'];?></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><?=$v['pass_siswa'];?></td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td><?=$v['grade'];?></td>
                </tr>

                <tr>
                    <td>Sesi / Ruang</td>
                    <td><?=$v['order'];?> / Ruang <?=$v['room'];?></td>
                </tr>

                <tr>
                    <td coslpan=''></td>
                    <td coslpan=''></td>
                    <td align='center'>
                        Kepala Sekolah<br><br><br>
                        <strong><?=$headmaster['headmaster'];?><br>
                        <?php if ($headmaster['nip']): ?>
                            NIP. <?=$headmaster['nip'];?></strong </td>
                        <?php endif;?>
                </tr>
            </table>
        </div>
        <?php if (((($k+1) % 8) == 0) && $k > 0 && $k != ($last - 1)): ?>
        <hr>
        <div style="page-break-before:always;"></div>
        <?php endif;?>
        <?php endforeach;?>
    </div>
</body>