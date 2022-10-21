
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('')); ?>vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="title">
        Accounts
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Akun Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <?php echo e($dataTable->table()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAction" tabindex="-1" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('')); ?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo e(asset('')); ?>vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('')); ?>vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <?php echo e($dataTable->scripts()); ?>


    <script>
        const modal = new bootstrap.Modal($('#modalAction'));
        $('#userdatatable-table').on('click','.action', function(){
            let data = $(this).data()
            let id = data.id
            let jenis = data.jenis

            $.ajax({
                method: 'get',
                url: "<?php echo e(url('users/')); ?>/" + id + "/edit",
                success: function(res){
                    $('#modalAction').find('.modal-dialog').html(res);
                    modal.show()
                }
            })
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Developement\DigiPosyandu\resources\views/users/index.blade.php ENDPATH**/ ?>