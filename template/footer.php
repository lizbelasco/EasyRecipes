 <footer class="main-footer">
   <div class="pull-right hidden-xs">
     <b>Version</b> 1.0
   </div>
   <strong>Copyright &copy; 2023-2023 <a href="https://queretaro.tecnm.mx/">ITQ</a>.</strong> All rights
   reserved.
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Create the tabs -->
   <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
     <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
   </ul>
   <!-- Tab panes -->
   <div class="tab-content">
     <!-- Home tab content -->
     <div class="tab-pane" id="control-sidebar-home-tab">

       <ul class="control-sidebar-menu">
         <li>
           <a href="javascript:void(0)">





             <!-- /.control-sidebar-menu -->

     </div>
     <!-- /.tab-pane -->
     <!-- Stats tab content -->
     <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
     <!-- /.tab-pane -->
     <!-- Settings tab content -->
     <div class="tab-pane" id="control-sidebar-settings-tab">
       <form method="post">
         <h3 class="control-sidebar-heading">General Settings</h3>

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Report panel usage
             <input type="checkbox" class="pull-right" checked>
           </label>

           <p>
             Some information about this general settings option
           </p>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Allow mail redirect
             <input type="checkbox" class="pull-right" checked>
           </label>

           <p>
             Other sets of options are available
           </p>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Expose author name in posts
             <input type="checkbox" class="pull-right" checked>
           </label>

           <p>
             Allow the user to show his name in blog posts
           </p>
         </div>
         <!-- /.form-group -->

         <h3 class="control-sidebar-heading">Chat Settings</h3>

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Show me as online
             <input type="checkbox" class="pull-right" checked>
           </label>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Turn off notifications
             <input type="checkbox" class="pull-right">
           </label>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Delete chat history
             <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
           </label>
         </div>
         <!-- /.form-group -->
       </form>
     </div>
     <!-- /.tab-pane -->
   </div>
 </aside>
 <!-- /.control-sidebar -->
 <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?= $servidor; ?>bower_components/jquery/dist/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?= $servidor; ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
   $.widget.bridge('uibutton', $.ui.button);
 </script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?= $servidor; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!--Sweet-->
 <script src="<?= $servidor; ?>plugins/sweet/jquery.sweet-modal.js"></script>

 <!-- Morris.js charts -->
 <script src="<?= $servidor; ?>bower_components/raphael/raphael.min.js"></script>
 <script src="<?= $servidor; ?>bower_components/morris.js/morris.min.js"></script>
 <!-- Sparkline -->
 <script src="<?= $servidor; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
 <!-- jvectormap -->
 <script src="<?= $servidor; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="<?= $servidor; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="<?= $servidor; ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="<?= $servidor; ?>bower_components/moment/min/moment.min.js"></script>
 <script src="<?= $servidor; ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- datepicker -->
 <script src="<?= $servidor; ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
 <!-- Bootstrap WYSIHTML5 -->
 <script src="<?= $servidor; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
 <!-- Slimscroll -->
 <script src="<?= $servidor; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="<?= $servidor; ?>bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= $servidor; ?>dist/js/adminlte.min.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="<?= $servidor; ?>dist/js/pages/dashboard.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?= $servidor; ?>dist/js/demo.js"></script>
 </body>

 </html>

 <script>
   $("#Borrar").onclick(function() {
     $.sweetModal({
       content: 'This is a success.',
       icon: $.sweetModal.ICON_SUCCESS

     });

   });
 </script>