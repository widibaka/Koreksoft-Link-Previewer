<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Koreksoft Link Previewer | Documentation by Widi Baka</title>

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/stroke.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shThemeRDark.css" media="all">
    <link rel="stylesheet" type="text/css" href="../plugins/summernote/summernote-bs4.css">

    <!-- CUSTOM -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

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
    #control_buttons_child{
        background-color: #eee;
        border-radius: 5px;
        padding-bottom: 10px;
        overflow: auto;
    }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div class="container">

            <section id="top" class="section docs-heading">

                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>Koreksoft Link Previewer ver.1.0</h1>
                            <p class="lead">User Manual</p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                </div>
                <!-- end row -->

                <hr>

            </section>
            <!-- end section -->

            <div class="row">

                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li><a href="#line1">Getting Started</a>
                                <ul class="nav">
                                    <li><a href="#line1_1">Unduh Link Previewer</a></li>
                                    <li><a href="#line1_2">Prasyarat</a></li>
                                </ul>
                            </li>
                            <li><a href="#line2">Instalasi</a>
                                <ul class="nav">
                                    <li><a href="#line2_1">Hasil jadi</a></li>
                                    <li><a href="#line2_2">Include jQuery dan Link Previewer</a></li>
                                    <li><a href="#line2_3">Mengubah directory plugin</a></li>
                                    <li><a href="#line2_4">Contoh sederhana</a></li>
                                </ul>
                            </li>
                            <li><a href="#line3">Basic API</a>
                                <ul class="nav">
                                    <li><a href="#line3_1">Inisialisasi Link Previewer</a></li>
                                    <li><a href="#line3_2">Inisialisasi dengan opsi</a></li>
                                </ul>
                            </li>
                            <li><a href="#line4">Selami lebih dalam</a>
                                <ul class="nav">
                                    <li><a href="#line4_1">Mengamati aktivitas di console</a></li>
                                    <li><a href="#line4_2">Preview dengan button</a></li>
                                    <li><a href="#line4_3">Preview dengan textarea sambil mengetik</a></li>
                                    <li><a href="#line4_4">Preview dengan hyperlink</a></li>
                                    <li><a href="#line4_5">Preview dengan banyak element</a></li>
                                    <li><a href="#line4_6">Image size</a></li>
                                    <li><a href="#line4_7">Font size</a></li>
                                    <li><a href="#line4_8">Menambah Extra CSS</a></li>
                                    <li><a href="#line4_9">Preview dengan summernote.js</a></li>
                                </ul>
                            </li>

                            <li><a href="#line5">Get Meta Data</a></li>
                            <li><a href="#line6">Bantuan</a></li>
                            <li><a href="#line7">Pembelian</a>
                                <ul class="nav">
                                    <li><a href="#line7_1">Cara Pembelian</a></li>
                                    <li><a href="#line7_2">Cara Memakai Kode Premium</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav >
                </div>
                <div class="col-md-9">
                    <section class="welcome">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Pendahuluan<hr></h2>
                                <div class="row">

                                    <div class="col-md-12 full">
                                        <div class="intro1">
                                            <ul>
                                                <li><strong>Nama : </strong>Link Previewer</li>
                                                <li><strong>Versi : </strong> v 1.0</li>
                                                <li><strong>Author  : </strong> <a href="http://github.com/widibaka" target="_blank">Widi Baka</a></li>
                                                <li><strong>Email Bantuan : </strong> <a href="mailto:widibaka55@gmail.com" target="_blank">widibaka55@gmail.com</a></li>
                                                <li><strong>Jenis : </strong> <a href="#">Gratis beriklan, atau berbayar dengan Kode Premium</a></li>
                                                <li><strong>Terakhir dimodifikasi : </strong> 20 Agustus 2020</li>
                                            </ul>
                                        </div>
                                        <p>Dokumentasi ini ditujukan untuk membimbing pengguna dalam melakukan kustomisasi. Silakan simak baik-baik isi dokumentasi ini agar Anda dapat memahami cara menggunakan previewer ini dengan baik.</p>
                                        <p>Terima kasih kepada saya sendiri karena telah berhasil menyelesaikan project ini.</p>

                                        
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </section>

                    <section id="line1" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Getting Started <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <h4 id="line1_1">Unduh Plugin Link Previewer</h4>
                                <p>Silakan unduh plugin-nya melalui github. Di dalamnya sudah termasuk user manual. Unduh dan ekstrak, kemudian masukkan ke dalam folder project Anda.</p>
                                <p><a target="_blank" href="https://github.com/widibaka/Koreksoft-Link-Previewer" class="btn btn-lg btn-primary"><i class="fa fa-github mr-2"></i> Unduh Link Previewer</a></p>

                                <hr>

                                <h4 id="line1_2">Prasyarat</h4>
                                <p>Anda memerlukan perangkat lunak berikut untuk mulai menggunakan Link Previewer</p>
                                <ol>
                                    <li>Code Editing Software (cth: Dreamweaver, Sublime Text atau Notepad)</li>
                                    <li>Web Browser (cth: Google Chrome atau Mozilla Firefox)</li>
                                    <li>PHP 5.4 atau lebih baru</li>
                                    <li>jQuery 3 atau lebih baru</li>
                                    <li>Koneksi internet</li>
                                </ol>
                                <div class="intro2 clearfix">
                                    <p><i class="fa fa-exclamation-triangle"></i> Mohon penuhi syarat-syarat di atas agar Link Previewer dapat berjalan dengan baik.
                                    </p>
                                </div>

                                

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line2" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Instalasi <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <h4 id="line2_1">Hasil jadi <a href="#top">#kembali ke atas</a></h4>

                        <p>Agar dapat memahami bagaimana cara kerja dari Link Previewer, akan lebih efektif jika Anda melihat terlebih dahulu tampilan final dari Preview ini.</p>

                        <button type="button" class="btn btn-lg btn-sm btn-primary" id="show-example">Show Example</button>

                        <p># Berikut ini adalah hasil jadi untuk size normal:
                            <div class="row col-sm-12" koreksoft_lp="example1">https://www.youtube.com/watch?v=CmcjO4SWrgQ</div>
                        </p>
                        <!-- Control buttons -->
                        <div id="control_buttons" class="col-12 pt-0 mt-0 pb-3 mb-0" style="display: none; height: auto; overflow: auto; margin: 0px; padding: 0px;">
                            <div id="control_buttons_child" class="col-sm-12 col-md-6 pt-0 mt-0 pb-0">
                                <div class="slidecontainer text-center pt-0 mt-0 pb-0 mb-0">
                                  <p class=" pt-0 mt-0 pb-0 mb-0" style=" padding: 0px;">Sesuaikan font-size: <span id="ukuran_font">100%</span></p>
                                  <input type="range" min="1" max="100" value="100" id="adjust_font_size">
                                </div>
                                <div class="slidecontainer text-center pt-0 mt-0 pb-0 mb-0">
                                  <p class=" pt-0 mt-0 pb-0 mb-0" style=" padding: 0px;">Sesuaikan image-size: <span id="ukuran_image">148px</span></p>
                                  <input type="range" min="1" max="500" value="148" id="adjust_img_size">
                                </div>
                                <button type="button" class="btn btn-lg btn-sm btn-primary mb-3" id="third_theme">Switch Theme</button>
                            </div>
                        </div>

                        <hr>

                        <p># Berikut ini hasil jadi untuk size large:
                                <div koreksoft_lp="example2">https://www.youtube.com/watch?v=CmcjO4SWrgQ</div>
                        </p>
                        <hr>
                        

                        <h4 id="line2_2">Include jQuery dan Link Previewer <a href="#top">#kembali ke atas</a></h4>

                        <pre class="brush: html; highlight: [2,4]">
                            &lt;!-- jQuery --&gt;
                            &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js&quot;&gt;&lt;/script&gt;
                            &lt;!-- Koreksoft Link Previewer --&gt;
                            &lt;script type=&quot;text/javascript&quot; src=&quot;plugins/koreksoft-link-previewer/js/main.js&quot;&gt;&lt;/script&gt;
                        </pre>

                        <p>Letakkan script jQuery dan Link Previewer di bagian bawah project Anda.</p>

                        <hr>

                        <h4 id="line2_3">Mengubah directory plugin <a href="#top">#kembali ke atas</a></h4>

                        <pre class="brush: html;">
                            &lt;!-- Koreksoft Link Previewer --&gt;
                            &lt;script type=&quot;text/javascript&quot; src=&quot;--directory anda--/koreksoft-link-previewer/js/main.js&quot;&gt;&lt;/script&gt;
                            &lt;script&gt;
                                KS_LP_set_global_plugin_path(&quot;--directory anda--/koreksoft-link-previewer/&quot;); // isi dengan directory Anda sendiri
                            &lt;/script&gt;
                            
                        </pre>

                        <p>Path "plugins/koreksoft-link-previewer/" akan diambil sebagai default apabila tidak di set. Tambahkan function di atas setelah include script main.js dan ubah value yang dilemparkan ke dalamnya dengan directory yang Anda kehendaki. <i>Note: directory harus diakhiri dengan / (front slash) agar tidak error.</i></p>

                        <hr>
                        <h4 id="line2_4">Contoh Sederhana <a href="#top">#kembali ke atas</a></h4>

                        <pre class="brush: html;">
                            &lt;div koreksoft_lp=&quot;example1&quot;&gt;https://www.youtube.com/watch?v=CmcjO4SWrgQ&lt;/div&gt;
                        </pre>

                        <p>Pertama, Anda harus membuat sebuah element yang memiliki attribute bernama 'koreksoft_lp' dan attribute tersebut memiliki value tertentu, value tersebut bebas untuk Anda tentukan.</p>

                        <pre class="brush: js;">
                            $(document).ready(function() {
                                KS_LP_run_previewer(&quot;example1&quot;);
                            }
                        </pre>

                        <p>Setelah itu Anda diharuskan menjalankan function bernama KS_LP_run_previewer yang di dalamnya berisi parameter yang bernilai sama dengan nilai dari marker yang telah Anda buat sebelumnya.</p>

                        <pre class="brush: html; highlight: [8,17]">
                            &lt;!DOCTYPE html&gt;
                            &lt;html lang=&quot;en&quot;&gt;
                            &lt;head&gt;
                              &lt;meta charset=&quot;UTF-8&quot;&gt;
                              &lt;title&gt;Link Previewer&lt;/title&gt;
                            &lt;/head&gt;
                            &lt;body&gt;
                              &lt;div koreksoft_lp=&quot;example1&quot;&gt;https://www.youtube.com/watch?v=CmcjO4SWrgQ&lt;/div&gt;
                            &lt;/body&gt;
                            &lt;footer&gt;
                              &lt;!-- jQuery --&gt;
                              &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js&quot;&gt;&lt;/script&gt;
                              &lt;!-- Koreksoft Link Previewer --&gt;
                              &lt;script type=&quot;text/javascript&quot; src=&quot;plugins/koreksoft-link-previewer/js/main.js&quot;&gt;&lt;/script&gt;
                              &lt;script&gt;
                                $(document).ready(function() {
                                    KS_LP_run_previewer(&quot;example1&quot;);
                                }
                              &lt;/script&gt;
                            &lt;/footer&gt;
                            &lt;/html&gt;
                        </pre>

                        <p>Di atas adalah contoh susunan halaman secara keseluruhan. </p>

                    </section>
                    <!-- end section -->

                    <section id="line3" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Basic API <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->                        

                        <h4 id="line3_1">Inisialisasi Link Previewer <a href="#top">#kembali ke atas</a></h4>

                        <pre class="brush: html;">
                            &lt;div koreksoft_lp=&quot;example1&quot;&gt;https://www.youtube.com/watch?v=CmcjO4SWrgQ&lt;/div&gt;
                        </pre>

                        <p>Silakan Anda membuat sebuah element yang memiliki attribute bernama 'koreksoft_lp' dan attribute tersebut memiliki value tertentu, value tersebut bebas untuk Anda tentukan. Sama seperti contoh sederhana di atas.</p>

                        <pre class="brush: js;">
                            $(document).ready(function() {
                                KS_LP_run_previewer(&quot;example1&quot;, {
                                    size: &quot;large&quot;, // piih antara large atau normal
                                });
                            }
                        </pre>

                        <p>Ketika Anda menulis function KS_LP_run_previewer, dan diisi parameter yang bernilai sama dengan nilai dari marker yang telah Anda buat, Anda dapat melempar object ke dalam fuction tersebut. Object itu akan diterima sebagai opsi untuk kustomisasi Link Previewer. Ada banyak opsi yang dapat Anda gunakan, salah satu contoh di sini saya memakai 'size', yang memiliki varian large dan normal.</p>

                        <h4 id="line3_2">Inisialisasi dengan opsi <a href="#top">#kembali ke atas</a></h4>

                        <pre class="brush: html;">
                            &lt;div koreksoft_lp=&quot;example1&quot;&gt;https://dicoding.com&lt;/div&gt;
                        </pre>

                        <p>Silakan Anda buat element yang memiliki attribute 'koreksoft_lp' dan dengan value tertentu seperti contoh sebelumnya.</p>

                        <pre class="brush: js;">
                            $(document).ready(function() {
                                KS_LP_run_previewer(&quot;example1&quot;, {
                                    size: &quot;large&quot;, // piih antara large atau normal
                                    position: &quot;top&quot;, // top, bottom
                                    components: [
                                      &quot;image&quot;, // thumbnail halaman web
                                      &quot;title&quot;, // judul halaman web
                                      &quot;source_url&quot;, // menampilkan link yang di-request
                                      &quot;site_name&quot;, // nama website yang ditampilkan
                                      &quot;description&quot;, // deskripsi halaman web
                                      &quot;close-button&quot;, // tombol close
                                    ],
                                    loader: &quot;blocks&quot;, // bean-eater, blocks, gear, infinity, pulse, ripple, rolling, spin, spinner. Isi "no_loader" jika ingin menghilangkan loader
                                    theme: &quot;light&quot;, // dark, light. light menjadi nilai default saat tidak ditulis
                                });
                            }
                        </pre>

                        <p>Object akan diterima sebagai opsi kustomisasi. Di atas adalah contoh yang lebih banyak.</p>
                    </section>
                    <!-- end section -->

                    <section id="line4" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Selami lebih dalam <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->                        

                        <h4 id="line4_1">Mengamati aktivitas di console <a href="#top">#kembali ke atas</a></h4>

                        <pre class="brush: js;">
                            $(document).ready(function() {
                                KS_LP_run_previewer(&quot;example1&quot;, {
                                    console: 1, // menampilkan aktivitas di console. Isi 1 untuk tampil, dan isi terserah atau hapus untuk mematikannya
                                });
                            }
                        </pre>

                        <p>Saat Anda membuka inspect element - console, maka hasilnya akan seperti berikut:</p>
                        <div class="col-12 clearfix">
                            <img src="images/4_1_console.JPG" style="width: 100%;">  
                        </div>                     



                        <h4 id="line4_2">Preview dengan button <a href="#top">#kembali ke atas</a></h4>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;button type=&quot;button&quot; id=&quot;show-preview&quot;&gt;Show Preview&lt;/button&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            /*
                            * Button triggered preview
                            */
                            $(&quot;#show-preview&quot;).click( function() {
                              KS_LP_run_previewer( &quot;example1&quot;);
                            });
                        </pre></p>

                        <h4 id="line4_3">Preview dengan textarea sambil mengetik <a href="#top">#kembali ke atas</a></h4>
                        <p>Algoritma Link Previewer cukup cerdas untuk menentukan kapan harus menampilkan preview ketika Anda tengah mengetik.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;textarea koreksoft_lp=&quot;example3&quot; rows=&quot;4&quot;&gt;&lt;/textarea&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            /*
                            * Live preview the the link in the middle of typing
                            */
                            function triggered_oninput(){ // buatlah function bernama 'triggered_oninput'
                              KS_LP_run_previewer( &quot;example3&quot;, { type: &quot;live&quot; }); // yang berisi run previewer, dengan opsi type: &quot;live&quot;
                              // hyperlink, live, html_element (html_element as default)
                            }
                            $(document).ready(function() {
                              triggered_oninput(); // jalankan 'triggered_oninput' ketika pertama load halaman
                            }
                        </pre></p>
                        <p>Hasil:
                            <div class="col-12 clearfix">
                                <p>Ketiklah http://koreksoft.online, kemudian tekan space atau enter</p>
                                <div class="col-sm-12 col-md-6 ">
                                    <textarea style="width: 100%;" koreksoft_lp="example3" rows="4"></textarea>
                                </div>
                            </div>
                            
                        </p>

                        <h4 id="line4_4">Preview dengan hyperlink <a href="#top">#kembali ke atas</a></h4>
                        <p>Anda dapat pula menampilkan preview link yang berada di dalam href element anchor.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            <a koreksoft_lp="example4" href="http://dicoding.com">DICODING COURSE</a>
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer( &quot;example4&quot;, { type: &quot;hyperlink&quot; }); // hyperlink, live, html_element (html_element as default)
                            }
                        </pre></p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example-4">Show Example</button>
                            <br>
                            <a koreksoft_lp="example4" href="http://dicoding.com">DICODING COURSE</a>
                        </p>


                        <h4 id="line4_5">Preview dengan banyak element <a href="#top">#kembali ke atas</a></h4>
                        <p>Preview banyak element sekaligus sangat mudah untuk dilakukan.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;ol&gt;
                                &lt;li koreksoft_lp=&quot;example5&quot;&gt;https://myanimelist.net/anime/21273&lt;/li&gt;
                                &lt;li koreksoft_lp=&quot;example5&quot;&gt;http://koreksoft.online&lt;/li&gt;
                                &lt;li koreksoft_lp=&quot;example5&quot;&gt;http://dicoding.com&lt;/li&gt;
                            &lt;/ol&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer( "example5", {
                                    type: "html_element", // hyperlink, live, html_element (html_element as default)
                                    position: "bottom",
                              });
                            }
                        </pre></p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example5">Show Example</button>
                            <br>
                            <ol>
                                <li koreksoft_lp="example5">https://myanimelist.net/anime/21273</li>
                                <li koreksoft_lp="example5">http://koreksoft.online</li>
                                <li koreksoft_lp="example5">http://dicoding.com</li>
                            </ol>
                        </p>



                        <h4 id="line4_6">Image size <a href="#top">#kembali ke atas</a></h4>
                        <p>Anda dapat menentukan image size sesuai kebutuhan Anda.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;p koreksoft_lp=&quot;example6&quot;&gt;http://koreksoft.online&lt;/p&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer( "example6", {
                                    type: "html_element", // hyperlink, live, html_element (html_element as default)
                                    position: "bottom",
                                    img_size: "50px", // ini ukuran tinggi image
                              });
                            }
                        </pre></p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example6">Show Example</button>
                            <br>
                            <p koreksoft_lp="example6">http://koreksoft.online</p>
                        </p>




                        <h4 id="line4_7">Font size <a href="#top">#kembali ke atas</a></h4>
                        <p>Anda pun dapat menentukan font size sesuai kebutuhan Anda.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;p koreksoft_lp=&quot;example7&quot;&gt;http://koreksoft.online&lt;/p&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer( "example7", {
                                    type: "html_element", // hyperlink, live, html_element (html_element as default)
                                    position: "bottom",
                                    font_size: "60%", // font-size dalam satuan persen
                              });
                            }
                        </pre></p>
                        <p>Anda juga dapat menetapkan font size untuk seluruh previewer secara global:
                        <pre class="brush: js;">
                            KS_LP_set_global_font_size('100%'); 
                            // you can set it between 1% and 100%, 
                            // but if you don't, it will take 100% as a default global value
                        </pre></p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example7">Show Example</button>
                            <br>
                            <p koreksoft_lp="example7">http://koreksoft.online</p>
                        </p>



                        <h4 id="line4_8">Menambah extra CSS <a href="#top">#kembali ke atas</a></h4>
                        <p>Anda juga dapat menambahkan extra CSS bagi Anda yang menginginkan kustomisasi yang lebih kompleks lagi.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;p koreksoft_lp=&quot;example8&quot;&gt;https://www.youtube.com/watch?v=CmcjO4SWrgQ&lt;/p&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer( "example8", {
                                    type: "html_element", // hyperlink, live, html_element (html_element as default)
                                    position: "bottom",
                                    img_size: "200px", // biasanya "auto" cocok untuk size large
                                    size: "large",
                                    theme: "dark", // dark, light
                                    loader: "blocks", // bean-eater, blocks, gear, infinity, pulse, ripple, rolling, spin, spinner. Isi "no_loader" ini jika ingin menghilangkan loader
                                    extra_css: "max-height: 400px; text-align: center;", 
                              });
                            }
                        </pre>
                            Cobalah pakai opsi-opsi di atas, kemudian hapus beberapa style css-nya, lalu amati apa yang terjadi.
                        </p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example8">Show Example</button>
                            <br>
                            <p koreksoft_lp="example8">https://www.youtube.com/watch?v=CmcjO4SWrgQ</p>
                        </p>



                        <h4 id="line4_9">Preview dengan summernote.js <a href="#top">#kembali ke atas</a></h4>
                        <p>Link Previewer juga bisa akur dengan text editor <a href="https://summernote.org/">summernote</a>. Anda dapat menggunakan summernote dan preview link secara bersamaan.</p>
                        <p>Element:
                        <pre class="brush: html;">
                            &lt;textarea class=&quot;form-control col-12&quot; koreksoft_lp=&quot;example10&quot; rows=&quot;4&quot; id=&quot;textarea1&quot;&gt;&lt;/textarea&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                              /*
                              * Live preview with Summernote.js
                              */
                              function triggered_onkeyup(){
                                KS_LP_run_previewer( "example10", {
                                  type: "use_editor_plugin", //use_editor_plugin makes it fit with the text editor
                                });
                              }

                              $(document).ready(function() {


                                // Settings untuk Summernote
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



                                  // Settings untuk previewer
                                  callbacks: {
                                    onKeyup: function(e) { // keyup adalah setiap kali pencet tombol
                                      var text_val = $(this).val();

                                      // Anda harus menyalin value code ke element aslinya. Di versi summernote 0.8 ke atas tidak perlu lagi melakukan ini
                                      $('#textarea1').val( text_val ); 

                                      // kemudian menjalankan function yang telah dibuat tadi
                                      triggered_onkeyup();
                                    }
                                  }


                                });
                              }
                        </pre>
                            Idenya adalah dengan menggunakan fungsi callbacks onKeyup milik summernote (ck editor mungki juga punya) untuk menjalankan previewer. Namun, sebelumnya value summernote harus dikembalikan ke element textarea yang sebenarnya terlebih dahulu. Hal tersebut sebetulnya tidak perlu dilakukan untuk summernote versi 0.8 ke atas.
                        </p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example10">Show Example</button>
                            <br>
                            <br>
                            <textarea style="display: none;" class="form-control col-12" koreksoft_lp="example10" rows="4" id="textarea1"></textarea>
                        </p>


                    </section>
                    <!-- end section -->

                    <section id="line5" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Get Meta Data <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->    
                        <h4 id="">Get data using javascript <a href="#top">#kembali ke atas</a></h4>
                        <p>Sering kali kita ingin mengolah data website yang telah dipratinjau. Anda dapat mengambil data yang Anda inginkan dari meta data suatu website yang dipratinjau berdasarkan index dari object yang tampil di console. Pertama, Anda buat sebuah element seperti ini.</p>
                        <p>Elements:
                        <pre class="brush: html;">
                            &lt;!-- untuk wadah og_title --&gt;
                            &lt;input type=&quot;text&quot; name=&quot;&quot; id=&quot;input_title&quot;&gt; 
                            &lt;!-- untuk wadah og_description --&gt;
                            &lt;textarea name=&quot;&quot; id=&quot;input_description&quot;&gt;&lt;/textarea&gt;
                            &lt;p koreksoft_lp=&quot;example9&quot;&gt;https://www.youtube.com/watch?v=CmcjO4SWrgQ&lt;/p&gt;
                        </pre></p>
                        <p>JavaScript:
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer("example9", {
                                  console: 1, // untuk menampilkan aktivitas ke console
                              });
                            }
                        </pre></p>
                        <p>
                            Saya akan mengambil dua index data, yaitu <strong>og_title</strong> dan <strong>og_description</strong>.
                            <div class="col-12 clearfix">
                                <img src="images/9_1_get_data.JPG" style="width: 100%;">  
                            </div> 
                        </p>   
                        <p>Kemudian tambahkan property baru bernama <strong>get_data</strong> dan di dalamnya isilah dengan sebuah object dengan property <strong>index</strong> dan <strong>target</strong>. Isilah value di dalam <strong>index</strong> dengan nama-nama index yang muncul di console tadi, dan <strong>target</strong> diisi dengan nama-nama id element yang sudah Anda buat tadi. Penempatan dari isi index dan isi target harus urut dari kiri ke kanan, jika tidak maka value yang masuk akan terbolak-balik.
                        <pre class="brush: js;">
                            $(document).ready(function() {
                              KS_LP_run_previewer("example9", {
                                  get_data:{
                                      index: ["og_title", "og_description"], // ini tempat index data
                                      target: ["input_title", "input_description"], // dan id target, mereka harus saling urut
                                  },
                              });
                            }
                        </pre></p>
                        <p>Hasil:
                            <button class="btn btn-primary" id="show-example9">Show Example</button>
                            <br>
                            <p ><input type="text" name="" id="input_title"></p>
                            <p ><textarea name="" id="input_description"></textarea></p>
                            <p koreksoft_lp="example9">https://www.youtube.com/watch?v=CmcjO4SWrgQ</p>
                        </p>

                    </section>
                    <!-- end section -->

                    <section id="line6" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Bantuan <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->                        

                        <h4 id="">Email Bantuan <a href="#top">#kembali ke atas</a></h4>
                        <p>Silakan hubungi saya jika Anda menemui kesulitan atau sekedar memberi saran.</p>
                        <pre class="brush: html;">
                            widibaka55@gmail.com
                        </pre> 

                        <div>
                            <div class="container" style="height: 600px">
                                
                            </div>
                        </div>        

                    </section>
                    <!-- end section -->

                    <section id="line7" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Pembelian <a href="#top">#kembali ke atas</a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->                        

                        <h4 id="line7_1">Cara Pembelian <a href="#top">#kembali ke atas</a></h4>
                        <div class="container">
                          Silakan lakukan pembayaran sesuai tagihan ke rekening:<br>
                          BRI : 674701009032537 (WIDI DWI NURCAHYO)<br>
                          Paypal : widibaka55@gmail.com
                        </div>
                        <div class="col-12 clearfix">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/bkbeOO9b9BQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>                     

                        <h4 id="line7_2">Cara Memakai Kode Premium <a href="#top">#kembali ke atas</a></h4>
                        <p>1) Pastikan status pesanan/order Anda adalah active. Lalu klik tombol show premium code.</p>
                        <div class="col-12 clearfix">
                            <img src="images/9_2_a.JPG">  
                        </div>

                        <p>2) Akan muncul dialog box yang menampilkan kode Anda.</p>
                        <div class="col-12 clearfix">
                            <img src="images/9_2_b.JPG">  
                        </div>

                        <p>3) Tepat setelah meng-include main.js milik Link Previewer, silakan Anda buat tag script dan isilah dengan function KS_LP_set_reg_code. Function tersebut adalah tempat Anda menempatkan kode yang telah Anda beli.</p>
                        <pre class="brush: html;">
                            &lt;!-- Koreksoft Link Previewer --&gt;
                            &lt;script type=&quot;text/javascript&quot; src=&quot;--directory anda--/koreksoft-link-previewer/js/main.js&quot;&gt;&lt;/script&gt;
                            &lt;script&gt;
                                KS_LP_set_reg_code( "d2lkaS51ZGJAZ21haWwuY29tQHNhcGFyYXRlQDIwMTk2Nw==" );
                            &lt;/script&gt;
                        </pre> 

                        <p>4) Sekarang iklan tidak akan muncul lagi.</p>

                    </section>
                    <!-- end section -->

                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/main.js"></script>

    <script src="js/syntax-highlighter/scripts/shCore.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushCss.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushJScript.js"></script>

    <!-- summernote -->
    <script type="text/javascript" src="../plugins/summernote/summernote-bs4.js"></script>

    <!-- Koreksoft Link Previewer -->
    <script type="text/javascript" src="../plugins/koreksoft-link-previewer/js/main.js"></script>
