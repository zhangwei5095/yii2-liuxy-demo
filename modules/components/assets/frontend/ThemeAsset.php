<?php
/**
 * Created by PhpStorm.
 * User: liu
 * Date: 2015/12/26
 * Time: 20:22
 */

namespace modules\components\assets\frontend;

use Yii;
use liuxy\frontend\assets\AbstractAsset;

class ThemeAsset extends AbstractAsset {
    protected $plugin_css = [
        'css/animate.css',
        'css/theme.css'
    ];

    public function init()
    {
        $this->sourcePath = '@webroot/themes/'.Yii::$app->getView()->theme->template;
        parent::init(); // TODO: Change the autogenerated stub
    }
    /**
     * @inheritdoc
     */
    protected $plugin_depends = [
        'modules\components\assets\frontend\BaseScriptAsset'
    ];
}