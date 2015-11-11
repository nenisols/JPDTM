<?php
/**
 * @author Vani Godugula <vani.godugula@directenergy.com>
 */
namespace DTM\UIBundle\UILogic;
use Symfony\Component\HttpKernel\Config\FileLocator;
use Symfony\Component\Yaml\Parser;

/**
 * for dynamic menu buttons display
 */
class MenuDataProvider {
	private $name;
	private $fileName;
	private $fileLocator;
	/**
	 * summary
	 */
	public function __construct(FileLocator $fileLocator) {
		$this->name = "Menu";
		$this->fileName = "@DTMUIBundle/Resources/config/uiconfig.yml";
		$this->fileLocator = $fileLocator;
	}
	//get User roles for appropriate menu display
	public function getData($context) {

		$yaml = new Parser();
		try
		{
			$flNm = $this->fileLocator->locate($this->fileName);
			$value = $yaml->parse(file_get_contents($flNm));

		} catch (ParseException $e) {
			printf("unable to parse the YAML string: %s", $e->getMessage());
		}
		if ($context == "ROLE_USER") {
			return $value["ROLE_USER"]["menu"];

		} else if ($context == "ROLE_ADMIN") {
			return $value["ROLE_ADMIN"]["menu"];
		} else {
			return $value["ROLE_ANONYMOUS"]["menu"];
		}
	}
	public function getName() {
		return $this->name;
	}
}