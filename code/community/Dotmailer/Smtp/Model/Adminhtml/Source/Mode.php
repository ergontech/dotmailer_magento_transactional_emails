<?php
class Dotmailer_Smtp_Model_Adminhtml_Source_Mode
{
	public function toOptionArray()
	{
		return array(
			'smtp' => Mage::helper('dotmailer_smtp')->__('SMTP')
			//'api' => Mage::helper('dotmailer_smtp')->__('API')
		);

	}
}