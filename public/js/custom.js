// Script to open and close sidebar
$(document).ready(function(){
     setTimeout(function(){
      $('#myAlert').hide('fade in');
     }, 3000);
});


$(document).ready(function(){
     setTimeout(function(){
      $('#myLogin').hide('fade in');
     }, 3000);
});


$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
    e.preventDefault();
    var $form=$(this);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
    });
});