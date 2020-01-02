$( ".modal" ).on('shown.bs.modal', function(){
    return $(".question-mark.email").attr('hidden',true);
});
  
$( ".modal" ).on('hidden.bs.modal', function(){
    return $(".question-mark.email").attr('hidden',false);
});

$("#job_type").on('change', function(){
  if(this.value == 'Freelance') {
  $("fieldset").fadeIn('slow');
  $("#dura").fadeIn('slow');
  $( "#month-1" ).prop( "checked", true );
  $( "#month-perm" ).prop( "checked", false );
  }
  if(this.value == 'Permanent') {
  $("fieldset").fadeOut('slow');
  $("#dura").fadeOut('slow');
  $( "#month-perm" ).prop( "checked", true );
  }
});