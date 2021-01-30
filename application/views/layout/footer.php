</div>
</div>

<script src="<?= base_url('template/'); ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/jqueryui/jquery-ui.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/feather-icons/feather.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('template/'); ?>assets/js/dashforge.js"></script>
<script src="<?= base_url('template/'); ?>assets/js/dashforge.aside.js">
// <script src="<?= base_url('template/'); ?>assets/js/dashforge.settings.js">
</script>
<script src="<?= base_url('template/'); ?>lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/select2/js/select2.min.js"></script>
<script src="<?= base_url('template/'); ?>lib/cleave.js/cleave.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?= $js = (isset($header['js_file']) ? '<script src="' . base_url('template/assets/js/cbt/' . $header['js_file'] . '.js') . '"></script>' : '') ?>

<script type="text/javascript">
var t = $('.dtable').DataTable({
    responsive: false,
    "bLengthChange": false,
    language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
    }
});

$('.dtp_cari').on('keyup', function() {
    t.search(this.value).draw();
});

$('.hapus').click(function() {
    Swal.fire({
        title: 'Peringatan',
        text: "Apakah Anda yakin akan menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus saja!',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = $(this).data('href');
        }
    })
})

$('.select2').select2({
    placeholder: 'Pilih',
    allowClear: true
});

$('.goToSelectedUrl').on('change', function() {
    href = $(this).data('href') + this.value
    window.location.href = href;
});

$('.date').datepicker({
    dateFormat: "dd-mm-yy"
});
</script>
</body>

</html>