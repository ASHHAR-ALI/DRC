// Append the custom theme HTML to the body
$('<ul class="custom-theme"><li class="demo-li"><a href="{{asset('/')}}" target="_blank">Front end</a></li><li class="btn-rtl">RTL</li><li class="btn-dark-setting">Dark</li></ul>').appendTo($('body'));

// Function to set dark theme as default
function setDarkThemeDefault() {
  $('.btn-dark-setting').addClass('dark'); // Add 'dark' class to the button
  $('body').addClass('dark'); // Add 'dark' class to the body
  $('.btn-dark-setting').text('Light'); // Change button text to 'Light'
}

// Execute code when document is ready
$(document).ready(function () {
  
  // Functionality for RTL/LTR toggle
  $('.btn-rtl').on('click', function () {
    $("html").attr("dir", "");
    $(this).toggleClass('rtl');
    if ($('.btn-rtl').hasClass('rtl')) {
      $('.btn-rtl').text('LTR');
      $('body').addClass('rtl');
      $("html").attr("dir", "rtl");
    } else {
      $('.btn-rtl').text('RTL');
      $('body').removeClass('rtl');
      $("html").attr("dir", "");
    }
  });

  // Functionality for dark/light theme toggle
  var body_event = $("body");
  body_event.on("click", ".btn-dark-setting", function () {
    $(this).toggleClass('dark');
    $('body').toggleClass('dark');
    if ($('.btn-dark-setting').hasClass('dark')) {
      $('.btn-dark-setting').text('Light');
    } else {
      $('.btn-dark-setting').text('Dark');
    }
    return false;
  });

  // Set dark theme as default when document is ready
  setDarkThemeDefault();
});





















// // RTl & Ltr
// $('<ul class="custom-theme"><li class="demo-li"><a href="{{asset('/')}}" target="_blank">Front end</a></li><li class="btn-rtl">RTL</li><li class="btn-dark-setting">Dark</li></ul>').appendTo($('body'));
// (function () {
// })();
// //live customizer js
// $(document).ready(function () {

//   $('.btn-rtl').on('click', function () {
//     $("html").attr("dir", "");
//     $(this).toggleClass('rtl');
//     if ($('.btn-rtl').hasClass('rtl')) {
//       $('.btn-rtl').text('LTR');
//       $('body').addClass('rtl');
//       $("html").attr("dir", "rtl");
//     } else {
//       $('.btn-rtl').text('RTL');
//       $('body').removeClass('rtl');
//       $("html").attr("dir", "");
//     }
//   });
//   var body_event = $("body");
//   body_event.on("click", ".btn-dark-setting", function () {
//     $(this).toggleClass('dark');
//     $('body').removeClass('dark');
//     if ($('.btn-dark-setting').hasClass('dark')) {
//       $('.btn-dark-setting').text('Light');
//       $('body').addClass('dark');
//     } else {
//       $('#theme-dark').remove();
//       $('.btn-dark-setting').text('Dark');
//     }

//     return false;
//   });
// });

