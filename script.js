/*$("#form-submit").click(function(){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});
function submitForm(){
    // Initiate Variables With Form Content
    $("#form-submit").attr("hidden");
    var fname = $("#fname").val();
    var lname =$("#lname").val();
    var password=$("#password").val();
    var email = $("#email").val();
    var dob=$("#date").val();
    var number=$("#number").val();
    $.ajax({
        type: "POST",
        url: "process.php",
        data: "fname=" + fname + "&lname=" + lname + "&password=" + password + "&email=" + email + "&number="+number+"&dob=" + dob,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
    alert("Congratulations! You have successfully registered with us.\nPlease login to proceed");
    window.location.href="index.php#login";
}*/
$('document').ready(function()
{
/* validation */
$("#register-form").validate({
rules:
{
password: {
required: true,
minlength: 8,
maxlength: 15
},
cpassword: {
required: true,
equalTo: '#password'
}
},
messages:
{
]
},
submitHandler: submitForm
});
/* validation */

/* form submit */
$('#btn-submit').click(function()
{
var data = $("#register-form").serialize();

$.ajax({

type : 'POST',
url  : 'process.php',
data : data,
beforeSend: function()
{
$("#error").fadeOut();
$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending …');
},
success :  function(data)
{
if(data==1){

$("#error").fadeIn(1000, function(){

$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

});

}
else if(data=="registered")
{

$("#btn-submit").html('Signing Up');
setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("successreg.php"); }); ',5000);

}
else{

$("#error").fadeIn(1000, function(){

$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

});

}
}
});
return false;
}
/* form submit */

});