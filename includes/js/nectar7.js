/* NECTAR7 JS */

(function($){

	sealBlow('d997de06-2109-49fa-a5ad-0a499dc0e503');

	function sealBlow(ANS_customer_id){
		var sealHtml = '';
		var ANSVerificationURL = "https://verify.authorize.net/anetseal/";  // String must start with "//" and end with "/"
		var AuthorizeNetSeal = 
		{
			verification_parameters: "",
			id_parameter_name:       "pid",
			url_parameter_name:      "rurl",
			seal_image_file:         (ANSVerificationURL + "images/secure90x72.gif"),
			seal_width:              "90",
			seal_height:             "72",
			seal_alt_text:           "Authorize.Net Merchant - Click to Verify",
			display_url:             "http://www.authorize.net/",
			text_color:              "black",
			text_size:               "9px",
			line_spacing:            "10px",
			new_window_height:       "430",
			new_window_width:        "600",
			current_url:             "",
			display_location:        true,
			no_click:                false,
			debug:                   false
		};

		sealHtml += '<style type="text/css">';
		sealHtml += 'div.AuthorizeNetSeal{text-align:center;margin:0;padding:0;width:' + AuthorizeNetSeal.seal_width + 'px;font:normal ' + AuthorizeNetSeal.text_size + ' arial,helvetica,san-serif;line-height:' + AuthorizeNetSeal.line_spacing + ';}';
		sealHtml += 'div.AuthorizeNetSeal a{text-decoration:none;color:' + AuthorizeNetSeal.text_color + ';}';
		sealHtml += 'div.AuthorizeNetSeal a:visited{color:' + AuthorizeNetSeal.text_color + ';}';
		sealHtml += 'div.AuthorizeNetSeal a:active{color:' + AuthorizeNetSeal.text_color + ';}';
		sealHtml += 'div.AuthorizeNetSeal a:hover{text-decoration:underline;color:' + AuthorizeNetSeal.text_color + ';}';
		sealHtml += 'div.AuthorizeNetSeal a img{border:0px;margin:0px;text-decoration:none;}';
		sealHtml += '</style>';

		if( ANS_customer_id !== undefined )
		{
			AuthorizeNetSeal.verification_parameters = '?' + AuthorizeNetSeal.id_parameter_name + '=' + escape( ANS_customer_id );
			if( window.location.href )
			{
				AuthorizeNetSeal.current_url = window.location.href;
			}
			else if( document.URL )
			{
				AuthorizeNetSeal.current_url = document.URL;
			}

			if( AuthorizeNetSeal.current_url )
			{
				AuthorizeNetSeal.verification_parameters += '&' + AuthorizeNetSeal.url_parameter_name + '=' + escape( AuthorizeNetSeal.current_url );
			}

			if( !AuthorizeNetSeal.no_click )
			{
				sealHtml += '<a ';
				sealHtml += 'href="' + ANSVerificationURL  + AuthorizeNetSeal.verification_parameters + '" ';
				if( !AuthorizeNetSeal.debug )
				{
					sealHtml += 'onMouseOver="window.status=\'' + AuthorizeNetSeal.display_url + '\'; return true;" ';
					sealHtml += 'onMouseOut="window.status=\'\'; return true;" ';
					sealHtml += 'onClick="window.open(\'' + ANSVerificationURL + AuthorizeNetSeal.verification_parameters + '\',\'AuthorizeNetVerification\',\'';
					sealHtml += 'width=' + AuthorizeNetSeal.new_window_width;
					sealHtml += ',height=' + AuthorizeNetSeal.new_window_height;
					sealHtml += ',dependent=yes,resizable=yes,scrollbars=yes';
					sealHtml += ',menubar=no,toolbar=no,status=no,directories=no';
					if( AuthorizeNetSeal.display_location )
					{
						sealHtml += ',location=yes';
					}
					sealHtml += '\'); return false;" ';
				}
				sealHtml += 'target="_blank"';
				sealHtml += '>';
			}

			sealHtml += '<img src="' + AuthorizeNetSeal.seal_image_file + '" width="' + AuthorizeNetSeal.seal_width + '" height="' + AuthorizeNetSeal.seal_height + '" border="0" alt="' + AuthorizeNetSeal.seal_alt_text + '">';

			if( !AuthorizeNetSeal.no_click )
			{
				sealHtml += '</a>';
			}

			var i = 0;
			var seals = document.getElementsByClassName('ANS-sealPlaceholder');
			if(seals.length > 0 ){;
				do{
					seals[i].innerHTML = sealHtml;
				}
				while(++i < seals.length);
			}
		}
    }

})(jQuery);
