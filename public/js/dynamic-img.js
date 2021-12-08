jQuery(document).ready(function($) {
	function readURL(input, className) {
	    if (input.files && input.files[0]){
	        var reader = new FileReader()
	        reader.onload = function (e) {
	            $(className).attr('src', e.target.result)
	        }
	        reader.readAsDataURL(input.files[0])
	    }
	}
	$(".input-gambar-a").change(function(){
        readURL(this, ".fill-gambar-a")
	})
    $(".input-gambar-b").change(function(){
        readURL(this, ".fill-gambar-b")
	})
    $(".input-gambar-c").change(function(){
        readURL(this, ".fill-gambar-c")
	})
    $(".input-gambar-d").change(function(){
        readURL(this, ".fill-gambar-d")
	})

});