<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<!-- <script src="<?= base_url('assets/'); ?>vendor/js/sb-admin-2.min.js"></script> -->
<script src="<?= base_url() ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/sweetalert2/sweetalert.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/sweetalert2/myscript.js"></script>
<script src="<?= base_url() ?>assets/vendor/ui/jquery-ui.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->


<script>
    var Nato = $('#flash1').data('flash');
    if (flash) {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'success',
            text: flash,
            showConfirmButton: false,
            timer: 3000
        })
    }
</script>
<script type='text/javascript'>
    $(document).ready(function() {

        $("#kecamatan").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "<?= base_url() ?>auth/userList",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                // Set selection
                $('#kecamatan').val(ui.item.label); // display the selected text
                $('#judul').val(ui.item.value); // save selected id to input
                $('#alamatwebsite').val(ui.item.value1); // save selected id to input
                $('#tlpwebsite').val(ui.item.value2); // save selected id to input
                $('#websiterumahsakit').val(ui.item.value3); // save selected id to input
                $('#alamatemail').val(ui.item.value4); // save selected id to input
                return false;
            },
            focus: function(event, ui) {
                $("#kecamatan").val(ui.item.label);
                $("#judul").val(ui.item.value);
                $("#alamatwebsite").val(ui.item.value1);
                $("#tlpwebsite").val(ui.item.value2);
                $("#websiterumahsakit").val(ui.item.value3);
                $("#alamatemail").val(ui.item.value4);
                return false;
            },
        });

    });
</script>

</body>

</html>