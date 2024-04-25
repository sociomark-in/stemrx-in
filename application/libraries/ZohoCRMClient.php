<?php

class ZohoCRMClient
{
	public $access_token;

	public function __construct()
	{
		$this->access_token = null;
	}

	private function init(): string
	{
		$post_url = "https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.1bc82f1650a42a19e895de426c70e6b5.d9efbf43617307b47610a2a0ebcf9d20&client_id=1000.LS1L5JSPWQLWP14Y9LPPEIAWVONQ3G&client_secret=aac1f2e3098015d9c54f070825af61cd509f327526&grant_type=refresh_token";

		$curl = curl_init($post_url);

		curl_setopt($curl, CURLOPT_URL, $post_url);
		// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_POST, true);
		//curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post_data) );
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		$zoho_oauth_response = json_decode(curl_exec($curl), true);

		curl_close($curl);
		return $zoho_oauth_response['access_token'];
	}

	public function generate_lead($form_data)
	{
		$this->access_token = $this->init();

		$post_url = "https://www.zohoapis.com/crm/v6/Leads";

		$curl = curl_init($post_url);

		$headers = array(
			'Content-Type: application/json',
			'Authorization: Zoho-oauthtoken ' . $this->access_token
		);
		//curl_setopt($curl, CURLOPT_USERPWD, "username":"Password");
		curl_setopt($curl, CURLOPT_URL, $post_url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_POST, true);
		$post_data =
			[
				"data" => [
					$form_data
				]

			];
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post_data));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		$zoho_post_response = json_decode(curl_exec($curl), true);


		if (key_exists('status', $zoho_post_response) && key_exists('code', $zoho_post_response)) {
			if ($zoho_post_response['status'] == 'error') {
				$this->generate_lead();
			} else {
				return false;
			}
		} else {
			return true;
		}
	}
}
