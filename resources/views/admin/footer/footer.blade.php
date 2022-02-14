
<script src="{!! asset('admin/vendors/js/vendor.bundle.base.js ')!!}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{!! asset('admin/vendors/chart.js ')!!}/Chart.min.js ')!!}"></script>
  <script src="{!! asset('admin/vendors/datatables.net/jquery.dataTables.js ')!!}"></script>
  <script src="{!! asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js ')!!}"></script>
  <script src="{!! asset('admin/js/dataTables.select.min.js ')!!}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{!! asset('admin/js/off-canvas.js ')!!}"></script>
  <script src="{!! asset('admin/js/hoverable-collapse.js ')!!}"></script>
  <script src="{!! asset('admin/js/template.js ')!!}"></script>
  <script src="{!! asset('admin/js/settings.js ')!!}"></script>
  <script src="{!! asset('admin/js/todolist.js ')!!}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{!! asset('admin/js/dashboard.js ')!!}"></script>
  <script src="{!! asset('admin/js/Chart.roundedBarCharts.js ')!!}"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript">
    $('.comment_duyet_btn').click(function(){
      
        var comment_status = $(this).data('comment_status');

        var comment_id = $(this).data('comment_id');
        var comment_product_id = $(this).attr('id');
        if(comment_status==1){
         
            var alert = 'Thay đổi thành duyệt thành công';
        }else{
            var alert = 'Thay đổi thành không duyệt thành công';
        }
          $.ajax({
                url:"{{route('allow_comment')}}",
                method:"POST",

                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    location.reload();
                   $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>');

                }
            });


    });
   
</script>