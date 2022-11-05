$("#selectOccupation").change(function () {
    if ($("#selectOccupation").find(":selected").val() == "Student") {
        $("#schoolName").removeClass("hideField");
    } else {
        if (!$("#schoolName").hasClass("hideField")) {
            $("#schoolName").addClass("hideField");
        }
    }
});
//camera js

$("#live_img_profile_preview .close").click(function(){
    $("#buttons .store_wbcam_img").attr('disabled',true);
    $('.livecountdown').hide();
    $('#live_img_profile_preview').hide();
    $('#live_img_profile_previewImg').attr('src',baseurl+'picture/imgloading.gif');
    $('.click').show();
});

var coverUserImg = null;
$("#buttons .store_wbcam_img").click(function(){

    $.post(baseurl+"live_webcam_images_ipload.php",
        { image: coverUserImg},
        function(data){
            window.location = 'live_webcam_images_ipload.php';
        });
});

function webcamTakeImg(){
    $('.click').hide();
    $('.livecountdown').show();
    webcam.capture(3);
}

function webcam_init() {
    var imgpostion = 0, ctx = null, saveCB, image = [];
    var canvas = document.createElement("canvas");
    canvas.setAttribute('width', 320);
    canvas.setAttribute('height', 240);

    if (canvas.toDataURL) {
        ctx = canvas.getContext("2d");

        image = ctx.getImageData(0, 0, 320, 240);

        saveCB = function(data) {

            var col = data.split(";");
            var picture = image;

            for(var i = 0; i > 16) & 0xff;
            picture.data[imgpostion + 1] = (tmp >> 8) & 0xff;
            picture.data[imgpostion + 2] = tmp & 0xff;
            picture.data[imgpostion + 3] = 0xff;
            imgpostion+= 4;
        }

        if (imgpostion >= 4 * 320 * 240) {
            ctx.putImageData(picture, 0, 0);
            $('#live_img_profile_preview').show();
            $.post(baseurl+"live_webcam_images_ipload.php", {type: "data", image: canvas.toDataURL("image/png")},function(data){
                $("#buttons .store_wbcam_img").attr('disabled',false);
                coverUserImg = data;
                $('#live_img_profile_previewImg').attr('src',''+baseurl+data);
            });
            imgpostion = 0;
        }
    };
}else{

    saveCB = function(data) {
        image.push(data);

        imgpostion+= 4 * 320;

        if (imgpostion >= 4 * 320 * 240) {
            $('#live_img_profile_preview').show();
            $.post(baseurl+"live_webcam_images_ipload.php", {type: "pixel", image: image.join('|')},function(data){
                $("#buttons .store_wbcam_img").attr('disabled',false);
                coverUserImg = data;
                $('#live_img_profile_previewImg').attr('src',''+baseurl+data);
            });
            imgpostion = 0;
            image = [];
        }
    }
}

$("#webcam").webcam({
    width: 320,
    height: 240,
    mode: "callback",
    swffile: baseurl+"js/webcam/jscam_canvas_only.swf",

    onSave: saveCB,

    onCapture: function () {

        jQuery("#light_webcam").css("display", "block");
        jQuery("#light_webcam").fadeOut("fast", function () {
            jQuery("#light_webcam").css("opacity", 1);
        });

        webcam.save();
    },

    onTick: function(remain) {
        $('.livecountdown').show();

        if (0 == remain) {
            $('.livecountdown').hide();
        } else {
            jQuery(".livecountdown").text(remain);
        }
    },

    debug: function (type, string) {
        if(type == 'error'){
            $("#nocamera").show();
        }else{
            $("#nocamera").hide();
        }

    },

    onLoad: function() {
        //var cams = webcam.getCameraList();
    }
});

}

(function ($) {
    webcam_init();
})(jQuery);
