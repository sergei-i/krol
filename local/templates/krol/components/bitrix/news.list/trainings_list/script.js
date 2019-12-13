// $(function () {
//     var button = $('.training__author .btn.btn_shadow');
//
//     button.on('click', function (e) {
//         var id = e.target.getAttribute('data-id');
//
//         var input = $('#trainer-id');
//         input.val(id);
//     });
//
//
//     $('#modalform').submit(function () {
//         var data = $(this).serialize();
//         $.ajax({
//             url: '/local/ajax/customer-order.php',
//             type: 'POST',
//             data: data,
//             success: function (res) {
//                 $('.modal.modal_size-s').removeClass('modal_show');
//                 $('.modals__back').removeClass('modals__back_show');
//             },
//             error: function () {
//                 alert('Error');
//             }
//         });
//         return false;
//     })
// });