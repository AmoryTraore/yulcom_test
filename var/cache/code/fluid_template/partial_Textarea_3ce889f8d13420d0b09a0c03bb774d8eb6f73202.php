<?php

class partial_Textarea_3ce889f8d13420d0b09a0c03bb774d8eb6f73202 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};
$arguments8 = [];
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['aria'] = NULL;
$arguments8['name'] = NULL;
$arguments8['value'] = NULL;
$arguments8['property'] = NULL;
$arguments8['autofocus'] = NULL;
$arguments8['rows'] = NULL;
$arguments8['cols'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['readonly'] = NULL;
$arguments8['required'] = false;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments8['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier');
$output10 = '';

$output10 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');

$output10 .= ' form-control';
$arguments8['class'] = $output10;
$arguments8['rows'] = $renderingContext->getVariableProvider()->getByPath('element.properties.rows');
$arguments8['cols'] = $renderingContext->getVariableProvider()->getByPath('element.properties.cols');
$arguments8['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute');
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};
$arguments11 = [];
$arguments11['element'] = NULL;
$arguments11['property'] = NULL;
$arguments11['renderingOptionProperty'] = NULL;
$arguments11['element'] = $renderingContext->getVariableProvider()->getByPath('element');
$arguments11['property'] = 'fluidAdditionalAttributes';
$arguments8['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
    ';
return $output7;
};
$arguments4 = [];
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Field/Field';
// Rendering Array
$array6 = [];
$array6['element'] = $renderingContext->getVariableProvider()->getByPath('element');
$arguments4['arguments'] = $array6;
$arguments4['contentAs'] = 'elementContent';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = [];
$arguments1['renderable'] = NULL;
$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('element');

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#