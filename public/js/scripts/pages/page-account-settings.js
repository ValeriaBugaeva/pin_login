/*=========================================================================================
	File Name: page-account-setting.js
	Description: Account setting.
	----------------------------------------------------------------------------------------
	Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';
  // variables
  var form = $('.validate-form'),
    flat_picker = $('.flatpickr'),
    accountUploadImg = $('#account-upload-img'),
    accountUploadBtn = $('#account-upload');
       var shiftIds = new Array();
  // Update user photo on click of button
  if (accountUploadBtn) {
    accountUploadBtn.on('change', function (e) {
      var reader = new FileReader(),
        files = e.target.files;
      reader.onload = function () {
        if (accountUploadImg) {
          accountUploadImg.attr('src', reader.result);
        }
      };
      reader.readAsDataURL(files[0]);
    });
  }

  // flatpickr init
  if (flat_picker.length) {
    flat_picker.flatpickr({
      onReady: function (selectedDates, dateStr, instance) {
        if (instance.isMobile) {
          $(instance.mobileInput).attr('step', null);
        }
      }
    });
  }

  // jQuery Validation
  // --------------------------------------------------------------------
  if (form.length) {
    form.each(function () {
      var $this = $(this);

      $this.validate({
        rules: {
          username: {
            required: true
          },
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          password: {
            required: true
          },
          company: {
            required: true
          },
          'new-password': {
            required: true,
            minlength: 6
          },
          'confirm-new-password': {
            required: true,
            minlength: 6,
            equalTo: '#account-new-password'
          },
          dob: {
            required: true
          },
          phone: {
            required: true
          },
          website: {
            required: true
          },
          'select-country': {
            required: true
          }
        }
      });
      $this.on('submit', function (e) {
        e.preventDefault();
      });
    });
  }
});
function submitShiftData(){
    var shiftNameArr = [];
    var shiftNames = $("input[name*='shiftname']");
    $.each(shiftNames, function(n, name) {  //i=index, item=element in array
         if($.trim($(name).val()) != ""){
             shiftNameArr[n] = $.trim($(name).val());
         }
    });
    var timeStartArr = [];
    var timeStarts = $("input[name*='time_start']");
    $.each(timeStarts, function(s, start) {  //i=index, item=element in array
         if($.trim($(start).val()) != ""){
             timeStartArr[s] = $.trim($(start).val());
         }
    });
    var timeEndArr = [];
    var timeEnds = $("input[name*='time_end']");
    $.each(timeEnds, function(m, end) {  //i=index, item=element in array
         if($.trim($(end).val()) != ""){
             timeEndArr[m] = $.trim($(end).val());
         }
    });
    
    var shiftIdArr = [];
    var shiftIds = $("input[name*='shift_id']");
    $.each(shiftIds, function(f, shifid) {  //i=index, item=element in array
         if($.trim($(shifid).val()) != ""){
             shiftIdArr[f] = $.trim($(shifid).val());
         }
    });
    var locationDetailsArr = new Object();
    locationDetailsArr['shiftIdArr'] = shiftIdArr;
   locationDetailsArr['shiftNameArr'] = shiftNameArr;
   locationDetailsArr['startTimeArr'] = timeStartArr;
   locationDetailsArr['endTimeArr'] = timeEndArr;
   locationDetailsArr['deleteIds'] = localStorage.deleteIds;
   $.ajax({
        type:'POST',
        url:'shift/add_update_shift',
        data:{locationDetailsArr},
        success:function(response){
            //window.location.href = "/settings";
        }
    });
}
$(document).ready(function(){
    $("#addnewshiftbtn").click(function(){
        var random = makeid(5);
        //var random = Math.floor(Math.random() * 100);
        console.log(random);
        var shiftDiv = '<div class="row d-flex align-items-end" id="shiftrow'+random+'"><div class="col-6 col-md-6"><div class="form-group"><label for="shiftname">Shift Name</label><input type="text" class="form-control" id="shiftname" aria-describedby="shiftname" placeholder="Shift Name" /></div></div><div class="col"><div class="form-group"><label for="fp-time-start">Time start</label><input type="text" id="time_start" name="time_start" class="form-control flatpickr-time text-left" placeholder="HH:MM" /></div></div><div class="col"><div class="form-group"><label for="fp-time-end">Time end</label><input type="text" id="time_end" name="time_end" class="form-control flatpickr-time text-left" placeholder="HH:MM" /></div></div><div class="col-md-2 col-12"><div class="form-group"><button class="btn btn-outline-danger text-nowrap px-1" onclick="removeshift(this)" data-id="'+random+'" data-repeater-delete type="button"><i data-feather="trash-2"></i></button></div></div></div><hr id="shifthr'+random+'" />';
        $("#shiftdetailsbox").append(shiftDiv);
    });
});
var grpitmjson = [];
localStorage.deleteIds = "";
function removeshift(elem){
    var shiftId = $(elem).attr("data-id");
    if (confirm('Are you sure you want to delete this shift?')) {
        if(shiftId > 0){
            grpitmjson.push(shiftId);
            localStorage.deleteIds = grpitmjson;
        }
        $("#shiftrow"+shiftId).remove();
        $("#shifthr"+shiftId).remove();
    }else{
          return false;
    }
    //var grpitmjson = JSON.parse(localStorage.deleteIds);    
}
function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}