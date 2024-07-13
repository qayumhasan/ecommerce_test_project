  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Toggle sidebar function for mobile view
    $(document).ready(function() {
      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('open');
      });
    });
  </script>
</body>
</html>