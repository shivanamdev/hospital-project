
setTimeout(function() {
    $('#successMessage').fadeOut('fast');
  }, 30000);
    function resize(ff,fid){
      //define the width to resize e.g 600px
      var resize_width = 600;//without px

      //get the image selected
    //   var item = document.querySelector('#account-upload').files[0];
    var item = ff.files[0];
    var formData = new FormData();
    formData.append("Filedata", item);
    var t = item.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        ff.value = '';
    }


      //create a FileReader
      var reader = new FileReader();

      //image turned to base64-encoded Data URI.
      reader.readAsDataURL(item);
      reader.name = item.name;//get the image's name
      reader.size = item.size; //get the image's size
      reader.onload = function(event) {
        var img = new Image();//create a image
        img.src = event.target.result;//result is base64-encoded Data URI
        img.name = event.target.name;//set name (optional)
        img.size = event.target.size;//set size (optional)
        img.onload = function(el) {
          var elem = document.createElement('canvas');//create a canvas

          //scale the image to 600 (width) and keep aspect ratio
          var scaleFactor = resize_width / el.target.width;
          elem.width = resize_width;
          elem.height = el.target.height * scaleFactor;

          //draw in canvas
          var ctx = elem.getContext('2d');
          ctx.drawImage(el.target, 0, 0, elem.width, elem.height);

          //get the base64-encoded Data URI from the resize image
          var srcEncoded = ctx.canvas.toDataURL(el.target, 'image/jpeg', 0);

          //assign it to thumb src
          if(fid=='imgPath')
          {
          document.querySelector('#front_img').src = srcEncoded;
          }
          document.querySelector('#'+fid).value = srcEncoded;

          /*Now you can send "srcEncoded" to the server and
          convert it to a png o jpg. Also can send
          "el.target.name" that is the file's name.*/

        }
      }
    }


    setTimeout(function() {
        $('#successMessage').fadeOut('fast');
      }, 30000);
        function resize2(ff,fid){
          //define the width to resize e.g 600px
          var resize_width = 600;//without px

          //get the image selected
        //   var item = document.querySelector('#account-upload').files[0];
        var item = ff.files[0];
        var formData = new FormData();
        formData.append("Filedata", item);
        var t = item.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            alert('Please select a valid image file');
            ff.value = '';
        }


          //create a FileReader
          var reader = new FileReader();

          //image turned to base64-encoded Data URI.
          reader.readAsDataURL(item);
          reader.name = item.name;//get the image's name
          reader.size = item.size; //get the image's size
          reader.onload = function(event) {
            var img = new Image();//create a image
            img.src = event.target.result;//result is base64-encoded Data URI
            img.name = event.target.name;//set name (optional)
            img.size = event.target.size;//set size (optional)
            img.onload = function(el) {
              var elem = document.createElement('canvas');//create a canvas

              //scale the image to 600 (width) and keep aspect ratio
              var scaleFactor = resize_width / el.target.width;
              elem.width = resize_width;
              elem.height = el.target.height * scaleFactor;

              //draw in canvas
              var ctx = elem.getContext('2d');
              ctx.drawImage(el.target, 0, 0, elem.width, elem.height);

              //get the base64-encoded Data URI from the resize image
              var srcEncoded = ctx.canvas.toDataURL(el.target, 'image/jpeg', 0);

              //assign it to thumb src
              if(fid=='imgPath')
              {
              document.querySelector('#front_img').src = srcEncoded;
              }
              document.querySelector('#'+fid).value = srcEncoded;

              /*Now you can send "srcEncoded" to the server and
              convert it to a png o jpg. Also can send
              "el.target.name" that is the file's name.*/

            }
          }
        }





