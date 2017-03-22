@extends('layout.default')
@section('script')
<script src="{{ URL::asset('assets/js/d3.v3.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/d3pie.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/tabletop.js')}}"></script>
<script src="{{URL::asset('assets/js/highcharts.js')}}"></script>
<script src="{{URL::asset('assets/js/exporting.js')}}"></script>
<script>

	var colors = ["#2484c1","#0c6197","#4daa4b","#90c469","#daca61","#e4a14b","#e98125","#cb2121","#830909","#ae83d5","#bf273e","#ce2aeb","#bca44a","#618d1b"];

	function chart(id,title,subtitle,content){
	  	return new d3pie(id, {
		"header": {
			"title": {
				"text": title,
				"fontSize": 24,
				"font": "open sans"
			},
			"subtitle": {
				"text": subtitle,
				"color": "#999999",
				"fontSize": 12,
				"font": "open sans"
			},
			"titleSubtitlePadding": 9
		},
		"footer": {
			"color": "#999999",
			"fontSize": 10,
			"font": "open sans",
			"location": "bottom-left"
		},
		"size": {
			"canvasWidth": 550,
			"pieInnerRadius": "30%",
			"pieOuterRadius": "90%"
		},
		"data": {
			"sortOrder": "value-desc",
			"content": content
		},
		"labels": {
			"outer": {
				"pieDistance": 32
			},
			"inner": {
				"hideWhenLessThanPercentage": 3
			},
			"mainLabel": {
				"fontSize": 11
			},
			"percentage": {
				"color": "#ffffff",
				"decimalPlaces": 0
			},
			"value": {
				"color": "#adadad",
				"fontSize": 11
			},
			"lines": {
				"enabled": true
			},
			"truncation": {
				"enabled": true
			}
		},
		"effects": {
			"pullOutSegmentOnClick": {
				"effect": "linear",
				"speed": 400,
				"size": 8
			}
		},
		"misc": {
			"gradient": {
				"enabled": true,
				"percentage": 100
			}
		}
		});
	}
	function _x(STR_XPATH) {
	    var xresult = document.evaluate(STR_XPATH, document, null, XPathResult.ANY_TYPE, null);
	    var xnodes = [];
	    var xres;
	    while (xres = xresult.iterateNext()) {
	        xnodes.push(xres);
	    }

	    return xnodes;
	}
	function getContent(gc){
		var content = [];
		for(var i=0;i<14;i++){
			var cnt={
				"label":"Hostel "+(i+1).toString(),
				"value":gc.scores[i],
				"color":colors[i]
			};
			content.push(cnt);
		}
		return content;
	}

      var a;
      window.onload = function() { init() };

      var public_spreadsheet_url_1 = 'https://docs.google.com/spreadsheets/d/1LCWFDiY1U0Ghy6NzSxDCd43oc_hErWks_xeNcyXj78c/pubhtml?gid=0&single=true';
   	var hostels = ['H1','H2','H3','H4','H5','H6','H7','H8','H9','H10','H11', 'H12', 'H13', 'H14','H15', 'H16'];
   	function sum(a){
   		var j=0;
   		for(var i=0;i<a.length;i++){
   			j=j+a[i];
   		}
   		return j;
   	}
      function init() {
        a = Tabletop({
            key: public_spreadsheet_url_1,
            callback: showInfo,
            simpleSheet: true
        });
      }

      var count = 0;
      var GC = {};
      GC.physXGC = {};
      GC.logicGC = {};
      GC.physXGC.scores = [];
      GC.logicGC.scores = [];
      function showInfo(data, tabletop) {
      	console.log(data[0]);
      	keys = Object.keys(data[0]);
      	for(var i=1;i<keys.length;i++){	
      		GC[keys[i]]={};
      		GC[keys[i]].scores=[];
      	}
        for(var i = 1; i < data.length; i++) {
        	for(var j=1;j<keys.length;j++){
        		GC[keys[j]].scores.push(parseFloat(data[0][keys[j]])*parseFloat(data[i][keys[j]]));
        	}
        }
     	validGCs = [];
     	for(var k in GC){
     		if(k=="Overall Score"){
     			continue;
     		}
     		console.log(GC[k].scores);
     		console.log(sum(GC[k].scores));
     		if(sum(GC[k].scores)>1){
     			validGCs.push(k);
     		}
     	}
     	console.log(validGCs);
        series = [];
        GC['Jhatka'].club = 'Electronics Club';
        GC['Biotech GC'].club = 'Biotech Club';
        GC['Biotech GC'].clubnick = 'Bio';
        GC['Chain Reaction'].club = 'Robotics Club';
        GC['Logic GC'].clubnick = 'mnp';
        GC['PhysX GC'].clubnick = 'mnp';
        GC['Astro GC'].clubnick = 'Krttika';
        GC['Jhatka'].clubnick = 'elec';
        GC['Logic GC'].club = 'Maths and Physics Club';
        GC['PhysX GC'].club = 'Maths and Physics Club';
        GC['Astro GC'].club = 'Krittika';
        GC['Jhatka'].club = 'Electronics Club';


        clubsDone  = [];
        for(var k in validGCs){
			GC[validGCs[k]].content = getContent(GC[validGCs[k]]);
			GC[validGCs[k]].pie = chart(validGCs[k],validGCs[k],"Performance of Hostels",GC[validGCs[k]].content);
			var ser = {
				name:validGCs[k],
				data:GC[validGCs[k]].scores
			};
			series.push(ser);
        }

		$('#allgraphs').trigger('click');

	    $('#bar-graph').highcharts({
	        chart: {
	            type: 'bar'
	        },
	        title: {
	            text: 'Performance of Hostels in Tech GC'
	        },
	        xAxis: {
	            categories: hostels
	        },
	        yAxis: {
	            min: 0,
	            title: {
	                text: 'Hostel GC Tally'
	            }
	        },
	        legend: {
	            reversed: true
	        },
	        plotOptions: {
	            series: {
	                stacking: 'normal'
	            }
	        },
	        series: series
	    });

		$(".highcharts-button").remove();

	}


