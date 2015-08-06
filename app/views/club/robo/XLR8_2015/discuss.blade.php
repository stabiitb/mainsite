@extends('club.robo.XLR8_2015.layout')

<!--################## /////TODO/////////////////////###################### -->
@section('inner-content')
			<section  class="">
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h3>Discussion Forum</h3>
								<p>Left with some doubts? Post it here.</p>
							</header>
						</div><!-- /.col -->
						<div class="col-md-12 text-center">
							<div id="disqus_thread"></div>
							<script type="text/javascript">
							    /* * * CONFIGURATION VARIABLES * * */
							    var disqus_shortname = 'itsp2015';
							    
							    /* * * DON'T EDIT BELOW THIS LINE * * */
							    (function() {
							        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
							        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
							        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
							    })();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

							<script type="text/javascript">
							    /* * * CONFIGURATION VARIABLES * * */
							    var disqus_shortname = 'itsp2015';
							    
							    /* * * DON'T EDIT BELOW THIS LINE * * */
							    (function () {
							        var s = document.createElement('script'); s.async = true;
							        s.type = 'text/javascript';
							        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
							        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
							    }());
							</script>

						</div>
					</div><!-- /.row -->
					
			</section>
@endsection