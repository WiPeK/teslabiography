$(function() {
    $(document).on('mouseenter.collapse', '[data-toggle=collapse]', function(e) {
        var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).hasClass('in') ? 'hide' : "show"
            $('.panel-collapse').not(target).collapse("hide")
            $(target).collapse(option);
    })
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});


//   $('[data-toggle="popover"]').popover().on("mouseenter", function () {
//     var _this = this;
//     $(this).popover("show");
//     $(".popover").on("mouseleave", function () {
//         $(_this).popover('hide');
//     });
// }).on("mouseleave", function () {
//     var _this = this;
//     setTimeout(function () {
//         if (!$(".popover:hover").length) {
//             $(_this).popover("hide");
//         }
//     }, 300);
// });

$('[data-toggle="popover"]').popover({ trigger: "manual" , html: true, animation:false})
    .on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 300);
});

//autosuggest
// function autoSuggest()
// {
//     var autoSuggestVal = $('#autosuggest').val();

//     if(autoSuggestVal != '')
//     {
//         $.ajax({
//             url: 'user/autoSuggest/'+autoSuggestVal,
//             success: function(result)
//             {
//                 $('#autosuggest-container').html(result);
//             }
//         });
//     }
// }
