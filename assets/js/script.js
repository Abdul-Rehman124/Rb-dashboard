const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    
const chevronIcon = document.querySelector('.chevron');
const sidebar = document.querySelector('.sidebar');

$(document).ready(function() {
$('.chevron').click(function() {
    $('.sidebar').toggleClass('active');
    var icon = $(this).find('.chevron');
    
    if ($('.sidebar').hasClass('active')) {
        icon.removeClass('fa-chevron-right').addClass('fa-chevron-left');
        $('.d-none').removeClass('d-none').addClass('d-block');
    } else {
        icon.removeClass('fa-chevron-left').addClass('fa-chevron-right');
        $('.d-block').removeClass('d-block').addClass('d-none');
    }
});
}); 

