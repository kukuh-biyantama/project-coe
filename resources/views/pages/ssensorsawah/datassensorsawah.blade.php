
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Laporan Sensor IoT</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="10" > 

  <script
    type="text/javascript"
    src="/js/lib/dummy.js"
    
  ></script>

    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
      <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style id="compiled-css" type="text/css">
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.progress {
  width: 150px;
  height: 150px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #3db5ff;
  background: -webkit-linear-gradient(to right, #516bff, #6581ff);
  background: linear-gradient(to right, hsl(120, 33%, 41%), #22aeff);
  min-height: 100vh;
}

.rounded-lg {
  border-radius: 1rem;
}

.text-gray {
  color: #aaa;
}

div.h4 {
  line-height: 1rem;
}


    /* EOS */
  </style>

  <script id="insert"></script>

    <script src="/js/stringify.js?9c307ec363c36b1d0dfbf2ee64220cc5ab9c45f2" charset="utf-8"></script>
    <script>
      const customConsole = (w) => {
        const pushToConsole = (payload, type) => {
          w.parent.postMessage({
            console: {
              payload: stringify(payload),
              type:    type
            }
          }, "*")
        }

        w.onerror = (message, url, line, column) => {
          // the line needs to correspond with the editor panel
          // unfortunately this number needs to be altered every time this view is changed
          line = line - 70
          if (line < 0){
            pushToConsole(message, "error")
          } else {
            pushToConsole(`[${line}:${column}] ${message}`, "error")
          }
        }

        let console = (function(systemConsole){
          return {
            log: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "log")
              systemConsole.log.apply(this, args)
            },
            info: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "info")
              systemConsole.info.apply(this, args)
            },
            warn: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "warn")
              systemConsole.warn.apply(this, args)
            },
            error: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "error")
              systemConsole.error.apply(this, args)
            },
            system: function(arg){
              pushToConsole(arg, "system")
            },
            clear: function(){
              systemConsole.clear.apply(this, {})
            },
            time: function(){
              let args = Array.from(arguments)
              systemConsole.time.apply(this, args)
            },
            assert: function(assertion, label){
              if (!assertion){
                pushToConsole(label, "log")
              }

              let args = Array.from(arguments)
              systemConsole.assert.apply(this, args)
            }
          }
        }(window.console))

        window.console = { ...window.console, ...console }

        console.system("Running fiddle")
      }

      if (window.parent){
        customConsole(window)
      }
    </script>
