// User Foto

$(".newphoto").change(function(){
    var imag = this.files[0];
    // validate if the file is png or jpeg
    if (imag["type"] != "image/jpeg" && imag["type"] != "image/png"){
        $(".newphoto").val("");
        swal({

            title: "Error Uploading Photo",
            text: "Invalid File, Submit only PNG or JPEG!",
            type: "error",
            confirmButtonText: "Close",
            });
        
    
    
    }else if (imag["size"] > 2000000){
    swal({
        title: "Error Photo Exceeeding",
        text: "Upload Picture less than 2MB",
        type: "error",
        confirmButtonText: "Close",
        });    
        
    }else{
        var imagData = new FileReader;
        imagData.readAsDataURL(imag);
        $(imagData).on("load", function(event){
            var redirectImage = event.target.result;
            $(".preview").attr("src",redirectImage);
        });
    }
})



