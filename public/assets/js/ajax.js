$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var id = button.dataset.id;
            var url = button.dataset.url;
            removeRow(id, url);
        });
    });
});
function removeRow(id, url) {
    if (confirm('Bạn không thể khôi phục sau khi xóa. Bạn chắc chắn xóa?')) {
        $.ajax({
            type: "DELETE",
            dataType: "JSON",
            data: { id },
            url: url,
            success: function (result) {
                alert(result.message);
                location.reload();
            }
        })
    }
}
