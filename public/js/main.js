// Frontend main validation

(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
})();

// Show/hide password
$(document).ready(function(){
    $('button').attr('disabled',false);
    var check = $('.check');
    $(check).click(function(){
        // console.log($(this), 'click');
        var x = $(this).prev('input');
        if ($(x).attr('type') === "password") {
            $(x).attr('type', 'text');
        } else {
            $(x).attr('type', 'password');
        }
    });
});
