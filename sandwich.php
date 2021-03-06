<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/mobile/css/fonts.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>꾸역꾸역 서브웨이</title>
    <!-- 부트스트랩 -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/mystyle.css" rel="stylesheet">
	<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-inverse">
  		<div class="container">
  			<a class="navbar-brand">kkuyork</a>
  		</div>
  	</nav>
  	<section>
  		<div class="row">
  			<div class="col col-xs-9">
  				<!-- 샌드위치 이미지 부분 -->
  				<div class="sandwich">
	  				<div class="bread bread-top"></div>
	  				<div class="meats"></div>
	  				<div class="vegitables">
	  					<div class="vegi-item onion"></div>
	  					<div class="vegi-item olive"></div>
	  					<div class="vegi-item tomato"></div>
	  					<div class="vegi-item lettuce"></div>
	  					<!-- .. and so on.. -->
	  				</div>
	  				<div class="sauces"></div>
	  				<div class="bread bread-bottom"></div>
  				</div>
  			</div>
  			<div class="col col-xs-3">
  				<!--선택 리스트 -->
  				<form >
  					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					        	메뉴를 선택하세요
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <ul class="list-group">
						    <li class="list-group-item">
								<div class="radio">
								  	<label>
								  		에그마요(4,900원)
									    <input type="radio" name="menu" id="menuRadio" value="eggmayo" aria-label="...">
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="radio">
								  	<label>
								  		비엠티 (4,900원)
									    <input type="radio" name="menu" id="menuRadio" value="bmt" aria-label="...">
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="radio">
								  	<label>
								  		비엘티 (4,900원)
									    <input type="radio" name="menu" id="menuRadio" value="blt" aria-label="...">
									</label>
								</div>
							</li>
						  </ul>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          빵을 선택하세요 
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <ul class="list-group">
						    <li class="list-group-item">
								<div class="radio">
								  	<label>
								  		빵 없음 (샐러드 )
									    <input type="radio" name="bread" id="breadRadio" value="nobread" aria-label="...">
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="radio">
								  	<label>
								  		플랫브레드 
									    <input type="radio" name="bread" id="breadRadio" value="flat" aria-label="...">
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="radio">
								  	<label>
								  		화이트 
									    <input type="radio" name="bread" id="breadRadio" value="white" aria-label="...">
									</label>
								</div>
							</li>
						  </ul>
					    </div>
					  </div> 					
  				</form>
  			</div>
  		</div>
  	</section>
  	<script>
  		//jQuery 사용
  		$(document).on('click', 'input[name=menu]', function(){
  			
  			var value = $(this).attr('value');
  			$(".sandwich .meats").toggleClass(value);
  		});
  		$(document).on('click', 'input[name=bread]', function(){
  			
  			var value = $(this).attr('value');
  			$(".sandwich .bread").toggleClass(value);
  		});
  	</script>
  </body>
 </html>