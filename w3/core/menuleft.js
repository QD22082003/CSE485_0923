$(document).ready(function(){
    $("#right").click(function(){
        $("#userSubMenu").collapse("toggle");
    });
});

$(document).ready(function () {
    $("#menu1").on("show.bs.collapse", function () {
        $("#right1").removeClass("fa-caret-right").addClass("fa-caret-down");
        $("#button1").addClass("active-menu");
        $("#button1>a, #button1>i").addClass("white-text-active");
    }).on("hide.bs.collapse", function () {
        $("#right1").removeClass("fa-caret-down").addClass("fa-caret-right");
        $("#button1").removeClass("active-menu");
        $("#button1>a, #button1>i").removeClass("white-text-active");
    });

    $("#menu2").on("show.bs.collapse", function () {
        $("#right2").removeClass("fa-caret-right").addClass("fa-caret-down");
        $("#button2").addClass("active-menu");
        $("#button2>a, #button2>i").addClass("white-text-active");
    }).on("hide.bs.collapse", function () {
        $("#right2").removeClass("fa-caret-down").addClass("fa-caret-right");
        $("#button2").removeClass("active-menu");
        $("#button2>a, #button2>i").removeClass("white-text-active");
    });

    $("#menu3").on("show.bs.collapse", function () {
        $("#right3").removeClass("fa-caret-right").addClass("fa-caret-down");
        $("#button3").addClass("active-menu");
        $("#button3>a, #button3>i").addClass("white-text-active");
    }).on("hide.bs.collapse", function () {
        $("#right3").removeClass("fa-caret-down").addClass("fa-caret-right");
        $("#button3").removeClass("active-menu");
        $("#button3>a, #button3>i").removeClass("white-text-actsive");
    });
});
$(document).ready(function () {
    // Lắng nghe sự kiện click trên tất cả các button
    $(".menu-button").on("click", function () {
        // Đóng tất cả các menu con trước khi mở menu mới
        $(".menuCon").collapse("hide");
    });
});


// $(document).ready(function() {
//     var userIdToDelete; // Biến để lưu id của người dùng cần xóa
//
//     // Bắt sự kiện click vào biểu tượng thùng rác
//     $('.fa-trash').click(function() {
//         userIdToDelete = $(this).closest('tr').find('th').text();
//         $('#confirmDeleteModal').modal('show'); // Hiển thị modal xác nhận
//     });
//
//     // Bắt sự kiện click vào nút "Xóa" trong modal
//     $('#confirmDeleteButton').click(function() {
//         // Gửi yêu cầu xóa dữ liệu đến máy chủ
//         $.ajax({
//             type: 'POST',
//             url: '../path/process_user_delete.php', // Thay thế 'delete_user.php' bằng tên tệp xử lý xóa thực tế trên máy chủ của bạn
//             data: { id: userIdToDelete },
//             success: function(response) {
//                 $('#confirmDeleteModal').modal('hide'); // Ẩn modal xác nhận
//                 alert('User deleted successfully.');
//
//                 // Xóa dòng tr khỏi bảng khi xóa thành công
//                 var rowToDelete = $('th:contains(' + userIdToDelete + ')').closest('tr');
//                 rowToDelete.remove();
//             },
//             error: function() {
//                 alert('An error occurred while deleting the user.');
//             }
//         });
//     });
// });

function xuat() {
    alert('“Bạn đã gửi liên hệ thành  ');
}

