<?php
/* @var $this yii\web\View */

$this->registerJsFile('https://widget.ticketbest.ru/js/widget.js',  ['position' => yii\web\View::POS_END]);

use yii\widgets\ListView;
echo "<pre>";
print_r($event);
echo "</pre>";

?>
<h2><?=$event['name']?></h2>
<div class="row">
    <div class="col-md-3">
      <img src="https://zapashny.ticketsteam.ru/widget<?=$event['image_poster']?>">
    </div>
    <div class="col-md-6">
      <p><?=$event['descr']?></p>
    </div>
    <div class="col-md-3 well">
        <p><?= date('j F в H:i D', strtotime($event['date']))?></p>
        <p><?= $event['venue']?></p>
        <p>Возрастное ограничение: <?= $event['age']?></p>
        <p>Стоимость билетов: от <?= $event['min_price']?> до <?= $event['max_price']?> &#8381</p>
    </div>
</div>
<hr>
<h3>Выбор мест</h3>
  <div class="col-md-6 col-md-offset-2">  
    <table class="table table-striped table-bordered">
        <thead>
          <td>Сектор</td>
          <td>Цена</td>
        </thead>
        <?= ListView::widget([
        'dataProvider' => $sectionsDataProvider,
        'itemView' => '_section',
        'viewParams' => [
          'event_id' => $event['id'],
          'widget' => $event['widget']
        ] 
      ]);
      ?>
    </table>    
  </div>
