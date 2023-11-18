<script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/admin/js/vendor/bootstrap.min.js') }}"></script>
<!--  chartJs js  -->
<script src="{{ asset('assets/admin/js/vendor/chartJs/Chart.bundle.js') }}"></script>
<!--timeline_horizontal-->
<script src="{{ asset('assets/admin/js/vendor/jquery.mobile.custom.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/hTimeline.js') }}"></script>
<!-- amcharts -->
<script src="{{ asset('assets/admin/js/vendor/amcharts/amcharts.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/serial.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/pie.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/gantt.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/funnel.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/radar.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/amstock.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/ammap.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/worldLow.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/amcharts/light.js') }}"></script>
<!-- Peity -->
<script src="{{ asset('assets/admin/js/vendor/peityJs/jquery.peity.min.js') }}"></script>
<!-- fullcalendar -->
<script src="{{ asset('assets/admin/js/vendor/lib/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/lib/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/fullcalendar.min.js') }}"></script>
<!-- icheck -->
<script src="{{ asset('assets/js/vendor/icheck.js') }}"></script>
<!-- dataTables-->
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/dataTables.bootstrap.min.js') }}"></script>
<!-- js for print and download -->
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/dataTables.fixedHeader.min.js') }}"></script>
<!-- dashboard1 js -->
<script src="{{ asset('assets/admin/js/dashboard1.js') }}"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="{{ asset('assets/admin/js/vendor/jquery.slimscroll.js') }}"></script>
<!-- pace js -->
<script src="{{ asset('assets/admin/js/vendor/pace/pace.min.js') }}"></script>
<!-- main js -->admin/
<script src="{{ asset('assets/admin/js/main.js') }}"></script>
<!-- adminbag demo js-->
<script src="{{ asset('assets/admin/js/adminbagdemo.js') }}"></script>
@yield('scripts')
<!-- start theme config -->
  <div class="theme-config">
    <div class="theme-config-box">
      <div class="spin-icon"> <i class="fa fa-cogs fa-spin"></i> </div>
      <div class="skin-setttings">
        <div class="title">Configuration</div>
        <div class="setings-item"> <span> Collapse menu </span>
          <div class="switch">
            <div class="onoffswitch">
              <input name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu" type="checkbox">
              <label class="onoffswitch-label" for="collapsemenu">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
            </label>
            </div>
          </div>
        </div>
        <div class="setings-item"> <span> Fixed sidebar </span>
          <div class="switch">
            <div class="onoffswitch">
              <input name="fixedsidebar" class="onoffswitch-checkbox" id="fixedsidebar" type="checkbox">
              <label class="onoffswitch-label" for="fixedsidebar">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
            </label>
            </div>
          </div>
        </div>
        <div class="setings-item"> <span> Header Fixed </span>
          <div class="switch">
            <div class="onoffswitch">
              <input name="headerfixed" class="onoffswitch-checkbox" id="headerfixed" type="checkbox" checked>
              <label class="onoffswitch-label" for="headerfixed">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
            </label>
            </div>
          </div>
        </div>
        <div class="setings-item"> <span> Boxed layout </span>
          <div class="switch">
            <div class="onoffswitch">
              <input name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout" type="checkbox">
              <label class="onoffswitch-label" for="boxedlayout">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
            </label>
            </div>
          </div>
        </div>
        <div class="setings-item"> <span> Fixed footer </span>
          <div class="switch">
            <div class="onoffswitch">
              <input name="fixedfooter" class="onoffswitch-checkbox" id="fixedfooter" type="checkbox">
              <label class="onoffswitch-label" for="fixedfooter">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
            </label>
            </div>
          </div>
        </div>
         <div class="setings-item viewAllThemes"> <span class="skin-name"> <a href="#"> View All Themes </a> </span> </div>
 <div class="setings-item gohome "> <span class="skin-name"> <a href=""> Go to Lending Page </a> </span> </div>
      </div>
    </div>
  </div>
  <!-- end theme config -->
<!-- start theme View -->
<div class="request-form ng-scope">
  <div class="col-md-12">
    <div class="crossrightsingle"> <a href="#" class="closeForm"></a> </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>All Adminbag Themes</h2>
        <hr class="small custom">
      </div>
    </div>
    <!-- /.row -->
    <div class="hover14 column row">
      <div class="col-lg-4"> <a href="">
        <figure><img alt="" class="img-responsive" src="{{ asset('assets/admin/lendingPage/img/themes/aqua-black.jpg') }}"><samp class="viewDemo">View Demo</samp> </figure>
        <span>Aqua Black</span> </a> </div>
      <div class="col-lg-4"> <a href="">
        <figure><img alt="" class="img-responsive" src="{{ asset('assets/admin/lendingPage/img/themes/dark.jpg') }}"><samp class="viewDemo">View Demo</samp> </figure>
        <span>Dark</span> </a> </div>
      <div class="col-lg-4"> <a href="">
        <figure><img alt="" class="img-responsive" src="{{ asset('assets/admin/lendingPage/img/themes/dark-blue.jpg') }}"><samp class="viewDemo">View Demo</samp> </figure>
        <span>Dark Blue</span> </a> </div>
    </div>
    <div class="hover14 column row">
      <div class="col-lg-4"> <a href="">
        <figure><img alt="" class="img-responsive" src="{{ asset('assets/admin/lendingPage/img/themes/light.jpg') }}"><samp class="viewDemo">View Demo</samp> </figure>
        <span>Light</span> </a> </div>
      <div class="col-lg-4"> <a href="">
        <figure><img alt="" class="img-responsive" src="{{ asset('assets/admin/lendingPage/img/themes/red-black.jpg') }}"><samp class="viewDemo">View Demo</samp> </figure>
        <span>Red Black</span> </a> </div>
      <div class="col-lg-4"> <a href="index.html">
        <figure><img alt="" class="img-responsive" src="{{ asset('assets/admin/lendingPage/img/themes/white-blue.jpg') }}"><samp class="viewDemo">View Demo</samp> </figure>
        <span>Green Blue</span> </a> </div>
    </div>
    <!-- /.container -->
  </div>
</div>
<!-- End theme View -->
</body>

<!-- Mirrored from adminbag-v1.3.bittyfox.com/default/green-blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2023 17:46:48 GMT -->
</html>
