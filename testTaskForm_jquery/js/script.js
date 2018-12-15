(function($){
  $(function(){

    //for validate
    function validateBootstrap(button){
      button.parents('form').addClass('was-validated') //это класс бутстрапа для валидации
      var requiredInputs=button.parents('form').find('input:required')
      for (var i = requiredInputs.length - 1; i >= 0; i--) {
        if (!requiredInputs.eq(i).parent().has('.invalid-feedback').length) {
          requiredInputs.eq(i).parent().append('<div class="invalid-feedback">Please enter '+requiredInputs.eq(i).attr('name')+'</div>')
          console.log(requiredInputs.eq(i).attr('name'))
        }
      }      
    }

    $('[type="submit"]').click(function(event){
      validateBootstrap($(this))
    })
    // for validate end

    //for resume
    function getResume(stepForm){
      var allFormGroups=$(stepForm).find('.form-group')
      for (var i = 0; i < allFormGroups.length; i++) {
        var label=allFormGroups.eq(i).find('label:first-child') 
        var element=allFormGroups.eq(i).find('[name="'+label.attr('for')+'"]')
        if (allFormGroups.eq(i).find('input').attr('type')=='radio') {
          element=allFormGroups.eq(i).find('[name="'+label.attr('for')+'"]:checked')       
        } 
        $('.resume').append(label.text()+' : '+element.val()+'<br>')
        stepForm.addClass('d-none')
      }
    } //логика завязана на том, что в этом документе, атрибут for у тега <label> равняется аттрибуту name у соответствующего элемента формы

    $('form#step1').submit(function(event){
      event.preventDefault()
      getResume($(this))
      $('form#step2').removeClass('d-none')     
    })

    $('form#step2').submit(function(event){
      event.preventDefault()
      getResume($(this))
      $('.resume').removeClass('d-none')    
    })
    
    //for resume end


  })
})(jQuery)            
   