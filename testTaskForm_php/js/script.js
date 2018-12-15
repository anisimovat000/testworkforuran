(function($){
  $(function(){

    //for validate
    $('[type="submit"]').click(function(event){
      $(this).parents('form').addClass('was-validated') //это класс бутстрапа для валидации
      var requiredInputs=$(this).parents('form').find('input:required')
      for (var i = requiredInputs.length - 1; i >= 0; i--) {
        if (!requiredInputs.eq(i).parent().has('.invalid-feedback').length) {
          requiredInputs.eq(i).parent().append('<div class="invalid-feedback">Please enter '+requiredInputs.eq(i).attr('name')+'</div>')
          console.log(requiredInputs.eq(i).attr('name'))
        }
      }
    })

  })
})(jQuery)            
   