</head>
<body>
    <div class="container py-5">
  <div class="row">


    @foreach ($data as $item);
    <div class="container py-5">
        <div class="row">
      
     
          <div class="col-lg-12 mx-auto mb-5 text-white text-center">
            <h1 class="display-4">Laporan Sensor IoT</h1>
            <h1 class="display-4">ID IOT {{ $item['id_iot'] }} </h1>

            <p class="lead mb-0">Monitor Sensor IoT</p>
            <p class="lead mb-0">Waktu {{ $item['tanggal'] }} </p>
            
          </div>
          <!-- END -->
      
          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white rounded-lg p-5 shadow">
              <h2 class="h6 font-weight-bold text-center mb-4">Data Kecepatan Angin</h2>
      
              <!-- Progress bar 1 -->
              <div class="progress mx-auto" data-value={{ $item['datakecepatanangin'] }}>
                <span class="progress-left">
                              <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                </span>
                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="h2 font-weight-bold">{{ $item['datakecepatanangin'] }}<sup class="small">km/h</sup></div>
                </div>
              </div>
            </div>
          </div>
      
          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white rounded-lg p-5 shadow">
              <h2 class="h6 font-weight-bold text-center mb-4">Data Suhu Udara</h2>
      
              <!-- Progress bar 2 -->
              <div class="progress mx-auto" data-value={{ $item['datasuhuudara'] }}>
                <span class="progress-left">
                              <span class="progress-bar border-danger"></span>
                </span>
                <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                </span>
                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="h2 font-weight-bold">{{ $item['datasuhuudara'] }}<sup class="small">c</sup></div>
                </div>
              </div>
              <!-- END -->
      
              <!-- END -->
            </div>
          </div>
      

          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white rounded-lg p-5 shadow">
              <h2 class="h6 font-weight-bold text-center mb-4">Data Kelembaban Udara</h2>
      
              <!-- Progress bar 3 -->
              <div class="progress mx-auto" data-value={{ $item['datakelembabanudara'] }}>
                <span class="progress-left">
                              <span class="progress-bar border-success"></span>
                </span>
                <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                </span>
                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="h2 font-weight-bold">{{ $item['datakelembabanudara'] }}<sup class="small">c</sup></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white rounded-lg p-5 shadow">
              <h2 class="h6 font-weight-bold text-center mb-4">Data Suhu Tanah</h2>
      
              <!-- Progress bar 3 -->
              <div class="progress mx-auto" data-value='{{ $item['datasuhutanah'] }}'>
                <span class="progress-left">
                              <span class="progress-bar border-success"></span>
                </span>
                <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                </span>
                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="h2 font-weight-bold">{{ $item['datasuhutanah'] }}<sup class="small">c</sup></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white rounded-lg p-5 shadow">
              <h2 class="h6 font-weight-bold text-center mb-4">datakelembabantanah</h2>
      
              <!-- Progress bar 3 -->
              <div class="progress mx-auto" data-value={{ $item['datakelembabantanah'] }}>
                <span class="progress-left">
                              <span class="progress-bar border-success"></span>
                </span>
                <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                </span>
                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="h2 font-weight-bold">{{ $item['datakelembabantanah'] }}<sup class="small">c</sup></div>
                </div>
              </div>
            </div>
          </div>
     
          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white rounded-lg p-5 shadow">
              <h2 class="h6 font-weight-bold text-center mb-4">Data Ph tanah</h2>
      
              <!-- Progress bar 4 -->
              <div class="progress mx-auto" data-value={{ $item['dataphtanah'] }}>
                <span class="progress-left">
                              <span class="progress-bar border-warning"></span>
                </span>
                <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                </span>
                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="h2 font-weight-bold">{{ $item['dataphtanah'] }} <sup class="small">pH</sup></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 mb-4">
            <div class="bg-white  p-5 shadow">
                <div class="card-body">
                    <p class="h6 font-weight-bold text-center mb-4">Status Alat<br></p>
                       
                        @if ($item['statusalat'] == 1)
                        <center><p class="h2 font-weight-bold">Hidup</p></center>
                        @else
                        <center><p class="h2 font-weight-bold">Mati  </p></center>
                        @endif
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 mb-4">
          <div class="bg-white  p-5 shadow">
              <div class="card-body">
                  <p class="h6 font-weight-bold text-center mb-4">Alamat Sensor Iot<br></p>
                     
                      <center><p class="h2 font-weight-bold">{{ $item['alamat'] }}</p></center>
                  
  
              </div>
          </div>
      </div>
    
    
        </div>

      </div>
  

      
      @endforeach
      <div>
      
        {{-- <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">{{ $data->currentPage() }}</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav> --}}
    </div>
      <div class="col-lg-5 mb-3"><a href="/home"><button type="button" class="btn btn-primary">Kembali</button></a></div>


    <script type="text/javascript">//<![CDATA[


$(function() {

  $(".progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .progress-bar');
    var right = $(this).find('.progress-right .progress-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }

  })

  function percentageToDegrees(percentage) {

    return percentage / 100 * 360

  }

});



  //]]></script>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "3xnomecr"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>

    <script>
      let allLines = []

      window.addEventListener("message", (message) => {
        if (message.data.console){
          let insert = document.querySelector("#insert")
          allLines.push(message.data.console.payload)
          insert.innerHTML = allLines.join(";\r")

          let result = eval.call(null, message.data.console.payload)
          if (result !== undefined){
            console.log(result)
          }
        }
      })
    </script>

</body>
</html>
