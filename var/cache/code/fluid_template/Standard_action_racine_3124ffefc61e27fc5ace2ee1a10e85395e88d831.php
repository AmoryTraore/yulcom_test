<?php

class Standard_action_racine_3124ffefc61e27fc5ace2ee1a10e85395e88d831 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
   
    <section class="hero-area">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
$arguments1 = [];
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = [];
$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array3['colPos'] = 0;
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </section>
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};
$arguments4 = [];
$arguments4['data'] = NULL;
$arguments4['typoscriptObjectPath'] = NULL;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$arguments4['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array6 = [];
$array6['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array6['colPos'] = 1;
$arguments4['data'] = $array6;
$renderChildrenClosure5 = ($arguments4['data'] !== null) ? function() use ($arguments4) { return $arguments4['data']; } : $renderChildrenClosure5;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            </div>
           

        </div>
    </section>
    <section class="south-testimonials-area section-padding-100 bg-gray">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
$arguments7 = [];
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array9 = [];
$array9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array9['colPos'] = 2;
$arguments7['data'] = $array9;
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </div>
    </section>
   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
$arguments13 = [];
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['debug'] = true;
$arguments13['partial'] = 'Structure/FooterContent';
$arguments13['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
    ';
return $output12;
};
$arguments10 = [];
$arguments10['name'] = NULL;
$arguments10['name'] = 'Footer';

$output0 .= '';

$output0 .= '
';

return $output0;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output15 = '';

$output15 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$arguments16 = [];
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Structure/FooterContent';
$arguments16['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
    ';

return $output15;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output18 = '';

$output18 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
$arguments19 = [];
$arguments19['name'] = NULL;
$arguments19['name'] = 'Default';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output18 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
   
    <section class="hero-area">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
$arguments24 = [];
$arguments24['data'] = NULL;
$arguments24['typoscriptObjectPath'] = NULL;
$arguments24['currentValueKey'] = NULL;
$arguments24['table'] = '';
$arguments24['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array26 = [];
$array26['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array26['colPos'] = 0;
$arguments24['data'] = $array26;
$renderChildrenClosure25 = ($arguments24['data'] !== null) ? function() use ($arguments24) { return $arguments24['data']; } : $renderChildrenClosure25;
$output23 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
    </section>
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};
$arguments27 = [];
$arguments27['data'] = NULL;
$arguments27['typoscriptObjectPath'] = NULL;
$arguments27['currentValueKey'] = NULL;
$arguments27['table'] = '';
$arguments27['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = [];
$array29['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array29['colPos'] = 1;
$arguments27['data'] = $array29;
$renderChildrenClosure28 = ($arguments27['data'] !== null) ? function() use ($arguments27) { return $arguments27['data']; } : $renderChildrenClosure28;
$output23 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output23 .= '
            </div>
           

        </div>
    </section>
    <section class="south-testimonials-area section-padding-100 bg-gray">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
$arguments30 = [];
$arguments30['data'] = NULL;
$arguments30['typoscriptObjectPath'] = NULL;
$arguments30['currentValueKey'] = NULL;
$arguments30['table'] = '';
$arguments30['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array32 = [];
$array32['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array32['colPos'] = 2;
$arguments30['data'] = $array32;
$renderChildrenClosure31 = ($arguments30['data'] !== null) ? function() use ($arguments30) { return $arguments30['data']; } : $renderChildrenClosure31;
$output23 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output23 .= '
        </div>
    </section>
   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
$output35 = '';

$output35 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};
$arguments36 = [];
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['partial'] = 'Structure/FooterContent';
$arguments36['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
    ';
return $output35;
};
$arguments33 = [];
$arguments33['name'] = NULL;
$arguments33['name'] = 'Footer';

$output23 .= '';

$output23 .= '
';
return $output23;
};
$arguments21 = [];
$arguments21['name'] = NULL;
$arguments21['name'] = 'Main';

$output18 .= '';

$output18 .= '

';

return $output18;
}


}
#