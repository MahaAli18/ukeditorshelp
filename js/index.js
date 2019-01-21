<script>


$('#form-of-email').on('submit', function(event) {
 event.preventDefault(); //stops form on submit
  var formData = {};
  $.each($("#form-of-email").serializeArray(), function (i, field) {
    formData[field.name] = field.value;
  });
  $.ajax({
  url: 'form-bk.php',
  data: formData,
  method:'POST',
  success: function(response) { 
   $(this).hide(); //sets css display:none to form
   var message = "Thank you people!";  
   $('.container-fluid').html(message);
   }
});    

});
</script>