<?php

namespace Concrete\Package\KhConsultationTimeTable;
use Package;
use BlockType;
use Loader;
use SinglePage;
use User;
use Page;
use UserInfo;
use Exception;
use \Concrete\Core\Block\BlockController;

defined('C5_EXECUTE') or die(_("Access Denied."));

class controller extends Package {

	protected $pkgHandle = 'kh_consultation_time_table';
	protected $appVersionRequired = '5.7.4.2';
	protected $pkgVersion = '0.1';
	
	public function getPackageName() {
		return t('Consultation Time Table');
	}
	
	public function getPackageDescription() {
		return t('Easy to make consultationt time table');
	}
	
	public function install() {
		$pkg = parent::install();
    BlockType::installBlockTypeFromPackage('consultation_time_table', $pkg);
	}
	
/*
  public function registerAssets()
  {
    $this->requireAsset('javascript', 'jquery');
  }
*/
}