<?php
/**
 * Slideshow Application - Front Controller
 */

defined('IN_WITY') or die('Access denied');

/**
 * SlideshowController is the Front Controller of the Slideshow Application
 *
 * @package Apps\Slideshow\Front
 * @author Johan Dufau <johan.dufau@creatiwity.net>
 * @author Julien Blatecky <julien.blatecky@creatiwity.net>
 * @version 1.0.0-07-02-2015
 */
class SlideshowController extends WController {
	protected function block(array $params) {
		return array(
			'slides' => $this->model->getSlides(),
			'config' => $this->model->getConfig()
		);
	}
}

?>
