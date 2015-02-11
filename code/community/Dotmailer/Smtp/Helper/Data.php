<?php
class Dotmailer_Smtp_Helper_Data extends Mage_Core_Helper_Abstract
{

	const XML_PATH_DOTMAILER_SMTP_ENABLED   = 'connector_transactional_emails/dotmailer_smtp/enabled';
	const XML_PATH_DOTMAILER_SMTP_HOST      = 'connector_transactional_emails/dotmailer_smtp/host';
	const XML_PATH_DOTMAILER_SMTP_USERNAME  = 'connector_transactional_emails/dotmailer_smtp/username';
	const XML_PATH_DOTMAILER_SMTP_PASSWORD  = 'connector_transactional_emails/dotmailer_smtp/password';
	const XML_PATH_DOTMAILER_SMTP_PORT      = 'connector_transactional_emails/dotmailer_smtp/port';
	const XML_PATH_DOTMAILER_SMTP_DEBUG     = 'connector_transactional_emails/dotmailer_smtp/debug';


	public function isEnabled()
	{
		return Mage::getStoreConfigFlag(self::XML_PATH_DOTMAILER_SMTP_ENABLED);

	}
	public function getSmtpHost()
	{

		return Mage::getStoreConfig(self::XML_PATH_DOTMAILER_SMTP_HOST);

	}

	public function getSmtpUsername()
	{
		return Mage::getStoreConfig(self::XML_PATH_DOTMAILER_SMTP_USERNAME);

	}

	public function getSmtpPassword()
	{
		return Mage::getStoreConfig(self::XML_PATH_DOTMAILER_SMTP_PASSWORD);

	}

	public function getSmtpPort()
	{
		return Mage::getStoreConfig(self::XML_PATH_DOTMAILER_SMTP_PORT);

	}

	public function isDebugEnabled()
	{
		return Mage::getStoreConfigFlag(self::XML_PATH_DOTMAILER_SMTP_DEBUG);
	}


	public function getTransport()
	{
		$config = array(
			'port' =>$this->getSmtpPort(),
			'auth' => 'login',
			'username' => $this->getSmtpUsername(),
			'password' => $this->getSmtpPassword(),
			'ssl' => 'tls'
		);

		if ($this->isDebugEnabled())
			Mage::log('Mail transport config : '. implode(',', $config));

		$transport = new Zend_Mail_Transport_Smtp($this->getSmtpHost(), $config);
		return $transport;
	}
}