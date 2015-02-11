<?php
class Dotmailer_Smtp_Model_Adminhtml_Source_Port
{

	public function toOptionArray()
	{
		return array(
				'25' => Mage::helper('dotmailer_smtp')->__("25"),
				'2525' => Mage::helper('dotmailer_smtp')->__("2525"),
				'587' => Mage::helper('dotmailer_smtp')->__("587")
		);


	}
}