// Variabel global
  var KS_LP_registration_code = "ZnJlZUBmcmVlQHNhcGFyYXRlQDE=";
  var KS_LP_settings_default = {
    type: "html_element",
    img_size: "148px",
    size: "normal",
    position: "top",
    components: [
      "image",
      "title",
      "site_name",
      "description",
      "close-button",
    ],
    loader: "infinity",
    theme: "light",
  };

  var KS_LP_global_font_size;
  var KS_LP_global_plugin_path = "plugins/koreksoft-link-previewer/"; // ini default valuenya
  var KS_LP_last_requested_url = null;
  var KS_LP_last_requested_data = null;
  var KS_LP_last_textarea_value = null;
  var KS_LP_content; // inisialisasi karena nanti banyak dipake
  var Style_load_status = false; // memastikan load css cuman sekali aja. Default value false, nanti pas udah load, berubah jadi true. Habis itu gak load css  lagi

  // Digunakan untuk memberi jeda pada saat melakukan request
  var KS_LP_time_recorded;
  var KS_LP_time_now;
  var KS_LP_delay_before_request = 2000; // dalam milisekon, saat menggunakan live preview
  var KS_LP_all_data = { to_declare_that_this_is_an_object: "kosong" }; // semua data hasil request akan tersimpan di sini sebagai object



  function KS_LP_check_wadah(marker, settings) {
    //KS_LP_debug(settings, "KS_LP_check_wadah")
    if ( $('#'+marker).length == 0 ) { // memeriksa apakah ada wadahnya atau enggak. Kalau ada, return true
      return false;
    }else{
      return true;
    }
  }
  function KS_LP_getElementLength(marker, settings){

    let element = KS_LP_getElement(marker, settings);
    return element.length;
  }

  function KS_LP_getElement(marker, settings) {
    //KS_LP_debug(settings, "KS_LP_getElement");
    let element = $('[koreksoft_lp=\"'+marker+'\"]');
    return element;
  }
  function KS_LP_getTarget(marker, settings) {
    //KS_LP_debug(settings, "KS_LP_getTarget")
    var id_marker = "#"+marker;
    return $( id_marker );
  }
  function KS_LP_create_wadah(marker, settings){
    //KS_LP_debug(settings, "KS_LP_create_wadah")

    var style_wadah = 'display: none;'; // saat loading

    if ( settings.size == "normal" ) {
      if ( typeof(settings.img_size) != 'undefined' ) {
        style_wadah += 'max-height:'+settings.img_size+';';
      }
    }
    
    if ( typeof(settings.extra_css) == 'undefined' ) {
      settings.extra_css = ""; // extra css
    }else{
      style_wadah += settings.extra_css;
    }

    let wrapper = KS_LP_getWrapper(marker);
    KS_LP_content = '<div class="wadah_previewer-'+settings.size+'" id="'+marker+'" style="'+style_wadah+'"></div>'; // ketika muncul tidak boleh ditampilkan
    if ( settings.position == "top" ) {
      $( wrapper ).prepend( KS_LP_content ); // menambah wadah
    }else if ( settings.position == "bottom" ) {
      $( wrapper ).append( KS_LP_content ); // menambah wadah
    }
  }

  function KS_LP_create_wrapper(marker, settings){
    //KS_LP_debug(settings, "KS_LP_create_wrapper")
    let element = KS_LP_getElement(marker, settings); // indexer untuk element / textarea sumber dari id marker
    let status = true;
    if ( typeof(settings.theme) == 'undefined' ) { //kalao ga ada, kasih aja light
      settings.theme = "light";
    }
    if ( typeof(settings.font_size) == 'undefined' ) {
      settings.font_size = "100%"; // kalau enggak disebutin, maka secara default, font-size globalnya 100%.
    }
    KS_LP_content = '<div class="'+settings.theme+'" id="KS_wrapper'+marker+'" style="display:block; font-size:'+settings.font_size+'; "></div>';
    if ( settings.position == "top" && KS_LP_getWrapper(marker) == false ) { // kalau wrapper-nya gak ada, maka insert.Kalo ada, gausah
      $( KS_LP_content ).insertBefore( element ); // menambah wadah wrapper preview
    }else if ( settings.position == "bottom" && KS_LP_getWrapper(marker) == false ) {
      $( KS_LP_content ).insertAfter( element ); // menambah wadah wrapper preview
    }else{
      status = false;
    }
    return status;
  }
  function KS_LP_getWrapper(marker){
    if ( $('#KS_wrapper'+marker).length == 0 ) {
      return false;
    }
    else{
      return '#KS_wrapper'+marker; // indexer untuk wrapper
    }
    
  }
  function KS_LP_create_loader(marker, settings){
    //KS_LP_debug(settings, "KS_LP_create_loader")
    let wrapper = KS_LP_getWrapper(marker);
    if ( wrapper != false ) {
      KS_LP_content = '<div class="'+settings.size+'-loader" id="'+marker+'loader" style="display: none;"><img src="'+settings.plugin_path+'img/loader-'+settings.loader+'.gif"></div>'; // ketika muncul tidak boleh ditampilkan
      if ( settings.position == "top" ) {
        $( wrapper ).append( KS_LP_content ); // menambah loader
      }else if ( settings.position == "bottom" ) {
        $( wrapper ).prepend( KS_LP_content ); // menambah loader
      }
    }
    else{
      console.log("Failed to create wrapper element!")
    }
  }



  function KS_LP_close_previewer(marker, size){
    // console.log("==closed==")
    var settings = { size: size } ; // diakalin aja hehe, dibolak-balik isi object nya wkwkk. Soalnya dari onclick gak bisa passing object. bisanya cuman string
    var target = KS_LP_getTarget(marker, settings); // indexer untuk target
    target.hide(400); // sembunyikan pakai animasi
    setTimeout( function(){ 
      target.remove(); // hapus setelah 500 ms
    }, 500 );
  }
  function KS_LP_showLoader(marker, settings) {
    //KS_LP_debug(settings, "KS_LP_showLoader")
    setTimeout( function() { // dikasih jeda 200ms biar gak nge-glitch waktu loadernya muncul
      $('#'+marker+'loader').show();
    }, 300 )
  }
  function KS_LP_hideLoader(marker, settings) {
    //KS_LP_debug(settings, "KS_LP_hideLoader")
    setTimeout(function() {
      $('#'+marker+'loader').hide();
    }, 800);
  }
  function KS_LP_is_loader_exists(marker, settings) {

    //KS_LP_debug(settings, "KS_LP_is_loader_exists")
    var a = $('#'+marker+'loader').length;
    if ( a == 0 ) { // kalau nilainya nol berarti gak ada loadernya
      return false;
    }else{
      return true;
    }
  }



  function KS_LP_encode(string){
    // Encode the String
    var encodedString = window.btoa(string);
    // slash diganti jadi "garis_miring" biar bisa kebaca sama CodeIgniter
    encodedString = encodedString.replace(new RegExp(/\//g), "garis_miring");
    return(encodedString);
  }
  function KS_LP_decode( marker, settings, string){
    // Encode the String
    try {
      var decodedString = window.atob(string);
      return(decodedString);
    } catch(e){
      KS_LP_printConsole(settings,"LP: Error on decoding data!");
      KS_LP_terminate_all_process(marker, settings);
      KS_LP_close_previewer(marker, settings.size);
      KS_LP_hideLoader(marker, settings);
    }

    
    
  }
  function KS_LP_looping_data(data, marker, settings) {
    //KS_LP_debug(settings, "KS_LP_looping_data")
    var target = KS_LP_getTarget(marker, settings); // indexer untuk target
    var marker_plus_size = ".wadah_previewer-"+settings.size;
    // Di sini meta og yang jadi prioritas untuk ditampilkan
    // dan elemennya hanya di append ketika tidak ada elemen yang sama

    var style_gambar = '';
    var style_wadah = '';
    var description_overlay = '';

    if ( settings.size == "normal" ) {
      style_gambar = 'style="width:'+settings.img_size+';"';
      style_wadah = 'style="width:'+settings.img_size+'; height:'+settings.img_size+'; background-image: url(\''+settings.plugin_path+'img/loader-'+settings.loader+'.gif\'); background-repeat: no-repeat; background-position: center; background-size:20px;"';
    }
    else if( settings.size == "large" ){
      style_gambar = 'style="height:'+settings.img_size+';"';
      style_wadah = 'style="background-image: url(\''+settings.plugin_path+'img/loader-'+settings.loader+'.gif\'); background-position:center; background-repeat: no-repeat; background-size:20px;"';
    }
    

    for (var i = 0; i < settings.components.length; i++) { // looping bagian ini ga akan bisa dijelaskan dengan akal manusia wkwkwk
      if ( settings.components[i] == "image" ) {
        if ( $('#'+marker+'previewer_image').length == 0 ) { //saat tidak ada, maka append
          
          if ( data.og_image ) {
            KS_LP_content = '<div class="previewer_image" id="'+marker+'previewer_image" '+style_wadah+'><img src="'+data.og_image+'" '+style_gambar+'></div>';
            target.append(KS_LP_content);
          }
        }else{ //saat ada, maka ganti value
          $('#'+marker+'previewer_image img').attr("src", data.og_image);
        }
      }
      
      else if ( settings.components[i] == "title" ) {
        if ( $('#'+marker+'previewer_title').length == 0 ) { //saat tidak ada, maka append
          if ( data.og_title ) {
            KS_LP_content = '<p class="previewer_title" id="'+marker+'previewer_title">'+data.og_title+'</p>';
            target.append(KS_LP_content);
          }
          else if( data.page_title ){
            KS_LP_content = '<p class="previewer_title" id="'+marker+'previewer_title">'+data.page_title+'</p>';
            target.append(KS_LP_content);
          }
        }else{ //saat ada, maka ganti value
          if ( data.og_title ) {
            $('#'+marker+'previewer_title').html(data.og_title);
          }
          else if( data.page_title ){
            $('#'+marker+'previewer_title').html(data.page_title);
          }
        }
      }
      
      else if ( settings.components[i] == "site_name" ) {
        if ( $('#'+marker+'previewer_site_name').length == 0 ) { //saat tidak ada, maka append
          if ( data.og_site_name ) {
            KS_LP_content = '<p class="previewer_site_name" id="'+marker+'previewer_site_name">'+data.og_site_name+'</p>';
            target.append(KS_LP_content);
          }
        }else{ //saat ada, maka ganti value
          $('#'+marker+'previewer_site_name').html(data.og_site_name);
        }
      }

      else if ( settings.components[i] == "source_url" ) {
        if ( $('#'+marker+'previewer_source_url').length == 0 ) { //saat tidak ada, maka append
          if ( data.source_url ) {
            KS_LP_content = '<p class="previewer_source_url" id="'+marker+'previewer_source_url">'+data.source_url+'</p>';
            target.append(KS_LP_content);
          }
        }else{ //saat ada, maka ganti value
          $('#'+marker+'source_url').html(data.source_url);
        }
      }

      else if ( settings.components[i] == "description" ) {
        // Di atasnya nanti ditambah overlay biar bagus
        if ( data.og_image ) {
          // kalau ada image-nya, overlaynya diseger sedikit ke kanan, kalo enggak. Mepet di kiri
          var overlay = '<span class="previewer_description_overlay" id="'+marker+'previewer_description_overlay" style="left:'+settings.img_size+';"></span>';
        }else{
          var overlay = '<span class="previewer_description_overlay" id="'+marker+'previewer_description_overlay"></span>';
        }

        if ( $('#'+marker+'previewer_description').length == 0 ) { //saat tidak ada, maka append
          if ( data.og_description ) {
            KS_LP_content = '<p class="previewer_description" id="'+marker+'previewer_description">'+data.og_description+overlay+'</p>';
            target.append(KS_LP_content);
          }
          else if( data.description ){
            KS_LP_content = '<p class="previewer_description" id="'+marker+'previewer_description">'+data.description+overlay+'</p>';
            target.append(KS_LP_content);
          }
          

        }else{ //saat ada, maka ganti value
          if ( data.og_description ) {
            $('#'+marker+'previewer_description').html(data.og_description+overlay);

            
          }
          else if( data.description ){
            $('#'+marker+'previewer_description').html(data.description+overlay);

          }

          
        }
      }

      else if ( settings.components[i] == "site_name" ){
        if ( $('#'+marker+'previewer_site_name').length == 0 ) { //saat tidak ada, maka append
          if ( data.og_site_name ) {
            KS_LP_content = '<p class="previewer_site_name" id="'+marker+'previewer_site_name">'+data.og_site_name+'</p>';
            target.append(KS_LP_content);
          }
        }else{ //saat ada, maka ganti value
          $('#'+marker+'previewer_site_name').html(data.og_site_name);
        }
      }
      else if ( settings.components[i] == "close-button" ){ 
        // tombol close    
        if ( $('#'+marker+'previewer_close').length == 0 ) {
          KS_LP_content = '<a class="previewer_close" id="'+marker+'previewer_close" href="javascript:void(0)" onclick="KS_LP_close_previewer(\''+marker+'\', \''+settings.size+'\')">&times;</a>';
          target.append(KS_LP_content);
        }
      }
      // PENTING!!!
      // else{ // Untuk sementara yang lain dicetak biasa ke html (kembangkan lagi pak!) .widibaka
      //   if ( $('#'+marker+'previewer_custom_data').length == 0 ) { //saat tidak ada, maka append
      //     KS_LP_content = '<p class="previewer_custom_data">'+data+'</p>';
      //     target.append(KS_LP_content);
      //   }else{ //saat ada, maka ganti value
      //     $('#'+marker+'previewer_custom_data').html(data.og_site_name);
      //   }
      // }
    }

    
  }
  function KS_LP_susun_komponen_previewer(data, marker, settings) {
    //KS_LP_debug(settings, "KS_LP_susun_komponen_previewer")

    let element = KS_LP_getElement(marker, settings); // indexer untuk element / textarea sumber dari link

    var marker_plus_size = marker+settings.size;

    var target = KS_LP_getTarget(marker, settings); // indexer untuk target

    if ( KS_LP_check_wadah(marker, settings) == false ) { // kalau wadah preview-nya gak ada
      
      KS_LP_create_wadah(marker, settings);

      KS_LP_looping_data(data, marker, settings);

    }else{ // kalau wadah preview-nya ada

      KS_LP_looping_data(data, marker, settings);

    }
    
    target = KS_LP_getTarget(marker, settings); // indexer untuk target // indexer untuk target (SETELAH DILAKUKAN LOOPING DATA)

    if ( target.css("display") == "none" ) { // kalau previewernya hidden, maka tampilkan
      target.show(400);
    }
  }

  function seleksi_string_url(res){

    let selected_url;
    
    for (var i = 0; i < res.length; i++) {
      // hanya jalan kalau lebih dari 8 karakter, dan ada link, dan hanya jalan kalau wadah previewnya udah hilang
      if( res[i].length > 8 && res[i].indexOf('http') == 0 ){ // sama dengan nol karena http harus berada di depan
        if ( KS_LP_last_requested_url == res[i] ) {
          selected_url = "masih_sama";
        }else{
          selected_url = res[i]; //dan link yang diminta sekarang tidak sama dengan link yang sebelumnya            
        }
      }
    }

    if ( typeof(selected_url) == 'undefined' ) {
      selected_url = false; // kalau hasilnya malah undefined, berarti gak ada linknya, return false biar diterima sebagai sinyal bahwa gak ada link
    }

    return selected_url;
  }

  function KS_LP_decodeHtml(html) {
      // entah kenapa ada masalah, jadi &nbsp; diganti spasi aja pakai method replace
      // html = html.replace('/&nbsp;/g', " ");
      var txt = document.createElement("textarea");
      txt.innerHTML = html;
      return txt.value;
      // return html;
  }

  function KS_LP_get_the_url(marker, settings){
    //KS_LP_debug(settings, "KS_LP_check_wadah")
    let element = KS_LP_getElement(marker, settings); // indexer untuk element
    var str = '';
    if ( settings.type == "html_element" ) {
      str = element.html();
    }
    // jika Type Anchor
    else if ( settings.type == "hyperlink" ) {
      str = element.attr("href"); // ambil nilai dari hrefnya
    }else if ( settings.type == 'use_editor_plugin' ) {
      str = element.val();
      str = KS_LP_decodeHtml(str); // decode kembali kalau ada html entities
    }
    else{
      str = element.val();
    }

    var url = false;
    str = str.replace(/(\r\n|\n|\r)/gm, " "); // ganti semua linebreak dengan spasi, biar nanti gak fail requestnya
    str = str.replace(/<\/?[^>]+(>|$)/g, " "); // hapus semua tag html kalau ada yang masuk, bukan dihapus tp diganti spasi aja

    var res = str.split( new RegExp(/\s/) ); // split berdasarkan whitespace, bukan spasi semata

    if ( settings.type == 'live' ) {

      for (var i = 0; i < res.length; i++) {


        // hanya jalan kalau lebih dari 8 karakter, dan ada link,
        // di type 'live' ini, kalau ada httpnya dan setelahnya masih ada element array lagi (meskipun empty element), jadi ini bakal jalan ketika setelah link ada spasi, mirip cara kerja link previewer di whatsapp
        //if( res[i].length > 8 && res[i].indexOf('http') == 0 && res.length - i > 1 ){  
        // sama dengan satu karena saat res.length = 5, i maksimal = 4. Tahu kan maksudnya? 



        if( res[i].length > 8 && res[i].indexOf('http') == 0 ){  
          if ( KS_LP_last_requested_url == res[i] ) {
            url = "masih_sama";
          }
          else{
            url = res[i]; //dan link yang diminta sekarang tidak sama dengan link yang sebelumnya            
          }
        }
      }
    }
    else if ( settings.type == 'html_element' ) {
      url = seleksi_string_url( res ); // sebenarnya ini sama, tapi entah kenapa bakal enak development nya kalau dipisah2 dulu gini
    }
    else if ( settings.type == 'button-triggered' ) {
      url = seleksi_string_url( res );
    }
    else {
      url = seleksi_string_url( res );
    }
    return url;
    
  }
  function KS_LP_printConsole(settings, string) {
    if (settings.console == 1) {
     console.log(string);
    };
  }
  // function KS_LP_debug(settings, string) {
  //   if (settings.debug == 1) {
  //    console.log(string);
  //   };
  // }

  function KS_LP_make_request(marker, settings, url0){
    //KS_LP_debug(settings, "KS_LP_make_request")

    let element = KS_LP_getElement(marker, settings); // indexer untuk element / textarea sumber dari link

    var target = KS_LP_getTarget(marker, settings); // indexer untuk target

    if ( target ) {
      KS_LP_showLoader(marker, settings);
      KS_LP_printConsole(settings, "Requesting ...");

      //
      var decoded_regcode = KS_LP_decode( marker, settings, KS_LP_registration_code );
      //

      var url_plus_regcode = url0 + "@pembatas@" + decoded_regcode;

      var encodedUrl = KS_LP_encode(url_plus_regcode);
      
      let url_ajax = settings.api_receiver_path+encodedUrl;

      KS_LP_printConsole(settings, "URL = "+url0 );
      KS_LP_printConsole(settings, "Request code: "+encodedUrl);

      $.ajax({
           url: url_ajax,
           type:'GET',
           success: function(data_mentah){
             data_mentah = KS_LP_decode( marker, settings, data_mentah);
             KS_LP_printConsole(settings, "Data acquired");

             // KS_LP_printConsole(settings, "Raw data: "+data_mentah);
             // kalau data mentahnya kosong, habisin ajalah semua prosesnya, buang2 waktu aja
             if ( data_mentah.length < 5 ) { 
              KS_LP_printConsole(settings, "Due to empty data ...");
              KS_LP_terminate_all_process(marker, settings);
              KS_LP_close_previewer(marker, settings.size);
             }

             // kalau lebih dari 30 detik, matikan proses (timeout)
             // setTimeout((function() {
             //     if (settings.console == 1) {console.log('(TIME-OUT 30s)')}
             //     KS_LP_terminate_all_process(marker, settings);
             // }), 30000);

             var data = JSON.parse( data_mentah ); // ternyata json harus diparse dulu, gak bisa langsung diakses
             KS_LP_printConsole(settings, "Parsing data ...");
               if ( data.status == "fail" ) { // kalau status isinya gagal, maka jangan dieksekusi, malah justru previewnya harus dimatiin
                 KS_LP_close_previewer(marker, settings.size);

                 KS_LP_printConsole(settings, `Parsing data [${data.status}]!`);
                 KS_LP_printConsole(settings, data_mentah);

                 KS_LP_hideLoader(marker, settings);
                 
               }
               else if ( data.status == "success" ) {
                 KS_LP_printConsole(settings, `Parsing data [${data.status}]!`);
                 KS_LP_printConsole(settings, data);
                 
                 if ( KS_LP_last_requested_url != url0 ) {

                  KS_LP_close_previewer(marker, settings.size); // kalau link-nya gak sama, tutup previewnya, nanti diganti yang baru
                  setTimeout( function() {
                    KS_LP_susun_komponen_previewer(data, marker, settings); // dikasih delay 0.6 detik biar proses close previewer habis dulu
                  }, 600 )
                 }else {
                  KS_LP_susun_komponen_previewer(data, marker, settings);
                 }
                 

                 KS_LP_last_requested_data = data; // simpan ke variabel global
                 KS_LP_last_requested_url = url0; // simpan ke variabel global

                 KS_LP_printConsole(settings, "--koreksoft request ended");

                 if ( typeof(settings.get_data) != "undefined" ) {
                    KS_LP_all_data[marker] = data; // set data biar bisa diakses kalo KS_LP_get_data
                    KS_LP_get_data(marker, settings); // get data kalo diset
                 }

                 KS_LP_hideLoader(marker, settings); // setelah selesai maka sembunyikan loader
               }
           },
           fail: function(xhr, textStatus, errorThrown) {
             alert('Link Preview Error:'+errorThrown);
           }
      });


      
    }
    else{ 
      return;
    }
  }
  function KS_LP_get_data(marker, settings) {

    for (var i = 0; i < settings.get_data.index.length; i++) {
      //cari variabel penampung data
      let current_data = KS_LP_all_data [marker] [settings.get_data.index[i]];
      // isi data
      if ( typeof(current_data) != 'undefined' ) {
        $("#"+settings.get_data.target[i]).val(current_data);
      }
    }
  }
  function KS_LP_load_css(marker, settings){
    //KS_LP_debug(settings, "KS_LP_load_css")
    // memanggil file CSS ::start
    if ( Style_load_status == false ) {
      Style_load_status = true; // perbarui starus
      $.get( settings.plugin_path + "css/style.css", function( data, status ) {
        var re = new RegExp("{-&-}font-size{-&-}","g");
        data = data.replace(re, KS_LP_global_font_size); //  Semua (global) yang cocok dengna {{marker}} akan diganti dengan value marker saat ini
        data = '<style>'+data+"</style>";
        $("head").append(data);
        // alert(data)

      } );
    }
    // memanggil file CSS ::end
  }
  function KS_LP_init(marker, settings){
    //KS_LP_debug(settings, "KS_LP_init")
    // inisialisasi dimulai

    

    // pembeda jika live preview (while typing)
    if ( settings.type == 'live' || settings.type == 'use_editor_plugin' || settings.type == 'use_editor_plugin' ) {
      let element = KS_LP_getElement(marker, settings); // indexer untuk element / textarea sumber dari link
      element.attr('oninput', 'triggered_oninput()');
    }

    // load css
    KS_LP_load_css(marker, settings);

    // pertama, membuat pembungkus wadahnya
    if ( KS_LP_create_wrapper(marker, settings) == true ) {
      // lalu bikin loader
      if ( KS_LP_is_loader_exists(marker, settings) == false ) { // kalau wadah loader-nya gak ada
        if ( settings.loader != "no_loader" ) {
          KS_LP_create_loader(marker, settings);
          KS_LP_showLoader(marker, settings);
        }
      }
    }

    
    
    settings.api_receiver_path = settings.plugin_path + "php/api_receiver.php?koreksoft_lp="; // menambahkan object api receiver

    if ( KS_LP_check_wadah(marker, settings) == false ) { // kalau wadah preview-nya gak ada
      
      KS_LP_create_wadah(marker, settings);
    
    }
    // inisialisasi selesai


    // Membedakan type previewer dulu, baru memberi tindakan
    if ( settings.type == 'live' || settings.type == 'use_editor_plugin' ) {
      // tunggu status typing dulu, baru berani jalanin scriptnya
      typing_status_detector_for_live_preview(marker, settings);
    }
    else{
      KS_LP_main_function(marker, settings); //<-- inisialisasi.
    }

  }

  function typing_status_detector_for_live_preview(marker, settings) {


    // Harus ada jeda beberapa detik setelah user berhenti mengetik, baru boleh melakukan request
    KS_LP_time_recorded = new Date().getTime();    
    
    setTimeout( function(){
      KS_LP_time_now = new Date().getTime();

      if( KS_LP_time_now - KS_LP_time_recorded >= KS_LP_delay_before_request ){
            KS_LP_printConsole(settings, "Typing is done");
                        
            // execute here!!!!!
            KS_LP_main_function(marker, settings); //<-- main function
            // execute here!!!!!

      }
      else{
            KS_LP_printConsole( settings, "Still typing ..." )
      }
    }, KS_LP_delay_before_request );
  }
  function KS_LP_main_function(marker, settings){
    //KS_LP_debug(settings, "KS_LP_main_function")
    KS_LP_printConsole(settings, "--koreksoft lp begins");
    let element = KS_LP_getElement(marker, settings); // indexer untuk element / textarea sumber dari link
    let url_request = KS_LP_get_the_url( marker, settings );// hanya mencari yang ada http
    if ( url_request == false ) {
      KS_LP_close_previewer(marker, settings.size);
      KS_LP_printConsole(settings, "--koreksoft request just ignored");
      KS_LP_hideLoader(marker, settings);
        
    }else if( url_request == 'masih_sama' ){
      
      if ( typeof(settings.get_data) != "undefined" ) {
         KS_LP_all_data[marker] = KS_LP_last_requested_data; // set data biar bisa diakses kalo KS_LP_get_data
         KS_LP_get_data(marker, settings); // get data kalo diset
      }

      KS_LP_susun_komponen_previewer( KS_LP_last_requested_data, marker, settings ); // kalau url masih sama, maka tampilkan lagi datanya.
      KS_LP_printConsole(settings, "-- ignored (same URL)");
      KS_LP_hideLoader(marker, settings);
    }
    else{
      
      KS_LP_printConsole(settings, "Preparing to request ...");
      
      if ( KS_LP_getWrapper(marker) != false ) { // kalau wrapper sudah ada, baru bisa jalan
        KS_LP_make_request( marker, settings, url_request );
      }else{
        KS_LP_printConsole(settings, "Wrapper is missing!");
      }

    }
    
    KS_LP_last_textarea_value = element.val(); // simpan di variabel global
  }

  // kayaknye function ini gak perlu deh
  function KS_LP_terminate_all_process(marker, settings){
    //KS_LP_debug(settings, "KS_LP_terminate_all_process")
    KS_LP_printConsole(settings, 'Loader closed!');
    KS_LP_hideLoader(marker, settings);
    // window.stop();
  }
  function KS_LP_ubah_marker_of_multiple_elements(marker, Element_length, settings) {
    //KS_LP_debug(settings, "KS_LP_ubah_marker_of_multiple_elements")
    var element = KS_LP_getElement(marker, settings);
    var markerEach = null;

    var i = 0;
    element.each( function() {
      markerEach = marker+"-"+i;
      $(this).attr('koreksoft_lp', markerEach); // ubah marker untuk tiap element
      KS_LP_init(markerEach, settings); //<-- inisialisasi.
      i++;
    });

  }



  // RUNNER
  function KS_LP_run_previewer(marker, settings){
    //KS_LP_debug(settings, "KS_LP_run_previewer")

    // Kalau tidak ada setting-nya, kasih setting default
    if ( typeof(settings) == 'undefined' ) {
      settings = KS_LP_settings_default;
    }else{
      // kalau ada beberapa yang rumpang
      if ( typeof(settings.type) == 'undefined' ) {
        settings.type = KS_LP_settings_default.type;
      }
      if ( typeof(settings.img_size) == 'undefined' ) {
        settings.img_size = KS_LP_settings_default.img_size;
      }
      if ( typeof(settings.size) == 'undefined' ) {
        settings.size = KS_LP_settings_default.size;
      }
      if ( typeof(settings.position) == 'undefined' ) {
        settings.position = KS_LP_settings_default.position;
      }
      if ( typeof(settings.components) == 'undefined' ) {
        settings.components = KS_LP_settings_default.components;
      }
      if ( typeof(settings.loader) == 'undefined' ) {
        settings.loader = KS_LP_settings_default.loader;
      }
      if ( typeof(settings.theme) == 'undefined' ) {
        settings.theme = KS_LP_settings_default.theme;
      }
    }
    

    // Kalau tidak ada plugin path, set default value
    if ( typeof(settings.plugin_path) == 'undefined' ) {
      settings.plugin_path = KS_LP_global_plugin_path;
    }
    // global font size
    if ( typeof(KS_LP_global_font_size) == 'undefined' ) {
      KS_LP_global_font_size = "100%";
    }


    var Element_length = KS_LP_getElementLength(marker, settings); // Mendeteksi apakah elementnya ada banyak atau cuma satu

    if ( Element_length == 1 ) {
      KS_LP_init(marker, settings); //<-- inisialisasi.
    }
    else if ( Element_length > 1 ){
      // alert(Element_length);
      KS_LP_ubah_marker_of_multiple_elements(marker, Element_length, settings);
    }

  }




  function KS_LP_switch_theme_DEMO(marker){
    var wrapper = $( 'div[id*="KS_wrapper'+marker+'"]' ); //cari semua id yang mengandung marker
    if ( wrapper.hasClass("dark") ) { wrapper.removeClass("dark");wrapper.addClass("light"); }
    else if ( wrapper.hasClass("light") ) { wrapper.removeClass("light");wrapper.addClass("dark"); }
  }
  function KS_LP_set_global_font_size(value){
    KS_LP_global_font_size = value;
  }
  function KS_LP_set_reg_code(value){
    KS_LP_registration_code = value;
  }
  function KS_LP_set_global_plugin_path(value){
    KS_LP_global_plugin_path = value;
  }
  function KS_LP_set_font_size_DEMO(marker, value){
    var wrapper = $( '[id*="KS_wrapper'+marker+'"]' ); //cari semua id yang mengandung marker
    wrapper.css('font-size', value);
  }
  function KS_LP_set_img_size_DEMO(marker, value){

    value = value;

    var selector_previewer_image = '[id*="'+marker+'"][id$="previewer_image"]';//cari semua id yang mengandung marker dan diakhiri "previewer_image"
    var previewer_image = $( selector_previewer_image );
    
    var wrapper = previewer_image.parent();

    if ( wrapper.hasClass("wadah_previewer-large") ) {
      var img = previewer_image.children("img");

      previewer_image.css('height', value);
      img.css('height', value);

    }
    else if( wrapper.hasClass("wadah_previewer-normal") ){
      var img = previewer_image.children("img");

      previewer_image.css('width', value);
      previewer_image.css('height', value);
      img.css('width', value);

      var selector_description_overlay = '[id*="'+marker+'"][id$="previewer_description_overlay"]';
      var description_overlay = $( selector_description_overlay );
      description_overlay.css('left', value);
      previewer_image.parent().css("max-height", value); // mengubah max-height dari wrapper
    }


    

  }