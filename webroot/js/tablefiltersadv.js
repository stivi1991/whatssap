var locations = [];
var modules = [];
var countries = [];
var functions = [];
var levels = [];
var types = [];
var country_but = [];
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

 $('.table tr').show();
  
if (lock === false){
    lock = true;
}


if (lock === true) {
  
    if($(this).data('target-location')!==undefined) {
    var $selected_location = jQuery.inArray($(this).data('target-location'), locations);
    var $selected_country_but = jQuery.inArray($(this).data('country'), country_but);
    }
    if($(this).data('target-module')!==undefined) {
    var $selected_module = jQuery.inArray($(this).data('target-module'), modules);
    }
    if($(this).data('target-country')!==undefined) {
    var $selected_country = jQuery.inArray($(this).data('target-country'), countries);
    }
    if($(this).data('target-func')!==undefined) {
    var $selected_func = jQuery.inArray($(this).data('target-func'), functions);
    }
    if($(this).data('target-level')!==undefined) {
    var $selected_level = jQuery.inArray($(this).data('target-level'), levels);
    }
    if($(this).data('target-type')!==undefined) {
    var $selected_type = jQuery.inArray($(this).data('target-type'), types);
    }

  
if($selected_country!==undefined){
    if ($selected_country != -1 && !$selected_country !== undefined) {
            $(this).css('background-color', '#675682', '!important');
            $(this).css('border-color', '#675682', '!important');
            countries.splice($selected_country, 1);
        } else {
            $(this).css('background-color', '#e52a6f', '!important');
            $(this).css('border-color', '#e52a6f', '!important');
            countries.push($(this).data('target-country'));
            country_but.splice(country_but.indexOf($selected_country, 1));
        }
}  

if($selected_location!==undefined){
    if ($selected_location != -1) {
            $(this).css('background-color', '#675682', '!important');
            $(this).css('border-color', '#675682', '!important');
            locations.splice($selected_location, 1);
        if($selected_country_but != -1){
            country_but.splice(country_but.indexOf($selected_country_but, 1));
          }
        } else {
            $(this).css('background-color', '#e52a6f', '!important');
            $(this).css('border-color', '#e52a6f', '!important');
            locations.push($(this).data('target-location'));
            country_but.push($(this).attr('data-country'));
        }
}


if($selected_module!==undefined){
    if ($selected_module != -1 && !$selected_module !== undefined) {
            $(this).css('background-color', '#675682', '!important');
            $(this).css('border-color', '#675682', '!important');
            modules.splice($selected_module, 1);
        } else {
            $(this).css('background-color', '#e52a6f', '!important');
            $(this).css('border-color', '#e52a6f', '!important');
            modules.push($(this).data('target-module'));
        }
}


if($selected_func!==undefined){
    if ($selected_func != -1 && !$selected_func !== undefined) {
            $(this).css('background-color', '#675682', '!important');
            $(this).css('border-color', '#675682', '!important');
            functions.splice($selected_func, 1);
        } else {
            $(this).css('background-color', '#e52a6f', '!important');
            $(this).css('border-color', '#e52a6f', '!important');
            functions.push($(this).data('target-func'));
        }
}
  
if($selected_level!==undefined){
    if ($selected_level != -1 && !$selected_level !== undefined) {
            $(this).css('background-color', '#675682', '!important');
            $(this).css('border-color', '#675682', '!important');
            levels.splice($selected_level, 1);
        } else {
            $(this).css('background-color', '#e52a6f', '!important');
            $(this).css('border-color', '#e52a6f', '!important');
            levels.push($(this).data('target-level'));
        }
}
  
if($selected_type!==undefined){
    if ($selected_type != -1 && !$selected_type !== undefined) {
            $(this).css('background-color', '#675682', '!important');
            $(this).css('border-color', '#675682', '!important');
            types.splice($selected_type, 1);
        } else {
            $(this).css('background-color', '#e52a6f', '!important');
            $(this).css('border-color', '#e52a6f', '!important');
            types.push($(this).data('target-type'));
        }
}

else {
  
if(countries.length>0){
$('.table tr:visible').each(function(tr) {
    if(jQuery.inArray($(this).attr('data-country'),countries)== -1
      ) {
        $(this).hide();
    }
});
}

if(locations.length>0){
$('.table tr:visible').each(function(tr) {
    if(jQuery.inArray($(this).attr('data-location'),locations)== -1
      ) {
        $(this).hide();
    }
});
}

if(modules.length>0){
$('.table tr:visible').each(function(tr) {
    if(jQuery.inArray($(this).attr('data-module'),modules)== -1
      ) {
        $(this).hide();
    }
});
}

if(functions.length>0){
$('.table tr:visible').each(function(tr) {
    if(jQuery.inArray($(this).attr('data-func'),functions)== -1
      ) {
        $(this).hide();
    }
});
}
  
if(levels.length>0){
$('.table tr:visible').each(function(tr) {
    if(jQuery.inArray($(this).attr('data-level'),levels)== -1
      ) {
        $(this).hide();
    }
});
}
  
if(types.length>0){
$('.table tr:visible').each(function(tr) {
    if(jQuery.inArray($(this).attr('data-type'),types)== -1
      ) {
        $(this).hide();
    }
});
}
  
  ///delay text update
  setTimeout(function() {
    update_text()
  }, 400);  
  
}
  
///button hide
if(countries.length>0 && $selected_country!==undefined){
  $(".filtered_locations").filter(function() {
    if((jQuery.inArray($(this).attr('data-country').toLowerCase().replace(' ',''),countries)) > -1 || (jQuery.inArray($(this).attr('data-country').toLowerCase().replace(' ',''),country_but) > -1))  {
      $(this).attr("disabled", false).fadeTo(300,1);
    } else {
      $(this).attr("disabled", true).fadeTo(300,0.2);
    }     
    });
} else if(countries.length===0) {
  $(".filtered_locations").filter(function() {
    $(this).attr("disabled", false).fadeTo(300,1);
  });
}

if(locations.length>0 && $selected_country===undefined){
  $(".filtered_countries").filter(function() {
      if((jQuery.inArray($(this).attr('data-target-country').toLowerCase().replace(' ',''),countries) > -1) || (jQuery.inArray($(this).attr('data-target-country').toLowerCase().replace(' ',''),country_but) > -1))  {
      $(this).attr("disabled", false).fadeTo(300,1);
    } else {
      $(this).attr("disabled", true).fadeTo(300,0.2);
    }     
    });
} else if(locations.length===0) {
  $(".filtered_countries").filter(function() {
    $(this).attr("disabled", false).fadeTo(300,1);
  });
  ///show all countries
}


}

});
  
});