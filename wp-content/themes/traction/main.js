var authors = [];

$(document).ready(function() {
    $(document).bind('scroll',function() {
        if ($(this).scrollTop() > 180) {
            $('.navbar').addClass('minified');
            $('#logo').attr('id','logo-small');
        }
        else {
            $('.navbar').removeClass('minified');
            $('#logo-small').attr('id','logo');
        }
    });
    
    $('.posts-wrapper').isotope({
        itemSelector: '.post',
        layoutMode: 'masonry',
    });
    
    $('.post').each(function() {
        var classes = $(this).attr('class');
        classes = classes.replace('post','');
        classes = classes.replace(' ','');
        if (classes.length > 0) {
            var filter = classes;
            var author = filter.replace('-',' ');
            if ($.inArray(author,authors) == -1 ) {
                var HTML = '<button class="btn waves-effect waves-orange filter-btn" data-filter="' + filter + '">' + author + '</button>';
                $('#crew-filters').append(HTML);
                authors.push(author);
            }
        }
    });
    
    $('.filter-btn').click(function() {
        var filter = $(this).attr('data-filter');
        if (filter != '*') {
            filter = '.' + filter;
        }
        $('#crew-posts-wrapper').isotope({ filter: filter});
    });
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 60
        }, 1000);
        return false;
      }
    }
  });
});