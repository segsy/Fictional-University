<div class="wrap">
			<h1 class="wp-heading-inline">AddOns</h1>
			<hr class="wp-header-end">
			<div class="theme-browser rendered">
				<div class="themes wp-clearfix">
					<?php

$response = wp_remote_get( 'https://infotheme.net/wp-backend-view-modules/' );
$http_code = wp_remote_retrieve_response_code( $response );
						if($http_code == 200){
							if(isset($response['body'])){
								print_r($response['body']);

							}
							
						}
					?>
			
	</div>
</div>	
</div>	