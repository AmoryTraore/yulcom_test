<?php

class Standard_action_example_e298ad843f53b0468b94654272ddbee0a77cc106 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    
    <section class="bg-gray">
        <div class="container">
            <div class="row pt-3 pb-3" id="immeu">
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
$array3['colPos'] = 13;
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            </div>
        </div>
        <div class="container">
            <div class="row pt-3 pb-3">
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
$array6['colPos'] = 14;
$arguments4['data'] = $array6;
$renderChildrenClosure5 = ($arguments4['data'] !== null) ? function() use ($arguments4) { return $arguments4['data']; } : $renderChildrenClosure5;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            </div>
        </div>
    </section>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};
$arguments10 = [];
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['partial'] = 'Structure/FooterContent';
$arguments10['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
    ';
return $output9;
};
$arguments7 = [];
$arguments7['name'] = NULL;
$arguments7['name'] = 'Footer';

$output0 .= '';

$output0 .= '
';

return $output0;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output15 = '';

$output15 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$arguments16 = [];
$arguments16['name'] = NULL;
$arguments16['name'] = 'Default';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output15 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
    
    <section class="bg-gray">
        <div class="container">
            <div class="row pt-3 pb-3" id="immeu">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
$arguments21 = [];
$arguments21['data'] = NULL;
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array23 = [];
$array23['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array23['colPos'] = 13;
$arguments21['data'] = $array23;
$renderChildrenClosure22 = ($arguments21['data'] !== null) ? function() use ($arguments21) { return $arguments21['data']; } : $renderChildrenClosure22;
$output20 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
            </div>
        </div>
        <div class="container">
            <div class="row pt-3 pb-3">
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
$array26['colPos'] = 14;
$arguments24['data'] = $array26;
$renderChildrenClosure25 = ($arguments24['data'] !== null) ? function() use ($arguments24) { return $arguments24['data']; } : $renderChildrenClosure25;
$output20 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output20 .= '
            </div>
        </div>
    </section>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
$output29 = '';

$output29 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
$arguments30 = [];
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'Structure/FooterContent';
$arguments30['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
    ';
return $output29;
};
$arguments27 = [];
$arguments27['name'] = NULL;
$arguments27['name'] = 'Footer';

$output20 .= '';

$output20 .= '
';
return $output20;
};
$arguments18 = [];
$arguments18['name'] = NULL;
$arguments18['name'] = 'Main';

$output15 .= '';

$output15 .= '

';

return $output15;
}


}
#