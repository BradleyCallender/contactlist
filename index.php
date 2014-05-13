<!DOCTYPE HTML>
<html>
    <head>
        <title>Easy Web Contact List+</title>
		<!----------Style Sheet------------>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
		<link rel="stylesheet" type="text/css" href="css/pace.css" />
		<link rel="stylesheet" type="text/css" href="css/calculator.css" />
		
		<!---------Scripts---------------->
	    <script src="js/pace.js"></script>
		<script src="js/calculator.js"></script>
		    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
	<script language="javascript" type="text/javascript"> 
function closeWindow() { 
window.open('','_parent',''); 
window.close(); 
} 
</script>

<script>

</script>
    </head>
	
	
<body>

<div id='header'>
<div class='logo'>Easy Web Contact List+</div>
<div class='search'>
<form action="http://www.google.com/search" method="get" accept-charset="utf-8" autocomplete="off" class="gen-search">
                            <input type="hidden" name="source" value="e6a5f261" x-webkit-speech="">
	                        <input type="text" name="q" value="" placeholder="Search: Google" class="searchalt" size="" x-webkit-speech="">
	                        
	                    </form>
</div>
  <button type="" class="leavesite closelist"
        onclick="window.open('', '_self', ''); window.close();"><i class='leavesite'></i>Close ContactList</button>
</div>

<div id='rightpanel'>
<div class='rightboxtitle'>Control Panel</div>

<div style='margin:10px 0 .5em 0;'>
    
    <div id='viewallcontacts' class='mcbutton viewcontacts'>Main Contact List</div>

    
    <div id='addnewcontact' class='addcontact addnu'> Add A New Contact</div>
	
	<div id='addnewcontact' class='aboutbutton abouttray'> About This App</div>

    
    <div style='clear:both;'></div>
	
	<div id='notepad'>
<div class='notepadtitle'>My Note Pad</div>

<textarea rows="10" cols="35">

</textarea>



<div style='clear:both;'></div>
	
	
</div>

<div style='clear:both;'></div>

<div id='timebox'>
<div class='timeboxtitle'>Current Date and Time</div>
 <span style="color:white; font-weight:bold; font-size:14px; line-height:2;">
Current Date:
<script type="text/javascript">
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(month + "/" + day + "/" + year)
</script>
</span>

<br> </br>
 <span style="color:white; font-weight:bold; font-size:14px;">
Current Local Time:
 <script type="text/javascript">
var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes
}
document.write(hours + ":" + minutes + " ")
if(hours > 11){
document.write("PM")
} else {
document.write("AM")
}
</script>
</span>

<br> </br>
<span style="color:white; font-weight:bold; font-size:14px;">
Current Location:
<script>
$.get("http://ipinfo.io", function (response) {
    $("#address").html("" + response.city + ", " + response.region);
}, "jsonp");
</script>
<div id='address'></div>
</span>
 </div>
</div>


</div>

</div>
<div id='pageContent' class='tip'>


</div>



  <table class="calculator" id="calc">
            <tr>
                <td colspan="4" class="calc_td_result">
                    <input type="text" readonly="readonly" name="calc_result" id="calc_result" class="calc_result" onkeydown="javascript:key_detect_calc('calc',event);" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" />
                </td>
            </tr>
                        <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" />
                </td>
            </tr>
        </table>
        <script type="text/javascript">
                document.getElementById('calc').onload=init_calc('calc');
        </script>
		
		
  <div id='aboutinfo'>
 <p> Easy Web Contact+ is a contact list application with a built in notepad, calculator,country date,time and location information.  It is basically a desktop with quick access tools to the internet. </p>
 </div>
 
 
 <div style='clear:both;'></div>
 

 






 

 <div style='clear:both;'></div>

 


<script src='js/jquery-1.9.1.js'></script>

<script type='text/javascript'>
$(document).ready(function(){
    
    
    $('').show();
    showcontacts();
    

    $('#viewallcontacts').click(function(){
        showcontacts();
    });
    
    $('#addnewcontact').click(function(){
        shownewcontactForm();
    });

    $(document).on('click', '.editBtn', function(){ 
    
        var user_id = $(this).closest('td').find('.userId').text();
        console.log(user_id);
        setTimeout("$('#pageContent').load('update_form.php?user_id=" + user_id + "', function(){ $('#loaderImage').hide(); });",1000);
        
    }); 
 
	
	
 $(document).on('click', '.deleteBtn', function(){ 
  if(confirm('Are you sure you want to remove this contact for your list?')){
  var user_id = $(this).closest('td').find('.userId').text();      
  $.post("delete.php", { id: user_id })
   .done(function(data) {             
   console.log(data);                                 
     showcontacts();  
                });

        }
    });
    
	$(".aboutbutton").click(function() {
    jQuery("#aboutinfo").toggle("slow");
});

    
     $(document).on('submit', '#addcontactform', function() {

        $.post("create.php", $(this).serialize())
            .done(function(data) {
               
                showcontacts();
            });
                
        return false;
    });
    
	$('.addtofavs').on('click', function() { 
    $('#favorite').append('<span class="fav">'+$(this).parent('td').prev().text()+'</span>'); 
  });
  $(document).on('mouseover','.fav', function() {
    $(this).prepend('<span class="rem">Remove</span>');        
  }).on('mouseleave','.fav', function() {
      $('.rem').remove();
  });
  $(document).on('click','.rem', function() {
    $(this,'.rem').parent().remove();
  });
	
     $(document).on('submit', '#updatecontactform', function() {

        

        $.post("update.php", $(this).serialize())
            .done(function(data) {
            
                showcontacts();
            });
                
        return false;
    });
    
});


function showcontacts(){

    setTimeout("$('#pageContent').load('read.php', function(){ $('#loaderImage').hide(); });", 1000);
}


function shownewcontactForm(){
   
    setTimeout("$('#pageContent').load('create_form.php', function(){ $('').hide(); });",1000);
}


</script>

</body>
</html>