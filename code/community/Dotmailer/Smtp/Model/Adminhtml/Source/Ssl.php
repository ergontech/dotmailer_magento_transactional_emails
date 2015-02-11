<?php
class Dotmailer_Smtp_Model_Adminhtml_Source_Ssl
{
	public function toOptionArray()
	{
		return array(
			'no' => Mage::helper('dotmailer_smtp')->__('No SSL'),
			'tls' => Mage::helper('dotmailer_smtp')->__('TLS')
		);

	}
}