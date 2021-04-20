/*=========================================================================================
	File Name: ext-component-sweet-alerts.js
	Description: A beautiful replacement for javascript alerts
	----------------------------------------------------------------------------------------
	Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
	Author: Pixinvent
	Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(function () {
  'use strict';

  var basicAlert = $('#basic-alert');
  var withTitle = $('#with-title');
  var withFooter = $('#footer-alert');
  var htmlAlert = $('#html-alert');

  var positionTopStart = $('#position-top-start');
  var positionTopEnd = $('#position-top-end');
  var positionBottomStart = $('#position-bottom-start');
  var positionBottomEnd = $('#position-bottom-end');

  var bounceIn = $('#bounce-in-animation');
  var fadeIn = $('#fade-in-animation');
  var flipX = $('#flip-x-animation');
  var tada = $('#tada-animation');
  var shake = $('#shake-animation');

  var success = $('#type-success');
  var error = $('#type-error');
  var warning = $('#type-warning');
  var info = $('#type-info');

  var customImage = $('#custom-image');
  var autoClose = $('#auto-close');
  var outsideClick = $('#outside-click');
  var question = $('#prompt-function');
  var ajax = $('#ajax-request');

  var confirmText = $('#confirm-text');
  var confirmColor = $('#confirm-color');

  var assetPath = '../../../app-assets/';
  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }



  // Confirm Color
  if (confirmColor.length) {
    confirmColor.on('click', function () {
      Swal.fire({
        title: 'Êtes-vous sûr ?',
        text: "Vous vous apprêtez à mettre fin au contrat !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui, je confirme !',
        customClass: {
          confirmButton: 'btn btn-primary',
          cancelButton: 'btn btn-outline-danger ml-1'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            icon: 'success',
            title: 'Fin de contrat!',
            text: 'Cet employé a été licencié',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'Ne pas rompte le contrat',
            text: 'Vous avez préservé son emploi :)',
            icon: 'error',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
    });
  }
});
