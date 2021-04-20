$(document).ready(function () {
  var attribute = $(".dropdown-menu");
  $(attribute).click(function () {});

  $(".webui-popover-inner .close").click(function () {
    $(this).toggleClass("role-selector--active");
  });
});

$(".popClass").webuiPopover({ url: "#myContent" });

$(".js-add-employees").click(function () {
  $(".MuiPaper-root.add-employee-sidebar").addClass("open");
});
$(".schedule-header__button").click(function () {
  $(".MuiPaper-root.publish-sidebar").addClass("open");
});

$(".js-print").click(function () {
  $(".print-schedule-siderbar").addClass("open");
});
$(".IconButton--mdClose").click(function () {
  $(".MuiPaper-root").removeClass("open");
});

$(".new-shift-popover .type .switcher .link input").click(function () {
  this.removeAttribute("checked");
});

$(".webui-popover-content").click(function (e) {
  e.stopPropagation();
});
$(".custom-dropdown .dropdown-item").click(function (e) {
  e.preventDefault();
  var currentTargetId = e.currentTarget.id;
  var layout = $(".layout-dropdown button");
  var parentWrapper = $("#schedule-builder");

  if (currentTargetId === "daily") {
    $(".daily").show();
    $(".weekly").hide();
    $(".monthly").hide();
    layout.text("Day");
    $(".js-today").hide();
    $(".add-employees-link").show();
    $(parentWrapper).removeClass().addClass("day-view");
    $(".day-drop").show();
    $("#schedule-builder").find(".wages").removeClass("wages");
    $(".week-drop").hide();
    $(".people-forecast.left").hide();
    $(".people-forecast.right").show();
    $(".js-bottom-info").show();
    $(".date-period").html(`
      <div class="title  popOver">Monday, 8th</div>
      <div class="desc">Feb 8 - 14</div>
  `);
    $("#export-btn").show();
    $("#publish-btn").hide();
    $("#copy-btn").hide();
    $(".bottom-bar__nav").hide();
    $(".inner-rows-wrapper").hide();
  } else if (currentTargetId === "weekly") {
    $(".weekly").show();
    $(".daily").hide();
    $(".monthly").hide();
    layout.text("Week");
    $(".view-by").show();
    $(parentWrapper).removeClass().addClass("week-view");
    $(".day-drop").hide();
    $(".js-cost").addClass("wages");
    $(".people-forecast.right").hide();
    $(".js-bottom-info").show();
    $(".people-forecast.left").show();
    $(".week-drop").show();
    $(".add-employees-link").show();
    $(".date-period").html(`
      <div class="date-period__inner">
          <div class="date-period__inputs">
          <p>March 2021</p>          </div>
          <div class="date-period__edit-pencil">
            <i class="fa fa-pencil-alt"></i>
          </div>
        </div>`);
    $("#export-btn").hide();
    $("#publish-btn").show();
    $("#copy-btn").show();
    $(".bottom-bar__nav").show();
    $(".inner-rows-wrapper").show();
  } else if (currentTargetId === "monthly") {
    $(".monthly").show();
    $(".daily").hide();
    $(".weekly").hide();
    layout.text("Month");
    $(".view-by").hide();
    $(".js-bottom-info").hide();
    $(".js-today").hide();
    $(parentWrapper).removeClass().addClass("month-view");
    $(".add-employees-link").hide();
    $(".date-period").html(`
      <div class="date-period__inner">
      <div class="date-period__inputs">
      <p>March 2021</p>
  </div>
        </div>`);
    $("#export-btn").hide();
    $("#publish-btn").show();
    $("#copy-btn").hide();
    $(".bottom-bar__nav").show();
    $(".inner-rows-wrapper").show();
  }
});

//  $('#pops').webuiPopover({url:'#optionsWrapper'});
$(".popOver").webuiPopover({
  trigger: "click",
  placement: "auto",
  content: $("#optionsWrapper").html(),
  animation: "pop",
  closeable: true,
  width: "auto",
  selector: false,
  cache: false,
  dismissible: true,
});

$(".popOverEvent").webuiPopover({
  trigger: "click",
  placement: "auto",
  content: $("#eventContent").html(),
  animation: "pop",
  closeable: true,
  width: "auto",
  selector: false,
  dismissible: true,
  cache: false,
});

//       .click(function(event) {
//   $(".popOver").webuiPopover('show')
//   event.stopPropagation();
// }) ;

$("#examples-form").click(function () {
  // e.addAttr("checked");
  $(".shift-examples-form").show();
  $(".custom-shift-form").hide();
  $(".custom-shift-form").hide();
});
$("#custom-form").click(function () {
  $(".custom-shift-form").show();
  $(".time-off-form").hide();
  $(".shift-examples-form").hide();
});
$("#time-off-form").click(function () {
  // e.addAttr("checked");
  $(".time-off-form").show();
  $(".shift-examples-form").hide();
  $(".custom-shift-form").hide();
});

$(window).click(function (e) {
  if ($(e.target).is(".publish-sidebar")) {
    $(".publish-sidebar").removeClass("open");
  }
});

// $(document).ready(function(){
//  var attribute = $('.custom-dropdown .dropdown-item');
//   $(attribute).click(function(){
//     var childItme = $(this);
//     if(childItme.attr('id')){console.log(true)}
//     console.log($(this).attr('id'));
//   })
//   console.log(attribute);
// })
var sb = $("#schedule-builder");
if ($("#schedule-builder").hasClass("day-view")) {
  $(".date-period").html(`
    <div class="title  popOver">Monday, 8th</div>
    <div class="desc">Feb 8 - 14</div>
`);
} else if ($(sb).hasClass("week-view")) {
  $(".date-period").hide();
} else if ($(sb).hasClass("month-view")) {
  $(".date-period").html(`
    <div class="title  popOver">Monday, 8th</div>
    <div class="desc">Feb 8 - 14</div>
`);
}

$(".js-toggle-row").click(function () {
  $(".additional-info").toggleClass("bottom-bar bottom-bar--closed");
});

$(".js-search-link").click(function () {
  $(".js-search-name").toggleClass("hidden");
});

function onDragStart(event) {
  event.dataTransfer.setData("text/plain", event.target.id);
}

function onDragOver(event) {
  event.preventDefault();
}

function onDrop(event) {
  const id = event.dataTransfer.getData("text");
  const draggableElement = document.getElementById(id);
  const dropzone = event.target;
  dropzone.appendChild(draggableElement);
  event.dataTransfer.clearData();
}

$(".bottom-bar__rows-buttons a").click(function () {
  $(this).toggleClass("active");
  if ($("#sales_data").hasClass("active")) {
    $(".js-estimated-sales-row").show();
  } else {
    $(".js-estimated-sales-row").hide();
  }
  if ($("#labor_data").hasClass("active")) {
    $(".js-labor-target-row").show();
  } else {
    $(".js-labor-target-row").hide();
  }
  if ($("#SL_data").hasClass("active")) {
    $(".js-departments-row").show();
  } else {
    $(".js-departments-row").hide();
  }
});
