<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Koreksoft Link Previewer</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="plugins/summernote/summernote.css">
    <style>
    .slidecontainer {
      text-align: center;
      width: 100%;
    }

    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 25px;
      background: #d3d3d3;
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }
 
    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 25px;
      height: 25px;
      background: #4CAF50;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
      width: 25px;
      height: 25px;
      background: #4CAF50;
      cursor: pointer;
    }
    </style>

  </head>

  <body>

    <div class="container mt-5">
      <div class="row mb-3 text-left">
        
        <div class="col-sm-0 col-md-3">
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="card mb-4 box-shadow" style="border: none;">
            <div class="card-header" style="border: none; border-radius: 12px;">
              <h4 class="my-0 font-weight-normal">Preview while Typing</h4>
            </div>
            <div class="card-body" >
              <p class="">Try to type a link.</p>
              <textarea class="form-control col-12" koreksoft_lp="second" rows="4" id="textarea1"><p>Kyou nan no hi ka wakaru?</p><p><a href="http://google.com" target="_blank">http://google.com</a>&nbsp;</p></textarea>
              <button type="button" class="btn btn-sm btn-primary mt-2" id="second_theme">Switch Theme</button>

              
          
            </div>
            
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="col-12 mt-5">
            <a href="user_manual" class="btn btn-lg btn-primary mt-2" id="second_theme" style="width: 100%">User Manual</a>
          </div>
        </div>


      </div>


      

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted"><a href="http://koreksoft.online">Korek Software</a> 2020</small>
          </div>
          <!-- <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="https://github.com/widibaka/">Me</a></li>
            </ul>
          </div> -->
        </div>
      </footer>
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Inilah plugin saya .widibaka -->
<script type="text/javascript" src="plugins/koreksoft-link-previewer/js/main.js"></script>
<script type="text/javascript" src="plugins/summernote/summernote.js"></script>

<!-- Cara penggunaan ada di bawah ini -->
<script type="text/javascript">




  /*
  * Live preview the the link in the middle of typing
  */
  function triggered_oninput(){
    KS_LP_run_previewer( "second", {
      console: 1,
      plugin_path: "plugins/koreksoft-link-previewer/",
      type: "use_editor_plugin", // live, button-triggered, html_element, use_editor_plugin
      size: "normal", // normal, large
      position: "top", // top, bottom (but when you use text editor, like summernote, it can't get its position to bottom)
      components: [
        "image",
        "title",
        "site_name",
        "source_url",
        "description",
        "close-button",
      ],
      loader: "gear", // bar, google, circle, windows, go
    } );
  }
  // theme switcher
  $('#second_theme').click(function() {
    KS_LP_switch_theme_DEMO('second'); // 
  })



$(document).ready(function() {
  // Summernote
  $('#textarea1').summernote({
    placeholder: 'Korek Software ...',
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['codeview']]
    ],
    callbacks: {
        onKeyup: function(e) {
          var text_val = $(this).val();

          $('#textarea1').val( text_val ); // Anda harus menyalin value code ke element aslinya. Di versi summernote 0.8 ke atas tidak perlu lagi melakukan ini

          triggered_oninput();
        }
    }
  });

  triggered_oninput(); // Run the function of "second" when the document is ready, it will initialize the plugin safely
}
);
</script>
  </body>
</html>


