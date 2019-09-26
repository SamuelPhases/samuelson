<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <?php include 'includes/navbar.php'; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/sidebar.php'; ?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        
          <div id="crypto-stats-3" class="row">
            <div class="col-xl-6 col-6">
              <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-2">
                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                      </div>
                      <div class="col-5 pl-2">
                        <h4>BTC</h4>
                        <h6 class="text-muted">Bitcoin</h6>
                      </div>
                      <div class="col-5 text-right">
                        <h4>$9,980</h4>
                        <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <canvas id="btc-chartjs" class="height-75"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-6">
              <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-2">
                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                      </div>
                      <div class="col-5 pl-2">
                        <h4>ETH</h4>
                        <h6 class="text-muted">Ethereum</h6>
                      </div>
                      <div class="col-5 text-right">
                        <h4>$944</h4>
                        <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <canvas id="eth-chartjs" class="height-75"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h4 class="card-title">Return On Investment Summary</h4>
                  </div>
                </div>
                <!-- project-info -->
                <div id="project-info" class="card-body row">
                  <div class="project-info-count col-lg-4 col-md-12">
            <div class="project-info-icon">
              <h2>$2,500.00</h2>
              <div class="project-info-sub-icon">
                <span class="la la-money"></span>
              </div>
            </div>
            <div class="project-info-text pt-1">
              <h5>Amount Invested</h5>
            </div>
          </div>
          <div class="project-info-count col-lg-4 col-md-12">
            <div class="project-info-icon">
              <h2>$0.00</h2>
              <div class="project-info-sub-icon">
                <span class="la la-money"></span>
              </div>
            </div>
            <div class="project-info-text pt-1">
              <h5>Bonus Accumulated</h5>
            </div>
          </div>
          <div class="project-info-count col-lg-4 col-md-12">
            <div class="project-info-icon">
              <h2>$0.00</h2>
              <div class="project-info-sub-icon">
                <span class="la la-money"></span>
              </div>
            </div>
            <div class="project-info-text pt-1">
              <h5>Profit Made</h5>
            </div>
          </div>
                </div>
                <!-- project-info -->
                <div class="card-body">
                  <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>Investments Plans Subscribed To</span>
                  </div>
                  <div class="row py-2">
                    <div class="col-md-12">
                      <div class="insights px-2">
                        <div>
                          <span class="float-right">Activated</span>
                          <span class="text-success h3">$50.00</span>
                          <br>
                          <span class="text-info">$50.00</span><br>
                          <span class="text-info">Gold Pack</span>
                          <br>
                          <span class="text-info">Activated - 7 days ago</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div id="accordionCrypto" role="tablist" aria-multiselectable="true">
                <div class="card collapse-icon accordion-icon-rotate">
                  <div id="heading31" class="card-header bg-info p-1 bg-lighten-1">
                    <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionBTC" aria-expanded="true"
                      aria-controls="accordionBTC" class="card-title lead white">BTC</a>
                  </div>
                  <div id="accordionBTC" role="tabpanel" aria-labelledby="heading31" class="card-collapse collapse show"
                    aria-expanded="true">
                    <div class="card-content">
                      <div class="card-body p-0">
                        <div class="media-list list-group">
                          <div class="list-group-item list-group-item-action media p-1">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">BTC/USD</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">11916.9</p>
                                <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 BTC</p>
                              </span>
                            </a>
                          </div>
                          <div class="list-group-item list-group-item-action media p-1 bg-info bg-lighten-5">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">BTC/EUR</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">9213.3</p>
                                <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 BTC</p>
                              </span>
                            </a>
                          </div>
                          <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">BTC/GBP</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">8015.1</p>
                                <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 BTC</p>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="heading32" class="card-header bg-info p-1 bg-lighten-1 my-1">
                    <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionETH" aria-expanded="false"
                      aria-controls="accordionETH" class="card-title lead white collapsed">ETH</a>
                  </div>
                  <div id="accordionETH" role="tabpanel" aria-labelledby="heading32" class="card-collapse collapse"
                    aria-expanded="false">
                    <div class="card-content">
                      <div class="card-body p-0">
                        <div class="media-list list-group">
                          <div class="list-group-item list-group-item-action media p-1">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">ETH/USD</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">11916.9</p>
                                <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 ETH</p>
                              </span>
                            </a>
                          </div>
                          <div class="list-group-item list-group-item-action media p-1">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">ETH/EUR</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">9213.3</p>
                                <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 ETH</p>
                              </span>
                            </a>
                          </div>
                          <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">ETH/GBP</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">8015.1</p>
                                <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 ETH</p>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="heading33" class="card-header bg-info p-1 bg-lighten-1">
                    <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionXRP" aria-expanded="false"
                      aria-controls="accordionXRP" class="card-title lead white collapsed">XRP</a>
                  </div>
                  <div id="accordionXRP" role="tabpanel" aria-labelledby="heading33" class="card-collapse collapse"
                    aria-expanded="false">
                    <div class="card-content">
                      <div class="card-body p-0">
                        <div class="media-list list-group">
                          <div class="list-group-item list-group-item-action media p-1">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">XRP/USD</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">11916.9</p>
                                <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 XRP</p>
                              </span>
                            </a>
                          </div>
                          <div class="list-group-item list-group-item-action media p-1">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">XRP/EUR</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">9213.3</p>
                                <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 XRP</p>
                              </span>
                            </a>
                          </div>
                          <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                            <a class="media-link" href="#">
                              <span class="media-left">
                                <p class="text-bold-600 m-0">XRP/GBP</p>
                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                              </span>
                              <span class="media-body text-right">
                                <p class="text-bold-600 m-0">8015.1</p>
                                <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 XRP</p>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">BTC/USD</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li class="text-center mr-4">
                        <h6 class="text-muted">Last price</h6>
                        <p class="text-bold-600 mb-0">$ 11916.9</p>
                      </li>
                      <li class="text-center mr-4">
                        <h6 class="text-muted">Daily change</h6>
                        <p class="text-bold-600 mb-0">$ 283.1</p>
                      </li>
                      <li class="text-center">
                        <h6 class="text-muted">24h volume</h6>
                        <p class="text-bold-600 mb-0"><i class="cc BTC-alt" title="BTC"></i> 1029.1906 BTC</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body pt-0">
                    <div id="btc-candlestick-control" class="height-350 echart-container"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>