/**
 * Created by peng on 2016/1/27.
 */
$(function(){
    function onMouseEnter(){
        $(".reconmmond .item").off("mouseenter",onMouseEnter);
        var _this = $(this);
        var _others = $(this).siblings();
        TweenMax.to(_this,.4,{
            width:577, onStart:function(){
                _this.addClass('active');
            },onComplete:function(){
                $(".recommond .iterm").on("mouseenter",onMouseEnter);
            }
        });
        TweenMax.to($(this).find(".para"),.4,{width:255});
        TweenMax.to($(this).find("img"),.4,{right:-23,autoAlpha:1});

        TweenMax.to(_others,.4,{
            width:200, onStart:function(){
                _others.removeClass("active");
            }
        });
        TweenMax.to(_others.find(".para"),.4,{width:200});
    }
    $(".recommond .item").on("mouseenter" ,onMouseEnter);
})