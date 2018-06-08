<?php

include_once(__DIR__ . '/../modules/seo/redirects/redirects.php');

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');
defined('YII_CONSOLE') or define('YII_CONSOLE', true);
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');
\Yii::$classMap = \yii\helpers\ArrayHelper::merge(Yii::$classMap, [
    'app\modules\shop\ShopModule' => '@app/web/theme/module/modules/shop/ShopModule.php',
    'app\modules\shop\helpers\BaseOrderStageHandlers' => '@app/web/theme/module/modules/shop/helpers/BaseOrderStageHandlers.php',
    'app\modules\shop\helpers\PriceHelper' => '@app/web/theme/module/modules/shop/helpers/PriceHelper.php',
    'app\modules\shop\models\PaymentType' => '@app/web/theme/module/modules/shop/models/PaymentType.php',
    'app\modules\shop\models\Product' => '@app/web/theme/module/modules/shop/models/Product.php',
    'app\modules\shop\models\Category' => '@app/web/theme/module/modules/shop/models/Category.php',
    'app\modules\shop\models\ConfigConfigurationModel' => '@app/web/theme/module/modules/shop/models/ConfigConfigurationModel.php',
    'app\modules\shop\models\Order' => '@app/web/theme/module/modules/shop/models/Order.php',
    'app\modules\shop\controllers\CartController' => '@app/web/theme/module/modules/shop/controllers/CartController.php',
    'app\modules\shop\controllers\ProductController' => '@app/web/theme/module/modules/shop/controllers/ProductController.php',
    'app\modules\user\models\LoginForm' => '@app/web/theme/module/modules/user/models/LoginForm.php',
    'app\modules\user\controllers\UserController' => '@app/web/theme/module/modules/user/controllers/UserController.php',
    'app\backend\assets\BackendAsset' => '@app/web/theme/module/backend/assets/BackendFixAsset.php',
    'app\modules\shop\controllers\BackendCategoryController' => '@app/web/theme/module/modules/shop/controllers/BackendCategoryController.php',
    'app\modules\shop\controllers\BackendProductController' => '@app/web/theme/module/modules/shop/controllers/BackendProductController.php',
    'app\modules\image\widgets\ImageDropzone' => '@app/web/theme/module/modules/image/widgets/ImageDropzone.php',
]);

(new yii\web\Application($config))->run();