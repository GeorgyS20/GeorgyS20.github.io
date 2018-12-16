var share = {

	whatsApp: function($this){

		var data = share.data($this);

		if(data){

			var url  = "http://www.facebook.com/sharer.php?s=100";
				url += "&p[title]="     + encodeURIComponent(data.title);
				url += "&p[summary]="   + encodeURIComponent(data.text);
				url += "&p[url]="       + encodeURIComponent(data.url);
				url += "&p[images][0]=" + encodeURIComponent(data.img);

			share.popup(url);
		};

		return false;
	},
	data: function($this){

		if($this){

			return $.parseJSON($this.parent("div").attr("data-share-data"));
		};

		return false;
	},
	popup: function(url){

		window.open(url, "", "toolbar=0, status=0, width=626, height=436");

		return false;
	}
};