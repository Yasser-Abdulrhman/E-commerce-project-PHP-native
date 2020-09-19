  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="includes/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="includes/js/bootstrap.min.js"></script>
     <!-- Display List Or Grid -->
    <script>
      $(document).ready(function() {
      $('#list').click(function(event){event.preventDefault();
      $('#products .item').addClass('list-group-item');});
      $('#grid').click(function(event){event.preventDefault();
      $('#products .item').removeClass('list-group-item');
      $('#products .item').addClass('grid-group-item');});
     });
</script>





 
  </body>
</html>
