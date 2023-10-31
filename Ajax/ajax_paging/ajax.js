function loadData(page, idl, idc) {
    $.ajax({
        type: "POST",
        url: "Ajax/ajax_paging/index.php",
        data: {
            page: page,
            idl: idl,
            idc: idc
        },
        success: function(data) {
            $("#danhmuc" + idl).html(data);
        }
    });
}
$(".showproduct").each(function(index, el) {
    var idl = $(this).data("idl");
    var idc = "null";
    var page = 1;
    loadData(page, idl, idc);
});
$(".showproduct").on("click", ".choose_idl", function() {
    $(this).closest('.navbar').find('.navbar-nav a').removeClass('active')
    var page = 1;
    var idl = $(this).parents(".showproduct").attr("data-idl");
    var idc = "null";
    $(this).parents(".showproduct").attr("data-idc", "null");
    loadData(page, idl, idc);
});
$(".showproduct").on("click", ".navbar-nav a", function() {
    $('.navbar-nav a').removeClass("active");
    $(this).addClass("active");
    var page = 1;
    var idc = $(this).data("idc");
    $(this).parents(".showproduct").attr("data-idc", idc);
    var idl = $(this).parents(".showproduct").attr("data-idl");
    loadData(page, idl, idc);
});
$(".showproduct").on("click", ".ajax_pagination li.active", function() {
    var page = $(this).attr("p");
    var idl = $(this).parents(".showproduct").attr("data-idl");
    var idc = $(this).parents(".showproduct").attr("data-idc");
    loadData(page, idl, idc);
});