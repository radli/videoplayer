<html>
	<head>
	  <link href="/node_modules/video.js/dist/video-js.css" rel="stylesheet">

	  <!-- If you'd like to support IE8 -->
	  <script src="/node_modules/video.js/dist/ie8/videojs-ie8.js"></script>
	</head>
	<body>
	  <video id="my-video" class="video-js" controls preload="auto" width="640" height="360" poster="http://s.cdn.sportbox.ru/sites/all/libraries/design/_spbver2793_/img/video_stub.jpg" data-setup="{}">	  
		<!--<source src="MY_VIDEO.mp4" type='video/mp4'>
		<source src="MY_VIDEO.webm" type='video/webm'>-->
		<source src="http://sportbox-htlive.cdn.ngenix.net/live/dvr/136418_2/playlist.m3u8?t=1473072943&h=kMF6bKzZ6PpJYcKMGdmXgA==" type="application/x-mpegURL">
		<p class="vjs-no-js">
		  To view this video please enable JavaScript, and consider upgrading to a web browser that
		  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
		</p>
	  </video>

	  <script src="/node_modules/video.js/dist/video.js"></script>
	  <script src="/node_modules/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
	  <script>
		var hls = 'http://sportbox-htlive.cdn.ngenix.net/live/dvr/136418_2/playlist.m3u8?t=1473072943&h=kMF6bKzZ6PpJYcKMGdmXgA==';
		var rtps = 'rtsp://sportbox-video.cdn.ngenix.net/slive/_definst_/mp4:136418_2?t=1473072943&h=bjFPrVWywxr9AGLoKvR2YA==';
		
	</body>
</html>