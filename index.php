<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <!---Naviagation Bar-->
        <div class="nav">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img src="images/logo.jpg" alt="default logo">
              </div>
              <div class="col-sm-6">
                <div class="donation-amounts">
                  <div class="donations-sect">
                    <div class="donation-label-amount">$1234.56</div>
                    <div class="donation-label">total donations</div>
                  </div>
                  <div class="donations-sect">
                    <div class="donation-label-amount">$5000.00</div>
                    <div class="donation-label">goal</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Hero Area--->
        <div class="hero-sect">
          <div class="container">
          </div>
        </div>
        <!---Donation Info--->
        <div class="donation-info-sect">

          <!---Your Support Is Appreciated-->
          <div class="container">
            <div class="row">

              <div class="your-support-sect">
                <div class="your-support-label">
                  Your<br/>Support<br/>Is Appreciated
                </div>
                <div class="goal-raised">
                  <div class="progress-amount">
                    $1234.56
                  </div>
                  <!---Progress Bar--->
                  <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                  <!---End Progress Bar--->
                  <div class="row">
                    <div class="col-xs-6"><div class="raised-money-label">of $5000 goal</div></div>
                    <div class="col-xs-6"><div class="raised-money-label-amount">Raised By 20 Donors</div></div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container">
            <div class="row" id="donation-info">
              <span class="donation-number">1</span><span class="section-titles">Donation info</span>
            </div>
            <div class="row">
              <div class="donation-radio">
                <ul>
                  <li><input type="radio" name="options" id="option1" checked> one time</li>
                  <li><input type="radio" name="options" id="option2"> monthly</li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
