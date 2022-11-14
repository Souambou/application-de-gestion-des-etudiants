$('#register.user').click(function(){
   let nom = $('#nom').val();
   let prenom=$('#prenom').val();
   let email=$('#email').val();
   let password1=$('#password1').val();
   let password2=$('#password2').val();

   
   if(nom != "" ){
      alert("working");
   } else{
         $('#nom').addClass('is-invalid');
    }
     
})


