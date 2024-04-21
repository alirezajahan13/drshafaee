

$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: 'https://www.drshafaee.com/wp-admin/admin-ajax.php',
        // dataType : 'json',
        // dataType: 'html',
        data: {
            action: 'show_portfolio',
            requestData: '',
        },
        success: function(res) {
            $('.portfolioItemParent').html(res);
            // $('#corpFilterResut').html(res);
            // $('.currentCorpPage').html(currentCorpPage);
            // $('.page-numbers[data-page="'+currentCorpPage+'"]').addClass('current');
            // $('.page-numbers[data-page="'+currentCorpPage+'"]').removeAttr('href');
        }
    });
    
});
$(document).on('click', '.portfolioItem' , function(){
    let selectedItem = $(this).data('gallery');
    console.log(selectedItem);
    $.ajax({
        type: 'POST',
        url: 'https://www.drshafaee.com/wp-admin/admin-ajax.php',
        // dataType : 'json',
        // dataType: 'html',
        data: {
            action: 'show_portfolio_items',
            requestGallery: selectedItem,
        },
        success: function(res) {
            $('.lightGalleryItemsLoader').html(res);
            // $('#corpFilterResut').html(res);
            // $('.currentCorpPage').html(currentCorpPage);
            // $('.page-numbers[data-page="'+currentCorpPage+'"]').addClass('current');
            // $('.page-numbers[data-page="'+currentCorpPage+'"]').removeAttr('href');
            const portfolioGallery = lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail, lgHash],
                showCloseIcon: true,
                mobileSettings: {
                    showCloseIcon: true,
                },
            });
            portfolioGallery.openGallery();
        }
    });   
});
if( window.location.href!='https://www.drshafaee.com/portfolio/'){
    window.history.pushState(null, "", window.location.href);        
    window.onpopstate = function() {
        window.history.pushState(null, "", window.location.href);
    };
}