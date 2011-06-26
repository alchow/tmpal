<!doctype html> 
<html> 
    <head> 
        <meta charset="UTF-8" /> 
        <title>jQTouch &beta;</title> 
        <style type="text/css" media="screen">@import "jqtouch/jqtouch.css";</style> 
        <style type="text/css" media="screen">@import "themes/apple/theme.css";</style> 
        <script src="jqtouch/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script> 
        <script src="jqtouch/jqtouch.js" type="application/x-javascript" charset="utf-8"></script> 
		<link rel="stylesheet"  href="style/gallery.css" /> 
        <script type="text/javascript" charset="utf-8"> 
            var jQT = new $.jQTouch({
                icon: 'jqtouch.png',
                addGlossToIcon: false,
                startupScreen: 'jqt_startup.png',
                statusBar: 'black',
                preloadImages: [
                    '/themes/jqt/img/back_button.png',
                    '/themes/jqt/img/back_button_clicked.png',
                    '/themes/jqt/img/button_clicked.png',
                    '/themes/jqt/img/grayButton.png',
                    '/themes/jqt/img/whiteButton.png',
                    '/themes/jqt/img/loading.gif'
                    ]
            });
            // Some sample Javascript functions:
            $(function(){
                // Show a swipe event on swipe test
                $('#swipeme').swipe(function(evt, data) {                
                    $(this).html('You swiped <strong>' + data.direction + '</strong>!');
                });
                $('a[target="_blank"]').click(function() {
                    if (confirm('This link opens in a new window.')) {
                        return true;
                    } else {
                        $(this).removeClass('active');
                        return false;
                    }
                });
            });
        </script> 
        <style type="text/css" media="screen"> 
            body.fullscreen #home .info {
                display: none;
            }
            #about {
                padding: 100px 10px 40px;
                text-shadow: rgba(255, 255, 255, 0.3) 0px -1px 0;
                font-size: 13px;
                text-align: center;
                background: #161618;
            }
            #about p {
                margin-bottom: 8px;
            }
            #about a {
                color: #fff;
                font-weight: bold;
                text-decoration: none;
            }
        </style> 
    </head> 
    <body> 
		<body>
		        <div id="home">
		            <div class="toolbar">
		                <h1>TaskMan</h1>
						<a href="#info" class="button leftButton flip">Info</a>
					    <a href="#add" class="button add slideup">+</a>		
		            </div>
					
					<ul id="tasks">
						<?
						for($i=0; $i < 40; $i++){
							echo('<li class="arrow">');
							echo('<img class="long_thumbs" src="img/pic'.($i%5+1).'.png"/>');
							//echo('<a href="">pic'.$i.'</a> ');
							echo("</li>");
						}
						?>
					</ul>
		
		        </div>
		</body>
</html>
