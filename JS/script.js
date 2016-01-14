// Script for flip gallery

$(function () {
    if ( $('html').hasClass('csstransforms3d') ) {
      $('.artGroup').removeClass('slide').addClass('flip');
      $('.artGroup.flip').on('mouseenter',
        function () {
          $(this).find('.artwork').addClass('theFlip');
        });
      $('.artGroup.flip').on('mouseleave',
        function () {
          $(this).find('.artwork').removeClass('theFlip');
        });
    } else {
      $('.artGroup').on('mouseenter',
        function () {
          $(this).find('.detail').stop().animate({bottom:0}, 500, 'easeOutCubic');
        });
      $('.artGroup').on('mouseleave',
        function () {
          $(this).find('.detail').stop().animate({bottom: ($(this).height() + -1) }, 500, 'easeOutCubic');
        });
    }
});



// Script for Off-Canvas Navigation on small screens
$('document').ready(function () {
    $('.navbar-toggle').on('click', function () {
        $('.collapse, #mainContainer').toggleClass('in');
    });

    
});

$(window).resize(function () {
    if ($(window).width() > 768) {
        $('.collapse, #mainContainer').removeClass('in');
    };
});


// Script for buttons on home page

$(document).ready(function() {
    $('.special-nav-item').on('mouseenter', function () {
        $(this).addClass('highlight');    
    });
    
    
    $('.special-nav-item').on('mouseleave', function() {
        $(this).removeClass('highlight');
    });
    
    
});

   