<style type="text/css">
    a{
        border-bottom: 
    }
</style>
    <script type="text/javascript">
    KS_LP_set_global_plugin_path("../plugins/koreksoft-link-previewer/");
    $("#show-example").click(function() {
        KS_LP_run_previewer("example1");
        KS_LP_run_previewer("example2", {size:"large", img_size: "auto"});
        $("#control_buttons").show();
        $(this).hide();
    });
    $("#show-example-4").click(function() {
        KS_LP_run_previewer("example4", {type:"hyperlink"});
        $(this).hide();
    });
    $("#show-example5").click(function() {
        KS_LP_run_previewer("example5", {type:"html_element", position: "bottom",});
        $(this).hide();
    });
    $("#show-example6").click(function() {
        KS_LP_run_previewer("example6", {type:"html_element", position: "bottom", img_size: "50px"});
        $(this).hide();
    });
    $("#show-example7").click(function() {
        KS_LP_run_previewer("example7", {type:"html_element", position: "bottom", font_size: "60%"});
        $(this).hide();
    });
    $("#show-example8").click(function() {
        KS_LP_run_previewer("example8", {
            type: "html_element", // hyperlink, live, html_element (html_element as default)
            position: "bottom",
            img_size: "200px", // biasanya "auto" cocok untuk size large
            size: "large",
            theme: "dark", // dark, light
            loader: "blocks", // bean-eater, blocks, gear, infinity, pulse, ripple, rolling, spin, spinner. Isi "no_loader" ini jika ingin menghilangkan loader
            extra_css: "max-height: 400px; text-align: center;", 
        });
        $(this).hide();
    });
    $("#show-example9").click(function() {
        KS_LP_run_previewer("example9", {
            get_data:{
                index: ["og_title", "og_description"], // ini tempat index data
                target: ["input_title", "input_description"], // dan id target, mereka harus saling urut
            },
            console: 1, // untuk menampilkan aktivitas ke console
        });
        $(this).hide();
    });
    $("#show-example10").click(function() {
        /*
        * Live preview with Summernote.js
        */
        function triggered_onkeyup(){
          KS_LP_run_previewer( "example10", {
            type: "use_editor_plugin", //use_editor_plugin makes it fit with the text editor
          });
        }
         
        // Settings untuk Summernote
        $('#textarea1').summernote({
          placeholder: 'Ketiklah sebuah link ...',
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
        
        
        
          // Settings untuk previewer
          callbacks: {
            onKeyup: function(e) { // keyup adalah setiap kali pencet tombol
              var text_val = $(this).val();
        
              // Anda harus menyalin value code ke element aslinya. Di versi summernote 0.8 ke atas tidak perlu lagi melakukan ini
              $('#textarea1').val( text_val );
        
              // kemudian menjalankan function yang telah dibuat tadi
              triggered_onkeyup();
            }
          }
        
        
        });


    });

    /*
    * Live preview the the link in the middle of typing
    */
    function triggered_oninput(){ // buatlah function bernama 'triggered_oninput'
      KS_LP_run_previewer( "example3", { type: "live" }); // yang berisi run previewer, dengan opsi type: "live"
    }

    $(document).ready(function() {
        triggered_oninput();
        // theme switcher
        $('#third_theme').click(function() {
          KS_LP_switch_theme_DEMO('example1');
        })

        // adjust font-size
        $('#adjust_font_size').change(function() {
          var value = $(this).val() + "%"; // <--value is in percent unit
          KS_LP_set_font_size_DEMO("example1", value);

          $('#ukuran_font').html(value);
        })

        // adjust img-size
        $('#adjust_img_size').change(function() {
          var value = $(this).val() + "px"; // <--value is in pixcel unit
          KS_LP_set_img_size_DEMO("example1", value);

          $('#ukuran_image').html(value);
        })
    })
    </script>
</body>

</html>
