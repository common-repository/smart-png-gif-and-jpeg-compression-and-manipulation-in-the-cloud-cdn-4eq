jQuery(function($) {
    $(document).ready(function(){
            $('#insert-my-media-scmc4').click(open_media_window_scmc4);
        });

    function open_media_window_scmc4() {
		
		
		
 if (this.window === undefined) {
        this.window = wp.media({
                title: 'Insert a media',
                library: {type: 'image'},
                multiple: false,
                button: {text: 'Insert'}
            });

        var self = this; // Needed to retrieve our variable in the anonymous function below
        this.window.on('select', function() {
                var first = self.window.state().get('selection').first().toJSON();
             //   wp.media.editor.insert('[myshortcode id="' + first.id + '"]');			
		// var href = myScript.pluginsUrl + 'other/index2.php';
		var href='http://img.4eq.ir/api.php?img='+first.url ;
            window.open(href, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=100%,width=447,height=761");
			
			
  var str = first.url ;
  var res = str.split("/");  
  var fruits = res;
  var str= fruits.join("__");
  var res = str.split(":");  
  var fruits = res;
  var ournewurl = fruits.join("-");			
						
                wp.media.editor.insert('<img src="'+'http://img.4eq.ir/images/'+ournewurl+'" alt="'+first.alt+'" height="'+first.height+'" width="'+first.width+'">');
				
            });
    }

    this.window.open();
    return false;  		
		
		
		
		
		
		
		
		
		
    }
});