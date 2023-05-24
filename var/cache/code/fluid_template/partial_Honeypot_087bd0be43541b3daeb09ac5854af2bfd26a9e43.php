<?php

class partial_Honeypot_087bd0be43541b3daeb09ac5854af2bfd26a9e43 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
$arguments17 = [];
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['aria'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['respectSubmittedDataValue'] = true;
$arguments17['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments17['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier');
// Rendering Array
$array19 = [];
$array19['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments17['additionalAttributes'] = $array19;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
    ';
return $output16;
};
$arguments14 = [];

$output13 .= '';

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};
$arguments23 = [];
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['aria'] = NULL;
$arguments23['name'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['autofocus'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['maxlength'] = NULL;
$arguments23['readonly'] = NULL;
$arguments23['size'] = NULL;
$arguments23['placeholder'] = NULL;
$arguments23['pattern'] = NULL;
$arguments23['errorClass'] = 'f3-form-error';
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['required'] = false;
$arguments23['type'] = 'text';
$arguments23['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments23['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier');
$arguments23['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');
// Rendering Array
$array25 = [];
$array25['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$array25['aria-hidden'] = 'true';
$arguments23['additionalAttributes'] = $array25;
$arguments23['tabindex'] = -1;
$arguments23['style'] = $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute');

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
    ';
return $output22;
};
$arguments20 = [];
$arguments20['if'] = NULL;

$output13 .= '';

$output13 .= '
';
return $output13;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = [];
$array11['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.renderAsHiddenField');

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};
$arguments4 = [];
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['aria'] = NULL;
$arguments4['name'] = NULL;
$arguments4['value'] = NULL;
$arguments4['property'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['respectSubmittedDataValue'] = true;
$arguments4['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments4['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier');
// Rendering Array
$array6 = [];
$array6['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments4['additionalAttributes'] = $array6;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
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
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['pattern'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['required'] = false;
$arguments8['type'] = 'text';
$arguments8['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$arguments8['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier');
$arguments8['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');
// Rendering Array
$array10 = [];
$array10['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier');
$array10['aria-hidden'] = 'true';
$arguments8['additionalAttributes'] = $array10;
$arguments8['tabindex'] = -1;
$arguments8['style'] = $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute');

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
    ';
return $output7;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#