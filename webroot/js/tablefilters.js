var locations = [];
var modules = [];
lock = false;

function update_text() { 
    lock = false;
    var numOfVisibleRows = $('.table tr:visible').length;
        if (numOfVisibleRows == 1) {
            $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offer').fadeTo( 200, 100 );
        } else {
            $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offers').fadeTo( 200, 100 );
        }
}  

$(document).ready(function() {


$('.btn-filter').on('click', function() {

 $("#jobcounter").fadeTo( 200, 0 );
  
if (lock === false){
    lock = true;
}


if (lock === true) {
  
    if($(this).data('target-location')!==undefined) {
    var $selected_location = jQuery.inArray($(this).data('target-location'), locations);
    }
    if($(this).data('target-module')!==undefined) {
    var $selected_module = jQuery.inArray($(this).data('target-module'), modules);
    }


if($selected_location!==undefined){
    if ($selected_location != -1) {
            $(this).css('background-color', '#e52a6f');
            $(this).css('border-color', '#e52a6f');
            locations.splice($selected_location, 1);
        } else {
            $(this).css('background-color', '#675682');
            $(this).css('border-color', '#675682');
            locations.push($(this).data('target-location'));
        }
}


if($selected_module!==undefined){
    if ($selected_module != -1 && !$selected_module !== undefined) {
            $(this).css('background-color', '#e52a6f');
            $(this).css('border-color', '#e52a6f');
            modules.splice($selected_module, 1);
        } else {
            $(this).css('background-color', '#675682');
            $(this).css('border-color', '#675682');
            modules.push($(this).data('target-module'));
        }
}


$('.table tr').css('display', 'none');

if(locations.length===0 && modules.length===0){
  $('.table tr').fadeIn('fast', function() { 
    lock = false;
    var numOfVisibleRows = $('.table tr:visible').length;
        if (numOfVisibleRows == 1) {
            $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offer').fadeTo( 200, 100 );
        } else {
            $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offers').fadeTo( 200, 100 );
        }
});
}

else {

i=1;
$('.table tr').each(function(tr) {

///all 
if(modules.length>0 && locations.length>0){
    if(jQuery.inArray($(this).attr('data-module'),modules)!= -1 && 
       jQuery.inArray($(this).attr('data-location'),locations)!= -1
      ) {
        $(this).fadeIn('fast');
    }
} 
 
  
///modules
else if(modules.length>0 && locations.length===0){
    if(jQuery.inArray($(this).attr('data-module'),modules)!= -1
      ) {
        $(this).fadeIn('fast');
    }
}

///locations
else if(locations.length>0 && modules.length===0){
    if(jQuery.inArray($(this).attr('data-location'),locations)!= -1
      ) {
        $(this).fadeIn('fast');       
    }
}

///delay text update
if(i == $('.table tr').length) { 
  setTimeout(function() {
    update_text()
  }, 200);  
}
  
i+=1;

});
   

}
  
}

});
  
});