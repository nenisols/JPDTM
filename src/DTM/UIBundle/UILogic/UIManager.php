<?php

namespace DTM\UIBundle\UILogic;

use Symfony\Component\HttpKernel\Config\FileLocator;

/**
 * UIManager handles the UI Data that is required to use in the twig files to render
 */
class UIManager {
	private $context;
	private $map;
	private $fileLocator;
	private $username;
	/**
	 * set userinformation and user context (roles)
	 */
	public function __construct($fileLocator) {
		$this->fileLocator = $fileLocator;
		$this->initialize();
	}
	public function initialize() {
		$this->addDataProvider(new MenuDataProvider($this->fileLocator));
	}

	public function setContext($ct) {
		$this->context = $ct;
	}
	/**
	 * @param type $name
	 */
	public function setUserName($name) {
		$this->username = $name;
		return $this;
	}
	/**
	 * @return type
	 */
	public function getUserName() {
		return $this->username;
	}
	public function addDataProvider($provider) {
		$this->map[$provider->getName()] = $provider;
	}
	public function getData($provider) {
		if ($this->map[$provider] != null) {
			$data = $this->map[$provider]->getData($this->context);
			return $data;
		}
		throw new Exception("no data provider for:" . $provider);
	}

}