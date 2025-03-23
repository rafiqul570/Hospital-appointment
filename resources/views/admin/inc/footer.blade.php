  <!-- CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- LIB -->
    <script src="{{asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('backend/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('backend/lib/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backend/lib/medium-editor/medium-editor.js')}}"></script>
    <script src="{{asset('backend/lib/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('backend/js/starlight.js')}}"></script>
    <script src="{{asset('backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backend/js/dashboard.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>
   

    <script>
      new DataTable('#datatable', {
       scrollX: true
      });
    </script>

  </body>
</html>


