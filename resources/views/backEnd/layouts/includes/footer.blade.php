
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> Developerd By<a target="_blank" href="https://www.gatewayit.net/"> Gateway IT</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark right-sidebar" style="background: url({{asset('public/backEnd/images/sidebar.jpg')}});background-size: cover;background-position: center;background-repeat: no-repeat;padding: 20px 0">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
              <img src="{{asset('public/backEnd/images/sign-out.png')}}">
              <p>Logout</p>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
            </a>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="{{url('password/change')}}" class="nav-link">
             <img src="{{asset('public/backEnd/images/key.png')}}">
              <p>Change Password</p>
            </a>
          </li>
          <!-- nav item end -->
      </ul>
    </nav>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backEnd')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backEnd')}}/../../../../code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backEnd')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="{{asset('public/backEnd')}}/../../../../cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('public/backEnd')}}/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public/backEnd')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{asset('public/backEnd')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('public/backEnd')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backEnd')}}/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backEnd')}}/../../../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('public/backEnd')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{asset('public/backEnd')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/backEnd')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{asset('public/backEnd')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('public/backEnd')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backEnd')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backEnd')}}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backEnd')}}/dist/js/demo.js"></script>
<!-- toastr js -->
<script src="{{asset('public/backEnd')}}/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
  <script src="{{asset('public/backEnd/')}}/plugins/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/backEnd/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
</body>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Sep 2018 07:33:22 GMT -->
</html>