</script>

@endsection
@section('content')
<main>
			
	<section  class="light-bg">
		<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Tech GC Points</h1>
								<p>Year : 2016 - 2017</p>
								<p> Click <a href="https://docs.google.com/spreadsheets/d/1LCWFDiY1U0Ghy6NzSxDCd43oc_hErWks_xeNcyXj78c/edit?usp=sharing">here</a> to see the overall Tally</p> 
								<br>
							</header>
						</div><!-- /.col -->
						<div class="col-md-12 center-block text-center">
							<div id="bar-graph" style="width: 310px; width: 100%; height: 100%; margin: 0 auto"></div>
							</div>
						</div>	
					</div><!-- /.row -->
					<br>


				<div class="container inner-bottom">
					<div class="row">
						<div class="col-sm-12 portfolio">
							
							<ul class="filter text-center" id='fil'>
								<li><a id="allgraphs" href="#" data-filter="*" class="active">All</a></li>
								<li><a href="#" data-filter=".mnp">Maths and Physics Club</a></li>
								<li><a href="#" data-filter=".bio">Biotech Club</a></li>
								<li><a href="#" data-filter=".krittika">Krittika</a></li>
								<li><a href="#" data-filter=".wncc">Web and Coding Club</a></li>
								<li><a href="#" data-filter=".elec">Electronics Club</a></li>
								<li><a href="#" data-filter=".robo">Robotics Club</a></li>
						</ul><!-- /.filter -->
							
							<ul class="items col-2 gap" id="pie-charts">
								<li class="item mnp">
									<div id="Logic GC"></div>
								</li>	
								<li class="item mnp">
									<div id="PhysX GC"></div>
								</li>
								<li class="item bio">
									<div id="Biotech GC"></div>
								</li>		
								<li class="item krittika">
									<div id="Astro GC"></div>
								</li>	
								<li class="item elec">
									<div id="Jhatka"></div>
								</li>
								<li class="item robo">
									<div id="Chain Reaction"></div>
								</li>	
							</ul><!-- /.items -->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->								
					<br>

		</div>
	</section>
</main>
@endsection
