
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
    
    $('#food-select').on('change', function() {
        let value = $(this).val();
        $.ajax({
            url: 'foods_select.php',
            type: 'POST',
            data: 'request=' + value,
            success: function(data) {
                $("#foods_container").html(data);
                $('#sales').empty();
            }
        });
    });

    $('.user-confirm').click(function() {
        alert('Your Reservation is Confirm. Thank You');
    });

    $('.hamburger').click(function() {
        $('.header').toggleClass('open');
    });

    
});
// $(document).ready(function() {
//     $('.logo').hide();
// })

// $(document).ready(function() {
//     $(".user-image").click(function() {
//         $(".user-info").toggle(5000);
//     });
// });

// let reserve_confirm = document.querySelector('.user-confirm');
// console.log(reserve_confirm);


// reserve_confirm.addEventListener('click', () => {
//     alert('Your Reservation is Confirm. Thank You');
// });