<div class="map">
  <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="210mm"
   height="297mm"
   viewBox="0 0 210 297"
   version="1.1"
   id="svg8"
   inkscape:version="0.92.1 r15371"
   sodipodi:docname="МСА.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="1.4"
     inkscape:cx="523.8749"
     inkscape:cy="696.85014"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1-2"
     showgrid="false"
     inkscape:window-width="1920"
     inkscape:window-height="1018"
     inkscape:window-x="-4"
     inkscape:window-y="-4"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1">
    <g
       transform="translate(30.714383,-95.678791)"
       id="layer1-2"
       inkscape:label="Layer 1">
      <path
         sodipodi:nodetypes="cccccccc"
         inkscape:connector-curvature="0"
         id="path4515"
         d="m 110.86992,189.71428 17.08179,0.021 v 17.58834 H 98.014155 v -9.72968 l 12.848205,0.0623 v -7.04781 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4769">A3</title>
      </path>
      <path
         sodipodi:nodetypes="cccccccc"
         inkscape:connector-curvature="0"
         id="path4515-5"
         d="m 83.175363,189.71428 -17.081784,0.021 v 17.58831 h 29.937543 v -9.72968 l -12.848192,0.0623 v -7.04781 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4767">A2</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4564"
         d="m 65.092105,189.6784 v 17.70231 H 52.84907 l -0.02165,-17.6386 z"
         style="fill:none;stroke:#000000;stroke-width:0.58469343px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4763">A1</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4566"
         d="m 84.329936,196.50933 v -19.15418 h 25.519044 l -1e-5,19.15418 z"
         style="fill:none;stroke:#000000;stroke-width:0.87589127px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4773">Ложа</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4568-5"
         d="M 83.178643,188.65913 V 170.7976 l -17.12091,0.0416 0.1818,17.75517 z"
         style="fill:none;stroke:#000000;stroke-width:0.82937795px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4765">A6</title>
      </path>
      <path
         sodipodi:nodetypes="ccccccc"
         inkscape:connector-curvature="0"
         id="path4587"
         d="m 51.19829,203.83099 -10.427544,-0.12461 -0.242578,9.21062 -14.643194,-0.0382 0.06236,-23.26688 25.282119,0.12462 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4759">D3</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4589"
         d="m 25.966922,214.09021 -0.08747,28.13749 14.612994,-0.062 v -28.15424 z"
         style="fill:none;stroke:#000000;stroke-width:0.68560022px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4753">D2</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4655"
         d="m 64.476922,247.79051 -0.311851,18.21192 30.445395,0.0536 -0.195995,-18.19156 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4741">C3</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4655-5"
         d="m 95.868334,247.73084 -1.1e-5,18.20044 29.750417,0.0739 0.18711,-18.20046 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4739">C2</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4568-5-3"
         d="m 127.92053,188.25461 v -17.49336 l -16.89441,0.0411 0.0898,17.50666 z"
         style="fill:none;stroke:#000000;stroke-width:0.86506605px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4771">A7</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4687"
         d="M 64.895672,170.81535 V 188.4678 H 24.915318 L 8.8621349,170.55217 Z"
         style="fill:none;stroke:#000000;stroke-width:0.67427278px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4761">A5</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4708"
         d="m 8.2033178,171.21501 0.132299,41.8089 16.2291182,-0.0112 0.08868,-23.62721 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4757">D6</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4708-7"
         d="m 7.5563175,284.61658 0.194659,-41.21634 16.5409675,-0.11434 0.08868,23.6272 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4751">D4</title>
      </path>
      <path
         inkscape:connector-curvature="0"
         id="path4725"
         d="M 8.7162276,285.47993 H 62.923307 v -18.21329 l -37.484349,0.17563 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         sodipodi:nodetypes="ccccc">
        <title
           id="title4745">C8</title>
      </path>
      <path
         inkscape:connector-curvature="0"
         id="path4727"
         d="m 8.201979,213.94862 h 16.120472 v 28.23886 H 7.9815473 Z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4755">D5</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4729"
         d="m 64.031434,267.32273 h 30.388735 v 17.9376 l -30.165886,0.21966 z"
         style="fill:none;stroke:#000000;stroke-width:0.69854271px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4743">C7</title>
      </path>
      <path
         sodipodi:nodetypes="ccccc"
         inkscape:connector-curvature="0"
         id="path4731"
         d="M 125.61516,267.06712 H 95.834852 l 0.311776,18.16137 h 29.494102 c 0.0624,-0.44571 -0.0256,-18.16137 -0.0256,-18.16137 z"
         style="fill:none;stroke:#000000;stroke-width:0.70570081px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4737">C6</title>
      </path>
      <path
         inkscape:connector-curvature="0"
         id="path4733"
         d="m 25.91765,243.21619 h 14.589885 v 8.59918 l -14.362906,13.3859 z"
         style="fill:none;stroke:#000000;stroke-width:0.67576319px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1">
        <title
           id="title4749">D1</title>
      </path>
      <path
         inkscape:connector-curvature="0"
         id="path4735"
         d="m 41.014341,252.64949 -14.494093,13.59997 36.670826,-0.26727 0.133635,-17.92948 -10.500254,0.13363 -0.133635,4.54918 z"
         style="fill:none;stroke:#000000;stroke-width:0.71554786px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         sodipodi:nodetypes="ccccccc">
        <title
           id="title4747">C4</title>
      </path>
      <text
         id="text4777"
         y="189.8611"
         x="88.357681"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="189.8611"
           x="88.357681"
           id="tspan4775"
           sodipodi:role="line">ЛОЖА</tspan></text>
      <text
         id="text4781"
         y="202.12798"
         x="76.067711"
         style="font-style:normal;font-weight:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
         xml:space="preserve"><tspan
           style="stroke-width:0.26458332"
           y="211.78348"
           x="76.067711"
           id="tspan4779"
           sodipodi:role="line" /></text>
      <text
         id="text4777-2"
         y="184.53279"
         x="114.91557"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="184.53279"
           x="114.91557"
           id="tspan4775-4"
           sodipodi:role="line">A7</tspan></text>
      <text
         id="text4777-2-4"
         y="201.87175"
         x="113.00294"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="201.87175"
           x="113.00294"
           id="tspan4775-4-9"
           sodipodi:role="line">A3</tspan></text>
      <text
         id="text4777-2-5"
         y="202.12138"
         x="73.585167"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="202.12138"
           x="73.585167"
           id="tspan4775-4-3"
           sodipodi:role="line">A2</tspan></text>
      <text
         id="text4777-2-3"
         y="184.40808"
         x="72.58725"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="184.40808"
           x="72.58725"
           id="tspan4775-4-93"
           sodipodi:role="line">A6</tspan></text>
      <text
         id="text4777-2-50"
         y="184.45799"
         x="42.400219"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="184.45799"
           x="42.400219"
           id="tspan4775-4-5"
           sodipodi:role="line">A5</tspan></text>
      <text
         id="text4777-2-0"
         y="202.12126"
         x="57.368996"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="202.12126"
           x="57.368996"
           id="tspan4775-4-1"
           sodipodi:role="line">A1</tspan></text>
      <text
         id="text4777-2-9"
         y="202.12119"
         x="30.433027"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="202.12119"
           x="30.433027"
           id="tspan4775-4-33"
           sodipodi:role="line">D3</tspan></text>
      <text
         id="text4777-2-8"
         y="201.9962"
         x="12.410076"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="201.9962"
           x="12.410076"
           id="tspan4775-4-50"
           sodipodi:role="line">D6</tspan></text>
      <text
         id="text4777-2-7"
         y="230.06297"
         x="12.410073"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="230.06297"
           x="12.410073"
           id="tspan4775-4-52"
           sodipodi:role="line">D5</tspan></text>
      <text
         id="text4777-2-96"
         y="229.9133"
         x="30.523647"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="229.9133"
           x="30.523647"
           id="tspan4775-4-4"
           sodipodi:role="line">D2</tspan></text>
      <text
         id="text4777-2-79"
         y="258.05457"
         x="11.841526"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="258.05457"
           x="11.841526"
           id="tspan4775-4-505"
           sodipodi:role="line">D4</tspan></text>
      <text
         id="text4777-2-6"
         y="251.25925"
         x="30.723225"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="251.25925"
           x="30.723225"
           id="tspan4775-4-96"
           sodipodi:role="line">D1</tspan></text>
      <text
         id="text4777-2-33"
         y="259.11252"
         x="48.737015"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="259.11252"
           x="48.737015"
           id="tspan4775-4-44"
           sodipodi:role="line">C4</tspan></text>
      <text
         id="text4777-2-33-5"
         y="278.8623"
         x="47.67868"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="278.8623"
           x="47.67868"
           id="tspan4775-4-44-6"
           sodipodi:role="line">C8</tspan></text>
      <text
         id="text4777-2-33-6"
         y="259.11292"
         x="76.488312"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="259.11292"
           x="76.488312"
           id="tspan4775-4-44-4"
           sodipodi:role="line">C3</tspan></text>
      <text
         id="text4777-2-33-0"
         y="276.21603"
         x="78.075844"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="276.21603"
           x="78.075844"
           id="tspan4775-4-44-1"
           sodipodi:role="line">C7</tspan></text>
      <text
         id="text4777-2-33-7"
         y="276.21603"
         x="108.81174"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="276.21603"
           x="108.81174"
           id="tspan4775-4-44-5"
           sodipodi:role="line">C6</tspan></text>
      <text
         id="text4777-2-33-4"
         y="259.11252"
         x="108.28257"
         style="font-style:normal;font-weight:normal;font-size:27.94171143px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.69854271"
         xml:space="preserve"><tspan
           style="font-size:5.58834171px;stroke-width:0.69854271"
           y="259.11252"
           x="108.28257"
           id="tspan4775-4-44-9"
           sodipodi:role="line">C2</tspan></text>
      <path
         inkscape:connector-curvature="0"
         id="path4969"
         d="m 127.42254,208.91113 -5.1507,8.64683 v 20.80927 l 5.0572,8.94227 4.31916,-2.22795 -5.12939,-9.2524 v -17.67017 l 4.50819,-7.56815 z"
         style="fill:none;stroke:#000000;stroke-width:0.68882024px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         sodipodi:nodetypes="ccccccccc" />
      <text
         id="text4973"
         y="232.72868"
         x="61.53587"
         style="font-style:normal;font-weight:normal;font-size:13.514781px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.3378695"
         xml:space="preserve"><tspan
           style="stroke-width:0.3378695"
           y="232.72868"
           x="61.53587"
           id="tspan4971"
           sodipodi:role="line">СЦЕНА</tspan></text>
    </g>
  </g>
</svg>
</div>


